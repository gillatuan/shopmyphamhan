<table class="items">    <tr class="<?php echo $class; ?>">        <td class="sort-handle"><?php echo CHtml::encode($model->name); ?></td>        <td width="50" align="center" class="status-column"><a href="#" class="set-status" id="<?php echo $model->id; ?>"><?php echo $model->status == 1 ? CHtml::image(Yii::app()->theme->baseUrl."/images/log_severity1.gif","active") : CHtml::image(Yii::app()->theme->baseUrl."/images/delicon.gif","inactive"); ?></a></td>        <td width="100" align="center" class="actions-column">            <?php //echo CHtml::link('View', '#');?>            <?php echo CHtml::link('Edit', array('update', 'id' => $model->id)); ?>            <?php echo CHtml::link('Delete', array('/Admin/category/admin'),                array('class' => 'delete', 'id' => $model->id)); ?>        </td>    </tr></table>