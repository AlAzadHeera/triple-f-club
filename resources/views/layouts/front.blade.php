<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>triple F club</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('frontend/img/fav/fav.png') }}" type="image/gif" sizes="96x96">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&family=Roboto&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/js/vegas/vegas.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/button.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jaybar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap4-modal-fullscreen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>

<body onload="closeLoader()">

<div id="up">
    <a href="{{ route('Home') }}#hero-section"><img src="{{ asset('frontend/img/up.gif') }}" alt=""></a>
</div>

<div id="loader" class="loader">
    <img class="img-fluid" src="{{ asset('frontend/img/loader.gif') }}" alt="">
</div>

<!-- Match Confirmation Modal -->
<div class="modal fade" id="matchConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content login-modal">
            <div class="modal-body">
                <div class="login-modal-title bebas text-center">
                    <h5>Login/Register With:</h5>
                </div>
                <div class="login-modal-social-button">
                    <p style="color: #fff;">50 tk is match subscription.</p>
                </div>
            </div>
            <div class="bebas  modal-footer login-modal-footer">
                <button type="button" class="bttn-material-flat bttn-sm bttn-primary" style="margin-right: 10px;">Confirm</button>
                <button type="button" class="bttn-material-flat bttn-sm bttn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content login-modal">
            <div class="modal-body">
                <div class="login-modal-title bebas text-center">
                    <h5>Login/Register With:</h5>
                </div>
                <div class="login-modal-social-button">
                    <a href="#"><img class="img-fluid" src="{{ asset('frontend/img/login/1.png') }}" alt=""></a>
                    <a href="#"><img class="img-fluid" src="{{ asset('frontend/img/login/2.png') }}" alt=""></a>
                </div>
            </div>
            <div class="bebas  modal-footer login-modal-footer">
                <button type="button" class="bttn-material-flat bttn-sm bttn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<section id="hero-section">

    <!--Hero Text-->
    <div class="hero-text">
        <div class="hero-text-caption marcellus">
            <h1>Free Fire Fight Club</h1>
        </div>
        <div id="navigation-test">
            <nav class="bebas">
                <ul>
                    <li><a href="#upcomming-games">Matches</a></li>
                    <li><a href="recharge.html">Recharge</a></li>
                    <li><a href="l#app-download-section">Download</a></li>
                    <li><a href="#shop">Shop</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="hero">

                    <!--Jaybar-->
                    <div class="jaybar">
                        <div class="jaybar-bar">
                            <a href="#" class="jaybar-menu-button             "><span></span></a>
                            <img class="jaybar-avatar" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAgACADASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAABQYHCP/EACsQAAICAQMCBgIBBQAAAAAAAAECAwQRBQYhABIHEzFBYXEiURRCgYKjsf/EABcBAAMBAAAAAAAAAAAAAAAAAAIDBAD/xAAbEQACAgMBAAAAAAAAAAAAAAABAgADBBESIv/aAAwDAQACEQMRAD8Are2du7fk1W6tjRdMdDWrlUaihAJebkce/aOfgdJ2/NKNW3uCvtfbely32ljSIGtCBAghGWXuHbknB+zk56ZIdXtw6zdMUNcMYK4UctgBpvTHvhj9dDbEtyXUNYngljhkVopXBjaVmUICUUZyCQByc4PUr5CnQWFSh600zJuK5uvQbcly2IoGRwOySKKQH/DBTH9utHeB40fd+2zrNzbuledasdjotNCiMkSK2ARwpZScfPv7yLdOnyalp4l1e0ZrNlTmHyRH5TE+v7znGOM9VvwnWxpWz1r0/wCJ5cU7dwUlhlkVgMqc5GQD88dZLx16lN+NyvmSLffi4zLdXbbyVpJBFCLPdiRVQs34gcDPcAfg9L20d+byta/EKT3NZbiWaqzFw8agq3efYcjDeg4+unnV/DjwykR3bVbGn9uSRXtBl/2A/wDR0J1nU9D0vSIdF2HYq1qSPHJLZmsKZrsynKhmGCQD7DAHsP2YZFXSiLWhuvRgie/b3JqLCJIKUqJ3mgGPmoCc/lnGSTyTk+oz0sVd02tp7qs3dHuulhjifB7oZSPUFf6hnODwfcfs0vfUF+KUxtbkSlMronmTFjA54Pl/GDjkA8kfPWeZFKOVY8gkH76GpULEiMyGfkBhP//Z"><a class="jaybar-availability" href="http://jaysalvat.com" title="Available for work">Available for
                                work</a>
                            <a class="jaybar-name" data-toggle="modal" data-target="#loginModal"><strong>Al Azad Heera</strong></a>
                            <div class="jaybar-buttons" style="background: rgb(147, 202, 197);">
                                <a title="Log Out" class="jaybar-button-email" href="#"><svg class="jaybar-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="28" viewBox="0 0 28 28">
                                        <path d="M27.563 0.172q0.516 0.375 0.422 1l-4 24q-0.078 0.453-0.5 0.703-0.219 0.125-0.484 0.125-0.172 0-0.375-0.078l-7.078-2.891-3.781 4.609q-0.281 0.359-0.766 0.359-0.203 0-0.344-0.063-0.297-0.109-0.477-0.367t-0.18-0.57v-5.453l13.5-16.547-16.703 14.453-6.172-2.531q-0.578-0.219-0.625-0.859-0.031-0.625 0.5-0.922l26-15q0.234-0.141 0.5-0.141 0.313 0 0.562 0.172z"></path>
                                    </svg></a>
                            </div>
                        </div>
                        <ul class="jaybar-menu">
                            <li class="jaybar-active">
                                <h3>120<span>৳</span></h3>
                                <p>Bonus Balance</p>
                            </li>
                            <li class="jaybar-facedetection">
                                <h3>120<span>৳</span></h3>
                                <p>Main Balance</p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="upcomming-games" data-vide-bg="./assets/video/video.mp4">
    <div class="upcomming-game-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h1 class="marcellus">Upcomming Games . . .</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-5 col-xs-6">
                <div class="upcomming-game-image">
                    <img class="img-fluid mx-auto d-block rounded" src="{{ asset('frontend/img/up-comming-game.gif') }}" alt="">
                </div>
            </div>
            <div class="col-md-8 col-sm-7 col-xs-6">
                <div class="upcomming-game-title">
                    <table class="table table-color table-borderless">
                        <tbody>
                        <tr>
                            <th scope="row"><img class="game-image" src="{{ asset('frontend/img/game-logo/morning.jpg') }}"></th>
                            <td class="align-middle text-center" width="50%">My Morning</td>
                            <td class="align-middle text-center" width="20%">46/50</td>
                            <td class="align-middle" width="30%"><button class="btn btn-two" data-toggle="modal" data-target="#matchConfirmationModal">Register</button></td>
                        </tr>
                        <tr>
                            <th scope="row"><img class="game-image" src="{{ asset('frontend/img/game-logo/noon.jpg') }}"></th>
                            <td class="align-middle text-center">Ninja Noon</td>
                            <td class="align-middle text-center">50/50</td>
                            <td class="align-middle"><button class="btn btn-two" disabled>Register</button></td>
                        </tr>
                        <tr>
                            <th scope="row"><img class="game-image" src="{{ asset('frontend/img/game-logo/knight.jpg') }}"></th>
                            <td class="align-middle text-center">Dark Knight</td>
                            <td class="align-middle text-center">32/50</td>
                            <td class="align-middle"><button id="b4" class="btn btn-two disable">Register</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="app-download-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h1 class="marcellus">Download App</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="os-image">
                    <img class="img-fluid mx-auto d-block rounded" src="{{ asset('frontend/img/os/android.png') }}" width="120">
                </div>
                <div class="download-btn">
                    <button class="btn btn-two d-block mx-auto">Download</button>
                </div>
            </div>
            <div class="col-6">
                <div class="os-image">
                    <img class="img-fluid mx-auto d-block rounded" src="{{ asset('frontend/img/os/iphone.png') }}" width="120">
                </div>
                <div class="download-btn">
                    <button class="btn btn-two d-block mx-auto">Download</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="shop">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h1 class="marcellus">Shop</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="shop-box">
                    <div class="shop-buttons d-md-flex justify-content-md-center">
                        <button class="bttn-slant bttn-md bttn-danger active" data-filter="*">show all</button>
                        <button class="bttn-slant bttn-md bttn-warning" data-filter=".topup">Top Up</button>
                        <button class="bttn-slant bttn-md bttn-warning" data-filter=".levelup">Level Up</button>
                        <button class="bttn-slant bttn-md bttn-warning" data-filter=".membership">Membership</button>
                        <button class="bttn-slant bttn-md bttn-warning" data-filter=".sepcialoffer">Special Offer</button>
                        <button class="bttn-slant bttn-md bttn-warning" data-filter=".airdrop">Airdrop</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row shop-items bebas">
            <div class="col-md-3 col-sm-4 topup">
                <div class="shop-item card-glass text-center">
                    <div class="shop-item-image">
                        <img class="img-fluid mx-auto d-block" src="{{ asset('frontend/img/shop/topup.png') }}" width="60" class="img-fluid">
                    </div>
                    <div class="shop-item-title">
                        <h4>100 Diamonds</h4>
                    </div>
                    <div class="shop-item-price">
                        <h4>100৳</h4>
                    </div>
                    <div class="shop-item-button"><button class="bttn-material-flat bttn-md bttn-danger">Buy Now</button></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 topup">
                <div class="shop-item card-glass text-center">
                    <div class="shop-item-image">
                        <img class="img-fluid mx-auto d-block" src="{{ asset('frontend/img/shop/topup.png') }}" width="60" class="img-fluid">
                    </div>
                    <div class="shop-item-title">
                        <h4>310 Diamonds</h4>
                    </div>
                    <div class="shop-item-price">
                        <h4>200৳</h4>
                    </div>
                    <div class="shop-item-button"><button class="bttn-material-flat bttn-md bttn-danger">Buy Now</button></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 topup">
                <div class="shop-item card-glass text-center">
                    <div class="shop-item-image">
                        <img class="img-fluid mx-auto d-block" src="{{ asset('frontend/img/shop/topup.png') }}" width="60" class="img-fluid">
                    </div>
                    <div class="shop-item-title">
                        <h4>520 Diamonds</h4>
                    </div>
                    <div class="shop-item-price">
                        <h4>450৳</h4>
                    </div>
                    <div class="shop-item-button"><button class="bttn-material-flat bttn-md bttn-danger">Buy Now</button></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 topup">
                <div class="shop-item card-glass text-center">
                    <div class="shop-item-image">
                        <img class="img-fluid mx-auto d-block" src="{{ asset('frontend/img/shop/topup.png') }}" width="60" class="img-fluid">
                    </div>
                    <div class="shop-item-title">
                        <h4>1060 Diamonds</h4>
                    </div>
                    <div class="shop-item-price">
                        <h4>900৳</h4>
                    </div>
                    <div class="shop-item-button"><button class="bttn-material-flat bttn-md bttn-danger">Buy Now</button></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 topup">
                <div class="shop-item card-glass text-center">
                    <div class="shop-item-image">
                        <img class="img-fluid mx-auto d-block" src="{{ asset('frontend/img/shop/topup.png') }}" width="60" class="img-fluid">
                    </div>
                    <div class="shop-item-title">
                        <h4>2180 Diamonds</h4>
                    </div>
                    <div class="shop-item-price">
                        <h4>1800৳</h4>
                    </div>
                    <div class="shop-item-button"><button class="bttn-material-flat bttn-md bttn-danger">Buy Now</button></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 topup">
                <div class="shop-item card-glass text-center">
                    <div class="shop-item-image">
                        <img class="img-fluid mx-auto d-block" src="{{ asset('frontend/img/shop/topup.png') }}" width="60" class="img-fluid">
                    </div>
                    <div class="shop-item-title">
                        <h4>5600 Diamonds</h4>
                    </div>
                    <div class="shop-item-price">
                        <h4>4500৳</h4>
                    </div>
                    <div class="shop-item-button"><button class="bttn-material-flat bttn-md bttn-danger">Buy Now</button></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 levelup">
                <div class="shop-item card-glass text-center">
                    <div class="shop-item-image">
                        <img class="img-fluid mx-auto d-block" src="{{ asset('frontend/img/shop/levelup.png') }}" width="60" class="img-fluid">
                    </div>
                    <div class="shop-item-title">
                        <h4>Level Up Pass</h4>
                    </div>
                    <div class="shop-item-price">
                        <h4>210৳</h4>
                    </div>
                    <div class="shop-item-button"><button class="bttn-material-flat bttn-md bttn-danger">Buy Now</button></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 membership">
                <div class="shop-item card-glass text-center">
                    <div class="shop-item-image">
                        <img class="img-fluid mx-auto d-block" src="{{ asset('frontend/img/shop/membership.png') }}" width="60" class="img-fluid">
                    </div>
                    <div class="shop-item-title">
                        <h4>Weekly</h4>
                    </div>
                    <div class="shop-item-price">
                        <h4>190৳</h4>
                    </div>
                    <div class="shop-item-button"><button class="bttn-material-flat bttn-md bttn-danger">Buy Now</button></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 membership">
                <div class="shop-item card-glass text-center">
                    <div class="shop-item-image">
                        <img class="img-fluid mx-auto d-block" src="{{ asset('frontend/img/shop/membership.png') }}" width="60" class="img-fluid">
                    </div>
                    <div class="shop-item-title">
                        <h4>Monthly</h4>
                    </div>
                    <div class="shop-item-price">
                        <h4>680৳</h4>
                    </div>
                    <div class="shop-item-button"><button class="bttn-material-flat bttn-md bttn-danger">Buy Now</button></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 airdrop">
                <div class="shop-item card-glass text-center">
                    <div class="shop-item-image">
                        <img class="img-fluid mx-auto d-block" src="{{ asset('frontend/img/shop/airdrop.png') }}" width="60" class="img-fluid">
                    </div>
                    <div class="shop-item-title">
                        <h4>Airdrop</h4>
                    </div>
                    <div class="shop-item-price">
                        <h4>90৳</h4>
                    </div>
                    <div class="shop-item-button"><button class="bttn-material-flat bttn-md bttn-danger">Buy Now</button></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 sepcialoffer">
                <div class="shop-item card-glass text-center">
                    <div class="shop-item-image">
                        <img class="img-fluid mx-auto d-block" src="{{ asset('frontend/img/shop/specialoffer.png') }}" width="60" class="img-fluid">
                    </div>
                    <div class="shop-item-title">
                        <h4>Special Offer</h4>
                    </div>
                    <div class="shop-item-price">
                        <h4>100৳</h4>
                    </div>
                    <div class="shop-item-button"><button class="bttn-material-flat bttn-md bttn-danger">Buy Now</button></div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="important-links">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-sm-6">
                <div class="logo-box">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('frontend/img/logo/freefirelogo-black.png') }}" width="185">
                </div>
            </div>
            <div class="offset-md-4"></div>

            <div class="col-md-4 d-none d-md-block d-lg-block">
                <div class="important-link-box robboto-condensed font-weight-bolder">
                    <ul>
                        <li><a href="#" data-text="Login">Login</a></li>
                        <li><a href="#" data-text="Registration">Registration</a></li>
                        <li><a href="#" data-text="Privacy Policy">Privacy Policy</a></li>
                        <li><a href="#" data-text="Terms & Condition">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 d-xl-none d-md-none">
                <div class="important-link-box-mobile robboto-condensed font-weight-bolder">
                    <ul>
                        <li><a href="#" data-text="Login">Login</a></li>
                        <li><a href="#" data-text="Registration">Registration</a></li>
                        <li><a href="#" data-text="Privacy Policy">Privacy Policy</a></li>
                        <li><a href="#" data-text="Terms & Condition">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="footer" class="text-center">
    <p>All Right Reserved <span id="current_year"></span> &#169 Free Fire Fight Club</p>
</section>


<script>
    var loader = document.getElementById('loader');

    function closeLoader() {
        loader.style.display = 'none';
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend/js/vegas/vegas.min.js') }}"></script>
<script src="{{ asset('frontend/js/vidi/vidi.js') }}"></script>
<script src="{{ asset('frontend/js/isotope/isotope.js') }}"></script>
<script src="{{ asset('frontend/js/smooth-scroll/jquery.navpoints.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>

<script>
    document.getElementById('b4').onclick = function() {
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, delete it!',
                closeOnConfirm: false,
                //closeOnCancel: false
            },
            function() {
                swal("Deleted!", "Your imaginary file has been deleted!", "success");
            });
    };
</script>

<script>
    $(function() {
        $('#navigations').navpoints({
            speed: 1100,
        });
    });
</script>

<script>
    $("#hero-section").vegas({
        preload: true,
        overlay: true,
        slides: [{
            src: "{{ asset('frontend/img/hero/1.jpg') }}"
        },
            {
                src: "{{ asset('frontend/img/hero/2.jpg') }}"
            },
            {
                src: "{{ asset('frontend/img/hero/3.jpg') }}"
            },
            {
                src: "{{ asset('frontend/img/hero/4.jpg') }}"
            },
            {
                src: "{{ asset('frontend/img/hero/5.jpg') }}"
            }
        ],
        transition: 'random',
        animation: 'random',
    });
</script>

<script>
    var pulse = function() {
        var e = document.createElement("div");
        e.setAttribute('class', 'circle'),
            document.body.appendChild(e),
            e.style.top = event.pageY + 'px',
            e.style.left = event.pageX + 'px'

        setTimeout(function() {
            document.body.removeChild(e)
        }, 280)
    };
    document.addEventListener('click', pulse)
</script>

<script>
    var date = new Date();
    var year = date.getFullYear();
    var print = document.getElementById("current_year").innerHTML = year;
</script>

<script>
    // init Isotope
    var $grid = $('.shop-items').isotope();
    // filter items on button click
    $('.shop-buttons').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });
</script>

<script>
    document.querySelector(".jaybar-menu-button").onclick = function(a) {
        var t = "jaybar-menu-button-active",
            i = "jaybar-menu-open",
            n = document.querySelector(".jaybar-menu");
        new RegExp(t).test(this.className) ? this.className = this.className.replace(t, "") : this.className = this
            .className + " " + t, new RegExp(i).test(n.className) ? n.className = n.className.replace(i, "") : n
            .className = n.className + " " + i, a.preventDefault()
    }
</script>

</body>
</html>
