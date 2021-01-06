<?php

namespace model\Entity;

use DATABASE\ORM\Interact\Entities\EntityScheme;

class ProductGroupsEntity extends EntityScheme
{
    public $product_group_id;
    public $product_groups_name;

    public $product_groups_icon;

    public $groups_image;

    public function model()
    {
        return new \model\ProductGroups();
    }


    protected function dictionary(): array
    {
        return [
            'id' => 'product_group_id', 'product_groups_name' => 'product_groups_name', 'product_groups_icon' => 'product_groups_icon', 'product_groups_image' => 'product_groups_image',
        ];
    }
}
