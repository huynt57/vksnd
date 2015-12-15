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
    
     public function searchByCondition($attr) {
        $keyword = NULL;
        if (!empty($attr['keyword'])) {
            $keyword = $attr['keyword'];
        }
        $criteria = new CDbCriteria;
        $criteria->addSearchCondition('t.status', 'Reviewing', true, "AND", "LIKE");
        $criteria->addSearchCondition("status", 'On Hold', 'true', 'OR');
        $criteria->addSearchCondition();
        $result = Documentary::model()->findAll($criteria);
        return $result;
    }

}
