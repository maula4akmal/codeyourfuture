<?php 
$biodata=array(

'name'=>'Maula Akmal ALfikri Yusuf',
'address'=>'Majenang',
'hobbies'=> array('Playing Guitar','Eating'),
'is_married'=>false,
'school'=>
array('HighSchool'=>'SMK Muhammadiyah Majenang'),
'skills' => array('css'=>['bootstrap'],'Playing'=>['Guitar','Bass']),
);

$json=json_encode($biodata);
echo $json;
 ?>