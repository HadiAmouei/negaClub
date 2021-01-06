<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class StartupsEntity extends EntityScheme {
    public $id;
    public $name;

    public $logo;

    public $ip;

    public $city_id;

    public $details;


    public function model() {
        return new \model\Startups();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'startup_id','name' => 'startup_name','logo' => 'startup_logo','ip' => 'startup_ip','details' => 'startup_details','city_id' => 'city_id',
        ];
    }
}
