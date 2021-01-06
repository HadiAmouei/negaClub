<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class CustomerAddressesEntity extends EntityScheme {
    public $customer_address_id;
    public $customer_id;
    public $country_id;
    public $state_id;
    public $city_id;
    public $district_id;
    public $customer_main_street;
    public $customer_secondary_street;
    public $customer_address_full;
    public $customer_plaque;
    public $customer_address_latitude;
    public $customer_address_longitude;

    public function model() {
        return new \model\CustomerAddresses();
    }



    protected function dictionary(): array {
        return  [
            'customer_address_id' => 'customer_address_id',
            'customer_id' => 'customer_id',
            'state_id' => 'state_id',
            'city_id' => 'city_id',
            'district_id' => 'district_id',
            'country_id' => 'country_id',
            'customer_main_street' => 'customer_main_street',
            'customer_secondary_street' => 'customer_secondary_street',
            'customer_address_full' => 'customer_address_full',
            'customer_plaque' => 'customer_plaque',
            'customer_address_latitude' => 'customer_address_latitude',
            'customer_address_longitude' => 'customer_address_longitude',
        ];
    }
}
