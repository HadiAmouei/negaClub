<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class ProductSubGroupsMigration extends Migratable {
    const modelName = 'ProductSubGroups';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('product_sub_group_id');
			$blueprint->Int('product_group_id')->Len(150);
			$blueprint->VarChar('product_sub_groups_name')->Len(150);
			$blueprint->VarChar('product_sub_groups_icon')->Len(150);
			$blueprint->VarChar('product_sub_groups_image')->Len(150);

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
