<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->CustomerID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->CustomerID], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->CustomerID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers view content">
            <h3><?= h($customer->CustomerID) ?></h3>
            <table>
                <tr>
                    <th><?= __('CustomerName') ?></th>
                    <td><?= h($customer->CustomerName) ?></td>
                </tr>
                <tr>
                    <th><?= __('ContactName') ?></th>
                    <td><?= h($customer->ContactName) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($customer->Address) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($customer->City) ?></td>
                </tr>
                <tr>
                    <th><?= __('PostalCode') ?></th>
                    <td><?= h($customer->PostalCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($customer->Country) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerID') ?></th>
                    <td><?= $this->Number->format($customer->CustomerID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
