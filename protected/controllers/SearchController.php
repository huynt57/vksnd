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

    public function countResultEverything($params) {
        $documentary_cnt = Documentary::model()->searchByCondition($params, true);
        Yii::app()->session['documentary_cnt'] = $documentary_cnt;
        $documentaryRecieve_cnt = DocumentaryRecieve::model()->searchByCondition($params, true);
        Yii::app()->session['documentaryRecieve_cnt'] = $documentaryRecieve_cnt;
        $guide_cnt = Guide::model()->searchByCondition($params, true);
        Yii::app()->session['guide_cnt'] = $guide_cnt;
        $opinion_cnt = Opinion::model()->searchByCondition($params, true);
        Yii::app()->session['opinion_cnt'] = $opinion_cnt;
        $documentaryAbroad_cnt = DocumentaryAbroad::model()->searchByCondition($params, true);
        Yii::app()->session['documentaryAbroad_cnt'] = $documentaryAbroad_cnt;
        $casesAbroadOther_cnt = CasesAbroadOther::model()->searchByCondition($params, true);
        Yii::app()->session['casesAbroadOther_cnt'] = $casesAbroadOther_cnt;
        $case_cnt = Cases::model()->searchByCondition($params, true);
        Yii::app()->session['case_cnt'] = $case_cnt;
        $letter_cnt = Letters::model()->searchByCondition($params, true);
        Yii::app()->session['letter_cnt'] = $letter_cnt;
        $wantedAbroad_cnt = WantedAbroad::model()->searchByCondition($params, true);
        Yii::app()->session['wantedAbroad_cnt'] = $wantedAbroad_cnt;
    }

    public function actionResultDocumentary() {
        $this->countResultEverything($_GET);
        $data = Documentary::model()->searchByCondition($_GET);
        //$cnt_cases_abroad = Documentary::model()->searchByCondition($_GET, true);
        $this->render('resultDocumentary', $data);
    }

    public function actionResultDocumentaryRecieve() {
        $this->countResultEverything($_GET);
        $data = DocumentaryRecieve::model()->searchByCondition($_GET);
        $this->render('resultDocumentaryRecieve', $data);
    }

    public function actionResultGuide() {
        $this->countResultEverything($_GET);
        $data = Guide::model()->searchByCondition($_GET);
        $this->render('resultGuide', $data);
    }

    public function actionResultOpinion() {
        $this->countResultEverything($_GET);
        $data = Opinion::model()->searchByCondition($_GET);
        $this->render('resultOpinion', $data);
    }

    public function actionResultDocumentaryAbroad() {
        $this->countResultEverything($_GET);
        $data = DocumentaryAbroad::model()->searchByCondition($_GET);
        $this->render('resultDocumentaryAbroad', $data);
    }

    public function actionResultCasesAbroadOther() {
        $this->countResultEverything($_GET);
        $data = CasesAbroadOther::model()->searchByCondition($_GET);
        $this->render('resultCasesAbroadOther', $data);
    }

    public function actionResultCase() {
        $this->countResultEverything($_GET);
        $data = Cases::model()->searchByCondition($_GET);
        $this->render('resultCase', $data);
    }

    public function actionResultLetter() {
        $this->countResultEverything($_GET);
        $data = Letters::model()->searchByCondition($_GET);
        $this->render('resultLetter', $data);
    }

    public function actionResultWantedAbroad() {
        $this->countResultEverything($_GET);
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
