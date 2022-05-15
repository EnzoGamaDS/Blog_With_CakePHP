<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Orderdetail Entity
 *
 * @property int $OrderDetailID
 * @property int|null $OrderID
 * @property int|null $ProductID
 * @property int|null $Quantity
 */
class Orderdetail extends Entity
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
        'OrderID' => true,
        'ProductID' => true,
        'Quantity' => true,
    ];
}
