<?php

$this->title = "demo_azlar.cc";
//面包屑
$this->params['breadcrumbs']=[
    ['label'=> 'menu3', 'url' => Yii::$app->urlManager->createUrl(['admin-lte/menu3'])],
    ['label' => 'sub'.$sub]
];
$this->params['topNav'] = 'sub='.$sub;

$this->params['topMenu'] = 'menu3';
$this->params['topMenuTpl'] = 'demo';
?>



<div class="jumbotron">
    <h1>Hello!</h1>
    <p><?= $content; ?></p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>