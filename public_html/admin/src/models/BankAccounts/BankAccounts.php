<?php


namespace model;

use DATABASE\Model;

class BankAccounts extends Model
{
    public $_table = 'tblBankAccounts';
    public $_key = 'bank_account_id';
    public $_Entity = \model\Entity\BankAccountsEntity::class;
}