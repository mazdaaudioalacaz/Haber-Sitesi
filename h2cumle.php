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

// Her 10 kelimeye bir nokta işareti ekleyerek makaleyi oluşturma
$kelime_sayisi = 0;
$birlestirilmis_makale_noktali = "";

foreach ($cümleler as $cümle) {
    $kelimeler = explode(" ", $cümle);

    foreach ($kelimeler as $kelime) {
        $kelime_sayisi++;
        $birlestirilmis_makale_noktali .= $kelime . " ";

        // Her 10 kelimeye bir nokta işareti ekle
        if ($kelime_sayisi % 10 == 0) {
            $birlestirilmis_makale_noktali .= ". ";
        }

        // 1000 kelimeye ulaşıldığında döngüyü kır
        if ($kelime_sayisi >= 1000) {
            break 2;
        }
    }
}

// Rastgele olarak 4 adet "!" ve "@" işaretini ekleme
for ($i = 0; $i < 4; $i++) {
    $index = mt_rand(0, strlen($birlestirilmis_makale_noktali));
    $birlestirilmis_makale_noktali = substr_replace($birlestirilmis_makale_noktali, '!', $index, 0);
}

for ($i = 0; $i < 4; $i++) {
    $index = mt_rand(0, strlen($birlestirilmis_makale_noktali));
    $birlestirilmis_makale_noktali = substr_replace($birlestirilmis_makale_noktali, '@', $index, 0);
}

// Eğer başka bir dosyaya kaydetmek isterseniz aşağıdaki kodu kullanabilirsiniz:
// $makale_noktali_dosyasi = fopen("makale_noktali.txt", "w");
// fwrite($makale_noktali_dosyasi, $birlestirilmis_makale_noktali);
// fclose($makale_noktali_dosyasi);

// Makaleyi ekrana yazdırma veya başka bir dosyaya kaydetme
echo $birlestirilmis_makale_noktali;

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
