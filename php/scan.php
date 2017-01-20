<?php 
//folder to scan
$folder = "datoteke";

//create path
$main = dirname(__DIR__);
$path = $main .  "/" .$folder . "/";
if(file_exists($path))
{
	//declare files and folders as array
	$files = [];
	$folders = [];
	//scann all files in that directory 
	$files = scandir($path);
	//find only directorys
	foreach ($files as $item) 
	{
		if ($item == "." || $item == ".." ) 
		{	
			continue;  
		}
		$folders[] = $item;
	}
	
	foreach ($folders as $dir) 
	{
		echo '<li><a href="'.$folder .'\\'.$dir.' "class="text-center">'. $dir .'</a></li>';
		echo "\n";
	}
}
else
{
	echo "<li> Nema datoteka </li>";
}