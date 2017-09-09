<?php
/**
 * Created by PhpStorm.
 * User: Ришат
 * Date: 09.09.2017
 * Time: 18:28
 */

class Migration_Add_user extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(
            array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => true,
                    'auto_increment' => true
                ),
                'name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'codeforvote' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'codeidentical' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'email' => array(
                    'type' => 'TEXT',
                    'null' => true,
                ),
            )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}