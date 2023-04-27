<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%materia}}`.
 */
class m230427_035231_create_materia_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%materia}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(128)->notNull(),
            'cant_alumnos' => $this->integer()->defaultValue(5)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%materia}}');
    }
}
