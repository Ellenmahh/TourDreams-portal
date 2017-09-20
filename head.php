<meta charset="utf-8">
<title>Tour Dreams</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="imagens/iconsiteblack.png" />
<link href="fontes/fonte.css" rel="stylesheet">
<script language="javascript" src="js/jquery.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" src="js/jquery-ui.css" />
<script src="js/jquery-1.8.2.js"></script>
<script src="js/jquery-ui.js"></script>

    <!-- ========================================= Script para menu 2 ========================================= -->
  <script type="text/javascript">

  $(window).scroll(function() {
    if ($(this).scrollTop() > 1){
      $('header').addClass("sticky");
    }
    else{
      $('header').removeClass("sticky");
    }
    });

  </script>

    <!-- ========================================= Script para filtros ========================================= -->
  <script type="text/javascript">
      jQuery(document).ready(function($){
        $("#btn_pesquisa_avancada").click(function(event){

          event.stopPropagation();
          event.preventDefault();

          $("#filtros").slideToggle(500);
        });

      });
  </script>


  <!-- ========================================= Script para Ancora ========================================= -->
  <script type="text/javascript">

    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 900);
     });
    });


  </script>

  <!--<script type="text/javascript">
    $(document).ready(function(){
      $("#filtrar").click(function(event){
        event.preventDefault();
        $(".labels").slideToggle(300);
      });
    });
  </script>-->

    <!-- ========================================= Script para tradutor ========================================= -->
    <script type="text/javascript">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
    }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


  <!-- ========================================= Script para Modal ========================================= -->
   <script>
      $(document).ready(function(){
        $("a[rel=modal]").click( function(ev){
          ev.preventDefault();

          var id = $(this).attr("href");

          var alturaTela = $(document).height();
          var larguraTela = $(window).width();

          //colocando o fundo preto
          $('#mascara').css({'width':larguraTela,'height':alturaTela});
          $('#mascara').fadeIn(1000);
          $('#mascara').fadeTo("slow",0.8);

          var left = ($(window).width() /2) - ( $(id).width() / 2 );
          var top = ($(window).height() / 2) - ( $(id).height() / 2 );

          $(id).css({'top':top,'left':left});
          $(id).show();
        });

        $("#mascara").click( function(){
          $(this).hide();
          $(".window").hide();
        });

        $('.fechar').click(function(ev){
          ev.preventDefault();
          $("#mascara").hide();
          $(".window").hide();
        });
      });

  </script>

  <!-- ========================================= Script para o slider ========================================= -->
  <script>
    var index = 1;

    function plusIndex(n){
      index = index + n;
      showImage(index);
    }

    showImage(1);

    function showImage(n){
      var i;
      var x = document.getElementsByClassName("slides");
      if(n > x.length){index = 1};
      if(n < 1){index = x.length};
      for(i=0;i<x.length;i++)
        {
          x[i].style.display = "none";
        }
      x[index-1].style.display = "block";
    }


  </script>

  <!-- ========================================= Script para o calendario ========================================= -->
<script type='text/javascript'>
  $(function() {
      $("#calendario").datepicker({
        changeMonth: true,
        changeYear: true,

        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
      });
  });

  $(function() {
      $("#calendario2").datepicker({
        changeMonth: true,
        changeYear: true,

        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
      });
  });

</script>

<!-- ========================================= Style e Script para o slide de imagens da Area da Reserva ========================================= -->
<style>
  body {
    margin: 0;
    padding: 0;
  }
  a {
    color: #09f;
  }
  a:hover {
    text-decoration: none;
  }
  #back_to_camera {
    clear: both;
    display: block;
    height: 80px;
    line-height: 40px;
    padding: 20px;
  }
  .fluid_container {
    margin: 0 auto;
    width:500px;
  }
</style>

<!-- Pegando Scripts -->
<!--<script type='text/javascript' src='scripts_slide_areaReserva/jquery.min.js'></script>-->
<script type='text/javascript' src='scripts_slide_areaReserva/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='scripts_slide_areaReserva/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='scripts_slide_areaReserva/camera.min.js'></script>

<script>
  jQuery(function(){
    jQuery('#camera_wrap_2').camera({
      height: '400px',
      loader: 'bar',
      pagination: false,
      thumbnails: true
    });
  });
</script>
