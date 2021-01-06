<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class UsersStartupsMigration extends Migratable {
    const modelName = 'UsersStartups';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('users_startup_id');
			$blueprint->Int('startup_id')->Len(150);
			$blueprint->Int('customer_id')->Len(150);
			$blueprint->Int('User_credit')->Len(150);
			$blueprint->Int('User_score')->Len(150);
			$blueprint->Int('User_mobile')->Len(150);
			$blueprint->VarChar('User_create')->Len(150);
			$blueprint->VarChar('User_active')->Len(150);

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
