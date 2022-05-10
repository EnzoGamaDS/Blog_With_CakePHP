<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomersFixture
 */
class CustomersFixture extends TestFixture
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
                'CustomerID' => 1,
                'CustomerName' => 'Lorem ipsum dolor sit amet',
                'ContactName' => 'Lorem ipsum dolor sit amet',
                'Address' => 'Lorem ipsum dolor sit amet',
                'City' => 'Lorem ipsum dolor sit amet',
                'PostalCode' => 'Lorem ipsum dolor sit amet',
                'Country' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
