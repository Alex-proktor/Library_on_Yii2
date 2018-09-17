<?php

use yii\db\Migration;

/**
 * Handles the creation of table `book`.
 */
class m180916_144931_create_book_table extends Migration
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
            'author_id' => $this->integer()->notNull(), //Автор
            'name' => $this->text()->notNull(),
//            'title' => $this->string()->notNull()->unique(), // Название статьи
//            'abridgment' => $this->text()->notNull(), // Сокращенный текст
//            'activity' => $this->integer()->notNull()->defaultValue(0), // Активность статьи
//            'category_id' => $this->integer()->notNull(), //Номер категории
//            'date' => $this->integer()->notNull(),
        ], $tableOptions);
    }
}
