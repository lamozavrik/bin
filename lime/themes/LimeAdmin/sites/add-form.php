<?php
use yii\widgets\ActiveForm;
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <span>Panel heading without title</span>
    </div>
    <div class="clear"></div>
    <div class="panel-body">


        <?php
            $form = ActiveForm::begin([
                'id' => 'sites-form',
                'options' => [
                    'role' => 'form',
                    'class' => 'form-horizontal'
                ]
            ]);
        ?>
                <?= $form->field($model, 'url', ['options' => ['class' => 'aaa']])->label('URL') ?>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Сохранить</button>
                </div>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>