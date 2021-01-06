<?php
namespace model;
use DATABASE\Model;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\ColorsEntity;

class Colors  extends Model {
    public $_table = 'tblColors';
    public $_key = 'color_id';
    public $_Entity =  \model\Entity\ColorsEntity::class;


    public static function toOption()
    {
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        /** @var ColorsEntity $color */
        foreach (self::getAll() as $color) {
            $output[] = HtmlTags::Option()->Value("$color->color_id")->Content($color->name);
        }
        return implode('', $output);
    }
}