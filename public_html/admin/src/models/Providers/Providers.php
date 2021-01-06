<?php
namespace model;
use DATABASE\Model;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\ProvidersEntity;

class Providers  extends Model {
    public $_table = 'tblProviders';
    public $_key = 'provider_id';
    public $_Entity = ProvidersEntity::class;

    public static function toOption()
    {
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        /** @var ProvidersEntity $provider */
        foreach (self::getAllActives() as $provider) {
            $output[] = HtmlTags::Option()->Value("$provider->provider_id")->Content($provider->name);
        }
        return implode('', $output);
    }

    public static function getAllNotInStartUp($startup_id)
    {
        $provider_ids = ProviderToStartup::getAllFiltered("startup_id",$startup_id)->map(function ($item){
            return $item->provider_id;
        })->all();
        return self::Db()->whereNotIn("provider_id",$provider_ids)->get();
    }
}