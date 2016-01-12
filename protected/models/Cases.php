<?php

Yii::import('application.models._base.BaseCases');

class Cases extends BaseCases {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getCase() {
        $criteria = new CDbCriteria();
        $criteria->order = 'id DESC';
        $count = Cases::model()->count($criteria);
        $pages = new CPagination($count);

        // results per page
        $pages->pageSize = Yii::app()->params['limit'];
        $pages->applyLimit($criteria);
        $models = Cases::model()->findAll($criteria);
        return array(
            'models' => $models,
            'pages' => $pages
        );
    }

    public function edit($post) {
        $doc = Cases::model()->findByPk($post['id']);
        if ($doc) {
            $doc->setAttributes($post);
            if (isset($post['date_prosecution'])) {
                $doc->date_prosecution = strtotime($post['date_prosecution']);
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
        $model = new Cases;
        $model->setAttributes($post);
        if (isset($post['date_prosecution'])) {
            $model->date_prosecution = strtotime($post['date_prosecution']);
        }
        if ($model->save(FALSE)) {
            return TRUE;
        }
        return FALSE;
    }

    public function searchByCondition($attr, $cnt = null, $pagination = 1) {
        $criteria = new CDbCriteria;
        if (!empty($attr['date_start']) && !empty($attr['date_end'])) {
            $date_start = strtotime($attr['date_start']);
            $date_end = strtotime($attr['date_end']);
            $criteria->addBetweenCondition('date_prosecution', $date_start, $date_end);
        }
        if (!empty($attr['obj_name'])) {
            $obj_name = $attr['obj_name'];
            $criteria->addSearchCondition('accused', $obj_name);
        }
        if (!empty($attr['assignee'])) {
            $assignee = $attr['assignee'];
            $criteria->addSearchCondition('investigator', $assignee);
        }
        if (!empty($attr['keyword'])) {
            $keyword = $attr['keyword'];
            $criteria->addSearchCondition('accused', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('investigator', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('detention_period', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('investigation_period', $keyword, true, "OR", "LIKE");
            $criteria->addSearchCondition('case_name', $keyword, true, "OR", "LIKE");
        }
        $count = Cases::model()->count($criteria);
        if (!empty($cnt)) {
            return $count;
        }
        if ($pagination != 1) {
            $result = Cases::model()->findAll($criteria);
            return $result;
        }
        $pages = new CPagination($count);

        // results per page
        $pages->pageSize = Yii::app()->params['limit'];
        $pages->applyLimit($criteria);
        $result = Cases::model()->findAll($criteria);
        return array(
            'models' => $result,
            'pages' => $pages
        );
    }

}
