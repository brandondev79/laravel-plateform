@extends('front.layouts.app')
@section('styles')
    <link rel="stylesheet" media="screen"
          href="{{ URL::asset('front/pages/contact_form/application-81f0c1a49a39608b6ccb677a86e9370c81ab3556207b90aaa577e081dfbef7de.css') }}"/>
@endsection
@section('content')
    <div id="contact">
        <section id="hero-image-side">
            <div id="section-start">
                <div class="container">
                    <div class="container-text">
                        <h1>Need more information?</h1>
                        <div class="container-form">
                            <form id="contact-form">
                                <div class="input-container input-inline">
                                    <input type="text" id="firstName" name="firstName" placeholder="Your first name">
                                    <input type="text" id="lastName" name="lastName" placeholder="Your last name">
                                </div>

                                <div class="input-container">
                                    <input type="email" id="email" name="email" placeholder="Your professional email *">
                                </div>

                                <div class="input-container">
                                    <input type="text" id="phone" name="phone" placeholder="Your phone number *">
                                </div>

                                <div class="input-container">
                                    <input type="text" id="company" name="company" placeholder="Your company name">
                                </div>

                                <div class="select-container select-for-mobile">
                                    <select required name="employeesNumber" id="employees-number">
                                        <option value="" hidden>Number of employees *</option>
                                        <option value="1">1</option>
                                        <option value="2 - 5">2 - 5</option>
                                        <option value="5 - 10">5 - 10</option>
                                        <option value="10 - 20">10 - 20</option>
                                        <option value="20 - 50">20 - 50</option>
                                        <option value="50 - 100">50 - 100</option>
                                        <option value="100 +">100 +</option>
                                    </select>
                                </div>

                                <div class="select-container select-for-desktop">
                                    <div class="select pure">
                                        Number of employees *
                                    </div>
                                    <svg class="select_arrow" width="8" height="6">
                                        <defs>
                                            <rect id="select_a" width="320" height="48" rx="4"/>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <g transform="translate(-300 -21)">
                                                <use fill="#FFF" fill-opacity=".15" xlink:href="#select_a"/>
                                                <rect width="319" height="47" x=".5" y=".5" stroke="#FFF"
                                                      stroke-opacity=".5" rx="4"/>
                                            </g>
                                            <path fill="#FFF" fill-rule="nonzero"
                                                  d="M6.999 0c.777 0 1.257.727.857 1.298L4.857 5.584c-.388.555-1.326.555-1.714 0L.144 1.298C-.256.727.224 0 1.001 0H7z"/>
                                        </g>
                                    </svg>

                                    <div class="options hidden">
                                        <div class="option">1</div>
                                        <div class="option">2 - 5</div>
                                        <div class="option">5 - 10</div>
                                        <div class="option">10 - 20</div>
                                        <div class="option">20 - 50</div>
                                        <div class="option">50 - 100</div>
                                        <div class="option">100 +</div>
                                    </div>
                                    <div class="error">
                                        <svg width="16" height="16">
                                            <defs>
                                                <path id="warning_a"
                                                      d="M8.25 8.75a.25.25 0 0 1-.5 0L7 3.25a1 1 0 0 1 2 0l-.75 5.5zm-.25 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm7.712-.78L9.714.972c-.776-1.295-2.652-1.295-3.428 0l-5.998 10C-.512 12.304.448 14 2.002 14h11.996c1.554 0 2.514-1.696 1.714-3.03z"/>
                                            </defs>
                                            <use fill="#f84f4f" xlink:href="#warning_a" fill-rule="evenodd"
                                                 transform="translate(0 1)"/>
                                        </svg>
                                    </div>
                                </div>

                                <button class="btn-primary-large" type="submit" name="button">
                                    <span id="text">Send</span>
                                    <svg version="1.1" id="loader" class="hidden" x="0px" y="0px" width="30px" height="30px"
                                         viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                  <path fill="#fff"
                        d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
                      <animateTransform attributeType="xml"
                                        attributeName="transform"
                                        type="rotate"
                                        from="0 25 25"
                                        to="360 25 25"
                                        dur="0.6s"
                                        repeatCount="indefinite"/>
                  </path>
                </svg>
                                    <svg class="hidden" id="contact_check" width="24" height="24">
                                        <path fill="#FFF"
                                              d="M7.5 21a2.22 2.22 0 0 0 1.59-.664l14.471-14.75a1.528 1.528 0 0 0 0-2.143 1.49 1.49 0 0 0-2.12 0L7.5 17.658l-4.94-5.215a1.49 1.49 0 0 0-2.121 0 1.525 1.525 0 0 0 0 2.143l5.47 5.75c.425.428.988.664 1.59.664z"
                                              fill-rule="evenodd"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="container-img">
                        <picture>
                            <source srcset='https://qonto-assets.s3.amazonaws.com/homepage/entreprises/thumbnail-video.png 1x, https://qonto-assets.s3.amazonaws.com/homepage/entreprises/thumbnail-video@2x.png 2x, https://qonto-assets.s3.amazonaws.com/homepage/entreprises/thumbnail-video@3x.png 3x'>
                            <img class='thumbnail-video transition'
                                 src='../qonto-assets.s3.amazonaws.com/homepage/entreprises/thumbnail-video.png' alt=''/>
                        </picture>
                        <a class="btn"
                           href="https://www.youtube-nocookie.com/embed/GUtDtqSC--A?rel=0&amp;autoplay=1&amp;hl=fr"
                           data-track="website_video_clicked" data-location="sme_start_" data-lity>
                            <picture>
                                <source media='(min-width: 980px)'
                                        srcset='https://qonto-assets.s3.amazonaws.com/homepage/entreprises/play-btn.png 1x, https://qonto-assets.s3.amazonaws.com/homepage/entreprises/play-btn@2x.png 2x, https://qonto-assets.s3.amazonaws.com/homepage/entreprises/play-btn@3x.png 3x'>
                                <source media='(max-width: 980px)'
                                        srcset='https://qonto-assets.s3.amazonaws.com/homepage/pixel.#{extension}'>
                                <img class='play' src='../qonto-assets.s3.amazonaws.com/homepage/entreprises/play-btn.png'
                                     alt=''/>
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script src="{{ URL::asset('front/pages/contact_form/application-00cb7555c156983abdd0ec2fa2fd3c9c0fdba6cc9b9c1de73102dcb5f74cd8ad.js') }}"></script>
@endsection