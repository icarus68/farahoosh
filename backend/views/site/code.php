    <?php

    $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal','enctype' => 'multipart/form-data'],
        
    ]) ?>
    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    // a password input
    <?= $form->field($model, 'password')->passwordInput() ?>
    // adding a hint and a customized label
    <?= $form->field($model, 'username')->textInput()->hint('Please enter your name')->label('Name') ?>
    // creating a HTML5 email input element
    <?= $form->field($model, 'email')->input('email') ?>
    // allow multiple files to be uploaded:
    <?php echo $form->field($model, 'uploadFile[]')->fileInput(['multiple'=>'multiple']); ?>

    // allow multiple items to be checked:
    <?php echo $form->field($model, 'items[]')->checkboxList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']); ?>
    <?php
        use app\models\ProductCategory;

        /* @var $this yii\web\View */
        /* @var $form yii\widgets\ActiveForm */
        /* @var $model app\models\Product */

        echo $form->field($model, 'product_category')->dropdownList(
            ProductCategory::find()->select(['category_name', 'id'])->indexBy('id')->column(),
            ['prompt'=>'Select Category']
        );
    ?>
    <?php
        use yii\widgets\Pjax;
        use yii\widgets\ActiveForm;

        Pjax::begin([
            // Pjax options
        ]);
            $form = ActiveForm::begin([
                'options' => ['data' => ['pjax' => true]],
                // more ActiveForm options
            ]);

                // ActiveForm content

            ActiveForm::end();
        Pjax::end();
    ?>
    <?= $form->field($model, 'desc')->textarea(); ?>
    <?= $form->field($model, 'desc')->textarea()->label('Description'); ?>
    <?= $form->field($model, 'desc')->textarea(array('rows'=>2,'cols'=>5)); ?>
    //Format 1
    <?= $form->field($model, 'password')->input('password') ?>
    //Format 2
    <?= $form->field($model, 'password')->passwordInput() ?>
    //Format 3
    <?= $form->field($model, 'password')->passwordInput()->hint('Password should be within A-Za-z0-9')->label('Password Hint') ?>
    <?= $form->field($model, 'email')->input('email') ?>
    <?= $form->field($model, 'uploadFile')->fileInput() ?>
    <!-- CHECKBOX BUTTON WITH LABEL OPTIONS, DISABLED AND STYLE PROPERTIES -->
    <?= $form->field($model, 'population')->checkbox(array(
                                                                    'label'=>'',
                                                                    'labelOptions'=>array('style'=>'padding:5px;'),
                                                                    'disabled'=>true								
                                                                    ))
                                                                    ->label('Gender'); ?>
                                                                    
    <!-- RADIO BUTTON DEFAULT LABEL -->
    <?= $form->field($model, 'gender')->radio(); ?>
    <!-- RADIO BUTTON WITHOUT LABEL -->
    <?= $form->field($model, 'gender')->radio(array('label'=>'')); ?>
    <!-- RADIO BUTTON WITH CUSTOM LABEL -->
    <?= $form->field($model, 'gender')	->radio(array('label'=>''))
                                                                                    ->label('Gender'); ?>
    <!-- RADIO BUTTON WITH LABEL OPTIONS -->
    <?= $form->field($model, 'gender')->radio(array(
                                                                    'label'=>'',
                                                                    'labelOptions'=>array('style'=>'padding:5px;')))
                                                                    ->label('Gender'); ?>
                  
    <?= $form->field($model, 'population')->radioList(array('1'=>'One',2=>'Two')); ?>
    <!-- Listbox with prompt text -->
    <?= $form->field($model, 'population')-> listBox(
                            array('1'=>'1',2=>'2',3=>3,4=>4,5=>5),
                            array('prompt'=>'Select')
                            ); ?>
    <!-- Listbox with size -->
    <?= $form->field($model, 'population')-> listBox(
                            array('1'=>'1',2=>'2',3=>3,4=>4,5=>5),
                            array('prompt'=>'Select','size'=>3)
                            ); ?>
    <!-- Listbox with disabled, style properties -->
    <?= $form->field($model, 'population')-> listBox(
                            array('1'=>'1',2=>'2',3=>3,4=>4,5=>5),
                            array('disabled' => true,'style'=>'background:gray;color:#fff;'))
                            ->label('Gender'); ?>
                            
    <?= Html::submitButton('Submit', ['class'=> 'btn btn-primary']) ;?>
    //Format 1
    <?php echo $form->field($model, 'name')->dropDownList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']); ?>
    // Format 2
    <?php echo $form->field($model, 'name')->dropDownList($listData, ['prompt'=>'Choose...']); ?>
    <?= $form->field($modelAddress, "[{$i}]postal_code")->textInput(['maxlength' => true]) ?>
    <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items', // required: css class selector
        'widgetItem' => '.item', // required: css class
        'limit' => 4, // the maximum times, an element can be added (default 999)
        'min' => 0, // 0 or 1 (default 1)
        'insertButton' => '.add-item', // css class
        'deleteButton' => '.remove-item', // css class
        'model' => $modelsAddress[0],
        'formId' => 'dynamic-form',
        'formFields' => [
            'full_name',
            'address_line1',
            'address_line2',
            'city',
            'state',
            'postal_code',
        ],
    ]); ?>

    <?= Html::tag('p', Html::encode($user->name), ['class' => 'username']) ?>
    <?php
    $options = ['class' => 'btn btn-default'];

    if ($type === 'success') {
        Html::removeCssClass($options, 'btn-default');
        Html::addCssClass($options, 'btn-success');
    }
    echo Html::tag('div', 'Pwede na', $options);
    // if the value of $type is 'success' it will render
    // <div class="btn btn-success">Pwede na</div>
    ?>
    <?php
    $options = ['style' => ['width' => '100px', 'height' => '100px']];

    // gives style="width: 100px; height: 200px; position: absolute;"
    Html::addCssStyle($options, 'height: 200px; position: absolute;');

    // gives style="position: absolute;"
    Html::removeCssStyle($options, ['width', 'height']);
    ?>
    <?= Html::button('Press me!', ['class' => 'teaser']) ?>
    <?= Html::submitButton('Submit', ['class' => 'submit']) ?>
    <?= Html::resetButton('Reset', ['class' => 'reset']) ?>
    <?= Html::radio('agree', true, ['label' => 'I agree']); ?>
    <?= Html::activeRadio($model, 'agree', ['class' => 'agreement']) ?>

    <?= Html::checkbox('agree', true, ['label' => 'I agree']); ?>
    <?= Html::activeCheckbox($model, 'agree', ['class' => 'agreement']) ?>
    <?= Html::dropDownList('list', $currentUserId, ArrayHelper::map($userModels, 'id', 'name')) ?>
    <?= Html::activeDropDownList($users, 'id', ArrayHelper::map($userModels, 'id', 'name')) ?>

    <?= Html::listBox('list', $currentUserId, ArrayHelper::map($userModels, 'id', 'name')) ?>
    <?= Html::activeListBox($users, 'id', ArrayHelper::map($userModels, 'id', 'name')) ?>
    <?= Html::checkboxList('roles', [16, 42], ArrayHelper::map($roleModels, 'id', 'name')) ?>
    <?= Html::activeCheckboxList($user, 'role', ArrayHelper::map($roleModels, 'id', 'name')) ?>
    <?= Html::radioList('roles', [16, 42], ArrayHelper::map($roleModels, 'id', 'name')) ?>
    <?= Html::activeRadioList($user, 'role', ArrayHelper::map($roleModels, 'id', 'name')) ?>
    <?= Html::label('User name', 'username', ['class' => 'label username']) ?>
    <?= Html::activeLabel($user, 'username', ['class' => 'label username']) ?>
    <?= Html::errorSummary($posts, ['class' => 'errors']) ?>
    <?= Html::error($post, 'title', ['class' => 'error']) ?>
    <?php
    // Post[title]
    echo Html::getInputName($post, 'title');

    // post-title
    echo Html::getInputId($post, 'title');

    // my first post
    echo Html::getAttributeValue($post, 'title');

    // $post->authors[0]
    echo Html::getAttributeValue($post, '[0]authors[0]');
    // dates
    echo Html::getAttributeName('dates[0]');
    ?>
    <?= Html::style('.danger { color: #f00; }') ?>
    <?= Html::script('alert("Hello!");', ['defer' => true]); ?>
    <?= Html::cssFile('@web/css/ie5.css', ['condition' => 'IE 5']) ?>
    <?= Html::jsFile('@web/js/main.js') ?>
    <?= Html::a('Profile', ['user/view', 'id' => $id], ['class' => 'profile-link']) ?>
    <?= Html::mailto('Contact us', 'admin@example.com') ?>
    <?= Html::img('@web/images/logo.png', ['alt' => 'My logo']) ?>
    <?= Html::ul($posts, ['item' => function($item, $index) {
        return Html::tag(
            'li',
            $this->render('post', ['item' => $item]),
            ['class' => 'post']
        );
    }]) ?>
    