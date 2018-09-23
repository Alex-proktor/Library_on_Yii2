<?php

//namespace app\modules\admin\controllers;
//
//use yii\web\Controller;
//
///**
// * Default controller for the `admin` module
// */
//class AdminController extends Controller
//{
//    /**
//     * Renders the index view for the module
//     * @return string
//     */
//    public function actionIndex()
//    {
//        return $this->render('index');
////        return "<h1>Congratulations!</h1>";
//    }
//}

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\models\Author;
use app\models\Book;

class AdminController extends Controller
{

    public function actionIndex()
    {

        $author_model = new Author(); //модель Author
        $book_model = new Book(); //модель Book

        $days_ago = null;

        return $this->render('index',[
            'author_model'=> $author_model,
            'book_model'=> $book_model,
        ]);
    }
}