<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class ProvidersMigration extends Migratable {
    const modelName = 'Providers';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('provider_id');
			$blueprint->VarChar('provider_name')->Len(150);
			$blueprint->VarChar('provider_image')->Len(150);
			$blueprint->Int('individual_id')->Len(150);
			$blueprint->VarChar('provider_tel')->Len(150);
			$blueprint->Int('workgroup_id')->Len(150);
			$blueprint->Int('caste_id')->Len(150);
			$blueprint->Int('social_media_id')->Len(150);

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
