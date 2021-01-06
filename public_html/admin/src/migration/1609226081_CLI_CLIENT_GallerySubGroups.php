<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class GallerySubGroupsMigration extends Migratable {
    const modelName = 'GallerySubGroups';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('gallery_sub_group_id');
			$blueprint->Int('product_sub_group_id')->Len(150);
			$blueprint->VarChar('gallery_sub_groups_name')->Len(150);
			$blueprint->VarChar('gallery_sub_groups_image')->Len(150);
			$blueprint->Text('gallery_sub_groups_desc');

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
