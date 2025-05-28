<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rethink Events</title>
    <link href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= ASSETS ?>/css/styles.css">
</head>

<body>

    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="loader">
            <img src="<?=ASSETS?>/img/logo.svg" alt="Logo">
        </div>
    </div> -->

    <header>
        <div class="row-element">
            <div class="clr">
                <div class="left-header">
                    <div class="logo">
                        <a href="<?=ROOT?>">
                            <img style="width:120px;" src="<?=ASSETS?>/img/logo.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="center-header">
                    <ul class="menu">
                        <li><a href="<?= ROOT ?>">Home</a></li>
                        <li><a href="<?= ROOT ?>/about/">About Us</a>
                        <li>
                        <li><a href="<?= ROOT ?>/services/">Our Services <i class="uil uil-angle-down"></i></a>
                            <ul class="hasChild">
                                <li><a href="<?= ROOT ?>/services/#corporate"> Events</a></li>
                                <li><a href="<?= ROOT ?>/services/#entertainment">Printing</a></li>
                                <li><a href="<?= ROOT ?>/services/#social">Interior</a></li>
                                <li><a href="<?= ROOT ?>/services/#private">General Supply</a></li>
                                <li><a href="<?= ROOT ?>/services/#creative">Creative</a></li>
                                <li><a href="<?= ROOT ?>/services/#sound">Sound</a></li>
                                <li><a href="<?= ROOT ?>/services/##venue">Venue</a></li>
                                
                                
                            </ul>
                        </li>


                        <li><a href="<?= ROOT ?>/clients/">Our Clients</a></li>
                        <li><a href="<?= ROOT ?>/past-events/">Events</a></li>
                        <li><a href="<?= ROOT ?>/gallery/">Gallery</a></li>
                        <li><a href="<?= ROOT ?>/contact-us/">Contact</a></li>
                    </ul>
                </div>
                <div class="right-header">
                    <div class="right-header-action-container">
                        <a href="#" class="right-header-action">Rental Service</a>


                    </div>
                    <!-- Hamburger Menu -->
                    <div class="hamburger" id="hamburger">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div id="content">
        {{content}}
    </div>



    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>SERVICES</h3>
                <ul>
                    <li><a href="#">Corporate Events</a></li>
                    <li><a href="#">Entertainment Events</a></li>
                    <li><a href="#">Social Events</a></li>
                    <li><a href="#">Creative Design</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>COMPANY</h3>
                <ul>
                    <li><a href="http://localhost:8080/ucomfortbd.com/about-us">About Us</a></li>
                    <li><a href="#">Our Approach</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>EVENTS & CLIENTS</h3>
                <ul>
                    <li><a href="#">Past Events</a></li>
                    <li><a href="#">Our Clients</a></li>
                    <li><a href="#">Event Gallery</a></li>
                    <li><a href="#">Legal</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>SUPPORT</h3>
                <ul>
                    <li><a href="http://localhost:8080/ucomfortbd.com/sales-network">FAQs</a></li>
                    <li><a href="http://localhost:8080/ucomfortbd.com/iconic-projects">Terms & Conditions</a></li>
                    <li><a href="http://localhost:8080/ucomfortbd.com/factory">Privacy Policy</a></li>
                    <li><a href="http://localhost:8080/ucomfortbd.com/faq">Contact Us</a></li>
                </ul>



            </div>
        </div>
        <div class="container-sharing">
            <div>
                <div class="sharing">

                    <a class="sharing-item sharing-facebook" href="https://www.facebook.com/UComfortbd">
                        <svg class="i i-facebook" viewBox="0 0 24 24">
                            <path d="M17 14h-3v8h-4v-8H7v-4h3V7a5 5 0 0 1 5-5h3v4h-3q-1 0-1 1v3h4Z"></path>
                        </svg></a>

                    <a class="sharing-item sharing-twitter" href="https://twitter.com/ucomfortbd">
                        <svg class="i i-twitter" viewBox="0 0 24 24">
                            <path d="m3 21 7.5-7.5m3-3L21 3M8 3H3l13 18h5Z"></path>
                        </svg></a>

                    <a class="sharing-item sharing-pinterest" href="#">
                        <svg class="i i-pinterest" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="11"></circle>
                            <path d="m8 22 3-11a1 1 0 0 0 5 5.5A6 6 0 1 0 6 12"></path>
                        </svg></a>





                    <a class="sharing-item sharing-linkedin" href="https://www.linkedin.com/company/ucomfortbd/">
                        <svg class="i i-linkedin" viewBox="0 0 24 24">
                            <circle cx="4" cy="4" r="2"></circle>
                            <path d="M2 9h4v12H2Zm20 12h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 12 0Z"></path>
                        </svg></a>



                    <a class="sharing-item sharing-whatsapp"
                        href="https://wa.me/+8801818131816?text=Welcome%20to%20WhatsApp!">
                        <svg class="i i-whatsapp" viewBox="0 0 24 24">
                            <circle cx="9" cy="9" r="1"></circle>
                            <circle cx="15" cy="15" r="1"></circle>
                            <path d="M8 9a7 7 0 0 0 7 7m-9 5.2A11 11 0 1 0 2.8 18L2 22Z"></path>
                        </svg></a>


                </div>
            </div>
            <div>
                <button id="goTopBtn" title="Go to top" style="display: block;"><i
                        class="uil uil-top-arrow-from-top"></i></button>
            </div>

        </div>
        <div class="second-footer">
            <div>
                <span class="small">© Copyright 2024 Rethink Events. All rights reserved. </span>
            </div>
            <div>
                <span class="small">Technical support: support@rethinkevents.com </span>
            </div>
            <div>
                <span class="small">Customer support: +880 1923991360</span>
            </div>
        </div>

        <p class="footer-credit">
            Developed by
            <a href="https://avantvista.com" target="_blank" rel="noopener noreferrer">

                <img src="https://avantvista.com/assets/alpha-theme/img/logo.svg" alt="Avant Vista Ventures">
            </a>
        </p>
    </footer>

    <script>

            const menuItems = document.querySelectorAll(".menu > li > a");
            const hamburger = document.getElementById("hamburger");
            const menu = document.querySelector(".menu");
            const body = document.body;

            // Toggle Mobile Menu
            hamburger.addEventListener("click", () => {
                hamburger.classList.toggle("active");
                menu.classList.toggle("show");

                if (menu.classList.contains("show")) {
                    body.classList.add("no-scroll"); // Disable body scroll
                } else {
                    body.classList.remove("no-scroll"); // Enable body scroll
                }
            });

            // Toggle Submenus
            menuItems.forEach((item) => {
                item.addEventListener("click", function(e) {
                    const submenu = this.nextElementSibling;

                    if (submenu && submenu.classList.contains("hasChild")) {
                        e.preventDefault(); // Prevent default link behavior

                        const isSubmenuOpen = submenu.style.display === "block";

                        // Close all other submenus
                        document.querySelectorAll(".hasChild").forEach((el) => {
                            el.style.display = "none";
                        });

                        // Toggle clicked submenu
                        submenu.style.display = isSubmenuOpen ? "none" : "block";

                        // Enable vertical scrolling when a submenu is open
                        if (!isSubmenuOpen) {
                            menu.style.overflowY = "auto";
                            menu.style.maxHeight = "80vh"; // Limit menu height to avoid full page scroll
                        } else {
                            menu.style.overflowY = "hidden"; // Disable scroll when closing submenu
                        }
                    }
                });
            });

            // Close menu when clicking outside
            document.addEventListener("click", function(e) {
                if (!menu.contains(e.target) && !hamburger.contains(e.target)) {
                    menu.classList.remove("show");
                    hamburger.classList.remove("active");
                    body.classList.remove("no-scroll"); // Re-enable scrolling

                    // Close all submenus when clicking outside
                    document.querySelectorAll(".hasChild").forEach((el) => {
                        el.style.display = "none";
                    });

                    // Remove vertical scroll when closing
                    menu.style.overflowY = "hidden";
                }
            });

    </script>


    <script src="<?= ASSETS ?>/js/script.js"></script>
</body>

</html>