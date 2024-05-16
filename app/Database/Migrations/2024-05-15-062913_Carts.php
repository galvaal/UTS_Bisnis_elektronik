<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Carts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'customer_id' => ['type' => 'INT', 'constraint' => 11, 'null' => true],
            'product_id' => ['type' => 'INT', 'constraint' => 11, 'null' => true],
            'quantity' => ['type' => 'INT', 'constraint' => 11, 'null' => true],
            'price' => ['type' => 'DECIMAL', 'constraint' => '10,2', 'null' => true],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('customer_id', 'customers', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('carts', true);
    }

    public function down()
    {
        $this->forge->dropTable('carts', true);
    }
}
