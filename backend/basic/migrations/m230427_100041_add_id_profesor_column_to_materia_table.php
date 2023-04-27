<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%materia}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%profesor}}`
 */
class m230427_100041_add_id_profesor_column_to_materia_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%materia}}', 'id_profesor', $this->integer()->notNull());

        // creates index for column `id_profesor`
        $this->createIndex(
            '{{%idx-materia-id_profesor}}',
            '{{%materia}}',
            'id_profesor'
        );

        // add foreign key for table `{{%profesor}}`
        $this->addForeignKey(
            '{{%fk-materia-id_profesor}}',
            '{{%materia}}',
            'id_profesor',
            '{{%profesor}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%profesor}}`
        $this->dropForeignKey(
            '{{%fk-materia-id_profesor}}',
            '{{%materia}}'
        );

        // drops index for column `id_profesor`
        $this->dropIndex(
            '{{%idx-materia-id_profesor}}',
            '{{%materia}}'
        );

        $this->dropColumn('{{%materia}}', 'id_profesor');
    }
}
