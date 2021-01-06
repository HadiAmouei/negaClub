<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class ProviderToStartupsEntity extends EntityScheme {
    public $provider_to_startup_id;
public $branch_id;

public $to_startup_contract_number;

public $to_startup_start_date;

public $to_startup_end_date;

public $contracttype_id;

public $to_startup_cash_discount;

public $to_startup_credit_discount;

public $to_startup_cash_and_credit_discount;

public $to_startup_each_buy;

public $to_startup_score_per_buy;
public $startup_id;


    public function model() {
        return new \model\ProviderToStartups();
    }



    protected function dictionary(): array {
        return  [
            'id' => 'provider_to_startup_id','branch_id' => 'provider_branch_id','to_startup_contract_number' => 'provider_to_startup_contract_number','to_startup_start_date' => 'provider_to_startup_start_date','to_startup_end_date' => 'provider_to_startup_end_date','contracttype_id' => 'contracttype_id','to_startup_cash_discount' => 'provider_to_startup_cash_discount','to_startup_credit_discount' => 'provider_to_startup_credit_discount','to_startup_cash_and_credit_discount' => 'provider_to_startup_cash_and_credit_discount','to_startup_each_buy' => 'provider_to_startup_each_buy','to_startup_score_per_buy' => 'provider_to_startup_score_per_buy','startup_id' => 'startup_id',
        ];
    }
}
