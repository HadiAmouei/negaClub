<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class PhotoMarksEntity extends EntityScheme {
    public $photo_mark_id;
public $brand_id;

public $marks_name;

public $marks_image;

public $marks_desc;


    public function model() {
        return new \model\PhotoMarks();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'photo_mark_id','brand_id' => 'brand_id','marks_name' => 'photo_marks_name','marks_image' => 'photo_marks_image','marks_desc' => 'photo_marks_desc',
        ];
    }
}
