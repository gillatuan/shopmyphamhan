<?php

Yii::import('zii.widgets.CPortlet');
Yii::import('Admin.models.News');

class SomeNews extends CPortlet {
    public function renderContent() {
        $criteria = new CDbCriteria();
        $criteria->compare('status', APPROVED);

        $news = Cache::model()->usingCache('News', $criteria, '', false);

        $this->render('news', array(
            'news' => $news
        ));
    }
}