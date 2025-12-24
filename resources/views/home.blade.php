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

    <!-- Sticky Contact Icons -->
    <div class="sticky-contact-icons">
        <a href="https://wa.me/918452903111" target="_blank" rel="noopener noreferrer" class="sticky-icon sticky-whatsapp" aria-label="WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
            </svg>
        </a>
        <a href="tel:+918452903111" class="sticky-icon sticky-call" aria-label="Call">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
            </svg>
        </a>
    </div>
@endsection
