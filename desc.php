<?php
// "cumleler.txt" dosyasını açarak cümleleri okuma
$dosya = fopen("cumleler.txt", "r");
$cümleler = [];

while (!feof($dosya)) {
    $satir = fgets($dosya);
    $cümleler[] = $satir;
}

fclose($dosya);

// Cümleleri temizleme
$cümleler = array_filter(array_map("trim", $cümleler));

// Rastgele cümleleri karıştırma
shuffle($cümleler);

// Belirli bir kelime sınırına (600 kelime) ulaşana kadar cümleleri birleştirme
$birlestirilmis_makale = "";
$kelime_sayisi = 0;

while ($kelime_sayisi < 10) {
    $rastgele_cümle = $cümleler[array_rand($cümleler)];
    $kelimeler = explode(" ", $rastgele_cümle);
    $kelime_sayisi += count($kelimeler);
    $rastgele_cümle = str_replace(['"', ','], '', $rastgele_cümle);
    $birlestirilmis_makale .= $rastgele_cümle . " ";
}

// Makaleyi ekrana yazdırma veya başka bir dosyaya kaydetme
echo $birlestirilmis_makale;

// Eğer başka bir dosyaya kaydetmek isterseniz aşağıdaki kodu kullanabilirsiniz:
// $makale_dosyasi = fopen("makale.txt", "w");
// fwrite($makale_dosyasi, $birlestirilmis_makale);
// fclose($makale_dosyasi);
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>



