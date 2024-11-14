<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aaron Kongdoh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#scrollspy" data-bs-offset="0" tabindex="0">

    {{-- paralax bekgron --}}
    <img src="{{ asset('assets/picture/object2.svg') }}" alt="" class="par-obj" data-value="0.01"
        style="left:20vw; top:10vh; position: fixed;" width="auto" height="auto">
    <img src="{{ asset('assets/picture/object.svg') }}" alt="" class="par-obj" data-value="-0.1"
        style="left:10vw; top:40vh; position: fixed;" width="20px" height="auto">
    <img src="{{ asset('assets/picture/object.svg') }}" alt="" class="par-obj" data-value="-0.1"
        style="right:30vw; top:20vh; position: fixed;" width="20px" height="auto">
    <img src="{{ asset('assets/picture/object2.svg') }}" alt="" class="par-obj" data-value="0.2"
        style="left:24vw; bottom:12vh; position: fixed;" width="20px" height="auto">
    <img src="{{ asset('assets/picture/object2.svg') }}" alt="" class="par-obj" data-value="-0.02"
        style="right:5vw; top:34vh; position: fixed;" width="70px" height="auto">
    <img src="{{ asset('assets/picture/object2.svg') }}" alt="" class="par-obj" data-value="0.03"
        style="right:10vw; bottom:20vh; position: fixed;" width="200px" height="auto">

    {{-- Logo --}}
    <img src="{{ asset('assets/picture/Aroon.svg') }}" alt="Logo" class="fixed-top logo">

    {{-- bag 1 --}}
    <div class="bagian container-md par-obj" id="welcome" data-value="0.005">
        <img class="pic pic-1 mx-auto d-block img-fluid" src="{{ asset('assets/picture/cat.jpg') }}" alt="gambar">
        <br>
        <h1>Something about <br><a href="{{ asset('assets/picture/CV.pdf') }}" target="_blank" class="cv">Aaron Kongdoh</a>
        </h1>
    </div>

    <a href="{{ asset('assets/picture/CV.pdf') }}" target="_blank" class="par-obj cv" id="cv-here"
        data-value="0.02">CV!(or
        here)</a>
    <img src="{{ asset('assets/picture/arrow.svg') }}" alt="" class="par-obj" id="cv-arrow" data-value="0.03"
        width="90px" height="auto">

    <div id="about-me">
        {{-- bag 2 --}}
        <div class="bagian container-md par-obj" data-value="0.005">
            <h2>aboutme?</h2>
            <br>
            <div class="row">
                <div class="col">
                    <img src="{{ asset('assets/picture/saya2.jpg') }}" alt="gambar"
                        class="pic pic-2 mx-auto d-block img-fluid">
                    <p>wht do u think?</p>
                </div>
                <div class="col-7">
                    <p class="about-me-text">My name is Aaron Jevon Benedict Kongdoh, but they
                        call me Aaron for short. I’m an Informatics student at Universitas
                        Ciputra Makassar with a passion for blending tech and creativity. Every project feels like a new
                        adventure, a chance to experiment, and a fresh start for innovative ideas. I love tackling
                        challenges head-on, viewing them as opportunities to learn, grow, and craft solutions that are
                        both impactful and engaging.</p>
                    <p class="about-me-text">With each problem, I strive to think outside the
                        box, bringing together technical know-how with a spark of creativity to create solutions that
                        stand out. My goal? To make technology not only effective but memorable and user-friendly. I’m
                        driven by the idea that tech has no limits—and I’m excited to keep exploring what’s possible.
                    </p>
                    <p class="about-me-text">In my downtime, you’ll probably find me strumming my
                        guitar, sketching unique faces, or double-tapping every cute cat post I come across on
                        Instagram. And if I’m not doing that, I’m likely diving into JKT48 content—watching
                        performances, cheering on my favorite members, or... let’s be real, maybe just catching up on
                        sleep!
                    </p>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        {{-- bag 2 - skill --}}
        <div class="bagian container-md par-obj" id="skill" data-value="0.005">
            <h2>my skill?</h2>
            <br>
            <div class="row gx-5 par-obj" data-value="0.008">
                <div class="col-9">
                    <div class="row gy-5 gx-5">
                        <div class="col-4 par-obj" data-value="0.02">
                            <h4>Python</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <br>
                            <p class="sub-text">Skilled in Python programming with a solid understanding of syntax
                                and machine learning fundamentals.</p>
                        </div>
                        <div class="col-4 par-obj" data-value="0.01">
                            <h4>C++</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <br>
                            <p class="sub-text">Familiar in C++ for Arduino, with experience in building structured
                                code for robotics and IoT projects.</p>
                        </div>
                        <div class="col-4 par-obj" data-value="0.04">
                            <h4>Java</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <br>
                            <p class="sub-text">Skilled in Java for backend development using SpringBoot, with a solid
                                understanding of OOP principles.</p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row gy-5 gx-5">
                        <div class="col-1"></div>
                        <div class="col-5 par-obj" data-value="0.02">
                            <h4>PHP</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <br>
                            <p class="sub-text">Familiar with PHP, with experience in building robust APIs using the
                                Laravel framework.</p>
                        </div>
                        <div class="col-5 par-obj" data-value="0.01">
                            <h4>Video Editing</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <br>
                            <p class="sub-text">Skilled in video editing and motion graphics using Alight Motion, with
                                experience in creating dynamic visuals and animations on mobile devices.</p>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
                <div class="col-3" style="margin-top: 20vh">
                    <h3>kinda mid<br>:<</h3>
                </div>
            </div>
        </div>
    </div>

    {{-- bag 3 --}}
    <div class="bagian container-md par-obj" id="project" data-value="0.005">
        <h2>still curious?</h2>
        <br>
        <br>
        <div class="row par-obj" data-value="0.008">
            <div class="col-5">
                <h3 class="projects">lemme <span class="rocksalt">show</span> u<br><span
                        style="color: #E15554; -webkit-text-stroke: 2px #E15554;"> something cool</span></h3>
                <p class="projects" style="font-size: 16px; font-weight:600;">*my projects!</p>
                <a href="https://github.com/trfyrt" class="btn btn-more float-end">Discover more <i
                        class="fa fa-github"></i> &rarrw;</a>
            </div>
            <div class="col-7">
                <a href="https://github.com/HainzelK/Siata"><img src="{{ asset('assets/picture/siata_mockup.png') }}"
                        alt="gambar" class="pic project-2 float-start"></a>
                <a href="https://github.com/denywa/Parkirki-ALP"><img
                        src="{{ asset('assets/picture/parkirki_mockup2.png') }}" alt="gambar"
                        class="pic project-1 float-start"></a>
            </div>
        </div>
    </div>

    {{-- bag 4 --}}
    <div class="bagian container-md par-obj" id="contact" data-value="0.005">
        <h2>my contact?</h2>
        <br>
        <h3>Don't worry, i got you 🫵</h3>
        <br>
        <br>
        <a href="https://www.instagram.com/aaronjevon06/" target="_blank" class="fa fa-instagram par-obj contact"
            data-value="0.02"></a>
        <br>
        <a href="https://x.com/florist_yrt" target="_blank" class="fa fa-twitter par-obj contact" data-value="0.009"
            ></a>
        <a href="https://wa.me/6285211411408" target="_blank" class="fa fa-whatsapp par-obj contact"
            data-value="0.01"></a>
        <br>
        <p class="quotes">“Our only limitations are those we set up in our own minds”<br> ― Napoleon Hill</p>
        <br>
        <p>&copy;Aaron Jevon Benedict Kongdoh</p>
    </div>

    {{-- sidebar scrollspy --}}
    <nav class="flex-column align-items-stretch" id="scrollspy">
        <nav class="nav nav-pills flex-column items-end">
            <a class="nav-link" href="#welcome" data-index="0">Top • </a>
            <a class="nav-link" href="#about-me" data-index="1">About me • </a>
            <a class="nav-link" href="#project" data-index="3">Project • </a>
            <a class="nav-link" href="#contact" data-index="4">Contact • </a>
        </nav>
    </nav>

    <script src="/assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</body>

</html>
