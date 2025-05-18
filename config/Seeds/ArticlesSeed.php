<?php
declare(strict_types=1);

use Migrations\BaseSeed;

/**
 * Articles seed.
 */
class ArticlesSeed extends BaseSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/migrations/4/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'title' => 'The second ever post!',
                'slug' => 'second-ever-post',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis augue tellus, sed euismod lacus molestie et. Ut ut euismod arcu. Nam laoreet elit tortor, non congue arcu sagittis at. Sed pretium ultrices semper. Morbi feugiat consequat aliquet. Duis posuere bibendum tincidunt.',
                'published' => true,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 2,
                'title' => 'Woo, Three!',
                'slug' => 'woo-three',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis augue tellus, sed euismod lacus molestie et. Ut ut euismod arcu. Nam laoreet elit tortor, non congue arcu sagittis at. Sed pretium ultrices semper. Morbi feugiat consequat aliquet. Duis posuere bibendum tincidunt.',
                'published' => true,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'title' => 'On a roll...',
                'slug' => 'on-a-roll',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis augue tellus, sed euismod lacus molestie et. Ut ut euismod arcu. Nam laoreet elit tortor, non congue arcu sagittis at. Sed pretium ultrices semper. Morbi feugiat consequat aliquet. Duis posuere bibendum tincidunt.',
                'published' => true,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 1,
                'title' => 'Nearly done',
                'slug' => 'nearly-done',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis augue tellus, sed euismod lacus molestie et. Ut ut euismod arcu. Nam laoreet elit tortor, non congue arcu sagittis at. Sed pretium ultrices semper. Morbi feugiat consequat aliquet. Duis posuere bibendum tincidunt.',
                'published' => false,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
}
