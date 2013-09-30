
<h2 class="product-name-by-cate"><?php echo $titleH2; ?></h2>
<div class="module-left threecol">
    <?php if (count($news)) { ?>
        <?php foreach (Lookup::items('Type_News') as $code=>$type) { ?>
        <div class="banner category-list <?php if ($code == 1) { ?>not-margin-top<?php } ?> not-padding">
            <h3><?php echo $type; ?></h3>
            <ul>
                <?php foreach ($news as $tin) { ?>
                    <?php if ($tin->type_news == $code) { ?>
                    <li><a href="<?php echo Helper::url('/Shop/product/readNews', array('newsAlias' => $tin->alias)); ?>" title="<?php echo $tin->title; ?>"><?php echo $tin->title; ?></a> </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
        <?php } ?>
    <?php } else { ?>
    <div class="banner category-list not-margin-top not-padding">
        <h3><?php echo Helper::t('NO_RESULTS_KEY'); ?></h3>
    </div>
    <?php } ?>
</div>