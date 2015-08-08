<script type="text/javascript">
$(document).ready(function(){
	var menu = ["menuBeranda","menuMasuk","menuPeta","menuTentangkami"];
    $("#menuBeranda").hover(function(){
        $(this).css("background-color", "#A1A1D9");
        $(this).css("color","#000000");
        $("#menuPutihBeranda").css("background-color","#FFFFFF");
        }, function(){
        $(this).css("background-color", "#303030");
        $(this).css("color","#FFFFFF");
        $("#menuPutihBeranda").css("background-color","#A1A1D9");
    });
    $("#menuMasuk").hover(function(){
        $(this).css("background-color", "#A1A1D9");
        $(this).css("color","#000000");
        $("#menuPutihMasuk").css("background-color","#FFFFFF");
        }, function(){
        $(this).css("background-color", "#303030");
        $(this).css("color","#FFFFFF");
        $("#menuPutihMasuk").css("background-color","#A1A1D9");
    });
    $("#menuPeta").hover(function(){
        $(this).css("background-color", "#A1A1D9");
        $(this).css("color","#000000");
        $("#menuPutihPeta").css("background-color","#FFFFFF");
        }, function(){
        $(this).css("background-color", "#303030");
        $(this).css("color","#FFFFFF");
        $("#menuPutihPeta").css("background-color","#A1A1D9");
    });
    $("#menuTentangkami").hover(function(){
        $(this).css("background-color", "#A1A1D9");
        $(this).css("color","#000000");
        $("#menuPutihTentangKami").css("background-color","#FFFFFF");
        }, function(){
        $(this).css("background-color", "#303030");
        $(this).css("color","#FFFFFF");
        $("#menuPutihTentangKami").css("background-color","#A1A1D9");
    });
});
</script>

<a href="#">
	<div id="menuBeranda" class="m">
		<h3>Beranda</h3>
	</div>
	<div id="menuPutihBeranda" class="hiasan"></div>
</a>
<a href="#">
	<div id="menuMasuk" class="m">
		<h3>Masuk</h3>
	</div>
	<div id="menuPutihMasuk" class="hiasan"></div>
</a>
<a href="#">
	<div id="menuPeta" class="m">
		<h3>Peta</h3>
	</div>
	<div id="menuPutihPeta" class="hiasan"></div>
</a>
<a href="#">
	<div id="menuTentangkami" class="m">
		<h3>Tentang Kami</h3>
	</div>
	<div id="menuPutihTentangKami" class="hiasan"></div>
</a>


