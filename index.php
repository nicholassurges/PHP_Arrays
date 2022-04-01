<?php
$countries=array("Brazil","Canada","Argentina","Spain","Portugal"); 
print_r($countries);
array_push($countries,"Mexico"); 
$deleted = array_shift($countries); 
sort($countries); 
echo "<br> "; 
echo "<br> ";
foreach ($countries as $value) 

{
echo "$value "; 
echo "<br> ";
}
  
if (in_array("Spain", $countries)) 
{
echo "<br> Spain is a fun place to vacation <br>"; 
}

$arr = array("Florida"=>"Tallahassee", "Georgia"=>"Atlanta", "New York"=>"New York","Albama"=>"Montgomery","Texas"=>"Austin"); 
foreach($arr as $x => $value) 
{
echo "<br>$x - $value"; 
}

?>
</body>
</html>