<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ChildInfo */
/* @var $childcurrentinfo common\models\ChildCurrentInfo */
/* @var $guardian common\models\Guardian */
/* @var $ReasonDelay common\models\ReasonDelay */
/* @var $Excursus common\models\Excursus */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'ԵՐԵԽԱՅԻ ԹԵՐԹԻԿ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-info-view">
    <p>
        <?= Html::a('Թարմացնել', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Ջնջել', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="print">
        <div class="col-lg-12">
            <div class="col-lg-4">
                <div class="left">
                    <a href="?id=<?= $model['id'] - 1 ?>" class="fa fa-arrow-left"></a>
                </div>
            </div>
            <div class="col-lg-4">
                <h1><?= Html::encode($this->title) ?></h1>
            </div>
            <div class="col-lg-4">
                <div class="right">
                    <a href="?id=<?= $model['id'] + 1 ?>" class="fa fa-arrow-right"></a>
                </div>
            </div>
        </div>

        <?php DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'prev_ids',
                'name',
                'surname',
                'fname',
                'gender',
                'nation',
                'birthplace',
                'city_village',
                'passport_birth_certificate',
                'birth_date',
                'alias',
                'count_from_center',
                'img_name',
            ],
        ]);
        ?>
        <div class="content">
            <section class="col-lg-12 tops">
                <div class="col-lg-8">
                    <p class="question">ՀԱՑԱԹԵՐԹԻԿԻ No </p>
                    <form>
                        <input type="text" name="id" value="<?= $model->id ?>">
                        <button>Փնտրել</button>
                    </form>

                </div>

                <div class="col-lg-8">
                    <p class="question">Որերրո՛րդ անգամ է բերվել կենտրոն </p>
                    <span class="answer"><?= $model->count_from_center ?></span>
                </div>
                <div class="col-lg-8">
                    <p class="question">ՆԱԽՈՐԴ ԹԵՐԹԻԿ NoNo </p>
                    <span class="answer"><?= $model->prev_ids ?></span>
                </div>
                <div class="col-lg-12 info">
                    <div class="col-lg-12">
                        <div class="col-lg-4">
                            <span class="answer"><?= $model->birth_date ?></span>
                            <p class="question">Երեխայի ծննդյան ամսաթիվը</p>
                        </div>
                        <div class="col-lg-4">
                            <span class="answer"><?= $model->birthplace ?></span>
                            <p class="question">Երեխայի ծննդավայրը,երկիրը</p>
                        </div>

                        <div class="col-lg-4">
                            <span class="answer"><?= $model->city_village ?></span>
                            <p class="question">Երեխայի ծնված քաղաքը,գյուղը</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-3">
                            <span class="answer"><?= $model->surname ?></span>
                            <p class="question">Երեխայի ազգանունը</p>
                        </div>
                        <div class="col-lg-3">
                            <span class="answer"><?= $model->name ?></span>
                            <p class="question">Երեխայի անուն</p>
                        </div>
                        <div class="col-lg-3">
                            <span class="answer"><?= $model->fname ?></span>
                            <p class="question">Երեխայի հայրանուն</p>
                        </div>
                        <div class="col-lg-3">
                            <span class="answer"><?= $model->alias ?></span>
                            <p class="question">Մականուն</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-6 pass">
                            <span class="answer"><?= $model->passport_birth_certificate ?></span>
                            <p class="question">Երեխայի անծնագիր կամ ծննդյան վկայականի սերիան համարը</p>
                        </div>
                        <div class="col-lg-3">
                            <span class="answer"><?= $model->gender ?></span>
                            <p class="question">Երեխայի սեռը</p>
                        </div>
                        <div class="col-lg-3">
                            <span class="answer"><?= $model->nation ?></span>
                            <p class="question">Երեխայի ազգությունը</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="col-lg-12 child-current-info">
                <div class="col-lg-12 text-center">
                    <p class="child-current-info-title">Երեխայի ընթացիկ հասցեն </p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"><?= $district['childs']['region']['name']; ?></span>
                    <p class="question">Մարզը</p>
                </div>
                <div class="col-lg-3">
                    <span class="answer"><?= $explode[0] ?></span>
                    <p class="question">շրջան</p>
                </div>
                <div class="col-lg-3">
                    <span class="answer"><?= $district['child']['city_village'] ?></span>
                    <p class="question">Քաղաք/Գյուղ</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"><?= $explode[1] . ' ' . $explode[2] ?></span>
                    <p class="question">Փողոց շենք Բնակ</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"><?= $district['child']['phone']; ?></span>
                    <p class="question">Հեռախոս</p>
                </div>
            </section>
            <section class="col-lg-12 guardian">
                <div class="col-lg-12 text-center">
                    <p class="guardian-title"> Տվյալներ 1-ին խնամակալների մասին (1ԽՆ)</p>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-3">
                        <span class="answer"><?php // $guardian->surname ?></span>
                        <p class="question">1Խն-Ազգանունը</p>
                    </div>
                    <div class="col-lg-2">
                        <span class="answer"><?php // $guardian->name ?></span>
                        <p class="question">1Խն-Անուն</p>
                    </div>
                    <div class="col-lg-2">
                        <span class="answer"><?php // $guardian->fname ?></span>
                        <p class="question">1Խն-Հայրանուն</p>
                    </div>
                    <div class="col-lg-2">
                        <span class="answer"><?php // $guardian->status_id ?></span>
                        <p class="question">1Խն-Վիճակը</p>
                    </div>
                    <div class="col-lg-2">
                        <span class="answer"><?php // $guardian->relation ?></span>
                        <p class="question">1Խն-Ազգակցական կապը</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-3">
                        <span class="answer"><?php // $guardian->country ?></span>
                        <p class="question">1ԽՆ հասցեն։ Երկիր</p>
                    </div>
                    <div class="col-lg-3">
                        <span class="answer"><?php // $guardian->region_id ?></span>
                        <p class="question">1ԽՆ-Մարզ</p>
                    </div>
                    <div class="col-lg-2">
                        <span class="answer"><?php // $guardian->city ?></span>
                        <p class="question">1ԽՆ – Քաղաք/Գյուղ</p>
                    </div>
                    <div class="col-lg-2">
                        <span class="answer"><?php // $guardian->address ?></span>
                        <p class="question">1ԽՆ – Փողոց շենք Բնակ</p>
                    </div>
                    <div class="col-lg-2">
                        <span class="answer"><?php // $guardian->phone ?></span>
                        <p class="question">1ԽՆ-Հեռախոս</p>
                    </div>
                </div>
            </section>
            <section class="col-lg-12  reason-delay">
                <div class="col-lg-12">
                    <p class="reason-delay-title">Բերման պատճառը</p>
                </div>
                <form class="col-lg-7">
                    <textarea class="text"><?= $reasondelay['reason_delay_text'] ?></textarea>
                </form>
                <div class="col-lg-3">
                    <p class="question">Ընտանիքից դուրս գտնվելու ամսաթ․</p>
                    <span class="answer"><?= $reasondelay['out_home_date']; ?></span>
                </div>
                <form class="col-lg-2">
                    <label class="col-lg-12">Հաշբառում Ն/Գ բայնում</label>
                    <input class="checkboxs" type="checkbox" checked="<?= $reasondelay['accounting_department'] ?>">
                </form>
            </section>
            <section class="col-lg-12 reason-delay1 ">
                <div class="col-lg-2">
                    <span class="answer"><?= $reasondelay['school_number'] ?></span>
                    <p class="question">Դպրոցի համարը</p>
                </div>
                <div class="col-lg-4">
                    <span class="answer"><?= $reasondelay['school_address'] ?></span>
                    <p class="question">Դպրոցի հասցեն</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"><?= $reasondelay['school_phone'] ?></span>
                    <p class="question">Դպրոցի հեռախոսը</p>
                </div>
                <div class="col-lg-3">
                    <span class="answer"><?= $reasondelay['absenteeism_date'] ?></span>
                    <p class="question">Դպրոցի չհաճախելու մասին տարին</p>
                </div>
                <div class="col-lg-1">

                </div>
            </section>
            <section class="col-lg-12 reason-delay2">
                <div class="col-lg-2">
                    <span class="answer"><?= $reasondelay['out_education'] ?></span>
                    <p class="question">Բերող պաշտոնյայի ազգանունը</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"><?= $reasondelay['off_name'] ?></span>
                    <p class="question">Բերող պաշտոնյայի անունը</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"><?= $reasondelay['off_facility_name'] ?></span>
                    <p class="question">Բերող պաշտոնյայի Հաստատության անվ․</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"><?= $reasondelay['off_job'] ?></span>
                    <p class="question">Բերող պաշտոնյայի պաշտոնը</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"><?= $reasondelay['quality_clothes'] ?></span>
                    <p class="question">Երեխայի հագուստը ընդունման պահին.</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"><?= $reasondelay['start_date'] ?></span>
                    <p class="question">Կենտոն բերվելու ամսաթիվը</p>
                </div>
            </section>
            <section class="col-lg-12 reason-delay2">
                <div class="col-lg-2">
                    <span class="answer"><?= $reasondelay['end_date'] ?></span>
                    <p class="question">կենտրոնից դուրս գտվելու ամսաթիվը</p>
                </div>
                <div class="col-lg-1">
                    <span class="answer"><?= $excursus['out_data'] ?></span>
                    <p class="question">1.Ինքնակամ հեռացում</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"><?= $excursus['set_data'] ?></span>
                    <p class="question">1.վերադարձ․</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"><?= $excursus['out_data'] ?></span>
                    <p class="question">2.Ինքնակամ հեռացում</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"><?= $excursus['set_data'] ?></span>
                    <p class="question">2.վերադարձ․</p>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-6">
                        <span class="answer"><?= $excursus['out_data'] ?></span>
                        <p class="question">3.Ինքնակամ հեռացում</p>
                    </div>
                    <div class="col-lg-6">
                        <span class="answer"><?= $excursus['set_data'] ?></span>
                        <p class="question">3.վերադարձ․</p>
                    </div>
                </div>
            </section>
            <section class="col-lg-12 reason-delay2">
                <div class="col-lg-1">

                </div>
                <div class="col-lg-2">
                    <span class="answer"></span>
                    <p class="question">1.Ժամանակավոր դուրս գրում</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"></span>
                    <p class="question">1.վերադարձ</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"></span>
                    <p class="question">2.Ժամանակավոր դուրս գրում</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"></span>
                    <p class="question">2.վերադարձ</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"></span>
                    <p class="question">3.Ժամանակավոր դուրս գրում</p>
                </div>
                <div class="col-lg-1">
                    <span class="answer"></span>
                    <p class="question">3.վերադարձ</p>
                </div>
            </section>
            <section class="col-lg-12 reason-delay2">
                <div class="col-lg-4">
                    <span class="answer"></span>
                    <p class="question">
                        Ընտանիքի բնութագրիչը և բերման պատճառները
                    </p>
                </div>
                <div class="col-lg-offset-2 col-lg-4 sectionborder">
                    <div class="col-lg-5">
                        <span class="answer"></span>
                        <p class="question">Սկիզբ </p>
                    </div>
                    <div class="col-lg-offset-2 col-lg-5">
                        <span class="answer"></span>
                        <p class="question">Ավարտ </p>
                    </div>
                </div>
            </section>
            <section class="col-lg-12 reason-delay2 sectionborder">
                <h5><strong>Մասնագետների տվյալները եռեղայի վերաբերյալ</strong></h5>
                <div class="col-lg-2">
                    <span class="answer"></span>
                    <p class="question">Բժիշկ</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"></span>
                    <p class="question">Հոգեբան</p>
                </div>
                <div class="col-lg-3">
                    <span class="answer"></span>
                    <p class="question">Մանկավարժ</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"></span>
                    <p class="question">Սոցիալական աշխատող</p>
                </div>
                <div class="col-lg-2">
                    <span class="answer"></span>
                    <p class="question">Դաստիարակ</p>
                </div>
            </section>
            <section class="col-lg-12 reason-delay2">
                <div class="col-lg-8">
                    <span class="answer"></span>
                    <p class="question">Բազմամասնագիտական խորհրդի եզրակացությունը; Փորձագետների խմբի
                        եզրակացությունը;ՈՒղեկցման փաստաթղթեր</p>
                </div>
            </section>

        </div>
    </div>
</div>
