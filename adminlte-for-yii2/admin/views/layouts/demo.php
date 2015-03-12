<?php
use admin\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use azlar\adminLTE\LeftMenu;

AppAsset::register($this);
//BootstrapPluginAsset::register($this);

/* @var $this \yii\web\View */
/* @var $content string */


//left module
$topNav =  isset($this->params['topNav']) ? $this->params['topNav'] : 'index';

//top menu
$topMenuTpl = isset($this->params['topMenuTpl']) ? $this->params['topMenuTpl'] : 'common';
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>

        <!--    here is the js file load-->

        <?php $this->head() ?>
    </head>
    <body class="skin-blue">
    <?php $this->beginBody(); ?>
    <header class="header">
        <a class="logo" href="<?= Yii::$app->urlManager->createUrl('admin-lte'); ?>"> azlar.cc </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>
                                &nbsp;azlar&nbsp;
                                <i class="caret"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="<?= DOMAIN_ADMIN.'/tou.png'; ?>" class="img-circle" alt="User Image" />
                                <p>
                                    <!-- name - position-->
                                    azlar - Web Developer
                                    <!-- other info-->
                                    <small>Member since 2015-03-12</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a data-method="post" href="javascript:void(0)" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="wrapper row-offcanvas row-offcanvas-left">
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= DOMAIN_ADMIN.'/tou.png'; ?>" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>Hello, azlar</p>

                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <?= LeftMenu::widget(
                        [
                            'paramsId' => 'topNav',
                            'items' => array('Menu1', 'Menu2', 'Menu With Sub'),
                            'options' => array(
                                //单层结构 - 首页
                                array(
                                    'url' => 'admin-lte',
                                    //fw style
                                    'font-awesome' => 'fa-desktop',
                                ),
                                array(
                                    'url' => 'admin-lte/menu2',
                                    'font-awesome' => 'fa-users',
                                ),
                                //多层结构 - 设置
                                array(
                                    //item' => 'url',
                                    'sub1' => Yii::$app->urlManager->createUrl(['admin-lte/menu3', 'sub' => 1]),
                                    'sub2' => Yii::$app->urlManager->createUrl(['admin-lte/menu3', 'sub' => 2]),
                                    'sub3' => Yii::$app->urlManager->createUrl(['admin-lte/menu3', 'sub' => 3]),
                                    'sub4' => Yii::$app->urlManager->createUrl(['admin-lte/menu3', 'sub' => 4]),
                                    'font-awesome' => 'fa-cog',
                                ),
                            ),
                        ]
                    ); ?>
                </ul>
            </section>
        </aside>

        <aside class="right-side">
            <section class="content-header">

                <!-- top menu -->
                <?= $this->render('//common/topMenu/'.$topMenuTpl.'.php'); ?>

                <!-- breadcrumbs-->
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>

            </section>

            <!-- Main content -->
            <section class="content">
                <?= $this->render('//common/actionMessage');  ?>
                <?= $content ?>
            </section>
        </aside>
    </div>

    <footer class="footer-site">
        <p class="pull-left">&copy; azlar.cc <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </footer>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>