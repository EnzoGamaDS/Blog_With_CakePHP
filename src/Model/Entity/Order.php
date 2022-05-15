<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $OrderID
 * @property int|null $CustomerID
 * @property int|null $EmployeeID
 * @property \Cake\I18n\FrozenDate|null $OrderDate
 * @property int|null $ShipperID
 */
class Order extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'CustomerID' => true,
        'EmployeeID' => true,
        'OrderDate' => true,
        'ShipperID' => true,
    ];
}
