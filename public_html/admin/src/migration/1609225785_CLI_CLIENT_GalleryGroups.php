<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class GalleryGroupsMigration extends Migratable {
    const modelName = 'GalleryGroups';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('gallery_group_id');
			$blueprint->Int('product_group_id')->Len(150);
			$blueprint->VarChar('gallery_group_name')->Len(150);
			$blueprint->VarChar('gallery_group_image')->Len(150);
			$blueprint->Text('gallery_group_desc');

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
