<?php
namespace model;
use DATABASE\Model;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\ProductSubSubGroupsEntity;

class ProductSubSubGroups  extends Model {
    public $_table = 'tblProductSubSubGroups';
    public $_key = 'product_sub_sub_group_id';
    public $_Entity =  \model\Entity\ProductSubSubGroupsEntity::class;

    public static function toOption()
    {
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        /** @var ProductSubSubGroupsEntity $productsubsubgroup */
        foreach (self::getAllActives() as $productsubsubgroup) {
            $output[] = HtmlTags::Option()->Value("$productsubsubgroup->product_sub_sub_group_id")->Content($productsubsubgroup->product_sub_sub_group_name);
        }
        return implode('', $output);
    }
}