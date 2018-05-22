<?php
use yii\helpers\Url;
?>
<div class="brands_products">
    <h2>Бренды</h2>
    <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">
           <? if(!empty($brands)):?>
                <? foreach ($brands as $brand):?>
                    <li><a href="<?= Url::to(['category/view','id'=>$brand['category_id']])?>"> <span class="pull-right">(<?=$brand['_count']?>)</span><?=$brand['company_name'] ?></a></li>
                <? endforeach;?>
            <? endif;?>
        </ul>
    </div>
</div>