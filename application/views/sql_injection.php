<?php
    require_once "head.php";
?>
        <div class="content-item-big">
            <h2 class="h2b">SQL Injection Nedir ?</h2>
            <div class="information-area">
                <h4 class="h4b" style="display: block">
                    Örnek PHP Kodu
                </h4>
                <textarea rows="3" class="code-area">$kullanici_adi = $_POST['kullanici_adi'];
$sql = "SELECT id FROM kullanicilar WHERE username='$kullanici_adi'";
$rs = $db->executeQuery($sql);</textarea>
                <h4 class="h4b" style="display: block">
                    Peki burada $kullanici_adi değişkeni query'i etkileyecek kötü amaçlı bir string olursa ne olacak ?<br>
                </h4>
            </div>
        </div>

        <div class="content-item-big">
            <h2 class="h2b">SQL Injection Adımları</h2>
            <div class="information-area">
                <h4 class="h4b" style="display: block">
                    <ul>
                        <li>Google ile sql injection açıkları içeren siteleri ara.</li>
                        <li>SQL injection hatasını bu sitelere www.nihaorr1.com/1.js javascript kodunu enjekte etmek için kullan.</li>
                        <li>niahorr1.com sitesi IE, RealPlayer, QQ Instant Messenger açıkları yayan bir javascript kodu bırakır.</li>
                    </ul>
                </h4>
            </div>
        </div>

        <div class="content-item-big">
            <h2 class="h2b">SQL Injection Nasıl Yapılır ?</h2>
            <div class="information-area">
                <h4 class="h4b" style="display: block">
                    Yukarıda belirtilen kodun nasıl bir kötü amaçlı string ile karşılaşabileceğini inceleyelim:<br>
                    Normalde sql'in aşağıdaki sorguyu yapması beklenir.
                </h4>
                <textarea class="code-area" rows="1">SELECT id FROM kullanicilar WHERE username='hasanalpzengin'</textarea>
                <h4 class="h4b" style="display: block">
                    Ancak php post edilen değişkeni aşağıdaki şekilde alırsa ne olacak ?
                </h4>
                <textarea class="code-area" rows="1">' or 1=1</textarea>
                <h4 class="h4b" style="display: block">
                    Bu sefer sql'in şu şekilde sorgu üreteceğini görürüz:
                </h4>
                <textarea class="code-area" rows="1">SELECT id FROM kullanicilar WHERE username='' or 1=1 '</textarea>
                <h4 class="h4b" style="display: block">
                    Sorgunun en sonunda yer alan tırnak işareti soldan sağa okunan sorgu yüzünden devre dışı kalmış olur böylece bu sorgulama bütün kullanıcıların id bilgilerini hacker'a verecektir.<br>
                    Bu açık sadece veritabanından okuma işlemi yapılmasına izin vermez. Başa gelebilecek en kötü hata aşağıdaki sorgu ile gerçekleşebilir.
                </h4>
                <textarea class="code-area" rows="1">' ; DROP TABLE kullanicilar</textarea>
                <h4 class="h4b" style="display: block">
                    Görebileceğimiz gibi hacker noktalı virgül (;) ile sorguyu bitirip, akla gelecek bütün sorguları veritabanı üzerinde gerçekleştirebilecektir. Daha da kötüsü hacker SQL sunucusunda kendisine bir hesap açabilir.
                </h4>
            </div>
        </div>


<?php
    require_once "foot.php";
?>