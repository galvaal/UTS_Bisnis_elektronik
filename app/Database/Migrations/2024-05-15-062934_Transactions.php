<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transactions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'midtrans_transaction_id' => ['type' => 'VARCHAR', 'constraint' => 50],
            'midtrans_order_id' => ['type' => 'VARCHAR', 'constraint' => 50],
            'status' => ['type' => 'VARCHAR', 'constraint' => 50],
            'amount' => ['type' => 'DECIMAL', 'constraint' => '10,2'],
            'payment_type' => ['type' => 'VARCHAR', 'constraint' => 50],
            'transaction_time' => ['type' => 'DATETIME'],
            'fraud_status' => ['type' => 'VARCHAR', 'constraint' => 50],
            'created_at' => ['type' => 'DATETIME', 'null' => true],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('transactions', true);
    }

    public function down()
    {
        $this->forge->dropTable('transactions', true);
    }
}
