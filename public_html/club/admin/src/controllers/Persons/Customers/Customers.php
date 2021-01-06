<?php
namespace controller;
use ControllerScheme;
use FwConnection;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\IndividualsEntity;

class Customers extends ControllerScheme
{
    const name = 'مشتری';
    public static $__uploads = ["customer_image" => __SOURCE__ . "images/Persons/Customers/"];
//
//    public function getMobile()
//    {
//        $id = $_POST['id'];
//        $startUp = $_POST['startUp'];
//
//        $res = FwConnection::conn()->query("select * from tblStartupUsers where `customer_id` ='$id' AND `startup_id` ='$startUp'")->rowCount();
//        if ($res >= 1) {
//            return 'again';
//        } else {
//            $individualId = $this->model()::get($_POST['id'])->individual_id;
//            $mobile = \model\Individuals::get($individualId)->individual_mobile;
//            return $mobile;
//        }
//    }
//
//    public function getCustomersNotInStartup()
//    {
//        $startUp = $_POST['startup_id'];
//        $query = FwConnection::conn()->query("SELECT * FROM tblCustomers WHERE customer_id NOT IN (SELECT `tblStartupUsers`.`customer_id` FROM `tblStartupUsers` WHERE startup_id='$startUp')")->fetchAll();
//        $res = '<option value="" selected disabled>لطفا یک مورد را انتخاب کنید</option>';
//        foreach ($query as $item) {
//            $mobile = \model\Individuals::get($item['individual_id'])->individual_mobile;
//            $res .= '<option  value="' . $item['customer_id'] . '">' . $item['customer_fname'] . ' ' . $item['customer_lname'] . '_' . $mobile. '</option>';
//        }
//        return $res;
//
//    }

}