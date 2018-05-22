<?php
/**
 * Created by PhpStorm.
 * User: Loner
 * Date: 31.01.2018
 * Time: 11:42
 */

namespace app\components;
use Yii;
use yii\base\Widget;

class CategoryTabWidget extends Widget
{
    public function run()
    {
       return $this->render('CategoryTab');
    }
}