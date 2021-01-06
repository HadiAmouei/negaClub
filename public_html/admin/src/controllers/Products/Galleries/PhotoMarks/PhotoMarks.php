<?php
namespace controller;
use ControllerScheme;
class PhotoMarks extends ControllerScheme {
    const name = 'گالری برند';
    
public static $__uploads = ["photo_marks_image" => __SOURCE__."images/PhotoMarks/"];

    public function main() {
        if ($this->requestArray()['brand_id'] > 0){
            return $this->view($this->viewName(),'main',[
                $this->model()->getAllFiltered('brand_id',$this->requestArray()['brand_id'])
            ]);
        }
        return parent::main();
    }

}