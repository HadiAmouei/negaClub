<?php
namespace controller;
use ControllerScheme;
use FwConnection;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\CitiesEntity;
use model\Entity\ProductSubGroupsEntity;
use model\Entity\ProductSubSubGroupsEntity;

class ProductSubSubGroups extends ControllerScheme {
    const name = 'زیر , زیر گروه';

    public static $__uploads = ["product_sub_sub_group_icon" => __SOURCE__."images/ProductSubSubGroups/","product_sub_sub_group_image" => __SOURCE__."images/ProductSubSubGroups/"];

    public function getSubSubWithSubGroup() {
        $subId = $this->requestArray()['product_sub_group_id'];
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        foreach ($this->subSubBySubId($subId) as $subSub) {
            if (isActive($this,$subSub)) {
                $output[] = HtmlTags::Option()->Value($subSub->product_sub_sub_group_id)->Content($subSub->product_sub_sub_group_name);
            }
        }
        return implode('', $output);
    }
    private function subSubBySubId($subId) {
        $output = [];
        foreach ($this->model()::getAllFiltered('product_sub_group_id', "$subId") as $subSub) {
            if (!($subSub instanceof ProductSubSubGroupsEntity)){
                $subSub = ProductSubSubGroupsEntity::fromArray((array)$subSub);
            }
            $output[] = $subSub;
        }
        return $output;
    }

}