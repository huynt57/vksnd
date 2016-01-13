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

    public function edit($post, $path) {
        $doc = Document::model()->findByPk($post['id']);
       
        if ($doc) {
            $doc->setAttributes($post);
            if (!empty($path)) {
                $doc->path = $path;
            }
            $doc->updated_at = time();
            if ($doc->save(FALSE)) {
                return 1;
            } else {
                return 2;
            }
        } else {
            return 0;
        }
    }

    public function add($post, $path) {
        $model = new Document;
        $model->setAttributes($post);
        if (!empty($path)) {
            $model->path = $path;
        }
        $model->created_at = time();
        $model->updated_at = time();
        if ($model->save(FALSE)) {
            return TRUE;
        }
        return FALSE;
    }

    public function searchByCondition($txt, $cnt = NULL, $pagination = 1) {
        $criteria = new CDbCriteria;

        if (!empty($txt)) {

            $criteria->addSearchCondition('t.name', $txt, true, 'OR', 'LIKE');
            $criteria->addSearchCondition('t.description', $txt, true, 'OR', 'LIKE');
        }

        $count = Document::model()->count($criteria);
        if (!empty($cnt)) {
            return $count;
        }
        if ($pagination != 1) {
            $result = Document::model()->findAll($criteria);
            return $result;
        }
        $pages = new CPagination($count);

        // results per page
        $pages->pageSize = Yii::app()->params['limit'];
        $pages->applyLimit($criteria);
        $result = Document::model()->findAll($criteria);
        return array(
            'models' => $result,
            'pages' => $pages
        );
    }

}
