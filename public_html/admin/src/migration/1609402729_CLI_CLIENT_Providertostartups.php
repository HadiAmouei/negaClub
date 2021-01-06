<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class ProvidertostartupsMigration extends Migratable {
    const modelName = 'Providertostartups';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('providertostartup_id');
			$blueprint->Int('provider_branch_id')->Len(150);
			$blueprint->VarChar('provider_to_startup_contract_number')->Len(150);
			$blueprint->VarChar('provider_to_startup_start_date')->Len(150);
			$blueprint->VarChar('provider_to_startup_end_date')->Len(150);
			$blueprint->Int('contracttype_id')->Len(150);
			$blueprint->VarChar('provider_to_startup_cash_discount')->Len(150);
			$blueprint->VarChar('provider_to_startup_credit_discount')->Len(150);
			$blueprint->VarChar('provider_to_startup_cash_and_credit_discount')->Len(150);
			$blueprint->VarChar('provider_to_startup_each_buy')->Len(150);
			$blueprint->VarChar('provider_to_startup_score_per_buy')->Len(150);

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
