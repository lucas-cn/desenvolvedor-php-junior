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
<div class="usuarios form large-11 medium-10 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Editar Usuario') ?></legend>
        <div class="large-6 medium-6 columns">
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('cpf');
            echo $this->Form->control('nascimento', ['empty' => true, 'minYear' => 1940]);
            echo $this->Form->control('email');
            echo $this->Form->control('telefone', ['type' => 'text']);
        ?>
        </div>
        <div class="large-6 medium-6 columns">
        <?php
            echo $this->Form->input('id_estado',array('type'=>'select', 'label'=>'Estado', 'options'=>$estados));
            echo $this->Form->input('id_cidade',array('type'=>'select', 'label'=>'Cidade', 'options'=>$cidades));
            echo $this->Form->control('endereco', ['label' => 'Endereço']);
        ?>
        </div>
    </fieldset>
    <div style="float: left;padding-left: 1.25rem;">
        <?= $this->Form->button(__('Salvar')) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
