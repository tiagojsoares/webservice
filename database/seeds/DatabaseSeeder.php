<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $date = date("Y/m/d H:i:s", strtotime("+30 seconds"));
        DB::table('ACVSCore.dbo.perso_Cred')->delete();
        DB::table('ACVSCore.dbo.perso_Card')->delete();
        DB::table('ACVSCore.dbo.personnelWeb')->delete();

        DB::table('ACVSCore.dbo.personnelWeb')->updateOrInsert([
            'First_Name' => 'Tiago',
            'MiddleName' => 'Jose',
            'Last_Name' => 'Soares',
            'Time_Stamp' => date('Y-m-d h:i:s'),
            'PersonnelType' => 'PEPSICO',
            'Text3' => 'PEPSICO',
            'Text1' => '46357120'
        ]);

        DB::table('ACVSCore.dbo.perso_Card')->updateOrInsert(
            [
                'Time_Stamp' => $date,
                'CardNumber' => '2426',
                'Text3' => 'PEPSICO',
                'Text1' => '46357120'
            ]

        );
        DB::table('ACVSCore.dbo.perso_Cred')->updateOrInsert(
            [
                'Time_Stamp' => $date,
                'Clearance_name' => 'PEPSICO',
                'Text3' => 'PEPSICO',
                'Text1' => '46357120'
            ]

        );
    }
}
