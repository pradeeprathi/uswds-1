<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page - RFPMart + USWDS</title>
    <meta name="description" content="Learn about the city’s mission, history, values, and organizational structure." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <section class="usa-hero" style="background-image: url('images/webp/bg-about-city.webp');" aria-label="Introduction">
            <div class="grid-container">
                <div class="usa-hero__callout maxw-mobile-lg">
                    <h1 class="usa-hero__heading text-white">Welcome to RFPMart</h1>
                    <p>Simplifying city services and public engagement in one place.</p>
                    <a class="usa-button usa-button--big" href="#">Get Started</a>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="grid-row grid-gap">
                <div class="tablet:grid-col-5 desktop:grid-col-5">
                    <h2 class="font-heading-xl">About RFPMart</h2>
                </div>
                <div class="usa-prose tablet:grid-col-7 desktop:grid-col-7">
                    <p>
                        RFPMart is a Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium distinctio voluptate eligendi aliquam eum, perferendis perspiciatis? Magnam nihil minus sed, sunt dolorum non quo voluptates ipsam explicabo, dignissimos qui. Tempora in quis doloremque! Provident neque corrupti quae odit eveniet eum rerum.
                    </p>
                    <p>
                        We work Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus libero cupiditate, porro voluptatem, odio sit dolorem ipsa praesentium consequatur ducimus harum tempora vero distinctio.
                    </p>
                    <ul class="usa-list">
                        <li>Access city services online</li>
                        <li>Track requests and complaints</li>
                        <li>Stay informed about city updates</li>
                        <li>Engage with community programs</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="usa-section bg-base-dark">
            <div class="grid-container">
                <div class="text-center margin-bottom-4 text-white">
                    <h3 class="font-heading-xl margin-0">Our Services</h3>
                    <p class="font-body-lg margin-top-2">We offer a variety of services to help citizens and city administrators manage tasks efficiently.</p>
                </div>

                <div class="grid-row grid-gap-4">
                    <div class="tablet:grid-col-4">
                        <div class="usa-card usa-card--accent-lighter padding-4 text-center bg-white radius-lg">
                            <h3 class="font-heading-l">City Requests</h3>
                            <p class="font-body-sm line-height-sans-4">Submit, track, and manage service requests and complaints quickly and easily.</p>
                        </div>
                    </div>
                    <div class="tablet:grid-col-4">
                        <div class="usa-card usa-card--accent-lighter padding-4 text-center bg-white radius-lg">
                            <h3 class="font-heading-l">Public Notices</h3>
                            <p class="font-body-sm line-height-sans-4">Receive timely updates, announcements, and alerts from city authorities.</p>
                        </div>
                    </div>
                    <div class="tablet:grid-col-4">
                        <div class="usa-card usa-card--accent-lighter padding-4 text-center bg-white radius-lg">
                            <h3 class="font-heading-l">Online Services</h3>
                            <p class="font-body-sm line-height-sans-4">Access permits, licenses, and applications directly from our platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="usa-section grid-container">
            <div class="text-center margin-bottom-4">
                <h2 class="font-heading-xl margin-0">Why Choose Us?</h2>
                <p class="font-body-lg margin-top-2">RFPMart offers intuitive solutions for citizens and government departments alike.</p>
            </div>

            <div class="grid-row grid-gap-4">
                <div class="tablet:grid-col-3 text-center">
                    <h4 class="font-heading-l margin-0">Easy Access</h4>
                    <p class="font-body-sm line-height-sans-4 margin-top-1">All services accessible in one platform, anytime, anywhere.</p>
                </div>
                <div class="tablet:grid-col-3 text-center">
                    <h4 class="font-heading-l margin-0">Transparency</h4>
                    <p class="font-body-sm line-height-sans-4 margin-top-1">Track requests and progress to ensure accountability and transparency.</p>
                </div>
                <div class="tablet:grid-col-3 text-center">
                    <h4 class="font-heading-l margin-0">Efficiency</h4>
                    <p class="font-body-sm line-height-sans-4 margin-top-1">Streamlined processes to reduce time and effort for everyone.</p>
                </div>
                <div class="tablet:grid-col-3 text-center">
                    <h4 class="font-heading-l margin-0">Support</h4>
                    <p class="font-body-sm line-height-sans-4 margin-top-1">Dedicated customer support to assist with queries and requests.</p>
                </div>
            </div>
        </section>

        <section class="usa-section bg-gray-5">
            <div class="grid-container">
                <div class="text-center margin-bottom-4">
                    <h2 class="font-heading-xl margin-0">What Our Users Say</h2>
                    <p class="font-body-lg margin-top-2">Feedback from citizens and city departments who use RFPMart.</p>
                </div>

                <div class="grid-row grid-gap-4">
                    <div class="tablet:grid-col-4 text-center">
                        <div class="usa-card padding-4">
                            <div class="usa-card__img width-10 height-10 bg-gray-10 margin-x-auto radius-pill">
                                <img src="images/webp/card-about-city-manager.webp" alt="Profile Photo">
                            </div>
                            <p class="font-body-sm line-height-sans-4">RFPMart made submitting service requests so easy! Highly recommended.</p>
                            <strong class="font-heading-sm">- John Doe, Citizen</strong>
                        </div>
                    </div>
                    <div class="tablet:grid-col-4 text-center">
                        <div class="usa-card padding-4">
                            <div class="usa-card__img width-10 height-10 bg-gray-10 margin-x-auto radius-pill">
                                <img src="images/webp/card-about-city-manager.webp" alt="Profile Photo">
                            </div>
                            <p class="font-body-sm line-height-sans-4">The dashboard helps us monitor city requests efficiently. Saves more time.</p>
                            <strong class="font-heading-sm">- Ryan S, City Clerk</strong>
                        </div>
                    </div>
                    <div class="tablet:grid-col-4 text-center">
                        <div class="usa-card padding-4">
                            <div class="usa-card__img width-10 height-10 bg-gray-10 margin-x-auto radius-pill">
                                <img src="images/webp/card-about-city-manager.webp" alt="Profile Photo">
                            </div>
                            <p class="font-body-sm line-height-sans-4">A one-stop platform for all public notices and updates. And It is very helpful.</p>
                            <strong class="font-heading-sm">- Michael, Resident</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="usa-section text-center padding-y-6">
            <h2 class="font-heading-xl">Get Started with RFPMart Today</h2>
            <p class="font-body-lg margin-bottom-4">Join thousands of citizens and city departments improving their workflows and engagement.</p>
            <a href="#services" class="usa-button usa-button--big">Explore Services</a>
        </section>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>