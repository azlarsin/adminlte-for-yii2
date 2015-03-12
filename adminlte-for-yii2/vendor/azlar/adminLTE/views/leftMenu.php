

<?php foreach($items as $k => $item): ?>
    <?php if(empty($options[$k]['url'])): ?>
        <li class="treeview" >
            <a href='#'>
                <i class="fa <?php echo $options[$k]['font-awesome'];array_pop($options[$k]); ?>"></i>
                <span><?= $item; ?></span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <?php foreach($options[$k] as $item => $url): ?>
                    <?php $route = explode('?r=', $url); ?>
                    <li<?php if(false !== stripos(empty($route[1]) ? $url : $route[1], $this->params[$paramsId])): ?> class="treeview-menu-li active" <?php endif; ?> >
                        <a href="<?= empty($route[1]) ? Yii::$app->urlManager->createUrl($url) : $url; ?>"><i class="fa fa-angle-double-right"></i> <?= $item; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php else: ?>
        <li <?php if(false !== stripos($this->params[$paramsId], $options[$k]['url'])): ?> class="active" <?php endif ?> >
            <a href='<?= Yii::$app->urlManager->createUrl($options[$k]['url']); ?>'>
                <i class="fa <?php echo $options[$k]['font-awesome'];array_pop($options[$k]); ?>"></i>
                <span><?= $item; ?></span>
            </a>
        </li>
    <?php endif; ?>
<?php endforeach; ?>