<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class ProductSubSubGroupsEntity extends EntityScheme {
    public $product_sub_sub_group_id;
public $sub_sub_group_name;

public $group_id;

public $sub_group_id;

public $sub_sub_group_icon;

public $sub_sub_group_image;


    public function model() {
        return new \model\ProductSubSubGroups();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'product_sub_sub_group_id','sub_sub_group_name' => 'product_sub_sub_group_name','group_id' => 'product_group_id','sub_group_id' => 'product_sub_group_id','sub_sub_group_icon' => 'product_sub_sub_group_icon','sub_sub_group_image' => 'product_sub_sub_group_image',
        ];
    }
}
