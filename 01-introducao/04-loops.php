<?php
$i = 0;

while($i < 10) {
    echo $i;
    $i++;
}

for($i = 0; $i < 10; $i++){
    echo $i;
}

$i = 0;
do{
 echo $i;
 $i++;
}while($i < 10);

$arrSkills = [
    'PHP',
    'Js',
    'Html',
    'CSS',
    'Flutter',
    'NodeJS',
    'MySQL/MariaDB',
    'Git/Github',
    'Laravel',
    'TS',
    'Vue'
];

echo "<br/>";
foreach($arrSkills as $key => $skills){
    echo "{$key} - {$skills}.<br/>";
}