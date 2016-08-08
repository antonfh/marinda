<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Bookings\Bookings */
/* @var $form ActiveForm */
?>
<div class="bookings-bookings">

    <?php
        $form = ActiveForm::begin([
            'id' => 'booking-form-vertical',
            'type' => ActiveForm::TYPE_VERTICAL
        ]);
    ?>

        <?= $form->field($model, 'Name') ?>
        <?= $form->field($model, 'Surname') ?>
        <?php
            echo $form->field($model, 'Email', [
            'feedbackIcon' => [
            'default' => 'envelope',
            'success' => 'ok',
            'error' => 'exclamation-sign',
            'defaultOptions' => ['class'=>'text-primary']
            ]
            ])->textInput(['placeholder'=>'Enter a valid email address...']);

        ?>

        <?php
            echo $form->field($model, 'ContactNumber', [
                'feedbackIcon' => [
                    'default' => 'phone',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                ]
            ])->textInput(['placeholder'=>'Enter a valid telephone number...']);

        ?>

        <?php
        //$form->field($model, 'KidsTotal')
        echo '<label class="control-label">Total kids</label>';

            echo Select2::widget([
                'name' => 'KidsTotal',
                'data' => [1,2,3,4,5],
                'theme' => Select2::THEME_BOOTSTRAP,
                'options' => ['placeholder' => 'Select a total ...'],
                'pluginOptions' => [
                'allowClear' => true
                ],
            ]);
        ?>
    <br />
        <?php
        echo '<label class="control-label">Booking date</label>';

            echo '<div class="well well-sm" style="background-color: #fff; width:245px">';
                echo DatePicker::widget([
                'name' => 'Date',
                'type' => DatePicker::TYPE_INLINE,
                'value' => date('Y-m-d'),
                'pluginOptions' => [
                'format' => 'yyyy-M-dd'
                ],
                'options' => [
                // you can hide the input by setting the following
                // 'class' => 'hide'
                ]
                ]);
                echo '</div>';
        ?>

        <?php

    echo $form->field($model, 'Time')->widget(TimePicker::classname(), []);
        ?>
        <?= $form->field($model, 'SpecialNotes') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- bookings-bookings -->
