<?php

/* @var $this CategoryController */
/* @var $model Category */
$this->breadcrumbs = array(
    'Categories' => array('index'),
    'Manage',
);
$this->menu = array(
    array(
        'label' => 'List Category',
        'url'   => array('index')
    ),
    array(
        'label' => 'Create Category',
        'url'   => array('create')
    ),
);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();

	return false;
});

$('.search-form form').submit(function(){
	$('#category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});

	return false;
});
");
?>
    <div class="content-box-header">
        <h3>Quản lý chuyên mục</h3>
        <?php Helper::renderFlash('SUCCESS_MESSAGE', 'notification SUCCESS_MESSAGE png_bg', false, 'SUCCESS_MESSAGE'); ?>
        <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Table</a></li>
            <!-- href must be unique and match the id of target div -->
            <li><a href="#tab2">Forms</a></li>
        </ul>
        <div class="clear"></div>
    </div>
    <!-- End .content-box-header -->
    <div class="content-box-content category">
        <div id="response"></div>
        <div class="tab-content default-tab" id="tab1">
            <?php if (count($model)): ?>
                <table class="items">
                    <thead>
                        <tr>
                            <th align="left">Category Name</th>
                            <th style="width: 25px;">Visible</th>
                            <th width="100">Action </th>
                        </tr>
                    </thead>
                </table>
                <ul class="items-cate">
                    <?php $this->renderNestedCategory(dirname(__FILE__) . DIRECTORY_SEPARATOR . '_item.php', $model); ?>
                </ul>
            <?php else: ?>
                <table class="items">
                    <tr class="odd">
                        <td colspan="4"><?php echo Yii::t('zii', 'Không có chuyên mục nào.'); ?></td>
                    </tr>
                </table>
            <?php endif; ?>
        </div>
    </div>

<?php
$script = '
    $("a.set-status").live("click", function(){
        var status = $(this).find("img").attr("alt") == "active" ? "inactive" : "active";
        var cateId = $(this).attr("id");
        var url = "' . Helper::url('/Admin/category/admin') . '";
        $.ajax({
            url: url,
            type: "get",
            data: {"status": status, "id": cateId, "model": "Category"},
            success: function(data){
                window.location = url;
            }
        });

        return false;
    })

    $(".delete").click(function() {
        var cateId = $(this).attr("id");
        var url = "' . Helper::url('/Admin/category/admin') . '";
        var typeAction = "deleteCategory";
        var _this = jQuery(this);

        $.ajax({
            url: url,
            type: "get",
            data: {"status": status, "id": cateId, "model": "Category", "typeAction": typeAction},
            success: function(data){
                if (data == "Success") {
                    jQuery(_this.parent().parent()).remove();
                } else {
                    alert(data);
                }
            }
        });

        return false;
    })
';
Helper::cs()->registerScript('set-status', $script, CClientScript::POS_END);
$scriptSort = '
        $("#category-grid tr").each(function(){
            order = $(this).find("td:first input").val();
            $(this).attr("id","category_"+order);
            $(this).css("cursor", "pointer")
        });

        $("tbody").sortable({
            opacity: 0.8, cursor: "move", update: function() {
                var order = $(this).sortable("serialize") + "&update=update";
                $.post("' . Helper::url("/Admin/category/admin") . '", order, function(theResponse){
                    $.fn.yiiGridView.update("category-grid");
                });

                return false;
            }
        });
    ';
Helper::cs()->registerScript('set-sort', $scriptSort, CClientScript::POS_END);
