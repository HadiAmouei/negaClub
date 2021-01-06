<?php
namespace model;
use DATABASE\Model;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\SupervisionsEntity;

class Supervisions  extends Model {
    public $_table = 'tblSupervisions';
    public $_key = 'supervision_id';
    public $_Entity =  \model\Entity\SupervisionsEntity::class;
    public static function toOption()
    {
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        /** @var SupervisionsEntity $supervision */
        foreach (self::getAllActives() as $supervision) {
            $output[] = HtmlTags::Option()->Value("$supervision->supervision_id")->Content($supervision->supervision_name);
        }
        return implode('', $output);
    }

}