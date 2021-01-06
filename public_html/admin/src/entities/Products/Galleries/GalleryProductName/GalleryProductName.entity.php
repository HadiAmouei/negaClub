<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class GalleryProductNameEntity extends EntityScheme {
    public $gallery_product_nam_id;
public $product_id;

public $product_name_name;

public $product_name_image;

public $product_name_desc;


    public function model() {
        return new \model\GalleryProductName();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'gallery_product_nam_id','product_id' => 'product_id','product_name_name' => 'gallery_product_name_name','product_name_image' => 'gallery_product_name_image','product_name_desc' => 'gallery_product_name_desc',
        ];
    }
}
