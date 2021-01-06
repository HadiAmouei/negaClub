<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class SizesEntity extends EntityScheme {
    public $size_id;
    public $size_name;
    public $product_group_id;
    public $product_sub_group_id;
    public $size_icon;

    public function model() {
        return new \model\Sizes();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'size_id','size_name' => 'size_name','product_group_id' => 'product_group_id','product_sub_group_id' => 'product_sub_group_id','size_icon' => 'size_icon',
        ];
    }
}
