<?php include 'header.php';?>
<?php include 'inc/slider.php';?>

<div class="title">
	<div>
		DISTRIBUCIÓN
	</div>
</div>

<div class"wrapper" id="distribucion">
    <div class="distribucion">
        <div id="tabs">
            <h1>corte longitudinal</h1>
            <div class="map">
                <div id="tab1" class="tab-content">
                    <img src="img/pb.jpg">
                </div>
                <div id="tab2" class="tab-content">
                    <img src="img/n2.jpg">
                </div>
                <div id="tab3" class="tab-content">
                    <img src="img/n3.jpg">
                </div>
                <div id="tab4" class="tab-content">
                    <img src="img/n4.jpg">
                </div>
                <div id="tab5" class="tab-content">
                    <img src="img/n5.jpg">
                </div>
                <div id="tab6" class="tab-content">
                    <img src="img/n6.jpg">
                </div>
                <div id="tab7" class="tab-content">
                    <img src="img/n7.jpg">
                </div>
                <div id="tab8" class="tab-content">
                    <img src="img/n8.jpg">
                </div>
                <div id="tab9" class="tab-content">
                    <img src="img/sotano.jpg ">
                </div>
            </div>
            
            <div class="open_list"><p>VER PLANTAS</p></div>
            <ul class="list">
                <li>
                    <a href="#tab1" class="current tab" onclick="return false;"> <span>01</span> <p>Planta Baja</p></a>
                    <a href="#lightbox" rel="first" class="open" onclick="return false;">Ver Más</a>
                </li>
                <li>
                    <a href="#tab2" class="tab" onclick="return false;"><span>02</span><p>Nivel 02</p></a>
                    <a href="#lightbox" rel="first" class="open" onclick="return false;">Ver Más</a>
                </li>
                <li>
                    <a href="#tab3" class="tab" onclick="return false;"><span>03</span><p>Nivel 03</p></a>
                    <a href="#lightbox" rel="first" class="open" onclick="return false;">Ver Más</a>
                </li>
                <li>
                    <a href="#tab4" class="tab" onclick="return false;"><span>04</span><p>Nivel 04</p></a>
                    <a href="#lightbox" rel="first" class="open" onclick="return false;">Ver Más</a>
                </li>
                <li>
                    <a href="#tab5" class="tab" onclick="return false;"><span>05</span><p>Nivel 05</p></a>
                    <a href="#lightbox" rel="first" class="open" onclick="return false;">Ver Más</a>
                </li>
                <li>
                    <a href="#tab6" class="tab" onclick="return false;"><span>06</span><p>Nivel 06</p></a>
                    <a href="#lightbox" rel="first" class="open" onclick="return false;">Ver Más</a>
                </li>
                <li>
                    <a href="#tab7" class="tab" onclick="return false;"><span>07</span><p>Nivel 07</p></a>
                    <a href="#lightbox" rel="first" class="open" onclick="return false;">Ver Más</a>
                </li>
                <li>
                    <a href="#tab8" class="tab" onclick="return false;"><span>08</span><p>Nivel 08</p></a>
                    <a href="#lightbox" rel="first" class="open" onclick="return false;">Ver Más</a>
                </li>
                <li>
                    <a href="#tab9" class="tab" onclick="return false;"><span>09</span><p>Sotano 01 - 0-4</p></a>
                    <a href="#lightbox" rel="first" class="open" onclick="return false;">Ver Más</a>
                </li>
            </ul>
        </div>
    </div>

    <script type="text/javascript">
        $( ".open_list" ).click(function() {
            $( ".list, .open_list" ).toggleClass( "show" );          
        });
    </script>

    <?php include'inc/quickview.php';?>

</div>


<?php include 'footer.php';?>
