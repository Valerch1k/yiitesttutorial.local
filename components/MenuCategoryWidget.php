<?php
/**
 * Created by PhpStorm.
 * User: Loner
 * Date: 20.01.2018
 * Time: 18:09
 */
namespace app\components;
use app\models\Categories;
use Yii;
use yii\base\Widget;

class MenuCategoryWidget extends Widget
{
    public $tpl;
    public $data;
    public $tree;
    public $menuHtml;

    public function init()
    {
        parent::init();
        if($this->tpl ===null)
        {
            $this->tpl ='menu';
        }
        $this->tpl .= '.php';
    }

    public  function run()
    {
        // get cache
        $menu = Yii::$app->cache->get('menu');
        if($menu) return $menu;

        $this->data = Categories::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        // set cache
        Yii::$app->cache->set('menu', $this->menuHtml, 60*5);
        return $this->menuHtml;
    }
    // преобразует массив в дерево массивов
    protected function getTree(){
        $tree = [];
        foreach ($this->data as $id=>&$node) {
            if (!$node['parent_id'])
                $tree[$id] = &$node;
            else
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }

    protected function getMenuHtml($tree){
        $str = '';
        foreach ($tree as $category) {
            $str .= $this->catToTemplate($category);
        }
        return $str;
    }

    protected function catToTemplate($category){
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }

}