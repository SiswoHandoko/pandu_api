<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersTableSeeder');
        $this->call('ProvincesTableSeeder');
        $this->call('CitiesTableSeeder');
        $this->call('TourismPlacesTableSeeder');
        $this->call('PicturesTableSeeder');
        $this->call('EventsTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('PlansTableSeeder');
        $this->call('PlanDetailsTableSeeder');
        $this->call('PackagesTableSeeder');
        $this->call('PackageDetailsTableSeeder');
        $this->call('AdvertisementsTableSeeder');
        $this->call('FeedbacksTableSeeder');
    }
}
