<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shipper $shipper
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Shipper'), ['action' => 'edit', $shipper->ShipperID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Shipper'), ['action' => 'delete', $shipper->ShipperID], ['confirm' => __('Are you sure you want to delete # {0}?', $shipper->ShipperID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Shippers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Shipper'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="shippers view content">
            <h3><?= h($shipper->ShipperID) ?></h3>
            <table>
                <tr>
                    <th><?= __('ShipperName') ?></th>
                    <td><?= h($shipper->ShipperName) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($shipper->Phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('ShipperID') ?></th>
                    <td><?= $this->Number->format($shipper->ShipperID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
