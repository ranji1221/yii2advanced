<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;

/**
 * This is the model class for table "tag".
 *
 * @property integer $id
 * @property string $tag
 * @property string $meta_description
 * @property string $tag_img
 * @property integer $create_at
 * @property integer $update_at
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag';
    }
	
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
            [['tag'], 'required'],
            [['tag', 'meta_description', 'tag_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tag' => 'Tag',
            'meta_description' => 'Meta Description',
            'tag_img' => 'Tag Img',
			'layout' => 'Layout',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }
	
	public function getPosts(){
		
	}
}
