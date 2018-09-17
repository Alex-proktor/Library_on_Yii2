<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ids`.
 */
class m180916_151821_create_ids_table extends Migration
{
    public function up()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('ids', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->notNull(), //Автор
            'book_id' => $this->integer()->notNull(), //Книга
//            'date' => $this->integer()->notNull(),
//            'category_id' => $this->integer()->notNull(), //Номер категории
//            'text' => $this->text()->notNull(),
//            'title' => $this->string()->notNull()->unique(), // Название статьи
//            'abridgment' => $this->text()->notNull(), // Сокращенный текст
//            'activity' => $this->integer()->notNull()->defaultValue(0), // Активность статьи
        ], $tableOptions);
    }

    public function down()
    {
        echo "m180916_151821_create_ids_table cannot be reverted.\n";
        //$this->dropTable('ids');
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ids', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('ids');
    }
}
