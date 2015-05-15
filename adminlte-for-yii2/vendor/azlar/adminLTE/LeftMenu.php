<?php
/**
 * Created by PhpStorm.
 * User: chencheng
 * Date: 14-12-12
 * Time: 下午2:34
 */

namespace azlar\adminLTE;

use yii;

/**
 * Class LeftMenu
 * @package azlar\adminLTE
 *
 * render the left menu in admin-lte.
 * eg.:
 * echo LeftMenu::widget([
 *      'paramsId' => 'topNav',
 *       'items' => array('首页', '后台', '设置'),
 *       'options' => array(
 *           //单层结构 - 首页
 *           array(
 *               'url' => 'index',
 *               //fw style
 *               'font-awesome' => 'fa-desktop',
 *           ),
 *           array(
 *               'url' => 'adminuser',
 *               'font-awesome' => 'fa-users',
 *           ),
 *           //多层结构 - 设置
 *           array(
 *              //item' => 'url',
 *              '来源' => 'source',
 *              '页面元素' => 'pageelement',
 *              '事件' => 'event',
 *              '应用' => 'app',
 *              'font-awesome' => 'fa-cog',
 *          ),
 *       ),
 * ]);
 *
 *
 */
class LeftMenu extends yii\bootstrap\Widget{

    public $paramsId = 'topNav';

    public $items = [];

    public $options = [];

    public function init(){
        if(count($this->items) != count($this->options)){
            \yii::$app->end();
        }
    }

    public function run(){
        $data['items'] = $this->items;
        $data['options'] = $this->options;
        $data['num'] = count($this->items);
        $data['paramsId'] = $this->paramsId;

        return $this->render('leftMenu', $data);
    }
}
