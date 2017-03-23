<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\StafftblSearch;
use common\models\Stafftbl;
use common\models\DepartmentTypetbl;
use common\models\PositionTypetbl;
use common\models\StateTypetbl;
use common\models\BankTypetbl;
use common\models\EducationTypetbl;

/* @var $this yii\web\View */
/* @var $model common\models\Stafftbl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stafftbl-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?=
    //填写变为下拉菜单
    $form->field($model, 'department')->dropDownList(DepartmentTypetbl::find()
                    ->select(['department_type', 'id'])
                    ->indexBy('id')
                    ->column(), ['prompt' => '请选择部门']);
    ?>

    <?=
    $form->field($model, 'position')->dropDownList(PositionTypetbl::find()
                    ->select(['position_type', 'id'])
                    ->indexBy('id')
                    ->column(), ['prompt' => '请选择职位']);
    ?>

    <?=
    $form->field($model, 'state')->dropDownList(StateTypetbl::find()
                    ->select(['state_type', 'id'])
                    ->indexBy('id')
                    ->column(), ['prompt' => '请选择状态']);
    ?>

    <?=
    $form->field($model, 'education')->dropDownList(EducationTypetbl::find()
                    ->select(['education_type', 'id'])
                    ->indexBy('id')
                    ->column(), ['prompt' => '请选择学历 ']);
    ?>

    <?= $form->field($model, 'native_place')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QQ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'emergency_contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emergency_contact_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'login_pwd')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'bank')->dropDownList(BankTypetbl::find()
                    ->select(['bank_type', 'id'])
                    ->indexBy('id')
                    ->column(), ['prompt' => '请选择开户行']);
    ?>

<?= $form->field($model, 'acct_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hiredate')->textInput() ?>

    <?= $form->field($model, 'expiration')->textInput() ?>


<?= $form->field($model, 'other')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? '新增' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
