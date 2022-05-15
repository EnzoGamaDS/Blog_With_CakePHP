<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->EmployeeID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->EmployeeID], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->EmployeeID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees view content">
            <h3><?= h($employee->EmployeeID) ?></h3>
            <table>
                <tr>
                    <th><?= __('LastName') ?></th>
                    <td><?= h($employee->LastName) ?></td>
                </tr>
                <tr>
                    <th><?= __('FirstName') ?></th>
                    <td><?= h($employee->FirstName) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($employee->Photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('EmployeeID') ?></th>
                    <td><?= $this->Number->format($employee->EmployeeID) ?></td>
                </tr>
                <tr>
                    <th><?= __('BirthDate') ?></th>
                    <td><?= h($employee->BirthDate) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($employee->Notes)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
