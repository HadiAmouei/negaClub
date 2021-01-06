<?php

namespace FwMigrationSystem\User;

use FwMigrationSystem\Main\Migratable;
use FwMigrationSystem\Main\Migration;
use FwMigrationSystem\Resources\Blueprint;
use FwMigrationSystem\Resources\TableName;

class SocialMediaMigration extends Migratable {
    const modelName = 'SocialMedia';

    public function create_table() {
        return Migration::Create(new TableName(self::modelName), function (Blueprint $blueprint) {
            $blueprint->primary_key('social_medi_id');
			$blueprint->VarChar('social_media_name')->Len(150);
			$blueprint->VarChar('social_media_icon')->Len(150);
			$blueprint->VarChar('social_media_image')->Len(150);

             return $blueprint;
        });
    }

    public function drop_table() {
        return Migration::DropIfExists(new TableName(self::modelName));
    }
}
