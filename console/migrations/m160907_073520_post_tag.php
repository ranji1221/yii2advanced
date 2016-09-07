<?php

use yii\db\Migration;

class m160907_073520_post_tag extends Migration
{
    public function up()
    {
		$tableOptions = null;
		if($this->db->driverName === 'mysql')
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		
		$this->createTable('{{%post_tag}}',[
			'id' => $this->primaryKey(),
			'post_id' => $this->integer()->unsigned()->notNull(),	//-- 对应post表id
			'tag_id' => $this->integer()->unsigned()->notNull(),	//-- 对应tag表id
		],$tableOptions);
		
		//-- 建立索引
		$this->createIndex(
			'idx-post_tag-post_id',		//--	建立索引的名字
			'post_tag',						//--	建立索引的表
			'post_id'							//-- 	建立索引的键
		);
		
		$this->createIndex(				//-- 同上
			'idx-post_tag-tag_id',		
			'post_tag',						
			'tag_id'						
		);
    }

    public function down()
    {
        echo "m160907_073520_post_tag cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
