<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%materia}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%carrera}}`
 */
class m230427_095838_add_id_carrera_column_to_materia_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%materia}}', 'id_carrera', $this->integer()->notNull());

        // creates index for column `id_carrera`
        $this->createIndex(
            '{{%idx-materia-id_carrera}}',
            '{{%materia}}',
            'id_carrera'
        );

        // add foreign key for table `{{%carrera}}`
        $this->addForeignKey(
            '{{%fk-materia-id_carrera}}',
            '{{%materia}}',
            'id_carrera',
            '{{%carrera}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%carrera}}`
        $this->dropForeignKey(
            '{{%fk-materia-id_carrera}}',
            '{{%materia}}'
        );

        // drops index for column `id_carrera`
        $this->dropIndex(
            '{{%idx-materia-id_carrera}}',
            '{{%materia}}'
        );

        $this->dropColumn('{{%materia}}', 'id_carrera');
    }
}
