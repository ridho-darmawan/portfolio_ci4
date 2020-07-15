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
			'title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],

			'text'       => [
				'type'           => 'TEXT',
				'constraint'     => '150',
			],

			'gambar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150',
				'null'			=> TRUE,
			],


		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('service');
	}

	public function down()
	{
		$this->forge->dropTable('service');
	}
}
