<div class="product-list bg-f5f5f5 topbottom-20 leftright-20 clearfix">
    <h3 class="contact-info"><?php echo Helper::t('Contact_Info'); ?></h3>
    <?php Helper::renderFlash('successContact', 'addcart-success link active block', false, 'addcart-success') ?>

    <div class="form sixcol output">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'contact-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

        <p class="note"><?php echo Helper::t('Fields_required'); ?></p>

        <?php echo $form->errorSummary($model); ?>

        <div class="row">
            <?php echo $form->labelEx($model,'name'); ?>
            <?php echo $form->textField($model,'name', array('style' => 'width: 70%;','maxlength'=>255)); ?>
            <?php echo $form->error($model,'name'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'email'); ?>
            <?php echo $form->textField($model,'email', array('style' => 'width: 70%;','maxlength'=>255)); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'subject'); ?>
            <?php echo $form->textField($model,'subject',array('style' => 'width: 70%;','maxlength'=>255)); ?>
            <?php echo $form->error($model,'subject'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'body'); ?>
            <?php echo $form->textArea($model,'body',array('style' => 'width: 92%;', 'rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'body'); ?>
        </div>

        <?php if(CCaptcha::checkRequirements()): ?>
        <div class="row">
            <?php echo $form->labelEx($model,'verifyCode'); ?>
            <div>
            <?php $this->widget('CCaptcha', array(
                'imageOptions' => array('alt' => Helper::t('verifyCode'))
            )); ?>
            <?php echo $form->textField($model,'verifyCode'); ?>
            </div>
            <div class="hint"><?php echo Helper::t('hintField'); ?></div>
            <?php echo $form->error($model,'verifyCode'); ?>
        </div>
        <?php endif; ?>

        <div class="row buttons">
            <?php echo CHtml::submitButton('Submit'); ?>
        </div>

    <?php $this->endWidget(); ?>

    </div><!-- form -->

    <div class="map sixcol last">
        <iframe src="http://mapsengine.google.com/map/embed?mid=z22EohenwnGA.kOzlbPlkTYuM" width="400" height="371"></iframe>
    </div>
</div>
