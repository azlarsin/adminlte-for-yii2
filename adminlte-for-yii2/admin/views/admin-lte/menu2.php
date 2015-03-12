<?php

$this->title = "demo_azlar.cc";
//面包屑
$this->params['breadcrumbs']=[
    ['label'=> 'menu2', 'url' => Yii::$app->urlManager->createUrl(['admin-lte/menu2'])],
    ['label' => 'button'.$button]
];
$this->params['topNav'] = 'menu2';

$this->params['topMenu'] = $button;
$this->params['topMenuTpl'] = 'demo';
?>



<div class="jumbotron">
    <h1>Hello!</h1>
    <p><?= $content; ?></p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>