<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            ['Aşgabat', 'Ashgabat', [
                ['Arzuw', null, 15, 40],
                ['Atatürk köç', 'Ataturk street', 15, 40],
                ['Arçabil şaýoly', 'Archabil shayoly', 15, 40],
                ['Bagyr', null, 15, 40],
                ['Berzeňňi', 'Berzenni', 15, 40],
                ['Bekrewe', null, 15, 40],
                ['Bedew', null, 15, 40],
                ['Bitarap türkmenistan şaýoly (Podwoýski köçe)', 'Bitarap turkmenistan shayoly (Podwoyski street)', 15, 40],
                ['Büzmeýin', 'Buzmeyin', 15, 40],
                ['Büzmeýin GRES', 'Buzmeyin GRES', 15, 40],
                ['Çandybil şaýoly', 'Chandybil shayoly', 15, 40],
                ['1 mkr', null, 15, 40],
                ['2 mkr', null, 15, 40],
                ['3 mkr', null, 15, 40],
                ['4 mkr', null, 15, 40],
                ['5 mkr', null, 15, 40],
                ['6 mkr', null, 15, 40],
                ['7 mkr', null, 15, 40],
                ['8 mkr', null, 15, 40],
                ['9 mkr', null, 15, 40],
                ['10 mkr', null, 15, 40],
                ['11 mkr', null, 15, 40],
                ['30 mkr', null, 15, 40],
                ['Howdan "A"', null, 15, 40],
                ['Howdan "B"', null, 15, 40],
                ['Howdan "W"', null, 15, 40],
                ['Türkmenbaşy şaýoly', 'Turkmenbashy shayoly', 15, 40],
                ['Aýtakow (Oguzhan köç)', 'Aytakow (Oguzhan street)', 15, 40],
                ['14-nji tapgyr (Sowhozny köç)', '14-th stage (Sowhozny street)', 15, 40],
                ['15-nji tapgyr', '15-th stage', 15, 40],
                ['Moskowskiý köç. (10 ýyl Abadançylyk şaýoly)', 'Moskowsky street. (10 years of Abadanchylyk shayoly)', 15, 40],
                ['Nebitgaz (Andalib-Ankara köç.)', 'Nebitgaz (Andalib-Ankara street)', 15, 40],
                ['Olimpiýa şäherçesi', 'Olympic town', 15, 40],
                ['Sowetskiý köç. (Garaşsyzlyk şaýoly)', 'Sovetsky street (Garashsyzlyk shayoly)', 15, 40],
                ['Garadamak', null, 15, 40],
                ['Garadamak Şor', 'Garadamak Shor', 15, 40],
                ['Gökje', 'Gokje', 15, 40],
                ['G.Kuliýew köç. (Obýezdnoý)', 'G.Kuliyew street (Obyezdnoy)', 15, 40],
                ['Gurtly', 'Gurtly', 15, 40],
                ['Dosaaf', 'Dosaaf', 15, 40],
                ['Kim raýon', 'Kim rayon', 15, 40],
                ['Köpetdag şaýoly', 'Kopetdag shayoly', 15, 40],
                ['Köşi', 'Koshi', 15, 40],
                ['Parahat 1', 'Parahat 1', 15, 40],
                ['Parahat 2', 'Parahat 2', 15, 40],
                ['Parahat 3', 'Parahat 3', 15, 40],
                ['Parahat 4', 'Parahat 4', 15, 40],
                ['Parahat 5', 'Parahat 5', 15, 40],
                ['Parahat 6', 'Parahat 6', 15, 40],
                ['Parahat 7', 'Parahat 7', 15, 40],
                ['Parahat 8', 'Parahat 8', 15, 40],
                ['Gagarin köç, köne Howa menzili', 'Gagarin street, Old airport', 15, 40],
                ['Gypjak', 'Gypjak', 15, 40],
                ['Ruhabat (90-njy razýezd)', 'Ruhabat (90-th resolution)', 15, 40],
                ['Täze zaman', 'Taze zaman', 15, 40],
                ['Çoganly', 'Choganly', 15, 40],
                ['Hitrowka', 'Hitrowka', 15, 40],
                ['Herrikgala', 'Herrikgala', 15, 40],
                ['Şor daça', 'Shor dacha', 15, 40],
                ['Ýalkym', 'Yalkym', 15, 40],
                ['Ýanbaş', 'Yanbash', 15, 40],
            ]],
            ['Ahal', 'Akhal', [
                ['Ak bugdaý etraby', 'Ak bugday district', 30, 60],
                ['Ýaşlyk', 'Yashlyk', 30, 60],
                ['Bäherden', 'Baherden', 30, 60],
                ['Babadaýhan', 'Babadayhan', 30, 60],
                ['Gökdepe', 'Gokdepe', 30, 60],
                ['Kaka', 'Kaka', 30, 60],
                ['Änew', 'Anew', 30, 60],
                ['Tejen', 'Tejen', 30, 60],
                ['Sarahs', 'Sarahs', 30, 60],
            ]],
            ['Balkan', 'Balkan', [
                ['Magtymguly', 'Magtymguly', 40, 75],
                ['Bereket', 'Bereket', 40, 75],
                ['Etrek', 'Etrek', 40, 75],
                ['Esenguly', 'Esenguly', 40, 75],
                ['Gumdag', 'Gumdag', 40, 75],
                ['Balkanabat', 'Balkanabat', 40, 75],
                ['Garabogaz', 'Garabogaz', 40, 75],
                ['Hazar', 'Hazar', 40, 75],
                ['Serdar', 'Serdar', 40, 75],
                ['Türkmenbaşy', 'Turkmenbashy', 40, 75],
                ['Jebel', 'Jebel', 40, 75],
            ]],
            ['Mary', 'Mary', [
                ['Ýolöten', 'Yoloten', 30, 60],
                ['Murgap', 'Murgap', 30, 60],
                ['Mary', 'Mary', 30, 60],
                ['Sakarçäge', 'Sakarchage', 30, 60],
                ['Serhetabat (Guşgy)', 'Serhetabat (Gushgy)', 30, 60],
                ['Tagtabazar', 'Tagtabazar', 30, 60],
                ['Türkmengala', 'Turkmengala', 30, 60],
                ['Oguz han', 'Oguz han', 30, 60],
                ['Şatlyk', 'Shatlyk', 30, 60],
                ['Baýramaly', 'Bayramaly', 30, 60],
                ['Wekilbazar', 'Wekilbazar', 30, 60],
                ['Garagum etraby', 'Garagum district', 30, 60],
            ]],
            ['Lebap', 'Lebap', [
                ['Darganata', 'Darganata', 50, 90],
                ['Farap', 'Farap', 50, 90],
                ['Gazojak', 'Gazojak', 50, 90],
                ['Dänew', 'Danew', 50, 90],
                ['Türkmenabat', 'Turkmenabat', 50, 90],
                ['Garabekewül', 'Garabekewul', 50, 90],
                ['Dostluk', 'Dostluk', 50, 90],
                ['Hojombaz', 'Hojombaz', 50, 90],
                ['Köýtendag', 'Koytendag', 50, 90],
                ['Magdanly', 'Magdanly', 50, 90],
                ['Kerki', 'Kerki', 50, 90],
                ['Sakar', 'Sakar', 50, 90],
                ['Saýat', 'Sayat', 50, 90],
                ['Seýdi', 'Seydi', 50, 90],
                ['Çärjew', 'Charjew', 50, 90],
                ['Halaç', 'Halach', 50, 90],
            ]],
            ['Daşoguz', 'Dashoguz', [
                ['Akdepe', 'Akdepe', 50, 90],
                ['Gurbansoltan Eje', 'Gurbansoltan Eje', 50, 90],
                ['Boldumsaz', 'Boldumsaz', 50, 90],
                ['Daşoguz', 'Dashoguz', 50, 90],
                ['Gubadag', 'Gubadag', 50, 90],
                ['Görogly (Tagta)', 'Gorogly (Tagta)', 50, 90],
                ['Türkmenbaşy etraby ', 'Turkmenbashy district', 50, 90],
                ['Ruhubelent etraby', 'Ruhubelent district', 50, 90],
                ['Köneürgenç', 'Koneurgench', 50, 90],
                ['S.A. Nyýazow etraby', 'S.A. Nyyazow district', 50, 90],
            ]],
        ];

        for ($i = 0; $i < count($objs); $i++) {
            $location = Location::create([
                'name' => $objs[$i][0],
                'name_en' => $objs[$i][1],
                'sort_order' => $i + 1,
            ]);

            for ($j = 0; $j < count($objs[$i][2]); $j++) {
                Location::create([
                    'parent_id' => $location->id,
                    'name' => $objs[$i][2][$j][0],
                    'name_en' => $objs[$i][2][$j][1],
                    'delivery_fee' => $objs[$i][2][$j][2],
                    'express_fee' => $objs[$i][2][$j][3],
                    'sort_order' => $j + 1,
                ]);
            }
        }
    }
}