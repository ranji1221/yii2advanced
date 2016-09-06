<?php

namespace frontend\controllers;

use common\models\Posts;
use yii\data\Pagination;


class PostController extends \yii\web\Controller
{	
	
	public function actionSeeder(){
		$faker = \Faker\Factory::create('zh_CN');
		$a = 0;
		
		for($i=0;$i<20;$i++){
			$posts = new Posts();
			$posts->title = $faker->text($maxNbChars = 20);
			$posts->author = $faker->name;
			$posts->content = $faker->text($maxNbChars = 3000);
			if($posts->insert()) $a += 1;
			
			echo "添加".$a."条数据";
		}
		
	}


    public function actionIndex()
    {
        return $this->render('index');
    }

}
