<?php

/* @var $this \yii\web\View */
/* @var $content string */
/*use Yii;*/

use yii\bootstrap\Dropdown;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

use frontend\widgets\HeaderWidget;
use frontend\widgets\FooterWidget;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?= HeaderWidget::widget();?>


    <div class="wrap">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>



<?= FooterWidget::widget();?>

<?php $this->endBody() ?>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8QCfGLkaqcK-XUAexuj3Qboi561eLki8&callback=initMap">
    </script>
<?php $this->endPage() ?>