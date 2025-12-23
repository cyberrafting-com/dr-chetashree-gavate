@php($title = 'Dr. Chetashree Gavate | ENT Specialist in Thane & Navi Mumbai | Otolaryngologist')
@section('meta_desc')
Advanced ENT Care for Better Breathing, Hearing & Living. Expert medical and surgical solutions for ear, nose & throat conditions. Consult Dr. Chetashree Gavate, MS - Consultant ENT Surgeon & Allergologist in Thane and Navi Mumbai. Specialized in FESS, tonsillectomy, septoplasty, tympanoplasty, thyroid surgery, allergies, and vertigo treatment.
@endsection

@extends('layouts.default')

@section('content')
    <div class="page">
        <!-- Hero / Banner -->
        <main id="home" class="hero">
            <div class="container">
                <div class="hero-inner">
                    <div class="hero-left">
                        <h1 class="hero-title">
                            Advanced ENT Care for Better <br> Breathing,
                            Hearing &amp; Living
                        </h1>
                        <p class="hero-subtitle">
                            Expert medical and surgical solutions for ear, nose &amp;
                            throat conditions with compassionate patient care.
                        </p>
                        <div class="hero-actions">
                            <a href="tel:+918452903111" class="btn btn-primary">
                                <span>Book Appointment</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- About Section -->
        <section id="about" class="about">
            <div class="container">
                <div class="about-inner">
                    <div class="about-photo-card">
                        <img src="{{ asset('/resources/assets/images/dr-img.png') }}" alt="Dr. Chetashree Gavate" class="about-photo">
                    </div>
                    <div class="about-content">
                        <p class="section-subtitle">About</p>
                        <h2 class="section-heading">Dr. Chetashree Gavate, MS</h2>
                        <p class="section-description">
                            <strong>Consultant ENT Surgeon | Otolaryngologist</strong><br />
                            <span>M.B.B.S, M.S. ENT</span>
                        </p>
                        <p class="section-description" style="margin-top: 0.6rem;">
                            Dr. Chetashree Gavate is a board-certified ENT specialist with extensive experience in
                            diagnosing and
                            treating conditions involving the ear, nose, throat, and head &amp; neck structures. With strong
                            surgical
                            expertise in procedures like FESS, tonsillectomy, septoplasty, tympanoplasty, and
                            thyroid/parathyroid
                            surgery, she combines precision, modern technology, and compassionate care to enhance patient
                            outcomes.
                        </p>
                        <p class="section-description" style="margin-top: 0.6rem;">
                            She is committed to providing customized treatment plans focused on long-term relief, improved
                            breathing, better hearing, and a healthier quality of life.
                        </p>
                        <p class="section-description" style="margin-top: 0.6rem;">
                            Currently practicing across leading hospitals in Thane and Navi Mumbai, Dr. Gavate is also a
                            certified allergologist and is pursuing fellowship training in vertigo.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="services">
            <div class="container">
                <div class="services-header">
                    <div>
                        <p class="section-subtitle">Services</p>
                        <h2 class="section-heading">Services</h2>
                    </div>
                </div>

                <div class="services-grid">
                    <article class="service-card">
                        <div class="service-header">
                            <div class="service-icon">
                                <img src="{{ asset('/resources/assets/images/ear.png') }}" alt="Ear" />
                            </div>
                            <h3 class="service-title">Ear (Otology)</h3>
                        </div>
                        <ul class="service-list">
                            <li>Hearing loss evaluation</li>
                            <li>Ear infections (otitis media &amp; externa)</li>
                            <li>Tympanoplasty / mastoidectomy</li>
                            <li>Cochlear implant guidance</li>
                            <li>Ear pain, discharge, tinnitus</li>
                        </ul>
                    </article>

                    <article class="service-card">
                        <div class="service-header">
                            <div class="service-icon">
                                <img src="{{ asset('/resources/assets/images/nose.png') }}" alt="Nose" />
                            </div>
                            <h3 class="service-title">Nose (Rhinology)</h3>
                        </div>
                        <ul class="service-list">
                            <li>Sinusitis management</li>
                            <li>Functional Endoscopic Sinus Surgery (FESS)</li>
                            <li>Septoplasty for deviated septum</li>
                            <li>Nasal allergies &amp; obstruction</li>
                            <li>Snoring &amp; sleep apnea support</li>
                        </ul>
                    </article>

                    <article class="service-card">
                        <div class="service-header">
                            <div class="service-icon">
                                <img src="{{ asset('/resources/assets/images/throat.png') }}" alt="Throat" />
                            </div>
                            <h3 class="service-title">Throat (Laryngology)</h3>
                        </div>
                        <ul class="service-list">
                            <li>Tonsillitis / adenoid issues</li>
                            <li>Voice &amp; swallowing disorders</li>
                            <li>Microlaryngeal surgeries</li>
                            <li>Throat infections</li>
                            <li>Mouth &amp; tongue lesions</li>
                        </ul>
                    </article>

                    <article class="service-card">
                        <div class="service-header">
                            <div class="service-icon">
                                <img src="{{ asset('/resources/assets/images/neckhead.png') }}" alt="Neck & Head" />
                            </div>
                            <h3 class="service-title">Neck &amp; Head</h3>
                        </div>
                        <ul class="service-list">
                            <li>Thyroid &amp; parathyroid surgery</li>
                            <li>Neck swelling evaluation</li>
                            <li>Salivary gland disease</li>
                        </ul>
                    </article>

                    <article class="service-card">
                        <div class="service-header">
                            <div class="service-icon">
                                <img src="{{ asset('/resources/assets/images/asthama.png') }}" alt="Allergy" />
                            </div>
                            <h3 class="service-title">Allergy &amp; Asthma Clinic</h3>
                        </div>
                        <ul class="service-list">
                            <li>Skin prick testing</li>
                            <li>Immunotherapy</li>
                            <li>Allergy diagnosis &amp; long-term management</li>
                        </ul>
                    </article>

                    <article class="service-card">
                        <div class="service-header">
                            <div class="service-icon">
                                <img src="{{ asset('/resources/assets/images/vertigo.png') }}" alt="Vertigo" />
                            </div>
                            <h3 class="service-title">Vertigo &amp; Balance Disorders</h3>
                        </div>
                        <ul class="service-list">
                            <li>Comprehensive vertigo assessment</li>
                            <li>Balance rehabilitation plans</li>
                            <li>Multidisciplinary treatment approach</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="testimonials-header">
                    <p class="section-subtitle">Testimonials</p>
                    <h2 class="section-heading">What Patients Say</h2>
                </div>

                <div class="testimonials-grid">
                    <article class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <div class="testimonial-initials">YP</div>
                            </div>
                            <div>
                                <div class="testimonial-name">Yash Patil</div>
                                <div class="testimonial-meta">ENT Treatment</div>
                            </div>
                        </div>
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="testimonial-quote">
                            I had visited Dr.Chetashree at her office in Eureka polyclinic for my aunt since she had vertigo
                            which problem persist for her longtime.Doctor was very genuine,kind and very passionate to
                            address the problem. <a
                                href="https://www.google.com/maps/place/Dr.+Chetashree+Gavate+-+ENT+Specialist/@19.19933569893868,72.8375239898336,15z/data=!4m6!3m5!1s0x3be7b900514c3e95:0x211e24b86a43bd51!8m2!3d19.19933569893868!4d72.8375239898336!16s%2Fg%2F11v0x8q1xq?entry=ttu"
                                target="_blank" rel="noopener noreferrer" class="testimonial-more-link"
                                style="color: #007bff;">More</a>
                        </p>
                        <div class="testimonial-source">
                        </div>
                    </article>

                    <article class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <div class="testimonial-initials">SC</div>
                            </div>
                            <div>
                                <div class="testimonial-name">Sarang Chavan</div>
                                <div class="testimonial-meta">ENT Treatment</div>
                            </div>
                        </div>
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="testimonial-quote">
                            Dr. Gavate ma'am is the best ENT specialist in my area. She has a great knowledge and good
                            skills. She has cured my brother's long term issues of ear ache and hearing problem. She is also
                            very sweet and kind .More info <a href="https://maps.app.goo.gl/uixCVpZUP3upVUF18"
                                target="_blank" rel="noopener noreferrer" class="testimonial-more-link"
                                style="color: #007bff;">More</a>
                        </p>
                        <div class="testimonial-source">
                        </div>
                    </article>

                    <article class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <div class="testimonial-initials">DM</div>
                            </div>
                            <div>
                                <div class="testimonial-name">Devika Menrai</div>
                                <div class="testimonial-meta">ENT Treatment</div>
                            </div>
                        </div>
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="testimonial-quote">
                            Dr. Chetashree is extremely empathetic and kind, her diagnosis for me and my family has always
                            been spot on and she is very thorough with treatment!
                        </p>
                        <div class="testimonial-source">
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>
@endsection
