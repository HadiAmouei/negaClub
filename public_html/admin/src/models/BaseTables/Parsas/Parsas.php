<?php
namespace model;
use DATABASE\Model;
class Parsas  extends Model {
    public $_table = 'tblParsas';
    public $_key = 'parsa_id';
    public $_Entity =  \model\Entity\ParsasEntity::class;
}