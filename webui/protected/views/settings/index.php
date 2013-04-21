<?php
$this->sectionName = '<i class="icon-cogs"></i> Settings <small>system configuration</small>';
?>
<div class="row-fluid">
    <div class="span6">
        <?php
        $this->widget('bootstrap.widgets.TbGridView', array(
            'type' => 'striped bordered condensed',
            'dataProvider' => $modelSettings->search(),
            'template' => "{items}",
            'columns' => array(
                array('name' => 'key', 'header' => 'Item Name'),
                array('name' => 'value', 'header' => 'Value'),
                array(
                    'class' => 'bootstrap.widgets.TbButtonColumn',
                    'htmlOptions' => array('style' => 'width: 50px'),
                    'template' => '{update}'
                ),
            ),
        ));
        ?>
    </div>

    <div class="span6">

        <?php
        $this->widget('bootstrap.widgets.TbGridView', array(
            'type' => 'striped bordered condensed',
            'dataProvider' => $modelProducts->search(),
            'template' => "{items}",
            'columns' => array(
                array('name' => 'name', 'header' => 'Product Name'),
                array('name' => 'notification_level', 'header' => 'Notification treshold'),
                array(
                    'class' => 'bootstrap.widgets.TbButtonColumn',
                    'htmlOptions' => array('style' => 'width: 50px'),
                    'template' => '{update}'
                ),
            ),
        ));
        ?>
        <a href="#modalProducts" data-toggle="modal" class="btn btn-large btn-block btn-primary" type="button" >Add product</a>
    </div>
</div>
<div class="modal hide fade" id="modalSettings">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Change Settings</h3>
    </div>
    <div class="modal-body">
        <div id="alertSettingsMessages"></div>
        <form class="form-horizontal">
            <input id="inputId" type="hidden">
            <div class="control-group">
                <label class="control-label" for="inputName">Item Name</label>
                <div class="controls">
                    <input type="text" id="inputName" placeholder="Item Name" disabled>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputValue">Value</label>
                <div class="controls">
                    <input type="text" id="inputValue" placeholder="Value">
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn btn-primary" onclick="saveSettings()">Save changes</a>
    </div>
</div>
<div class="modal hide fade" id="modalProducts">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Add Products</h3>
    </div>
    <div class="modal-body">
        <div id="alertProductsMessages"></div>
        <form class="form-horizontal">
            <input id="inputProductId" type="hidden">
            <div class="control-group">
                <label class="control-label" for="inputProductName">Product Name</label>
                <div class="controls">
                    <input type="text" id="inputProductName" placeholder="Product Name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputProductSensorChannel">Sensor Channel</label>
                <div class="controls">
                    <select id="inputProductSensorChannel">
                        <option value="0">Channel 1</option>
                        <option value="1">Channel 2</option>
                        <option value="2">Channel 3</option>
                        <option value="3">Channel 4</option>
                        <option value="4">Channel 5</option>
                        <option value="5">Channel 6</option>
                        <option value="6">Channel 7</option>
                        <option value="7">Channel 8</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputTresholdValue">Notification treshold</label>
                <div class="controls">
                    <input type="text" id="inputTresholdValue" placeholder="Value">
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn btn-primary" onclick="saveProduct()">Save changes</a>
    </div>
</div>
<script type="text/javascript">
    $("#yw0 .update").bind('click', function(){
        $("#alertSettingsMessages").html("");
        var pageHref = $(this).attr('href');
        var pageHrefParts = pageHref.split("/");
        
        $.ajax({
            url: "<?php echo Yii::app()->getBaseUrl() ?>/settings/getsettings",
            data: {id:pageHrefParts[pageHrefParts.length-1]},
            dataType:'JSON'
        }).done(function(data) {
            if(data){
                $("#inputId").val(pageHrefParts[pageHrefParts.length-1]);
                $("#inputValue").val(data.value);
                $("#inputName").val(data.name);
                $("#modalSettings").modal('show');
            }
        });
        
        return false;
    });
    
    $("#yw1 .update").bind('click', function(){
        $("#inputProductId").val("");
        $("#inputProductName").val("");
        $("#inputTresholdValue").val("");
        $("#inputProductSensorChannel").val("");
    
        $("#alertProductsMessages").html("");
        var pageHref = $(this).attr('href');
        var pageHrefParts = pageHref.split("/");
        
        $.ajax({
            url: "<?php echo Yii::app()->getBaseUrl() ?>/settings/getProduct",
            data: {id:pageHrefParts[pageHrefParts.length-1]},
            dataType:'JSON'
        }).done(function(data) {
            if(data){
                $("#inputProductId").val(pageHrefParts[pageHrefParts.length-1]);
                $("#inputProductName").val(data.name);
                $("#inputTresholdValue").val(data.treshold);
                $("#inputProductSensorChannel").val(data.channel);
                $("#modalProducts").modal('show');
            }
        });
        
        return false;
    });
    
    function saveSettings(){
 
        $.ajax({
            url: "<?php echo Yii::app()->getBaseUrl() ?>/settings/savesettings",
            data: {id:$("#inputId").val(), value:$("#inputValue").val()},
            dataType:'JSON'
        }).done(function(data) {
            if(data){

                if(data.success == true){
                    $("#alertSettingsMessages").html('<div class="alert alert-success">'+data.message+'</div>');
                }else{
                    $("#alertSettingsMessages").html('<div class="alert alert-error">'+data.message+'</div>');
                }
            }
        });
    }
    
    function saveProduct(){
 
        $.ajax({
            url: "<?php echo Yii::app()->getBaseUrl() ?>/settings/saveproduct",
            data: {id:$("#inputProductId").val(), name:$("#inputProductName").val(), channel:$("#inputProductSensorChannel").val(), treshold:$("#inputTresholdValue").val()},
            dataType:'JSON'
        }).done(function(data) {
            if(data){
                
                if(data.success == true){
                    $("#alertProductsMessages").html('<div class="alert alert-success">'+data.message+'</div>');
                }else{
                    $("#alertProductsMessages").html('<div class="alert alert-error">'+data.message+'</div>');
                }
            }
        });
    }
</script>