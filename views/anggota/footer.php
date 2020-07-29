      <section>
        <p class="center grey-text text-darken-3">@Copyright 2019 Farhan Fadila</p>
      </section>
      
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../../js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
          M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
          M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 600,
            intervale: 3000
          });

        const parallax = document.querySelectorAll('.parallax');
          M.Parallax.init(parallax);
      </script>
    </body>
  </html>