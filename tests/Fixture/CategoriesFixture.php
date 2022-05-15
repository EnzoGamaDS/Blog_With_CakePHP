<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriesFixture
 */
class CategoriesFixture extends TestFixture
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
                'CategoryID' => 1,
                'CategoryName' => 'Lorem ipsum dolor sit amet',
                'Description' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
