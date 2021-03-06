<?php

function getHoroscope($date) {

$horoscope = [
        [
            "name"=>"Vattumannen âðº",
            "start"=>["month"=>1, "day"=>20],
            "end"=>["month"=>2, "day"=>18],
        ], 
        [
            "name"=>"Fiskarna âð",
            "start"=>["month"=>2, "day"=>19],
            "end"=>["month"=>3, "day"=>20],
        ]
        , 
        [
            "name"=>"VÃ¤duren âð",
            "start"=>["month"=>3, "day"=>21],
            "end"=>["month"=>4, "day"=>19],
        ], 
        [
            "name"=>"Oxen âð",
            "start"=>["month"=>4, "day"=>20],
            "end"=>["month"=>5, "day"=>20],
        ], 
        [
            "name"=>"Tvillingarna âð¥",
            "start"=>["month"=>5, "day"=>21],
            "end"=>["month"=>6, "day"=>21],
        ], 
        [
            "name"=>"KrÃ¤ftan âð¦",
            "start"=>["month"=>6, "day"=>22],
            "end"=>["month"=>7, "day"=>22],
        ], 
        [
            "name"=>"Lejonet âð¦",
            "start"=>["month"=>7, "day"=>23],
            "end"=>["month"=>8, "day"=>22],
        ], 
        [
            "name"=>"Jungfrun âð§",
            "start"=>["month"=>8, "day"=>23],
            "end"=>["month"=>9, "day"=>22],
        ], 
        [
            "name"=>"VÃ¥gen ââï¸",
            "start"=>["month"=>9, "day"=>23],
            "end"=>["month"=>10, "day"=>22],
        ], 
        [
            "name"=>"Skorpionen âð¦",
            "start"=>["month"=>10, "day"=>23],
            "end"=>["month"=>11, "day"=>21],
        ], 
        [
            "name"=>"Skytten âð¹",
            "start"=>["month"=>11, "day"=>22],
            "end"=>["month"=>12, "day"=>21],
        ],
        [
            "name"=>"Stenbocken âð",
            "start"=>["month"=>12, "day"=>22],
            "end"=>["month"=>1, "day"=>19],
        ]

    ];
 
    //  Tar en del av strÃ¤ngen och omvandlar till integer
    $inputMonth = (int)substr($date,5,2);
    $inputDay = (int)substr($date,8,2);




    //  LOOPAR genom arrayen
    foreach ($horoscope as $key => $value) {

        $startMonth = $value["start"]["month"];
        $startDay = $value["start"]["day"];
        $endMonth = $value["end"]["month"];
        $endDay = $value["end"]["day"];        

        
          if ($inputMonth === $startMonth && $inputDay >= $startDay || $inputMonth === $endMonth && $inputDay <= $endDay) {
            return $value['name'];
          }
        
    }
};
?>
