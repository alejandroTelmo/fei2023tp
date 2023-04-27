<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profesor}}`.
 */
class m230427_034747_create_profesor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%profesor}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(128)->notNull(),
            'apellido' => $this->string(128)->notNull(),
            'mostrar' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%profesor}}');
    }
}
