<?php
namespace model\Entity;
use DATABASE\ORM\Interact\Entities\EntityScheme;
class ProvidersEntity extends EntityScheme {
    public $provider_id;
    public $name;
    public $image;
    public $individual_id;
    public $provider_tel;
    public $caste_id;
    public $social_media_id;
    public function model() {
        return new \model\Startups();
    }
    protected function dictionary(): array {
        return  [
            'provider_id' => 'provider_id',
            'name'=>'provider_name',
            'image' => 'provider_image',
            'individual_id'=>'individual_id',
            'provider_tel'=>'provider_tel',
            'caste_id'=>'caste_id',
            'social_media_id'=>'social_media_id',
        ];
    }
}