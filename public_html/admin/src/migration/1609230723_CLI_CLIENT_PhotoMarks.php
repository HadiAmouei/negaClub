<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class PhotoMarksMigration extends Migratable {
    const modelName = 'PhotoMarks';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('photo_mark_id');
			$blueprint->Int('brand_id')->Len(150);
			$blueprint->VarChar('photo_marks_name')->Len(150);
			$blueprint->VarChar('photo_marks_image')->Len(150);
			$blueprint->Text('photo_marks_desc');

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
