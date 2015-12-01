<?php

Yii::import('application.models._base.BaseDocumentary');

class Documentary extends BaseDocumentary {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getDocumentary() {
        $criteria = new CDbCriteria();
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
            if ($doc->save(FALSE)) {
                return 1;
            } else {
                return 2;
            }
        } else {
            return 0;
        }
    }
    
    public function add($post)
    {
        $model = new Documentary;
        $model->setAttributes($post);
        if($model->save(FALSE))
        {
            return TRUE;
        }
        return FALSE;
    }

}
