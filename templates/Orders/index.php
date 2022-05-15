<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<div class="orders index content">
    <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('OrderID') ?></th>
                    <th><?= $this->Paginator->sort('CustomerID') ?></th>
                    <th><?= $this->Paginator->sort('EmployeeID') ?></th>
                    <th><?= $this->Paginator->sort('OrderDate') ?></th>
                    <th><?= $this->Paginator->sort('ShipperID') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $this->Number->format($order->OrderID) ?></td>
                    <td><?= $order->CustomerID === null ? '' : $this->Number->format($order->CustomerID) ?></td>
                    <td><?= $order->EmployeeID === null ? '' : $this->Number->format($order->EmployeeID) ?></td>
                    <td><?= h($order->OrderDate) ?></td>
                    <td><?= $order->ShipperID === null ? '' : $this->Number->format($order->ShipperID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $order->OrderID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->OrderID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->OrderID], ['confirm' => __('Are you sure you want to delete # {0}?', $order->OrderID)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
