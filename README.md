# adminlte-for-yii2

put the files in the right places with yii2 framework.

1. use the leftMenu widget in the layout like the demo:
  <pre>

      &lt;?= LeftMenu::widget(
          [
              'paramsId' => 'topNav',
              'items' => array('Menu1', 'Menu2', 'Menu With Sub'),
              'options' => array(
                  //单层结构  //single layer structure
                  array(
                      'url' => 'admin-lte',
                      //fw style
                      'font-awesome' => 'fa-desktop',
                  ),
                  array(
                      'url' => 'admin-lte/menu2',
                      'font-awesome' => 'fa-users',
                  ),
                  //多层结构  //tree
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

  </pre>
2. online demo: [azlar.cc/admin-lte](azlar.cc/admin-lte)


  
