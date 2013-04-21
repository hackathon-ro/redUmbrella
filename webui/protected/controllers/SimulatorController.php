<?php

class SimulatorController extends Controller {

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $file = file_get_contents(Yii::app()->params->valuesPath);
        $getValues = explode(' ', $file);
        
        $allCategories = ProductCategory::model()->findAll();

        $this->render('index', array('allCategories' => $allCategories, 'getValues' => $getValues));
    }

    public function actionSaveSettings() {
        if (isset($_REQUEST['sliderValue'])) {
            //  add 0 to the remaining channels
            for ($i = 0; $i <= 7; $i++) {
                if (!isset($_REQUEST['sliderValue'][$i]) && empty($_REQUEST['sliderValue'][$i]) ) {
                    $_REQUEST['sliderValue'][$i] = 0;
                }
            }

            // sort the array
            ksort($_REQUEST['sliderValue']);

            // generate the line
            $str = implode(' ', $_REQUEST['sliderValue']);
            print_r($_REQUEST['sliderValue']);
            die;
            //file_put_contents(Yii::app()->params['valuesPath'], $str);
        }
    }

}