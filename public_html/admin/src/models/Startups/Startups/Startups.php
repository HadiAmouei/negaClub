<?php
namespace model;
use DATABASE\Model;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\StartupsEntity;

class Startups  extends Model {
    public $_table = 'tblStartups';
    public $_key = 'startup_id';
    public $_Entity =  \model\Entity\StartupsEntity::class;

    public static function toOption()
    {
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        /** @var StartupsEntity $startups */
        foreach (self::getAllActives() as $startups) {
            $output[] = HtmlTags::Option()->Value("$startups->startup_id")->Content($startups->startup_name);
        }
        return implode('', $output);
    }

}
