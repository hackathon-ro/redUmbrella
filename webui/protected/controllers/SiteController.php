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
}