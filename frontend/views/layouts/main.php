<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Wrapper start -->
<div id="wrapper">
    <div id="mobile-header">
        <a id="responsive-menu-button" href="#sidr-main"><i class="fa fa-bars"></i></a>
    </div>
    <header id="kode-header" >
        <strong class="kode-logo">
            <a href="#"><img src="images/logo.png" width="100px" alt=""></a>
        </strong>
        <nav class="kode-nav" id="navigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a>
                    <ul>
                        <li><a href="about.php">About MCUE</a></li>
                        <li><a href="comming-soon.html">Organizing commitee</a></li>
                        <li><a href="faq.html">Sponsorship</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.html">Schedule</a></li>
                <li><a href="#">Accomodation</a>
                    <ul>
                        <li><a href="trans.php">Transportation</a></li>
                        <li><a href="gallery-02.html">Hotel</a></li>
                        <li><?= Html::a('Tourism Destination', ['/site/tourism-destination']) ?></li>
                        <li><?= Html::a('Culinary', ['/site/culinary']) ?></li>
                    </ul>
                </li>
                <li><a href="map.php">Map & Location</a></li>
                <li><a href="contact-us.html">Account</a></li>
                <li><a href="contact-us.html">Register</a></li>
                <li>
                    <?php
                        if (Yii::$app->user->isGuest) {
                            
                        } else {
                            
                            echo Html::a('Logout(' . Yii::$app->user->identity->username . ')', array('site/logout'));

                            /*if (User::isUserAdmin(Yii::$app->user->identity->username)) {
                                $menuItems[] = ['label' => 'Coba', 'url' => ['/site/coba']];
                            }*/
                        }
                    ?>
                </li>
            </ul>
        </nav>
        <div class="col-right">
            <ul class="header-social">
                <li><a href="#" data-toggle="tooltip" title="Facebook" data-placement="bottom"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" data-toggle="tooltip" title="Twitter" data-placement="bottom"><i class="fa fa-twitter"></i></a></li>
            </ul>
            <a href="#" class="button-member">Become A member</a>
        </div>
    </header>
    <!-- Kode-Header End -->


     <?= $content ?>

    <footer id="footer">
        <div class="event-map">
            <div id="googleMap" style="width:100%;height:414px;"></div>
        </div>
        <div class="kode-footer-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12 footer-cols">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <strong class="title">Contact info</strong>
                            <h3>Contact Us</h3>
                            <p>Lorem ipsum dolor sit amet adipi elit sed do eiusmod.</p>
                            <ul class="address-nav">
                                <li><i class="fa fa-map-marker"></i> abc raod, 41 street, New York</li>
                                <li><i class="fa fa-envelope-o"></i><a href="#">Info@info.com</a></li>
                                <li><i class="fa fa-phone"></i> +(35) 123 456</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <strong class="title">Twitter</strong>
                            <h3>twitter Feed</h3>
                            <ul class="twitterfeed-nav">
                                <li><i class="fa fa-twitter"></i> <a href="#">@orem ipsum</a> dolor sit amet adipi elit sed do eiusmod.</li>
                                <li><i class="fa fa-twitter"></i> <a href="#">@orem ipsum</a> dolor sit amet adipi elit sed do eiusmod.</li>
                                <li><i class="fa fa-twitter"></i> <a href="#">@orem ipsum</a> dolor sit amet adipi elit sed do eiusmod.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--kode-footer-text End-->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>&copy; <a href="#">Kode Forest</a> All Rights Reserved</p>
                    </div>
                </div>
            </div>
            <div class="back-to-top">
                <a href="#"><i class="fa fa-arrow-up"></i></a>
            </div>
        </div>
        <!--copyright End-->
    </footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
