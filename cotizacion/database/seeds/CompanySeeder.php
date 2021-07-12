<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $company = new App\Company;
	   $company->name = 'Boreal';
	   $company->area_id = 1;//material de escritorio
	   $company->description = 'Empresa fabricadora de hojas de papel de escritorio';
	   $company->direction = 'AV america';
	   $company->nit = '123123123';
	   $company->city = 'Cochabamba';
	   $company->phone = '123456';
	   $company->email = 'boreal@gmail.com';
	   $company->password = bcrypt('123456');
	   $company->save();

	   $company = new App\Company;
	   $company->name = 'ElectroTech';
	   $company->area_id = 2;//tecnologia
	   $company->description = 'Empresa comercializadora de productos tecnologicos';
	   $company->direction = 'AV san martin';
	   $company->nit = '789456123';
	   $company->city = 'Cochabamba';
	   $company->phone = '485129';
	   $company->email = 'electrotech@gmail.com';
	   $company->password = bcrypt('123456');
	   $company->save();
    }
}
