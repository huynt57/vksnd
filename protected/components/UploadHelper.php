<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UploadHelper {

    public static function getUrlUploadSingleImage($obj, $user_id) {
        $ext_arr = array('png', 'jpg', 'jpeg', 'bmp', 'pdf', 'txt', 'doc', 'docx', 'xls', 'xlsx');
        $name = StringHelper::filterString($obj['name']);
        //$name = StringHelper::unicode_str_filter($name);
        // $name = StringHelper::makeUrlString($name);
        $original_name = $name;
        $name = StringHelper::unicode_str_filter($name);

        // $name = StringHelper::makeUrlString($name);
        $storeFolder = Yii::getPathOfAlias('webroot') . '/uploads/' . date('Y-m-d', time()) . '/' . $user_id . '/';
        $pathUrl = 'uploads/' . date('Y-m-d', time()) . '/' . $user_id . '/' . time() . $name;
        if (!file_exists($storeFolder)) {
            mkdir($storeFolder, 0777, true);
        }
        $tempFile = $obj['tmp_name'];
        $targetFile = $storeFolder . time() . $name;
        $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        if (in_array($ext, $ext_arr)) {
            if (move_uploaded_file($tempFile, $targetFile)) {
                return array('path' => $pathUrl, 'name' => $original_name);
            } else {
                return NULL;
            }
        } else {
            return NULL;
        }
    }

    public static function getUrlUploadMultiImages($obj, $user_id) {
        $url_arr = array();
        foreach ($obj["tmp_name"] as $key => $tmp_name) {
            $ext_arr = array('png', 'jpg', 'jpeg', 'bmp', 'pdf', 'txt', 'doc', 'docx', 'xls', 'xlsx');
            $name = StringHelper::filterString($obj['name'][$key]);
            $storeFolder = Yii::getPathOfAlias('webroot') . '/uploads/' . date('Y-m-d', time()) . '/' . $user_id . '/';
            $pathUrl = 'uploads/' . date('Y-m-d', time()) . '/' . $user_id . '/' . time() . $name;
            if (!file_exists($storeFolder)) {
                mkdir($storeFolder, 0777, true);
            }
            $tempFile = $obj['tmp_name'][$key];
            $targetFile = $storeFolder . time() . $name;
            $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
            if (in_array($ext, $ext_arr)) {
                if (move_uploaded_file($tempFile, $targetFile)) {
                    array_push($url_arr, $pathUrl);
                } else {
                    return NULL;
                }
            } else {
                return NULL;
            }
        }
        return $url_arr;
    }

}
