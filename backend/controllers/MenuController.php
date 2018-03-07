<?php

namespace backend\controllers;

use Yii;
use common\models\Menu;
use common\models\search\MenuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Lang;


use common\models\Locality;
use common\models\search\LocalitySearch;

use yii\web\UploadedFile;
/**
 * MenuController implements the CRUD actions for Menu model.
 */
class MenuController extends Controller
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
     * Lists all Menu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MenuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Menu model.
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
     * Finds the Menu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Menu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Menu::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    /**
     * Creates a new Menu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $model = new Menu();
        $name = [];
        $finalModel = [];
        $activeLanguages = Lang::find()->where(['is_active' => '1'])->asArray()->all();
        foreach ($activeLanguages as $lang) {

            $langCode = $lang['code'];
            $finalModel[$langCode] = $this->generateDynamicModelforData();

        }

        if ($model->load(Yii::$app->request->post())) {
            $title = strtolower(trim($model->title));
            $title = str_replace(" ", "-", $title);
            $model->route = $title;
            $data = Yii::$app->request->post('DynamicModel');

            foreach ($activeLanguages as $lang) {

                $langCode = $lang['code'];

                $name[$langCode]['name'] = $data[$langCode]['name'];
                unset($data[$langCode]['name']);
            }
            $model->data = json_encode($data);
            $model->name = json_encode($name);
            if ($model->save()) {

                return $this->redirect(['index']);
            } else {
                print_r($model->getErrors());
            }

        } else {
            return $this->render('create', [
                'model' => $model,
                'activeLanguages' => $activeLanguages,
                'finalModel' => $finalModel,

            ]);
        }



        return $this->render('create', [
            'model' => $model,
        ]);
    }

    private function generateDynamicModelforData()
    {
        $model = new \yii\base\DynamicModel([
            'name',
            'keywords',
            'description',
            'content'

        ]);
        $model->addRule(['name', 'content'], 'required')
            ->addRule(['description',], 'string', ['max' => 500]);

        return $model;
    }

    /**
     * Updates an existing Menu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $finalModel = [];
        $name = [];
        $decodedContent = json_decode($model->data, true);
        $decodedName = json_decode($model->name, true);
        $activeLanguages = Lang::find()->where(['is_active' => '1'])->asArray()->all();
        foreach ($activeLanguages as $lang) {

            $langCode = $lang['code'];
            $finalModel[$langCode] = $this->generateDynamicModelforData();
            $finalModel[$langCode]->name = $decodedName[$langCode]['name'];
            $finalModel[$langCode]->keywords = $decodedContent[$langCode]['keywords'];
            $finalModel[$langCode]->description = $decodedContent[$langCode]['description'];
            $finalModel[$langCode]->content = $decodedContent[$langCode]['content'];
        }
        if ($model->load(Yii::$app->request->post())) {

            //title convert to route
            $title = strtolower(trim($model->title));
            $title = str_replace(" ", "-", $title);
            $model->route = $title;
            $data = Yii::$app->request->post('DynamicModel');
            foreach ($activeLanguages as $lang) {

                $langCode = $lang['code'];

                $name[$langCode]['name'] = $data[$langCode]['name'];
                unset($data[$langCode]['name']);

            }
            $model->data = json_encode($data);
            $model->name = json_encode($name);
            if ($model->save()) {

                return $this->redirect(['index']);
            } else {
                print_r($model->getErrors());
            }

        } else {
            return $this->render('create', [
                'model' => $model,
                'activeLanguages' => $activeLanguages,
                'finalModel' => $finalModel,

            ]);
        }
        }

    /**
     * Deletes an existing Menu model.
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
}
