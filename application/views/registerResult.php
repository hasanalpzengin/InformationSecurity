<div class="content-item-small">
    <?php
        if ($result == true){
    ?>
            <img class="left-image" src="/image/success.png"/>
            <h3 class="h3b">Kayıt Başarılı</h3><hr>
            <h4 class="h4b">Birazdan arayüze yönlendirileceksiniz.</h4>
    <?php
            header( "refresh:3;url=/index.php/page" );
        }else{
    ?>
            <img class="left-image" src="/image/unsuccess.png"/>
            <h3 class="h3b">Kayıt Sırasında Hata Oluştu</h3><hr>
            <h4 class="h4b">Hata: <?php echo $result['error']; ?></h4>
    <?php
            header( "refresh:3;url=/index.php/login");
        }
    ?>
</div>