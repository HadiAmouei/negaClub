<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class AgenciesEntity extends EntityScheme {
    public $agency_id;
    public $name;
    public $email;
    public $phone;
    public $supervision_id;
    public $individual_id;
    public $user_id;

    public function model() {
        return new \model\Agencies();
    }



    protected function dictionary(): array {
        return  [
            'agency_id' => 'agency_id',
            'name' => 'agency_name',
            'email' => 'agency_email',
            'phone' => 'agency_phone',
            'supervision_id' => 'supervision_id',
            'individual_id' => 'individual_id',
            'user_id' => 'user_id',
        ];
    }
}
