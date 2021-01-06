<?php
namespace model;
use DATABASE\Model;
use FwHtml\Elements\Tags\Main\HtmlTags;

class Users  extends Model {
    public $_table = 'UsersTable';
    public $_key = 'user_id';

    public static function toOption(string $roleClassName) {
        $roleClassName = str_replace("FwAuthSystem\Role\\","",$roleClassName);
        $output = [];
        foreach (self::getAllFiltered("role_name", $roleClassName) as $callCenter) {
            $output[] = HtmlTags::Option()->Value($callCenter->user_id)->Content($callCenter->user_name .' '.$callCenter->user_last_name);
        }
        return implode('',$output);
    }
}