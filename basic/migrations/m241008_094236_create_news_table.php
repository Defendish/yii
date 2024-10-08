<?php

use app\models\Category;
use app\models\Post;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m241008_094236_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Safeup()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey()->unique()->notNull()->Unsigned(),
            'category_id' => $this->integer()->notNull()->Unsigned(),
            'title' => $this->string(500)->notNull(),
            'excertp' => $this->string(255)->notNull(),
            'content' => $this->text()->notNull(),
            'img' => $this->string(500),
            'created_at' => $this->integer(),
            'keywords' => $this->string(500),
            'description' => $this->string(500),
        ]);
        $this->createTable('category', [
            'id' => $this->primaryKey()->unique()->notNull()->Unsigned(),
            'title' => $this->string(500)->notNull(),
            'alias' => $this->string(500)->notNull(),

        ]);
        $this->addForeignKey(
            'category_id',
            'post',
            'category_id',
            'category',
            'id',
        );
        for ($j = 0; $j < 100; $j++) {
            $category = new Category();
            $category->alias = 'category' . $j;
            $category->title = 'Category' . $j;
            $category->save();
            for ($i = 0; $i < 100; $i++) {
                $post = new Post();
                $post->category_id = $category->id;
                $post->title = 'Title' . $i;
                $post->description = 'Description' . $i;
                $post->excertp = 'Excertp' . $i;
                $post->content = 'Content' . $i;
                $post->keywords = 'KeyWords' . $i;
                $post->description = 'Description' . $i;
                $post->save();
            }
        }
    }

    public function down()
    {
        $this->dropTable('post');
        $this->dropTable('category');
    }

}
