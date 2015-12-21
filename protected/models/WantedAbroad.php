<?php

Yii::import('application.models._base.BaseWantedAbroad');

class WantedAbroad extends BaseWantedAbroad {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getWantedAbroad() {
        $criteria = new CDbCriteria();
        $criteria->order = 'id DESC';
        $count = WantedAbroad::model()->count($criteria);
        $pages = new CPagination($count);

        // results per page
        $pages->pageSize = Yii::app()->params['limit'];
        $pages->applyLimit($criteria);
        $models = WantedAbroad::model()->findAll($criteria);
        return array(
            'models' => $models,
            'pages' => $pages
        );
    }

    public function edit($post) {
        $doc = WantedAbroad::model()->findByPk($post['id']);
        if ($doc) {
            $doc->setAttributes($post);
            if (isset($post['date_publish'])) {
                $doc->date_publish = strtotime($post['date_publish']);
            }
            if ($doc->save(FALSE)) {
                return 1;
            } else {
                return 2;
            }
        } else {
            return 0;
        }
    }

    public function add($post) {
        $model = new WantedAbroad;
        $model->setAttributes($post);
        if (isset($post['date_publish'])) {
            $model->date_publish = strtotime($post['date_publish']);
        }
        if ($model->save(FALSE)) {
            return TRUE;
        }
        return FALSE;
    }

    public function searchByCondition($attr, $cnt = null) {
        $criteria = new CDbCriteria;
        if (!empty($attr['date_start']) && !empty($attr['date_end'])) {
            $date_start = strtotime($attr['date_start']);
            $date_end = strtotime($attr['date_end']);
            $criteria->addBetweenCondition('date_publish', $date_start, $date_end);
        }
        if (!empty($attr['obj_name'])) {
            $obj_name = $attr['obj_name'];
            $criteria->addSearchCondition('object_name', $obj_name);
        }
        if (!empty($attr['nation'])) {
            $nation = $attr['nation'];
            $criteria->addSearchCondition('nation_request', $nation);
        }
        if (!empty($attr['assignee'])) {
            $assignee = $attr['assignee'];
            $criteria->addSearchCondition('staff_assigned', $assignee);
        }
        if (!empty($attr['keyword'])) {
            $keyword = $attr['keyword'];
            $criteria->addSearchCondition('nation_request', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('object_name', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('wanted_number', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('crime', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('staff_assigned', $keyword, true, "OR", "LIKE");
        }
        $count = WantedAbroad::model()->count($criteria);
        if (!empty($cnt)) {
            return $count;
        }
        $pages = new CPagination($count);

        // results per page
        $pages->pageSize = Yii::app()->params['limit'];
        $pages->applyLimit($criteria);
        $result = WantedAbroad::model()->findAll($criteria);
        return array(
            'models' => $result,
            'pages' => $pages
        );
    }

}
