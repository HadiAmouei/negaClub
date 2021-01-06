<?php
namespace model;
use DATABASE\Model;
class GallerySubSubGroups  extends Model {
    public $_table = 'tblGallerySubSubGroups';
    public $_key = 'gallery_sub_sub_group_id';
    public $_Entity =  \model\Entity\GallerySubSubGroupsEntity::class;
}