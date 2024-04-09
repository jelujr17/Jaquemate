<!-- Remove the container if you want to extend the Footer to full width. -->
<div id="feedback-form-wrapper">
  <div id="floating-icon" class="mt-5"> <!-- Agregamos un margen superior al contenedor -->
    <button type="button" class="btn btn-warning btn-sm rounded-0" data-toggle="modal" data-target="#exampleModal">
      <!-- Cambiamos la clase a btn-warning -->
      Feedback
    </button>
  </div>
  <div id="feedback-form-modal">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Feedback Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">How likely you would like to recommand us to your
                  friends?</label>
                <div class="rating-input-wrapper d-flex justify-content-between mt-2">
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">1</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">2</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">3</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">4</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">5</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">6</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">7</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">8</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">9</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">10</span></label>
                </div>
                <div class="rating-labels d-flex justify-content-between mt-1">
                  <label>Very unlikely</label>
                  <label>Very likely</label>
                </div>
              </div>
              <div class="form-group">
                <label for="input-one">What made you leave us so early?</label>
                <input type="text" class="form-control" id="input-one" placeholder="">
              </div>
              <div class="form-group">
                <label for="input-two">Would you like to say something?</label>
                <textarea class="form-control" id="input-two" rows="3"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

<div class="container-fluid p-0 m-0">

  <footer class="bg-dark text-white pt-5 pb-4 mt-5">

    <div class="container text-center text-md-left">

      <div class="row text-center text-md-left">


        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">jaquemate</h5>
          <p>
            <a href="nosotros/quienesSomos.php" class="text-white" style="text-decoration: none;"> Quiénes somos</a>
          </p>
          <p>
            <a href="nosotros/practicaConNosotros.php" class="text-white" style="text-decoration: none;"> Practica con nosotros</a>
          </p>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Legal</h5>
          <p>
            <a href="nosotros/politicadeprivacidad.php" class="text-white" style="text-decoration: none;">Politica de privacidad</a>
          </p>
          <p>
            <a href="nosotros/avisolegal.php" class="text-white" style="text-decoration: none;"> Aviso legal</a>
          </p>

        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
            <a href="contacto.php" class="text-warning" style="text-decoration: none;">Contacto</a>
          </h5>
          <p>
            <i class="fas fa-home mr-3"></i> <a href="https://www.google.com/maps?q=Calle+Jose+Aldeguer,+7,+03016"
              target="_blank" class="text-white" style="text-decoration: none;">Calle Jose Aldeguer, 7, 03016</a>
          </p>
          <p>
            <i class="fas fa-envelope mr-3"></i> <a href="mailto:informacion@jaquemate.es" class="text-white"
              style="text-decoration: none;">informacion@jaquemate.es</a>
          </p>
          <p>
            <i class="fas fa-phone mr-3"></i> <a href="tel:966231926" class="text-white"
              style="text-decoration: none;">966
              231 926</a>
          </p>
        </div>



      </div>

      <hr class="mb-4">

      <div class="row align-items-center">

        <div class="col-md-7 col-lg-8">
          <p class="d-inline-block mb-0">© <span id="current-year"></span> Jaquemate. Todos los derechos reservados.</p>
        </div>

        <script>
          // Obtén el elemento donde se mostrará el año actual
          var currentYearElement = document.getElementById('current-year');

          // Obtiene el año actual
          var currentYear = new Date().getFullYear();

          // Actualiza el contenido del elemento con el año actual
          currentYearElement.textContent = currentYear;


        </script>
        <div class="col-md-5 col-lg-4">
          <div class="text-center text-md-right">

            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                    class="fab fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                    class="fab fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                    class="fab fa-google-plus"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/company/jaquemate-mayoristas-sl/about/"
                  class="btn-floating btn-sm text-white" style="font-size: 23px;">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>

              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                    class="fab fa-youtube"></i></a>
              </li>
            </ul>

          </div>

        </div>

      </div>

    </div>

  </footer>


</div>
<!-- End of .container -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js'></script>

</html>