<?php
namespace model;
use DATABASE\Model;
class Brands  extends Model {
    public $_table = 'tblBrands';
    public $_key = 'brand_id';
    public $_Entity =  \model\Entity\BrandsEntity::class;
}