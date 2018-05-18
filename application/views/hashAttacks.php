<div class="content-item-big">
    <h2 class="h2b">Hash Attacks Nedir ?</h2>
    <div class="information-area">
        <h4 class="h4b" style="display: block">
            MD5 vb. ile hashlenmiş verinin aşağıdaki yöntemler kullanılarak olası karşılığının bulunmasıdır.<br>
            <b>Rainbow Table</b><br>
            Bir map structure'dan hash'lenmiş halinin bulunup o değerden çözülmüş halin elde edilmesidir.<br>
            <b>Brute Force</b><br>
            Hashcat gibi bir yazılım kullanılarak sırayla tüm sayıların harflerin vs. kombinasyonlarının vierlen hashlerde denenmesi. Kısa zamanda yapılabilmesi için GPU'lar tercih edilmektedir.<br>
            <b>Dictionary Attack</b><br>
            Belirli bir dictionaryden kombinasyon oluşturup bunların sırayla brute force ile denenmesi.<br>
            <b>Intelligence Attack</b><br>
            Kullanıcı şifrelerinin genel karakteristik özelliklerinin toplanıp, daha sonrasında sadece o karakteristiğe sahip stringlerin denenerek hash'in kırılmaya çalışılmasıdır.
        </h4>
    </div>
</div>

<div class="content-item-big">
    <h2 class="h2b">Hash Attack Korumaları</h2>
    <div class="information-area">
        <h4 class="h4b" style="display: block">
            Korunma yöntemi olarak, tuzlama metodu kullanılmaktadır. Yani hashlemede kullanılacak unique bir değer ile hashleme yapılmaktadır. Bu değer hashleme algoritmasına göre karışık yerlere yerleştiğinden hash'in çözülmesi daha da zorlaşmaktadır. Zaten tuzlamada eklenen unique değerin uzunluğu arttıkça kırmak katlanarak zorlaşmaktadır.
        </h4>
        <br>
        <br>
    </div>
</div>