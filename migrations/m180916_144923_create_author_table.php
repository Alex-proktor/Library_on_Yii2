<?php

use yii\db\Migration;

/**
 * Handles the creation of table `author`.
 */
class m180916_144923_create_author_table extends Migration
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
            'book_id' => $this->integer()->notNull(), //Книга
            'title' => $this->string()->notNull()->unique(), // Название статьи
//            'date' => $this->integer()->notNull(),
//            'category_id' => $this->integer()->notNull(), //Номер категории
//            'text' => $this->text()->notNull(),
//            'abridgment' => $this->text()->notNull(), // Сокращенный текст
//            'activity' => $this->integer()->notNull()->defaultValue(0), // Активность статьи
        ], $tableOptions);
    }
}
