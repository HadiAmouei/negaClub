<?php
namespace model;
use DATABASE\Model;
class GalleryProductName  extends Model {
    public $_table = 'tblGalleryProductName';
    public $_key = 'gallery_product_nam_id';
    public $_Entity =  \model\Entity\GalleryProductNameEntity::class;
}