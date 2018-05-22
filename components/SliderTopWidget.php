<?php
/**
 * Created by PhpStorm.
 * User: Loner
 * Date: 31.01.2018
 * Time: 14:28
 */

namespace app\components;
use Yii;
use yii\base\Widget;

class SliderTopWidget extends Widget
{
    public function run()
    {
       return $this->render('SliderTop');
    }

}