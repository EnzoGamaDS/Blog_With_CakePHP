<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier[]|\Cake\Collection\CollectionInterface $suppliers
 */
?>
<div class="suppliers index content">
    <?= $this->Html->link(__('New Supplier'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Suppliers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('SupplierID') ?></th>
                    <th><?= $this->Paginator->sort('SupplierName') ?></th>
                    <th><?= $this->Paginator->sort('ContactName') ?></th>
                    <th><?= $this->Paginator->sort('Address') ?></th>
                    <th><?= $this->Paginator->sort('City') ?></th>
                    <th><?= $this->Paginator->sort('PostalCode') ?></th>
                    <th><?= $this->Paginator->sort('Country') ?></th>
                    <th><?= $this->Paginator->sort('Phone') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suppliers as $supplier): ?>
                <tr>
                    <td><?= $this->Number->format($supplier->SupplierID) ?></td>
                    <td><?= h($supplier->SupplierName) ?></td>
                    <td><?= h($supplier->ContactName) ?></td>
                    <td><?= h($supplier->Address) ?></td>
                    <td><?= h($supplier->City) ?></td>
                    <td><?= h($supplier->PostalCode) ?></td>
                    <td><?= h($supplier->Country) ?></td>
                    <td><?= h($supplier->Phone) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $supplier->SupplierID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supplier->SupplierID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplier->SupplierID], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->SupplierID)]) ?>
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
