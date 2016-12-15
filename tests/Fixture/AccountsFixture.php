<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccountsFixture
 *
 */
class AccountsFixture extends TestFixture
{
    public $import = ['table' => 'accounts'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'email' => 'test1@exmaple.com',
            'status' => 'enable',
            'password' => 'Lorem ipsum dolor sit amet',
            'created' => '2016-12-15 02:58:31',
            'modified' => '2016-12-15 02:58:31'
        ],
        [
            'id' => 2,
            'email' => 'test2@exmaple.com',
            'status' => 'disable',
            'password' => 'Lorem ipsum dolor sit amet',
            'created' => '2016-12-15 02:58:31',
            'modified' => '2016-12-15 02:58:31'
        ],
        [
            'id' => 3,
            'email' => 'test3@exmaple.com',
            'status' => 'enable',
            'password' => 'Lorem ipsum dolor sit amet',
            'created' => '2016-12-15 02:58:31',
            'modified' => '2016-12-15 02:58:31'
        ],
    ];
}
