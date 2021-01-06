<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class ColorsEntity extends EntityScheme {
    public $color_id;
public $name;

public $code;


    public function model() {
        return new \model\Colors();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'color_id','name' => 'color_name','code' => 'color_code',
        ];
    }
}
