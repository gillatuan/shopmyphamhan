<?php $this->beginContent ('//layouts/main'); ?>

<div class="row content top-20">
    <?php $this->widget('Shop.components.Notifications', array(
        'typeAlias' => Helper::get('cateAlias') ? 'category' : 'news',
        'alias' => Helper::get('cateAlias') ? Helper::get('cateAlias') : Helper::get('newsAlias')
    )); ?>

    <!--Breadcrumbs-->
    <div class="products-in-category not-border-bottom not-margin-top ninecol last">
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'homeLink'    => CHtml::link('Shop Mỹ Phẩm Hàn', Helper::url('/Shop/product/index'), array('title' => 'Shop Mỹ Phẩm Hàn')),
            'links'       => $this->breadcrumbs,
            'htmlOptions' => array(
                'id'    => 'PageBreadcrumb',
                'class' => 'breadcrumb'
            ),
            'separator'   => ""
        )); ?>

        <?php echo $content; ?>
    </div>
</div>

<!--JS-->
<?php Helper::cs()->registerCoreScript('jquery'); ?>
<?php Helper::cs()->registerScriptFile(Helper::themeUrl() . '/js/imgLiquid-min.js', CClientScript::POS_END); ?>
<?php Helper::cs()->registerScriptFile(Helper::themeUrl() . '/js/css3-mediaqueries.js', CClientScript::POS_END); ?>

<?php $this->endContent (); ?>
