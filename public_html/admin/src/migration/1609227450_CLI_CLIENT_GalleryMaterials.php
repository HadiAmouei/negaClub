<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class GalleryMaterialsMigration extends Migratable {
    const modelName = 'GalleryMaterials';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('gallery_material_id');
			$blueprint->Int('material_id')->Len(150);
			$blueprint->VarChar('gallery_material_name')->Len(150);
			$blueprint->VarChar('gallery_material_image')->Len(150);
			$blueprint->Text('gallery_material_desc');

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
