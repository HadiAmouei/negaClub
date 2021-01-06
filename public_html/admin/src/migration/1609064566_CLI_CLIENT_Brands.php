<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class BrandsMigration extends Migratable {
    const modelName = 'Brands';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('brand_id');
			$blueprint->VarChar('brand_name')->Len(150);
			$blueprint->Int('product_group_id')->Len(150);
			$blueprint->VarChar('brand_logo')->Len(150);
			$blueprint->VarChar('brand_image')->Len(150);

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
