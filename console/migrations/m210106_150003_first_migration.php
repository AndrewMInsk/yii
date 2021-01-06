<?php

use yii\db\Migration;

/**
 * Class m210106_150003_first_migration
 */
class m210106_150003_first_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210106_150003_first_migration cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210106_150003_first_migration cannot be reverted.\n";

        return false;
    }
    */
}
