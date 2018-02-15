<?php

use imanilchaudhari\mongodb\admin\components\Configs;

/**
 * Migration collection of collection_menu
 * 
 * @author Anil Chaudhari <imanilchaudhari@gmail.com>
 * @since 1.0
 */
class m140602_111327_create_menu_collection extends \yii\mongodb\Migration
{

    /**
     * @inheritdoc
     */
    public function up()
    {
        $menuCollection = Configs::instance()->menuCollection;

        $this->createCollection($menuCollection, [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull(),
            'parent' => $this->integer(),
            'route' => $this->string(),
            'order' => $this->integer(),
            'data' => $this->binary(),
            "FOREIGN KEY ([[parent]]) REFERENCES {$menuCollection}([[id]]) ON DELETE SET NULL ON UPDATE CASCADE",
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropCollection(Configs::instance()->menuCollection);
    }
}
