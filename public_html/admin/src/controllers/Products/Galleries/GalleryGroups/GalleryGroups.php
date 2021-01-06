<?php
namespace controller;
use ControllerScheme;
class GalleryGroups extends ControllerScheme {
    const name = 'گالری گروه ';
    
public static $__uploads = ["gallery_group_image" => __SOURCE__."images/GalleryGroups/"];

    public function main() {
        if ($this->requestArray()['product_group_id'] > 0){
            return $this->view($this->viewName(),'main',[
                $this->model()->getAllFiltered('product_group_id',$this->requestArray()['product_group_id'])
            ]);
        }
        return parent::main();
    }


}