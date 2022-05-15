<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderdetail[]|\Cake\Collection\CollectionInterface $orderdetails
 */
?>
<div class="orderdetails index content">
    <?= $this->Html->link(__('New Orderdetail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orderdetails') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('OrderDetailID') ?></th>
                    <th><?= $this->Paginator->sort('OrderID') ?></th>
                    <th><?= $this->Paginator->sort('ProductID') ?></th>
                    <th><?= $this->Paginator->sort('Quantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orderdetails as $orderdetail): ?>
                <tr>
                    <td><?= $this->Number->format($orderdetail->OrderDetailID) ?></td>
                    <td><?= $orderdetail->OrderID === null ? '' : $this->Number->format($orderdetail->OrderID) ?></td>
                    <td><?= $orderdetail->ProductID === null ? '' : $this->Number->format($orderdetail->ProductID) ?></td>
                    <td><?= $orderdetail->Quantity === null ? '' : $this->Number->format($orderdetail->Quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $orderdetail->OrderDetailID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderdetail->OrderDetailID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderdetail->OrderDetailID], ['confirm' => __('Are you sure you want to delete # {0}?', $orderdetail->OrderDetailID)]) ?>
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
