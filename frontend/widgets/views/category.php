<?php

use yii\bootstrap;

?>
<div class="container cont">
    <div class="row">
        <?php if (!empty($category)): ?>
            <?php
            ?>
            <?php foreach ($category as $key => $cat): ?>
                <div class="col-md-3">
                    <ul class="nav nav-stacked">
                        <li class="border">
                            <img src="img/<?= $cat['title']; ?>.png">
                            <span class="list"> <?php echo $cat['name'] ?></span>
                        </li>
                        <?php if (is_array($cat['items'])): ?>
                            <?php $i = 0; ?>
                            <?php foreach ($cat['items'] as $k => $v): ?>
                                <?php $i++; ?>
                                <li><a href="<?= $v['route']; ?>"><?= $v['name']; ?></a></li>
                                <?php if ($i == 3) : ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
