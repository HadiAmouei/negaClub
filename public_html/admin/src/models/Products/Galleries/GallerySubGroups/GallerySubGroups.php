<?php
namespace model;
use DATABASE\Model;
class GallerySubGroups  extends Model {
    public $_table = 'tblGallerySubGroups';
    public $_key = 'gallery_sub_group_id';
    public $_Entity =  \model\Entity\GallerySubGroupsEntity::class;
}