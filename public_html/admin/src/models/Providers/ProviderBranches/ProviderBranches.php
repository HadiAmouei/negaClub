<?php
namespace model;
use DATABASE\Model;
use FwHtml\Elements\Tags\Main\HtmlTags;

use model\Entity\ProviderBranchesEntity;

class ProviderBranches  extends Model {
    public $_table = 'tblProviderBranches';
    public $_key = 'provider_branch_id';
    public $_Entity =  \model\Entity\ProviderBranchesEntity::class;
    public static function toOption()
    {
        $output = [HtmlTags::Option()->Disabled()->Selected()->Content("لطفا یک مورد را انتخاب کنید")];
        /** @var ProviderBranchesEntity $providerbranch */
        foreach (self::getAllActives() as $providerbranch) {
            $output[] = HtmlTags::Option()->Value("$providerbranch->provider_branch_id")->Content($providerbranch->provider_branch_name);
        }
        return implode('', $output);
    }
}