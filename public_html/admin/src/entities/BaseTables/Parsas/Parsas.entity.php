<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class ParsasEntity extends EntityScheme {
    public $parsa_id;
public $name;


    public function model() {
        return new \model\Parsas();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'parsa_id','name' => 'parsa_name',
        ];
    }
}
