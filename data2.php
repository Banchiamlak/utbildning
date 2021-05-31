<?php
require 'vendor/autoload.php';
$url = "https://www.scb.se/hitta-statistik/statistik-efter-amne/utbildning-och-forskning/analyser-och-prognoser-om-utbildning-och-arbetsmarknad/trender-och-prognoser-om-utbildning-och-arbetsmarknad/pong/tabell-och-diagram/arbetsmarknadsutsikterna-fram-till-ar-2035-per-utbildningsgrupp/";
$file_content = file_get_contents($url);
//The tempnam() function creates a temporary file with a unique name in the specified directory.
// sys_get_temp_dir — Returns directory path used for temporary files
$tmp_file = tempnam(sys_get_temp_dir(),"Data"); // C:\Users\banch\AppData\Local\Temp\DatD55D.tmp

file_put_contents($tmp_file, $file_content);
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($tmp_file);
$spreadsheet = $reader->load($tmp_file);
$worksheet = $spreadsheet->getActiveSheet();

$cellIndex1= ['A16','A28','A37', 'A52', 'A64', 'A87', 'A96', 'A125' ];
foreach($cellIndex1 as $x) {
    $utbildning []= $worksheet->getCell($x)->getValue();
};

$cellIndex2 = ['G18','G30','G39', 'G54', 'G73', 'G89', 'G102', 'G131' ];
foreach($cellIndex2 as $y) {
    $Efterfråga []= (int)$worksheet->getCell($y)->getValue();
};

$cellIndex3 = ['I18','I30','I39', 'I54', 'I73', 'I89', 'I102', 'I131' ];
foreach($cellIndex3 as $y) {
    $Tillgång []= (int)$worksheet->getCell($y)->getValue();
};

$trace1 = [
    "x"=> $utbildning,
    "y"=> $Efterfråga,
    "name" => "Efterfrågan",
    "type"=> "bar"
]; 
  
$trace2 = [
    "x"=> $utbildning,
    "y"=> $Tillgång,
    "name" =>"Tillgång",
    "type"=>"bar"
];
$data = [$trace1, $trace2];

$ut = json_encode($data); 
echo $ut;

?>