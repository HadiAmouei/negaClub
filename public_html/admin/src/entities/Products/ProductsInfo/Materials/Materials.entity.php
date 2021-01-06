<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class MaterialsEntity extends EntityScheme {
    public $material_id;
    public $material_name;
    public $product_group_id;
    public $material_image;

    public function model() {
        return new \model\Materials();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'material_id', 'material_name' => 'material_name', 'product_group_id' => 'product_group_id', 'material_image' => 'material_image',
        ];
    }
}
