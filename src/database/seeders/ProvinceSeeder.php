<?php

namespace Database\Seeders;

use App\Models\Province;
use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $provinces = [
        //     ['province_name'=>'Ilocos Norte','uacs_code'=>'0128','region_id'=>Region::where('uacs_code', '01')->value('id'), ],
        //     ['province_name'=>'Ilocos Sur','uacs_code'=>'0129','region_id'=>Region::where('uacs_code', '01')->value('id'), ],
        //     ['province_name'=>'La Union','uacs_code'=>'0133','region_id'=>Region::where('uacs_code', '01')->value('id'), ],
        //     ['province_name'=>'Pangasinan','uacs_code'=>'0155','region_id'=>Region::where('uacs_code', '01')->value('id'), ],
        //     ['province_name'=>'Batanes','uacs_code'=>'0209','region_id'=>Region::where('uacs_code', '02')->value('id'), ],
        //     ['province_name'=>'Cagayan','uacs_code'=>'0215','region_id'=>Region::where('uacs_code', '02')->value('id'), ],
        //     ['province_name'=>'Isabela','uacs_code'=>'0231','region_id'=>Region::where('uacs_code', '02')->value('id'), ],
        //     ['province_name'=>'Nueva Vizcaya','uacs_code'=>'0250','region_id'=>Region::where('uacs_code', '02')->value('id'), ],
        //     ['province_name'=>'Quirino','uacs_code'=>'0257','region_id'=>Region::where('uacs_code', '02')->value('id'), ],
        //     ['province_name'=>'Bataan','uacs_code'=>'0308','region_id'=>Region::where('uacs_code', '03')->value('id'), ],
        //     ['province_name'=>'Bulacan','uacs_code'=>'0314','region_id'=>Region::where('uacs_code', '03')->value('id'), ],
        //     ['province_name'=>'Nueva Ecija','uacs_code'=>'0349','region_id'=>Region::where('uacs_code', '03')->value('id'), ],
        //     ['province_name'=>'Pampanga','uacs_code'=>'0354','region_id'=>Region::where('uacs_code', '03')->value('id'), ],
        //     ['province_name'=>'Tarlac','uacs_code'=>'0369','region_id'=>Region::where('uacs_code', '03')->value('id'), ],
        //     ['province_name'=>'Zambales','uacs_code'=>'0371','region_id'=>Region::where('uacs_code', '03')->value('id'), ],
        //     ['province_name'=>'Aurora','uacs_code'=>'0377','region_id'=>Region::where('uacs_code', '03')->value('id'), ],
        //     ['province_name'=>'Batangas','uacs_code'=>'0410','region_id'=>Region::where('uacs_code', '04')->value('id'), ],
        //     ['province_name'=>'Cavite','uacs_code'=>'0421','region_id'=>Region::where('uacs_code', '04')->value('id'), ],
        //     ['province_name'=>'Laguna','uacs_code'=>'0434','region_id'=>Region::where('uacs_code', '04')->value('id'), ],
        //     ['province_name'=>'Quezon','uacs_code'=>'0456','region_id'=>Region::where('uacs_code', '04')->value('id'), ],
        //     ['province_name'=>'Rizal','uacs_code'=>'0458','region_id'=>Region::where('uacs_code', '04')->value('id'), ],
        //     ['province_name'=>'Albay','uacs_code'=>'0505','region_id'=>Region::where('uacs_code', '05')->value('id'), ],
        //     ['province_name'=>'Camarines Norte','uacs_code'=>'0516','region_id'=>Region::where('uacs_code', '05')->value('id'), ],
        //     ['province_name'=>'Camarines Sur','uacs_code'=>'0517','region_id'=>Region::where('uacs_code', '05')->value('id'), ],
        //     ['province_name'=>'Catanduanes','uacs_code'=>'0520','region_id'=>Region::where('uacs_code', '05')->value('id'), ],
        //     ['province_name'=>'Masbate','uacs_code'=>'0541','region_id'=>Region::where('uacs_code', '05')->value('id'), ],
        //     ['province_name'=>'Sorsogon','uacs_code'=>'0562','region_id'=>Region::where('uacs_code', '05')->value('id'), ],
        //     ['province_name'=>'Aklan','uacs_code'=>'0604','region_id'=>Region::where('uacs_code', '06')->value('id'), ],
        //     ['province_name'=>'Antique','uacs_code'=>'0606','region_id'=>Region::where('uacs_code', '06')->value('id'), ],
        //     ['province_name'=>'Capiz','uacs_code'=>'0619','region_id'=>Region::where('uacs_code', '06')->value('id'), ],
        //     ['province_name'=>'Iloilo','uacs_code'=>'0630','region_id'=>Region::where('uacs_code', '06')->value('id'), ],
        //     ['province_name'=>'Negros Occidental','uacs_code'=>'0645','region_id'=>Region::where('uacs_code', '06')->value('id'), ],
        //     ['province_name'=>'Guimaras','uacs_code'=>'0679','region_id'=>Region::where('uacs_code', '06')->value('id'), ],
        //     ['province_name'=>'Bohol','uacs_code'=>'0712','region_id'=>Region::where('uacs_code', '07')->value('id'), ],
        //     ['province_name'=>'Cebu','uacs_code'=>'0722','region_id'=>Region::where('uacs_code', '07')->value('id'), ],
        //     ['province_name'=>'Negros Oriental','uacs_code'=>'0746','region_id'=>Region::where('uacs_code', '07')->value('id'), ],
        //     ['province_name'=>'Siquijor','uacs_code'=>'0761','region_id'=>Region::where('uacs_code', '07')->value('id'), ],
        //     ['province_name'=>'Eastern Samar','uacs_code'=>'0827','region_id'=>Region::where('uacs_code', '08')->value('id'), ],
        //     ['province_name'=>'Leyte','uacs_code'=>'0837','region_id'=>Region::where('uacs_code', '08')->value('id'), ],
        //     ['province_name'=>'Northern Samar','uacs_code'=>'0848','region_id'=>Region::where('uacs_code', '08')->value('id'), ],
        //     ['province_name'=>'Samar (Western Samar)','uacs_code'=>'0860','region_id'=>Region::where('uacs_code', '08')->value('id'), ],
        //     ['province_name'=>'Southern Leyte','uacs_code'=>'0864','region_id'=>Region::where('uacs_code', '08')->value('id'), ],
        //     ['province_name'=>'Biliran','uacs_code'=>'0878','region_id'=>Region::where('uacs_code', '08')->value('id'), ],
        //     ['province_name'=>'Zamboanga del Norte','uacs_code'=>'0972','region_id'=>Region::where('uacs_code', '09')->value('id'), ],
        //     ['province_name'=>'Zamboanga del Sur','uacs_code'=>'0973','region_id'=>Region::where('uacs_code', '09')->value('id'), ],
        //     ['province_name'=>'Zamboanga Sibugay','uacs_code'=>'0983','region_id'=>Region::where('uacs_code', '09')->value('id'), ],
        //     ['province_name'=>'City of Isabela (Not a Province)','uacs_code'=>'0997','region_id'=>Region::where('uacs_code', '09')->value('id'), ],
        //     ['province_name'=>'Bukidnon','uacs_code'=>'1013','region_id'=>Region::where('uacs_code', '10')->value('id'), ],
        //     ['province_name'=>'Camiguin','uacs_code'=>'1018','region_id'=>Region::where('uacs_code', '10')->value('id'), ],
        //     ['province_name'=>'Lanao del Norte','uacs_code'=>'1035','region_id'=>Region::where('uacs_code', '10')->value('id'), ],
        //     ['province_name'=>'Misamis Occidental','uacs_code'=>'1042','region_id'=>Region::where('uacs_code', '10')->value('id'), ],
        //     ['province_name'=>'Misamis Oriental','uacs_code'=>'1043','region_id'=>Region::where('uacs_code', '10')->value('id'), ],
        //     ['province_name'=>'Davao del Norte','uacs_code'=>'1123','region_id'=>Region::where('uacs_code', '11')->value('id'), ],
        //     ['province_name'=>'Davao del Sur','uacs_code'=>'1124','region_id'=>Region::where('uacs_code', '11')->value('id'), ],
        //     ['province_name'=>'Davao Oriental','uacs_code'=>'1125','region_id'=>Region::where('uacs_code', '11')->value('id'), ],
        //     ['province_name'=>'Compostela Valley','uacs_code'=>'1182','region_id'=>Region::where('uacs_code', '11')->value('id'), ],
        //     ['province_name'=>'Davao Occidental','uacs_code'=>'1186','region_id'=>Region::where('uacs_code', '11')->value('id'), ],
        //     ['province_name'=>'North Cotabato','uacs_code'=>'1247','region_id'=>Region::where('uacs_code', '12')->value('id'), ],
        //     ['province_name'=>'South Cotabato','uacs_code'=>'1263','region_id'=>Region::where('uacs_code', '12')->value('id'), ],
        //     ['province_name'=>'Sultan Kudarat','uacs_code'=>'1265','region_id'=>Region::where('uacs_code', '12')->value('id'), ],
        //     ['province_name'=>'Sarangani','uacs_code'=>'1280','region_id'=>Region::where('uacs_code', '12')->value('id'), ],
        //     ['province_name'=>'Cotabato City (Not a Province)','uacs_code'=>'1298','region_id'=>Region::where('uacs_code', '12')->value('id'), ],
        //     ['province_name'=>'NCR, City of Manila, First District (Not a Province)','uacs_code'=>'1339','region_id'=>Region::where('uacs_code', '13')->value('id'), ],
        //     ['province_name'=>'NCR, Second District (Not a Province)','uacs_code'=>'1374','region_id'=>Region::where('uacs_code', '13')->value('id'), ],
        //     ['province_name'=>'NCR, Third District (Not a Province)','uacs_code'=>'1375','region_id'=>Region::where('uacs_code', '13')->value('id'), ],
        //     ['province_name'=>'NCR, Fourth District (Not a Province)','uacs_code'=>'1376','region_id'=>Region::where('uacs_code', '13')->value('id'), ],
        //     ['province_name'=>'Abra','uacs_code'=>'1401','region_id'=>Region::where('uacs_code', '14')->value('id'), ],
        //     ['province_name'=>'Benguet','uacs_code'=>'1411','region_id'=>Region::where('uacs_code', '14')->value('id'), ],
        //     ['province_name'=>'Ifugao','uacs_code'=>'1427','region_id'=>Region::where('uacs_code', '14')->value('id'), ],
        //     ['province_name'=>'Kalinga','uacs_code'=>'1432','region_id'=>Region::where('uacs_code', '14')->value('id'), ],
        //     ['province_name'=>'Mountain Province','uacs_code'=>'1444','region_id'=>Region::where('uacs_code', '14')->value('id'), ],
        //     ['province_name'=>'Apayao','uacs_code'=>'1481','region_id'=>Region::where('uacs_code', '14')->value('id'), ],
        //     ['province_name'=>'Basilan','uacs_code'=>'1507','region_id'=>Region::where('uacs_code', '15')->value('id'), ],
        //     ['province_name'=>'Lanao del Sur','uacs_code'=>'1536','region_id'=>Region::where('uacs_code', '15')->value('id'), ],
        //     ['province_name'=>'Maguindanao','uacs_code'=>'1538','region_id'=>Region::where('uacs_code', '15')->value('id'), ],
        //     ['province_name'=>'Sulu','uacs_code'=>'1566','region_id'=>Region::where('uacs_code', '15')->value('id'), ],
        //     ['province_name'=>'Tawi-Tawi','uacs_code'=>'1570','region_id'=>Region::where('uacs_code', '15')->value('id'), ],
        //     ['province_name'=>'Agusan del Norte','uacs_code'=>'1602','region_id'=>Region::where('uacs_code', '16')->value('id'), ],
        //     ['province_name'=>'Agusan del Sur','uacs_code'=>'1603','region_id'=>Region::where('uacs_code', '16')->value('id'), ],
        //     ['province_name'=>'Surigao del Norte','uacs_code'=>'1667','region_id'=>Region::where('uacs_code', '16')->value('id'), ],
        //     ['province_name'=>'Surigao del Sur','uacs_code'=>'1668','region_id'=>Region::where('uacs_code', '16')->value('id'), ],
        //     ['province_name'=>'Dinagat Islands','uacs_code'=>'1685','region_id'=>Region::where('uacs_code', '16')->value('id'), ],
        //     ['province_name'=>'Marinduque','uacs_code'=>'1740','region_id'=>Region::where('uacs_code', '17')->value('id'), ],
        //     ['province_name'=>'Occidental Mindoro','uacs_code'=>'1751','region_id'=>Region::where('uacs_code', '17')->value('id'), ],
        //     ['province_name'=>'Oriental Mindoro','uacs_code'=>'1752','region_id'=>Region::where('uacs_code', '17')->value('id'),],
        //     ['province_name'=>'Palawan','uacs_code'=>'1753','region_id'=>Region::where('uacs_code', '17')->value('id'),],
        //     ['province_name'=>'Romblon','uacs_code'=>'1759','region_id'=>Region::where('uacs_code', '17')->value('id'),],
        //     ['province_name'=>'Negros Occidental','uacs_code'=>'1845','region_id'=>Region::where('uacs_code', '18')->value('id'),],
        //     ['province_name'=>'Negros Oriental','uacs_code'=>'1846','region_id'=>Region::where('uacs_code', '18')->value('id'),],


        // ];

        // foreach($provinces as $value)
        // Province::updateOrInsert($value, $value);
        
        $path = public_path('sql/ph_provinces.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
}
