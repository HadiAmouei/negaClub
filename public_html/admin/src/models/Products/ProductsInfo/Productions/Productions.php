<?php
namespace model;
use DATABASE\Model;
class Productions  extends Model {
    public $_table = 'tblProductions';
    public $_key = 'production_id';
    public $_Entity =  \model\Entity\ProductionsEntity::class;
}