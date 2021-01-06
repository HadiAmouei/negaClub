<?php
namespace controller;
use ControllerScheme;
class GalleryProductName extends ControllerScheme {
    const name = 'گالری نام محصول';
    
public static $__uploads = ["gallery_product_name_image" => __SOURCE__."images/GalleryProductName/"];

    public function main() {
        if ($this->requestArray()['product_id'] > 0){
            return $this->view($this->viewName(),'main',[
                $this->model()->getAllFiltered('product_id',$this->requestArray()['product_id'])
            ]);
        }
        return parent::main();
    }


}