<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class VisitorsMigration extends Migratable {
    const modelName = 'Visitors';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('visitor_id');
			$blueprint->VarChar('visitor_gender')->Len(150);
			$blueprint->VarChar('visitor_first_name')->Len(150);
			$blueprint->VarChar('visitor_last_name')->Len(150);
			$blueprint->VarChar('visitor_national_code')->Len(150);
			$blueprint->VarChar('visitor_referer_username')->Len(150);
			$blueprint->VarChar('visitor_birthdate')->Len(150);
			$blueprint->VarChar('visitor_mobile')->Len(150);
			$blueprint->VarChar('visitor_telephone')->Len(150);
			$blueprint->VarChar('visitor_post_code')->Len(150);
			$blueprint->Int('state_id')->Len(150);
			$blueprint->Int('city_id')->Len(150);
			$blueprint->VarChar('visitor_address')->Len(150);
			$blueprint->VarChar('visitor_username')->Len(150);
			$blueprint->VarChar('visitor_password')->Len(150);

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
