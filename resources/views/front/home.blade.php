@extends('front.layouts.app')
@section('styles')
    <link rel="stylesheet" media="screen"
          href="{{ URL::asset('front/pages/home/application-008b9bb2dc1ff82cd33bce113e65bcd8d765302aa0a0de75ce71fe72145b31ab.css') }}"/>
@endsection
@section('content')
    <section id="section-start" class="home-hero">
        <div class="container-text">
            <h1 class="hero-title"> Grâce à nous, plus rien n'arrête <br>les commerciaux</h1>
            <p class="hero-subtitle"> Automatisez la mise aux normes des CV de vos collaborateurs en quelques clics <br> et placez plus de candidats en clientèle. </p>

            <div class="sm-container-img">
                <a class="img-link" href="https://www.youtube.com/watch?v=Bw93kDKmhlY" data-lity>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" class="play icon">
                        <circle cx="48" cy="48" r="48" fill="#00153E"/>
                        <path fill="#FFF" d="M63 48.5L40 62V35z"/>
                    </svg>
                </a>
            </div>

            <div class="hero-actions">
                <a href="{{ route('register') }}"
                   data-track="website_cta_signup_clicked"
                   data-location="home_hero"
                   class="hero-primary-cta">
                    Commencer maintenant
                </a>

                <a href="{{ route('front.contact') }}"
                   data-track="website_contact_button_clicked"
                   data-location="home_hero"
                   class="hero-secondary-cta talk-to-sales"
                   rel=noopener>
                    Contacter notre équipe commerciale
                </a>
            </div>
        </div>

        <div class="container-img">
            <picture>
                <source srcset="{{ URL::asset('front/static/main.svg') }}">
                <img class="img" src="{{ URL::asset('front/static/main.svg') }}" style="width: 893px;margin-top: 95px;margin-left: 15px;left: 0%;height: auto;" alt="" />
            </picture>
            <a class="btn" href="https://www.youtube.com/watch?v=Bw93kDKmhlY" data-lity>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" class="play icon">
                    <circle cx="48" cy="48" r="48" fill="#00153E"/>
                    <path fill="#FFF" d="M63 48.5L40 62V35z"/>
                </svg>
            </a>
        </div>

        <div id="scroller" class="hero-scroller">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 10" class="icon arrow-go-down">
                <path fill="none" fill-rule="evenodd" stroke="#00153E" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l8 8 8-8"/>
            </svg>
        </div>

        <svg class="hero-crop" xmlns="http://www.w3.org/2000/svg" width="1440" height="48" viewBox="0 0 1440 48">
            <path fill="#FFF" fill-rule="evenodd" d="M0 0c194.22 23.31 345.236 37.383 453.045 42.218C539.007 46.073 627.992 48 720 48c265.097 0 505.097-16 720-48v48H0V0z"/>
        </svg>
    </section>
    <section id="home-testimonials" class="home-testimonials">

        <div class="card-list">
            <div class="card-list-overlay">

                <div class="card-item">
                    <picture>
                        <source srcset="{{ URL::asset('front/images/testimonials-photo-thomas-g-fake.jpg') }} 1x, {{ URL::asset('front/images/testimonials-photo-thomas-g-fake@2x.jpg') }} 2x, {{ URL::asset('front/images/testimonials-photo-thomas-g-fake@3x.jpg') }} 3x">
                        <img class="author-photo" src="{{ URL::asset('front/images/testimonials-photo-thomas-g-fake.jpg') }}" alt="Thomas testimonial" />
                    </picture>
                    <p class="testimonial">
                        "A quick and easy-to-open professional account with locally based and reliable customer service officers to clarify any misunderstanding within minutes!" <br><b>Thomas G., comment on Facebook</b>
                    </p>
                </div>

                <div class="card-item">
                    <picture>
                        <source srcset="{{ URL::asset('front/images/testimonials-photo-jean-charles-samuelian.jpg') }} 1x, {{ URL::asset('front/images/testimonials-photo-jean-charles-samuelian@2x.jpg') }} 2x, {{ URL::asset('front/images/testimonials-photo-jean-charles-samuelian@3x.jpg') }} 3x">
                        <img class="author-photo" src="{{ URL::asset('front/images/testimonials-photo-jean-charles-samuelian.jpg') }}" alt="Alan's testimonial" />
                    </picture>
                    <p class="testimonial">
                        "collab is 100% aligned with what we do at Alan: a straightforward service, a customer-oriented interface, and ultra-fast customer service!" <br><b>Jean-Charles Samuelian, founder @Alan</b>
                    </p>
                </div>

                <div class="card-item">
                    <picture>
                        <source srcset="{{ URL::asset('front/images/testimonials-photo-ludovic-c-fake.jpg') }} 1x, {{ URL::asset('front/images/testimonials-photo-ludovic-c-fake@2x.jpg') }} 2x, {{ URL::asset('front/images/testimonials-photo-ludovic-c-fake@3x.jpg') }} 3x">
                        <img class="author-photo" src="{{ URL::asset('front/images/testimonials-photo-ludovic-c-fake.jpg') }}" alt="Ludovic's testimonial" />
                    </picture>
                    <p class="testimonial">
                        "I signed up only a few days ago, but I'm already in love with this professional account. And this is only the beginning!" <br><b>Dav J., comment from the App Store</b>
                    </p>
                </div>

            </div>
        </div>

        <div class="container-text">
            <h2 class="testimonials-title">Approved by more than 25.000 companies</h2>
            <div class="score-list">

                <div class="score-item">
                    <b class="score-value">4.8</b>
                    <svg class="star icon">
                        <use xlink:href="#star"></use>
                    </svg>
                    <svg class="star icon">
                        <use xlink:href="#star"></use>
                    </svg>
                    <svg class="star icon">
                        <use xlink:href="#star"></use>
                    </svg>
                    <svg class="star icon">
                        <use xlink:href="#star"></use>
                    </svg>
                    <svg class="star icon">
                        <use xlink:href="#half-star"></use>
                    </svg>
                    <p class="score-details">According to +1,600 clients <br> on the App Store</p>
                </div>

                <div class="score-item">
                    <b class="score-value">4.6</b>
                    <svg class="star icon">
                        <use xlink:href="#star"></use>
                    </svg>
                    <svg class="star icon">
                        <use xlink:href="#star"></use>
                    </svg>
                    <svg class="star icon">
                        <use xlink:href="#star"></use>
                    </svg>
                    <svg class="star icon">
                        <use xlink:href="#star"></use>
                    </svg>
                    <svg class="star icon">
                        <use xlink:href="#half-star"></use>
                    </svg>
                    <p class="score-details">According to +300 clients <br> on Facebook</p>
                </div>

                <div class="score-item">
                    <b class="score-value">4.7</b>
                    <svg class="star icon">
                        <use xlink:href="#star"></use>
                    </svg>
                    <svg class="star icon">
                        <use xlink:href="#star"></use>
                    </svg>
                    <svg class="star icon">
                        <use xlink:href="#star"></use>
                    </svg>
                    <svg class="star icon">
                        <use xlink:href="#star"></use>
                    </svg>
                    <svg class="star icon">
                        <use xlink:href="#half-star"></use>
                    </svg>
                    <p class="score-details">According to +600 clients <br> on the Google Play</p>
                </div>

            </div>
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ URL::asset('front/images/testimonials-photo-oussama-amar.jpg') }} 1x, {{ URL::asset('front/images/testimonials-photo-oussama-amar@2x.jpg') }} 2x, {{ URL::asset('front/images/testimonials-photo-oussama-amar@3x.jpg') }} 3x">
                        <img class="author-photo" src="../../qonto-assets.s3.amazonaws.com/homepage/home/testimonials/testimonials-photo-oussama-amar.jpg" alt="The Family's testimonial" />
                    </picture>
                    <p class="testimonial">
                        "It's just perfect. Every startup should be using collab!" <br><b>Oussama Amar, founder @The Family<b></b></b>
                    </p>
                </div>

                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ URL::asset('front/images/testimonials-photo-jean-charles-samuelian.jpg') }} 1x, {{ URL::asset('front/images/testimonials-photo-jean-charles-samuelian@2x.jpg') }} 2x, {{ URL::asset('front/images/testimonials-photo-jean-charles-samuelian@3x.jpg') }} 3x">
                        <img class="author-photo" src="{{ URL::asset('front/images/testimonials-photo-jean-charles-samuelian.jpg') }}" alt="Alan's testimonial" />
                    </picture>
                    <p class="testimonial">
                        "collab is 100% aligned with what we do at Alan: a straightforward service, a customer-oriented interface, and ultra-fast customer service!" <br><b>Jean-Charles Samuelian, founder @Alan</b>
                    </p>
                </div>

                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ URL::asset('front/images/testimonials-photo-nicolas-bustamante.jpg') }} 1x, {{ URL::asset('front/images/testimonials-photo-nicolas-bustamante@2x.jpg') }} 2x, {{ URL::asset('front/images/testimonials-photo-nicolas-bustamante@3x.jpg') }} 3x">
                        <img class="author-photo" src="{{ URL::asset('front/images/testimonials-photo-nicolas-bustamante.jpg') }}" alt="Doctrine's testimonial" />
                    </picture>
                    <p class="testimonial">
                        "I couldn't deal with my traditional bank anymore because everything seemed so complicated. Long live collab, their service is excellent and offers unmatched ease-of-use!" <br><b>Nicolas Bustamante, DG @Doctrine</b>
                    </p>
                </div>

                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ URL::asset('front/images/testimonials-photo-dwayne-iserief.jpg') }} 1x, {{ URL::asset('front/images/testimonials-photo-dwayne-iserief@2x.jpg') }} 2x, {{ URL::asset('front/images/testimonials-photo-dwayne-iserief@3x.jpg') }} 3x">
                        <img class="author-photo" src="{{ URL::asset('front/images/testimonials-photo-dwayne-iserief.jpg') }}" alt="Uptale's testimonial" />
                    </picture>
                    <p class="testimonial">
                        "I'm enthusiast about collab, finally a banking service who understands how startups work! They provide great UX and we have been able to order cards for our team members in a few clicks. It litteraly is a life changer!", <br><b>Dwayne Iserief, co-fondateur @Uptale (Station F)</b>
                    </p>
                </div>

                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ URL::asset('front/images/testimonials-photo-dav-j.png') }} 1x, {{ URL::asset('front/images/testimonials-photo-dav-j@2x.png') }} 2x, {{ URL::asset('front/images/testimonials-photo-dav-j@3x.png') }} 3x">
                        <img class="author-photo" src="{{ URL::asset('front/images/testimonials-photo-dav-j.png') }}" alt="Dav's testimonial" />
                    </picture>
                    <p class="testimonial">
                        "I signed up only a few days ago, but I'm already in love with this professional account. And this is only the beginning!" <br><b>Dav J., comment from the App Store</b>
                    </p>
                </div>

                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ URL::asset('front/images/testimonials-photo-ludovic-c-play.png') }} 1x, {{ URL::asset('front/images/testimonials-photo-ludovic-c-play@2x.png') }} 2x, {{ URL::asset('front/images/testimonials-photo-ludovic-c-play@3x.png') }} 3x">
                        <img class="author-photo" src="{{ URL::asset('front/images/testimonials-photo-ludovic-c-play.png') }}" alt="Ludovic's testimonial" />
                    </picture>
                    <p class="testimonial">
                        "Very efficient and extremely reactive, not to mention the price. Finally I have found the perfect solution for small businesses. A neobank by professionals for professionals!" <br><b>Ludovic C., comment on Google Play</b>
                    </p>
                </div>

                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ URL::asset('front/images/testimonials-photo-thomas-g-fb.png') }} 1x, {{ URL::asset('front/images/testimonials-photo-thomas-g-fb@2x.png') }} 2x, {{ URL::asset('front/images/testimonials-photo-thomas-g-fb@3x.png') }} 3x">
                        <img class="author-photo" src="{{ URL::asset('front/images/testimonials-photo-thomas-g-fb.png') }}" alt="Thomas' testimonial" />
                    </picture>
                    <p class="testimonial">
                        "A quick and easy-to-open professional account with locally based and reliable customer service officers to clarify any misunderstanding within minutes!" <br><b>Thomas G., comment on Facebook</b>
                    </p>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="company-logo-list">
            <img class="icon logo-happn" src="{{ URL::asset('front/images/logo-happn.svg') }}" alt="happn">
            <img class="icon logo-heetch" src="{{ URL::asset('front/images/logo-heetch.svg') }}" alt="heetch">
            <img class="icon logo-alan" src="{{ URL::asset('front/images/logo-alan.svg') }}" alt="alan">
            <img class="icon logo-the-family" src="{{ URL::asset('front/images/logo-the-family.svg') }}" alt="the_family">
            <img class="icon logo-comet" src="{{ URL::asset('front/images/logo-comet.svg') }}" alt="comet">
        </div>

        <svg class="bottom-convex" xmlns="http://www.w3.org/2000/svg" width="1440" height="48" viewBox="0 0 1440 48">
            <path fill="#F5F6FA" fill-rule="evenodd" d="M1440 48c-194.22-23.31-345.236-37.383-453.045-42.218C900.993 1.927 812.008 0 720 0 454.903 0 214.903 16 0 48h1440z"/>
        </svg>

    </section>
    <section id="section-promises" class="pt-80 pb-80">
        <div class="container reverse">
            <div class="container-image-desktop">
                <picture>
                    <source srcset='{{ URL::asset('front/static/bizwoman.jpeg') }}'>
                    <img class='' src='{{ URL::asset('front/static/bizwoman.jpeg') }}' alt='professional account and teamwork' />
                </picture>
            </div>
            <div class="container-text">
                <div class="block-center">
                    <h2 class="">CV mis à jours en un minimum de saisies.</h2>
                    <p class="subtitle">Collab est un outils de génération automatique du CV des collaborateurs à partir de leurs compétences et missions diverses.</p>
                    <div class="container-image-mobile">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/bizwoman.jpeg') }}'>
                            <img class='' src='{{ URL::asset('front/static/bizwoman.jpeg') }}' alt='professional account and teamwork' />
                        </picture>
                    </div>
                    <p class="paragraph"></p>
                    <a href="{{ route('register') }}"
                       data-track="website_cta_signup_clicked"
                       data-location="home_benefits_team"
                       class="cta btn-primary-small btn-dark">
                        Commencer maintenant
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container-image-desktop">
                <picture>
                    <source srcset='{{ URL::asset('front/static/smilewoman.jpg') }}'>
                    <img class='' src='{{ URL::asset('front/static/smilewoman.jpg') }}' alt='professional account and teamwork' />
                </picture>
            </div>
            <div class="container-text">
                <div class="block-center">
                    <h2 class="">Gérez le parcours de vos collaborateurs</h2>
                    <p class="subtitle">Suivez en temps réel, le parcours de vos collaborateurs et soyez informés lorsqu'un profil s'apprête à terminer une mission. Evitez ainsi l'inter-contrat en préparant sa future mission.</p>
                    <div class="container-image-mobile">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/smilewoman.jpg') }}'>
                            <img class='' src='{{ URL::asset('front/static/smilewoman.jpg') }}' alt='professional account and teamwork' />
                        </picture>
                    </div>
                    <p class="paragraph"></p>
                    <a
                            data-track="website_cta_signup_clicked"
                            data-location="home_benefits_tools"
                            href="{{ route('front.pricing') }}"
                            class="cta btn-primary-small">
                        Consulter nos tarifs
                    </a>
                </div>
            </div>
        </div>
        <div class="container reverse">
            <div class="container-image-desktop">
                <picture>
                    <source srcset='{{ URL::asset('front/static/yogawoman.jpeg') }}'>
                    <img class='' src='{{ URL::asset('front/static/yogawoman.jpeg') }}' alt='professional account and teamwork' />
                </picture>
            </div>
            <div class="container-text">
                <div class="block-center">
                    <h2 class="">Donnez un accès aux candidats potentiels</h2>
                    <p class="subtitle">Notre solution permet d'uniformiser les CV des candidats potentiels, aux couleurs de votre entreprise. Glissez déposez le CV du nouveau candidat, et vous obtenez une verion à votre image et anonyme. Procédez facilement à des retouches et envoyez le CV au client.</p>
                    <div class="container-image-mobile">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/yogawoman.jpeg') }}'>
                            <img class='' src='{{ URL::asset('front/static/yogawoman.jpeg') }}' alt='professional account and teamwork' />
                        </picture>
                    </div>
                    <p class="paragraph"></p>
                    <a
                            data-track="website_cta_signup_clicked"
                            data-location="home_benefits"
                            href="{{ route('register') }}"
                            class="cta btn-primary-small">
                        Commencer maintenant
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="section-segments" class="mb-80">
        <svg class="bottom-convex-white" viewBox="0 0 1440 48" version="1.1">
            <g id="bottom-convex" transform="translate(0.000000, -1365.000000)">
                <g id="Group-7" transform="translate(0.000000, 783.000000)" fill="#FFF">
                    <g id="hero">
                        <path d="M0,582 C194.22075,605.310855 345.235831,619.383493 453.045242,624.217915 C539.007013,628.072638 627.991932,630 720,630 C985.09668,630 1225.09668,614 1440,582 L0,582 Z" id="background/circular-shape-1"></path>
                    </g>
                </g>
            </g>
        </svg>
        <div class="container">
            <div class="header">
                <h2>A professional account designed to suit your company size</h2>
                <p class="subtitle">collab&#39;s versatile design adapts to all types of companies, for any legal form or team size.</p>
            </div>
            <div class="content mt-80">
                <div class="card card-color-white">
                    <div class="icon">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/collab_illustrations/1.svg') }}'>
                            <img src="{{ URL::asset('front/static/collab_illustrations/1.svg') }}" style="width: 200px; height:auto;"alt="">
                        </picture>
                    </div>
                    <div class="text">
                        <h3>Pour les ESN / SSII</h3>
                        <div class="elem">
                            <div>
                                <p>The professional current account for freelancers. Open an account in 5 minutes. Starts at 9€ / month (exVAT).</p>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <a href="freelancers.html" class="cta btn-primary-small">Learn more</a>
                    </div>
                </div>
                <div class="card card-color-white">
                    <div class="icon">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/collab_illustrations/2.svg') }}'>
                            <img src="{{ URL::asset('front/static/collab_illustrations/2.svg') }}" style="width: 200px; height:auto;"alt="">
                        </picture>
                    </div>
                    <div class="text">
                        <h3>Pour les cabinets de conseil</h3>
                        <div class="elem">
                            <div>
                                <p>The best alternative to replace or even beef-up their traditional bank account.</p>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <a href="sme.html" class="cta btn-primary-small">Learn more</a>
                    </div>
                </div>
                <div class="card card-color-white">
                    <div class="icon">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/collab_illustrations/3.svg') }}'>
                            <img src="{{ URL::asset('front/static/collab_illustrations/3.svg') }}" style="width: 200px; height:auto;"alt="">
                        </picture>
                    </div>
                    <div class="text">
                        <h3>Pour les cabinets de recrutement</h3>
                        <div class="elem">
                            <div>
                                <p>Online capital deposit to set your business up and running in a breeze.</p>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <a href="company-creation.html" class="cta btn-primary-small">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="section-action" class="pb-80">
        <section class="section-start">
            <div class="container">
                <div class="container-text">
                    <h2>Prêt à commencer ?</h2>
                    <p>Configuration en moins de 2 minutes.</p>
                </div>
                <div class="container-ctas">
                    <a href="{{ route('front.pricing') }}"
                       data-track="website_cta_signup_clicked"
                       data-location="home_start_now"
                       class="cta btn-primary-large">
                        Comparer les différents forfaits
                    </a>
                    <a href="{{ route('front.contact') }}"
                       data-track="website_contact_button_clicked"
                       data-location="home_start_now"
                       class="cta cta-2 btn-primary-large talk-to-sales">
                        Contacter notre équipe commerciale
                    </a>
                </div>
            </div>
        </section>
    </div>
    <svg style="display: none;">
        <symbol id="star" viewBox="0 0 20 20">
            <path fill="#FF941F" fill-rule="evenodd" d="M19.19 6.982h-5.845a.816.816 0 0 1-.772-.585l-1.8-5.811A.822.822 0 0 0 10 0c-.35 0-.66.235-.773.586l-1.8 5.811a.816.816 0 0 1-.772.585H.81a.797.797 0 0 0-.769.574.87.87 0 0 0 .289.95l4.742 3.614c.28.211.399.591.293.938l-1.808 5.837a.891.891 0 0 0 .121.763.785.785 0 0 0 1.132.174l4.71-3.589a.788.788 0 0 1 .96 0l4.71 3.59a.785.785 0 0 0 1.132-.174.891.891 0 0 0 .121-.764l-1.808-5.837a.862.862 0 0 1 .293-.938l4.742-3.615a.87.87 0 0 0 .289-.95.797.797 0 0 0-.77-.573z"/>
        </symbol>

        <symbol id="half-star" viewBox="0 0 20 20">
            <defs>
                <path id="half-star-1" d="M19.19 6.982h-5.845a.816.816 0 0 1-.772-.585l-1.8-5.811A.822.822 0 0 0 10 0c-.35 0-.66.235-.773.586l-1.8 5.811a.816.816 0 0 1-.772.585H.81a.797.797 0 0 0-.769.574.87.87 0 0 0 .289.95l4.742 3.614c.28.211.399.591.293.938l-1.808 5.837a.891.891 0 0 0 .121.763.785.785 0 0 0 1.132.174l4.71-3.589a.788.788 0 0 1 .96 0l4.71 3.59a.785.785 0 0 0 1.132-.174.891.891 0 0 0 .121-.764l-1.808-5.837a.862.862 0 0 1 .293-.938l4.742-3.615a.87.87 0 0 0 .289-.95.797.797 0 0 0-.77-.573z"/>
            </defs>
            <g fill="none" fill-rule="evenodd">
                <mask id="half-star-2" fill="#fff">
                    <use xlink:href="#half-star-1"/>
                </mask>
                <use fill="#FF941F" xlink:href="#half-star-1"/>
                <path fill="#FFF" d="M11-1h12v23H11z" mask="url(#half-star-2)"/>
                <path stroke="#FF941F" stroke-width="1.5" d="M19.207 7.732H13.35c-.684.004-1.283-.45-1.494-1.113L10.06.816C10.044.77 10.018.75 10 .75c-.018 0-.044.02-.056.058L8.142 6.624a1.564 1.564 0 0 1-1.487 1.108H.793c-.008 0-.025.013-.037.05-.016.05 0 .106.028.127l4.74 3.612c.535.403.756 1.112.557 1.759l-1.805 5.83a.142.142 0 0 0 .016.117c.012.018.022.023.037.023.005 0 .011-.002.026-.014l4.711-3.59a1.538 1.538 0 0 1 1.87.001l4.716 3.594c.008.007.014.009.028.009.006 0 .016-.005.028-.023a.138.138 0 0 0 .019-.11l-1.808-5.84a1.61 1.61 0 0 1 .554-1.753l4.742-3.615c.028-.021.045-.076.029-.128-.012-.036-.03-.05-.037-.05z" mask="url(#half-star-2)"/>
            </g>
        </symbol>
    </svg>
@endsection

@section('scripts')
    <script src="{{ URL::asset('front/pages/home/application-262ccdf66aa781a1a657a2d3ba163786ed12e455d1915bef455cf4dcc2b02f52.js') }}"></script>
@endsection