<?php if($this->params['topNav'] == 'menu1'): ?>
    <div>
        <a href="<?php echo Yii::$app->urlManager->createUrl('admin-lte'); ?>" class="btn-sm btn-primary <?php if($this->params['topMenu']=='index'):?>active<?php endif; ?>" style="margin-right: 20px;">
            <i class="fa fa-desktop"></i>&nbsp;index
        </a>

        <a href="<?php echo Yii::$app->urlManager->createUrl('admin-lte/fa-icons'); ?>" class="btn-sm btn-primary <?php if($this->params['topMenu']=='fa-icons'):?>active<?php endif; ?>" style="margin-right: 20px;">
            <i class="fa fa-asterisk"></i>&nbsp;Icons
        </a>
    </div>
<?php endif; ?>

<?php if($this->params['topNav'] == 'menu2'): ?>
    <div>
        <a href="<?php echo Yii::$app->urlManager->createUrl(['admin-lte/menu2', 'button' => 1]); ?>" class="btn-sm btn-primary <?php if($this->params['topMenu']==1):?>active<?php endif; ?>" style="margin-right: 20px;">
            <i class="fa fa-desktop"></i>&nbsp;button1
        </a>

        <a href="<?php echo Yii::$app->urlManager->createUrl(['admin-lte/menu2', 'button' => 2]); ?>" class="btn-sm btn-primary <?php if($this->params['topMenu']==2):?>active<?php endif; ?>" style="margin-right: 20px;">
            <i class="fa fa-asterisk"></i>&nbsp;button2
        </a>

        <a href="<?php echo Yii::$app->urlManager->createUrl(['admin-lte/menu2', 'button' => 3]); ?>" class="btn-sm btn-primary <?php if($this->params['topMenu']==3):?>active<?php endif; ?>" style="margin-right: 20px;">
            <i class="fa fa-asterisk"></i>&nbsp;button3
        </a>
    </div>
<?php endif; ?>

<?php if($this->params['topMenu'] == 'menu3'): ?>
    <div>
        <a href="javascript:void(0)" class="btn-sm btn-primary" style="margin-right: 20px;">
            <i class="fa fa-desktop"></i>&nbsp;button1
        </a>

        <a href="javascript:void(0)" class="btn-sm btn-primary" style="margin-right: 20px;">
            <i class="fa fa-asterisk"></i>&nbsp;button2
        </a>

        <a href="javascript:void(0)" class="btn-sm btn-primary"  style="margin-right: 20px;">
            <i class="fa fa-asterisk"></i>&nbsp;button3
        </a>
    </div>
<?php endif; ?>