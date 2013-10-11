<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="content-box-header">
    <h3><?php if(Helper::user()->checkAccess('Super') || Helper::user()->checkAccess('Administrators')) { ?>Quản lý User<?php } else { ?>Cập nhật thông tin<?php } ?></h3>
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
<!--        --><?php //echo Helper::renderFlash($id, $message); ?>

<?php $grid = $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'username',
        array(
            'name' => 'status',
            'value' => '"<a href=\"#\" class=\"set-status\" id=\"".$data->id."\">".($data->status == 1 ? CHtml::image(Yii::app()->theme->baseUrl."/images/log_severity1.gif","active") : CHtml::image(Yii::app()->theme->baseUrl."/images/delicon.gif","inactive"))."</a>"',
            'type' => 'raw',
            'filter' => Lookup::items('status'),
            'htmlOptions' => array('style' => 'text-align: center'),
        ),
		'email',
		'fullname',
		'phone',
		/*
		'id',
		'password',
		'address',
		'avatar',
		'created_date',
		'last_login',
		'validation_code',
		'validation_type',
		'validation_expired',
		'type',
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
                    'url'=> 'Helper::url("update", array("id" => $data->id))',
                ),
            ),
        ),
	),
)); ?>
    </div>
</div>

<?php
if (!Helper::user()->checkAccess('User')) {
    $script = '
        $("a.set-status").live("click", function(){
            status = $(this).find("img").attr("alt") == "active" ? "inactive" : "active";
            $.ajax({
                url:"' . Helper::url('/Admin/user/admin') . '",
                type: "get",
                data: {"status": status, "id": $(this).attr("id"), "model": "User"},
                success: function(){
                    $.fn.yiiGridView.update("user-grid");
                }
            });
            return false;
        })
    ';
    Helper::cs()->registerScript('set-status', $script, CClientScript::POS_END);

    if ($grid->dataProvider->ItemCount) {
        $this->menu[] = array(
            'label' => 'Delete selected items', 'url' => Helper::url('/Admin/default/deleteSelected'),
            'linkOptions' => array('onclick' => 'return multipleDelete("comment-grid",this.href, "Comment")')
        );
    }

    Helper::cs()->registerScriptFile(Helper::themeUrl() . '/js/multi-delete.js', CClientScript::POS_END);
}