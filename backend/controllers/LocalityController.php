<?php

namespace backend\controllers;

use common\models\Lang;
use Yii;
use common\models\Locality;
use common\models\search\LocalitySearch;
use yii\web\Controller;
use yii\base\Exception;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

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
        $name = [];

        $activeLanguages = Lang::find()->where(['is_active' => '1'])->asArray()->all();

        foreach ($activeLanguages as $lang) {

            $langCode = $lang['code'];
            $finalModel[$langCode] = $this->generateDynamicModelforData();

        }


        if ($model->load(Yii::$app->request->post())) {

            //title convert to route
            $title = strtolower(trim($model->title));
            $title = str_replace(" ", "-", $title);
            $model->route = $title;
            $data = Yii::$app->request->post('DynamicModel');
            $videos=Yii::$app->request->post('videos');
            if($videos!=null){
                $videos_name=[];
                foreach($videos as $key) {
                    $videos_name[]=$key;
                }
                $model->videos=json_encode($videos_name);
            }
            foreach ($activeLanguages as $lang) {

                $langCode = $lang['code'];

                $name[$langCode]['name'] = $data[$langCode]['name'];
                unset($data[$langCode]['name']);

            }
            if (UploadedFile::getInstance($model, 'img_name') != null) {
                $img_name = UploadedFile::getInstance($model, 'img_name');
                $new_img_name =  $model->route . '.' . $img_name->extension;

                $img_name->saveAs(Yii::getAlias('@root')
                    . Yii::$app->params['frontend_upload_path'] . $new_img_name);
                $model->img_name = $new_img_name;
            }
            if (UploadedFile::getInstances($model, 'images') != null) {
                $images_name = UploadedFile::getInstances($model, 'images');


                $names_images_array = [];

                foreach ($images_name as $key => $file) {
                    $new_images = $model->route . "_" . $key . '.' . $file->extension;
                    $file->saveAs(Yii::getAlias('@root')
                        . Yii::$app->params['frontend_upload_path'] . $new_images);
                    $names_images_array[] = $new_images;
                }
                $model->images = json_encode($names_images_array);
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
        $name = [];
        $old_videos=$model->videos;
       $old_img=$model->img_name;
        $old_images=$model->images;
        $decodedContent = json_decode($model->data, true);
        $decodedName = json_decode($model->name, true);

        $activeLanguages = Lang::find()->where(['is_active' => '1'])->asArray()->all();

        foreach ($activeLanguages as $lang) {

            $langCode = $lang['code'];

            $finalModel[$langCode] = $this->generateDynamicModelforData();



            //Loading content

            $finalModel[$langCode]->name = $decodedName[$langCode]['name'];
            $finalModel[$langCode]->keywords = $decodedContent[$langCode]['keywords'];
            $finalModel[$langCode]->description = $decodedContent[$langCode]['description'];
            $finalModel[$langCode]->content = $decodedContent[$langCode]['content'];

        }

        if ($model->load(Yii::$app->request->post())) {
            $title = $model->title;
            $title = str_replace(" ", "-", strtolower(trim($title)));
            $model->route = $title;
            $data = Yii::$app->request->post('DynamicModel');
            $videos=Yii::$app->request->post('videos');
            if($videos!=null){
                $videos_name=[];
                foreach($videos as $key) {
                    $videos_name[]=$key;
                }
                $model->videos=json_encode($videos_name);
            }else{
                $model->videos = $old_videos;
            }
            foreach ($activeLanguages as $lang) {

                $langCode = $lang['code'];


                $name[$langCode]['name'] = $data[$langCode]['name'];
            }
            if (UploadedFile::getInstance($model, 'img_name') != null) {
                $img_name = UploadedFile::getInstance($model, 'img_name');
                $new_img_name =  $model->route . '.' . $img_name->extension;

                $img_name->saveAs(Yii::getAlias('@root')
                    . Yii::$app->params['frontend_upload_path'] . $new_img_name);
                $model->img_name = $new_img_name;
            }else{
                $model->img_name=$old_img;
            }
            if (UploadedFile::getInstances($model, 'images') != null) {
                $images_name = UploadedFile::getInstances($model, 'images');


                $names_images_array = [];

                foreach ($images_name as $key => $file) {
                    $new_images = $model->route . "_" . $key . '.' . $file->extension;
                    $file->saveAs(Yii::getAlias('@root')
                        . Yii::$app->params['frontend_upload_path'] . $new_images);
                    $names_images_array[] = $new_images;
                }
                $model->images = json_encode($names_images_array);
            }else{
                $model->images=$old_images;
            }

            $model->data = json_encode($data, true);
            $model->name = json_encode($name, true);
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                print_r($model->getErrors());
            }
        } else {
            return $this->render('update', [
                'model' => $model,
                'activeLanguages' => $activeLanguages,
                'finalModel' => $finalModel,

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

        unlink(Yii::getAlias('@root')
            . Yii::$app->params['frontend_upload_path'] . $this->findModel($id)->img_name);

        $images=json_decode($this->findModel($id)->images,true);
        foreach ($images as $key) {
            unlink(Yii::getAlias('@root')
                . Yii::$app->params['frontend_upload_path'] . $key);
        }



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

    private function generateDynamicModelforData()
    {
        $model = new \yii\base\DynamicModel([
            'name',
            'keywords',
            'description',
            'content'

        ]);
        $model->addRule(['name', 'content'], 'required')
            ->addRule(['keywords', 'description',], 'string', ['max' => 500]);

        return $model;
    }


}
