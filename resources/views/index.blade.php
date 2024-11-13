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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rock+Salt&display=swap');

        @keyframes fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        body {
            background-color: #e2e2e2;
            margin: 0%;
            font-family: 'Poppins', sans-serif;
            font-weight: 900;
        }

        .rocksalt {
            font-family: 'Rock Salt', cursive;
            font-weight: 400;
        }

        #scrollspy {
            position: fixed;
            width: 150px;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            height: auto;
        }

        #scrollspy {
            opacity: 20%;
            transition: opacity 0.7s ease;
        }

        #scrollspy:hover {
            opacity: 100%;
        }

        #scrollspy .nav-link {
            color: #495057;
            text-align: right;
        }

        #scrollspy .nav-link.active {
            color: #fff;
            font-weight: 700;
            background-color: black;
            font-size: 20px;
        }

        h1 {
            font-size: 72px;
            text-align: center;
            -webkit-text-stroke: 2px black;
            color: black
        }

        h2 {
            font-size: 60px;
            text-align: center;
            -webkit-text-stroke: 2.5px black;
            color: black
        }

        h3 {
            font-size: 48px;
            text-align: center;
            -webkit-text-stroke: 1px black;
            color: black
        }

        h4 {
            font-size: 24px;
            text-align: center;
            -webkit-text-stroke: 1px black;
            color: black
        }

        .cv {
            color: black;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .cv:hover {
            color: #E15554
        }

        .bagian {
            height: 100vh;
            padding-top: 15vh;
            text-align: center;
            animation: fade-in linear;
            animation-timeline: view();
            animation-range: entry 0% cover 50%;
        }

        .pic {
            transition: transform 0.7s ease, filter 0.7s ease, box-shadow 0.7s ease;
            box-shadow: #495057;
            filter: grayscale(100%);
            border-radius: 12px
        }

        .pic:hover {
            transform: translateY(-8px);
            filter: none;
        }

        .pic-1 {
            max-height: 40vh;
            width: 60%;
            object-fit: cover;
            filter: blur(8px);

        }

        .pic-2 {
            max-height: 50vh;
            width: auto;
        }

        .project-1 {
            max-height: 40vh;
            width: auto;
        }

        /* .project-1:hover{
            cursor: url('{{ asset('picture/logo_parkirki.svg') }}');
        } */
        .project-2 {
            max-height: 35vh;
            width: auto;
        }

        .btn-more {
            top: 5px
        }

        .projects {
            text-align: right
        }

        .item {
            top: 50%;
            transform: translateY(-50%);
        }

        .btn {
            font-weight: 400;
            font-size: 20px;
            color: white;
            text-align: center;
            background-color: black;
        }

        .btn:hover {
            font-weight: 400;
            font-size: 20px;
            color: black;
            text-align: center;
            background-color: none;
            border: 1px solid black;
        }

        .progress {
            /* background-color: #919191 */
            box-shadow: 2px 2px 0px #495057
        }

        .progress-bar {
            background-color: black;
            border: #495057;
            transition: background-color 0.3s ease;
        }

        .progress-bar:hover {
            background-color: #495057;
        }

        .contact {
            font-size: 84px;
            transition: color 0.3s ease;
            text-decoration: none;
            color: rgb(29, 29, 29);
        }

        .contact:hover {
            color: #E15554;
        }

        .quotes {
            padding-top: 10vh;
            color: #495057;
            font-family: 'Times New Roman', Times, serif;
        }

        .par-obj {
            transition: transform 0.12s ease;
        }

        .sub-text {
            font-size: 16px;
            font-weight: 500;
        }
    </style>

</head>

<body data-bs-spy="scroll" data-bs-target="#scrollspy" data-bs-offset="0" tabindex="0">

    {{-- paralax bekgron --}}
    <img src="{{ asset('picture/object2.svg') }}" alt="" class="par-obj" data-value="0.01"
        style="left:20vw; top:10vh; position: fixed;" width="auto" height="auto">
    <img src="{{ asset('picture/object.svg') }}" alt="" class="par-obj" data-value="-0.1"
        style="left:10vw; top:40vh; position: fixed;" width="20px" height="auto">
    <img src="{{ asset('picture/object.svg') }}" alt="" class="par-obj" data-value="-0.1"
        style="right:30vw; top:20vh; position: fixed;" width="20px" height="auto">
    <img src="{{ asset('picture/object2.svg') }}" alt="" class="par-obj" data-value="0.2"
        style="left:24vw; bottom:12vh; position: fixed;" width="20px" height="auto">
    <img src="{{ asset('picture/object2.svg') }}" alt="" class="par-obj" data-value="-0.02"
        style="right:5vw; top:34vh; position: fixed;" width="70px" height="auto">
    <img src="{{ asset('picture/object2.svg') }}" alt="" class="par-obj" data-value="0.03"
        style="right:10vw; bottom:20vh; position: fixed;" width="200px" height="auto">

    {{-- Logo --}}
    <img src="{{ asset('picture/Aroon.svg') }}" alt="Logo" class="fixed-top logo"style="left:20px; top:20px;">

    {{-- bag 1 --}}
    <div class="bagian container-md par-obj" id="welcome" data-value="0.005">
        <img class="pic pic-1 mx-auto d-block img-fluid" src="{{ asset('picture/cat.jpg') }}" alt="gambar">
        <br>
        <h1>Something about <br><a href="#" class="cv">Aaron Kongdoh</a></h1>
    </div>

    <a href="#" class="par-obj cv" data-value="0.02" style="right: 18vw; bottom: 18vh; position: absolute;">CV!(or
        here)</a>
    <img src="{{ asset('picture/arrow.svg') }}" alt="" class="par-obj" data-value="0.03"
        style="right:26vw; bottom:21vh; position: absolute;" width="90px" height="auto">

    <div id="about-me">
        {{-- bag 2 --}}
        <div class="bagian container-md par-obj" data-value="0.005">
            <h2>aboutme?</h2>
            <br>
            <div class="row">
                <div class="col">
                    <img src="{{ asset('picture/cat.jpg') }}" alt="gambar"
                        class="pic pic-2 mx-auto d-block img-fluid">
                    <p>wht do u think?</p>
                    {{-- <a href="aboutme" class="btn btn-more">Learn more &rarrw;</a> --}}
                </div>
                <div class="col-7">
                    <p style="text-align: justify; font-weight:600">My name is Aaron Jevon Benedict Kongdoh, but they
                        call me Aaron for short. I’m an Informatics student at Universitas
                        Ciputra Makassar with a passion for blending tech and creativity. Every project feels like a new
                        adventure, a chance to experiment, and a fresh start for innovative ideas. I love tackling
                        challenges head-on, viewing them as opportunities to learn, grow, and craft solutions that are
                        both impactful and engaging.</p>
                    <p style="text-align: justify; font-weight:600">With each problem, I strive to think outside the
                        box, bringing together technical know-how with a spark of creativity to create solutions that
                        stand out. My goal? To make technology not only effective but memorable and user-friendly. I’m
                        driven by the idea that tech has no limits—and I’m excited to keep exploring what’s possible.
                    </p>
                    {{-- <p style="text-align: justify; font-weight:600">I’m an Informatics student at Universitas Ciputra Makassar, driven by a deep enthusiasm for technology and innovation. For me, every project is a doorway to fresh ideas and exciting experiments. I’m always eager to dive into new challenges, seeing each one as an opportunity to learn, grow, and test creative solutions.</p>
                    <p style="text-align: justify; font-weight:600">I approach problem-solving with a unique perspective, aiming not only for effective outcomes but also for solutions that are engaging and memorable. My passion lies in thinking beyond conventional boundaries, combining technical skills with a creative mindset to develop technology that’s both impactful and user-friendly.</p>
                    <p style="text-align: justify; font-weight:600">Through every project, I strive to understand problems from different angles, experimenting with methods and concepts to bring innovative solutions to life. I believe that by pushing the limits of what’s possible, I can make a meaningful difference in the world of technology, and I’m excited to keep exploring and growing in this journey.</p> --}}
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
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <br>
                            <p class="sub-text">Proficient in C++ for Arduino, with experience in building structured
                                code for robotics and IoT projects.</p>
                        </div>
                        <div class="col-4 par-obj" data-value="0.04">
                            <h4>Java</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
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
                            <p class="sub-text">Proficient in PHP, with experience in building robust APIs using the
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
                <div class="col-3 float-start">
                    <h3>idk wht to put here</h3>
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
                <a href="https://github.com/HainzelK/Siata"><img src="{{ asset('picture/siata_mockup.png') }}"
                        alt="gambar" class="pic project-2 float-start"></a>
                <a href="https://github.com/denywa/Parkirki-ALP"><img
                        src="{{ asset('picture/parkirki_mockup2.png') }}" alt="gambar"
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
            data-value="0.02" style="font-size:84px;"></a>
        <br>
        <a href="https://x.com/florist_yrt" target="_blank" class="fa fa-twitter par-obj contact" data-value="0.009"
            style="font-size:84px;"></a>
        <a href="https://wa.me/6285211411408" target="_blank" class="fa fa-whatsapp par-obj contact"
            data-value="0.01" style="font-size:84px;"></a>
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


    <script>
        // Scroll
        const sections = ["welcome", "about-me", "skill", "project", "contact"];
        let currentSectionIndex = 0;

        document.querySelectorAll('#scrollspy .nav-link').forEach((link) => {
            link.addEventListener('click', (event) => {
                const index = parseInt(event.target.getAttribute('data-index'));
                if (!isNaN(index)) {
                    currentSectionIndex = index;
                }
            });
        });

        window.addEventListener('wheel', (event) => {
            event.preventDefault();

            if (event.deltaY > 0) {
                if (currentSectionIndex < sections.length - 1) currentSectionIndex++;
            } else {
                if (currentSectionIndex > 0) currentSectionIndex--;
            }

            document.getElementById(sections[currentSectionIndex]).scrollIntoView({
                behavior: 'smooth'
            });
        }, {
            passive: false
        }); // `passive: false` to allow calling preventDefault

        // parallax
        document.addEventListener("mousemove", parallax);

        function parallax(e) {
            document.querySelectorAll(".par-obj").forEach(function(move) {

                var moving_value = move.getAttribute("data-value");
                var x = e.clientX * moving_value;
                var y = e.clientY * moving_value;

                move.style.transform = `translateX(${x}px) translateY(${y}px)`;
            })
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</body>

</html>
