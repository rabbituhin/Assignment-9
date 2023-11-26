@extends('layouts.app')

@section('content')
<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>About</h2>
            <p>"Greetings on my portfolio site! I'm Md.Fazla Rabbi Tuhin, an enthusiastic student with a strong drive, currently
                working towards a degree in Computer Science and Engineering. Excited to showcase my experiences,
                projects, and skills with you."
            </p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="images/pro.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>Web Design &amp; Developer.</h3>
                    Throughout my academic journey, I have gained a solid foundation in programming languages such as
                    Java,
                    C++, and Python. I have developed a strong understanding of data structures, algorithms, and
                    software
                    development principles. I enjoy solving complex problems and leveraging my skills to create
                    innovative and
                    efficient solutions.
                </p>
            </div>
        </div>

    </div>


<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
    <div class="container">

        <div class="section-title">
            <h2>Resume</h2>
            <p>Welcome to my resume section! Here you will find a comprehensive overview of my educational background,
                professional experience, and key skills.</p>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
                <h3 class="resume-title">Sumary</h3>
                <div class="resume-item pb-0">
                    <h4>Md.Fazla Rabbi Tuhin</h4>

                    <ul>
                        <li>Sylhet, Bangladesh</li>
                        <li>+8801799016497</li>
                        <li>tuhin1886@gmail.com</li>
                    </ul>
                </div>

                <h3 class="resume-title">Education</h3>
                <div class="resume-item">
                    <h4>B.Sc in CSE</h4>
                    <h5>2019 - 2023</h5>
                    <p><em>Leading University, Sylhet</em></p>

                </div>
                <div class="resume-item">
                    <h4>Higher Secondary Certificate</h4>
                    <h5>2016 - 2018</h5>
                    <p><em>Sylhet Govt. College, Sylhet</em></p>
                </div>

                <div class="resume-item">
                    <h4>Secondary School Certificate</h4>
                    <h5>2015 - 2016</h5>
                    <p><em>Osmani Medical High School, Sylhet</em></p>
                </div>
            </div>
            </div>
        </div>

    </div>
</section>
<!-- End Resume Section -->
@endsection