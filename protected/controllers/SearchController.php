<?php

class SearchController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionSearchProcess() {
        if (Yii::app()->request->isPostRequest && isset($_POST)) {
            $cases_data = Cases::model()->searchByCondition($_POST);
        }
    }

    public function actionSearchResult() {
        $this->render('searchResult');
    }

    public function actionResultDocumentary() {
        $data = Documentary::model()->searchByCondition($_GET);
        $this->render('resultDocumentary', $data);
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
