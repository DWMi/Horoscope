<?php

function getHoroscope($date) {

$horoscope = [
        [
            "name"=>"Vattumannen",
            "start"=>["month"=>1, "day"=>20],
            "end"=>["month"=>2, "day"=>18],
        ], 
        [
            "name"=>"Fiskarna",
            "start"=>["month"=>2, "day"=>19],
            "end"=>["month"=>3, "day"=>20],
        ]
        , 
        [
            "name"=>"Väduren",
            "start"=>["month"=>3, "day"=>21],
            "end"=>["month"=>4, "day"=>19],
        ], 
        [
            "name"=>"Oxen",
            "start"=>["month"=>4, "day"=>20],
            "end"=>["month"=>5, "day"=>20],
        ], 
        [
            "name"=>"Tvillingarna",
            "start"=>["month"=>5, "day"=>21],
            "end"=>["month"=>6, "day"=>21],
        ], 
        [
            "name"=>"Kräftan",
            "start"=>["month"=>6, "day"=>22],
            "end"=>["month"=>7, "day"=>22],
        ], 
        [
            "name"=>"Lejonet",
            "start"=>["month"=>7, "day"=>23],
            "end"=>["month"=>8, "day"=>22],
        ], 
        [
            "name"=>"Jungfrun",
            "start"=>["month"=>8, "day"=>23],
            "end"=>["month"=>9, "day"=>22],
        ], 
        [
            "name"=>"Vågen",
            "start"=>["month"=>9, "day"=>23],
            "end"=>["month"=>10, "day"=>22],
        ], 
        [
            "name"=>"Skorpionen",
            "start"=>["month"=>10, "day"=>23],
            "end"=>["month"=>11, "day"=>21],
        ], 
        [
            "name"=>"Skytten",
            "start"=>["month"=>11, "day"=>22],
            "end"=>["month"=>12, "day"=>21],
        ],
        [
            "name"=>"Stenbocken",
            "start"=>["month"=>12, "day"=>22],
            "end"=>["month"=>1, "day"=>19],
        ]

    ];
 
    // ex. 2021-12-04
    $inputMonth = (int)substr($date,5,2);
    $inputDay = (int)substr($date,8,2);




        // key = js index
    foreach ($horoscope as $key => $value) {

        $startMonth = $value["start"]["month"];
        $startDay = $value["start"]["day"];
        $endMonth = $value["end"]["month"];
        $endDay = $value["end"]["day"];
        
        error_log('------------------------------');
        error_log($startMonth. ' START MM');
        error_log($startDay. ' START DD');
        error_log('&&&&&&');
        error_log($endMonth. ' END MM');
        error_log($endDay. ' END DD');
        error_log('-------');


        

        
          if ($inputMonth === $startMonth && $inputDay >= $startDay || $inputMonth <= $endMonth && $inputDay <= $endDay) {
            return $value['name'];
          }
        
    }
};
?>