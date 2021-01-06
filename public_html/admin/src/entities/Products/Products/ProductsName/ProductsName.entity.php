<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class ProductsNameEntity extends EntityScheme {
    public $product_id;
    public $product_name;
    public $product_group_id;
    public $product_sub_group_id;
    public $product_sub_sub_group_id;
    public $product_image;
    public $color_id;
    public $size_id;
    public $material_id;
    public $product_length;
    public $product_width;
    public $product_height;
    public $product_weight;



    public function model() {
        return new \model\ProductsName();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'product_id',
            'product_name' => 'product_name',
            'product_group_id' => 'product_group_id',
            'product_sub_group_id' => 'product_sub_group_id',
            'product_sub_sub_group_id' => 'product_sub_sub_group_id',
            'product_image' => 'product_image',
            'color_id' => 'color_id',
            'size_id' => 'size_id',
            'material_id' => 'material_id',
            'product_length' => 'product_length',
            'product_width' => 'product_width',
            'product_height' => 'product_height',
            'product_weight' => 'product_weight',
        ];
    }
}
