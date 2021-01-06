<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class ProductGroupGalleriesMigration extends Migratable {
    const modelName = 'ProductGroupGalleries';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('product_group_gallerie_id');
			$blueprint->Int('product_group_id')->Len(150);
			$blueprint->VarChar('group_gallerie_name')->Len(150);
			$blueprint->VarChar('group_gallerie_image')->Len(150);
			$blueprint->Text('group_gallerie_desc');

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
