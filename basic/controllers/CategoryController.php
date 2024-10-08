<?php

namespace app\controllers;

use app\models\Category;
use app\models\Post;
use yii\data\Pagination;
use yii\web\Controller;

class CategoryController extends Controller
{

    public function actionView($alias)
    {
        $category = Category::findOne(['alias' => $alias]);
        $query = Post::find()->with('category')->where(['category_id' => $category->id]);
        $pages = new Pagination([
            'totalCount' => $query->count(), 'pageSize' => 4,
            'forcePageParam' => false, 'pageSizeParam' => false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        $title = $category->title;
        return $this->render('alias', compact('posts', 'pages', 'title'));
    }
}