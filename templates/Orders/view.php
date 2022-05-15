<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->OrderID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->OrderID], ['confirm' => __('Are you sure you want to delete # {0}?', $order->OrderID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orders view content">
            <h3><?= h($order->OrderID) ?></h3>
            <table>
                <tr>
                    <th><?= __('OrderID') ?></th>
                    <td><?= $this->Number->format($order->OrderID) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerID') ?></th>
                    <td><?= $order->CustomerID === null ? '' : $this->Number->format($order->CustomerID) ?></td>
                </tr>
                <tr>
                    <th><?= __('EmployeeID') ?></th>
                    <td><?= $order->EmployeeID === null ? '' : $this->Number->format($order->EmployeeID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ShipperID') ?></th>
                    <td><?= $order->ShipperID === null ? '' : $this->Number->format($order->ShipperID) ?></td>
                </tr>
                <tr>
                    <th><?= __('OrderDate') ?></th>
                    <td><?= h($order->OrderDate) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
