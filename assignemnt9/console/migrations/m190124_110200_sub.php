<?php
use yii\db\Migration;
/**
 * Handles the creation of table `{{%subject}}`.
 */
class m190905_081635_create_subject_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subject}}', [
            'id' => $this->primaryKey(),
        ]);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subject}}');
    }
}