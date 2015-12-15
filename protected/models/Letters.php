<?php

Yii::import('application.models._base.BaseLetters');

class Letters extends BaseLetters {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getLetter() {
        $criteria = new CDbCriteria();
         $criteria->order = 'id DESC';
        $count = Letters::model()->count($criteria);
        $pages = new CPagination($count);

        // results per page
        $pages->pageSize = Yii::app()->params['limit'];
        $pages->applyLimit($criteria);
        $models = Letters::model()->findAll($criteria);
        return array(
            'models' => $models,
            'pages' => $pages
        );
    }

    public function edit($post) {
        $doc = Letters::model()->findByPk($post['id']);
        if ($doc) {
            $doc->setAttributes($post);
            if (isset($post['signed_recieve'])) {
                $doc->signed_recieve = strtotime($post['signed_recieve']);
            }
            if (isset($post['signed_date'])) {
                $doc->signed_date = strtotime($post['signed_date']);
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
        $model = new Letters();
        $model->setAttributes($post);
        if (isset($post['signed_recieve'])) {
            $model->signed_recieve = strtotime($post['signed_recieve']);
        }
        if (isset($post['signed_date'])) {
            $model->signed_date = strtotime($post['signed_date']);
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
