<?php
/**
 * Created by PhpStorm.
 * User: Loner
 * Date: 31.01.2018
 * Time: 12:01
 */

namespace app\components;
use Yii;
use yii\base\Widget;
use yii\db\Query;

class BrandsProductsWidget extends Widget
{
    public function run()
    {
        // get cache
        $brands = Yii::$app->cache->get('brands');
        if($brands)
            return  $this->render('BrandsProducts', compact('brands'));

            $brands = ( new Query())->select(['companies.company_name',"COUNT(products.company_id) as _count",'products.category_id'])
                ->from('companies')
                ->innerJoin('products','products.company_id = companies.id')
                ->groupBy(['companies.company_name','products.category_id'])
                ->all();
            // set cache
            Yii::$app->cache->set('brands', $brands, 60*5);
            return $this->render('BrandsProducts', compact('brands'));
    }

}