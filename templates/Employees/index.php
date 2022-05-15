<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
?>
<div class="employees index content">
    <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Employees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('EmployeeID') ?></th>
                    <th><?= $this->Paginator->sort('LastName') ?></th>
                    <th><?= $this->Paginator->sort('FirstName') ?></th>
                    <th><?= $this->Paginator->sort('BirthDate') ?></th>
                    <th><?= $this->Paginator->sort('Photo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $this->Number->format($employee->EmployeeID) ?></td>
                    <td><?= h($employee->LastName) ?></td>
                    <td><?= h($employee->FirstName) ?></td>
                    <td><?= h($employee->BirthDate) ?></td>
                    <td><?= h($employee->Photo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $employee->EmployeeID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->EmployeeID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->EmployeeID], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->EmployeeID)]) ?>
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
