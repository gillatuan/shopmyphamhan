<?php

Yii::import('zii.widgets.CPortlet');

class Reviews extends CPortlet {
    public $isOnIndex = false;
    public $isListPage = false;
    public $productId = '';

    public function renderContent() {
        $criteria = new CDbCriteria();
        $criteria->compare('status', APPROVED);
        if ($this->isOnIndex) {
            $criteria->compare('page', INDEX_PAGE);
        }
        if ($this->productId) {
            $criteria->compare('product_id', $this->productId);
        }

        $reviews = Cache::model()->usingCache('Review', $criteria, '', true, Cache_Time, '', 1, 'page_' . $this->isOnIndex . '-productId_' . $this->productId);

        $this->render('reviews', array(
            'reviews' => $reviews,
            'isListPage' => $this->isListPage
        ));
    }
}