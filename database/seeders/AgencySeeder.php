<?php

namespace Database\Seeders;

use App\Models\Agency;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agency = new Agency();
        $agency->name = 'Hoang Nguyen';
        $agency->phone = '098733222';
        $agency->email = 'hoangnguyen@gmail.com';
        $agency->address = 'Cau Giay , Ha Noi';
        $agency->manger_name = 'Le Van Hoang';
        $agency->status = 'Hoat dong';
        $agency->save();

        $agency = new Agency();
        $agency->name = 'Phuc Hoang';
        $agency->phone = '3457954034';
        $agency->email = 'phuchoang@gmail.com';
        $agency->address = 'Thanh Xuan , Ha Noi';
        $agency->manger_name = 'Nguyen Phuc';
        $agency->status = 'Hoat dong';
        $agency->save();

        $agency = new Agency();
        $agency->name = 'Dai Nguyen';
        $agency->phone = '39845739';
        $agency->email = 'dainguyen@gmail.com';
        $agency->address = 'Ha Dong , Ha Noi';
        $agency->manger_name = 'Nuyen Dai';
        $agency->status = 'Hoat dong';
        $agency->save();

        $agency = new Agency();
        $agency->name = 'Bac Giang 1';
        $agency->phone = '934594398';
        $agency->email = 'bacgiang1@gmail.com';
        $agency->address = 'Yen Dung , Bac Giang';
        $agency->manger_name = 'Tong Hoang Truong';
        $agency->status = 'Ngung hoat dong';
        $agency->save();

    }
}
