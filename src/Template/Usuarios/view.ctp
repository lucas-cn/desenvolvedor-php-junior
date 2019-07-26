<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-1 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li>
            <div>
                <a class="btn" href="/"><i class="fas fa-list" style="margin-right: 5px;"></i>Listar Usuarios</a>
            </div>
        </li>
        <li>
            <div>
                <a class="btn" href="/usuarios/add"><i class="fas fa-plus" style="margin-right: 5px;"></i>Novo Usuario</a>
            </div>
        </li>
        <li>
            <a class="btn" href="/usuarios/edit/<?= $usuario->id_usuario ?>"><i class="fas fa-edit" style="margin-right: 5px;"></i>Editar Usuario</a>
        </li>
        <li>
            <div class="btn_del">
                <i class="fas fa-trash" style="margin-right: 5px;"></i>
                <?= $this->Form->postLink(
                    __('Deletar'),
                    ['action' => 'delete', $usuario->id_usuario],
                    ['confirm' => __('Deletar usuario "'.$usuario->nome.'"?', $usuario->id_usuario)]
                    )
                ?>
            </div>
        </li>
    </ul>
</nav>
<div class="usuarios view large-11 medium-10 columns content">
    <h3><?= h($usuario->nome) ?></h3>
    <table class="vertical-table large-4">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nascimento') ?></th>
            <td><?= $usuario->nascimento->format('d/m/Y') ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td class="cpf"><?= h($usuario->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td  class="telefone"><?= h($usuario->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $usuario->estado?$usuario->estado['estado']:"" ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= $usuario->cidade?$usuario->cidade['cidade']:"" ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($usuario->endereco) ?></td>
        </tr>
    </table>
</div>
