<?php

class SiteController extends Controller
{
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        $allCategories = ProductCategory::model()->findAll();
        
        $this->render('index', array('allCategories'=>$allCategories));
    }
    
    public function actionGetValues()
    {
        $arrProducts = array();
        
        $max = 1024;
        $file = file_get_contents('./get_values.txt');
        $getValues = explode(' ', $file);
        
        foreach ( $getValues as $key => $value ) { /**key => sensor_channel_no from product table**/
            /**get notification_level from table**/
            $notificationLevel = Product::model()->find( 'sensor_channel_no =:sensonChannelNo', array(':sensonChannelNo' => $key) );
            if ( $notificationLevel ) {
                $makePercentage = round( ($value*100)/$max ); /**get percentage from file**/
                if ( $makePercentage <= $notificationLevel->notification_level ) { /**compare values**/
                    //echo '('.$key.')'.$notificationLevel->name.' must be refilled(Level from table:'.$notificationLevel->notification_level.'; Level from file: '.$makePercentage.')<br />';
                    $arrProducts[] = $notificationLevel->name;
                }
            }
        }
        if ( !empty( $arrProducts ) ) {
            print_r($arrProducts);
            $text = 'Plese order the following products '.  implode(" ", $arrProducts);
            $phone = Settings::model()->find( '`key` = "phone"' );
            
            $file = dirname(__FILE__).'/../runtime/tts.txt';
            file_put_contents($file, $text);
            exec(' cat '.$file.' | text2wave -o /usr/share/asterisk/sounds/tts.ulaw -otype ulaw', $output, $err);
            exec('asterisk -rx "originate sip/'.$phone->value.' extension 10@tts-message"');
        }
        
        die;
        $this->render('getValues', array(''));
    }
    
    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                    echo $error['message'];
            else
                    $this->render('error', $error);
        }
    }
}