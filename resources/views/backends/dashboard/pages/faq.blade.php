@extends('backends.layouts.app')


@push('style')

{{-- {{ asset('assets') }}/css/ --}}

@endpush



@section('content')
<div class="page-container">


    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 text-uppercase fw-bold mb-0">FAQ</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Boron</a></li>

                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>

                <li class="breadcrumb-item active">FAQ</li>
            </ol>
        </div>
    </div>




    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between g-3">
                        <div class="col-xl-3 col-lg-6">
                            <div>
                                <div class="avatar-lg bg-primary rounded d-flex align-items-center justify-content-center mb-3">
                                    <i class="ti ti-question-mark fs-32 text-white"></i>
                                </div>
                                <h3 class="mb-1">Frequently Asked Questions</h3>
                                <p class="mb-3">Browse Through The Most Frequently Asked Questions</p>

                                <div class="d-flex align-items-center gap-2 border p-2 rounded mb-3 ms-0">
                                    <div class="avatar-lg bg-light rounded d-flex align-items-center justify-content-center">
                                        <i class="ti ti-search fs-23 text-primary"></i>
                                    </div>
                                    <div>
                                        <a href="https://coderthemes.com/boron/layouts/pages-faq.html#!" class="fw-medium fs-15">Visit Help Center</a>
                                        <p class="mb-0 mt-1">Check Out Tutorials</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 border p-2 rounded mb-3 ms-0">
                                    <div class="avatar-lg bg-light rounded d-flex align-items-center justify-content-center">
                                        <i class="ti ti-phone fs-23 text-primary"></i>
                                    </div>
                                    <div>
                                        <a href="https://coderthemes.com/boron/layouts/pages-faq.html#!" class="fw-medium fs-15">Book a Demo</a>
                                        <p class="mb-0 mt-1">1:1 Talk With A Tax Specialist.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 border p-2 rounded ms-0">
                                    <div class="avatar-lg bg-light rounded d-flex align-items-center justify-content-center">
                                        <i class="ti ti-brand-hipchat fs-23 text-primary"></i>
                                    </div>
                                    <div>
                                        <a href="https://coderthemes.com/boron/layouts/pages-faq.html#!" class="fw-medium fs-15">Live Chat Support</a>
                                        <p class="mb-0 mt-1">24/7 available. No chatbots.</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <a href="https://coderthemes.com/boron/layouts/pages-faq.html#!" class="btn btn-primary">Show More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 text-center">
                            <img src="{{ asset('assets') }}/images/faq.png" alt="" class="img-fluid mt-3">
                            <div class="app-search app-search-lg py-1 mt-3">
                                <input type="text" class="form-control rounded py-2" placeholder="Search...">
                                <i class="app-search-icon ti ti-search fs-18 text-muted"></i>
                            </div>
                            <div class="d-flex flex-wrap align-items-center gap-1 mt-2">
                                <h5 class="mb-0">Popular Searched : </h5>
                                <span class="badge text-bg-light rounded-pill fw-normal px-2 py-1 fs-6">Apps</span>
                                <span class="badge text-bg-light rounded-pill fw-normal px-2 py-1 fs-6">Developers</span>
                                <span class="badge text-bg-light rounded-pill fw-normal px-2 py-1 fs-6">Repair</span>
                                <span class="badge text-bg-light rounded-pill fw-normal px-2 py-1 fs-6">Billing</span>
                                <span class="badge text-bg-light rounded-pill fw-normal px-2 py-1 fs-6">Payment</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div>
                                <h4 class="card-title mb-3">Write Your Question :</h4>
                                <div class="border p-3 rounded bg-light-subtle">
                                    <form>
                                        <div class="mb-2">
                                            <label for="your-name" class="form-label">Your Name</label>
                                            <input type="text" id="your-name" name="your-name" class="form-control" placeholder="Full Name">
                                        </div>
                                        <div class="mb-2">
                                            <label for="email-email" class="form-label">Email</label>
                                            <input type="email" id="email-email" name="email-email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="mb-2">
                                            <label for="phone-number" class="form-label">Phone number</label>
                                            <input type="number" id="phone-number" name="phone-number" class="form-control" placeholder="Number">
                                        </div>
                                        <div>
                                            <label for="question-textarea" class="form-label">Enter Your Question</label>
                                            <textarea class="form-control" id="question-textarea" rows="3" placeholder="Message"></textarea>
                                        </div>
                                    </form>
                                    <div class="mt-2">
                                        <a href="https://coderthemes.com/boron/layouts/pages-faq.html#!" class="btn btn-primary w-100">Send</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3">
            <div class="bg-body-secondary shadow rounded docs-nav">
                <ul class="nav bg-transparent flex-column fs-15 ps-2">
                    <li class="nav-item">
                        <a href="https://coderthemes.com/boron/layouts/pages-faq.html#general" class="nav-link">General</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://coderthemes.com/boron/layouts/pages-faq.html#integration" class="nav-link">Integration</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://coderthemes.com/boron/layouts/pages-faq.html#payment" class="nav-link">Payment</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://coderthemes.com/boron/layouts/pages-faq.html#shipping" class="nav-link">Shipping</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://coderthemes.com/boron/layouts/pages-faq.html#return" class="nav-link">Return</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-xl-9">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3 anchor" id="general">General FAQ's</h4>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is a session tracking dashboard?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A session tracking dashboard is a visual tool used to monitor and analyze user sessions on a website or application. It provides insights into user behavior, including their interactions, paths, and engagement patterns during their visits.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Why is session tracking important for a website or app?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    For online stores, session tracking is essential to manage the contents of a user’s shopping cart. Without session tracking, the items in the cart could be lost as the user navigates through the site.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What metrics can I track in a session tracking dashboard?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    In a session tracking dashboard, you can track a variety of metrics to gain insights into user behavior, website performance, and overall user experience. Here are some key metrics you can monitor:
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How can I use session tracking data to improve my website or app?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Use scroll depth and time-on-page metrics to determine which content is engaging users the most. Focus on creating similar content or improving under performing pages.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What are some common challenges with session tracking?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Session tracking, while invaluable for understanding user behavior and optimizing website or app performance, comes with several challenges. One major issue is ensuring data privacy and compliance with regulations like GDPR and CCPA.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3 anchor" id="integration">Integration</h4>
                    <div class="accordion" id="accordionExample2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    How can I ensure data accuracy in my session tracking dashboard?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse show" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Set an appropriate session timeout period to avoid splitting a single session into multiple sessions or merging distinct sessions into one. Typically, a 30-minute timeout is standard, but this can be adjusted based on
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Can I track user sessions across multiple platforms and devices?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Yes, you can track user sessions across multiple platforms and devices, but it requires implementing a few strategies and using the right tools to ensure accurate tracking. Here’s how you can achieve this:
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    What is integration, and why is it important for our session tracking dashboard?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Session management involves managing requests between a user and web-based app or service. Learn about best practices of session management and the attacks
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Which systems or platforms can be integrated with our session tracking dashboard?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Integrating your session tracking dashboard with various systems and platforms can provide a more comprehensive view of user behavior and streamline data management. Here are some commonly integrated systems and platforms
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Is technical expertise required to perform an integration?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Session tracking, while invaluable for understanding user behavior and optimizing website or app performance, comes with several challenges. One major issue is ensuring data privacy and compliance with regulations like GDPR and CCPA.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3 anchor" id="payment">Payment</h4>
                    <div class="accordion" id="accordionExample3">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                    When will payment be processed for my order?
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse show" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    Payment is processed during the checkout procedure when you finalize your order. A confirmation screen displaying the order number signifies that payment has been successfully completed.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    What is the process for payment on my order?
                                </button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    We welcome payments via Visa®, MasterCard®, American Express®, and PayPal®. Rest assured, all information transmitted to our servers is encrypted, ensuring the utmost security for your credit card details.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                    What steps should I take if I encounter difficulties while placing an order?
                                </button>
                            </h2>
                            <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    If you encounter any technical issues with our website, please reach out to us via our support portal. Alternatively, you can contact us toll-free at 1-000-000-000 or email us at order@companymail.com.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                    Which license is required for an end product exclusively accessible to paying users?
                                </button>
                            </h2>
                            <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    If you have paying users or you are developing any SaaS products then you need an Extended License. For each products, you need a license. You can get free lifetime updates as well.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                    How does billing work?
                                </button>
                            </h2>
                            <div id="collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    Plans are per workspace, not per account. You can upgrade one workspace, and still have any number of free workspaces.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3 anchor" id="shipping">Shipping</h4>
                    <div class="accordion" id="accordionExample4">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                                    What is the shipping method for delivering my order?
                                </button>
                            </h2>
                            <div id="collapseSixteen" class="accordion-collapse collapse show" data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    For large items, we use a third-party logistics company to deliver your product, providing you with scheduled "room of choice" delivery service. For smaller items, we offer complimentary parcel delivery.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                    How much does delivery for my order cost?
                                </button>
                            </h2>
                            <div id="collapseSeventeen" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    Scheduled delivery is priced at either $69 or $99 per order, depending on the destination postal code. Parcel delivery, on the other hand, is complimentary. </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                    What steps should I take if my product arrives in a damaged condition?
                                </button>
                            </h2>
                            <div id="collapseEighteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    We will swiftly replace any product damaged during transit. Simply reach out to our support team to inform us of the issue within 48 hours of the product's arrival. </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                    What steps must I take to commence selling?
                                </button>
                            </h2>
                            <div id="collapseNineteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    We will swiftly replace any product damaged during transit. Simply reach out to our support team to inform us of the issue within 48 hours of the product's arrival. </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                    Can other info be added to an invoice?
                                </button>
                            </h2>
                            <div id="collapseTwenty" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    At the moment, the only way to add additional information to invoices is to add the information to the workspace's name manually.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3 anchor" id="return">Return</h4>
                    <div class="accordion" id="accordionExample5">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty-one" aria-expanded="false" aria-controls="collapseTwenty-one">
                                    Is it possible for me to initiate a return for my product?
                                </button>
                            </h2>
                            <div id="collapseTwenty-one" class="accordion-collapse collapse" data-bs-parent="#accordionExample5" style="">
                                <div class="accordion-body">
                                    You may initiate a return for your product within 15 days of delivery by reaching out to our support team. All returned merchandise must be in its original packaging with all accompanying items intact.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty-two" aria-expanded="false" aria-controls="collapseTwenty-two">
                                    Is it possible to cancel my order?
                                </button>
                            </h2>
                            <div id="collapseTwenty-two" class="accordion-collapse collapse" data-bs-parent="#accordionExample5" style="">
                                <div class="accordion-body">
                                    For scheduled delivery orders, cancellation is permissible up to 72 hours before your chosen delivery date for a full refund. Unfortunately, parcel delivery orders cannot be cancelled. Nevertheless, upon request, a free return label can be provided .
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty-three" aria-expanded="false" aria-controls="collapseTwenty-three">
                                    Where can I check the status of my return?
                                </button>
                            </h2>
                            <div id="collapseTwenty-three" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                <div class="accordion-body">
                                    Find the item in Your Orders Choose Return/Refund Status
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty-four" aria-expanded="false" aria-controls="collapseTwenty-four">
                                    What is the duration of the warranty?
                                </button>
                            </h2>
                            <div id="collapseTwenty-four" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                <div class="accordion-body">
                                    Find the item in Your Orders Choose Return/Refund Status
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty-five" aria-expanded="false" aria-controls="collapseTwenty-five">
                                    What is your cancellation policy?
                                </button>
                            </h2>
                            <div id="collapseTwenty-five" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                <div class="accordion-body">
                                    We understand that things change. You can cancel your plan at any time and we'll refund you the difference already paid.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div> <!-- container -->
@endsection



@push('script')

@endpush
