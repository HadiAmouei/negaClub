<?php
namespace controller;
use ControllerScheme;
use FwConnection;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\CitiesEntity;
use model\Entity\CountriesEntity;
use model\Entity\StatesEntity;

class States extends ControllerScheme {
    const name = 'استان';


    public function getStateInCountry() {
        $countryId = $this->requestArray()['country_id'];
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        foreach ($this->StateBycountrieId($countryId) as $state) {
            if (isActive($this,$state)) {
                $output[] = HtmlTags::Option()->Value($state->state_id)->Content($state->state_name);
            }
        }
        return implode('', $output);
    }

    private function StateBycountrieId($countryId) {
        $output = [];
        foreach ($this->model()::getAllFiltered('country_id', "$countryId") as $state) {
            if (!($state instanceof StatesEntity)){
                $state = StatesEntity::fromArray((array)$state);
            }
            $output[] = $state;
        }
        return $output;
    }
    public function getActiveCities() {
        $output = [];
        foreach ($this->model()::getAllActives() as $city){
            /** @var StatesEntity $city */
            $output[] = $city;
        }
        return $output;
    }

}