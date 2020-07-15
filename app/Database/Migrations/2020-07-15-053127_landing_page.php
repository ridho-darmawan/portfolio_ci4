<?php

namespace App\Database\Migrations;

class AddBlog extends \CodeIgniter\Database\Migration
{

	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'work_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],

		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('work');
	}

	public function down()
	{
		// $this->forge->dropTable('blog');
	}
}
