<?php

class SettingsController extends Controller {

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {

        //get settings model from DB

        $modelSettings = new Settings();

        $modelProducts = new Product();

        $this->render('index', array("modelSettings" => $modelSettings, "modelProducts" => $modelProducts));
    }
    
    /**
     * This is the action used to get the info 
     * for a specific item from the settings table
     * Return JSON object with the item properties
     */

    public function actionGetSettings() {
        $item = CHttpRequest::getParam('id', null);
        $result = array();
        if ($item) {
            $modelSettingsItem = Settings::model()->findByPk($item);
            if ($modelSettingsItem) {
                $result['name'] = $modelSettingsItem->key;
                $result['value'] = $modelSettingsItem->value;
            }
        }

        echo json_encode($result);
    }

    /**
     * Update existing item from the settings table
     * Return JSON object with the success/error message
     */
    public function actionSaveSettings() {
        $item = CHttpRequest::getParam('id', null);
        $value = CHttpRequest::getParam('value', null);
        $result = array();
        if ($item) {
            $modelSettingsItem = Settings::model()->findByPk($item);
            if ($modelSettingsItem) {
                $modelSettingsItem->value = $value;
                $modelSettingsItem->save();

                $result['success'] = true;
                $result['message'] = 'The settings were saved';
            } else {
                $result['success'] = false;
                $result['message'] = 'There was an error while trying to save the settings';
            }
        } else {
            $result['success'] = false;
            $result['message'] = 'There was an error while trying to save the settings';
        }

        echo json_encode($result);
    }
    
    /**
     * Get a pecific product dedtails from the database
     * Return JSON object with the product properties
     */
    public function actionGetProduct() {
        $item = CHttpRequest::getParam('id', null);
        $result = array();
        if ($item) {
            $modelProductItem = Product::model()->findByPk($item);
            if ($modelProductItem) {
                $result['name'] = $modelProductItem->name;
                $result['treshold'] = $modelProductItem->notification_level;
                $result['channel'] = $modelProductItem->sensor_channel_no;
            }
        }

        echo json_encode($result);
    }
    /**
     * Inert/Update product details
     * Returns JSON object with eht status message
     */
    public function actionSaveProduct() {
        $item = CHttpRequest::getParam('id', null);
        $name = CHttpRequest::getParam('name', null);
        $treshold = CHttpRequest::getParam('treshold', null);
        $channel = CHttpRequest::getParam('channel', null);
        $result = array();
        if ($item) {
            $modelProductItem = Product::model()->findByPk($item);
        }else{
            $modelProductItem = new Product();
        }

        if(!is_null($name) && !is_null($treshold) && !is_null($channel)){
            
                $modelProductItem->name = $name;
                $modelProductItem->notification_level = $treshold;
                $modelProductItem->sensor_channel_no = $channel;
                $modelProductItem->id_category = 1;
                if($modelProductItem->validate()){
                    $modelProductItem->save();

                    $result['success'] = true;
                    $result['message'] = 'The product data were saved';
                }else{
                    $result['success'] = false;
                    $result['message'] = "Please check all input fields";
                }
            
        } else {
            $result['success'] = false;
            $result['message'] = 'There was an error while trying to save the product';
        }

        echo json_encode($result);
    }

}