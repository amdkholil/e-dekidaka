<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_Table extends CI_Migration
{
	
	function up()
	{

		//table users
		$this->dbforge->add_field(
			array(
				'id'=> array(
					'type' => 'int',
					'auto_increment' => true
				),
				'user'=> array(
					'type' => 'varchar',
					'constraint' => '100'
				),
				'password'=> array(
					'type' => 'varchar',
					'constraint' => '100'
				)
			)
		);
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('users');


		//table line
		$this->dbforge->add_field(
			array(
				'id'=> array(
					'type' => 'int',
					'auto_increment' => true
				),
				'nama'=> array(
					'type' => 'varchar',
					'constraint' => '100'
				),
				'kode_bu'=> array(
					'type' => 'varchar',
					'constraint' => '100'
				),
				'section'=> array(
					'type' => 'varchar',
					'constraint' => '100'
				)
			)
		);
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('line');

		//table model
		$this->dbforge->add_field(
			array(
				'id'=> array(
					'type' => 'int',
					'auto_increment' => true
				),
				'nama'=> array(
					'type' => 'varchar',
					'constraint' => '100'
				),
				'part_number'=> array(
					'type' => 'varchar',
					'constraint' => '100'
				)
			)
		);
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('model');

		//table NG
		$this->dbforge->add_field(
			array(
				'id'=> array(
					'type' => 'int',
					'auto_increment' => true
				),
				'nama'=> array(
					'type' => 'varchar',
					'constraint' => '100'
				),
				'deskripsi'=> array(
					'type' => 'text'
				)
			)
		);
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('t_ng');

		//table BM
		$this->dbforge->add_field(
			array(
				'id'=> array(
					'type' => 'int',
					'auto_increment' => true
				),
				'nama'=> array(
					'type' => 'varchar',
					'constraint' => '100'
				),
				'deskripsi'=> array(
					'type' => 'text'
				)
			)
		);
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('t_bm');

		//table produksi
		$this->dbforge->add_field(
			array(
				'id'=> array(
					'type' => 'int',
					'auto_increment' => true
				),
				'id_plan'=> array(
					'type' => 'int'
				),
				'id_line'=> array(
					'type' => 'int'
				),
				'tgl'=> array(
					'type' => 'date'
				),
				'shift'=> array(
					'type' => 'varchar',
					'constraint' => '20',
				),
				'WH'=> array(
					'type' => 'int'
				),
				'start'=> array(
					'type' => 'time'
				),
				'end'=> array(
					'type' => 'time'
				)
			)
		);
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('produksi');


		//table detail_prod
		$this->dbforge->add_field(
			array(
				'date'=> array(
					'type' => 'date'
				),
				'time'=> array(
					'type' => 'time',
				),
				'line'=> array(
					'type' => 'varchar',
					'constraint' => '50'
				),
				'model'=> array(
					'type' => 'varchar',
					'constraint' => '100'
				)
			)
		);
		$this->dbforge->create_table('detail_produksi');


		//table detail_bm
		$this->dbforge->add_field(
			array(
				'id'=> array(
					'type' => 'int',
					'auto_increment' => true
				),
				'id_bm'=> array(
					'type' => 'int'
				),
				'id_line'=> array(
					'type' => 'int'
				),
				'tanggal'=> array(
					'type' => 'date'
				),
				'shift'=> array(
					'type' => 'varchar',
					'constraint' => '10'
				),
				'jam'=> array(
					'type' => 'date'
				),
				'op'=> array(
					'type' => 'varchar',
					'constraint' => '10'
				),
				'detail'=> array(
					'type' => 'text'
				),
				'penanganan'=> array(
					'type' => 'text'
				),
				'losttime'=> array(
					'type' => 'int'
				),
				'pic'=> array(
					'type' => 'varchar',
					'constraint' => '10'
				),
				'atachment'=> array(
					'type' => 'varchar',
					'constraint' => '100'
				)
			)
		);
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('detail_bm');


		//table detail_ng
		$this->dbforge->add_field(
			array(
				'id'=> array(
					'type' => 'int',
					'auto_increment' => true
				),
				'id_ng'=> array(
					'type' => 'int'
				),
				'id_model'=> array(
					'type' => 'int'
				),
				'tanggal'=> array(
					'type' => 'date'
				),
				'shift'=> array(
					'type' => 'varchar',
					'constraint' => '10'
				),
				'detail'=> array(
					'type' => 'text'
				),
				'qty'=> array(
					'type' => 'int'
				),
				'atachment'=> array(
					'type' => 'varchar',
					'constraint' => '100'
				)
			)
		);
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('detail_ng');


	}

	function down(){
		$this->dbforge->drop_table('users');
		$this->dbforge->drop_table('line');
		$this->dbforge->drop_table('model');
		$this->dbforge->drop_table('t_ng');
		$this->dbforge->drop_table('t_bm');
		$this->dbforge->drop_table('produksi');
		$this->dbforge->drop_table('detail_produksi');
		$this->dbforge->drop_table('detail_bm');
		$this->dbforge->drop_table('detail_ng');
	}
}