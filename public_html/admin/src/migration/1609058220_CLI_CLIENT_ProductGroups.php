<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class ProductGroupsMigration extends Migratable {
    const modelName = 'ProductGroups';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('product_group_id');
			$blueprint->VarChar('product_groups_name')->Len(150);
			$blueprint->VarChar('product_groups_icon')->Len(150);
			$blueprint->VarChar('product_groups_image')->Len(150);

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
