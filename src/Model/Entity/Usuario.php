<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id_usuario
 * @property string|null $nome
 * @property string|null $cpf
 * @property \Cake\I18n\FrozenDate|null $nascimento
 * @property string|null $email
 * @property int|null $telefone
 * @property string|null $endereco
 * @property int|null $id_cidade
 * @property int|null $id_estado
 */
class Usuario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'cpf' => true,
        'nascimento' => true,
        'email' => true,
        'telefone' => true,
        'endereco' => true,
        'id_cidade' => true,
        'id_estado' => true
    ];
}
