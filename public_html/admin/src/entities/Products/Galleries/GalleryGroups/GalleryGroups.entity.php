<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class GalleryGroupsEntity extends EntityScheme {
    public $gallery_group_id;
public $product_group_id;

public $group_name;

public $group_image;

public $group_desc;


    public function model() {
        return new \model\GalleryGroups();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'gallery_group_id','product_group_id' => 'product_group_id','group_name' => 'gallery_group_name','group_image' => 'gallery_group_image','group_desc' => 'gallery_group_desc',
        ];
    }
}
