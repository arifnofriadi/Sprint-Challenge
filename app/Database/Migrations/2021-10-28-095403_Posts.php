<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Posts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => TRUE,
                'auto_increment'=> TRUE
            ],
            'title'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'image'     => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'description'  => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
        
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('posts', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
