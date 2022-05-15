<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderdetail $orderdetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Orderdetail'), ['action' => 'edit', $orderdetail->OrderDetailID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orderdetail'), ['action' => 'delete', $orderdetail->OrderDetailID], ['confirm' => __('Are you sure you want to delete # {0}?', $orderdetail->OrderDetailID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orderdetails'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orderdetail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderdetails view content">
            <h3><?= h($orderdetail->OrderDetailID) ?></h3>
            <table>
                <tr>
                    <th><?= __('OrderDetailID') ?></th>
                    <td><?= $this->Number->format($orderdetail->OrderDetailID) ?></td>
                </tr>
                <tr>
                    <th><?= __('OrderID') ?></th>
                    <td><?= $orderdetail->OrderID === null ? '' : $this->Number->format($orderdetail->OrderID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ProductID') ?></th>
                    <td><?= $orderdetail->ProductID === null ? '' : $this->Number->format($orderdetail->ProductID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $orderdetail->Quantity === null ? '' : $this->Number->format($orderdetail->Quantity) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
