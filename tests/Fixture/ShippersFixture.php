<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ShippersFixture
 */
class ShippersFixture extends TestFixture
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
                'ShipperID' => 1,
                'ShipperName' => 'Lorem ipsum dolor sit amet',
                'Phone' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
