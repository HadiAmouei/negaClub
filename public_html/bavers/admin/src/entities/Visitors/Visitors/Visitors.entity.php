<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class VisitorsEntity extends EntityScheme {
    public $visitor_id;
public $gender;

public $first_name;

public $last_name;

public $national_code;

public $referer_username;

public $birthdate;

public $mobile;

public $telephone;

public $post_code;

public $state_id;

public $city_id;

public $address;

public $username;

public $password;


    public function model() {
        return new \model\Visitors();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'visitor_id','gender' => 'visitor_gender','first_name' => 'visitor_first_name','last_name' => 'visitor_last_name','national_code' => 'visitor_national_code','referer_username' => 'visitor_referer_username','birthdate' => 'visitor_birthdate','mobile' => 'visitor_mobile','telephone' => 'visitor_telephone','post_code' => 'visitor_post_code','state_id' => 'state_id','city_id' => 'city_id','address' => 'visitor_address','username' => 'visitor_username','password' => 'visitor_password',
        ];
    }
}
