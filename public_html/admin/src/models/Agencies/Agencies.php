<?php
namespace model;
use DATABASE\Model;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\AgenciesEntity;

class Agencies  extends Model {
    public $_table = 'tblAgencies';
    public $_key = 'agency_id';
    public $_Entity =  \model\Entity\AgenciesEntity::class;

    public static function toOption()
    {
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        /** @var AgenciesEntity $agencies */
        foreach (self::getAllActives() as $agencies) {
            $output[] = HtmlTags::Option()->Value("$agencies->agency_id")->Content($agencies->agency_name);
        }
        return implode('', $output);
    }
}