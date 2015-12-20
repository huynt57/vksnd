<?php

Yii::import('application.models._base.BaseDocumentary');

class Documentary extends BaseDocumentary {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getDocumentary() {
        $criteria = new CDbCriteria();
        $criteria->order = 'id DESC';
        $count = Documentary::model()->count($criteria);
        $pages = new CPagination($count);

        // results per page
        $pages->pageSize = Yii::app()->params['limit'];
        $pages->applyLimit($criteria);
        $models = Documentary::model()->findAll($criteria);
        return array(
            'models' => $models,
            'pages' => $pages
        );
    }

    public function edit($post) {
        $doc = Documentary::model()->findByPk($post['id']);
        if ($doc) {
            $doc->setAttributes($post);
            if (isset($post['time_in_doc'])) {
                $doc->time_in_doc = strtotime($post['time_in_doc']);
            }
            if (isset($post['date_recieve'])) {
                $doc->date_recieve = strtotime($post['date_recieve']);
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
        $model = new Documentary;
        $model->setAttributes($post);
        if (isset($post['time_in_doc'])) {
            $model->time_in_doc = strtotime($post['time_in_doc']);
        }
        if (isset($post['date_recieve'])) {
            $model->date_recieve = strtotime($post['date_recieve']);
        }
        if ($model->save(FALSE)) {
            return TRUE;
        }
        return FALSE;
    }

    public function searchByCondition($attr, $cnt = NULL) {
        $criteria = new CDbCriteria;
        if (!empty($attr['date_start']) && !empty($attr['date_end'])) {
//            $date_start = strtotime($attr['date_start']);
//            $date_end = strtotime($attr['date_end']);
//            $criteria->addBetweenCondition('date_prosecution', $date_start, $date_end);
        }
        if (!empty($attr['obj_name'])) {
            $obj_name = $attr['obj_name'];
            $criteria->addSearchCondition('obj_name', $obj_name);
        }
        if (!empty($attr['nation'])) {
            $nation = $attr['nation'];
            $criteria->addSearchCondition('country', $nation);
        }
        if (!empty($attr['assignee'])) {
            $assignee = $attr['assignee'];
            $criteria->addSearchCondition('did_by', $assignee);
        }
        if (!empty($attr['keyword'])) {
            $keyword = $attr['keyword'];
            $criteria->addSearchCondition('shortcut', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('number', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('abstract', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('country', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('did_by', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('obj_name', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('number_doc_finish', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('number_doc_send', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('signed_user', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('reciever', $keyword, true, "OR", "LIKE");
        }
        $count = Documentary::model()->count($criteria);
        if (!empty($cnt)) {
            return $count;
        }
        $pages = new CPagination($count);

        // results per page
        $pages->pageSize = Yii::app()->params['limit'];
        $pages->applyLimit($criteria);
        $result = Documentary::model()->findAll($criteria);
        return array(
            'models' => $result,
            'pages' => $pages
        );
    }

}
