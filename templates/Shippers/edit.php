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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $shipper->ShipperID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shipper->ShipperID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Shippers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="shippers form content">
            <?= $this->Form->create($shipper) ?>
            <fieldset>
                <legend><?= __('Edit Shipper') ?></legend>
                <?php
                    echo $this->Form->control('ShipperName');
                    echo $this->Form->control('Phone');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
