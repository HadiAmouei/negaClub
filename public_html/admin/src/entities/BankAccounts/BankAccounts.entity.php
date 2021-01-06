<?php

namespace model\Entity;

use DATABASE\ORM\Interact\Entities\EntityScheme;
use model\BankCards;

class BankAccountsEntity extends EntityScheme
{
    public $bank_account_id;

    public $bank_id;
    public $provider_id;
    public $bank_account_holder;
    public $bank_account_card_holder;
    public $bank_account_sheba_number;
    public $bank_account_number;
    public $bank_account_bank_number;
    public $bank_account_name;


    public function model()
    {
        return new BankCards();
    }


    protected function dictionary(): array
    {
        return [
            'id' => 'bank_account_id',
            'bank_id' => 'bank_id',
            'provider_id' => 'provider_id',
            'bank_account_holder' => 'bank_account_holder',
            'bank_account_card_holder' => 'bank_account_card_holder',
            'bank_account_sheba_number' => 'bank_account_sheba_number',
            'bank_account_number' => 'bank_account_number',
            'bank_account_bank_number' => 'bank_account_bank_number',
            'bank_account_name' => 'bank_account_name',

        ];
    }
}
