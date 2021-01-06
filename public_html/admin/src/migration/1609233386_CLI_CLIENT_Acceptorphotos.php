<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class AcceptorphotosMigration extends Migratable {
    const modelName = 'Acceptorphotos';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('acceptorphoto_id');
			$blueprint->VarChar('acceptor_photo_name')->Len(150);
			$blueprint->VarChar('acceptor_photo_image')->Len(150);
			$blueprint->Int('provider_branch_id')->Len(150);
			$blueprint->Text('acceptor_photo_description');

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
