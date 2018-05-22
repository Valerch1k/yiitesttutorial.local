<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property string $id
 * @property integer $company_id
 * @property integer $category_id
 * @property string $product_title
 * @property integer $product_status
 * @property string $product_price
 * @property string $product_content
 * @property double $product_weight
 * @property integer $product_in_stock
 * @property integer $product_on_order
 * @property string $product_image
 * @property string $product_description
 * @property string $product_keywords
 * @property string $product_hit
 * @property string $product_new
 * @property string $product_sale
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'category_id', 'product_title', 'product_price'], 'required'],
            [['company_id', 'category_id', 'product_status', 'product_in_stock', 'product_on_order'], 'integer'],
            [['product_price', 'product_weight'], 'number'],
            [['product_content', 'product_hit', 'product_new', 'product_sale'], 'string'],
            [['product_title', 'product_image', 'product_description', 'product_keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_id' => 'Company ID',
            'category_id' => 'Category ID',
            'product_title' => 'Назв. продукта',
            'product_status' => 'Статус',
            'product_price' => 'Цена',
            'product_content' => 'Контент',
            'product_weight' => 'Вес',
            'product_in_stock' => 'Кол. на складе',
            'product_on_order' => 'Кол. заказано',
            'product_image' => 'Картинка',
            'product_description' => 'Кратк. описание',
            'product_keywords' => 'Product Keywords',
            'product_hit' => 'Hit',
            'product_new' => 'New',
            'product_sale' => 'Акционный товар',
        ];
    }

    public function getCategory(){
        return $this->hasOne(Categories::className(),['id'=>'category_id']);
    }
}
