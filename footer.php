</main>

<footer class="page-footer teal accent-4">
  <div class="footer-copyright ">
        <div class="container direitos">
        © <?php echo date('Y');?> Todos os Direitos Reservados.
        </div>
  </div>
</footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/bower_components/materialize/dist/js/materialize.min.js"></script>
<script>

$(".button-collapse").sideNav();

$(document).ready(function(){
$('.parallax').parallax();
});

</script>
</body>
</html>
