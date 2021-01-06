<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class StartupUsersEntity extends EntityScheme {
    public $id;
    public $startup_id;
    public $customer_id;
    public $User_credit;
    public $User_score;
    public $User_mobile;
    public $User_create;
    public $User_active;

    public function model() {
        return new \model\StartupUsers();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'startup_user_id',
            'startup_id' => 'startup_id',
            'customer_id' => 'customer_id',
            'User_credit' => 'User_credit',
            'User_score' => 'User_score',
            'User_mobile' => 'User_mobile',
            'User_create' => 'User_create',
            'User_active' => 'User_active',
        ];
    }
}
