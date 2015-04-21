<?php 
use Illuminate\Database\Seeder;


class SeedUsersTable extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->truncate();

		$users=[


				[

				'first_name' =>'arif',
				'last_name' =>'nayan',
				'email' => 'nayan@gmail.com',
				'password' =>Hash::make('1234')



				],

				[

				'first_name' =>'atanu',
				'last_name' =>'shome',
				'email' => 'atanu@gmail.com',
				'password' =>Hash::make('4321')




				],
				[

				'first_name' =>'rony',
				'last_name' =>'govt.',
				'email' => 'rony@gmail.com',
				'password' =>Hash::make('4341')




				]




		];


		foreach ($users as $user) {
			User::create($user);
			# code...
		}


		//DB::table('users')->insert($users);
	}

}
