<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Supplier'), ['action' => 'edit', $supplier->SupplierID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Supplier'), ['action' => 'delete', $supplier->SupplierID], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->SupplierID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Suppliers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Supplier'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="suppliers view content">
            <h3><?= h($supplier->SupplierID) ?></h3>
            <table>
                <tr>
                    <th><?= __('SupplierName') ?></th>
                    <td><?= h($supplier->SupplierName) ?></td>
                </tr>
                <tr>
                    <th><?= __('ContactName') ?></th>
                    <td><?= h($supplier->ContactName) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($supplier->Address) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($supplier->City) ?></td>
                </tr>
                <tr>
                    <th><?= __('PostalCode') ?></th>
                    <td><?= h($supplier->PostalCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($supplier->Country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($supplier->Phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('SupplierID') ?></th>
                    <td><?= $this->Number->format($supplier->SupplierID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
