<?php

class DocumentController extends Controller {

    protected function beforeAction($action) {
        if ($action !== 'login') {
            if (empty(Yii::app()->session['logged'])) {
                $this->redirect(Yii::app()->createUrl('user/login'));
            }
        }
        return true;
    }

    public function actionIndex() {
        $data = Document::model()->getDocument();
        $this->render('index', $data);
    }

    public function actionAddProcess() {
        try {
            $post = StringHelper::filterArrayString($_POST);
            $path = UploadHelper::getUrlUploadSingleImage($_FILES['file'], 'file');
            $result = Document::model()->add($_POST, $path);
            if ($result) {
                Yii::app()->user->setFlash('success', 'Thêm dữ liệu thành công !');
                $this->redirect(Yii::app()->createUrl('document/add'));
            } else {
                Yii::app()->user->setFlash('error', 'Thêm dữ liệu thất bại !');
                $this->redirect(Yii::app()->createUrl('document/add'));
            }
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
        }
    }

    public function actionAdd() {
        $this->render('add');
    }

    public function actionView() {

        $this->render('view');
    }

    public function actionDelete() {
        $id = StringHelper::filterString(Yii::app()->request->getQuery('id'));
        $result = Document::model()->findByPk($id);
        if ($result->delete()) {
            Yii::app()->user->setFlash('success', 'Xóa dữ liệu thành công !');
            $this->redirect(Yii::app()->createUrl('document/index'));
        } else {
            Yii::app()->user->setFlash('error', 'Xóa dữ liệu thất bại !');
            $this->redirect(Yii::app()->createUrl('document/index'));
        }
    }

    public function actionEdit() {
        try {
            $id = StringHelper::filterString(Yii::app()->request->getQuery('id'));

            $result = Document::model()->findByPk($id);
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
        }
        $this->render('edit', array('model' => $result));
    }

    public function actionEditProcess() {
        try {
            $post = StringHelper::filterArrayString($_POST);
            $path = UploadHelper::getUrlUploadSingleImage($_FILES['file'], 'file');
            $result = Document::model()->edit($_POST, $path);
            if ($result == 1) {
                Yii::app()->user->setFlash('success', 'Cập nhật dữ liệu thành công !');
                $this->redirect(Yii::app()->createUrl('document/edit', array('id' => $post['id'])));
            } else if ($result == 2) {
                Yii::app()->user->setFlash('error', 'Cập nhật dữ liệu thất bại !');
                $this->redirect(Yii::app()->createUrl('document/edit', array('id' => $post['id'])));
            } else {
                Yii::app()->user->setFlash('error', 'Không tồn tại tài liệu !');
                $this->redirect(Yii::app()->createUrl('document/edit', array('id' => $post['id'])));
            }
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
        }
    }

    public function actionSearchByCondition() {
        try {
            $txt = StringHelper::filterString(Yii::app()->request->getQuery('txt'));

            $result = Document::model()->searchByCondition($txt);
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
        }
        $this->render('result', $result);
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
