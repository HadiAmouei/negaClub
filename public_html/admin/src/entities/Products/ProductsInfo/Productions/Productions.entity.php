<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class ProductionsEntity extends EntityScheme {
    public $production_id;
    public $production_type;
    public $product_group_id;
    public $product_sub_group_id;

    public function model() {
        return new \model\Productions();
    }


    protected function dictionary(): array {
        return  [
            'id' => 'production_id','production_type' => 'production_type','product_group_id' => 'product_group_id','product_sub_group_id' => 'product_sub_group_id',
        ];
    }
}
