<?php
/**
 * Created by PhpStorm.
 * User: Loner
 * Date: 31.01.2018
 * Time: 11:48
 */

namespace app\components;
use Yii;
use yii\base\Widget;


class RecommendedItemsWidget extends Widget
{
    public function run()
    {
       return $this->render('RecommendedItems');
    }
}