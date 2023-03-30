$filename = 'contact-data.xlsx';
  $objPHPExcel = PHPExcel_IOFactory::load($filename);
  $worksheet = $objPHPExcel->getActiveSheet();
  $highestRow = $worksheet->getHighestRow();
  for ($row = 2; $row <= $highestRow; $row++) {
    $name = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
    $email = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
    $message = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
    // Save the data to the database
  }