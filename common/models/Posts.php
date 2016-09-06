<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $title
 * @property string $author
 * @property string $content
 * @property integer $status
 * @property integer $create_at
 * @property integer $update_at
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	const STATUS_ACTIVE = 1;
    public static function tableName()
    {
        return 'posts';
    }
	/**
	* 我们添加了 TimestampBehavior 行为，这个行为的作用是在新建一条数据时，自动插入created_at 和 update_at ,修改一条数据时自动更新update_at
	*/
	public function behaviors(){
		return [
			TimestampBehavior::className()
		];
	}
	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'author'], 'required'],
            [['content'], 'string'],
            [['status', 'default', 'value'=>self::STATUS_ACTIVE],
            [['title', 'author'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'author' => '作者',
            'content' => '内容',
            'status' => '状态',
            'create_at' => '编写时间',
            'update_at' => '更新时间',
        ];
    }
}
