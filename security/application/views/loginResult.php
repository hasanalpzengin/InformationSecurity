<div class="content-item-small">
    <?php
        if ($result == true){
    ?>
            <img class="left-image" src="/image/success.png"/>
            <h3 class="h3b">Web Uygulaması Güvenliğine Hoş Geldiniz.</h3><hr>
            <h4 class="h4b">Birazdan arayüze yönlendirileceksiniz.</h4>
    <?php
            header( "refresh:3;url=/index.php/page" );
        }else{
    ?>
            <img class="left-image" src="/image/unsuccess.png"/>
            <h3 class="h3b">Yanlış Kullanıcı Adı ya da Şifre</h3><hr>
            <h4 class="h4b">Birazdan giriş ekranına yönlendirileceksiniz.</h4>
    <?php
            header( "refresh:3;url=/index.php/login");
        }
    ?>
</div>