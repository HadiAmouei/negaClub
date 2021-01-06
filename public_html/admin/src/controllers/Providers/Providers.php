<?php
namespace controller;
use ControllerScheme;
use FwConnection;
use FwHtml\Elements\Tags\Main\HtmlTags;

class Providers extends ControllerScheme
{
    const name = 'پذیرنده';

    public static $__uploads = ["provider_image" => __SOURCE__."images/Providers/"];



    public function getProvidersNotInStartup()
    {
        $startup_id = $this->requestArray()['startup_id'];
        $output = [
            HtmlTags::Option()->Selected()->Disabled()->Content("لطفا یک مورد را انتخاب کنید")
        ];
        foreach (\model\Providers::getAllNotInStartUp($startup_id) as $item) {
            if (isActive($this,$item)) {
                $output[] = HtmlTags::Option()->Value($item->provider_id)->Content($item->name);
            }
        }
        return implode('',$output);

    }

}