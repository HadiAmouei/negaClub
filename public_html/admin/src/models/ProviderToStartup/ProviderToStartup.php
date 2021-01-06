<?php
namespace model;
use DATABASE\Model;
class ProviderToStartup  extends Model {
    public $_table = 'tblProviderToStartup';
    public $_key = 'provider_to_startup_id';
    public $_Entity =  \model\Entity\ProviderToStartupEntity::class;
}