<?php
namespace frontend\controllers;

use yii\web\Controller;
use common\models\MyList;
use Yii;

class ProductController extends Controller
{
    public function actionIndex($alias)
    {
        $alias = Yii::$app->request->get('alias');

        $product = MyList::find()->where(['alias' => $alias])->one();

        return $this->render('index', compact('product'));
    }
}