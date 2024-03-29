



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
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
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
</script>