<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class SizesMigration extends Migratable {
    const modelName = 'Sizes';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('size_id');
			$blueprint->VarChar('size_name')->Len(150);
			$blueprint->Int('product_group_id')->Len(150);
			$blueprint->Int('product_sub_group_id')->Len(150);
			$blueprint->VarChar('size_icon')->Len(150);

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
