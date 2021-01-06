<?php
namespace controller;
use ControllerScheme;
class GallerySubSubGroups extends ControllerScheme {
    const name = 'گالری زیر زیر گروه';
    
public static $__uploads = ["gallery_sub_sub_groups_image" => __SOURCE__."images/GallerySubSubGroups/"];

    public function main() {
        if ($this->requestArray()['product_sub_sub_group_id'] > 0){
            return $this->view($this->viewName(),'main',[
                $this->model()->getAllFiltered('product_sub_sub_group_id',$this->requestArray()['product_sub_sub_group_id'])
            ]);
        }
        return parent::main();
    }


}