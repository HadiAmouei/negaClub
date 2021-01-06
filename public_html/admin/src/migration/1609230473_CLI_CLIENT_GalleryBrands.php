<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class GalleryBrandsMigration extends Migratable {
    const modelName = 'GalleryBrands';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('gallery_brand_id');
			$blueprint->Int('brand_id')->Len(150);
			$blueprint->VarChar('gallery_brand_name')->Len(150);
			$blueprint->VarChar('gallery_brand_image')->Len(150);
			$blueprint->Text('gallery_brand_desc');

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
