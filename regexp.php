<?php

error_reporting(-1);
//------------------------------------------------------------------------------------------------------------------------//
function isNumbersCorrect(){
    echo "Задача на проверку номера телефона:<br>";
    $inputData = array(
        '8-(800)-555 35 35',
        '8-800-55-535-35',
        '88005553535',
        '02',
        '88005553535 проще позвонить чем у кого-то занимать'
    );

    $regexp = '/^8( +|-+|\\(+|-+\\(+| +-+\\(+)?(\\d{3})( |-|\\)|\\)-|\\)- )?((-+| +)?\\d){7}$/';

    for ($i = 0; $i < count($inputData); $i++) {
        if (preg_match($regexp, $inputData[$i])) {
            echo "{$inputData[$i]} - правильный<br>";
        } else {
            echo "{$inputData[$i]} - неправильный<br>";
        }
    }
}

isNumbersCorrect();
echo "<br><br><br>";
//------------------------------------------------------------------------------------------------------------------------//

function isGrammarNaziHappy(){
    echo "Grammar Nazi:<br>";
}//скоро сделаю

