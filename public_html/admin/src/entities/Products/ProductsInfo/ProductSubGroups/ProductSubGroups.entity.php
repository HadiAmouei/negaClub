<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class ProductSubGroupsEntity extends EntityScheme {
    public $product_sub_group_id;
    public $product_group_id;
    public $product_sub_group_name;
    public $product_sub_group_icon;
    public $product_sub_group_image;

    public function model() {
        return new \model\ProductSubGroups();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'product_sub_group_id',    'product_group_id' => 'product_group_id',    'product_sub_group_name' => 'product_sub_group_name',    'product_sub_group_icon' => 'product_sub_group_icon',    'product_sub_group_image' => 'product_sub_group_image',
        ];
    }
}
