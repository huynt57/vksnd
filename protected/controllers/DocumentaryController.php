<?php

class DocumentaryController extends Controller {

    public function actionIndex() {
        $data = Documentary::model()->getDocumentary();
        $this->render('index', $data);
    }

    public function actionAdd() {
        $this->render('add');
    }

    public function actionView() {

        $this->render('view');
    }

    public function actionDelete() {
        
    }

    public function actionEdit() {
        try {
            $id = StringHelper::filterString(Yii::app()->request->getQuery('id'));
            $result = Documentary::model()->findByPk($id);
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
        }
        $this->render('edit', array('model' => $result));
    }

    public function actionEditProcess() {
        try {
            $post = StringHelper::filterArrayString($_POST);
            $result = Documentary::model()->edit($post);
            if ($result == 1) {
                Yii::app()->user->setFlash('success', 'Cập nhật dữ liệu thành công !');
                $this->redirect(Yii::app()->createUrl('documentary/edit'));
            } else if ($result == 2) {
                Yii::app()->user->setFlash('error', 'Cập nhật dữ liệu thất bại !');
                $this->redirect(Yii::app()->createUrl('documentary/edit'));
            } else {
                Yii::app()->user->setFlash('error', 'Không tồn tại tài liệu !');
                $this->redirect(Yii::app()->createUrl('documentary/edit'));
            }
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
        }
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
