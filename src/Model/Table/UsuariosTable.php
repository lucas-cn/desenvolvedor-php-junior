<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null, $options = [])
 */
class UsuariosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('usuarios');
        $this->setDisplayField('id_usuario');
        $this->setPrimaryKey('id_usuario');

        $this->hasOne('Estados', [
            'className' => 'Estados',
            'foreignKey' => 'id_estado',
            'bindingKey' => 'id_estado'
        ]);

        $this->hasOne('Cidades', [
            'className' => 'Cidades',
            'foreignKey' => 'id_cidade',
            'bindingKey' => 'id_cidade'
        ]);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id_usuario')
            ->allowEmptyString('id_usuario', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 100);

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 11);

        $validator
            ->date('nascimento');

        $validator
            ->email('email');

        $validator
            ->scalar('telefone');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 255);

        $validator
            ->integer('id_cidade')
            ->allowEmptyString('id_cidade');

        $validator
            ->integer('id_estado')
            ->allowEmptyString('id_estado');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['cpf']));

        return $rules;
    }
}
