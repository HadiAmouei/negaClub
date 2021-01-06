<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class ParsasMigration extends Migratable {
    const modelName = 'Parsas';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('parsa_id');
			$blueprint->VarChar('parsa_name')->Len(150);

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
