<?php


namespace app\controllers;


use app\models\CallbackForm;
use app\modules\admin\models\CategoryPortfolio;
use app\modules\admin\models\Config;
use app\modules\admin\models\News;
use app\modules\admin\models\Service;
use app\modules\admin\models\Slider;
use app\modules\admin\models\Steps;
use yii\helpers\Url;

class MainController extends AppController
{

    public function actionIndex()
    {
        $slider = Slider::find()->where(['publish'=>0])->orderBy(['sort'=>SORT_ASC])->all();
        $service = Service::find()->orderBy(['sort'=>SORT_ASC])->all();
        $config = Config::find()->all();
        $categoryport = CategoryPortfolio::find()->all();
        $news = News::find()->where(['publish'=>'0'])->orderby(['create_datetime'=>SORT_DESC])->limit(8)->all();
        $steps = Steps::find()->orderby(['sort'=>SORT_ASC])->all();
        $this->setMeta('Главная','Монтаж видео наблюдения, контроль доступа' ,'Видеонаблюдение, системы контроля доступа');
        return $this->render('index',compact('slider','service','config','categoryport','news','steps'));
    }

    public function actionMail(){
        $email = \app\modules\admin\models\Config::find()->where(['parameter'=>'email'])->one();
        if (\Yii::$app->request->post())
        {
            $callbackfio = \Yii::$app->request->post('callbackfio');
            $callbacktel = \Yii::$app->request->post('callbacktel');
            $send = \Yii::$app->mailer->compose()
                ->setFrom(['admin@crbmost.ru' => 'Письмо с сайта домналодони.рус'])
                ->setTo($email->content)
                ->setSubject('Заказ обратного звонка')
                ->setTextBody("$callbackfio $callbacktel")
                ->setHtmlBody("$callbackfio $callbacktel")
                ->send();
            if ($send)
            {
                \Yii::$app->session->setFlash('success', 'Ваши данные были успешно отправлены. <br>Ждите, с вами свяжется специалист');
                return $this->redirect(Url::base(true).'/contacts');
            }
        }
    }


    public function actionMailmess(){
        $email = \app\modules\admin\models\Config::find()->where(['parameter'=>'email'])->one();
        if (\Yii::$app->request->post())
        {
            $cf_name = \Yii::$app->request->post('cf_name');
            $cf_email = \Yii::$app->request->post('cf_email');
            $cf_phone = \Yii::$app->request->post('cf_phone');
            $cf_message = \Yii::$app->request->post('cf_message');
            $send = \Yii::$app->mailer->compose()
                ->setFrom(['admin@crbmost.ru' => 'Письмо с сайта домналодони.рус'])
                ->setTo($email->content)
                ->setSubject('Вопросы или предложения')
                ->setTextBody("$cf_name $cf_email $cf_phone")
                ->setHtmlBody(" Имя: $cf_name <br> Email: $cf_email<br> Телефон: $cf_phone <br> Сообщение: $cf_message<br>")
                ->send();
            if ($send)
            {
                \Yii::$app->session->setFlash('success', 'Ваши данные были успешно отправлены. <br>Спасибо за ваше предложение!');
                return $this->redirect(Url::base(true).'/contacts');
            }
        }
    }

    public function actionMailprice(){
        $email = \app\modules\admin\models\Config::find()->where(['parameter'=>'email'])->one();
        if (\Yii::$app->request->post())
        {
            $productname = \Yii::$app->request->post('productname');
            $fio = \Yii::$app->request->post('fio');
            $tel = \Yii::$app->request->post('tel');
            $send = \Yii::$app->mailer->compose()
                ->setFrom(['admin@crbmost.ru' => 'Письмо с сайта домналодони.рус'])
                ->setTo($email->content)
                ->setSubject('Запрос цены и наличия товара')
                ->setTextBody("$productname $fio $tel")
                ->setHtmlBody(" Тариф: $productname <br> ФИО: $fio<br> Телефон: $tel <br> Сообщение: $cf_message<br>")
                ->send();
            if ($send)
            {
                \Yii::$app->session->setFlash('success', 'Ваши данные были успешно отправлены. <br>Спасибо за ваше предложение!');
                return $this->redirect(Url::base(true).'/contacts');
            }
        }
    }


    public function actionMailtarif(){
        $email = \app\modules\admin\models\Config::find()->where(['parameter'=>'email'])->one();
        if (\Yii::$app->request->post())
        {
            $service_name = \Yii::$app->request->post('service_name');
            $fio = \Yii::$app->request->post('fio');
            $tel = \Yii::$app->request->post('tel');
            $send = \Yii::$app->mailer->compose()
                ->setFrom(['admin@crbmost.ru' => 'Письмо с сайта домналодони.рус'])
                ->setTo($email->content)
                ->setSubject('Заказ тарифа')
                ->setTextBody("$service_name $fio $tel")
                ->setHtmlBody(" Тариф: $service_name <br> ФИО: $fio<br> Телефон: $tel <br> ")
                ->send();
            if ($send)
            {
                \Yii::$app->session->setFlash('success', 'Ваши данные были успешно отправлены. <br>Спасибо за ваше предложение!');
                return $this->redirect(Url::base(true).'/contacts');
            }
        }
    }

}