<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class PhotoStuffsMigration extends Migratable {
    const modelName = 'PhotoStuffs';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('photo_stuff_id');
			$blueprint->Int('material_id')->Len(150);
			$blueprint->VarChar('photo_stuffs_name')->Len(150);
			$blueprint->VarChar('photo_stuffs_image')->Len(150);
			$blueprint->Text('photo_stuffs_desc');

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
