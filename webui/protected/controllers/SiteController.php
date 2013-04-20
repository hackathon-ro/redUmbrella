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
        $max = 1024;
        $file = file_get_contents('./get_values.txt');
        $getValues = explode(' ', $file);
        
        foreach ( $getValues as $key => $value ) { /**key => sensor_channel_no from product table**/
            /**get notification_level from table**/
            $notificationLevel = Product::model()->find( 'sensor_channel_no =:sensonChannelNo', array(':sensonChannelNo' => $key) );
            if ( $notificationLevel ) {
                $makePercentage = round( ($value*100)/$max ); /**get percentage from file**/
                if ( $makePercentage <= $notificationLevel->notification_level ) { /**compare values**/
                    echo '('.$key.')'.$notificationLevel->name.' must be refilled(Level from table:'.$notificationLevel->notification_level.'; Level from file: '.$makePercentage.')<br />';
                }
            }
        }
        die;
        $this->render('getValues', array(''));
    }
}