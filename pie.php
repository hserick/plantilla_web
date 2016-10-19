<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                  <h5 class="white-text">Plantilla realizada con <a href="http://materializecss.com" target="_blank">Materialize</a></h5>
                <p class="grey-text text-lighten-4">Puedes usar filas y columnas para organizar el contenido.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Enlace 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Enlace 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Enlace 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Enlace 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
                © 2016 Plantilla realizada por el Ing. Erick Segundo <a href="mailto:esdesarrollo@outlook.com">esdesarrollo@outlook.com</a>
            <a class="grey-text text-lighten-4 right" href="#!">Más Enlaces</a>
            </div>
          </div>
        </footer>
</div>
<!--jQuery v2.1.1 -->
<script src="visual/js/jquery.min.js"></script>
<script src="visual/js/materialize.min.js"></script>
<script src="visual/js/personalizado.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#el_<?php echo $orig; ?>").removeClass("active");
        $("#el_<?php echo $dest; ?>").addClass("active");
    });
    
</script>
</body>
</html>


