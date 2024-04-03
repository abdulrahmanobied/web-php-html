$firstName = $_POST[firstName]
$lastName = $_POST[lastName]
$age = 0
$yearOfBirth = $_POST[yearOfBirth]


if($yearOfBirth < 0){
echo error
}else {
    for($i = 2024 , $i == $yearOfBirth,i-- ){

        $age++
    }

    echo hallo $firstName $lastName you were born in $yearOfBirth and your age now is 
}




