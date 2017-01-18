<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Yii::$app->urlManager->createUrl('site/index'); ?>"> سیستم مدیریت کلان داده فراهوش</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-left">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo Yii::$app->urlManager->createUrl('site/index'); ?>">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>مدیر it</strong>
                                    <span class="pull-left text-muted">
                                        <em>دیروز</em>
                                    </span>
                                </div>
                                <div>متن پیام</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>مدیر it</strong>
                                    <span class="pull-left text-muted">
                                        <em>دیروز</em>
                                    </span>
                                </div>
                                <div>متن پیام</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>نمایش تمام پیام‌ها</strong>
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>وظیفه یک</strong>
                                        <span class="pull-left text-muted">40% انجام شده</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% انجام شده (با موفقیت)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>وظیفه 2</strong>
                                        <span class="pull-left text-muted">20% انجام شده</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% انجام شده</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>وظیفه 3</strong>
                                        <span class="pull-left text-muted">60% انجام شده</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% انجام شده (هشدار)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>وظیفه 4</strong>
                                        <span class="pull-left text-muted">80% انجام شده</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% انجام شده (هشدار)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>نمایش تمام وظیفه‌ها</strong>
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> نظر جدید
                                    <span class="pull-left text-muted small">4 دقیقه پیش</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 دنبال کننده جدید
                                    <span class="pull-left text-muted small">12 دقیقه پیش</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> پیام ارسال شد
                                    <span class="pull-left text-muted small">4 دقیقه پیش</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> وظیفه جدید
                                    <span class="pull-left text-muted small">4 دقیقه پیش</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> سرور ریبوت شد
                                    <span class="pull-left text-muted small">4 دقیقه پیش</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>نمایش تمام پیغام‌ها</strong>
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> پروفایل کاربر</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> تنظیمات</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?= Html::a('<i class="fa fa-sign-out fa-fw"></i> خروج', ['site/logout'], ['data' => ['method' => 'post']]) ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="جستجو...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo Yii::$app->urlManager->createUrl('site/index'); ?>"><i class="fa fa-dashboard fa-fw"></i> داشبورد</a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::$app->urlManager->createUrl('site/tables'); ?>"><i class="fa fa-table fa-fw"></i> جداول</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> عناصر UI<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo Yii::$app->urlManager->createUrl('site/panelsWells'); ?>">پنل‌ها</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::$app->urlManager->createUrl('site/buttons'); ?>">دکمه‌ها</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::$app->urlManager->createUrl('site/notifications'); ?>">پیغام‌ها</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::$app->urlManager->createUrl('site/typography'); ?>">حروف</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::$app->urlManager->createUrl('site/icons'); ?>"> آیکون‌ها</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> منابع<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo Yii::$app->urlManager->createUrl('site/stream'); ?>">موقعیت یاب</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::$app->urlManager->createUrl('site/stream'); ?>">سیستم ورود و خروج</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::$app->urlManager->createUrl('site/filemanager'); ?>">File Manager</a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::$app->urlManager->createUrl('site/chart'); ?>">Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> پرکاربرد<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo Yii::$app->urlManager->createUrl('site/login'); ?>">صفحه ورود</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <?= $content ?>
    </div>
    <!-- /#wrapper -->
    
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>