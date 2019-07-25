<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id_usuario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id_usuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id_usuario)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id_usuario) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($usuario->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($usuario->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Usuario') ?></th>
            <td><?= $this->Number->format($usuario->id_usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= $this->Number->format($usuario->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Cidade') ?></th>
            <td><?= $this->Number->format($usuario->id_cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Estado') ?></th>
            <td><?= $this->Number->format($usuario->id_estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nascimento') ?></th>
            <td><?= h($usuario->nascimento) ?></td>
        </tr>
    </table>
</div>
