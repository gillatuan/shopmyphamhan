<?php $this->beginContent ('//layouts/main'); ?>
    <!--Breadcrumbs-->
    <div class="row content">
        <div class="module-left threecol">
            <div class="banner">
                <h3>Banner</h3>
                <ul>
                    <?php $this->widget('Shop.components.BannersModule', array(
                        'position' => 3,
                        'page' => 2
                    )) ?>
                </ul>
            </div>
        </div>
        <div class="products-in-category not-border-bottom not-margin-top ninecol last">
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'homeLink'    => CHtml::link('Vỏ mâm xe nâng Ngọc Thanh', Helper::url('/Shop/product/index'), array('title' => 'Vỏ mâm xe nâng Ngọc Thanh')),
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

    <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51b74b7d615c70ad"></script>

<?php $this->endContent (); ?>