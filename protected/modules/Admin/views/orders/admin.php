<?php

/* @var $this OrderController */
/* @var $model Order */
$this->breadcrumbs = array(
    'Orders' => array('index'),
    'Manage',
);
/*$this->menu = array(
    array('label' => 'List Order', 'url' => array('index')),
    array('label' => 'Create Order', 'url' => array('create')),
);*/
Yii::app()->clientScript->registerScript('search', "

$('.search-button').click(function(){

	$('.search-form').toggle();

	return false;

});

$('.search-form form').submit(function(){

	$('#orders-grid').yiiGridView('update', {

		data: $(this).serialize()

	});

	return false;

});

");

?>

    <div class="content-box-header">
        <h3>Quản lý Sản phẩm</h3>
        <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Table</a></li>
            <!-- href must be unique and match the id of target div -->
            <li><a href="#tab2">Forms</a></li>
        </ul>
        <div class="clear"></div>
    </div><!-- End .content-box-header -->
    <div class="content-box-content">
        <div id="response"></div>
        <div class="tab-content default-tab" id="tab1">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id'           => 'orders-grid',
                'dataProvider' => $model->search(),
                'filter'       => $model,
                'afterAjaxUpdate'  => 'js:function(){
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
                            data: { "id": orderId, "value": orderValue, "attr": orderAttribute, "model": "Orders" },
                            success: function(){
                                $.fn.yiiGridView.update("orders-grid");
                            }
                        });
                        return false;
                    })
                }',
                'columns'      => array(
                    array(
                        'name'  => 'bill_to',
                        'value' => 'Yii::app()->controller->decodeParam($data->bill_to, "bill_to")',
                        'type'  => 'raw',
                        'htmlOptions' => array('style' => 'max-width: 150px;'),
                    ),
                    array(
                        'name'  => 'ship_to',
                        'value' => 'Yii::app()->controller->decodeParam($data->ship_to, "ship_to")',
                        'type'  => 'raw',
                        'htmlOptions' => array('style' => 'max-width: 130px;'),
                    ),
                    array(
                        'name'  => 'cart',
                        'value' => 'Yii::app()->controller->decodeParam($data->cart, "cart", $data->id)',
                        'type'  => 'raw',
                    ),
                    array(
                        'name'  => 'info',
                        'value' => '$data->info',
                        'type'  => 'raw',
                    ),
                    array(
                        'name'        => 'status',
                        'value'       => '"<a href=\"#\" class=\"set-status\" id=\"".$data->id."\">".($data->status == 1 ? CHtml::image(Yii::app()->theme->baseUrl."/images/log_severity1.gif","active") : CHtml::image(Yii::app()->theme->baseUrl."/images/delicon.gif","inactive"))."</a>"',
                        'type'        => 'raw',
                        'filter'      => Lookup::items('Status'),
                        'htmlOptions' => array(
                            'style' => 'text-align: center',
                            'class' => 'hidden-phone'
                        ),
                    ),
                    array(
                        'name'        => 'order_status',
                        'value'       => 'Lookup::item("Order_Status", $data->order_status) == "Thành công" || Lookup::item("Order_Status", $data->order_status) == "Hủy" ? Lookup::item("Order_Status", $data->order_status) : CHtml::dropDownList("changeValue[$data->id]", $data->order_status, Lookup::items("Order_Status"), array("class" => "changeValue order_status"))',
                        'type'        => 'raw',
                        'filter'      => Lookup::items('Order_Status'),
                        'htmlOptions' => array('style' => 'text-align: center'),
                    ),
                    array(
                        'name'  => 'create_date',
                        'value' => 'date("d-m-Y H:i:s", $data->create_date)'
                    ),
                    /*
                   array(
                       'class' => 'CButtonColumn',
                   ),
                   */
                ),
            )); ?>
        </div>
    </div>

<?php
$script = '
    $("a.set-status").live("click", function(){
        status = $(this).find("img").attr("alt") == "active" ? "inactive" : "active";
        $.ajax({
            url:"' . Helper::url('/Admin/orders/admin') . '",
            type: "get",
            data: {"status": status, "id": $(this).attr("id"), "model": "Orders"},
            success: function(){
                $.fn.yiiGridView.update("orders-grid");
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
            data: { "id": orderId, "value": orderValue, "attr": orderAttribute, "model": "Orders" },
            success: function(){
                $.fn.yiiGridView.update("orders-grid");
            }
        });
        return false;
    })
';
Helper::cs()->registerScript('set-status', $script, CClientScript::POS_END);

// script Sort
$scriptSort = '
    $("#orders-grid tr").each(function(){
        order = $(this).find("td:first input").val();
        $(this).attr("id","order_"+order);
        $(this).css("cursor", "pointer")
    });

    $("tbody").sortable({
        opacity: 0.8,
        cursor: "move",
        update: function() {
            var order = $(this).sortable("serialize") + "&update=update";
            $.post("' . Helper::url("/Admin/orders/admin") . '", order, function(theResponse){
                $.fn.yiiGridView.update("orders-grid");
            });

            return false;
        }
    });
';
Helper::cs()->registerScript('set-sort', $scriptSort, CClientScript::POS_END);

