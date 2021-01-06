<?php
namespace model;
use DATABASE\Model;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\StartupUsersEntity;

class StartupUsers  extends Model {
    public $_table = 'tblStartupUsers';
    public $_key = 'startup_user_id';
    public $_Entity =  \model\Entity\StartupUsersEntity::class;
    public static function toOption()
    {
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        /** @var StartupUsersEntity $StartupUsers */
        foreach (self::getAllActives() as $StartupUsers) {
            $output[] = HtmlTags::Option()->Value("$StartupUsers->startup_user_id")->Content($StartupUsers->startup_user_name);
        }
        return implode('', $output);
    }
}