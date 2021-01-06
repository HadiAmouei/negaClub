<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class ProviderBranchesEntity extends EntityScheme {
    public $provider_branch_id;
public $branch_name;

public $branch_image;

public $individual_id;

public $branch_telephone;

public $country_id;

public $state_id;

public $city_id;

public $district_id;

public $range_id;

public $district_ids;

public $branch_latitude;

public $branch_longitude;

public $branch_post_code;

public $branch_has_auth_yes_no;

public $branch_auth_number;

public $branch_work_hours;

public $branch_social_media;
public $branch_main_street;
public $branch_secondary_street;
public $branch_address_full;
public $branch_plaque;


    public function model() {
        return new \model\ProviderBranches();
    }



    protected function dictionary(): array {
        return  [
            'provider_branch_id' => 'provider_branch_id',
            'branch_name' => 'provider_branch_name',
            'branch_image' => 'provider_branch_image',
            'individual_id' => 'individual_id',
            'branch_telephone' => 'provider_branch_telephone',
            'country_id' => 'country_id',
            'state_id' => 'state_id',
            'city_id' => 'city_id',
            'district_id' => 'district_id',
            'range_id' => 'range_id',
            'district_ids' => 'district_ids',
            'branch_latitude' => 'provider_branch_latitude',
            'branch_longitude' => 'provider_branch_longitude',
            'branch_post_code' => 'provider_branch_post_code',
            'branch_has_auth_yes_no' => 'provider_branch_has_auth_yes_no',
            'branch_auth_number' => 'provider_branch_auth_number',
            'branch_work_hours' => 'provider_branch_work_hours',
            'branch_social_media' => 'provider_branch_social_media',
            'branch_main_street' => 'provider_branch_main_street',
            'branch_secondary_street' => 'provider_branch_secondary_street',
            'branch_address_full' => 'provider_branch_address_full',
            'branch_plaque' => 'provider_branch_plaque',
        ];
    }
}
