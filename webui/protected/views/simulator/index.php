<?php $this->sectionName = '<i class="icon-desktop"></i> Simulator <small>proof of concept</small>'; ?>
<?php
Yii::app()->clientScript->registerScript("tabMenu", "
    $('#tab-stat a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    
    $(function() {
        $('#slider_0').slider();
    });
");
?>
<div class="box-tab corner-all">
    <div class="box-header corner-top">
        <div class="header-control pull-right">
            <a data-box="collapse"><i class="icofont-caret-up"></i></a>
        </div>
        <ul id="tab-stat" class="nav nav-tabs">
            <?php if ($allCategories): ?>
                <?php foreach ($allCategories as $key => $category): ?>
                    <?php echo '<li ' . ( $key == 0 ? 'class="active"' : '' ) . '><a href="#category_' . $category->id . '" data-toggle="tab">' . $category->name . '</a></li>'; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <div class="box-body">
        <div class="tab-content">
            <?php if ($allCategories): ?>
                <?php foreach ($allCategories as $key => $category) : ?>
                    <div id="category_<?php echo $category->id; ?>" class="tab-pane fade <?php if ($key == 0) echo 'active'; ?> in">
                        <?php $productsForCategory = Product::getProductsByIdCategory($category->id); ?>
                        <?php if ($productsForCategory): ?>
                            <div class="row-fluid">
                                <?php foreach ($productsForCategory as $product): ?>
                                    <div class="slider" id="slider_<?php echo $product->sensor_channel_no; ?>"></div>

                                    <br />
                                    <?php echo $product->name; ?>

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
<script>
    
</script>