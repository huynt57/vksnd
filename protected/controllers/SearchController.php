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
        $cnt_cases_abroad = Documentary::model()->searchByCondition($_GET, true);
        var_dump($cnt_cases_abroad);
        die;
        $this->render('resultDocumentary', $data);
    }

    public function actionResultDocumentaryRecieve() {
        $data = DocumentaryRecieve::model()->searchByCondition($_GET);
        $this->render('resultDocumentaryRecieve', $data);
    }

    public function actionResultGuide() {
        $data = Guide::model()->searchByCondition($_GET);
        $this->render('resultGuide', $data);
    }

    public function actionResultOpinion() {
        $data = Opinion::model()->searchByCondition($_GET);
        $this->render('resultOpinion', $data);
    }

    public function actionResultDocumentaryAbroad() {
        $data = DocumentaryAbroad::model()->searchByCondition($_GET);
        $this->render('resultDocumentaryAbroad', $data);
    }

    public function actionResultCasesAbroadOther() {
        $data = CasesAbroadOther::model()->searchByCondition($_GET);
        $this->render('resultCasesAbroadOther', $data);
    }

    public function actionResultCase() {
        $data = Cases::model()->searchByCondition($_GET);
        $this->render('resultCase', $data);
    }

    public function actionResultLetter() {
        $data = Letters::model()->searchByCondition($_GET);
        $this->render('resultLetter', $data);
    }

    public function actionResultWantedAbroad() {
        $data = WantedAbroad::model()->searchByCondition($_GET);
        $this->render('resultWantedAbroad', $data);
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
