<?php
namespace model;
use DATABASE\Model;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\ProductSubGroupsEntity;

class ProductSubGroups  extends Model {
    public $_table = 'tblProductSubGroups';
    public $_key = 'product_sub_group_id';
    public $_Entity =  \model\Entity\ProductSubGroupsEntity::class;

    public static function toOption()
    {
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        /** @var ProductSubGroupsEntity $productSubGroup */
        foreach (self::getAllActives() as $productSubGroup) {
            $output[] = HtmlTags::Option()->Value("$productSubGroup->product_sub_group_id")->Content($productSubGroup->product_sub_group_name);
        }
        return implode('', $output);
    }
}