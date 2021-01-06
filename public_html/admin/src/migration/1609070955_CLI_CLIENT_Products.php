<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class ProductsMigration extends Migratable {
    const modelName = 'Products';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('product_id');
			$blueprint->VarChar('products_name')->Len(150);
			$blueprint->Int('product_group_id')->Len(150);
			$blueprint->Int('product_sub_group_id')->Len(150);
			$blueprint->Int('product_sub_sub_group_id')->Len(150);
			$blueprint->VarChar('products_image')->Len(150);
			$blueprint->Int('color_id')->Len(150);
			$blueprint->Int('size_id')->Len(150);
			$blueprint->Int('material_id')->Len(150);
			$blueprint->VarChar('products_length')->Len(150);
			$blueprint->VarChar('products_width')->Len(150);
			$blueprint->VarChar('products_height')->Len(150);
			$blueprint->VarChar('products_weight')->Len(150);

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
