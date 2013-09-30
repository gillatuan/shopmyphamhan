<div class="addcart-success link active"></div>

<div class="twelvecol products-in-category">
    <h2> Các kết quả tìm được với từ khóa "<?php echo $kw; ?>" là: </h2>
    <?php $this->renderPartial('Shop.components.views.listProductsOnPage', array(
        'products' => $products,
        'model' => 'Products',
        'isOnIndex' => $isOnIndex
    )); ?>
</div>