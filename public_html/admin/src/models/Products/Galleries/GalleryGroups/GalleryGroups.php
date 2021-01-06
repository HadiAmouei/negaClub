<?php
namespace model;
use DATABASE\Model;
class GalleryGroups  extends Model {
    public $_table = 'tblGalleryGroups';
    public $_key = 'gallery_group_id';
    public $_Entity =  \model\Entity\GalleryGroupsEntity::class;
}