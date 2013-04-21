<?php
class CommonFunctions {
    
    static function checkProducts()
    {
        $arrProducts = array();
        
        $getValues = WebUiHelper::parseFile();
        
        foreach ( $getValues as $key => $value ) { /**key => sensor_channel_no from product table**/
            $notificationLevel = Product::model()->find( 'sensor_channel_no =:sensonChannelNo', array(':sensonChannelNo' => $key) ); /**get notification_level from table**/
            if ( $notificationLevel ) {
                $makePercentage = round( ($value*100)/Yii::app()->params->maxForceSensor ); /**get percentage from file**/
                if ( $makePercentage <= $notificationLevel->notification_level ) { /**compare values**/
                    $arrProducts[] = $notificationLevel->name;
                }
            }
        }
        
        return $arrProducts;
    }
    
    static function sendStringForAsterisk( $text )
    {
        $phone = Settings::model()->find( '`key` = "phone"' ); /**get phone no**/

        $file = dirname(__FILE__).'/../runtime/tts.txt';
        file_put_contents($file, $text);
        
        $command1 = ' cat ' . $file . ' | text2wave -o /usr/share/asterisk/sounds/tts.ulaw -otype ulaw';
        exec($command1, $output, $err);

        $command2 = '/usr/sbin/asterisk -rx "originate sip/' . $phone->value . ' extension 10@tts-message"';
        exec($command2, $output, $err);
    }
}
?>
