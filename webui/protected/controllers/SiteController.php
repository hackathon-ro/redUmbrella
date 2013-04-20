<?php

class SiteController extends Controller {

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $allCategories = ProductCategory::model()->findAll();

        $this->render('index', array('allCategories' => $allCategories));
    }
    
    public function actionGetValues()
    {
        $arrProducts = CommonFunctions::checkProducts();
        
        if ( !empty( $arrProducts ) ) {
            Order::saveNewOrder( Yii::app()->params->notificationMessage.': '.  implode("<br />", $arrProducts) ); /**save order in order table**/

            CommonFunctions::sendStringForAsterisk( Yii::app()->params->notificationMessage.' '.implode(" ", $arrProducts) );
        }

        $this->render('getValues', array());
    }
    
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

}