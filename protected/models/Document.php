<?php

Yii::import('application.models._base.BaseDocument');

class Document extends BaseDocument {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getDocument() {
        $criteria = new CDbCriteria();
        $criteria->order = 'id DESC';
        $count = Document::model()->count($criteria);
        $pages = new CPagination($count);

        // results per page
        $pages->pageSize = Yii::app()->params['limit'];
        $pages->applyLimit($criteria);
        $models = Document::model()->findAll($criteria);
        return array(
            'models' => $models,
            'pages' => $pages
        );
    }

    public function edit($post) {
        $doc = Document::model()->findByPk($post['id']);
        if ($doc) {
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
        $model = new Document;
        $model->setAttributes($post);
        if ($model->save(FALSE)) {
            return TRUE;
        }
        return FALSE;
    }

}
