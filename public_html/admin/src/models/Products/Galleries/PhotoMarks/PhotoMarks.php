<?php
namespace model;
use DATABASE\Model;
class PhotoMarks  extends Model {
    public $_table = 'tblPhotoMarks';
    public $_key = 'photo_mark_id';
    public $_Entity =  \model\Entity\PhotoMarksEntity::class;
}