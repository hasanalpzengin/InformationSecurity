<div class="content-item-big">
    <h2 class="h2b">Broken Authentication and Session Management Nedir ?</h2>
    <div class="information-area">
        <h4 class="h4b" style="display: block">
            2 Yönlü bir zafiyetdir:<br>
            <b>1- Session Fixation</b><br>
            a.) Hacker web sitesini açar.<br>
            b.) Uzun ve tahmin edilemez Session ID'sini ve Cookie değerini alır.<br>
            c.) Hacker aldığı session bilgileri olan login sayfasını kurbana yönlendirir.<br>
            d.) Kurban herşeyden habersiz, sisteme doğru kullanıcı adı ve şifre ile giriş yapar. Böylece hacker'den gelen cookie'yi yetkilendirmiş olur.<br>
            e.) Kurban hiriş yaptıktan sonra Hacker tarayıcısında olan Cookie değeri ile giriş yaptığında artık yetkileri vardır ve hesap tamamen elindedir.<br>
            <b>2- Session Prediction</b><br>
            Tahmin edilebilme olasılığı yüksek olan session idlerinin atanması ile oluşan zafiyet türüdür. ID tahmin edildikten sonrası Session Fixation ile aynı yapıda çalışmaktadır.
        </h4>
    </div>
</div>

<div class="content-item-big">
    <h2 class="h2b">Broken Authentication and Session Management Korumaları</h2>
    <div class="information-area">
        <h4 class="h4b" style="display: block">
            Session ID Regeration yöntemi ile bu açık engellenmektedir. Yani yazılımsal olarak çift kontrollü bir mekanizma gerekmektedir. Kullanıcının oturum açmadan önceki ve sonraki Session id değerlerinin regerate edilmesi gerekmektedir.<br>
            PHP de Session ID Regeneration:
        </h4>
        <textarea class="code-area" rows="1">
            session_regerate_id();
        </textarea>
        <br>
        <br>
    </div>
</div>