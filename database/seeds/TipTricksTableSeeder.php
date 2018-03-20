<?php

use App\Model\TipTrick;
use Illuminate\Database\Seeder;

class TipTricksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tip_tricks')->truncate();

        $data = [
            [
                'city_id' => 515,
            	'title' => 'Jakarta at a Glance',
            	'description' => 'Jakarta is located in tropical country, Indonesia, and become the capital city of Indonesia. Jakarta is located on the northwest coast of Java Island. Formerly once known by several names among them Sunda Kelapa, Jayakarta, and Batavia. In the international world Jakarta also has the nickname J-Town, or more popularly The Big Durian because it is considered comparable city of New York City (Big Apple) in Indonesia. Jakarta has an area of about 661.52 km² (oceans: 6,977.5 km²), with a population of 10,187,595 (2011). The metropolitan area of Jakarta (Jabodetabek) with a population of about 28 million people, is the largest metropolitan in Southeast Asia or second in the world. As a business center, politics and culture, Jakarta is home to the headquarters of state-owned enterprises, private companies and foreign companies. Jakarta are served by two airports, namely Soekarno-Hatta Airport and Halim Perdanakusuma Airport, and three seaports in Tanjung Priok, Sunda Kelapa and Ancol. . If you travel to Jakarta between September until April you should bring an umbrella because it is Rainy or Wet Season. If traveling to Jakarta wear something comfortable that absorb sweat, because the weather are mostly hot. ',
                'status' => 'active'
            ],
            [
                'city_id' => 515,
            	'title' => 'Getting Around Jakarta',
            	'description' => 'If you come by flight, you will either stop in Soekarno - Hatta Airport or Halim Perdana Kusuma Airport. To go to the city we suggest you to go with BlueBird Taxi because it’s the most commonly use in Jakarta, for going to the city centre you should prepare about Rp100.000 - Rp200.000 depends on how far you go, if you want to use a higher class of Taxi you can choose Silver Bird, it is the same BlueBird group but facilitate taxies with luxurious cars. ',
                'status' => 'active'
            ],
            [
                'city_id' => 515,
            	'title' => 'Getting Around Jakarta',
            	'description' => 'One of the easiest way to go around Jakarta is by Taxi, it is better to use BlueBird so you can order your Taxi by phone (021)-7917 1234, but it will cost alot. You can also use Jakarta’s public transportation Bus Transjakarta which only cost Rp5.000 per ride. In addition you can use other alternatives such as uber, grab, or go-jek, which provide online taxi services but offer the cheaper prices. You can also use train, but not all areas in Jakarta can be visited by train. ',
                'status' => 'active'
            ],
            [
                'city_id' => 515,
            	'title' => 'Jakarta Cuisine',
            	'description' => 'Indonesia is a country that’s made up of over 17,000 islands. Not all of them are inhabited, but there are still many that are, and so the diversity of people, culture, and different foods is astounding. One of the best things about eating in Jakarta is that, being the largest and most influential capital city of Indonesia, people come from all different islands, and so you’ll be able to discover food from all over Indonesia somewhere in Jakarta. You can find foods to fit any budget and prepared in every style. However if you want to taste local food and genuine Indonesia and Jakarta cuisine then there are plenty of opportunities. Some popular Indonesian dishes such as nasi goreng, rendang, gado-gado, Satay, and soto are ubiquitous in the country and considered as national dishes. You also can find some Indonesian street food around the city especially at night.',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta at a Glance',
            	'description' => 'The Special Region of Yogyakarta, which is located in the central part of Java Island, Indonesia, is a city with outstanding historical and cultural heritage.  Yogyakarta was the centre of the Mataram Dynasty (16th-17th century), and until now The Kraton (the sultan’s palace) exists in its real functions. It is the only province in Indonesia that is still formally governed by a precolonial Sultanate: the Sultanate of Ngayogyakarta Hadiningrat.',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta at a Glance',
            	'description' => 'Buy your transportation ticket (plane, train, bus)  a few months before your departure, so the price will be cheaper.',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta at a Glance',
            	'description' => 'If you travel to Yogyakarta between September until April you should bring an umbrella because it is Rainy or Wet Season. Getting around Yogyakarta',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta at a Glance',
            	'description' => 'You can go on foot when you travel to Yogyakarta. There are a lot of types of public transportation in Yogyakarta. The first one is Becak,',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta at a Glance',
            	'description' => 'Some travel agencies rent out cars with driver for trips in the Yogya region for 500,000Rp to 600,000Rp per day including petrol. Few drivers speak English, but it can still be an excellent way to explore the area. One reliable company is Jogja Trans. Motorbikes cost around 50,000Rp to 90,000Rp per day.',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta at a Glance',
            	'description' => 'Online ride-hailing apps Go-Jek (www.go-jek.com), Grab (www.grab.com) and Uber (www.uber.com) are the cheapest, quickest and safest way to get around town. Otherwise metered taxis are also cheap, costing 10,000Rp to 30,000Rp for short trips. If you call any of the cab companies for a ride around town, the minimum fee is 25,000Rp. Citra Taxi is considered the most reliable. ',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta at a Glance',
            	'description' => 'Yogyakarta Adisucipto International Airport Situated 10km east of the centre, the airport is very well connected to the city by public transport. Bus 1A (3500Rp) runs there from Jl Malioboro. Pramek trains stop at Maguwo station, which is right by the airport as well. Rates for taxis from the airport to the city centre are fixed at 70,000Rp.',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta at a Glance',
            	'description' => 'Giwangan bus terminal Located 5km southeast of downtown Yogyakarta; take bus 3B, which also runs to Yogyakarta train station and Jl Malioboro.',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta at a Glance',
            	'description' => 'Yogyakarta Train Station Centrally located and a short walk to Jl Malioboro or a 25,000Rp to 40,000Rp taxi ride to other parts of town.',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta at a Glance',
            	'description' => 'Bikes cost about 30,000Rp a day from hotels. Always lock your bike.',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta at a Glance',
            	'description' => 'Yogya reliable bus system, Trans Jogja consists of modern air-conditioned buses running from 5.30am to 9pm on 11 routes around the city to as far away as Prambanan. Tickets cost 3500Rp per journey. Trans Jogja buses only stop at the designated bus shelters. Bus 1A is a very useful service, running from Jl Malioboro past the airport to Prambanan. Trans Jogja route maps can be accessed at the tourist office.',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta at a Glance',
            	'description' => 'Yogyakarta has an oversupply of becak (bicycle rickshaws); most drivers are quite pushy, but it can be a fun way to get around. Watch out for drivers who offer cheap hourly rates, unless you want to do the rounds of all the batik galleries that offer commission. A short trip is about 15,000Rp. To go from Jl Prawirotaman to Jl Malioboro costs around 25,000Rp.',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta Cuisine',
            	'description' => 'Stretching on imaginary poles connecting Yogyakarta Sultan Palace, Tugu and the Peak of Merapi Mountain, this street forms trading locality after Sri Sultan Hamengku Buwono I developed means of trading through traditional market since 1758. After more than 250 years, the place still persists as a trading area; it even becomes the icon of Yogyakarta, known as Malioboro. Malioboro that in Sanskrit means bouquet serves as a basis for naming this street. Located around 800 meters from Yogyakarta Sultan Palace, the street is the centre of Yogyakarta’s largest tourist district; many hotels and restaurants are located nearby. Sidewalks on both sides of the street are crowded with small stalls selling a variety of goods. In the evening several open-air streetside restaurants, called lesehan, operate along the street',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta Cuisine',
            	'description' => 'Gudeg is a traditional food from Central Java and Yogyakarta, Indonesia which is made from young Nangka (jack fruit) boiled for several hours with palm sugar, and coconut milk. Additional spices include garlic, shallot, candlenut, coriander seed, galangal, bay leaves, and teak leaves, the latter giving a brown color to the dish. It is also called Green Jack Fruit Sweet Stew. Gudeg is served with white rice, chicken, hard-boiled egg, tofu and/or tempeh, and a stew made of crispy beef skins (sambal goreng krecek). There are three types of gudeg; dry, wet and East-Javanese style. Dry gudeg has only a bit of coconut milk and thus has little sauce. Wet gudeg includes more coconut milk. The East-Javanese style gudeg employs a spicier and hotter taste, compared to the Yogyakarta style gudeg, which is sweeter.',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Yogyakarta Cuisine',
            	'description' => 'Bakpia are small round-shaped Indonesian pastries, usually stuffed with mung beans, but have recently come in other fillings as well (e.g. chocolate, durian, and even cheese). They are one of Yogyakarta’s specialties named after a “suburb” in this city (Pathok) where these sweet pastries were originated. These pastries are similar to bigger Indonesian round pastries (or “pia”) – the only difference being the size. They are commercially packaged in small boxes and sold at many food shops in Yogyakarta.',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Dangers and Annoyances',
            	'description' => 'Hassles from smooth-talking batik salesmen are a constant issue for every traveller in town. The tourist board gets hosts of complaints about these sharks, who may strike up conversations pretending to be guides. Inevitably you’ll end up at a gallery where you’ll get the hard sell and they’ll rake in a big commission if you buy. A time-honoured scam is to pressure you to visit a ‘fine-art student exhibition’ or a ‘government store’ – there are no official shops or galleries in the city.',
                'status' => 'active'
            ],
            [
                'city_id' => 227,
            	'title' => 'Dangers and Annoyances',
            	'description' => 'Some of these dodgy batik salesmen hang around the kraton, where they tell you that the kraton is closed or there are no performances, but they might offer to show you to the ‘sultan’s batik workshop’ (which is actually just a very expensive commission-paying showroom).',
                'status' => 'active'
            ]
        ];

        TipTrick::insert($data);
    }
}
