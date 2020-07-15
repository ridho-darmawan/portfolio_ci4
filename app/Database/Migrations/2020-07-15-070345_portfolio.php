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
			'jenis'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],

			'title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150',
			],

			'deskripsi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],

			'fitur'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150',
			],
			'gambar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150',
				'null'			=> TRUE,
			],


		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('portfolio');
	}

	public function down()
	{
		// $this->forge->dropTable('portfolio');
	}
}
