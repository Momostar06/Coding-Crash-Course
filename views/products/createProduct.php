<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Productcategories;

$this->title = 'Product';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to create a product:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'product-form']); ?>

                <?= $form->field($model, 'productname')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'productcategory')->dropDownList(
            ArrayHelper::map(Productcategories::find()->asArray()->all(), 'CategoryID', 'CategoryName')
          ); ?>


                <div class="form-group">
                    <?= Html::submitButton('Create', ['class' => 'btn btn-primary', 'name' => 'product-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>