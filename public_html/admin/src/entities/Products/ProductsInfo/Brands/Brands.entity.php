<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class BrandsEntity extends EntityScheme {
    public $brand_id;
    public $brand_name;
    public $product_group_id;
    public $brand_logo;
    public $brand_image;


    public function model() {
        return new \model\Brands();
    }


    protected function dictionary(): array {
        return  [
            'id' => 'brand_id', 'brand_name' => 'brand_name','product_group_id' => 'product_group_id','brand_logo' => 'brand_logo','brand_image' => 'brand_image',
        ];
    }
}
