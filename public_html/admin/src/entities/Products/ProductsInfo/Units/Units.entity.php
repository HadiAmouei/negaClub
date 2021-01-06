<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class UnitsEntity extends EntityScheme {
    public $unit_id;
public $name;

public $multiplier;


    public function model() {
        return new \model\Units();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'unit_id','name' => 'unit_name','multiplier' => 'unit_multiplier',
        ];
    }
}
