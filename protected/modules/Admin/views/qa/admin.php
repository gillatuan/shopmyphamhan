<?php
/* @var $this QaController */
/* @var $model Qa */

$this->breadcrumbs=array(
	'Qas'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List Qa', 'url'=>array('index')),
	array('label'=>'Create Qa', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#qa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="content-box-header">
    <h3>Quản lý Hỏi đáp</h3>
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
	'id'=>'qa-grid',
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
		array(
            'name' => 'subject',
            'value' => 'CHtml::link($data->subject, Helper::url("/Admin/qa/create", array("parent"=>$data->id)))',
            'type' => 'raw',
        ),
		'content',
        array(
            'name' => 'status',
            'value' => '"<a href=\"#\" class=\"set-status\" id=\"".$data->id."\">".($data->status == 1 ? CHtml::image(Yii::app()->theme->baseUrl."/images/log_severity1.gif","active") : CHtml::image(Yii::app()->theme->baseUrl."/images/delicon.gif","inactive"))."</a>"',
            'type' => 'raw',
            'filter' => Lookup::items('status'),
            'htmlOptions' => array('style' => 'text-align: center'),
        ),
		'full_name',
		/*'parent_id',
		'user_id',*/
		array(
			'class'=>'CButtonColumn',
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
            url:"' . Helper::url('/Admin/qa/admin') . '",
            type: "get",
            data: {"status": status, "id": $(this).attr("id"), "model": "Qa"},
            success: function(){
//                alert("Update Status is successful");
                $.fn.yiiGridView.update("qa-grid");
            }
        });
        return false;
    })
';
Helper::cs()->registerScript('set-status', $script, CClientScript::POS_END);
/*
if ($grid->dataProvider->ItemCount) {
    $this->menu[] = array('label' => 'Delete selected items', 'url'=>$this->createUrl('delete'), 'linkOptions' => array('onclick'=>'return multipleDelete("qa-grid",this.href)'));
}
Yii::app()->clientScript->registerScriptFile($this->module->basePath . '/assets/scripts/gridview.js', CClientScript::POS_BEGIN);*/
