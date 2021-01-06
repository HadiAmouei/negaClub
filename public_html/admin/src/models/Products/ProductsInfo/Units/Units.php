<?php
namespace model;
use DATABASE\Model;
class Units  extends Model {
    public $_table = 'tblUnits';
    public $_key = 'unit_id';
    public $_Entity =  \model\Entity\UnitsEntity::class;
}