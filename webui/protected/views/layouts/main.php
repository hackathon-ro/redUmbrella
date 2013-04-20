<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>    
<?php Yii::app()->clientScript->registerCssFile( Yii::app()->clientScript->getCoreScriptUrl().'/jui/css/base/jquery-ui.css'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>SmartTime</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo Yii::app()->getBaseUrl()?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->getBaseUrl()?>/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->getBaseUrl()?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->getBaseUrl()?>/css/style.css" rel="stylesheet">
  </head>
  <body>
      <?php echo $content?> 

    <script src="<?php echo Yii::app()->getBaseUrl()?>/js/bootstrap.min.js"></script>
  </body>
</html>