<div class="content-item-big" style="display: table">
    <img src="/image/warning.png" style="display: table-cell; margin: 10px" class="left-image"/>
    <h2 class="h2b" style="display: table-cell; vertical-align: middle">Kodlar codeigniter framework için hazırlanmıştır.</h2>
</div>
<!-- Content Start -->
<div class="content-item-small">
    <h2 class="h2b">SQL Injection</h2>
    <div class="information-area">
        <h4 class="h4b">PHP kodu aşağıda sunulmuştur.<br>Codeigniter Framework'ünde form_open() methodu ile bu sorun aşılmaktadır. En çok önerilen yöntem ise kütüphanelerdeki parametre ile aktarmadır.</h4><br>
        <textarea class="code-area" id="sqlinjection-code"></textarea><br>
        <h4 class="h4b">Önleme: </h4><input type="checkbox" id="sqlinjectionCheckbox">
    </div>
</div>
<div class="content-item-right">
    <h2 class="h2b">SQL Injection Denemesi</h2>
    <div class="information-area">
        <h4 class="h4b">$girdi ismindeki kötü amaçlı kodun injection açığından faydalanmasını engelleyecek bir sınama yaz. Kod php dilinde codeigniter framework'ü için yazılacaktır. Kodunuz $girdi isminde değişkeni parametre olarak almalıdır ve eğer zararlı bir kod ise $id kodunu boş döndürmelidir. Yazdığınız kodun $id değişkeni model fonksiyonununa girdi olacaktır. Kodunuzun çıktısını javascript loglarında görebilirsiniz.</h4>
        <h4 class="h4b">
            Çözüm:
            <textarea class="code-area" rows="5">if(strpos($girdi,"'")>-1){
    $id = "";
}else{
    $id = $girdi;
}</textarea>
        </h4>
        <h4 class="h4b">
            Deneme:
            <textarea class="code-area" id="injectionArea"></textarea><br>
            <button id="injectionSendButton">Gönder</button>
        </h4>
    </div>
</div>
<div class="content-item-small">
    <h2 class="h2b">CSRF</h2>
    <div class="information-area">
        <h4 class="h4b">Token Sistemi<br>Codeigniter Framework'ünde form_open() methodu ile bu sorun aşılmaktadır.</h4><br>
        <textarea class="code-area" id="csrf-code-token" rows="10"></textarea><br>
        <h4 class="h4b">Önleme: </h4><input type="checkbox" id="csrfCheckbox-token">
    </div>
    <div class="information-area">
        <h4 class="h4b">Referer Sistemi</h4><br>
        <textarea class="code-area" id="csrf-code-referer" rows="4"></textarea><br>
        <h4 class="h4b">Önleme: </h4><input type="checkbox" id="csrfCheckbox-referer">
    </div>
</div>
<div class="content-item-right">
    <h2 class="h2b">CSRF Denemesi</h2>
    <div class="information-area">
        <h4 class="h4b">Kötü amaçlı kullanıcı csrf açığını kullanmaya çalışıyor. Sizin siteniz ise $_SESSION['token'] ve $_GET['token'] ile saldırıya karşı token sistemi kullanıyor. Kullanıcıların csrf açığı kullandığını yakalayıp "prevented" katarını $sonuc değişkenine atayan iki değişkenin aynı olduğu durumda ise "pass" katarını $sonuc değişkenine atayan bir kod yazın.</h4>
        <h4 class="h4b">
            Çözüm:
            <textarea class="code-area" rows="6">if($_SESSION['token'] !== $_GET['token']){
    $sonuc = "prevented";
}else{
    $sonuc = "pass";
}</textarea>
        </h4>
        <h4 class="h4b">
            Deneme:
            <textarea class="code-area" id="csrfArea"></textarea><br>
            <button id="csrfSendButton">Gönder</button>
        </h4>
    </div>
</div>
<div class="content-item-small">
    <h2 class="h2b">XSS</h2>
    <div class="information-area">
        <h4 class="h4b">SpecialChars Sistemi</h4><br>
        <textarea class="code-area" id="xss-code" rows="5"></textarea><br>
        <h4 class="h4b">Önleme: </h4><input type="checkbox" id="xssCheckbox">
    </div>
</div>
<div class="content-item-right">
    <h2 class="h2b">XSS Denemesi</h2>
    <div class="information-area">
        <h4 class="h4b">Bu örnekte 'girdi' ismindeki kötü amaçlı string web sitesine get ediliyor ve $girdi değişkenine atanıyor ve echo ile yazdırılıyor. Amacınız bu değişken kötü amaçlı ise stringi engellemek.</h4>
        <h4 class="h4b">
            Çözüm:
            <textarea class="code-area" rows="5">$girdi = htmlspecialchars($girdi);</textarea>
        </h4>
        <h4 class="h4b">
            Deneme:
            <textarea class="code-area" id="xssArea"></textarea><br>
            <button id="xssSendButton">Gönder</button>
        </h4>
    </div>
</div>

<script src="/js/pratik.js" type="text/javascript" rel="script"></script>
<script src="/js/deneme.js" type="text/javascript" rel="script"></script>