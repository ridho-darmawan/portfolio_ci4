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
			'logo'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],

			'icon'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],

			'name_profil'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],

			'des_job'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],

			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150',
			],

			'telpon'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '150',

			],

			'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',

			],

			'peta'       => [
				'type'           => 'text',


			],


		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('Profil_Web');
	}

	public function down()
	{
		$this->forge->dropTable('Profil_Web');
	}
}
