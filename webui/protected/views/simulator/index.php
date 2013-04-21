<?php $this->sectionName = '<i class="icon-desktop"></i> Simulator <small>proof of concept</small>'; ?>
<?php
Yii::app()->clientScript->registerScript("tabMenu", '    
    $("#form_sliders").submit(function () {
        $.ajax({
            url: "' . Yii::app()->getBaseUrl() . '/simulator/saveSettings",
            data: $(this).serialize(),
            dataType: "JSON"
        }).done(function(data) {
            alert("Setting were successfully saved!");
        });
        return false;
    });
    
    $("#send_button").click(function () {
        $.ajax({
            url: "' . Yii::app()->getBaseUrl() . '/site/getValues",
            dataType: "JSON"
        }).done(function(data) {
            alert("Order was sent!");
        });
    });
');
?>
<?php foreach ( $getValues as $key => $val ) : ?>
    <?php Yii::app()->clientScript->registerScript("sliders_".$key, "
        $('#slider_".$key."').slider({
            min: 0,
            max: ".Yii::app()->params->maxForceSensor.",
            value: ".$val.",
            slide: function( event, ui ) {
                $(this).next().val(ui.value);
            }
        });
    "); ?>
<?php endforeach; ?>
<div>
    <form method="post" action="#" id="form_sliders">
        <?php if ($allCategories): ?>
            <?php $productsForCategory = Product::model()->findAll(); ?>
            <?php if ($productsForCategory): ?>
                <div class="row-fluid">
                    <?php foreach ($productsForCategory as $product): ?>
                        <div class="span" style="margin: 9px 0px !important;">
                            <?php echo $product->name; ?><div class="slider" id="slider_<?php echo $product->sensor_channel_no; ?>"></div>
                            <input class="slider_value" type="hidden" name="sliderValue[<?php echo $product->sensor_channel_no; ?>]" id="slider_value_<?php echo $product->sensor_channel_no; ?>" value="0"/>
                        </div>
                    <?php endforeach; ?>                        
                </div>
            <?php endif; ?>
            <div class="row-fluid" style="margin: 30px 0 0 0;">
                <div class="span6">
                    <button type="submit" class="btn btn-primary">Save settings</button>
                    &nbsp;&nbsp;&nbsp;
                    <a href="#" id="send_button" class="btn btn-success">Send notification</a>
                </div>
            </div>
        <?php endif; ?>
    </form>
</div>