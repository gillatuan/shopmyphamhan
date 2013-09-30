<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#news-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="content-box-header">
    <h3>Manage Your News</h3>
    <ul class="content-box-tabs">
        <li><a href="#tab1" class="default-tab">Table</a></li>
        <!-- href must be unique and match the id of target div -->
        <li><a href="#tab2">Forms</a></li>
    </ul>
    <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
    <div class="tab-content default-tab" id="tab1">
<!--
<?php /*echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); */?>
<div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
)); */?>
</div>--><!-- search-form -->

<?php $grid = $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'news-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'selectableRows'=>2,
    'selectionChanged'=>"updateSelectors",
	'columns'=>array(
        array(
            'class'=>'CCheckBoxColumn',
            'value'=>'$data->id',
            'htmlOptions'=>array('width'=>'3%'),
        ),
		'title',
		'info',
		'image',
        array(
            'name' => 'status',
            'value' => '"<a href=\"#\" class=\"set-status\" id=\"".$data->id."\">".($data->status == 1 ? CHtml::image(Yii::app()->theme->baseUrl."/images/log_severity1.gif","active") : CHtml::image(Yii::app()->theme->baseUrl."/images/delicon.gif","inactive"))."</a>"',
            'type' => 'raw',
            'filter' => Lookup::items('status'),
            'htmlOptions' => array('style' => 'text-align: center'),
        ),
		/*
		'id',
		'alias',
		'content',
		'create_date',
		'update_date',
		'type_news',
		*/
        array(
            'class'=>'CButtonColumn',
            'template'=> '{view} {update} {delete}',
            'buttons'=>array
            (
                'update' => array
                (
                    /*'label'=>'Send an e-mail to this user',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',*/
                    'url'=> 'Helper::url("update", array("id" => $data->id, "type" => Helper::get("type")))',
                ),
            ),
        ),
	),
)); ?>
    </div>
</div>

<?php
$script = '
    $("a.set-status").live("click", function(){
        status = $(this).find("img").attr("alt") == "active" ? "inactive" : "active";
        $.ajax({
            url:"' . Helper::url('/Admin/news/admin') . '",
            type: "get",
            data: {"status": status, "id": $(this).attr("id"), "model": "News"},
            success: function(){
//                alert("Update Status is successful");
                $.fn.yiiGridView.update("news-grid");
            }
        });
        return false;
    })
';
Helper::cs()->registerScript('set-status', $script, CClientScript::POS_END);
/*
if ($grid->dataProvider->ItemCount) {
    $this->menu[] = array('label' => 'Delete selected items', 'url'=>$this->createUrl('delete'), 'linkOptions' => array('onclick'=>'return multipleDelete("news-grid",this.href)'));
}
Yii::app()->clientScript->registerScriptFile($this->module->basePath . '/assets/scripts/gridview.js', CClientScript::POS_BEGIN);*/