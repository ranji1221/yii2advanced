<?php

use yii\db\Migration;

class m160906_015924_posts extends Migration
{
    public function up()
    {
		$tableOptions = null;
		if($this->db->driverName === 'mysql'){
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}
		$this->createTable('{{%posts}}',
		[
			'id' => $this->primaryKey(),
			'title' => $this->string()->notNull(),
			'author' => $this->string()->notNull(),
			'content' => $this->text(),
			'status' => $this->integer(1)->notNull()->defaultValue(1),
			'create_at' => $this->integer()->notNull(),
			'update_at' => $this->integer()->notNull()
			
		],$tableOptions);
    }

    public function down()
    {
        echo "m160906_015924_posts cannot be reverted.\n";

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
