<?php

class WebUiHelper {
    
    /*
     * Get values from file
     * @return array = (0, 0, 0, 0, 0, 0, 0, 0)
     */
    public static function parseFile()
    {
        $getValues = array();
        
        $file = file_get_contents(Yii::app()->params->valuesPath);
        $getValues = explode(' ', $file);
        
        return $getValues;
    }
}

?>
