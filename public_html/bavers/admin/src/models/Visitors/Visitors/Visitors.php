<?php
namespace model;
use DATABASE\Model;
class Visitors  extends Model {
    public $_table = 'tblVisitors';
    public $_key = 'visitor_id';
    public $_Entity =  \model\Entity\VisitorsEntity::class;
}