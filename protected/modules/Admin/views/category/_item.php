<table>    <tr class="<?php echo $class; ?>">        <td width="500px" class="dd-handle">            <div style="float: left; width: 70%;"><?php echo CHtml::encode($model->name); ?></div>            <div class="displayOnPage" style="text-align: right"><?php echo Helper::printArray("Display_On_Page", $model->page); ?></div>        </td>        <td width="14%" align="center" class="status-column" style="cursor: pointer;"><?php echo $model->status == 1 ? CHtml::image(Helper::themeUrl()."/images/log_severity1.gif","active", array("id" => "changeValue_$model->id", "class" => "changeValue status")) : CHtml::image(Helper::themeUrl()."/images/delicon.gif", "inactive", array("id" => "changeValue_$model->id", "class" => "changeValue status")); ?></td>        <td width="14%" align="center" class="actions-column">            <?php //echo CHtml::link('View', '#');?>            <?php echo CHtml::link('Edit', array('update', 'id' => $model->id)); ?>            <?php echo CHtml::link('Delete', array('/Admin/category/admin'),                array('class' => 'delete', 'id' => $model->id)); ?>        </td>    </tr></table><?php$script = '     $(".changeValue").bind("click", function() {        var orderId = $(this).attr("id").replace("changeValue_", "");        var orderValue = $(this).val();        var orderAttribute = $(this).attr("class").replace("changeValue ", "");        var gridName = "' . Yii::app()->controller->id .'";        var modelName = "' . ucfirst(Yii::app()->controller->id) .'";        var $this = $(this);        switch (orderAttribute) {            case "page":                orderValue = $(this).is(":checked") == true ? 1 : 0;                break;            case "is_popular":                orderValue = $(this).is(":checked") == true ? 1 : 0;                break;            case "status":                orderValue = $(this).attr("alt") == "active" ? 1 : 2;                break;        }        $.ajax({            url:"' . Helper::url('/Admin/default/ajaxUpdate') . '",            type: "post",            data: { "id": orderId, "value": orderValue, "attr": orderAttribute, "model": modelName },            success: function(){                if (orderValue == 1) {                    $this.attr("src", "' . Helper::themeUrl()."/images/delicon.gif" . '");                    $this.attr("alt", "inactive");                } else {                    $this.attr("src", "' . Helper::themeUrl()."/images/log_severity1.gif" . '");                    $this.attr("alt", "active");                }            }        });        return false;    })    $(".delete").click(function() {        var cateId = $(this).attr("id");        var url = "' . Helper::url('/Admin/category/admin') . '";        var typeAction = "deleteCategory";        var _this = jQuery(this);        $.ajax({            url: url,            type: "get",            data: {"status": status, "id": cateId, "model": "Category", "typeAction": typeAction},            success: function(data){                if (data == "Success") {                    jQuery(_this.parent().parent()).remove();                } else {                    alert(data);                }            }        });        return false;    })';Helper::cs()->registerScript('set-status', $script, CClientScript::POS_END);$scriptSort = '    $(".sortable").nestable({        opacity: 0.5    }).on("change", function(e) {        var list   = e.length ? e : $(e.target),        output = list.data("output");        var valJson = window.JSON.stringify(list.nestable("serialize"));        var url = "' . Helper::url('/Admin/category/updateNested') . '";        $.ajax({            url: url,            type: "post",            data: {"type": "updateNested", "dataNested": valJson},            success: function(data){                $("#response").html("<div class=\"label label-success span12\">Update Nested Category successfully.</div>");                setTimeout(function() {                    $("#response").fadeOut("slow");                }, 1000);            }        })    });';Helper::cs()->registerScript('set-sort', $scriptSort, CClientScript::POS_END);