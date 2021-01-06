<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class SupervisionsEntity extends EntityScheme {
    public $supervision_id;
    public $name;
    public $city_id;

    public function model() {
        return new \model\Supervisions();
    }



    protected function dictionary(): array {
        return  [
            'supervision_id' => 'supervision_id',
            'name' => 'supervision_name',
            'city_id' => 'city_id',
        ];
    }
}
