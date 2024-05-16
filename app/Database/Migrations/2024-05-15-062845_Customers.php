<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'fullname' => ['type' => 'VARCHAR', 'constraint' => 100],
            'username' => ['type' => 'VARCHAR', 'constraint' => 50],
            'email' => ['type' => 'VARCHAR', 'constraint' => 100],
            'password' => ['type' => 'VARCHAR', 'constraint' => 255],
            'phone_number' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'address' => ['type' => 'TEXT', 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('username');
        $this->forge->addUniqueKey('email');
        $this->forge->createTable('customers', true);
    }

    public function down()
    {
        $this->forge->dropTable('customers', true);
    }
}
