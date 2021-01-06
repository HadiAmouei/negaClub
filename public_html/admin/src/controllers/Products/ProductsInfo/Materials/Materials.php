<?php

namespace controller;

use ControllerScheme;
use FwConnection;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\MaterialsEntity;
use model\Entity\ProductionsEntity;

class Materials extends ControllerScheme
{
    const name = 'متریال';
    public static $__uploads = ["material_image" => __SOURCE__ . "images/Materials/"];

    public function getMaterialWithSubGroup()
    {
        $group_id = $this->requestArray()['product_group_id'];
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        foreach ($this->materialByGroupId($group_id) as $material) {
//            if (isActive($this,$material)) {
            $output[] = HtmlTags::Option()->Value($material->material_id)->Content($material->material_name);
//            }
        }
        return implode('', $output);
    }

    private function materialByGroupId($group_id)
    {
        $output = [];
        foreach ($this->model()::getAllFiltered('product_group_id', "$group_id") as $material) {
            if (!($material instanceof MaterialsEntity)) {
                $material = MaterialsEntity::fromArray((array)$material);
            }
            $output[] = $material;
        }
        return $output;
    }
}