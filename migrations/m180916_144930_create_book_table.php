<?php

use yii\db\Migration;

/**
 * Handles the creation of table `book`.
 */
class m180916_144930_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('book', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('book');
    }
    public function up()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->notNull(), // ID Автора
            'name' => $this->text()->notNull(), // Название книги
        ], $tableOptions);
    }
}
