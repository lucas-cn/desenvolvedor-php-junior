<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuarios
 */
?>
<nav class="large-1 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><a href="/usuarios/add"><i class="fas fa-plus" style="margin-right: 1px;"></i>Novo Usuario</a></li>
    </ul>
</nav>
<div class="usuarios index large-11 medium-10 columns content">
    <h3><?= __('Lista de Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Data Nascimento</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col" class="actions">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario->nome ?></td>
                <td class="cpf"><?= $usuario->cpf ?></td>
                <td><?= $usuario->nascimento->format('d/m/Y'); ?></td>
                <td><?= $usuario->email ?></td>
                <td class="telefone"><?= $usuario->telefone ?></td>
                <td><?= $usuario->endereco ?></td>
                <td><?= $usuario->Estado?$usuario->Estado->estado:"" ?></td>
                <td><?= $usuario->Cidade?$usuario->Cidade->cidade:"" ?></td>
                <td class="actions">
                    <a href="/usuarios/view/<?= $usuario->id_usuario ?>"><i class="fas fa-eye" style="margin-right: 5px;"></i>Vizualizar Usuario</a>
                    <br>
                    <a href="/usuarios/edit/<?= $usuario->id_usuario ?>"><i class="fas fa-edit" style="margin-right: 5px;"></i>Editar Usuario</a>
                    <br>
                    <span class="btn_del"><i class="fas fa-trash" style="margin-right: 5px;"></i><?= $this->Form->postLink('Editar', ['action' => 'delete', $usuario->id_usuario], ['confirm' => __('Deletar usuario "'.$usuario->nome.'"?', $usuario->id_usuario)]) ?></span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers()?$this->Paginator->numbers():0 ?>
            <?= $this->Paginator->next(__('proxima') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
    </div>
</div>
