<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 */
class UsuariosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cpf' => ['type' => 'string', 'length' => 11, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nascimento' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'email' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'telefone' => ['type' => 'integer', 'length' => 12, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'endereco' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_cidade' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_estado' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'estado' => ['type' => 'index', 'columns' => ['id_estado'], 'length' => []],
            'cidade' => ['type' => 'index', 'columns' => ['id_cidade'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_usuario'], 'length' => []],
            'cidade' => ['type' => 'foreign', 'columns' => ['id_cidade'], 'references' => ['cidades', 'id_cidade'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'estado' => ['type' => 'foreign', 'columns' => ['id_estado'], 'references' => ['estados', 'id_estado'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id_usuario' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'cpf' => 'Lorem ips',
                'nascimento' => '2019-07-25',
                'email' => 'Lorem ipsum dolor sit amet',
                'telefone' => 1,
                'endereco' => 'Lorem ipsum dolor sit amet',
                'id_cidade' => 1,
                'id_estado' => 1
            ],
        ];
        parent::init();
    }
}
