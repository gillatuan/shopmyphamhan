<?php

Yii::import('zii.widgets.CPortlet');
Yii::import('Admin.models.Category');

class BannersModule extends CPortlet {
    public $position = 1;
    public $page = 1;

    public function renderContent() {
        $criteriaCate = new CDbCriteria();
        $criteriaCate->compare('status', APPROVED);
        $model = 'Banner';
        $modelBanner = Cache::model()->usingCache($model, $criteriaCate, '', false, Cache_Time, '', 1, 'getBanner-' . $this->position);

        $dataBanner = array();
        if (count($modelBanner)) {
            foreach ($modelBanner as $banner) {
                if ($this->position == $banner->position && in_array($this->page, $banner->page)) {
                    $dataBanner[] = $banner;
                }
            }
        }

        $this->render('banners', array(
            'banners' => $dataBanner,
            'position' => $this->position,
            'page' => $this->page,
            'model' => $model
        ));
    }
}