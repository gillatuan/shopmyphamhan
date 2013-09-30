<?php

/* @var $this ProductsController */
/* @var $model Products */
$this->breadcrumbs = array(
    'Setting Params' => array('index'),
    'Manage',
);
$this->menu = array(
    array(
        'label' => 'Create Setting Params',
        'url'   => array('create')
    ),
);
Yii::app()->clientScript->registerScript('search', "

$('.search-button').click(function(){
	$('.search-form').toggle();

	return false;
});

$('.search-form form').submit(function(){
	$('#setting-params-grid').yiiGridView('update', {
		data: $(this).serialize()
	});

	return false;
});
");
?>

<?php $form = $this->beginWidget('CActiveForm', array(
    'enableAjaxValidation' => TRUE,
)); ?>

    <div class="content-box-header">
        <h3>Quản lý Setting Params</h3>
        <?php Helper::renderFlash('successMessage', 'notification successMessage png_bg', false, 'successMessage'); ?>
        <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Table</a></li>
            <!-- href must be unique and match the id of target div -->
            <li><a href="#tab2">Forms</a></li>
        </ul>
        <div class="clear"></div>
    </div>
    <!-- End .content-box-header -->
    <div class="content-box-content">
        <div id="response"></div>
        <div class="tab-content default-tab" id="tab1">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id'              => 'setting-params-grid',
                'dataProvider'    => $model->search(),
                'filter'          => $model,
                'afterAjaxUpdate' => 'js:function(){
                    /*$(".changeValue").change(function() {
                        var orderId = $(this).attr("id").replace("changeValue_", "");
                        var orderValue = $(this).val();
                        var orderAttribute = $(this).attr("class").replace("changeValue ", "");
                        if (orderAttribute == "page") {
                            orderValue = $(this).is(":checked") == true ? 1 : 0;
                        }

                        $.ajax({
                            url:"' . Helper::url('/Admin/default/ajaxUpdate') . '",
                            type: "post",
                            data: { "id": orderId, "value": orderValue, "attr": orderAttribute, "model": "SettingParams" },
                            success: function(){
                                $.fn.yiiGridView.update("setting-params-grid");
                            }
                        });
                        return false;
                    })*/
                }',

                'columns'         => array(
                    'name',
                    array(
                        'name' => 'label',
                        //                'htmlOptions' => array('class' => 'hidden-phone'),
                    ),
                    'values',
                    array(
                        'name'        => 'visible',
                        'value'       => '"<a href=\"#\" class=\"set-status\" id=\"".$data->id."\">".($data->visible == 1 ? CHtml::image(Yii::app()->theme->baseUrl."/images/log_severity1.gif","active") : CHtml::image(Yii::app()->theme->baseUrl."/images/delicon.gif","inactive"))."</a>"',
                        'type'        => 'raw',
                        'filter'      => Lookup::items('Status'),
                        'htmlOptions' => array(
                            'style' => 'text-align: center',
                            'class' => 'hidden-phone'
                        ),
                    ),
                    /*
                   'id',
                   'description',
                   */
                    array(
                        'class' => 'CButtonColumn',
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
            url:"' . Helper::url('/Admin/settingparams/admin') . '",
            type: "get",
            data: {"visible": status, "id": $(this).attr("id"), "model": "SettingParams"},
            success: function(){
                $.fn.yiiGridView.update("setting-params-grid");
            }
        });
        return false;
    })

    $(".changeValue").change(function() {
        var orderId = $(this).attr("id").replace("changeValue_", "");
        var orderValue = $(this).val();
        var orderAttribute = $(this).attr("class").replace("changeValue ", "");
        if (orderAttribute == "page") {
            orderValue = $(this).is(":checked") == true ? 1 : 0;
        }

        $.ajax({
            url:"' . Helper::url('/Admin/default/ajaxUpdate') . '",
            type: "post",
            data: { "id": orderId, "value": orderValue, "attr": orderAttribute, "model": "SettingParams" },
            success: function(){
                $.fn.yiiGridView.update("setting-params-grid");
            }
        });
        return false;
    })
';
Helper::cs()->registerScript('set-status', $script, CClientScript::POS_END);
$scriptSort = '
    $("#setting-params-grid tr").each(function(){
        order = $(this).find("td:first input").val();
        $(this).attr("id","setting-params_"+order);
        $(this).css("cursor", "pointer")
    });

    $("tbody").sortable({ opacity: 0.8, cursor: "move", update: function() {
            var order = $(this).sortable("serialize") + "&update=update";
            $.post("' . Helper::url("/Admin/settingparams/admin") . '", order, function(theResponse){
                $.fn.yiiGridView.update("setting-params-grid");
            });

            return false;
        }
    });
';
Helper::cs()->registerScript('set-sort', $scriptSort, CClientScript::POS_END);

$this->endWidget();
