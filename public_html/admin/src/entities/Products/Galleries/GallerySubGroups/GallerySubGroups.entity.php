<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class GallerySubGroupsEntity extends EntityScheme {
    public $gallery_sub_group_id;
public $product_sub_group_id;

public $sub_groups_name;

public $sub_groups_image;

public $sub_groups_desc;


    public function model() {
        return new \model\GallerySubGroups();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'gallery_sub_group_id','product_sub_group_id' => 'product_sub_group_id','sub_groups_name' => 'gallery_sub_groups_name','sub_groups_image' => 'gallery_sub_groups_image','sub_groups_desc' => 'gallery_sub_groups_desc',
        ];
    }
}
