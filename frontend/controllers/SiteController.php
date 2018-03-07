<?php
namespace frontend\controllers;


use common\models\Locality;
use Yii;

use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Categories;

use frontend\models\ContactForm;
use yii\web\Cookie;

/**
 * Site controller
 */
class SiteController extends Controller
{


    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

        $lang = Yii::$app->language;
        $locality = Locality::find()->select(['id', 'name'])->asArray()->all();
        $loc = [];

        foreach ($locality as $index => $item) {
            $content = $item['name'];
            $content = json_decode($content, true);
            $loc[$item['id']] = $content[$lang]['name'];
        }

        $category = Categories::find()->select(['id', 'name'])->asArray()->all();

        $cat = [];
        foreach ($category as $key => $value) {
            $content = $value['name'];
            $content = json_decode($content, true);
            $cat[$value['id']] = $content[$lang]['name'];
        }

        return $this->render('index', [
            'loc' => $loc,
            'cat' => $cat,

        ]);
    }


    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays content page.
     *
     * @return mixed
     */

    public function actionContent()
    {
        $route = Yii::$app->get();
    }
//Set Language
    public function actionLanguage()
    {

        if (Yii::$app->request->post()) {

            Yii::$app->language = Yii::$app->request->post('lang');
            Yii::$app->session->set('language', Yii::$app->request->post('lang'));
            $cookie = new Cookie([
                'name' => 'language',
                'value' => Yii::$app->request->post('lang')
            ]);

            $cookie->expire = time() + (60 * 60 * 24 * 365); // (1 year)
            Yii::$app->getResponse()->getCookies()->add($cookie);
        }
    }

}