@extends('front.layouts.app')
@section('styles')
    <link rel="stylesheet" media="screen"
          href="{{ URL::asset('front/pages/pricing/application-788073cfa79a8070bda084ff1829bdca58e52c65e812f05a2b4591149fe21a0f.css') }}"/>
@endsection
@section('content')
    <div id="container-general">
        <section id='hero-no-image'>
            <div id='section-start'>

                <div class="top-bg">
                    <svg class="bottom-concave-white" viewBox='0 0 1440 48' version='1.1'>
                        <g id='bottom-concave' transform='translate(0.000000, -436.000000)'>
                            <g id='Group-6' fill='#F5F6FA' fill-rule='nonzero'>
                                <path d='M1440,484 C1225.09668,452 985.09668,436 720,436 C627.991932,436 539.007013,437.927362 453.045242,441.782085 C345.235831,446.616507 194.22075,460.689145 0,484 L0,436 L1440,436 L1440,484 Z'
                                      id='background-circular-shape-2'></path>
                            </g>
                        </g>
                    </svg>
                </div>

                <div class='container'>
                    <div class='container-text'>
                        <img src="{{ URL::asset('front/static/collab_illustrations/33.svg') }}" alt="">
                        <h1>Transparent pricing</h1>
                        <p>Create your account 100% online in 10 minutes.
                            <br>30 days free trial, no commitment</p>
                    </div>
                </div>

                <section class="container pt-64 mb-80">


                    <div class="tab-content">

                        <div class="tab-pane active" id="enterprises">
                            <div class="container-plans">
                                <div class="plan plan-standard">
                                    <div class="card">
                                        <h2>Moins de 50 collaborateurs</h2>
                                        <p class="price">39€</p>
                                        <p class="month">/mois (HT) / collaborateurs</p>
                                        <a data-track="website_cta_signup_clicked"
                                           data-location="pricing_enterprises_standard-head" class="btn-default-large"
                                           href="signup.html">Choose this plan</a>
                                        <div class="features">
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><strong>3 utilisateurs admin/commerciaux</strong> max</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><b>50 candidats/employés </b> max</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><b>2</b> templates de CV disponible</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><b>100 </b>CV générés par mois</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><b>4 pages de CV</b> max</span>
                                            </div>
                                            <div class="feature no-feature">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     viewBox="0 0 16 16">
                                                    <g fill="none" fill-rule="evenodd" stroke="#D5D8E3"
                                                       stroke-linecap="round" stroke-width="2.5">
                                                        <path d="M4 4l8 8M12 4l-8 8"/>
                                                    </g>
                                                </svg>

                                                <span>Employees transfer request option (submitted for approval to admins)</span>
                                            </div>
                                            <div class="feature no-feature">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     viewBox="0 0 16 16">
                                                    <g fill="none" fill-rule="evenodd" stroke="#D5D8E3"
                                                       stroke-linecap="round" stroke-width="2.5">
                                                        <path d="M4 4l8 8M12 4l-8 8"/>
                                                    </g>
                                                </svg>

                                                <span>Transaction categorization (custom labels)</span>
                                            </div>
                                            <div class="feature no-feature">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     viewBox="0 0 16 16">
                                                    <g fill="none" fill-rule="evenodd" stroke="#D5D8E3"
                                                       stroke-linecap="round" stroke-width="2.5">
                                                        <path d="M4 4l8 8M12 4l-8 8"/>
                                                    </g>
                                                </svg>

                                                <span>Automatic VAT detection on invoices</span>
                                            </div>
                                            <div class="feature no-feature">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     viewBox="0 0 16 16">
                                                    <g fill="none" fill-rule="evenodd" stroke="#D5D8E3"
                                                       stroke-linecap="round" stroke-width="2.5">
                                                        <path d="M4 4l8 8M12 4l-8 8"/>
                                                    </g>
                                                </svg>

                                                <span>Dedicated VIP support</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-details mobile">
                                        <h2>Standard Package Details</h2>
                                        <div class='subtitle'>All prices exclude VAT</div>

                                        <div class="accordion">
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Cards
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row standard">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><strong>2</strong> physical Mastercard debit cards</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><strong>2</strong> virtual Mastercard debit cards</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Cards with business insurance guarantees</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unlimited payments in euros</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Real-time cards configuration (limits and options)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Additional physical card: €5 / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Additional virtual card: €2 / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Non-EUR card transactions: 2% / transaction</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>ATM withdrawal: €1 / withdrawal</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Additional card printing and delivery fee: €6</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_enterprises_standard-cards"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Transfers
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row standard">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>French IBAN</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><strong>100</strong> SEPA transfers / month (incoming and outgoing)
 </span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>No movement commission on transfers and SEPA Direct Debits</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unlimited transfers in euros or other currencies</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Beyond: €0.40 / additional transfer</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Non-EUR outgoing transfers: 1% / transaction</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Bulk transfers (XML)</span></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_enterprises_standard-transfers"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Check deposits
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row standard">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span><strong>3 </strong>check deposits / month</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Additional check deposit cost: €2 / check</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_enterprises_standard-check_depositis"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Accounting
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row standard">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Dedicated accountant access </span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Unlimited transactions and receipts history</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Real-time receipts attachement through the web or mobile app</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Smart transactions filters</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>CSV export (for your expenses) or PDF (bills, bank statement)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_enterprises_standard-accounting"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Accessibility
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row standard">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Web and mobile applications</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Different roles &amp; permissions: <br>admin / employee / accountant</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Financial dashboards for efficient business management</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_enterprises_standard-accessibility"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Customer support
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row standard">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Customer support per email within 15 minutes of average response time</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_enterprises_standard-customer_support"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Legal
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row standard">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Confirmation letter: €45</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Irregularity management: €10</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Irregular account activity: €150</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unpaid check deposit cost: €25</span></div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_enterprises_standard-legal"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="plan plan-premium">
                                    <div class="card">
                                        <h2>Moins de 100 collaborateurs</h2>
                                        <p class="price">29€</p>
                                        <p class="month">/mois (HT) / collaborateurs</p>
                                        <a data-track="website_cta_signup_clicked"
                                           data-location="pricing_enterprises_premium-head" class="btn-default-large"
                                           href="signup.html">Choose this plan</a>
                                        <div class="features">
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span class="fix-to-put-on-1-line"><strong>15 users </strong>max</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><b>5</b> physical Mastercard debit cards</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><b>5</b> virtual Mastercard debit cards</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><b>500</b> incoming/outgoing transfers or SEPA Direct Debits / month</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><b>10 </b>check deposits / month</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span>Employees transfer request option (submitted for approval to admins)</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span>Transaction categorization (custom labels)</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span>Automatic VAT detection on invoices</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span>Dedicated VIP support</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-details mobile">
                                        <h2>Premium package details</h2>
                                        <div class='subtitle'>All prices exclude VAT</div>

                                        <div class="accordion">
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Cards
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row premium">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><strong>5</strong> physical Mastercard debit cards</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><strong>5</strong> virtual Mastercard debit cards</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Cards with business insurance guarantees</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unlimited payments in euros</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Real-time cards configuration (limits and options)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Additional physical card: €5 / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Additional virtual card: €2 / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Non-EUR card transactions: 2% / transaction</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>ATM withdrawal: €1 / withdrawal</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Additional card printing and delivery fee: €6</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_enterprises_premium-cards"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Transfers
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row premium">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>French IBAN</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><strong>500</strong> SEPA transfers / month (incoming and outgoing)
 </span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>No movement commission on transfers and SEPA Direct Debits</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unlimited transfers in euros or other currencies</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Beyond: €0.25 / additional transfer</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Non-EUR outgoing transfers: 1% / transaction</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Bulk transfers (XML)</span></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_enterprises_premium-transfers"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Check deposits
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row premium">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span><strong>10 </strong>check deposits / month</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Additional check deposit cost: €2 / check</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_enterprises_premium-check_depositis"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Accounting
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row premium">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Dedicated accountant access </span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Unlimited transactions and receipts history</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Real-time receipts attachement through the web or mobile app</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Smart transactions filters</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>CSV export (for your expenses) or PDF (bills, bank statement)</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Transaction categorization (custom labels)</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Automatic VAT detection on invoices</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_enterprises_premium-accounting"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Accessibility
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row premium">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Web and mobile applications</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Different roles &amp; permissions: <br>admin / employee / accountant</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Financial dashboards for efficient business management</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_enterprises_premium-accessibility"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Customer support
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row premium">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Dedicated VIP support per email and phone</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_enterprises_premium-customer_support"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Legal
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row premium">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Confirmation letter: €45</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Irregularity management: €10</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Irregular account activity: €150</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unpaid check deposit cost: €25</span></div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_enterprises_premium-legal"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="plan plan-enterprise">
                                    <div class="card">
                                        <h2>Plus de 100 collaborateurs</h2>
                                        <p class="price">19€</p>
                                        <p class="month">/mois (HT) / collaborateurs</p>
                                        <a data-track="website_contact_button_clicked"
                                           data-location="pricing_enterprises_enterprise-head" class="btn-default-large"
                                           href="contact-form.html">Contact us</a>
                                        <div class="features">
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><strong>Unlimited</strong> number of users</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><b>15</b> physical Mastercard debit cards</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><b>15</b> virtual Mastercard debit cards</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span class="fix-to-put-on-2-lines"><b>2000</b> incoming/outgoing transfers or SEPA Direct Debit / month</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><b>10</b> check deposits / month</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span>Employees transfer request option (submitted for approval to admins)</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span>Transaction categorization (custom labels)</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span>Automatic VAT detection on invoices</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span>Dedicated VIP support</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-details mobile">
                                        <h2>Business Package Details</h2>
                                        <div class='subtitle'>All prices exclude VAT</div>

                                        <div class="accordion">
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Cards
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row enterprise">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><strong>15</strong> physical Mastercard debit cards</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><strong>15</strong> virtual Mastercard debit cards</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Cards with business insurance guarantees
 </span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unlimited payments in euros</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Real-time cards configuration (limits and options)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Additional physical card: €5 / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Additional virtual card: €2 / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Non-EUR card transactions: 2% / transaction</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>ATM withdrawal: €1 / withdrawal</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Additional card printing and delivery fee: €6</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_contact_button_clicked"
                                                           data-location="pricing_enterprises_enterprise-cards"
                                                           class="btn-default-large" href="contact-form.html">Contact us</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Transfers
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row enterprise">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>French IBAN</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><strong>2000</strong> SEPA transfers / month (incoming and outgoing)
 </span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>No movement commission on transfers and SEPA Direct Debits</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unlimited transfers in euros or other currencies</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Beyond: €0.15 / additional transfer</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Non-EUR outgoing transfers: 1% / transaction</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Bulk transfers (XML)</span></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_contact_button_clicked"
                                                           data-location="pricing_enterprises_enterprise-transfers"
                                                           class="btn-default-large" href="contact-form.html">Contact us</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Check deposits
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row enterprise">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span><strong>10</strong> check deposits / month</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Additional check deposit cost: €2 / check</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_contact_button_clicked"
                                                           data-location="pricing_enterprises_enterprise-check_depositis"
                                                           class="btn-default-large" href="contact-form.html">Contact us</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Accounting
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row enterprise">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Dedicated accountant access</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Unlimited transactions and receipts history</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Real-time receipts attachement through the web or mobile app</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Smart transactions filters</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>CSV export (for your expenses) or PDF (bills, bank statement)</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Transaction categorization (custom labels)</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Automatic VAT detection on invoices</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_contact_button_clicked"
                                                           data-location="pricing_enterprises_enterprise-accounting"
                                                           class="btn-default-large" href="contact-form.html">Contact us</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Accessibility
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row enterprise">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Web and mobile applications</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Different roles &amp; permissions: <br>admin / employee / accountant</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Financial dashboards for efficient business management</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_contact_button_clicked"
                                                           data-location="pricing_enterprises_enterprise-accessibility"
                                                           class="btn-default-large" href="contact-form.html">Contact us</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Customer support
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row enterprise">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Dedicated VIP support per email and phone</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_contact_button_clicked"
                                                           data-location="pricing_enterprises_enterprise-customer_support"
                                                           class="btn-default-large" href="contact-form.html">Contact us</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Legal
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row enterprise">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Confirmation letter: €45</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Irregularity management: €10</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Irregular account activity: €150</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unpaid check deposit cost: €25</span></div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_contact_button_clicked"
                                                           data-location="pricing_enterprises_enterprise-legal"
                                                           class="btn-default-large" href="contact-form.html">Contact us</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container-details">
                                <h2>Details of each plan</h2>
                                <div class='subtitle'>All prices exclude VAT</div>
                                <div class="accordion">
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Cards
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row standard">
                                                <div class="accordion-panel__title">Standard</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span><strong>2</strong> physical Mastercard debit cards</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span><strong>2</strong> virtual Mastercard debit cards</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Cards with business insurance guarantees</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unlimited payments in euros</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span>Real-time cards configuration (limits and options)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional physical card: €5 / month</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional virtual card: €2 / month</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Non-EUR card transactions: 2% / transaction</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>ATM withdrawal: €1 / withdrawal</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional card printing and delivery fee: €6</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_enterprises_standard-cards"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row premium">
                                                <div class="accordion-panel__title">Premium</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span><strong>5</strong> physical Mastercard debit cards</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span><strong>5</strong> virtual Mastercard debit cards</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Cards with business insurance guarantees</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unlimited payments in euros</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span>Real-time cards configuration (limits and options)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional physical card: €5 / month</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional virtual card: €2 / month</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Non-EUR card transactions: 2% / transaction</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>ATM withdrawal: €1 / withdrawal</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional card printing and delivery fee: €6</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_enterprises_premium-cards"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row enterprise">
                                                <div class="accordion-panel__title">Corporate</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span><strong>15</strong> physical Mastercard debit cards</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span><strong>15</strong> virtual Mastercard debit cards</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Cards with business insurance guarantees
 </span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unlimited payments in euros</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span>Real-time cards configuration (limits and options)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional physical card: €5 / month</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional virtual card: €2 / month</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Non-EUR card transactions: 2% / transaction</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>ATM withdrawal: €1 / withdrawal</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional card printing and delivery fee: €6</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_contact_button_clicked"
                                                   data-location="pricing_enterprises_enterprise-cards"
                                                   class="btn-default-large" href="contact-form.html">Contact us</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Transfers
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row standard">
                                                <div class="accordion-panel__title">Standard</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>French IBAN</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span><strong>100</strong> SEPA transfers / month (incoming and outgoing)
 </span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>No movement commission on transfers and SEPA Direct Debits</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span>Unlimited transfers in euros or other currencies</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Beyond: €0.40 / additional transfer</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Non-EUR outgoing transfers: 1% / transaction</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Bulk transfers (XML)</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_enterprises_standard-transfers"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row premium">
                                                <div class="accordion-panel__title">Premium</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>French IBAN</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span><strong>500</strong> SEPA transfers / month (incoming and outgoing)
 </span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>No movement commission on transfers and SEPA Direct Debits</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span>Unlimited transfers in euros or other currencies</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Beyond: €0.25 / additional transfer</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Non-EUR outgoing transfers: 1% / transaction</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Bulk transfers (XML)</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_enterprises_premium-transfers"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row enterprise">
                                                <div class="accordion-panel__title">Corporate</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>French IBAN</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span><strong>2000</strong> SEPA transfers / month (incoming and outgoing)
 </span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>No movement commission on transfers and SEPA Direct Debits</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span>Unlimited transfers in euros or other currencies</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Beyond: €0.15 / additional transfer</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Non-EUR outgoing transfers: 1% / transaction</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Bulk transfers (XML)</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_contact_button_clicked"
                                                   data-location="pricing_enterprises_enterprise-transfers"
                                                   class="btn-default-large" href="contact-form.html">Contact us</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Check deposits
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row standard">
                                                <div class="accordion-panel__title">Standard</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span><strong>3 </strong>check deposits / month</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional check deposit cost: €2 / check</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_enterprises_standard-check_depositis"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row premium">
                                                <div class="accordion-panel__title">Premium</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span><strong>10 </strong>check deposits / month</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional check deposit cost: €2 / check</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_enterprises_premium-check_depositis"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row enterprise">
                                                <div class="accordion-panel__title">Corporate</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span><strong>10</strong> check deposits / month</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional check deposit cost: €2 / check</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_contact_button_clicked"
                                                   data-location="pricing_enterprises_enterprise-check_depositis"
                                                   class="btn-default-large" href="contact-form.html">Contact us</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Accounting
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row standard">
                                                <div class="accordion-panel__title">Standard</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Dedicated accountant access </span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unlimited transactions and receipts history</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Real-time receipts attachement through the web or mobile app</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Smart transactions filters</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>CSV export (for your expenses) or PDF (bills, bank statement)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_enterprises_standard-accounting"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row premium">
                                                <div class="accordion-panel__title">Premium</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Dedicated accountant access </span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unlimited transactions and receipts history</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Real-time receipts attachement through the web or mobile app</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Smart transactions filters</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>CSV export (for your expenses) or PDF (bills, bank statement)</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Transaction categorization (custom labels)</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Automatic VAT detection on invoices</span></div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_enterprises_premium-accounting"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row enterprise">
                                                <div class="accordion-panel__title">Corporate</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Dedicated accountant access</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unlimited transactions and receipts history</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Real-time receipts attachement through the web or mobile app</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Smart transactions filters</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>CSV export (for your expenses) or PDF (bills, bank statement)</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Transaction categorization (custom labels)</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Automatic VAT detection on invoices</span></div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_contact_button_clicked"
                                                   data-location="pricing_enterprises_enterprise-accounting"
                                                   class="btn-default-large" href="contact-form.html">Contact us</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Accessibility
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row standard">
                                                <div class="accordion-panel__title">Standard</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Web and mobile applications</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Different roles &amp; permissions: <br>admin / employee / accountant</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Financial dashboards for efficient business management</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_enterprises_standard-accessibility"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row premium">
                                                <div class="accordion-panel__title">Premium</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Web and mobile applications</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Different roles &amp; permissions: <br>admin / employee / accountant</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Financial dashboards for efficient business management</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_enterprises_premium-accessibility"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row enterprise">
                                                <div class="accordion-panel__title">Corporate</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Web and mobile applications</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Different roles &amp; permissions: <br>admin / employee / accountant</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Financial dashboards for efficient business management</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_contact_button_clicked"
                                                   data-location="pricing_enterprises_enterprise-accessibility"
                                                   class="btn-default-large" href="contact-form.html">Contact us</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Customer support
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row standard">
                                                <div class="accordion-panel__title">Standard</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Customer support per email within 15 minutes of average response time</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_enterprises_standard-customer_support"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row premium">
                                                <div class="accordion-panel__title">Premium</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Dedicated VIP support per email and phone</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_enterprises_premium-customer_support"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row enterprise">
                                                <div class="accordion-panel__title">Corporate</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Dedicated VIP support per email and phone</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_contact_button_clicked"
                                                   data-location="pricing_enterprises_enterprise-customer_support"
                                                   class="btn-default-large" href="contact-form.html">Contact us</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Legal
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row standard">
                                                <div class="accordion-panel__title">Standard</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Confirmation letter: €45</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Irregularity management: €10</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Irregular account activity: €150</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unpaid check deposit cost: €25</span></div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_enterprises_standard-legal"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row premium">
                                                <div class="accordion-panel__title">Premium</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Confirmation letter: €45</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Irregularity management: €10</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Irregular account activity: €150</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unpaid check deposit cost: €25</span></div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_enterprises_premium-legal"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row enterprise">
                                                <div class="accordion-panel__title">Corporate</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Confirmation letter: €45</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Irregularity management: €10</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Irregular account activity: €150</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unpaid check deposit cost: €25</span></div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_contact_button_clicked"
                                                   data-location="pricing_enterprises_enterprise-legal"
                                                   class="btn-default-large" href="contact-form.html">Contact us</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="freelancers">
                            <div class="container-plans">
                                <div class="plan plan-solo">
                                    <div class="card">
                                        <h2>Solo</h2>
                                        <p class="price">€9</p>
                                        <p class="month">/mo (excl. VAT)</p>
                                        <a data-track="website_cta_signup_clicked"
                                           data-location="pricing_freelancers_solo-head" class="btn-default-large"
                                           href="signup.html">Choose this plan</a>
                                        <div class="features">
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><strong>1 user</strong> max</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><b>1</b> Mastercard card included</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><b>20</b> incoming/outgoing transfers or SEPA Direct Debits / month</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span><b>Unlimited</b> card transactions</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span>Check deposits in option</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span>Cards with business insurance guarantees</span>
                                            </div>
                                            <div class="feature">
                                                <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 11">
                                                    <path id="check"
                                                          d="M4.95 9.65a1.2 1.2 0 0 0 1.7 0l6.6-6.6a1.2 1.2 0 1 0-1.7-1.7L5.8 7.12 3.05 4.35a1.2 1.2 0 1 0-1.7 1.7z"/>
                                                </svg>
                                                <span>Unlimited transactions and receipts history</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-details mobile">
                                        <h2>Pricing details</h2>
                                        <div class='subtitle'>All prices exclude VAT</div>
                                        <div class="accordion">
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Cards
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row solo">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span><b>1</b> physical Mastercard debit card</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Card with business insurance guarantees</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unlimited payments in euros</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Real-time cards configuration (limits and options)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Additional physical card : €5 / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Additional virtual card : €2 / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Non-EUR card transactions: 2% / transaction</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>ATM withdrawal: €1 / withdrawal</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Additional card printing and delivery fee: €6</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_freelancers_solo-cards"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Transfers
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row solo">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>French IBAN</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><b>20</b> incoming/outgoing transfers or SEPA Direct Debits / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>No movement commission on transfers and SEPA Direct Debits</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unlimited transfers in euros or other currencies</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Beyond: €0.50 / addtionnal transfer</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Non-EUR outgoing transfers: 1% / transaction</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_freelancers_solo-transfers"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Check deposits
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row solo">

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Additional check deposit cost: €2 / check</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_freelancers_solo-check_depositis"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Accounting
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row solo">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Unlimited transactions and receipts history</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Real-time receipts attachement through the web or mobile app</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Smart transactions filters</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>CSV export (for your expenses) or PDF (bills, bank statement)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_freelancers_solo-accounting"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Accessibility
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row solo">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Web and mobile applications</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Financial dashboards for efficient
business management</span></div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_freelancers_solo-accessibility"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Customer support
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row solo">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Customer support per email within 15 minutes of average response time</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_freelancers_solo-customer_support"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Legal
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row solo">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Confirmation letter: €45</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Irregularity management: €10</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Irregular account activity: €150</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unpaid check deposit: €25</span></div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_freelancers_solo-legal"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container-details">
                                <h2>Pricing details</h2>
                                <div class='subtitle'>All prices exclude VAT</div>
                                <div class="accordion">
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Cards
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row solo">
                                                <div class="accordion-panel__title">Solo</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span><b>1</b> physical Mastercard debit card</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Card with business insurance guarantees</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unlimited payments in euros</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span>Real-time cards configuration (limits and options)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional physical card : €5 / month</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional virtual card : €2 / month</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Non-EUR card transactions: 2% / transaction</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>ATM withdrawal: €1 / withdrawal</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional card printing and delivery fee: €6</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_freelancers_solo-cards" class="btn-default-large"
                                                   href="signup.html">Choose this plan</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Transfers
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row solo">
                                                <div class="accordion-panel__title">Solo</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>French IBAN</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span><b>20</b> incoming/outgoing transfers or SEPA Direct Debits / month</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>No movement commission on transfers and SEPA Direct Debits</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span>Unlimited transfers in euros or other currencies</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Beyond: €0.50 / addtionnal transfer</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Non-EUR outgoing transfers: 1% / transaction</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_freelancers_solo-transfers"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Check deposits
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row solo">
                                                <div class="accordion-panel__title">Solo</div>


                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional check deposit cost: €2 / check</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_freelancers_solo-check_depositis"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Accounting
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row solo">
                                                <div class="accordion-panel__title">Solo</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unlimited transactions and receipts history</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Real-time receipts attachement through the web or mobile app</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Smart transactions filters</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>CSV export (for your expenses) or PDF (bills, bank statement)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_freelancers_solo-accounting"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Accessibility
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row solo">
                                                <div class="accordion-panel__title">Solo</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Web and mobile applications</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Financial dashboards for efficient
business management</span></div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_freelancers_solo-accessibility"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Customer support
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row solo">
                                                <div class="accordion-panel__title">Solo</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Customer support per email within 15 minutes of average response time</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_freelancers_solo-customer_support"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Legal
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row solo">
                                                <div class="accordion-panel__title">Solo</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Confirmation letter: €45</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Irregularity management: €10</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Irregular account activity: €150</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unpaid check deposit: €25</span></div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_freelancers_solo-legal" class="btn-default-large"
                                                   href="signup.html">Choose this plan</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="creators">
                            <div class="container-plans">
                                <div class="plan plan-solo">
                                    <div class="card">
                                        <h2>Solo pack</h2>
                                        <div class="capital-deposit">
                                            Capital deposit
                                        </div>
                                        <div class="months">
                                            12 months of Solo plan
                                        </div>
                                        <div class="price-line">
                                            <div class="price">
                                                €120
                                            </div>
                                            <div class="price-details-1">Annual payment (excl. VAT)</div>
                                            <div class="price-details-2">You save €38</div>
                                        </div>
                                        <a data-track="website_cta_signup_clicked"
                                           data-location="pricing_creators_solo-pack-head" class="btn-default-large"
                                           href="signup.html">Choose this plan</a>
                                    </div>

                                    <div class="card card-monthly mobile">
                                        <h3>Solo plan</h3>
                                        <div class="price-line">
                                            <div class="container">
                                                <div class="price">
                                                    <div class="number">
                                                        €50
                                                    </div>
                                                    <div class="text">
                                                        (excl. VAT)<br>Capital deposit
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="number">
                                                        €9
                                                    </div>
                                                    <div class="text">
                                                        /mo (excl. VAT)<br><b>Commitment-free</b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a data-track="website_cta_signup_clicked"
                                           data-location="pricing_creators_solo-head" class="btn-default-large"
                                           href="signup.html">Choose this plan</a>
                                    </div>

                                    <div class="container-details mobile">
                                        <h2>Solo Package Details</h2>
                                        <div class='subtitle'>All prices exclude VAT</div>

                                        <div class="accordion">
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Cards
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row solo">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><strong>1</strong> physical Mastercard debit card</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Card with business insurance guarantees</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unlimited payments in euros</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Real-time cards configuration (limits and options)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Additional physical card : €5 / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Additional virtual card : €2 / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Non-EUR card transactions: 2% / transaction</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>ATM withdrawal: €1 / withdrawal</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Additional card printing and delivery fee: €6</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_creators_solo-cards"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Transfers
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row solo">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>French IBAN</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><strong>20</strong> incoming/outgoing transfers or SEPA Direct Debits / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>No movement commission on transfers and SEPA Direct Debits</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unlimited transfers in euros or other currencies</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Beyond: <strong>€0.50</strong> / addtionnal transfer</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Non-EUR outgoing transfers: 1% / transaction</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Bulk transfers (XML)</span></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_creators_solo-transfers"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Check deposits
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row solo">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>no check deposists included</span></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Additional check deposit cost: €2 / check</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_creators_solo-check_depositis"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Accounting
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row solo">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Unlimited transactions and receipts history</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Real-time receipts attachement through the web or mobile app</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Smart transactions filters</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>CSV export (for your expenses) or PDF (bills, bank statement)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_creators_solo-accounting"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Accessibility
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row solo">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Web and mobile applications</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Financial dashboards for efficient business management</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_creators_solo-accessibility"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Customer support
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row solo">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Customer support per email within 15 minutes of average response time</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_creators_solo-customer_support"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Legal
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row solo">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Confirmation letter: €45</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Irregularity management: €10</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Irregular account activity: €150</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unpaid check deposit: €25</span></div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_creators_solo-legal"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="plan plan-standard">
                                    <div class="card">
                                        <h2>Standard pack</h2>
                                        <div class="capital-deposit">
                                            Capital deposit
                                        </div>
                                        <div class="months">
                                            12 months of Standard plan
                                        </div>
                                        <div class="price-line">
                                            <div class="price">
                                                €300
                                            </div>
                                            <div class="price-details-1">Annual payment (excl. VAT)</div>
                                            <div class="price-details-2">You save €98</div>
                                        </div>
                                        <a data-track="website_cta_signup_clicked"
                                           data-location="pricing_creators_standard-pack-head" class="btn-default-large"
                                           href="signup.html">Choose this plan</a>
                                    </div>

                                    <div class="card card-monthly mobile">
                                        <h3>Standard plan</h3>
                                        <div class="price-line">
                                            <div class="container">
                                                <div class="price">
                                                    <div class="number">
                                                        €50
                                                    </div>
                                                    <div class="text">
                                                        (excl. VAT)<br>Capital deposit
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="number">
                                                        €29
                                                    </div>
                                                    <div class="text">
                                                        /mo (excl. VAT)<br><b>Commitment-free</b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a data-track="website_cta_signup_clicked"
                                           data-location="pricing_creators_standard-head" class="btn-default-large"
                                           href="signup.html">Choose this plan</a>
                                    </div>

                                    <div class="container-details mobile">
                                        <h2>Standard Package Details</h2>
                                        <div class='subtitle'>All prices exclude VAT</div>

                                        <div class="accordion">
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Cards
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row standard">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><strong>2</strong> physical Mastercard debit cards</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><strong>2</strong> virtual Mastercard debit cards</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Cards with business insurance guarantees</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unlimited payments in euros</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Real-time cards configuration (limits and options)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Additional physical card : €5 / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Additional virtual card : €2 / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Non-EUR card transactions: 2% / transaction</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>ATM withdrawal: €1 / withdrawal</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Additional card printing and delivery fee: €6</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_creators_standard-cards"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Transfers
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row standard">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>French IBAN</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span><strong>100</strong> incoming/outgoing transfers or SEPA Direct Debits / month</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>No movement commission on transfers and SEPA Direct Debits</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Beyond: <strong>€0.40</strong> / addtionnal transfer</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Non-EUR outgoing transfers: 1% / transaction</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Bulk transfers (XML)</span></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_creators_standard-transfers"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Check deposits
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row standard">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>3 check deposits / month</span></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Options:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Additional check deposit cost: €2 / check</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_creators_standard-check_depositis"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Accounting
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row standard">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Dedicated accountant access </span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <span>Unlimited transactions and receipts history</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Real-time receipts attachement through the web or mobile app</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>CSV export (for your expenses) or PDF (bills, bank statement)</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Smart transactions filters</span></div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_creators_standard-accounting"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Accessibility
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row standard">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Web and mobile applications</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Different roles &amp; permissions: <br>admin / employee / accountant</span>
                                                                    </div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Financial dashboards for efficient business management</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_creators_standard-accessibility"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Customer support
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row standard">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Customer support per email within 15 minutes of average response time</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_creators_standard-customer_support"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__wrapper">
                                                <button class="accordion-btn">
                                                    Legal
                                                </button>

                                                <div class="accordion-panel">

                                                    <div class="accordion-panel__row standard">
                                                        <div class="bulleted-list__wrapper">

                                                            <div class="bulleted-list__header">Included in this plan:</div>

                                                            <div class="bulleted-list__body">
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Confirmation letter: €45</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Irregularity management: €10</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Irregular account activity: €150</span></div>
                                                                </div>
                                                                <div class="bulleted-list__item">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                                             height="6" viewBox="0 0 6 6">
                                                                            <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                                    fill-rule="evenodd"/>
                                                                        </svg>
                                                                    </div>
                                                                    <div><span>Unpaid check deposit: €25</span></div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <a data-track="website_cta_signup_clicked"
                                                           data-location="pricing_creators_standard-legal"
                                                           class="btn-default-large" href="signup.html">Choose this plan</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="container-no_pack_title">You can also <strong>deposit your capital</strong> without
                                benefiting from the pack:</p>

                            <div class="container-no_pack">
                                <div class="plan plan-solo">
                                    <div class="card card-monthly">
                                        <h3>Solo plan</h3>
                                        <div class="price-line">
                                            <div class="container">
                                                <div class="price">
                                                    <div class="number">
                                                        €50
                                                    </div>
                                                    <div class="text">
                                                        (excl. VAT)<br>Capital deposit
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="number">
                                                        €9
                                                    </div>
                                                    <div class="text">
                                                        /mo (excl. VAT)<br><b>Commitment-free</b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a data-track="website_cta_signup_clicked"
                                           data-location="pricing_creators_solo-head" class="btn-default-large"
                                           href="signup.html">Choose this plan</a>
                                    </div>
                                </div>
                                <div class="plan plan-standard">
                                    <div class="card card-monthly">
                                        <h3>Standard plan</h3>
                                        <div class="price-line">
                                            <div class="container">
                                                <div class="price">
                                                    <div class="number">
                                                        €50
                                                    </div>
                                                    <div class="text">
                                                        (excl. VAT)<br>Capital deposit
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="number">
                                                        €29
                                                    </div>
                                                    <div class="text">
                                                        /mo (excl. VAT)<br><b>Commitment-free</b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a data-track="website_cta_signup_clicked"
                                           data-location="pricing_creators_standard-head" class="btn-default-large"
                                           href="signup.html">Choose this plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="container-details">
                                <h2>Details of each plan</h2>
                                <div class='subtitle'>All prices exclude VAT</div>
                                <div class="accordion">
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Cards
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row solo">
                                                <div class="accordion-panel__title">Solo</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span><strong>1</strong> physical Mastercard debit card</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Card with business insurance guarantees</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unlimited payments in euros</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span>Real-time cards configuration (limits and options)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional physical card : €5 / month</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional virtual card : €2 / month</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Non-EUR card transactions: 2% / transaction</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>ATM withdrawal: €1 / withdrawal</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional card printing and delivery fee: €6</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_creators_solo-cards" class="btn-default-large"
                                                   href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row standard">
                                                <div class="accordion-panel__title">Standard</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span><strong>2</strong> physical Mastercard debit cards</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span><strong>2</strong> virtual Mastercard debit cards</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Cards with business insurance guarantees</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unlimited payments in euros</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span>Real-time cards configuration (limits and options)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional physical card : €5 / month</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional virtual card : €2 / month</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Non-EUR card transactions: 2% / transaction</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>ATM withdrawal: €1 / withdrawal</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional card printing and delivery fee: €6</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_creators_standard-cards" class="btn-default-large"
                                                   href="signup.html">Choose this plan</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Transfers
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row solo">
                                                <div class="accordion-panel__title">Solo</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>French IBAN</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span><strong>20</strong> incoming/outgoing transfers or SEPA Direct Debits / month</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>No movement commission on transfers and SEPA Direct Debits</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <span>Unlimited transfers in euros or other currencies</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Beyond: <strong>€0.50</strong> / addtionnal transfer</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Non-EUR outgoing transfers: 1% / transaction</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Bulk transfers (XML)</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_creators_solo-transfers" class="btn-default-large"
                                                   href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row standard">
                                                <div class="accordion-panel__title">Standard</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>French IBAN</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span><strong>100</strong> incoming/outgoing transfers or SEPA Direct Debits / month</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>No movement commission on transfers and SEPA Direct Debits</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Beyond: <strong>€0.40</strong> / addtionnal transfer</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Non-EUR outgoing transfers: 1% / transaction</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Bulk transfers (XML)</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_creators_standard-transfers"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Check deposits
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row solo">
                                                <div class="accordion-panel__title">Solo</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>no check deposists included</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional check deposit cost: €2 / check</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_creators_solo-check_depositis"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row standard">
                                                <div class="accordion-panel__title">Standard</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>3 check deposits / month</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Options:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Additional check deposit cost: €2 / check</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_creators_standard-check_depositis"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Accounting
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row solo">
                                                <div class="accordion-panel__title">Solo</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unlimited transactions and receipts history</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Real-time receipts attachement through the web or mobile app</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Smart transactions filters</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>CSV export (for your expenses) or PDF (bills, bank statement)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_creators_solo-accounting"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row standard">
                                                <div class="accordion-panel__title">Standard</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Dedicated accountant access </span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unlimited transactions and receipts history</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Real-time receipts attachement through the web or mobile app</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>CSV export (for your expenses) or PDF (bills, bank statement)</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Smart transactions filters</span></div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_creators_standard-accounting"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Accessibility
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row solo">
                                                <div class="accordion-panel__title">Solo</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Web and mobile applications</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Financial dashboards for efficient business management</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_creators_solo-accessibility"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row standard">
                                                <div class="accordion-panel__title">Standard</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Web and mobile applications</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Different roles &amp; permissions: <br>admin / employee / accountant</span>
                                                            </div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Financial dashboards for efficient business management</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_creators_standard-accessibility"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Customer support
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row solo">
                                                <div class="accordion-panel__title">Solo</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Customer support per email within 15 minutes of average response time</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_creators_solo-customer_support"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row standard">
                                                <div class="accordion-panel__title">Standard</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Customer support per email within 15 minutes of average response time</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_creators_standard-customer_support"
                                                   class="btn-default-large" href="signup.html">Choose this plan</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__wrapper">
                                        <button class="accordion-btn">
                                            Legal
                                        </button>

                                        <div class="accordion-panel">

                                            <div class="accordion-panel__row solo">
                                                <div class="accordion-panel__title">Solo</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Confirmation letter: €45</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Irregularity management: €10</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Irregular account activity: €150</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unpaid check deposit: €25</span></div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_creators_solo-legal" class="btn-default-large"
                                                   href="signup.html">Choose this plan</a>

                                            </div>
                                            <div class="accordion-panel__row standard">
                                                <div class="accordion-panel__title">Standard</div>

                                                <div class="bulleted-list__wrapper">

                                                    <div class="bulleted-list__header">Included in this plan:</div>

                                                    <div class="bulleted-list__body">
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Confirmation letter: €45</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Irregularity management: €10</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Irregular account activity: €150</span></div>
                                                        </div>
                                                        <div class="bulleted-list__item">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                                     viewBox="0 0 6 6">
                                                                    <circle cx="3" cy="3" r="3" fill="#82879E"
                                                                            fill-rule="evenodd"/>
                                                                </svg>
                                                            </div>
                                                            <div><span>Unpaid check deposit: €25</span></div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <a data-track="website_cta_signup_clicked"
                                                   data-location="pricing_creators_standard-legal" class="btn-default-large"
                                                   href="signup.html">Choose this plan</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>

            </div>
        </section>
        <section id="section-question">
            <svg class="bottom-convex-white" viewBox="0 0 1440 48" version="1.1">
                <g id="bottom-convex" transform="translate(0.000000, -1365.000000)">
                    <g id="Group-7" transform="translate(0.000000, 783.000000)" fill="#FFF">
                        <g id="hero">
                            <path d="M0,582 C194.22075,605.310855 345.235831,619.383493 453.045242,624.217915 C539.007013,628.072638 627.991932,630 720,630 C985.09668,630 1225.09668,614 1440,582 L0,582 Z"
                                  id="background/circular-shape-1"></path>
                        </g>
                    </g>
                </g>
            </svg>

            <div class="container">

                <div class="container-head">
                    <h2>Frequently asked questions</h2>
                </div>
                <div class="container-text">
                    <div class="column">
                        <div class="text">
                            <h3>Is collab a bank?</h3>
                            <p>collab is a <strong>payment institution supervised by the Banque de France</strong> (under
                                number CIB 16958). We allow existing companies as well as companies that are under the
                                registration process (to benefit from <strong>a current account </strong>and <strong>all the
                                    means of payment they need</strong> to run their activity efficiently (physical and
                                virtual cards, debits, transfers, check deposits).

                                More than <strong>25,000 French SMEs</strong> have already chosen to join collab to
                                efficiently manage team expenses. It is secure and integrated into your work ecosystem –
                                also providing a competent customer service.

                                As a regulated payment institution, <strong>all of our clients' funds are secured by our
                                    partner Crédit Mutuel Arkéa and covered by the Fonds de Garantie des Dépôts et
                                    Résolution (FGDR) to up to € 100,000</strong>. Unlike a traditional bank account, a
                                collab account can’t be a debtor and doesn’t allow cash deposit.</p>
                        </div>
                        <div class="text">
                            <h3>Who can open an account on collab?</h3>
                            <p>collab is made for all professionals and companies looking for financial and accounting
                                management optimization. <strong>Professional current account openings are currently
                                    accessible to companies registered in France</strong> (SA, SAS, SASU, SARL, SC &amp;
                                SCI, EURL, liberal professions, micro-entreprises, associations with a SIREN number).
                                <strong>collab also facilitates the creation of businesses</strong> by giving future
                                entrepreneurs the opportunity to open an account and execute the initial share capital
                                deposit (excluding SCI and overseas departments and territories) necessary for the
                                registration (along with the Kbis and SIREN number obtention).
                            </p>
                        </div>
                        <div class="text">
                            <h3>How to open a collab account?</h3>
                            <p>For existing companies or the ones under registration, <strong>the collab account opening
                                    process is 100% online and will take you less than 15 minutes.</strong> All you need to do
                                is to upload your identification documents and a proof of residency from owners and
                                shareholders. Once your account is validated you can order your card(s) and manage your
                                business finances in a few clicks. The account will be validated within less than 24
                                business hours for an existing company. Companies under registration will receive the funds'
                                deposit certificate per email within 72 hours after the capital deposit (the original
                                version is sent by registered mail).</p>
                        </div>
                    </div>
                </div>
                <div class="container-action">
                    <a class="btn-primary-small" href="https://support.collab.eu/hc/en-us" target="_blank" rel=noopener>
                        Learn more
                    </a>
                </div>

            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script src="{{ URL::asset('front/pages/pricing/application-4bf6477feacd1d9b9a376358857b8ac7fa405790cb50f24275d466c4c167100f.js') }}"></script>
@endsection