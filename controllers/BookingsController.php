<?php

namespace app\controllers;

use Yii;
use app\models\Bookings\Bookings;

class BookingsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionBookings()
    {
        $model = new Bookings();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('bookings', [
            'model' => $model,
        ]);
    }

}
