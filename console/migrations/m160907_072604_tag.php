<?php

use yii\db\Migration;

class m160907_072604_tag extends Migration
{
    public function up()
    {
		$tableOptions = null;
		if($this->db->driverName === 'mysql')
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%tag}}',[
			'id' => $this->primaryKey(),
			'tag' => $this->string()->notNull(),		//标签名称
			'meta_description' => $this->string(),	//标签描述
			'tag_img' => $this->string(),	//标签图片
			'create_at' => $this->integer()->notNull(),
			'update_at' => $this->integer()->notNull(),
		],$tableOptions);
    }

    public function down()
    {
        echo "m160907_072604_tag cannot be reverted.\n";

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
