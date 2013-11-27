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
        <iframe width="400" height="371" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=vi&amp;geocode=&amp;q=32%2F53%2F19+%C3%94ng+%C3%8Dch+Khi%C3%AAm,+F.14,+Qu%E1%BA%ADn+11&amp;aq=&amp;sll=10.728072,106.611926&amp;sspn=0.070838,0.077162&amp;ie=UTF8&amp;hq=&amp;hnear=32+%C3%94ng+%C3%8Dch+Khi%C3%AAm,+14,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam&amp;t=m&amp;ll=10.768176,106.645446&amp;spn=0.015641,0.017123&amp;z=15&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=vi&amp;geocode=&amp;q=32%2F53%2F19+%C3%94ng+%C3%8Dch+Khi%C3%AAm,+F.14,+Qu%E1%BA%ADn+11&amp;aq=&amp;sll=10.728072,106.611926&amp;sspn=0.070838,0.077162&amp;ie=UTF8&amp;hq=&amp;hnear=32+%C3%94ng+%C3%8Dch+Khi%C3%AAm,+14,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam&amp;t=m&amp;ll=10.768176,106.645446&amp;spn=0.015641,0.017123&amp;z=15" style="color:#0000FF;text-align:left">Xem Bản đồ cỡ lớn hơn</a></small>
    </div>
</div>
