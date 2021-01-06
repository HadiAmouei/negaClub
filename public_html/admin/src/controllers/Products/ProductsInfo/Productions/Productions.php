<?php
namespace controller;
use ControllerScheme;
use FwConnection;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\ProductionsEntity;

class Productions extends ControllerScheme {
    const name = 'نوع تولید';

    public function getProductionWithSubGroup() {
        $group_id = $this->requestArray()['product_sub_group_id'];
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        foreach ($this->productionBySubGroupId($group_id) as $production) {
            if (isActive($this,$production)) {
                $output[] = HtmlTags::Option()->Value($production->production_id)->Content($production->production_type);
            }
        }
        return implode('', $output);
    }
    private function productionBySubGroupId($group_id) {
        $output = [];
        foreach ($this->model()::getAllFiltered('product_sub_group_id', "$group_id") as $production) {
            if (!($production instanceof ProductionsEntity)){
                $production = ProductionsEntity::fromArray((array)$production);
            }
            $output[] = $production;
        }
        return $output;
    }
}