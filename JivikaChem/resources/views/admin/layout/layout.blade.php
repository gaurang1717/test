<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <title>Jivika - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="dropdown-scroll.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <link rel="stylesheet" href="{{asset('admin_assets/css/style.css')}}">
</head>

<body>

    <div class="wrapper">

        <!-- SideBar Start -->

        <div class="sidebar">
            @include('admin.layout.sidebar')
        </div>

        <!-- SideBar End -->

        <section class="home-section">

            <!-- Header Start -->

            <div class="dash-flex">
                <div class="home-content">
                    @include('admin.layout.header')
                </div>
            </div>

            <!-- Header End -->

            <!-- Main Content Start -->

            <div class="dashboard-side">
                @section('container')
                @show
            </div>

            <!-- Main Content End -->

        </section>
    </div>


    <!-------------- Script Start ------------->

    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        $(function() {
            resizeScreen();
            $(window).resize(function() {
                resizeScreen();
            });
            $('.bx-menu').click(function() {

                if (document.body.clientWidth > 400) {
                    $('.sidebar').toggleClass('close');
                } else {
                    $('.sidebar').toggleClass('small-screen');
                }
            });

            function resizeScreen() {
                if (document.body.clientWidth < 400) {
                    $('.sidebar').addClass('close');
                } else {
                    $('.sidebar').removeClass('close');
                }
            }
        });
    </script>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

    <!-------------- Script End ------------->

</body>

</html>