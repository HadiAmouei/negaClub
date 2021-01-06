<?php

namespace controller;

use ControllerScheme;
use FwConnection;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\CitiesEntity;
use model\Entity\ProductSubGroupsEntity;

class ProductSubGroups extends ControllerScheme
{
    const name = 'زیرگروه';

    public static $__uploads = ["product_sub_group_icon" => __SOURCE__ . "images/ProductSubGroups/", "product_sub_group_image" => __SOURCE__ . "images/ProductSubGroups/"];


    public function getSubWithGroup() {
        $groupId = $this->requestArray()['product_group_id'];
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        foreach ($this->subByGroupId($groupId) as $sub) {
            if (isActive($this,$sub)) {
                $output[] = HtmlTags::Option()->Value($sub->product_sub_group_id)->Content($sub->product_sub_group_name);
            }
        }
        return implode('', $output);
    }

    private function subByGroupId($groupId) {
        $output = [];
        foreach ($this->model()::getAllFiltered('product_group_id', "$groupId") as $sub) {
            if (!($sub instanceof ProductSubGroupsEntity)){
                $sub = ProductSubGroupsEntity::fromArray((array)$sub);
            }
            $output[] = $sub;
        }
        return $output;
    }

}