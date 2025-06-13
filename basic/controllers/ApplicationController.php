<?php

namespace app\controllers;

use app\models\ApplicationModel;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class ApplicationController extends Controller
{
    /**
     * @return Response
     */
    public function actionCreate()
    {
        $model = new ApplicationModel();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Application created successfully.');

                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                foreach ($model->getErrors() as $error) {
                    Yii::$app->session->setFlash('error', $error);
                }
            }
        }

        return $this->render('forms/application', [
            'model' => $model,
        ]);
    }

    /**
     * @return Response
     * 
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionUpdate($id)
    {
        $model = ApplicationModel::findOne($id);

        if (!$model) {
            throw new \yii\web\NotFoundHttpException('Application not found.');
        }

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Application updated successfully.');
            } else {
                foreach ($model->getErrors() as $error) {
                    Yii::$app->session->setFlash('error', $error);
                }
            }
        }

        return $this->render('views/application/_form.php', [
            'model' => $model,
        ]);
    }

}
