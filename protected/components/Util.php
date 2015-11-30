<?php

class Util {

    public static function getVoiceUploadPath() {
        return Yii::app()->basePath . '/../upload/message/voice/';
    }

    public static function getUserAvatarUploadPath() {
        return Yii::app()->basePath . '/../upload/user/avatar/';
    }

    public static function getUserAvatarPath() {
        $url = 'http://' . Yii::app()->request->getServerName();
        return $url . '/upload/user/avatar/';
    }

    public static function getVoicePath() {
        $url = 'http://' . Yii::app()->request->getServerName();
        return $url . '/upload/message/voice/';
    }

    public static function getAmeneties() {
        return array(
            'tv' => 'TV',
            'essential_ameneties' => 'Thiết yếu',
            'air_conditioner' => 'Điều hòa nhiệt độ',
            'cable_tv' => 'Truyền hình cáp',
            'internet' => 'Internet',
            'kitchen' => 'Nhà bếp',
            'wifi' => 'Wifi',
            'heating' => 'Lò sưởi',
            'hot_tub' => 'Bồn tắm nước nóng',
            'washing_machine' => 'Máy giặt',
            'drier' => 'Máy sấy',
            'breakfast' => 'Bữa sáng',
            'toothbrush' => 'Bàn chải đánh răng',
            'sampoo' => 'Dầu gội',
            'cable_k' => 'Truyền hình K+',
        );
    }

    public static function getRoomtypes($room_types) {
        $value = NULL;
        switch ($room_types) {
            case 'entireHouse':
                $value = 'Toàn bộ nhà';
                break;
            case 'privateRoom':
                $value = 'Phòng cá nhân';
                break;
            case 'sharedRoom':
                $value = 'Phòng chia sẻ';
                break;
        }
        return $value;
    }

    public static function getLocation($ward_id, $district_id, $province_id) {
        $ward_type = null;
        $ward_name = null;
        $district_type = null;
        $district_name = null;
        $province_type = null;
        $province_name = null;
        if (isset($ward_id)) {
            $ward = Ward::model()->findByPk($ward_id);
            if ($ward) {
                $ward_type = $ward->type;
                $ward_name = $ward->name;
            }
        }
        if (isset($district_id)) {
            $district = District::model()->findByPk($district_id);
            if ($district) {
                $district_type = $district->type;
                $district_name = $district->name;
            }
        }
        if (isset($province_id)) {
            $province = Province::model()->findByPk($province_id);
            if ($province) {
                $province_type = $province->type;
                $province_name = $province->name;
            }
        }
        return $ward_type . " " . $ward_name . ", " . $district_type . " " . $district_name . ", " . $province_type . " " . $province_name;
    }

}
