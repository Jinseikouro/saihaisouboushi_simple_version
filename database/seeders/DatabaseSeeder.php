<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Groupe;
use App\Models\User;
use App\Models\Shipment;
use App\Models\Driver;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $numberOfRoop = 5;
        $i=0;
        while($i<$numberOfRoop){
            $groupe = Groupe::factory()->create();

            $numberOfUsers = fake()->NumberBetween(1,5);
            User::factory($numberOfUsers)->create(['groupe_id' => $groupe->id]);

            
            $driver = Driver::factory()->create();
            $numberOfShipments = fake()->NumberBetween(1,3);
            Shipment::factory($numberOfShipments)->create([
                'driver_id' => $driver->id,
                'groupe_id' => $groupe->id
            ]);

            // 全ユーザーの'absence'が0だった場合0を代入する
            $usersInGroup = User::where('groupe_id', $groupe->id)->get();
            $absenceValues = $usersInGroup->pluck('absence')->unique();
            $groupAbsence = $absenceValues->count() === 1 && $absenceValues->first() === 0 ? 0 : 1;
            // ユーザーの状態に元づいて1か0を代入する
            $groupe->update(['absence' => $groupAbsence]);

            $i++;
        }

            

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
