<?php

use Illuminate\Database\Seeder;

class RegionCountryUpdater extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dataRegions=['Africa','Asia  and Pacific','Europe','Middle East','North America','Latin America','Non-specified/Other'];
        foreach($dataRegions as $region){
            \DB::table('regions')->insert(['name'=>$region]);
        }

        $countries=[
            'Algeria'=>1,
            'Angola'=>1,
            'Benin'=>1,
            'Botswana'=>1,
            'Cameroon'=>1,
            'Central African Republic'=>1,
            'Congo, The Democratic Republic Of The Congo '=>1,
            'Cote d\'Ivoire'=>1,
            'Eygpt'=>1,
            'Equatorial Guinea '=>1,
            'Gabon'=>1,
            'Ghana'=>1,
            'Lybia'=>1,
            'Morocco'=>1,
            'Namibia'=>1,
            'Nigeria'=>1,
            'Other Africa'=>1,
            'Sao Tome and Principe'=>1,
            'Senegal'=>1,
            'South Africa'=>1,
            'Togo'=>1,
            'Tunisia'=>1,
            'Asutralia'=>2,
            'China, People\'s Republic'=>2,
            'Chinese Taipei'=>2,
            'Hong Kong (china)'=>2,
            'India'=>2,
            'Indonesia'=>2,
            'Japan'=>2,
            'Korea, Republic of'=>2,
            'Korea, Democratic People\'s Republic of'=>2,
            'Malayisa'=>2,
            'New Zealand'=>2,
            'Other Asia and Pacific'=>2,
            'Pakistan'=>2,
            'Philippines'=>2,
            'Singapore'=>2,
            'Thailand'=>2,
            'Vietnam'=>2,
            'Albania'=>3,
            'Austria'=>3,
            'Belgium'=>3,
            'Bosnia and Herzegovina'=>3,
            'Bulgaria'=>3,
            'Croatia'=>3,
            'Cyprus'=>3,
            'Denmark'=>3,
            'Finland'=>3,
            'France'=>3,
            'Germany'=>3,
            'Greece'=>3,
            'Hungary'=>3,
            'Iceland'=>3,
            'Ireland'=>3,
            'Italy'=>3,
            'Luxembourg'=>3,
            'Macedonia, Former Yugoslav Republic'=>3,
            'Malta'=>3,
            'Montenegro'=>3,
            'Netherlands'=>3,
            'Norway'=>3,
            'other Europe'=>3,
            'Poland'=>3,
            'Portugal'=>3,
            'Romania'=>3,
            'Serbia'=>3,
            'Slovak Republic'=>3,
            'Slovenia'=>3,
            'Spain'=>3,
            'Sweden'=>3,
            'Switzerland'=>3,
            'Turkey'=>3,
            'United Kingdom'=>3,
            ''=>3,
            'Armenia'=>3,
            'Azerbaijan'=>3,
            'Belarus'=>3,
            'Estonia'=>3,
            'Gerogia'=>3,
            'Kazakhstan'=>3,
            'Kyrgyzstan'=>3,
            'Latvia'=>3,
            'Lithuania'=>3,
            'Moldova, Republic'=>3,
            'Other Former Soviet Union'=>3,
            'Tajikistan'=>3,
            'Turkmenistan'=>3,
            'Ukraine'=>3,
            'Uzbekistan'=>3,
            'IR Iran'=>4,
            'Iraq'=>4,
            'Jordan'=>4,
            'Kuwait'=>4,
            'Lebanon'=>4,
            'Oman'=>4,
            'Other Middle East'=>4,
            'Qatar'=>4,
            'Saudi Arabia'=>4,
            'Syrian Arad Republic'=>4,
            'United Arab Emirates'=>4,


            'Canada'=>5,
            'Other North America'=>5,
            'United States'=>5,


            'Antigua and Barbuda'=>6,
            'Argentina'=>6,
            'Aruba'=>6,
            'Bahamas'=>6,
            'Brazil'=>6,
            'Chile'=>6,
            'Colombia'=>6,
            'Cuba'=>6,
            'Curacao'=>6,
            'Dominica'=>6,
            'Dominica Republic'=>6,
            'Ecuador'=>6,
            'Honduras'=>6,
            'Jamaica'=>6,
            'Mexico'=>6,
            'Nicaragua'=>6,
            'Other Non-OECD Americas'=>6,
            'Panama'=>6,
            'Peru'=>6,
            'Puerto Rico'=>6,
            'Saint Kitts and Nevis'=>6,
            'Uruguay'=>6,
            'Venezuela (Bolivarian Republic of)'=>6,
            'Non-specified/Other'=>7
        ];

        foreach($countries as $region=>$region_id){
//            dd($region_id);
            \DB::table('country')->where('country_name',$region)->update(['country_name'=>$region,'region_id'=>$region_id]);
        }
    }
}
