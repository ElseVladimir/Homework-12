<?php

$search_words = ['php','html','интернет','Web'];

$search_strings =
['Интернет - большая сеть компьютеров, которые могут взаимодействовать друг с другом.',
'PHP - это распространенный язык программирования с открытым исходным кодом.',
'PHP сконструирован специально для ведения Web-разработок и его код может внедряться непосредственно в HTML'
];


function expression($search_words, $search_strings){
    foreach ($search_words as $sw){
        $regularExpression = "/($sw)/iu";
        foreach($search_strings as $ssKey => $s_s){
            if((preg_match_all($regularExpression, $s_s, $matches))){
                echo "В предложении $ssKey есть слова:".$matches[0][0].'<br>';
            }
        }}
}

echo expression($search_words, $search_strings);