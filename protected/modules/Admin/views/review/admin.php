<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs = array(
    'Reviews' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Create Review', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#review-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?><div class="content-box-header">
        <h3>Quản lý Nhận xét</h3>
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
    'id'           => 'review-grid',
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
                data: { "id": orderId, "value": orderValue, "attr": orderAttribute, "model": "Review" },
                success: function(){
                    $.fn.yiiGridView.update("review-grid");
                }
            });
            return false;
        })
    }',
    'columns'      => array(
        'full_name',
        array(
            'name' => 'description',
            'value' => '$data->description',
            'htmlOptions' => array('style' => 'max-width: 300px; overflow: hidden')
        ),
        'rating',
        array(
            'name' => 'page',
            'value' => 'CHtml::checkBox("changeValue[$data->id]", $data->page, array("style" => "width: 70px; padding: 2px 5px;", "class" => "changeValue page"))',
            'type'  => 'raw',
        ),
        array(
            'name'        => 'status',
            'value'       => '"<a href=\"#\" class=\"set-status\" id=\"".$data->id."\">".($data->status == 1 ? CHtml::image(Yii::app()->theme->baseUrl."/images/log_severity1.gif","active") : CHtml::image(Yii::app()->theme->baseUrl."/images/delicon.gif","inactive"))."</a>"',
            'type'        => 'raw',
            'filter'      => Lookup::items('status'),
            'htmlOptions' => array('style' => 'text-align: center'),
        ),
        /*
        'id',
        'subject',
        'ip_address',
        'create_date',
        'product_id',
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
            url:"' . Helper::url('/Admin/review/admin') . '",
            type: "get",
            data: {"status": status, "id": $(this).attr("id"), "model": "Review"},
            success: function(){
                $.fn.yiiGridView.update("review-grid");
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
            data: { "id": orderId, "value": orderValue, "attr": orderAttribute, "model": "Review" },
            success: function(){
                $.fn.yiiGridView.update("review-grid");
            }
        });
        return false;
    })
';
Helper::cs()->registerScript('set-status', $script, CClientScript::POS_END);
$scriptSort = '
    $("#review-grid tr").each(function(){
        order = $(this).find("td:first input").val();
        $(this).attr("id","review_"+order);
        $(this).css("cursor", "pointer")
    });

    $("tbody").sortable({ opacity: 0.8, cursor: "move", update: function() {
            var order = $(this).sortable("serialize") + "&update=update";
            $.post("' . Helper::url("/Admin/review/admin") . '", order, function(theResponse){
                $.fn.yiiGridView.update("review-grid");
            });

            return false;
        }
    });
';
Helper::cs()->registerScript('set-sort', $scriptSort, CClientScript::POS_END);
