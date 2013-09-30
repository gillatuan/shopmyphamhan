<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $comments,
    /*'viewData' => array(
        'isListPage' => $isListPage
    ),*/
    'emptyText' => 'Chưa có câu hỏi nào',
    'itemView' => 'renderQA',
    'summaryText' => '',
    'pager' => array(
        'class' => 'CLinkPager',
        'cssFile' => false,
        'header' => '',
        'firstPageLabel' => '&lt;&lt;',
        'prevPageLabel' => '&lt;',
        'nextPageLabel' => '&gt;',
        'lastPageLabel' => '&gt;&gt;',
    ),
    'ajaxUpdate' => true,
    'afterAjaxUpdate' => 'js:function(id, data){}',
)); ?>