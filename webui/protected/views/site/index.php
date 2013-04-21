<?php $this->sectionName = '<i class="icon-home"></i> Dashboard <small>welcome to SmartTime</small>'; ?>

<script type="text/javascript" src="<?php echo Yii::app()->params->socketIoConnect; ?>/socket.io/socket.io.js"></script>
<script type="text/javascript">
    var socket = io.connect('<?php echo Yii::app()->params->socketIoConnect; ?>');
</script>

<?php 
Yii::app()->clientScript->registerScript("tabMenu", "
    $('#tab-stat a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    
    socket.on('newData', function (data) {
        $.each(data, function(index, value){
            var x = (value * ".Yii::app()->params->maxHeightCanvas.")/100;
            $('.box-channel-no-'+index+' .water').css('height', Math.round(x)+'px');
        });
    });
");
?>
<div class="box-tab corner-all">
    <div class="box-header corner-top">
        <div class="header-control pull-right">
            <a data-box="collapse"><i class="icofont-caret-up"></i></a>
        </div>
        <ul id="tab-stat" class="nav nav-tabs">
            <?php if ( $allCategories ): ?>
                <?php foreach ( $allCategories as $key => $category ): ?>
                    <?php echo '<li '.( $key == 0 ? 'class="active"' : '' ).'><a href="#category_'.$category->id.'" data-toggle="tab">'.$category->name.'</a></li>'; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <div class="box-body">
        <div class="tab-content">
            <?php if ( $allCategories ): ?>
            
                <?php foreach ( $allCategories as $key => $category ) : ?>
                    <div id="category_<?php echo $category->id; ?>" class="tab-pane fade <?php if ( $key == 0 ) echo 'active'; ?> in">
                        <?php $productsForCategory = Product::getProductsByIdCategory( $category->id ); ?>
                        <?php if ( $productsForCategory ): ?>
                            
                            <div class="row-fluid">
                            <?php foreach ( $productsForCategory as $product ): ?>
                                <?php $currentValue = ($getValues[$product->sensor_channel_no] * Yii::app()->params->maxHeightCanvas)/Yii::app()->params->maxForceSensor; ?>
                                <div class="product-box box-channel-no-<?php echo $product->sensor_channel_no; ?>">
                                    <p><?php echo $product->name;?> </p>
                                    <div class="container">
                                        <div class="glass">
                                            <div class="water" style="height:<?php echo $currentValue; ?>px; background-image: url('img/<?php echo Yii::app()->params->colors[ array_rand(Yii::app()->params->colors) ]; ?>');"></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        
                        <?php else: ?>
                            No products
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>