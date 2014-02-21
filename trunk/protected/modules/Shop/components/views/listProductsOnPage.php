<?php if ($isOnIndex) {
    $this->controller->render('application.modules.Shop.components.views.itemlistProductWith3Col', array(
        'amountCol' => 'threecol',
        'tab' => $tab,
        'productList' => 'product-list',
        'products' => $products,
    ));
} elseif (!$isOnIndex) {
    $this->controller->render('application.modules.Shop.components.views.listProductWith4Col', array(
        'amountCol' => 'fourcol',
        'tab' => $tab,
        'productList' => 'product-list bg-f5f5f5 topbottom-20 leftright-20 clearfix',
        'products' => $products,
    ));
}