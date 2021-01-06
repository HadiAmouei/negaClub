<?php
namespace controller;
use ControllerScheme;
use FwAuthSystem\Main\UserObject;
use helpers\action\Actions;
use FwConnection;

class Startups extends ControllerScheme {
    const name = 'استارت آپ';
    
public static $__uploads = ["startup_logo" => __SOURCE__."images/Startups/"];

    public function add(?bool $csrf = true)
    {
        $csrf = ($csrf !== false);
        $array = $this->requestArray();
        foreach ((isset($this::$__defaults) ? $this::$__defaults : array()) as $key => $defaultValue) {
            if (!isset($array[$key])) {
                $array[$key] = $defaultValue;
            }
        }
        foreach ((isset($this::$__uploads) ? $this::$__uploads : array()) as $name => $path) {
            if (isset($_FILES[$name]['name']) and strlen($_FILES[$name]['name']) > 0) {
                $checkImage = checkImage($this->requestArray());
                if ($checkImage) {
                    $fileName = uploadImage($_FILES[$name], $checkImage, $path, true, $name);
                } else {
                    $fileName = uploadImage($_FILES[$name], $checkImage, $path, false, $name);
                }
                $array[$name] = $fileName;
            }
        }
        $this->setRequestArray($array);
        function generateRandomString($length = 20)
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        $token = hash_hmac('sha256', generateRandomString(), 'secret');
        $tokenRow = FwConnection::conn()->query("SELECT token FROM `tblStartups` WHERE token='$token'")->rowCount();
        if ($tokenRow >= 1) {
            $token = hash_hmac('sha256', generateRandomString(), 'secret');
        }
        $id = $this->model()->add([
            'startup_name' => $array['startup_name'],
            'startup_logo' => $array['startup_logo'],
            'startup_ip' => $array['startup_ip'],
            'startup_details' => $array['startup_details'],
            'city_id' => json_encode($array['city_id']),
            'score_to_club_score' => $array['score_to_club_score'],
            'club_score_from_score' => $array['club_score_from_score'],
            'score_to_club_credit' => $array['score_to_club_credit'],
            'club_credit_from_score' => $array['club_credit_from_score'],
            'credit_to_club_score' => $array['credit_to_club_score'],
            'club_score_from_credit' => $array['club_score_from_credit'],
            'token' => $token,
        ]);
        if ($id > 0) {
            $array = [];
            $array['data_before_action'] = json_encode([]);
            $array['data_after_action'] = json_encode(checkAll($this->requestArray(), $csrf), JSON_UNESCAPED_UNICODE);
            $array['admin_id'] = UserObject::instance()->getUserId();
            $array['date'] = time();
            $array['action_type'] = 'add';
            $array['row_id'] = $id;
            $array['tblName'] = $this->model()->_table;
            Actions::add($array);
        }
        return (showResult($id > 0, $this::name, 'افزودن'));
    }

}