<?php
namespace model;
use DATABASE\Model;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\MaterialsEntity;

class Materials  extends Model {
    public $_table = 'tblMaterials';
    public $_key = 'material_id';
    public $_Entity =  \model\Entity\MaterialsEntity::class;

    public static function toOption()
    {
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        /** @var MaterialsEntity $material */
        foreach (self::getAll() as $material) {
            $output[] = HtmlTags::Option()->Value("$material->material_id")->Content($material->material_name);
        }
        return implode('', $output);
    }
}