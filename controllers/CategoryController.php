<?php
/**
 * Created by PhpStorm.
 * User: Loner
 * Date: 29.01.2018
 * Time: 21:34
 */

namespace app\controllers;


use app\models\Products;

class CategoryController extends AppController
{
    public function actionIndex()
    {
        $hits = Products::find()->where(['product_hit'=>'1'])->limit(6)->all();
        return $this->render('index',compact('hits'));
    }

    public function actionView()
    {
        return $this->render('view');
    }

    public function actionDetails($id)
    {
        $products = Products::find()->where(['id'=>$id])->one();
        return  $this->render('details');
    }

}