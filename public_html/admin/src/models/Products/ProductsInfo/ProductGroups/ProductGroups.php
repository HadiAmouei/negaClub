<?php
namespace model;
use DATABASE\Model;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\ProductGroupsEntity;

class ProductGroups  extends Model {
    public $_table = 'tblProductGroups';
    public $_key = 'product_group_id';
    public $_Entity =  \model\Entity\ProductGroupsEntity::class;

    public static function toOption()
    {
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        /** @var ProductGroupsEntity $productgroup */
        foreach (self::getAllActives() as $productgroup) {
            $output[] = HtmlTags::Option()->Value("$productgroup->product_group_id")->Content($productgroup->product_groups_name);
        }
        return implode('', $output);
    }
}