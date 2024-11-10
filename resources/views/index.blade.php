<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aaron Kongdoh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rock+Salt&display=swap');
        body{
            background-color: #e2e2e2;
            margin: 0%;
            font-family: 'Poppins', sans-serif;
            font-weight: 900;
        }
        .rocksalt{
            font-family:'Rock Salt', cursive;
            font-weight:400;
        }
        .scrolldown{
            text-align: center;
            font-weight: 700;
            text-decoration: none;
            color: #495057;
        }
        #scrollspy {
            position: fixed;
            width: 150px;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            height: auto;
        }
        #scrollspy .nav-link {
            color: #495057; /* Warna teks sebelum aktif, seperti abu-abu gelap */
        }
        #scrollspy .nav-link.active {
            color: #fff; /* Warna teks menjadi putih */
            background-color: black; /* Warna latar belakang item aktif */
            font-size: 20px;
        }
        .nav-link{
            text-align: right;
        }
        h1{
            font-size: 84px;
            text-align: center;
            -webkit-text-stroke: 2px black;
            color: black
        }
        h2{
            font-size: 60px;
            text-align: center;
            -webkit-text-stroke: 2.5px black;
            color: black
        }
        h3{
            font-size:48px;
            text-align: center;
            -webkit-text-stroke: 1px black;
            color: black
        }
        .bagian{
            height: 100vh;
            padding-top: 15vh;
            text-align: center;
        }
        .pic-1{
            max-height: 40%;
            width: auto;
        }
        .pic-2{
            max-height: 50%;
            width: auto;
        }
        .pic-3{
            max-height: 50%;
            width: auto;
        }
        .btn-more{
            top: 5px
        }
        .projects{
            text-align: right
        }
        .item{
            top: 50%;
            transform: translateY(-50%);
        }
        .btn{
            font-weight: 400;
            font-size: 20px;
            color: white;
            text-align: center;
            background-color: black;
        }
        .btn:hover{
            font-weight: 400;
            font-size: 20px;
            color: white;
            text-align: center;
            background-color: black;
        }
        </style>

</head>
<body data-bs-spy="scroll" data-bs-target="#scrollspy" data-bs-offset="0" tabindex="0">
    
    {{-- Logo --}}
    <img src="{{ asset('picture/Aroon.svg') }}" alt="Logo" class="fixed-top"style="left:30px; top:30px;">

    {{-- bag 1 --}}
    <div class="bagian container-md" id="welcome">
        <img class="pic-1 mx-auto d-block img-fluid" src="{{ asset('picture/cat.jpg') }}" alt="gambar">
        <br>
        <h1>Something about <br>Aaron Kongdoh</h1>
    </div>
    
    {{-- bag 2 --}}
    <div class="bagian container-md" id="about-me">
        <h2>aboutme?</h2>
        <br>
        <img src="{{ asset('picture/cat.jpg') }}" alt="gambar" class="pic-2 mx-auto d-block img-fluid">
        <p>wht do u think?</p>
        <a href="#about-me" class="btn btn-more">Learn more &rarrw;</a>
    </div>

    {{-- bag 3 --}}
    <div class="bagian container-md" id="project" >
        <h2>still curious?</h2>
        <br>
        <div class="row">
            <div class="col-6">
                <h3 class="projects">lemme <span class="rocksalt">show</span> u<br><span style="color: #E15554; -webkit-text-stroke: 2px #E15554;"> something hot</span></h3>
                <p class="projects" style="font-size: 16px; font-weight:600;">*my projects!</p>
                <a href="#viewmore" class="btn btn-more float-end">View more &rarrw;</a>
            </div>
            <div class="col-6">
                <img src="{{ asset('picture/cat.jpg') }}" alt="gambar" class="pic-3 float-start">
            </div>
        </div>
    </div>

    {{-- bag 4 --}}
    <div class="bagian container-md" id="contact">
        <h2>is there a way to contact you?</h2>
        <h3>Don't worry, i got you 🫵</h3>
        social media disini
    </div>
    
    {{-- sidebar scrollspy --}}
    <nav class="flex-column align-items-stretch" id="scrollspy">
        <nav class="nav nav-pills flex-column items-end">
            <a class="nav-link" href="#welcome" data-index="0">Top • </a>
            <a class="nav-link" href="#about-me" data-index="1">About me • </a>
            <a class="nav-link" href="#project" data-index="2">Project • </a>
            <a class="nav-link" href="#contact" data-index="3">Contact • </a>
        </nav>
    </nav>


    <script>
        const sections = ["welcome", "about-me", "project", "contact"];
        let currentSectionIndex = 0;
    
        // Update the current section index on sidebar link click
        document.querySelectorAll('#scrollspy .nav-link').forEach((link) => {
            link.addEventListener('click', (event) => {
                const index = parseInt(event.target.getAttribute('data-index'));
                if (!isNaN(index)) {
                    currentSectionIndex = index;
                }
            });
        });
    
        // Listen to the wheel event for scroll navigation
        window.addEventListener('wheel', (event) => {
            // Prevent default scrolling behavior to avoid the small unwanted scroll
            event.preventDefault();
    
            if (event.deltaY > 0) {
                // Scroll down
                if (currentSectionIndex < sections.length - 1) currentSectionIndex++;
            } else {
                // Scroll up
                if (currentSectionIndex > 0) currentSectionIndex--;
            }
    
            // Smooth scroll to the targeted section
            document.getElementById(sections[currentSectionIndex]).scrollIntoView({
                behavior: 'smooth'
            });
        }, { passive: false }); // `passive: false` to allow calling preventDefault
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</body>
</html>