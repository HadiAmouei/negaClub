<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class ProviderBranchesMigration extends Migratable {
    const modelName = 'ProviderBranches';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('provider_branche_id');
			$blueprint->VarChar('provider_branch_name')->Len(150);
			$blueprint->VarChar('provider_branch_image')->Len(150);
			$blueprint->Int('individual_id')->Len(150);
			$blueprint->VarChar('provider_branch_telephone')->Len(150);
			$blueprint->Int('country_id')->Len(150);
			$blueprint->Int('state_id')->Len(150);
			$blueprint->Int('city_id')->Len(150);
			$blueprint->Int('district_id')->Len(150);
			$blueprint->Int('range_id')->Len(150);
			$blueprint->Int('district_ids')->Len(150);
			$blueprint->VarChar('provider_branch_latitude')->Len(150);
			$blueprint->VarChar('provider_branch_longitude')->Len(150);
			$blueprint->VarChar('provider_branch_post_code')->Len(150);
			$blueprint->VarChar('provider_branch_has_auth_yes_no')->Len(150);
			$blueprint->VarChar('provider_branch_auth_number')->Len(150);
			$blueprint->VarChar('provider_branch_work_hours')->Len(150);
			$blueprint->VarChar('provider_branch_social_media')->Len(150);

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
