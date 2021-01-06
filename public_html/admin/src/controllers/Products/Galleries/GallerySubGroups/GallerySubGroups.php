<?php
namespace controller;
use ControllerScheme;
class GallerySubGroups extends ControllerScheme {
    const name = 'گالری زیر گروه';
    
public static $__uploads = ["gallery_sub_groups_image" => __SOURCE__."images/GallerySubGroups/"];

    public function main() {
        if ($this->requestArray()['product_sub_group_id'] > 0){
            return $this->view($this->viewName(),'main',[
                $this->model()->getAllFiltered('product_sub_group_id',$this->requestArray()['product_sub_group_id'])
            ]);
        }
        return parent::main();
    }


}