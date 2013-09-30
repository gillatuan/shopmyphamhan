<?php

Yii::import('zii.widgets.CPortlet');
Yii::import('Admin.models.Category');
Yii::import('Admin.models.Products');

class ListProductsOnPage extends CPortlet {
    public $cateAlias;
    public $isOnIndex = false;
    public $tab = '';
    public $url = '';

    public function renderContent() {
        $products = $this->genCate($this->cateAlias);

        $this->render('listProductsOnPage', array(
            'products' => $products,
            'isOnIndex' => $this->isOnIndex,
            'cateAlias' => $this->cateAlias,
            'model' => 'Products'
        ));
    }

    protected function genCate($cateAlias) {
        $criteriaCate = new CDbCriteria();
        $criteriaCate->compare('alias', $cateAlias);
        $criteriaCate->compare('status', APPROVED);

        $arrayProducts = $arrData = array();
        $modelCate = Cache::model()->usingCache('Category', $criteriaCate, $cateAlias, false, Cache_Time, 1, 1, $cateAlias);

        if (!$modelCate->children) {
            $arrData = $this->processProduct($modelCate);
        }

        if (count($modelCate->children)) {
            $paging = $cateChild = array();
            foreach ($modelCate->children as $child) {
                // get the child cate to array
                $cateChild[] = $child;
            }
            // convert array child cate to string
            $data = $this->processProduct($cateChild);
            if (count($data['products'])) {
                $arrayProducts = array_merge($data['products'], $arrayProducts);
            }
            if (!empty($data['paging'])) {
                $paging = $data['paging'];
            }

            $arrData['products'] = $arrayProducts;
            $arrData['paging'] = $paging;
        }

        return $arrData;
    }

    protected function processProduct($modelCate) {
        $criteriaProducts = new CDbCriteria();
        if (!is_array($modelCate)) {
            $criteriaProducts->compare('cate_id', $modelCate->id);
            $alias = $modelCate->alias;
        } else {
            $arrayAliasChildCate = array();
            foreach ($modelCate as $childCate) {
                $criteriaProducts->compare('cate_id', $childCate->id, false, 'OR');
                $arrayAliasChildCate[] = $childCate->alias;
            }
            $alias = implode(',', $arrayAliasChildCate);
        }
        $criteriaProducts->compare('status', APPROVED);

        if ($this->tab == 'latest-items' || empty($this->tab)) {
            $orderBy = 'id DESC';
            $this->tab = 'latest-items';
        } elseif ($this->tab == 'popular-items') {
            $orderBy = 'total_buy DESC';
            $criteriaProducts->compare('is_popular', true);
        } elseif ($this->tab == 'sale-off') {
            $orderBy = 'id DESC';
            $criteriaProducts->compare('is_sale_off', true);
            $criteriaProducts->compare('discount', '> 0');
        }

        $criteriaProducts->order = $orderBy;
        if ($this->isOnIndex) {
            $criteriaProducts->compare('page', INDEX_PAGE);
            $this->tab = 'latest-items' . INDEX_PAGE;
        }
        $page = Helper::get('page') ? Helper::get('page') : 1;
        $cache['products'] = Cache::model()->usingCache('Products', $criteriaProducts, '', false, Cache_Time, '', $page, $alias . $this->tab . $this->isOnIndex);

        if (count($cache['products'])) {
            $cache['paging'] = new Paging($this->url, count($cache['products']), ITEM_PER_PAGE, $page, 5, $this->tab);

            $limit = array('begin' => $cache['paging']->begin, 'end' => $cache['paging']->rows_in_page);
            $cache['products'] = Cache::model()->usingCache('Products', $criteriaProducts, '', false, Cache_Time, $limit, $page, $alias . $this->tab . $this->isOnIndex);
        }

        return $cache;
    }
}