<?php
namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $regions = [
        //     ['name'=>'REGION I (ILOCOS REGION)', ],
        //     ['name'=>'REGION II (CAGAYAN VALLEY)', ],
        //     ['name'=>'REGION III (CENTRAL LUZON)', ],
        //     ['name'=>'REGION IV-A (CALABARZON)', ],
        //     ['name'=>'REGION V (BICOL REGION)', ],
        //     ['name'=>'REGION VI (WESTERN VISAYAS)', ],
        //     ['name'=>'REGION VII (CENTRAL VISAYAS)', ],
        //     ['name'=>'REGION VIII (EASTERN VISAYAS)', ],
        //     ['name'=>'REGION IX (ZAMBOANGA PENINSULA)', ],
        //     ['name'=>'REGION X (NORTHERN MINDANAO)', ],
        //     ['name'=>'REGION XI (DAVAO REGION)', ],
        //     ['name'=>'REGION XII (SOCCSKSARGEN)', ],
        //     ['name'=>'NATIONAL CAPITAL REGION (NCR)', ],
        //     ['name'=>'CORDILLERA ADMINISTRATIVE REGION (CAR)', ],
        //     ['name'=>'AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)', ],
        //     ['name'=>'REGION XIII (CARAGA)', ],
        //     ['name'=>'RMIMAROPA REGION', ],
        // ];

        // foreach($regions as $value)
        //     Region::updateOrInsert($value, $value);

        $path = public_path('sql/ph_regions.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);
        
    }
}
