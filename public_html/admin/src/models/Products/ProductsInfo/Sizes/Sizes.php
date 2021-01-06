<?php
namespace model;
use DATABASE\Model;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\SizesEntity;

class Sizes  extends Model {
    public $_table = 'tblSizes';
    public $_key = 'size_id';
    public $_Entity =  \model\Entity\SizesEntity::class;

    public static function toOption()
    {
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        /** @var SizesEntity $size */
        foreach (self::getAll() as $size) {
            $output[] = HtmlTags::Option()->Value("$size->size_id")->Content($size->size_name);
        }
        return implode('', $output);
    }
}