<x-guest-layout>
    @section('title')
    Dimensions
    @endsection

    @section('styles')
    <link href="css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link href="css/style.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }

        header {
            /* position: fixed; */
            background: rgba(255, 255, 255, 0);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(13px);
            -webkit-backdrop-filter: blur(13px);
        }
    </style>
    @endsection

    <!-- Page wrapper -->
    <div class="ip ur su ae">
        <!-- Site header -->
        <header class="tr sa tg" style="position: fixed">
            <div class="sk ns ls gp">
                <div class="ip uo ul ig">
                    <!-- Site branding -->
                    <div class="oo np">
                        <!-- Logo -->
                        <x-jet-application-mark />
                    </div>

                    <!-- Desktop navigation -->
                    <nav class="im yf yx">
                        <!-- Desktop menu links -->
                        <ul class="ip ou ui uo c_">
                            <li>
                                <a class="text-gray-400 de dark--text-gray-300 mv lo lu ip uo ph pv pw"
                                    href="#home">Home</a>
                            </li>
                            <li>
                                <a class="text-gray-400 de dark--text-gray-300 mv lo lu ip uo ph pv pw"
                                    href="#screenshots">Screenshots</a>
                            </li>
                            <li>
                                <a class="text-gray-400 de dark--text-gray-300 mv lo lu ip uo ph pv pw"
                                    href="#features">Features</a>
                            </li>
                        </ul>

                        <!-- Desktop lights switch -->
                        {{-- <div class="form-switch ip ur uf nm">
                            <input type="checkbox" name="light-switch" id="light-switch-desktop" class="light-switch q">
                            <label class="ti" for="light-switch-desktop">
                                <span class="ti fi ff fb vv vw po ty" aria-hidden="true"></span>
                                <svg class="tr to" width="44" height="24" viewBox="0 0 44 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g class="text-white fq" fill-rule="nonzero" opacity=".88">
                                        <path
                                            d="M32 8a.5.5 0 00.5-.5v-1a.5.5 0 10-1 0v1a.5.5 0 00.5.5zM35.182 9.318a.5.5 0 00.354-.147l.707-.707a.5.5 0 00-.707-.707l-.707.707a.5.5 0 00.353.854zM37.5 11.5h-1a.5.5 0 100 1h1a.5.5 0 100-1zM35.536 14.829a.5.5 0 00-.707.707l.707.707a.5.5 0 00.707-.707l-.707-.707zM32 16a.5.5 0 00-.5.5v1a.5.5 0 101 0v-1a.5.5 0 00-.5-.5zM28.464 14.829l-.707.707a.5.5 0 00.707.707l.707-.707a.5.5 0 00-.707-.707zM28 12a.5.5 0 00-.5-.5h-1a.5.5 0 100 1h1a.5.5 0 00.5-.5zM28.464 9.171a.5.5 0 00.707-.707l-.707-.707a.5.5 0 00-.707.707l.707.707z">
                                        </path>
                                        <circle cx="32" cy="12" r="3"></circle>
                                        <circle fill-opacity=".4" cx="12" cy="12" r="6"></circle>
                                        <circle fill-opacity=".88" cx="12" cy="12" r="3"></circle>
                                    </g>
                                </svg>
                                <span class="q">Switch to light / dark version</span>
                            </label>
                        </div> --}}

                        <!-- Desktop CTA on the right -->
                        <ul class="ip ua ui uo">
                            <li>
                                <a class="text-white bg-teal-500 r p_ ng" href="{{ route('login') }}">Login</a>
                            </li>
                        </ul>

                    </nav>

                    <!-- Mobile menu -->
                    <div class="id yc" x-data="{ expanded: false }">

                        <!-- Mobile lights switch -->
                        <div class="form-switch ip ur uf ny nb">
                            <input type="checkbox" name="light-switch" id="light-switch-mobile" class="light-switch q">
                            <label class="ti" for="light-switch-mobile">
                                <span class="ti fi ff fb vv vw po ty" aria-hidden="true"></span>
                                <svg class="tr to" width="44" height="24" viewBox="0 0 44 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g class="text-white fq" fill-rule="nonzero" opacity=".88">
                                        <path
                                            d="M32 8a.5.5 0 00.5-.5v-1a.5.5 0 10-1 0v1a.5.5 0 00.5.5zM35.182 9.318a.5.5 0 00.354-.147l.707-.707a.5.5 0 00-.707-.707l-.707.707a.5.5 0 00.353.854zM37.5 11.5h-1a.5.5 0 100 1h1a.5.5 0 100-1zM35.536 14.829a.5.5 0 00-.707.707l.707.707a.5.5 0 00.707-.707l-.707-.707zM32 16a.5.5 0 00-.5.5v1a.5.5 0 101 0v-1a.5.5 0 00-.5-.5zM28.464 14.829l-.707.707a.5.5 0 00.707.707l.707-.707a.5.5 0 00-.707-.707zM28 12a.5.5 0 00-.5-.5h-1a.5.5 0 100 1h1a.5.5 0 00.5-.5zM28.464 9.171a.5.5 0 00.707-.707l-.707-.707a.5.5 0 00-.707.707l.707.707z">
                                        </path>
                                        <circle cx="32" cy="12" r="3"></circle>
                                        <circle fill-opacity=".4" cx="12" cy="12" r="6"></circle>
                                        <circle fill-opacity=".88" cx="12" cy="12" r="3"></circle>
                                    </g>
                                </svg>
                                <span class="q">Switch to light / dark version</span>
                            </label>
                        </div>

                        <!-- Hamburger button -->
                        <button class="c" :class="{ 'active': expanded }" @click.stop="expanded = !expanded"
                            aria-controls="mobile-nav" :aria-expanded="expanded">
                            <span class="q">Menu</span>
                            <svg class="sh iw fq hs de dark--text-gray-300 mv ph pv pw" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="4" width="24" height="2" rx="1"></rect>
                                <rect y="11" width="24" height="2" rx="1"></rect>
                                <rect y="18" width="24" height="2" rx="1"></rect>
                            </svg>
                        </button>

                        <!-- Mobile navigation -->
                        <nav id="mobile-nav" class="tn tf ix tb ta sa s_ nx at aw vu ps l"
                            @click.outside="expanded = false" @keydown.escape.window="expanded = false"
                            x-show="expanded" x-transition:enter="ph px pm ow" x-transition:enter-start="h_ oc"
                            x-transition:enter-end="opacity--100 oh" x-transition:leave="ph px pm"
                            x-transition:leave-start="opacity--100" x-transition:leave-end="h_" x-cloak="">
                            <div class="la l_ lj">
                                <!-- Logo -->
                                <a class="ic nk" href="index.html" aria-label="Cruip">
                                    <svg class="sf iy" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <linearGradient x1="26%" y1="100%" x2="100%" y2="100%" id="menulogo_a">
                                                <stop stop-color="#3ABAB4" offset="0%"></stop>
                                                <stop stop-color="#7F9CF5" offset="100%"></stop>
                                            </linearGradient>
                                            <linearGradient x1="26%" y1="100%" x2="100%" y2="100%" id="menulogo_b">
                                                <stop stop-color="#3ABAB4" offset="0%"></stop>
                                                <stop stop-color="#3ABAB4" stop-opacity="0" offset="100%"></stop>
                                            </linearGradient>
                                        </defs>
                                        <path d="M32 16h-8a8 8 0 10-16 0H0C0 7.163 7.163 0 16 0s16 7.163 16 16z"
                                            fill="url(#menulogo_a)"></path>
                                        <path d="M32 16c0 8.837-7.163 16-16 16S0 24.837 0 16h8a8 8 0 1016 0h8z"
                                            fill="url(#menulogo_b)"></path>
                                    </svg>
                                </a>
                                <!-- Links -->
                                <ul>
                                    <li>
                                        <a class="text-gray-400 ip de dark--text-gray-300 mv lu"
                                            href="about.html">About</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-400 ip de dark--text-gray-300 mv lu"
                                            href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-400 ip de dark--text-gray-300 mv lu"
                                            href="testimonials.html">Testimonials</a>
                                    </li>
                                    <li class="lu no al ac av vr">
                                        <span class="text-gray-400 ip dark--text-gray-400 lu">Resources</span>
                                        <ul class="lq">
                                            <li>
                                                <a class="text-gray-400 cm ip c_ de dark--text-gray-400 mv lu"
                                                    href="help.html">Help center</a>
                                            </li>
                                            <li>
                                                <a class="text-gray-400 cm ip c_ de dark--text-gray-400 mv lu"
                                                    href="404.html">404</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                    </div>

                </div>
            </div>
        </header>

        <!-- Page content -->
        <main class="ou">

            <!-- Page illustration -->
            <div class="ti sk ns ik z tw" aria-hidden="true">
                <svg class="tr tf tl ow op n_ ma" width="800" height="502" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="400" cy="102" r="400" fill="url(#heroglow_paint0_radial)" fill-opacity=".6"></circle>
                    <circle cx="209" cy="289" r="170" fill="url(#heroglow_paint1_radial)" fill-opacity=".4"></circle>
                    <defs>
                        <radialGradient id="heroglow_paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="rotate(90 149 251) scale(315.089)">
                            <stop stop-color="#3ABAB4"></stop>
                            <stop offset="1" stop-color="#3ABAB4" stop-opacity=".01"></stop>
                        </radialGradient>
                        <radialGradient id="heroglow_paint1_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="rotate(90 -40 249) scale(133.913)">
                            <stop stop-color="#667EEA"></stop>
                            <stop offset="1" stop-color="#667EEA" stop-opacity=".01"></stop>
                        </radialGradient>
                    </defs>
                </svg>
            </div>

            <!-- Hero -->
            <section id="home">
                <div class="sk ns ls gp">
                    <div class="lz cf bh bv" style="padding-top: 100px">
                        <!-- Hero content -->
                        <div class="yl yj bi xn uo">
                            <!-- Content -->
                            <div class="gj bj nj yr ch bm">
                                <h1 class="h1 xl nk cv cq" data-aos="fade-down">Dimensions, measuring reimagined</h1>
                                <p class="text-gray-400 cg dark--text-gray-400" data-aos="fade-down"
                                    data-aos-delay="150">Dimensions plays major role by improving performance in the
                                    measuring procedures, and get productive.</p>

                                <ul class="text-gray-400 s_ go ns yg dark--text-gray-400 rl rk" data-aos="fade-down"
                                    data-aos-delay="450">
                                    <li class="ip uo rn">
                                        <svg class="text-teal-400 sl ib fq rx oo" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z">
                                            </path>
                                        </svg>
                                        <span>Deliver a stable, high-quality, all-in-one Measuring application. </span>
                                    </li>
                                    <li class="ip uo rn">
                                        <svg class="text-teal-400 sl ib fq rx oo" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z">
                                            </path>
                                        </svg>
                                        <span>High rate accuracy measurements by utilizes augmented reality as its
                                            core.</span>
                                    </li>
                                    <li class="ip uo rn">
                                        <svg class="text-teal-400 sl ib fq rx oo" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z">
                                            </path>
                                        </svg>
                                        <span>Increasing user work productivity.</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Mobile mockup -->
                            <div class="gq bq ch bg" x-data="{ modalExpanded: false }" data-aos="fade-up"
                                data-aos-delay="450">
                                <div class="id ti uf uo">
                                    <!-- Glow illustration -->
                                    <svg class="tr rj rq z tw ma" aria-hidden="true" width="678" height="634"
                                        viewBox="0 0 678 634" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="240" cy="394" r="240" fill="url(#piphoneill_paint0_radial)"
                                            fill-opacity=".4"></circle>
                                        <circle cx="438" cy="240" r="240" fill="url(#piphoneill_paint1_radial)"
                                            fill-opacity=".6"></circle>
                                        <defs>
                                            <radialGradient id="piphoneill_paint0_radial" cx="0" cy="0" r="1"
                                                gradientUnits="userSpaceOnUse"
                                                gradientTransform="rotate(90 -77 317) scale(189.054)">
                                                <stop stop-color="#667EEA"></stop>
                                                <stop offset="1" stop-color="#667EEA" stop-opacity=".01"></stop>
                                            </radialGradient>
                                            <radialGradient id="piphoneill_paint1_radial" cx="0" cy="0" r="1"
                                                gradientUnits="userSpaceOnUse"
                                                gradientTransform="rotate(90 99 339) scale(189.054)">
                                                <stop stop-color="#9F7AEA"></stop>
                                                <stop offset="1" stop-color="#9F7AEA" stop-opacity=".01"></stop>
                                            </radialGradient>
                                        </defs>
                                    </svg>
                                    <!-- iPhone mockup -->
                                    <img class="ti on ns yu yg sr z" src="assets/ui-4.png" alt="iPhone mockup"
                                        aria-hidden="true">
                                </div>

                                <!-- Modal backdrop -->
                                <div class="tn to tx a_ fn pp" x-show="modalExpanded" x-transition:enter="ph px pm"
                                    x-transition:enter-start="h_" x-transition:enter-end="opacity--100"
                                    x-transition:leave="ph px py" x-transition:leave-start="opacity--100"
                                    x-transition:leave-end="h_" aria-hidden="true" x-cloak=""></div>

                                <!-- Modal dialog -->
                                <div id="modal" class="tn to tx ae ip uo uf ow ls gp" role="dialog" aria-modal="true"
                                    aria-labelledby="modal-headline" x-show="modalExpanded"
                                    x-transition:enter="ph pw pm" x-transition:enter-start="h_ ov"
                                    x-transition:enter-end="opacity--100 ol" x-transition:leave="ph pw pm"
                                    x-transition:leave-start="opacity--100 ol" x-transition:leave-end="h_ ov"
                                    x-cloak="">
                                    <div class="aw uz sk sa so" @click.outside="modalExpanded = false"
                                        @keydown.escape.window="modalExpanded = false">
                                        <div class="ti ci">
                                            <iframe class="tr sa ij" src="https://www.youtube.com/embed/qz4F1uMzihY"
                                                title="Video" webkitallowfullscreen="" mozallowfullscreen=""
                                                allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <!-- Stats -->
            <section class="ti">
                <!-- Background gradient (light version only) -->
                <div class="tr tc ta tl i_ fi ff fb z tk vt" aria-hidden="true"></div>
                <!-- End background gradient (light version only) -->
                <div class="ti sk ns ls gp">
                    <div class="ce bp">
                        <div class="iv ue uh xr yq ch" data-aos-id-stats="">
                            <!-- 1st item -->
                            <div class="aw va lv lb pu" data-aos="fade-down" data-aos-anchor="[data-aos-id-stats]">
                                <div class="cv cb cq hi rr">2.4M</div>
                                <div class="text-gray-400 dark--text-gray-400">Days turn around</div>
                            </div>
                            <!-- 2nd item -->
                            <div class="aw va lv lb pu" data-aos="fade-down" data-aos-anchor="[data-aos-id-stats]"
                                data-aos-delay="100">
                                <div class="cv cb cq hi rr">7M</div>
                                <div class="text-gray-400 dark--text-gray-400">Days turn around</div>
                            </div>
                            <!-- 3rd item -->
                            <div class="aw va lv lb pu" data-aos="fade-down" data-aos-anchor="[data-aos-id-stats]"
                                data-aos-delay="200">
                                <div class="cv cb cq hi rr">7.4%</div>
                                <div class="text-gray-400 dark--text-gray-400">Days turn around</div>
                            </div>
                            <!-- 4th item -->
                            <div class="aw va lv lb pu" data-aos="fade-down" data-aos-anchor="[data-aos-id-stats]"
                                data-aos-delay="300">
                                <div class="cv cb cq hi rr">49K</div>
                                <div class="text-gray-400 dark--text-gray-400">Days turn around</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Process -->
            <section class="ti" id="screenshots" style="padding-top: 50px">
                <div class="sk ns ls gp">
                    <div class="lf ba al av vr">

                        <!-- Section header -->
                        <div class="sj ns ch ce bp">
                            <h2 class="h2 cv nk">Measure anything, to perfection</h2>
                            <p class="text-gray-400 cg dark--text-gray-400">Delivering the best user interface, coupled
                                with best design practices and smooth interactions in what is essential, leads to
                                improvements in productivity.</p>
                        </div>

                        <!-- Glow illustration -->
                        <svg class="tr tv ow od rz wf z tw ml im ya" aria-hidden="true" width="854" height="509"
                            viewBox="0 0 854 509" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <radialGradient cx="50%" cy="50%" fx="50%" fy="50%" r="39.386%" id="iphonesill__a">
                                    <stop stop-color="#667EEA" offset="0%"></stop>
                                    <stop stop-color="#667EEA" stop-opacity="0" offset="100%"></stop>
                                </radialGradient>
                                <radialGradient cx="50%" cy="50%" fx="50%" fy="50%" r="39.386%" id="iphonesill__b">
                                    <stop stop-color="#9F7AEA" offset="0%"></stop>
                                    <stop stop-color="#9F7AEA" stop-opacity="0" offset="100%"></stop>
                                </radialGradient>
                            </defs>
                            <g transform="translate(-64 -64)" fill="none" fill-rule="evenodd">
                                <circle fill-opacity=".64" fill="url(#iphonesill__a)" cx="300" cy="300" r="300">
                                </circle>
                                <circle fill-opacity=".72" fill="url(#iphonesill__b)" cx="729" cy="384" r="240">
                                </circle>
                            </g>
                        </svg>

                        <!-- Items -->
                        <div class="s_ ns iv uv bo xs be us yg">

                            <!-- 1st item -->
                            <div class="ti ip ur uo">
                                <!-- Line connecting (1) and (2) -->
                                <div aria-hidden="true" class="tr sn hj fs fl fy fb vm vb vx im ya"
                                    style="width:calc(100% - 48px);left:calc(50% + 48px);top:24px;">
                                    <div class="tr to al ad ag vi"></div>
                                </div>
                                <!-- Number -->
                                <div
                                    class="text-white sm si as aq dark--bg-teal-600 dark--bg-opacity-25 ip uf uo dark--text-teal-400 c_ nj wl">
                                    1</div>
                                <!-- Mobile mockup -->
                                <div class="id ti uf uo">
                                    <!-- iPhone mockup -->
                                    <img class="ti on ns sr z" src="assets/ui-1.png" width="344" height="674"
                                        alt="iPhone mockup" aria-hidden="true">
                                </div>
                            </div>

                            <!-- 2nd item -->
                            <div class="ti ip ur uo">
                                <!-- Line connecting (2) and (3) -->
                                <div aria-hidden="true" class="tr sn hj fs fl fy fb vm vb vx im ya"
                                    style="width:calc(100% - 48px);left:calc(50% + 48px);top:24px;">
                                    <div class="tr to al ad ag vi"></div>
                                </div>
                                <!-- Number -->
                                <div
                                    class="text-white sm si as aq dark--bg-teal-600 dark--bg-opacity-25 ip uf uo dark--text-teal-400 c_ nj wl">
                                    2</div>
                                <!-- Mobile mockup -->
                                <div class="id ti uf uo">
                                    <!-- iPhone mockup -->
                                    <img class="ti on ns sr z" src="assets/ui-2.png" width="344" height="674"
                                        alt="iPhone mockup" aria-hidden="true">
                                </div>
                            </div>

                            <!-- 3rd item -->
                            <div class="ti ip ur uo">
                                <div
                                    class="text-white sm si as aq dark--bg-teal-600 dark--bg-opacity-25 ip uf uo dark--text-teal-400 c_ nj wl">
                                    3</div>
                                <!-- Mobile mockup -->
                                <div class="id ti uf uo">
                                    <!-- iPhone mockup -->
                                    <img class="ti on ns sr z" src="assets/ui-3.png" width="344" height="674"
                                        alt="iPhone mockup" aria-hidden="true">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <!-- Features -->
            <section id="features" style="padding-top: 50px">
                <div class="sk ns ls gp">
                    <div class="lf ba al av vr">

                        <!-- Section header -->
                        <div class="sj ns ch ce bp">
                            <h2 class="h2 cv">What are we up to</h2>
                        </div>

                        <!-- Items -->
                        <div class="sq ns gs yb wb iv gu uh xr wk" data-aos-id-featbl="">

                            <!-- 1st item -->
                            <a class="text-white ip ur lt dx fo fc fx vk pu" href="#0" data-aos="fade-down"
                                data-aos-anchor="[data-aos-id-featbl]">
                                <svg class="sf iy ro" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fq"
                                        d="M19 18.414l-4 4L9.586 17l.707-.707L12 14.586V8.414l-5-5L4.414 6l6.293 6.293-1.414 1.414L1.586 6 7 .586l7 7v5l8.463-8.463a3.828 3.828 0 115.414 5.414L21 16.414v6.172l5 5L28.586 25l-6.293-6.293 1.414-1.414L31.414 25 26 30.414l-7-7v-5zm-4 1.172L26.463 8.123a1.828 1.828 0 10-2.586-2.586L12.414 17 15 19.586zM11 30v2C4.925 32 0 27.075 0 21h2a9 9 0 009 9zm0-5v2a6 6 0 01-6-6h2a4 4 0 004 4z"
                                        fill-rule="nonzero"></path>
                                </svg>
                                <div class="cv cg cq hi rr">Simpler Sharing</div>
                                <div class="ou pn nk">Sharing results at the tip of the finger.</div>
                            </a>

                            <!-- 2nd item -->
                            <a class="text-white ip ur lt dx fo fh fk v_ pu" href="#0" data-aos="fade-down"
                                data-aos-anchor="[data-aos-id-featbl]" data-aos-delay="100">
                                <svg class="sf iy ro" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fq"
                                        d="M20.796 20l-1.677 7.264a6 6 0 01-7.302 4.471L0 28.781V11.54l.35-.3 9.457-8.107a3.751 3.751 0 015.29 5.29L11.175 13H28.5a3.5 3.5 0 012.6 1.156c.663.736.984 1.72.878 2.74-.252 1.808-1.817 3.143-3.622 3.104h-7.56zM2 27.22l10.303 2.575a4 4 0 004.868-2.98L19.204 18h9.173c.812.018 1.508-.575 1.615-1.345A1.5 1.5 0 0028.5 15H11.173a2 2 0 01-1.517-3.3l3.922-4.577a1.755 1.755 0 00-.597-2.733 1.751 1.751 0 00-1.872.262L2 12.46v14.76zM28 .585L29.414 2 23 8.414 21.586 7 28 .586zm-8.272 6.627l-1.94-.485 1.484-5.94 1.94.484-1.484 5.94zm3.544 5l-.485-1.94 5.94-1.486.486 1.94-5.94 1.486z"
                                        fill-rule="nonzero"></path>
                                </svg>
                                <div class="cv cg cq hi rr">Process Efficiency</div>
                                <div class="ou pn nk">Hassle no more, measure from a distance.</div>
                            </a>

                            <!-- 3rd item -->
                            <a class="text-white ip ur lt dx fo fp f_ vj pu" href="#0" data-aos="fade-down"
                                data-aos-anchor="[data-aos-id-featbl]" data-aos-delay="200">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 150 150"
                                    style=" fill:#ffffff;" width="40" height="40" style="">
                                    <g>
                                        <path
                                            d="M52.01,110.22c-9.96-1.91-18.86-6.79-25.76-13.68c-6.9-6.9-11.77-15.8-13.68-25.77h6.21c1.82,8.28,5.99,15.68,11.78,21.47 c5.78,5.78,13.18,9.95,21.46,11.78V110.22L52.01,110.22z M96.31,64.48c-1.68,0-3.04-1.36-3.04-3.04c0-1.68,1.36-3.04,3.04-3.04 h23.52c1.68,0,3.04,1.36,3.04,3.04c0,1.68-1.36,3.04-3.04,3.04H96.31L96.31,64.48L96.31,64.48z M64.48,26.57 c0,1.68-1.36,3.04-3.04,3.04c-1.68,0-3.04-1.36-3.04-3.04V3.04C58.4,1.36,59.76,0,61.44,0c1.68,0,3.04,1.36,3.04,3.04V26.57 L64.48,26.57L64.48,26.57z M64.48,119.84c0,1.68-1.36,3.04-3.04,3.04c-1.68,0-3.04-1.36-3.04-3.04V96.31c0-4,6.08-4,6.08,0V119.84 L64.48,119.84L64.48,119.84z M3.04,64.48C1.36,64.48,0,63.12,0,61.44c0-1.68,1.36-3.04,3.04-3.04h23.52c1.68,0,3.04,1.36,3.04,3.04 c0,1.68-1.36,3.04-3.04,3.04H3.04L3.04,64.48L3.04,64.48z M61.43,46.94c8.01,0,14.5,6.49,14.5,14.5c0,8.01-6.49,14.5-14.5,14.5 c-8.01,0-14.5-6.49-14.5-14.5C46.94,53.43,53.43,46.94,61.43,46.94L61.43,46.94z M12.56,51.92c1.91-9.96,6.79-18.86,13.68-25.76 c6.9-6.9,15.8-11.78,25.77-13.69v6.22c-8.28,1.82-15.68,5.99-21.47,11.78c-5.78,5.78-9.96,13.17-11.77,21.45H12.56L12.56,51.92z M70.86,12.46c9.97,1.91,18.87,6.79,25.77,13.69c6.9,6.89,11.78,15.81,13.68,25.77h-6.21c-1.82-8.28-5.99-15.69-11.78-21.47 c-5.78-5.79-13.18-9.96-21.46-11.78V12.46L70.86,12.46z M110.32,70.77c-1.91,9.96-6.79,18.87-13.69,25.77 c-6.9,6.9-15.8,11.78-25.77,13.69v-6.21c16.55-3.64,29.62-16.69,33.25-33.25H110.32L110.32,70.77z" />
                                    </g>
                                </svg>
                                <div class="cv cg cq hi rr">Accurate</div>
                                <div class="ou pn nk">Measure from a distance and obtain up to 90% accuracy on
                                    measurement.</div>
                            </a>

                            <!-- 4th item -->
                            <a class="text-white ip ur lt dx fo fd fj vq pu" href="#0" data-aos="fade-down"
                                data-aos-anchor="[data-aos-id-featbl]" data-aos-delay="300">
                                {{-- <svg class="sf iy ro" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fq"
                                        d="M20.243 6.757l.707.707-1.414 1.414-.707-.707a4 4 0 00-5.658 0l-.707.707-1.414-1.414.707-.707a6 6 0 018.486 0zm3.535-3.535l.707.707-1.414 1.414-.707-.707a9 9 0 00-12.728 0l-.707.707L7.515 3.93l.707-.707c4.296-4.296 11.26-4.296 15.556 0zM9 17.212V16a7 7 0 00-7-7H1V7h1a9 9 0 019 9v.788l2.302 5.18L11 23.117V24a4 4 0 01-4 4H5v3H3v-5h4a2 2 0 002-2v-2.118l1.698-.85L9 17.213zm12-.424V16a9 9 0 019-9h1v2h-1a7 7 0 00-7 7v1.212l-1.698 3.82 1.698.85V24a2 2 0 002 2h4v5h-2v-3h-2a4 4 0 01-4-4v-.882l-2.302-1.15L21 16.787zM16 12a1 1 0 110-2 1 1 0 010 2z"
                                        fill-rule="nonzero"></path>
                                </svg> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" style=" fill:#ffffff;"
                                    width="40" height="40" style="">
                                    <path
                                        d="M 28.5 11 C 24.208865 11 20.47903 13.219779 18.230469 16.521484 C 17.514927 16.271851 16.802 16 16 16 C 12.663611 16 9.9441495 18.386477 9.2519531 21.523438 C 5.6452019 22.697624 3 26.012016 3 30 C 3 34.958516 7.0414839 39 12 39 L 39 39 C 43.406438 39 47 35.406438 47 31 C 47 27.295312 44.418791 24.276585 40.988281 23.375 C 40.919258 16.542274 35.348719 11 28.5 11 z M 28.5 13 C 34.310508 13 39 17.689492 39 23.5 C 39 23.625271 38.983456 23.796788 38.972656 24.027344 A 1.0001 1.0001 0 0 0 39.833984 25.066406 C 42.753937 25.472885 45 27.958721 45 31 C 45 34.325562 42.325562 37 39 37 L 12 37 C 8.1225161 37 5 33.877484 5 30 C 5 26.713745 7.2557355 23.980514 10.294922 23.21875 A 1.0001 1.0001 0 0 0 11.044922 22.373047 C 11.353436 19.906605 13.440292 18 16 18 C 16.787438 18 17.525663 18.186534 18.193359 18.513672 A 1.0001 1.0001 0 0 0 19.492188 18.128906 C 21.3267 15.060117 24.660266 13 28.5 13 z">
                                    </path>
                                </svg>
                                <div class="cv cg cq hi rr">Store Measurement</div>
                                <div class="ou pn nk">Store every measurement in the cloud, retrieve anytime.</div>
                            </a>

                        </div>

                    </div>
                </div>
            </section>
        </main>

        <!-- Site footer -->
        <footer class="ti">
            <div class="sk ns ls gp">
                <div class="lf bu al av vr re">

                    <!-- Footer illustration -->
                    <div class="z tw" aria-hidden="true">
                        {{-- <svg class="tr tc ta ow od rt ma" width="800" height="264" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="400" cy="400" r="400" fill="url(#footerglow_paint0_radial)" fill-opacity=".4">
                            </circle>
                            <defs>
                                <radialGradient id="footerglow_paint0_radial" cx="0" cy="0" r="1"
                                    gradientUnits="userSpaceOnUse" gradientTransform="rotate(90 0 400) scale(315.089)">
                                    <stop stop-color="#3ABAB4"></stop>
                                    <stop offset="1" stop-color="#3ABAB4" stop-opacity=".01"></stop>
                                </radialGradient>
                            </defs>
                        </svg> --}}
                    </div>

                    <!-- Top area: Blocks -->
                    <div class="iv yj uc xn nj yt">

                        <!-- 1st block -->
                        <div class="gx bk">
                            <!-- Logo -->
                            <x-jet-application-mark />
                        </div>

                        <!-- 2nd, 3rd, 4th and 5th blocks -->
                        <div class="gk b_ iv ue yq uc" style="display:flex; flex-direction: row-reverse">

                            <!-- 5th block -->
                            <div class="cm">
                                <h6 class="c_ cz rn">Support</h6>
                                <ul>
                                    <li class="rr">
                                        <a class="text-gray-400 dark--text-gray-400 dr ph pv pw"
                                            href="#0">Documentation</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- 2nd block -->
                            <div class="cm">
                                <h6 class="c_ cz rn">Products</h6>
                                <ul>
                                    <li class="rr">
                                        <a class="text-gray-400 dark--text-gray-400 dr ph pv pw">Dimensions</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

                    <!-- Bottom area -->
                    <div class="yf bt bn">

                        <!-- Social links -->
                        <ul class="ip nk gb yn yr">
                            <li>
                                <a class="text-white bg-teal-500 ip uf uo mt va dr hover--bg-teal-600 as ph pv pw"
                                    href="https://twitter.com/milhensem" aria-label="Twitter">
                                    <svg class="sf iy fq" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24 11.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H8c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="nv">
                                <a class="text-white bg-teal-500 ip uf uo mt va dr hover--bg-teal-600 as ph pv pw"
                                    href="http://azmilazizi.github.io" aria-label="Github">
                                    <svg class="sf iy fq" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 8.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V22c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="nv">
                                <a class="text-white bg-teal-500 ip uf uo mt va dr hover--bg-teal-600 as ph pv pw"
                                    href="https://www.facebook.com/azmilazizi.nordin" aria-label="Facebook">
                                    <svg class="sf iy fq" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.023 24L14 17h-3v-3h3v-2c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V14H21l-1 3h-2.72v7h-3.257z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="nv">
                                <a class="text-white bg-teal-500 ip uf uo mt va dr hover--bg-teal-600 as ph pv pw"
                                    href="https://www.instagram.com/azmilazizi/" aria-label="Instagram">
                                    <svg class="sf iy fq" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20.145" cy="11.892" r="1"></circle>
                                        <path
                                            d="M16 20c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z">
                                        </path>
                                        <path
                                            d="M20 24h-8c-2.056 0-4-1.944-4-4v-8c0-2.056 1.944-4 4-4h8c2.056 0 4 1.944 4 4v8c0 2.056-1.944 4-4 4zm-8-14c-.935 0-2 1.065-2 2v8c0 .953 1.047 2 2 2h8c.935 0 2-1.065 2-2v-8c0-.935-1.065-2-2-2h-8z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="nv">
                                <a class="text-white bg-teal-500 ip uf uo mt va dr hover--bg-teal-600 as ph pv pw"
                                    href="https://www.linkedin.com/in/azmilazizinordin/" aria-label="Linkedin">
                                    <svg class="sf iy fq" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.3 8H8.7c-.4 0-.7.3-.7.7v14.7c0 .3.3.6.7.6h14.7c.4 0 .7-.3.7-.7V8.7c-.1-.4-.4-.7-.8-.7zM12.7 21.6h-2.3V14h2.4v7.6h-.1zM11.6 13c-.8 0-1.4-.7-1.4-1.4 0-.8.6-1.4 1.4-1.4.8 0 1.4.6 1.4 1.4-.1.7-.7 1.4-1.4 1.4zm10 8.6h-2.4v-3.7c0-.9 0-2-1.2-2s-1.4 1-1.4 2v3.8h-2.4V14h2.3v1c.3-.6 1.1-1.2 2.2-1.2 2.4 0 2.8 1.6 2.8 3.6v4.2h.1z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        </ul>

                        <!-- Middle links -->
                        <div class="cm gw hu rn yr">
                            <a class="text-gray-400 dark--text-gray-400 dr ph pv pw" href="#0">Terms</a> · <a
                                class="text-gray-400 dark--text-gray-400 dr ph pv pw" href="#0">Privacy Policy</a>
                        </div>

                        <!-- Copyrights note -->
                        <div class="text-gray-400 dark--text-gray-400 cm ri">© Azmil Azizi. All rights reserved.</div>

                    </div>

                </div>
            </div>
        </footer>

    </div>

    @section('scripts')
    <script src="js/alpinejs.min.js" defer=""></script>
    <script src="js/aos.js"></script>
    {{-- <script src="js/swiper-bundle.min.js"></script> --}}
    <script src="js/main.js"></script>
    @endsection

</x-guest-layout>
