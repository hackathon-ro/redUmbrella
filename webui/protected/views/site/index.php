<?php 
Yii::app()->clientScript->registerScript("tabMenu", "
    $('#tab-stat a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
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
                                <div class="product-box">
                                    <?php echo $product->name;?> <br />
                                    <div id="container">
                                        <div id="glass">
                                            <div id="water" style="height:150px; background-image: url('img/<?php echo Yii::app()->params->colors[ array_rand(Yii::app()->params->colors) ]; ?>');"></div>
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