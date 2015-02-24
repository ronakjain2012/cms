<?php

use yii\helpers\Html;
use skeeks\cms\modules\admin\widgets\ActiveForm;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model \yii\db\ActiveRecord */
/* @var $console \skeeks\cms\controllers\AdminUserController */
?>


<?php $form = ActiveForm::begin(); ?>
<?php  ?>

<?= $form->fieldSet('Общая ниформация')?>
    <?= $form->field($model, 'username')->textInput(['maxlength' => 12]) ?>
<? if (!$model->isNewRecord) : ?>
    <?= $form->field($model, 'name')->textInput(); ?>
    <?= $form->field($model, 'city')->textInput(); ?>
    <?= $form->field($model, 'address')->textInput(); ?>
    <?= $form->field($model, 'info')->textarea(); ?>
    <?= $form->field($model, 'status_of_life')->textarea(); ?>
<? endif; ?>
<?= $form->fieldSetEnd(); ?>
<?= $form->buttonsCreateOrUpdate($model); ?>
<?php ActiveForm::end(); ?>

<? if (!$model->isNewRecord) : ?>
    <?
        $action = \skeeks\cms\helpers\UrlHelper::construct('cms/admin-user-email/create', ['user_id' => $model->id])->enableAdmin()->toString();
        $this->registerJs(<<<JS
        (function(sx, $, _)
        {
            sx.classes.CreateUserEmail = sx.classes.Component.extend({

                _init: function()
                {
                    var window = new sx.classes.Window(this.get('action'));
                    window.bind("close", function()
                    {
                        $.pjax.reload('#sx-table-emails', {});
                    });

                    window.open();
                },

                _onDomReady: function()
                {},

                _onWindowReady: function()
                {},
            });
        })(sx, sx.$, sx._);
JS
);
    ?>
    <a class="btn btn-default" onclick="<?= new \yii\web\JsExpression(<<<JS
    new sx.classes.CreateUserEmail({'action': '{$action}'}); return false;
JS
); ?>">Добавить</a>
        <?
            $search = new \skeeks\cms\models\Search(\skeeks\cms\models\user\UserEmail::className());
            $search->getDataProvider()->query->where(['user_id' => $model->id]);
        ?>
        <?= \skeeks\cms\modules\admin\widgets\GridView::widget([
            'PjaxOptions' => [
                'id' => 'sx-table-emails'
            ],
            'dataProvider'  => $search->getDataProvider(),
            'layout' => "\n{items}\n{pager}",
            'columns' => [
                //['class' => 'yii\grid\SerialColumn'],

                [
                    'class'                 => \skeeks\cms\modules\admin\grid\ActionColumn::className(),
                    'controller'            => \Yii::$app->createController('cms/admin-user-email')[0],
                    'isOpenNewWindow'       => true
                ],

                'value',
                'approved',
            ],
        ]); ?>

<? endif; ?>






<?/*
        $this->registerJs(<<<JS

    $('#test').on('beforeSubmit', function (event, attribute, message) {

        var form = $(this);
        if (form.find('.has-error').length) {
            return false;
        }

        $.ajax({
            type: "POST",
            dataType: "json",
            data: $(this).serialize(),
            success: function(response) {
                sx.notify.info("success");
                $.pjax.reload('#sx-table-emails', {});
            },
            error: function(response) {
                sx.notify.info("error");
            }
        });

        return false;
    });
JS
);
        $userEmail = new \skeeks\cms\models\user\UserEmail();

        $form2 = ActiveForm::begin([
            'action'   => \skeeks\cms\helpers\UrlHelper::construct('cms/admin-user-email/create', ['user_id' => $model->id])->enableAdmin()->toString(),
            'enableAjaxValidation'   => true,
            'usePjax'   => true,
            'id'   => "test",
    ])*/?>

        <?/*= $form2->field($userEmail, 'value')->textInput()->label(); */?><!--
        <?/*= $form2->field($userEmail, 'user_id')->hiddenInput(['value' => $model->id])->label(false); */?>
        <?/*= $form2->buttonsCreateOrUpdate($userEmail); */?>
    --><?php /*ActiveForm::end(); */?>

