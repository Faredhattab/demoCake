<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '223957d1-8684-4496-a9df-d0bef9c05c2b',
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'created' => '2021-12-21 21:01:12',
                'modified' => '2021-12-21 21:01:12',
                'deleted' => '2021-12-21 21:01:12',
            ],
        ];
        parent::init();
    }
}
