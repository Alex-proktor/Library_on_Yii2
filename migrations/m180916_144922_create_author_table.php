<?php

use yii\db\Migration;

/**
 * Handles the creation of table `author`.
 */
class m180916_144922_create_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('author', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('author');
    }
    public function up()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('author', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(), // Название книги
        ], $tableOptions);
    }
}
