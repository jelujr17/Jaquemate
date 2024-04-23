
<!--
<div id="feedback-form-wrapper">
  <div id="floating-icon" class="mt-5">
    <button type="button" class="btn btn-warning btn-sm rounded-0" data-toggle="modal" data-target="#exampleModal">
      Feedback
    </button>
  </div>
  <div id="feedback-form-modal">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Formulario satisfacción</h5>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">¿Como ha sido tu experiencia?</label>
                <div class="rating-input-wrapper d-flex justify-content-between mt-2" id="icon-container">
                  <span class="btn-wrapper" onclick="setRating('sad')">
                    <button type="button" class="btn btn-black " id="sad">
                      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor"
                        class="bi bi-emoji-angry" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path
                          d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.5 3.5 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.5 4.5 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683m6.991-8.38a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5s-1-.672-1-1.5c0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761zm-6.552 0a.5.5 0 0 0-.448.894l1.009.504A1.94 1.94 0 0 0 5 6.5C5 7.328 5.448 8 6 8s1-.672 1-1.5c0-.247-.04-.48-.11-.686a.502.502 0 0 0-.166-.761z" />
                      </svg>
                    </button>
                  </span>
                  <span class="btn-wrapper" onclick="setRating('mid-sad')">
                    <button type="button" class="btn btn-black" id="mid-sad">
                      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor"
                        class="bi bi-emoji-astonished" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path
                          d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5M4.884 4.022a2 2 0 0 1 1.458-.048.5.5 0 0 0 .316-.948 3 3 0 0 0-2.167.077 3.1 3.1 0 0 0-.773.478q-.036.03-.07.064l-.002.001a.5.5 0 0 0 .707.708l-.001.002.001-.002a2 2 0 0 1 .122-.1 2 2 0 0 1 .41-.232Zm6.232 0a2 2 0 0 0-1.458-.048.5.5 0 1 1-.316-.948 3 3 0 0 1 2.168.077 3 3 0 0 1 .773.478l.07.064v.001a.5.5 0 0 1-.706.708l.002.002-.002-.002a2 2 0 0 0-.122-.1 2 2 0 0 0-.41-.232ZM8 10c-.998 0-1.747.623-2.247 1.246-.383.478.08 1.06.687.98q1.56-.202 3.12 0c.606.08 1.07-.502.687-.98C9.747 10.623 8.998 10 8 10" />
                      </svg>
                    </button>
                  </span>
                  <span class="btn-wrapper" onclick="setRating('neutral')">

                    <button type="button" class="btn btn-black" id="neutral">
                      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor"
                        class="bi bi-emoji-expressionless" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path
                          d="M4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m5 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
                      </svg>
                    </button>
                  </span>
                  <span class="btn-wrapper" onclick="setRating('happy')">

                    <button type="button" class="btn btn-black" id="happy">
                      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor"
                        class="bi bi-emoji-smile" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path
                          d="M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5" />
                      </svg>
                    </button>
                  </span>
                  <span class="btn-wrapper" onclick="setRating('very-happy')">

                    <button type="button" class="btn btn-black" id="very-happy">
                      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor"
                        class="bi bi-emoji-grin" viewBox="0 0 16 16">
                        <path
                          d="M12.946 11.398A6.002 6.002 0 0 1 2.108 9.14c-.114-.595.426-1.068 1.028-.997C4.405 8.289 6.48 8.5 8 8.5s3.595-.21 4.864-.358c.602-.07 1.142.402 1.028.998a5.95 5.95 0 0 1-.946 2.258m-.078-2.25C11.588 9.295 9.539 9.5 8 9.5s-3.589-.205-4.868-.352c.11.468.286.91.517 1.317A37 37 0 0 0 8 10.75a37 37 0 0 0 4.351-.285c.231-.407.407-.85.517-1.317m-1.36 2.416c-1.02.1-2.255.186-3.508.186s-2.488-.086-3.507-.186A5 5 0 0 0 8 13a5 5 0 0 0 3.507-1.436ZM6.488 7c.114-.294.179-.636.179-1 0-1.105-.597-2-1.334-2C4.597 4 4 4.895 4 6c0 .364.065.706.178 1 .23-.598.662-1 1.155-1 .494 0 .925.402 1.155 1M12 6c0 .364-.065.706-.178 1-.23-.598-.662-1-1.155-1-.494 0-.925.402-1.155 1a2.8 2.8 0 0 1-.179-1c0-1.105.597-2 1.334-2C11.403 4 12 4.895 12 6" />
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m0-1A7 7 0 1 1 8 1a7 7 0 0 1 0 14" />
                      </svg>
                    </button>
                </div>
                <input type="hidden" name="rating" id="ratingInput">
              </div>

              <div class="form-group">
                <label for="input-two">¿Qué aspectos crees que podríamos mejorar?</label>
                <textarea class="form-control" id="input-two" rows="3"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-warning">Enviar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
-->
</body>

<footer class="bg-dark text-white pt-5 pb-4 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4 mt-3 text-center">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning" id="jaquemateTitle">jaquemate</h5>
        <div id="jaquemateOptions" class="footer-options">
          <p>
            <a href="Quienes-Somos" class="text-white" style="text-decoration: none;"> Quiénes somos</a>
          </p>
          <p>
            <a href="Practica-con-Nosotros" class="text-white" style="text-decoration: none;"> Practica con nosotros</a>
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mt-3 text-center">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning" id="legalTitle">Legal</h5>
        <div id="legalOptions" class="footer-options">
          <p>
            <a href="Politica-de-Privacidad" class="text-white" style="text-decoration: none;">Política de
              privacidad</a>
          </p>
          <p>
            <a href="Aviso-Legal" class="text-white" style="text-decoration: none;"> Aviso legal</a>
          </p>
        </div>
      </div>
      <div class="col-md-12 col-lg-4 mt-3 text-center">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning" id="contactoTitle">Contacto</h5>
        <div id="contactoOptions" class="footer-options">
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
    </div>
    <hr class="mb-4">
    <div class="row align-items-center">
      <div class="col-md-7">
        <p class="derechos">© <span id="current-year"></span> Todos los derechos reservados.</p>
      </div>
      <div class="col-md-5">
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline footer-social-icons">
            <li><!--
            <a href="https://www.linkedin.com/company/jaquemate-mayoristas-sl/about/" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
-->
            </li>
            <li>
              <a href="https://www.instagram.com/jaquemate_es" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/share/Ev29ACAapbKbMTrq/?mibextid=LQQJ4d" target="_blank">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/TeamJaquemate">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                  class="bi bi-twitter-x" viewBox="0 0 16 16">
                  <path
                    d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script src="vista/js/footer.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</footer>
</body>

</html>