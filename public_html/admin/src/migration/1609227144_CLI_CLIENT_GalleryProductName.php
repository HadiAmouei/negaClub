<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class GalleryProductNameMigration extends Migratable {
    const modelName = 'GalleryProductName';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('gallery_product_nam_id');
			$blueprint->Int('product_id')->Len(150);
			$blueprint->VarChar('gallery_product_name_name')->Len(150);
			$blueprint->VarChar('gallery_product_name_image')->Len(150);
			$blueprint->Text('gallery_product_name_desc');

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
