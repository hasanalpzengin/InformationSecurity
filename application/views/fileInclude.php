<div class="content-item-big">
    <h2 class="h2b">File Include Nedir ?</h2>
    <div class="information-area">
        <h4 class="h4b" style="display: block">
            Başka bir kaynaktan bir dosyanın include edilmesiyle oluşan zafiyettir. Dosya içeriği her şeyi barındırabildiği için tehlikelidir.<br>
            File include ikiye ayrılır:<br>
            <b>1- Remote File Include</b><br>
            Örnek:<br>
            http://www.infosys.com/wp-admin/admin-ajax.php?action=revslider_show_image&img=../wp-config.php<br>
            Burada uzaktan wp-config dosyası çağırılmıştır.<br>
            <b>2- Local File Include</b><br>
            Yereldeki bir kaynağın include edilmesidir. Yerelden alınan kaynağa göre daha tehlikelidir.<br>
            Örnek:<br>
            http://192.168.44.130/fileincl/example1.php?page=../../../../etc/passwd<br>
            Burada yerelden etcpasswd çağırılmıştır. Evet bunun sorgusuz sualsiz ekrana basıyorsanız eğer evet durum çok fena.
        </h4>
    </div>
</div>

<div class="content-item-big">
    <h2 class="h2b">File Include Korumaları</h2>
    <div class="information-area">
        <h4 class="h4b" style="display: block">
            Alınan kısımda dosya uzantısını yani (.) noktadan sonrasını parse ederek inceleyeceğiz. Yani asıl anlamda sadece ne alacağımızı iyi belirlemeliyiz. Mesela biz txt dosyası mı istiyoruz ? O halde sadece txt olanları alacaksın. Gelen başka herşeyi reddedeceksin.
        </h4>
        <br>
        <br>
    </div>
</div>