<?php

namespace frontend\controllers;

use common\models\Post;
use yii\data\Pagination;


class PostController extends \yii\web\Controller
{	
	                                                                                                                      
	public function actionSeeder(){
		//-- \Faker\Factory 包是 Yii 自带的，用来生成随机数据的，详细用法百度得之
		$faker = \Faker\Factory::create('zh_CN');
		$a = 0;
		
		for($i=0;$i<20;$i++){
			$post = new Post();
			$post->title = $faker->text($maxNbChars = 20);
			$post->author = $faker->name;
			$post->content = $faker->text($maxNbChars = 3000);
			if($post->insert()) $a += 1;
			
			echo "添加".$a."条数据";
		}
		
	}
	
	public function actionItem($id){
		$post = Post::findOne($id);
		return $this->render('item',['post'=>$post]);
	}


    public function actionIndex()
    {
		$posts = Post::find()->where(['status'=>1])->orderBy(['id'=>SORT_DESC]);
		
		$pages = new Pagination(['totalCount'=>$posts->count(),'pageSize'=>5]);
		
		$models = $posts->offset($pages->offset)
		->limit($pages->limit)
		->all();
		
        return $this->render('index',[
			'models' => $models,
			'pages' => $pages
		]);
    }

}
