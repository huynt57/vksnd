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

}
