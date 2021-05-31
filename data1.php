<?php
require 'vendor/autoload.php';


$url ="https://www.scb.se/hitta-statistik/statistik-efter-amne/utbildning-och-forskning/hogskolevasende/sokande-och-antagna-till-hogskoleutbildning-pa-grundniva-och-avancerad-niva/pong/tabell-och-diagram/antal-behoriga-forstahandssokande-och-antagna-till-program-och-kurser-per-universitethogskola-hostterminerna-19982020/" ;
$file_content = file_get_contents($url);
//echo $file_content ;
//The tempnam() function creates a temporary file with a unique name in the specified directory.
// sys_get_temp_dir — Returns directory path used for temporary files
$tmp_file = tempnam(sys_get_temp_dir(),"Data"); // C:\Users\banch\AppData\Local\Temp\Dat3DBE.tmp

file_put_contents($tmp_file, $file_content);

// Start php spreadsheet//
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($tmp_file);
//var_dump($reader);
$reader->setReadDataOnly(TRUE); // Read only the data values and any formulae from each cell
$reader->setLoadSheetsOnly(["Tabell, totalt"]);
$spreadsheet = $reader->load($tmp_file);

$worksheet = $spreadsheet->getActiveSheet();
$enskildautbildnigsanordnare = $worksheet->getCell('A52')->getValue();
$konstnärligahögskolor = $worksheet->getCell('A47')->getValue();
$högskola = $worksheet->getCell('A29')->getValue();
$universitet = $worksheet->getCell('A9')->getValue();

$row10 = 10 ;
$rowindex ='AV';
while($row10 <= 27){
    $data1 [] = (int)$worksheet->getCell($rowindex . $row10)->getValue();
    $row10++;
}

$row30 = 30;
while($row30 <= 45){
    $data2 []= (int)$worksheet->getCell($rowindex. $row30)->getValue();
    $row30++;
}

$row48 = 48 ;
while($row48 <= 50){
    $data3[]= (int)$worksheet->getCell($rowindex. $row48)->getValue();
    $row48++;
}

$row53 = 53;
while($row53 <= 67){
    $data4 []= (int)$worksheet->getCell($rowindex . $row53)->getValue();
    $row53++;
}

//end phph spreadsheet//

$value = [array_sum($data1), array_sum($data2), array_sum($data3), array_sum($data4)];
$label = [$universitet, $högskola, $konstnärligahögskolor, $enskildautbildnigsanordnare];

//var_dump($value);
//var_dump($label);

$data = [
    "values"=> $value,
    "labels"=> $label, 
    "type"=> 'pie'
]; 


//var_dump($data);

$ut = json_encode($data);  //encode the associative array to JSON format.
echo "[{$ut}]";

?>