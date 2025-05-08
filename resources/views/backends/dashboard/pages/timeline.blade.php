@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">Timeline</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>

                <li class="breadcrumb-item active">Timeline</li>
            </ol>
        </div>
    </div>




    <div class="row justify-content-center">
        <div class="col-xxl-12">
            <div class="text-center mb-4">
                <h2 class="textdark fw-bold">Our Company Milestone</h2>
            </div>
            <div class="timeline" dir="ltr">
                <div class="timeline-show mb-3 text-center">
                    <h5 class="m-0 time-show-name">Today</h5>
                </div>

                <div class="timeline-lg-item timeline-item-left">
                    <div class="timeline-desk">
                        <div class="timeline-box">
                            <span class="arrow-alt shadow-none"></span>
                            <span class="timeline-icon avatar-lg">
                                <span class="avatar-title bg-light rounded-circle">
                                    <iconify-icon icon="solar:check-circle-bold-duotone" class="text-success fs-28"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10" opacity=".5"></path><path fill="currentColor" d="M16.03 8.97a.75.75 0 0 1 0 1.06l-5 5a.75.75 0 0 1-1.06 0l-2-2a.75.75 0 1 1 1.06-1.06l1.47 1.47l2.235-2.235L14.97 8.97a.75.75 0 0 1 1.06 0"></path></svg></template></iconify-icon>
                                </span>
                            </span>
                            <div class="d-flex justify-content-between gap-2">
                                <h4 class="fw-bold text-dark mb-0">01</h4>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium">23 May 2024</p>

                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2 text-dark fw-semibold fs-16">Project Completed: Achievements and Outcomes</p>
                                    <p class="mb-0">1hr Ago</p>
                                </div>
                                <p class="mb-1"><i class="ti ti-checks text-success me-1 fs-16"></i>Successfully met all project goals and objectives within the stipulated timeline.</p>
                                <p class="mb-0"><i class="ti ti-checks text-success me-1 fs-16"></i>Delivered high-quality outputs that meet or exceed the expectations of stakeholders.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-lg-item timeline-item-right">
                    <div class="timeline-desk">
                        <div class="timeline-box">
                            <span class="arrow shadow-none"></span>
                            <span class="timeline-icon avatar-lg">
                                <span class="avatar-title bg-light rounded-circle">
                                    <iconify-icon icon="solar:user-bold-duotone" class="text-primary fs-28"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><circle cx="12" cy="6" r="4" fill="currentColor"></circle><path fill="currentColor" d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5" opacity=".5"></path></svg></template></iconify-icon>
                                </span>
                            </span>
                            <div class="d-flex justify-content-between gap-2">
                                <h4 class="fw-bold text-dark mb-0">02</h4>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium">23 May 2024</p>

                                </div>
                            </div>
                            <div class="d-flex align-items-center  gap-2 my-3">
                                <img src="{{ asset('assets') }}/images/avatar-10.jpg" alt="" class="avatar-lg rounded-circle border border-light border-2">
                                <div>
                                    <p class="text-dark fw-medium fs-15 mb-0">Sara Johnson</p>
                                    <p class="mb-0">srajhnson@yeti.com</p>
                                </div>
                                <div class="ms-auto">
                                    <p class="mb-0">2hr Ago</p>
                                </div>
                            </div>
                            <p class="mb-2 text-dark fw-semibold fs-16">Join as a full stack developers</p>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">html</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">CSS</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">JavaScript</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">NodeJS</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">ExpressJS</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">ExpressJS</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">Django</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">MySQL</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12 my-1">PostgreSQL</span>
                        </div>
                    </div>
                </div>


                <div class="timeline-lg-item timeline-item-left">
                    <div class="timeline-desk">
                        <div class="timeline-box">
                            <span class="arrow-alt shadow-none"></span>
                            <span class="timeline-icon avatar-lg">
                                <span class="avatar-title bg-light rounded-circle">
                                    <iconify-icon icon="solar:document-add-bold-duotone" class="text-warning fs-28"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M3 10c0-3.771 0-5.657 1.172-6.828S7.229 2 11 2h2c3.771 0 5.657 0 6.828 1.172S21 6.229 21 10v4c0 3.771 0 5.657-1.172 6.828S16.771 22 13 22h-2c-3.771 0-5.657 0-6.828-1.172S3 17.771 3 14z" opacity=".5"></path><path fill="currentColor" d="M16.519 16.501c.175-.136.334-.295.651-.612l3.957-3.958c.096-.095.052-.26-.075-.305a4.3 4.3 0 0 1-1.644-1.034a4.3 4.3 0 0 1-1.034-1.644c-.045-.127-.21-.171-.305-.075L14.11 12.83c-.317.317-.476.476-.612.651q-.243.311-.412.666c-.095.2-.166.414-.308.84l-.184.55l-.292.875l-.273.82a.584.584 0 0 0 .738.738l.82-.273l.875-.292l.55-.184c.426-.142.64-.212.84-.308q.355-.17.666-.412m5.849-5.809a2.163 2.163 0 1 0-3.06-3.059l-.126.128a.52.52 0 0 0-.148.465c.02.107.055.265.12.452c.13.375.376.867.839 1.33s.955.709 1.33.839c.188.065.345.1.452.12a.53.53 0 0 0 .465-.148z"></path><path fill="currentColor" fill-rule="evenodd" d="M7.25 9A.75.75 0 0 1 8 8.25h6.5a.75.75 0 0 1 0 1.5H8A.75.75 0 0 1 7.25 9m0 4a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 0 1.5H8a.75.75 0 0 1-.75-.75m0 4a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H8a.75.75 0 0 1-.75-.75" clip-rule="evenodd"></path></svg></template></iconify-icon>
                                </span>
                            </span>
                            <div class="d-flex justify-content-between gap-2">
                                <h4 class="fw-bold text-dark mb-0">03</h4>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium">23 May 2024</p>

                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2 text-dark fw-semibold fs-16">Started Company Meeting</p>
                                    <p class="mb-0">2hr Ago</p>
                                </div>
                                <div class="d-flex flex-wrap align-items-center my-1 gap-1">
                                    <div class="avatar-group">
                                        <div class="avatar">
                                            <img src="{{ asset('assets') }}/images/avatar-4.jpg" alt="" class="rounded-circle avatar-sm">
                                        </div>
                                        <div class="avatar">
                                            <img src="{{ asset('assets') }}/images/avatar-5.jpg" alt="" class="rounded-circle avatar-sm">
                                        </div>
                                        <div class="avatar">
                                            <img src="{{ asset('assets') }}/images/avatar-6.jpg" alt="" class="rounded-circle avatar-sm">
                                        </div>
                                        <div class="avatar">
                                            <img src="{{ asset('assets') }}/images/avatar-7.jpg" alt="" class="rounded-circle avatar-sm">
                                        </div>
                                        <div class="avatar">
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-dark text-white fs-18 rounded-circle">
                                                    <i class="ti ti-plus"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <p class="mb-0 ms-1 fs-14">+23 Employee Join Meeting </p>
                                </div>
                                <p class="mb-0 mt-3 text-dark fw-semibold">Topic : <span class="text-muted fw-medium">New project and admin dashboard</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-lg-item timeline-item-right">
                    <div class="timeline-desk">
                        <div class="timeline-box">
                            <span class="arrow shadow-none"></span>
                            <span class="timeline-icon avatar-lg">
                                <span class="avatar-title bg-light rounded-circle">
                                    <iconify-icon icon="solar:graph-new-up-bold-duotone" class="text-success fs-28"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12" opacity=".5"></path><path fill="currentColor" d="M22 5a3 3 0 1 1-6 0a3 3 0 0 1 6 0m-7.5 5.75a.75.75 0 0 1 0-1.5H17a.75.75 0 0 1 .75.75v2.5a.75.75 0 0 1-1.5 0v-.69l-2.013 2.013a1.75 1.75 0 0 1-2.474 0l-1.586-1.586a.25.25 0 0 0-.354 0L7.53 14.53a.75.75 0 0 1-1.06-1.06l2.293-2.293a1.75 1.75 0 0 1 2.474 0l1.586 1.586a.25.25 0 0 0 .354 0l2.012-2.013z"></path></svg></template></iconify-icon>
                                </span>
                            </span>
                            <div class="d-flex justify-content-between gap-2">
                                <h4 class="fw-bold text-dark mb-0">04</h4>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium">23 May 2024</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h4 class="text-dark mb-0 fw-semibold"> New Admin Release In Bootstrap <span class="badge bg-success-subtle text-success px-2 py-1 fs-11 ms-1">New Release</span></h4>
                                    <p class="mb-0">3hr Ago</p>
                                </div>
                                <p>Get started with our company of web components and interactive elements built on top of Bootstrap.</p>
                                <div class="timeline-album mb-3">
                                    <a href="javascript: void(0);">
                                        <img src="{{ asset('assets') }}/images/small-7.jpg" alt="" class="rounded-3">
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img src="{{ asset('assets') }}/images/small-4.jpg" alt="" class="rounded-3">
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img src="{{ asset('assets') }}/images/small-1.jpg" alt="" class="rounded-3">
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img src="{{ asset('assets') }}/images/small-2.jpg" alt="" class="rounded-3">
                                    </a>
                                </div>
                                <a href="https://coderthemes.com/boron/layouts/pages-timeline.html#!" class="btn btn-primary btn-sm">Show More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-lg-item timeline-item-left">
                    <div class="timeline-desk">
                        <div class="timeline-box">
                            <span class="arrow-alt shadow-none"></span>
                            <span class="timeline-icon avatar-lg">
                                <span class="avatar-title bg-light rounded-circle">
                                    <iconify-icon icon="solar:presentation-graph-bold-duotone" class="text-primary fs-28"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M4 10.5V2.75h16v7.75c0 3.064 0 4.596-1.004 5.548s-2.62.952-5.853.952h-2.286c-3.232 0-4.849 0-5.853-.952S4 13.564 4 10.5" opacity=".5"></path><path fill="currentColor" d="M15.53 9.03a.75.75 0 0 0-1.06-1.06l-1.293 1.293l-.177.175l-.177-.175l-.61-.61a5 5 0 0 0-.452-.417A1.24 1.24 0 0 0 11 7.957a1.24 1.24 0 0 0-.761.279c-.15.114-.307.271-.452.416L8.47 9.97a.75.75 0 1 0 1.06 1.06l1.293-1.293l.177-.175l.177.175l.61.61c.145.146.302.303.452.417c.176.134.427.279.761.279s.585-.145.761-.279c.15-.114.307-.271.452-.416zM2 1.25a.75.75 0 0 0 0 1.5h20a.75.75 0 0 0 0-1.5zM11.25 17v3.537l-1.585.792a.75.75 0 1 0 .67 1.342L12 21.839l1.665.832a.75.75 0 1 0 .67-1.342l-1.585-.793V17z"></path></svg></template></iconify-icon>
                                </span>
                            </span>
                            <div class="d-flex justify-content-between gap-2">
                                <h4 class="fw-bold text-dark mb-0">05</h4>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium">23 May 2024</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="d-flex align-items-center  gap-2 my-3">
                                    <img src="{{ asset('assets') }}/images/avatar-5.jpg" alt="" class="avatar-lg rounded-circle border border-light border-2">
                                    <div>
                                        <h4 class="text-dark  fw-semibold"> Assigned to serve as the project's director</h4>
                                        <span class="text-dark"><small>by <a href="https://coderthemes.com/boron/layouts/pages-timeline.html#!" class="text-primary">John N. Ward.</a></small></span>
                                    </div>
                                    <div class="ms-auto">
                                        <p class="mb-0">3hr Ago</p>
                                    </div>
                                </div>
                                <p class="mb-0">I've come across your posts and found some favorable deals on your page. I've added a load of products to the cart and I don't know the payment options you avail. Also, can you enlighten me about any discount</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="timeline-show my-3 text-center">
                    <h5 class="m-0 time-show-name">Yesterday</h5>
                </div>


                <div class="timeline-lg-item timeline-item-right">
                    <div class="timeline-desk">
                        <div class="timeline-box">
                            <span class="arrow shadow-none"></span>
                            <span class="timeline-icon avatar-lg">
                                <span class="avatar-title bg-light rounded-circle">
                                    <iconify-icon icon="solar:code-circle-bold-duotone" class="text-warning fs-28"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10" opacity=".5"></path><path fill="currentColor" d="M13.488 6.446a.75.75 0 0 1 .53.918l-2.588 9.66a.75.75 0 0 1-1.449-.389l2.589-9.659a.75.75 0 0 1 .918-.53M14.97 8.47a.75.75 0 0 1 1.06 0l.209.208c.635.635 1.165 1.165 1.529 1.642c.384.504.654 1.036.654 1.68s-.27 1.176-.654 1.68c-.364.477-.894 1.007-1.53 1.642l-.208.208a.75.75 0 1 1-1.06-1.06l.171-.172c.682-.682 1.139-1.14 1.434-1.528c.283-.37.347-.586.347-.77s-.064-.4-.347-.77c-.295-.387-.752-.846-1.434-1.528l-.171-.172a.75.75 0 0 1 0-1.06m-7 0a.75.75 0 0 1 1.06 1.06l-.171.172c-.682.682-1.138 1.14-1.434 1.528c-.283.37-.346.586-.346.77s.063.4.346.77c.296.387.752.846 1.434 1.528l.172.172a.75.75 0 1 1-1.061 1.06l-.208-.208c-.636-.635-1.166-1.165-1.53-1.642c-.384-.504-.653-1.036-.653-1.68s.27-1.176.653-1.68c.364-.477.894-1.007 1.53-1.642z"></path></svg></template></iconify-icon>
                                </span>
                            </span>
                            <div class="d-flex justify-content-between gap-2">
                                <h4 class="fw-bold text-dark mb-0">01</h4>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium">22 May 2024</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h4 class="text-dark mb-0  fw-semibold"> We have achieved 5.6k sales in our themes.</h4>
                                    <p class="mb-0">1day Ago</p>
                                </div>
                                <p class="mb-0">As we celebrate this achievement, we remain focused on our mission to deliver top-notch themes that meet the evolving needs of our users. We are excited about the future and are dedicated to reaching new heights, expanding our offerings, and maintaining the high standards that have earned us this success</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-lg-item timeline-item-left">
                    <div class="timeline-desk">
                        <div class="timeline-box">
                            <span class="arrow-alt shadow-none"></span>
                            <span class="timeline-icon avatar-lg">
                                <span class="avatar-title bg-light rounded-circle">
                                    <iconify-icon icon="solar:book-bookmark-bold-duotone" class="text-success fs-28"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 20.028V18H8v2.028c0 .277 0 .416.095.472s.224-.006.484-.13l1.242-.593c.088-.042.132-.063.179-.063s.091.02.179.063l1.242.593c.26.124.39.186.484.13c.095-.056.095-.195.095-.472" opacity=".5"></path><path fill="currentColor" d="M8 18h-.574c-1.084 0-1.462.006-1.753.068c-.513.11-.96.347-1.285.667c-.11.108-.164.161-.291.505s-.107.489-.066.78l.022.15c.11.653.31.998.616 1.244c.307.246.737.407 1.55.494c.837.09 1.946.092 3.536.092h4.43c1.59 0 2.7-.001 3.536-.092c.813-.087 1.243-.248 1.55-.494s.506-.591.616-1.243c.091-.548.11-1.241.113-2.171h-8v2.028c0 .277 0 .416-.095.472s-.224-.006-.484-.13l-1.242-.593c-.088-.042-.132-.063-.179-.063s-.091.02-.179.063l-1.242.593c-.26.124-.39.186-.484.13C8 20.444 8 20.305 8 20.028z"></path><path fill="currentColor" d="M4.727 2.733c.306-.308.734-.508 1.544-.618C7.105 2.002 8.209 2 9.793 2h4.414c1.584 0 2.688.002 3.522.115c.81.11 1.238.31 1.544.618c.305.308.504.74.613 1.557c.112.84.114 1.955.114 3.552V18H7.426c-1.084 0-1.462.006-1.753.068c-.513.11-.96.347-1.285.667c-.11.108-.164.161-.291.505A1.3 1.3 0 0 0 4 19.7V7.842c0-1.597.002-2.711.114-3.552c.109-.816.308-1.249.613-1.557" opacity=".5"></path><path fill="currentColor" d="M7.25 7A.75.75 0 0 1 8 6.25h8a.75.75 0 0 1 0 1.5H8A.75.75 0 0 1 7.25 7M8 9.75a.75.75 0 0 0 0 1.5h5a.75.75 0 0 0 0-1.5z"></path></svg></template></iconify-icon>
                                </span>
                            </span>
                            <div class="d-flex justify-content-between gap-2">
                                <h4 class="fw-bold text-dark mb-0">02</h4>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium">22 May 2024</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-lg">
                                        <span class="avatar-title bg-light rounded-circle">
                                            <iconify-icon icon="solar:monitor-bold" class="text-primary fs-28"><template shadowrootmode="open"><style data-style="data-style">:host{display:inline-block;vertical-align:0}span,svg{display:block}</style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M8 17c-2.828 0-4.243 0-5.121-.879c-.57-.569-.77-1.363-.84-2.621h19.923c-.07 1.258-.271 2.052-.84 2.621C20.241 17 18.827 17 16 17h-3.25v4H16a.75.75 0 0 1 0 1.5H8A.75.75 0 0 1 8 21h3.25v-4zm2-15h4c3.771 0 5.657 0 6.828 1.172S22 6.229 22 10v1q.002.827-.006 1.5H2.007Q1.998 11.827 2 11v-1c0-3.771 0-5.657 1.172-6.828S6.229 2 10 2"></path></svg></template></iconify-icon>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-dark mb-0  fw-semibold"> Website Launched</h4>
                                        <p class="text-muted fw-medium fs-14 mt-1 mb-0"><span class="text-dark">Name : </span> Ocen</p>
                                    </div>
                                </div>
                                <p class="mb-0 mt-2">Creating a simple Bootstrap website involves using the Bootstrap framework to style and layout your HTML content. </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end timeline -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->


</div>
@endsection



@push('script')

@endpush
