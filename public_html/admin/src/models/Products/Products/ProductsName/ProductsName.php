<?php
namespace model;
use DATABASE\Model;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\ProductsNameEntity;

class ProductsName  extends Model {
    public $_table = 'tblProductsName';
    public $_key = 'product_id';
    public $_Entity =  \model\Entity\ProductsNameEntity::class;


    public static function toOption()
    {
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        /** @var ProductsNameEntity $productname */
        foreach (self::getAllActives() as $productname) {
            $output[] = HtmlTags::Option()->Value("$productname->product_id")->Content($productname->product_name);
        }
        return implode('', $output);
    }
}