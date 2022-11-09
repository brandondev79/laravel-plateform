@extends('front.layouts.app')
@section('styles')
    <link rel="stylesheet" media="screen"
          href="{{ URL::asset('front/pages/sme/application-f7d9c1114a8baaa3170a3cf763138b3955d7a289cdb9557cbc49aa6e7a63e7ce.css') }}"/>
@endsection
@section('content')
    <section id="hero" class="sme-hero">
        <div class="container-text">
            <h1 class="hero-title"> Payment cards to manage your team's expenses </h1>
            <p class="hero-subtitle"> Give cards to your employees and set up limits. This way, your team members are independent while you keep the control over your finances. </p>
            <a href="{{ route('front.contact') }}"
               class="hero-primary-cta"
               id="hero-scroll">
                More information
            </a>
        </div>
        <div class="container-img">
            <picture>
                <source media=''>
                <img class='img' src='{{ URL::asset('front/static/collab_illustrations/Working_process.svg') }}' style="    width: 1100px;top:-1%;right:auto;left:auto;"alt="Corporate payment cards"/>
            </picture>
        </div>

        <div id="scroller" class="hero-scroller">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 10" class="icon arrow-go-down">
                <path fill="none" fill-rule="evenodd" stroke="#00153E" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l8 8 8-8"/>
            </svg>

        </div>
        <svg class="hero-crop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 48">
            <path fill="#FFF" fill-rule="evenodd" d="M0 0c194.22 23.31 345.236 37.383 453.045 42.218C539.007 46.073 627.992 48 720 48c265.097 0 505.097-16 720-48v48H0V0z"/>
        </svg>

    </section>
    <section id="promises" class="sme-promises pt-80 mb-80">


        <select id="tab-select" onchange="onTabChange(event)">
            <option href="#cfos" >For CFO</option>
            <option href="#managers" >For the managers</option>
            <option href="#teams" >For the teams</option>
        </select>

        <div id="tabs">
            <span class="tab-hold">For CFO</span>
            <ul id="nav-tab" class="nav">
                <li class="tab-li active" id="tabcfos">
                    <a href="#cfos" onclick="onTabClick(event)">
                        For CFO
                    </a>
                </li>
                <li class="tab-li " id="tabmanagers">
                    <a href="#managers" onclick="onTabClick(event)">
                        For the managers
                    </a>
                </li>
                <li class="tab-li " id="tabteams">
                    <a href="#teams" onclick="onTabClick(event)">
                        For the teams
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content">
            <div class="tab-pane active" id="cfos">
                <div class="title">
                    <h2>Make your company banking and bookkeeping easier</h2>
                </div>
                <div class="container reverse">
                    <div class="container-image-desktop">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/mansmile2.jpg') }}'>
                            <img class='' src='{{ URL::asset('front/static/mansmile2.jpg') }}' />
                        </picture>
                    </div>
                    <div class="container-text">
                        <div class="block-center">
                            <h3>Never lose your expenses reports anymore</h3>
                            <p class="paragraph">Your employees can now use their collab payment card for all professional expenses. They can upload the expense receipt in one click via our mobile app!</p>
                            <a
                                    data-track="website_cta_pricing_clicked"
                                    data-location="sme_daf_promises_block_1"
                                    href="pricing.html#enterprises"
                                    class="cta btn-primary-small">
                                Check out our pricing
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="container-image-desktop">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/meeting2.jpg') }}'>
                            <img class='' src='{{ URL::asset('front/static/meeting2.jpg') }}'/>
                        </picture>
                    </div>
                    <div class="container-text">
                        <div class="block-center">
                            <h3>Label your expenses and detect VAT automatically</h3>
                            <p class="paragraph">Our mobile and web app can recognize directly the VAT on the invoice. Organize your expenses according to a personalized classification (by a team, project, country, ...)</p>
                            <a
                                    href="../contact-form.html"
                                    class="cta btn-primary-small">
                                More information
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container reverse">
                    <div class="container-image-desktop">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/collab.jpg') }}'>
                            <img class='' src='{{ URL::asset('front/static/collab.jpg') }}' />
                        </picture>
                    </div>
                    <div class="container-text">
                        <div class="block-center">
                            <h3>Manage your financial flow with your bookkeeping software</h3>
                            <p class="paragraph">Make your bookkeeping and company finances easier! collab works with more than 30 accounting softwares. Keep the history of inbound and outbound financial flows has never been so simple.</p>
                            <a
                                    data-track="website_cta_pricing_clicked"
                                    data-location="sme_daf_promises_block_3"
                                    href="pricing.html#enterprises"
                                    class="cta btn-primary-small btn-dark">
                                Check out our pricing
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="managers">
                <div class="title">
                    <h2>Follow your teams&#39; expenses in real time</h2>
                </div>
                <div class="container reverse">
                    <div class="container-image-desktop">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/meeting1.jpg') }}'>
                            <img class='' src='{{ URL::asset('front/static/meeting1.jpg') }}' />
                        </picture>
                    </div>
                    <div class="container-text">
                        <div class="block-center">
                            <h3>Give your teams payment cards</h3>
                            <p class="paragraph">Give independence to your team while you still keep the control of their expenses! Forget about the expenses receipts: a picture is enough. You can also set payment and withdrawals limits for all the cards in your teams.</p>
                            <a
                                    data-track="website_cta_pricing_clicked"
                                    data-location="sme_managers_promises_block_1"
                                    href="pricing.html#enterprises"
                                    class="cta btn-primary-small">
                                Check out our pricing
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="container-image-desktop">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/phoneman.jpg') }}'>
                            <img class='' src='{{ URL::asset('front/static/phoneman.jpg') }}' />
                        </picture>
                    </div>
                    <div class="container-text">
                        <div class="block-center">
                            <h3>Fix permissions and roles for your team members</h3>
                            <p class="paragraph">Give a specific access to your teams according to their role in your company: full access for the managers, limited for other team members.</p>
                            <a
                                    href="../contact-form.html"
                                    class="cta btn-primary-small">
                                More information
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container reverse">
                    <div class="container-image-desktop">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/smileman.jpg') }}'>
                            <img class='' src='{{ URL::asset('front/static/smileman.jpg') }}' />
                        </picture>
                    </div>
                    <div class="container-text">
                        <div class="block-center">
                            <h3>Visualize your teams&#39; expenses in real-time</h3>
                            <p class="paragraph">Give autonomy to your teams independent while you still have control of their expenses in real time. You can also approve their transfer requests!</p>
                            <a
                                    data-track="website_cta_pricing_clicked"
                                    data-location="sme_managers_promises_block_3"
                                    href="pricing.html#enterprises"
                                    class="cta btn-primary-small btn-dark">
                                Check out our pricing
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="teams">
                <div class="title">
                    <h2>This is the end of the expenses receipts!</h2>
                </div>
                <div class="container reverse">
                    <div class="container-image-desktop">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/metting.jpg') }}'>
                            <img class='' src='{{ URL::asset('front/static/metting.jpg') }}'/>
                        </picture>
                    </div>
                    <div class="container-text">
                        <div class="block-center">
                            <h3>Business Mastercards for your teams</h3>
                            <p class="paragraph">Get business payment cards for your teams, so we&#39;ll be able to centralize all the professional expenses without any physical receipts.</p>
                            <a
                                    data-track="website_cta_pricing_clicked"
                                    data-location="sme_teams_promises_block_1"
                                    href="pricing.html#enterprises"
                                    class="cta btn-primary-small">
                                Check out our pricing
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="container-image-desktop">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/mansmile2.jpg') }}'>
                            <img class='' src='{{ URL::asset('front/static/mansmile2.jpg') }}' />
                        </picture>
                    </div>
                    <div class="container-text">
                        <div class="block-center">
                            <h3>You won&#39;t lose your expenses receipts anymore</h3>
                            <p class="paragraph">You&#39;re done with looking everywhere for your expenses receipts. Thanks to collab, you just need a picture of it, so your manager can visualize the transaction. Ready to save some valuable time?</p>
                            <a
                                    href="../contact-form.html"
                                    class="cta btn-primary-small">
                                More information
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container reverse">
                    <div class="container-image-desktop">
                        <picture>
                            <source srcset='{{ URL::asset('front/static/collab.jpg') }}'>
                            <img class='' src='{{ URL::asset('front/static/collab.jpg') }}' />
                        </picture>
                    </div>
                    <div class="container-text">
                        <div class="block-center">
                            <h3>collab follows you everywhere</h3>
                            <p class="paragraph">You can access your collab account via our web and mobile apps. Manage your finance whenever and wherever you want.</p>
                            <a
                                    data-track="website_cta_pricing_clicked"
                                    data-location="sme_teams_promises_block_3"
                                    href="pricing.html#enterprises"
                                    class="cta btn-primary-small btn-dark">
                                Check out our pricing
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg class="hero-crop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 48">
            <path fill="#FFF" fill-rule="evenodd" d="M0 0c194.22 23.31 345.236 37.383 453.045 42.218C539.007 46.073 627.992 48 720 48c265.097 0 505.097-16 720-48v48H0V0z"/>
        </svg>

    </section>
    <section class="sme-testi-feat">
        <div id="testimonials" class="sme-testimonials">
            <h2 class="title">Already used by the best teams</h2>
            <div class="container">
                <div class='card'>
                    <picture>
                        <source srcset='{{ URL::asset('front/static/mansmile2.jpg') }}'>
                        <img class='' src='{{ URL::asset('front/static/mansmile2.jpg') }}' />
                    </picture>
                    <p class='text'>&quot;I needed the perfect banking SaaS for LiveMentor: I found collab! What I love: the dashboards allow me to have an overview of the cash flow.&quot;</p>
                    <b>Alexandre Dana</b>
                    <p>CEO @LiveMentor</p>
                </div>
                <div class='card'>
                    <picture>
                        <source srcset='{{ URL::asset('front/static/mansmile2.jpg') }}'>
                        <img class='' src='{{ URL::asset('front/static/mansmile2.jpg') }}' />
                    </picture>
                    <p class='text'>&quot;collab is an incredible time-saving tool to manage the daily transactions of YouShould. Following our transactions and expenses has never been so easy!&quot;</p>
                    <b>Timothée Emery</b>
                    <p>General Manager @Youshould</p>
                </div>
                <div class='card'>
                    <picture>
                        <source srcset='{{ URL::asset('front/static/mansmile2.jpg') }}'>
                        <img class='' src='{{ URL::asset('front/static/mansmile2.jpg') }}' />
                    </picture>
                    <p class='text'>&quot;Manage my providers and teams expenses is now easy, fast and smart with collab! The cherry on top: the best customer service you can dream of!&quot;</p>
                    <b>Olivier Ramel</b>
                    <p>CEO @Kymono</p>
                </div>
            </div>

            <div class='testimonials-video'>
                <a class="img-link" href="https://www.youtube-nocookie.com/embed/OidfA8_3wxQ?rel=0&amp;autoplay=1&amp;hl=en" data-lity>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" class="play icon">
                        <circle cx="48" cy="48" r="48" fill="#ED145D"/>
                        <path fill="#FFF" d="M63 48.5L40 62V35z"/>
                    </svg>
                </a>
            </div>
            <br>
        </div>

    </section>
    <section id="action" class="sme-action pt-80 pb-80">
        <div class="container">
            <div class="container-text">
                <h2>Prêt à commencer ?</h2>
                <p>Configuration en moins de 2 minutes.</p>
            </div>
            <div class="container-ctas">
                <a href="pricing.html"
                   data-track="website_cta_signup_clicked"
                   data-location="home_start_now"
                   class="cta btn-primary-large">
                    Comparer les différents forfaits
                </a>
                <a href="contact-form.html"
                   data-track="website_contact_button_clicked"
                   data-location="home_start_now"
                   class="cta cta-2 btn-primary-large talk-to-sales">
                    Contacter notre équipe commerciale
                </a>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{ URL::asset('front/pages/sme/application-915c5807948a5fc4c06e295558866f16aa0397128b02eb6b2e8ec0a753b47133.js') }}"></script>
@endsection