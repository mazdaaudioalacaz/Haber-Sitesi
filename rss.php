<?php
// Daha önce kullanılan linkleri saklamak için bir dizi tanımla
$used_links = [];

// kelime.txt dosyasından title kısmını oku
$lines_title = file('kelime.txt');

if ($lines_title === false) {
    die("kelime.txt dosyası okunamıyor.");
}

// link.txt dosyasından link kısmını oku
$lines_link = file('link.txt');

if ($lines_link === false) {
    die("link.txt dosyası okunamıyor.");
}

// İlk 30 başlığı ve bağlantıyı al
$first_30_titles = array_slice($lines_title, 0, 30);
$first_30_links = array_slice($lines_link, 0, 30);

// Özel RSS dosyasını oluştur
$rss_content = '<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0">
    <channel>
        <title>Örnek Özel RSS Kanalı</title>
        <description>Bu bir özel RSS kanalıdır.</description>
        <link>https://kr.koreansdh.co.ua/</link>';

foreach ($first_30_titles as $index => $title) {
    // Linki daha önce kullanılmamışsa işleme devam et
    $link = isset($first_30_links[$index]) ? trim($first_30_links[$index]) : '';
    if (!in_array($link, $used_links)) {
        // Link daha önce kullanılmamış, sakla ve RSS içerisine ekle
        $used_links[] = $link;
        $rss_content .= "
            <item>
                <title>" . htmlspecialchars(trim($title)) . "</title>
                <link>" . htmlspecialchars($link) . "</link>
                <description></description>
                <pubDate>2023-11-09T16:18:25+03:00</pubDate>
            </item>";
    }
}

$rss_content .= '</channel>
</rss>';

// HTTP başlıklarını ayarla
header('Content-Type: application/rss+xml; charset=UTF-8');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// RSS içeriğini ekrana yaz
echo $rss_content;

// veya RSS içeriğini bir dosyaya yaz
$rss_filename = 'feed.xml';
if (file_put_contents($rss_filename, $rss_content) === false) {
    die("Özel RSS dosyası oluşturulamadı.");
}

// link.txt dosyasından ilk 30 satırı sil
$lines_link = array_slice($lines_link, 30);
file_put_contents('link.txt', implode('', $lines_link));
?>
