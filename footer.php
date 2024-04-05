



<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="footer-area">
                    <div class="footer-left">
                        <p class="footer-para">© Copyright <strong>Get Easy Trip</strong> 2024.</p>
                    </div>
                    <div class="footer-right">
                        <a class="footer-social-icons" href="javascript:void()">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a class="footer-social-icons" href="javascript:void()">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a class="footer-social-icons" href="javascript:void()">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a class="footer-social-icons" href="javascript:void()">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>







</div>
    </div>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>

<script>
   const dashNavActive = document.querySelectorAll(".dash-nav-link");

dashNavActive?.forEach((dashNav) => {
  dashNav?.addEventListener("click", () => {
    dashNavActive.forEach((nav) => {
      nav.classList.remove("active");
    });
    dashNav.classList.add("active");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var dashboard = document.querySelector(".dashboard");
  dashboard.classList.add("active");
  var currentUrl = window.location.pathname;
  console.log(currentUrl, "currentUrl");
  var activeLiElements = document.querySelectorAll(".dash-nav-link");
  activeLiElements.forEach(function (activeLi) {
    var anchorHref = activeLi.querySelector("a").getAttribute("href");
    var underLi = activeLi.querySelector("ul");
    if (currentUrl.includes(anchorHref)) {
      console.log("Adding 'active' class to:", activeLi);
      activeLi.classList.add("active");
      dashboard.classList.remove("active");
    }
    if (underLi) {
      var anchorActive = underLi.querySelectorAll("li");
      anchorActive.forEach(function (anchorLi) {
        var underAnchorHref = anchorLi.querySelector("a").getAttribute("href");
        var underAnchorHrefActive = anchorLi.querySelector("a");
        if (currentUrl.includes(underAnchorHref)) {
          var closestActiveLi = getClosest(anchorLi, ".dash-nav-link");
          if (closestActiveLi) {
            console.log(
              "Adding 'active' class to:",
              closestActiveLi,
              underAnchorHrefActive
            );
            closestActiveLi.classList.add("active");
            dashboard.classList.remove("active");
            underAnchorHrefActive.classList.add("active");
          }
        }
      });
    }
  });
  function getClosest(element, selector) {
    while (element && !element.matches(selector)) {
      element = element.parentElement;
    }
    return element;
  }
});











</script>