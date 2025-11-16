<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        if (config('app.is_demo')) {
            $this->createDemoLocations();
        } else {
            $this->createMainVersionLocations();
        }
    }

    private function createDemoLocations()
    {
        // Create USA
        $usa = Country::create([
            'name' => 'United States',
            'code' => 'US',
            'status' => true
        ]);

        $california = State::create([
            'country_id' => $usa->id,
            'name' => 'California',
            'code' => 'CA',
            'status' => true
        ]);

        $texas = State::create([
            'country_id' => $usa->id,
            'name' => 'Texas',
            'code' => 'TX',
            'status' => true
        ]);

        City::create(['state_id' => $california->id, 'name' => 'Los Angeles', 'status' => true]);
        City::create(['state_id' => $california->id, 'name' => 'San Francisco', 'status' => true]);
        City::create(['state_id' => $california->id, 'name' => 'San Diego', 'status' => true]);
        City::create(['state_id' => $california->id, 'name' => 'Sacramento', 'status' => true]);
        City::create(['state_id' => $texas->id, 'name' => 'Houston', 'status' => true]);
        City::create(['state_id' => $texas->id, 'name' => 'Dallas', 'status' => true]);
        City::create(['state_id' => $texas->id, 'name' => 'Austin', 'status' => true]);
        City::create(['state_id' => $texas->id, 'name' => 'San Antonio', 'status' => true]);

        // Create India
        $india = Country::create([
            'name' => 'India',
            'code' => 'IN',
            'status' => true
        ]);

        $maharashtra = State::create([
            'country_id' => $india->id,
            'name' => 'Maharashtra',
            'code' => 'MH',
            'status' => true
        ]);

        $gujarat = State::create([
            'country_id' => $india->id,
            'name' => 'Gujarat',
            'code' => 'GJ',
            'status' => true
        ]);

        City::create(['state_id' => $maharashtra->id, 'name' => 'Mumbai', 'status' => true]);
        City::create(['state_id' => $maharashtra->id, 'name' => 'Pune', 'status' => true]);
        City::create(['state_id' => $maharashtra->id, 'name' => 'Nagpur', 'status' => true]);
        City::create(['state_id' => $maharashtra->id, 'name' => 'Nashik', 'status' => true]);
        City::create(['state_id' => $gujarat->id, 'name' => 'Ahmedabad', 'status' => true]);
        City::create(['state_id' => $gujarat->id, 'name' => 'Surat', 'status' => true]);
        City::create(['state_id' => $gujarat->id, 'name' => 'Vadodara', 'status' => true]);
        City::create(['state_id' => $gujarat->id, 'name' => 'Rajkot', 'status' => true]);

        // Create United Kingdom
        $uk = Country::create([
            'name' => 'United Kingdom',
            'code' => 'GB',
            'status' => true
        ]);

        $england = State::create([
            'country_id' => $uk->id,
            'name' => 'England',
            'code' => 'ENG',
            'status' => true
        ]);

        $scotland = State::create([
            'country_id' => $uk->id,
            'name' => 'Scotland',
            'code' => 'SCT',
            'status' => true
        ]);

        City::create(['state_id' => $england->id, 'name' => 'London', 'status' => true]);
        City::create(['state_id' => $england->id, 'name' => 'Manchester', 'status' => true]);
        City::create(['state_id' => $england->id, 'name' => 'Birmingham', 'status' => true]);
        City::create(['state_id' => $england->id, 'name' => 'Liverpool', 'status' => true]);
        City::create(['state_id' => $scotland->id, 'name' => 'Edinburgh', 'status' => true]);
        City::create(['state_id' => $scotland->id, 'name' => 'Glasgow', 'status' => true]);
        City::create(['state_id' => $scotland->id, 'name' => 'Aberdeen', 'status' => true]);
        City::create(['state_id' => $scotland->id, 'name' => 'Dundee', 'status' => true]);

        // Create Canada
        $canada = Country::create(['name' => 'Canada', 'code' => 'CA', 'status' => true]);
        $ontario = State::create(['country_id' => $canada->id, 'name' => 'Ontario', 'code' => 'ON', 'status' => true]);
        $quebec = State::create(['country_id' => $canada->id, 'name' => 'Quebec', 'code' => 'QC', 'status' => true]);
        City::create(['state_id' => $ontario->id, 'name' => 'Toronto', 'status' => true]);
        City::create(['state_id' => $ontario->id, 'name' => 'Ottawa', 'status' => true]);
        City::create(['state_id' => $ontario->id, 'name' => 'Hamilton', 'status' => true]);
        City::create(['state_id' => $ontario->id, 'name' => 'London', 'status' => true]);
        City::create(['state_id' => $quebec->id, 'name' => 'Montreal', 'status' => true]);
        City::create(['state_id' => $quebec->id, 'name' => 'Quebec City', 'status' => true]);
        City::create(['state_id' => $quebec->id, 'name' => 'Laval', 'status' => true]);
        City::create(['state_id' => $quebec->id, 'name' => 'Gatineau', 'status' => true]);

        // Create Australia
        $australia = Country::create(['name' => 'Australia', 'code' => 'AU', 'status' => true]);
        $nsw = State::create(['country_id' => $australia->id, 'name' => 'New South Wales', 'code' => 'NSW', 'status' => true]);
        $victoria = State::create(['country_id' => $australia->id, 'name' => 'Victoria', 'code' => 'VIC', 'status' => true]);
        City::create(['state_id' => $nsw->id, 'name' => 'Sydney', 'status' => true]);
        City::create(['state_id' => $nsw->id, 'name' => 'Newcastle', 'status' => true]);
        City::create(['state_id' => $nsw->id, 'name' => 'Wollongong', 'status' => true]);
        City::create(['state_id' => $nsw->id, 'name' => 'Central Coast', 'status' => true]);
        City::create(['state_id' => $victoria->id, 'name' => 'Melbourne', 'status' => true]);
        City::create(['state_id' => $victoria->id, 'name' => 'Geelong', 'status' => true]);
        City::create(['state_id' => $victoria->id, 'name' => 'Ballarat', 'status' => true]);
        City::create(['state_id' => $victoria->id, 'name' => 'Bendigo', 'status' => true]);

        // Create Germany
        $germany = Country::create(['name' => 'Germany', 'code' => 'DE', 'status' => true]);
        $bavaria = State::create(['country_id' => $germany->id, 'name' => 'Bavaria', 'code' => 'BY', 'status' => true]);
        $nrw = State::create(['country_id' => $germany->id, 'name' => 'North Rhine-Westphalia', 'code' => 'NW', 'status' => true]);
        City::create(['state_id' => $bavaria->id, 'name' => 'Munich', 'status' => true]);
        City::create(['state_id' => $bavaria->id, 'name' => 'Nuremberg', 'status' => true]);
        City::create(['state_id' => $bavaria->id, 'name' => 'Augsburg', 'status' => true]);
        City::create(['state_id' => $bavaria->id, 'name' => 'Regensburg', 'status' => true]);
        City::create(['state_id' => $nrw->id, 'name' => 'Cologne', 'status' => true]);
        City::create(['state_id' => $nrw->id, 'name' => 'Düsseldorf', 'status' => true]);
        City::create(['state_id' => $nrw->id, 'name' => 'Dortmund', 'status' => true]);
        City::create(['state_id' => $nrw->id, 'name' => 'Essen', 'status' => true]);

        // Create France
        $france = Country::create(['name' => 'France', 'code' => 'FR', 'status' => true]);
        $iledefrance = State::create(['country_id' => $france->id, 'name' => 'Île-de-France', 'code' => 'IDF', 'status' => true]);
        $provence = State::create(['country_id' => $france->id, 'name' => 'Provence-Alpes-Côte d\'Azur', 'code' => 'PAC', 'status' => true]);
        City::create(['state_id' => $iledefrance->id, 'name' => 'Paris', 'status' => true]);
        City::create(['state_id' => $iledefrance->id, 'name' => 'Versailles', 'status' => true]);
        City::create(['state_id' => $iledefrance->id, 'name' => 'Boulogne-Billancourt', 'status' => true]);
        City::create(['state_id' => $iledefrance->id, 'name' => 'Saint-Denis', 'status' => true]);
        City::create(['state_id' => $provence->id, 'name' => 'Marseille', 'status' => true]);
        City::create(['state_id' => $provence->id, 'name' => 'Nice', 'status' => true]);
        City::create(['state_id' => $provence->id, 'name' => 'Toulon', 'status' => true]);
        City::create(['state_id' => $provence->id, 'name' => 'Aix-en-Provence', 'status' => true]);

        // Create Japan
        $japan = Country::create(['name' => 'Japan', 'code' => 'JP', 'status' => true]);
        $tokyo = State::create(['country_id' => $japan->id, 'name' => 'Tokyo', 'code' => 'TK', 'status' => true]);
        $osaka = State::create(['country_id' => $japan->id, 'name' => 'Osaka', 'code' => 'OS', 'status' => true]);
        City::create(['state_id' => $tokyo->id, 'name' => 'Shibuya', 'status' => true]);
        City::create(['state_id' => $tokyo->id, 'name' => 'Shinjuku', 'status' => true]);
        City::create(['state_id' => $tokyo->id, 'name' => 'Harajuku', 'status' => true]);
        City::create(['state_id' => $tokyo->id, 'name' => 'Ginza', 'status' => true]);
        City::create(['state_id' => $osaka->id, 'name' => 'Osaka City', 'status' => true]);
        City::create(['state_id' => $osaka->id, 'name' => 'Sakai', 'status' => true]);
        City::create(['state_id' => $osaka->id, 'name' => 'Higashiosaka', 'status' => true]);
        City::create(['state_id' => $osaka->id, 'name' => 'Hirakata', 'status' => true]);

        // Create Brazil
        $brazil = Country::create(['name' => 'Brazil', 'code' => 'BR', 'status' => true]);
        $saopaulo = State::create(['country_id' => $brazil->id, 'name' => 'São Paulo', 'code' => 'SP', 'status' => true]);
        $riodejaneiro = State::create(['country_id' => $brazil->id, 'name' => 'Rio de Janeiro', 'code' => 'RJ', 'status' => true]);
        City::create(['state_id' => $saopaulo->id, 'name' => 'São Paulo', 'status' => true]);
        City::create(['state_id' => $saopaulo->id, 'name' => 'Campinas', 'status' => true]);
        City::create(['state_id' => $saopaulo->id, 'name' => 'Santos', 'status' => true]);
        City::create(['state_id' => $saopaulo->id, 'name' => 'São Bernardo do Campo', 'status' => true]);
        City::create(['state_id' => $riodejaneiro->id, 'name' => 'Rio de Janeiro', 'status' => true]);
        City::create(['state_id' => $riodejaneiro->id, 'name' => 'Niterói', 'status' => true]);
        City::create(['state_id' => $riodejaneiro->id, 'name' => 'Nova Iguaçu', 'status' => true]);
        City::create(['state_id' => $riodejaneiro->id, 'name' => 'Duque de Caxias', 'status' => true]);

        // Create Italy
        $italy = Country::create(['name' => 'Italy', 'code' => 'IT', 'status' => true]);
        $lazio = State::create(['country_id' => $italy->id, 'name' => 'Lazio', 'code' => 'LZ', 'status' => true]);
        $lombardy = State::create(['country_id' => $italy->id, 'name' => 'Lombardy', 'code' => 'LM', 'status' => true]);
        City::create(['state_id' => $lazio->id, 'name' => 'Rome', 'status' => true]);
        City::create(['state_id' => $lazio->id, 'name' => 'Latina', 'status' => true]);
        City::create(['state_id' => $lazio->id, 'name' => 'Frosinone', 'status' => true]);
        City::create(['state_id' => $lazio->id, 'name' => 'Viterbo', 'status' => true]);
        City::create(['state_id' => $lombardy->id, 'name' => 'Milan', 'status' => true]);
        City::create(['state_id' => $lombardy->id, 'name' => 'Brescia', 'status' => true]);
        City::create(['state_id' => $lombardy->id, 'name' => 'Bergamo', 'status' => true]);
        City::create(['state_id' => $lombardy->id, 'name' => 'Monza', 'status' => true]);

        // Create Spain
        $spain = Country::create(['name' => 'Spain', 'code' => 'ES', 'status' => true]);
        $madrid = State::create(['country_id' => $spain->id, 'name' => 'Madrid', 'code' => 'MD', 'status' => true]);
        $catalonia = State::create(['country_id' => $spain->id, 'name' => 'Catalonia', 'code' => 'CT', 'status' => true]);
        City::create(['state_id' => $madrid->id, 'name' => 'Madrid', 'status' => true]);
        City::create(['state_id' => $madrid->id, 'name' => 'Alcalá de Henares', 'status' => true]);
        City::create(['state_id' => $madrid->id, 'name' => 'Móstoles', 'status' => true]);
        City::create(['state_id' => $madrid->id, 'name' => 'Fuenlabrada', 'status' => true]);
        City::create(['state_id' => $catalonia->id, 'name' => 'Barcelona', 'status' => true]);
        City::create(['state_id' => $catalonia->id, 'name' => 'Hospitalet de Llobregat', 'status' => true]);
        City::create(['state_id' => $catalonia->id, 'name' => 'Badalona', 'status' => true]);
        City::create(['state_id' => $catalonia->id, 'name' => 'Terrassa', 'status' => true]);

        // Create Netherlands
        $netherlands = Country::create(['name' => 'Netherlands', 'code' => 'NL', 'status' => true]);
        $noordholland = State::create(['country_id' => $netherlands->id, 'name' => 'North Holland', 'code' => 'NH', 'status' => true]);
        $zuidholland = State::create(['country_id' => $netherlands->id, 'name' => 'South Holland', 'code' => 'ZH', 'status' => true]);
        City::create(['state_id' => $noordholland->id, 'name' => 'Amsterdam', 'status' => true]);
        City::create(['state_id' => $noordholland->id, 'name' => 'Haarlem', 'status' => true]);
        City::create(['state_id' => $noordholland->id, 'name' => 'Zaanstad', 'status' => true]);
        City::create(['state_id' => $noordholland->id, 'name' => 'Haarlemmermeer', 'status' => true]);
        City::create(['state_id' => $zuidholland->id, 'name' => 'The Hague', 'status' => true]);
        City::create(['state_id' => $zuidholland->id, 'name' => 'Rotterdam', 'status' => true]);
        City::create(['state_id' => $zuidholland->id, 'name' => 'Leiden', 'status' => true]);
        City::create(['state_id' => $zuidholland->id, 'name' => 'Dordrecht', 'status' => true]);
    }

    private function createMainVersionLocations()
    {
        // Create only 2 countries for main version
        $usa = Country::create([
            'name' => 'United States',
            'code' => 'US',
            'status' => true
        ]);

        $india = Country::create([
            'name' => 'India',
            'code' => 'IN',
            'status' => true
        ]);

        // Create 4 states (2 per country)
        $california = State::create([
            'country_id' => $usa->id,
            'name' => 'California',
            'code' => 'CA',
            'status' => true
        ]);

        $texas = State::create([
            'country_id' => $usa->id,
            'name' => 'Texas',
            'code' => 'TX',
            'status' => true
        ]);

        $maharashtra = State::create([
            'country_id' => $india->id,
            'name' => 'Maharashtra',
            'code' => 'MH',
            'status' => true
        ]);

        $gujarat = State::create([
            'country_id' => $india->id,
            'name' => 'Gujarat',
            'code' => 'GJ',
            'status' => true
        ]);

        // Create 8 cities (2 per state)
        City::create(['state_id' => $california->id, 'name' => 'Los Angeles', 'status' => true]);
        City::create(['state_id' => $california->id, 'name' => 'San Francisco', 'status' => true]);
        City::create(['state_id' => $texas->id, 'name' => 'Houston', 'status' => true]);
        City::create(['state_id' => $texas->id, 'name' => 'Dallas', 'status' => true]);
        City::create(['state_id' => $maharashtra->id, 'name' => 'Mumbai', 'status' => true]);
        City::create(['state_id' => $maharashtra->id, 'name' => 'Pune', 'status' => true]);
        City::create(['state_id' => $gujarat->id, 'name' => 'Ahmedabad', 'status' => true]);
        City::create(['state_id' => $gujarat->id, 'name' => 'Surat', 'status' => true]);

        $this->command->info('Created 2 countries, 4 states, and 8 cities for main version.');
    }
}