<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemaSeeder extends Seeder
{

    protected $cinemas
        = [
            [
                'name'         => 'Cineplexx Big Beograd',
                'address'      => 'Višnjička 84',
                'city'         => 'Beograd',
                'phone'        => '+381 11 40 40 780',
                'crawler'      => 'CinaplexxCrawler::class',
                'page_url'     => 'http://www.cineplexx.rs/filmovi/u-bioskopu',
                'crawler_link' => 'http://www.cineplexx.rs/service/program.php?type=program&centerId=616&date=*&sorting=alpha&undefined=Svi&view=detail&page=1'
            ],
            [
                'name'         => 'Cineplexx Delta City',
                'address'      => 'Jurija Gagarina 16/16A',
                'city'         => 'Beograd',
                'phone'        => '+381 11 2203 400',
                'crawler'      => 'CinaplexxCrawler::class',
                'page_url'     => 'http://www.cineplexx.rs/filmovi/u-bioskopu',
                'crawler_link' => 'http://www.cineplexx.rs/service/program.php?type=program&centerId=611&date=*&sorting=alpha&undefined=Svi&view=detail&page=1'
            ],
            [
                'name'         => 'Cineplexx Kragujevac Plaza',
                'address'      => 'Bulevar kraljice Marije 56',
                'city'         => 'Kragujevac',
                'phone'        => '+381 34 619 50 30',
                'crawler'      => 'CinaplexxCrawler::class',
                'page_url'     => 'http://www.cineplexx.rs/filmovi/u-bioskopu',
                'crawler_link' => 'http://www.cineplexx.rs/service/program.php?type=program&centerId=612&date=*&sorting=alpha&undefined=Svi&view=detail&page=1'
            ],
            [
                'name'         => 'Cineplexx Niš',
                'address'      => 'Bulevar Medijana 21',
                'city'         => 'Niš',
                'phone'        => '+381 18 300 340',
                'crawler'      => 'CinaplexxCrawler::class',
                'page_url'     => 'http://www.cineplexx.rs/filmovi/u-bioskopu',
                'crawler_link' => 'http://www.cineplexx.rs/service/program.php?type=program&centerId=615&date=*&sorting=alpha&undefined=Svi&view=detail&page=1'
            ],
            [
                'name'         => 'Cineplexx Ušće Shopping Centar',
                'address'      => 'Bulevar Mihajla Pupina 4',
                'city'         => 'Beograd',
                'phone'        => '+381 11 311 33 70',
                'crawler'      => 'CinaplexxCrawler::class',
                'page_url'     => 'http://www.cineplexx.rs/filmovi/u-bioskopu',
                'crawler_link' => 'http://www.cineplexx.rs/service/program.php?type=program&centerId=614&date=*&sorting=alpha&undefined=Svi&view=detail&page=1'
            ]
        ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<count($this->cinemas); $i++)
        {
             $this->cinemas[$i]['created_at'] = Carbon::now()->toDateTimeString();
             $this->cinemas[$i]['updated_at'] = Carbon::now()->toDateTimeString();
        }

        DB::table('cinemas')->insert($this->cinemas);
    }
}