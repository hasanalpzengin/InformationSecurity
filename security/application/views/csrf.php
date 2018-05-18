<div class="content-item-big">
    <h2 class="h2b">Cross Site Request Forgery Nedir ?</h2>
    <div class="information-area">
        <h4 class="h4b" style="display: block">
            Örneğin kullanıcı bank.com'a giriş yaptığında oturum çerezi bütün tarayıcı durumunu değiştirmektedir.
            Peki kullanıcı bank.com gibi görünen başka bir siteye giriş yapmaya çalışırsa ve o sitenin form yapısı şu şekildeyse,
        </h4>
            <textarea class="code-area" rows="3">
                <form name="F" action="http://bank.com/BillPay.php">
                    <input name="musteri" value="badguy">...
                    <script>document.F.submit()</script>
            </textarea>
        <h4 class="h4b" style="display: block">
            Yani kullanıcı sisteme kötü site aracılığı ile giriş yapar. Asıl sunucu ise önemli bilgileri içeren bu çerezi kötü siteye verir.
        </h4>
    </div>
</div>

<div class="content-item-big">
    <h2 class="h2b">Cross Site Request Forgery Savunmaları</h2>
    <div class="information-area">
        <h4 class="h4b" style="display: block">
            Bunun için 3 Genel yöntem vardır.<br>
            1.si gizli bir doğrulama anahtarı kullanmak.
        </h4>
        <textarea class="code-area" rows="1">
            <input type="hidden" value="23a3af01b">
        </textarea>
        <h4 class="h4b" style="display: block">
            2.si kaynak sorgusu yapmak.
        </h4>
        <textarea class="code-area" rows="1">
            Referer: http://www.facebook.com/home.php
        </textarea>
        <h4 class="h4b" style="display: block">
            3.sü ise custom http header'i kullanmak
        </h4>
        <textarea class="code-area" rows="1">
            X-Requested-By: XMLHttpRequest
        </textarea>
    </div>
</div>