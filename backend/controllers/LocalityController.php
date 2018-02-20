<?php

namespace backend\controllers;

use Yii;
use common\models\Locality;
use common\models\search\LocalitySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Lang;

/**
 * LocalityController implements the CRUD actions for Locality model.
 */
class LocalityController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Locality models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LocalitySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Locality model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Locality model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Locality();
        $finalModel = [];
        $activeLanguages = Lang::find()->where(['active' => '1'])->asArray()->all();
        foreach ($activeLanguages as $lang) {
            $langCode = $lang['code'];
            $finalModel[$langCode] = $this->generateDynamicModelforLanguage($langCode);
        }
        if ($model->load(Yii::$app->request->post())) {
            //title convert to route
            $title = strtolower(trim($model->title));
            $title = str_replace(" ", "-", $title);
            $model->route = $title;
            $model->data = json_encode(Yii::$app->request->post('DynamicModel'));
            if ($model->save()) {
//                return $this->redirect(['view', 'id' => $model->id]);
                return $this->redirect(['index']);
            } else {
                print_r($model->getErrors());
            }
        } else {
            return $this->render('create', [
                'model' => $model,
                'activeLanguages' => $activeLanguages,
                'finalModel' => $finalModel
            ]);
        }

    }

    /**
     * Updates an existing Locality model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $finalModel = [];
        $decodedContent = json_decode($model->data, true);
        $activeLanguages = Lang::find()->where(['active' => '1'])->asArray()->all();
        foreach ($activeLanguages as $lang) {
            $langCode = $lang['code'];
            $finalModel[$langCode] = $this->generateDynamicModelforLanguage($langCode);            //Loading content
            $finalModel[$langCode]->name = $decodedContent[$langCode]['name'];
            $finalModel[$langCode]->keywords = $decodedContent[$langCode]['keywords'];
            $finalModel[$langCode]->description = $decodedContent[$langCode]['description'];
            $finalModel[$langCode]->content = $decodedContent[$langCode]['content'];
        }
        if ($model->load(Yii::$app->request->post())) {
            $title = $model->title;
            $title = str_replace(" ", "-", strtolower(trim($title)));
            $model->route = $title;
            $model->data = json_encode(Yii::$app->request->post('DynamicModel'));
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                print_r($model->getErrors());
            }
        } else {
            return $this->render('update', [
                'model' => $model,
                'activeLanguages' => $activeLanguages,
                'finalModel' => $finalModel
            ]);
        }
    }

    /**
     * Deletes an existing Locality model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Locality model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Locality the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Locality::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    private function generateDynamicModelforLanguage($langCode)
    {
        $model = new \yii\base\DynamicModel([
            'name',
            'keywords',
            'description',
            'content']);
        $model->addRule(['name', 'content'], 'required')
            ->addRule(['keywords', 'description',], 'string', ['max' => 500]);
        return $model;
    }
}
