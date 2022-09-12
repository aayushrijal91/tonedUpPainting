<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="header-top-bar">
        <div class="container-fluid px-xl-0">
            <div class="row gx-xxl-5 justify-content-center justify-content-xl-end align-items-center">
                <div class="col-12 col-xl">
                    <div class="logo-wrapper">
                        <a href="./" class="logo">
                            <?= renderImg("logo.png", "logo") ?>
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="timing-wrapper">
                        <div class="row justify-content-center">
                            <div class="col-auto pr-2 pr-md-3 pr-lg-4">
                                <div class="current-time fs-14 fw-700 text-white">3:11 PM</div>
                            </div>
                            <div class="col-auto position-relative">
                                <div class="pulse pulsating-circle"></div>
                            </div>
                            <div class="col-auto">
                                <div class="currently-open fs-14 fw-700 text-white letter-spacing-n02">We're Open!</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto text-white fs-14 fw-600 py-4 py-md-0">
                    Toned Up Specialises in Residential Painting
                </div>
                <div class="col-auto">
                    <div class="row gx-3">
                        <div class="col-auto">
                            <a href="https://www.facebook.com/profile.php?id=100083383505460" class=""><?= renderImg("facebook.png", "icons") ?></a>
                        </div>
                        <div class="col-auto">
                            <a href="https://www.instagram.com/tonedup_painting/" class=""><?= renderImg("instagram.png", "icons") ?></a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-auto px-0 px-md-3 px-xl-0 pt-md-4 pt-xl-0">
                    <div class="row gx-0 align-items-center header-buttons">
                        <div class="col-6 col-md-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-primary py-3 px-md-5 px-xl-3 px-xxl-5">
                                <?= $phone_number ?>
                            </a>
                        </div>
                        <div class="col-6 col-md-auto">
                            <a href="#form" class="btn btn-gradient py-3 px-md-5 px-xl-3 px-xxl-5">
                                Book Online
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-bar"></div>
    <div class="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xxl-7">
                    <div class="heroHeading fs-2 pe-xxl-7">
                        We’re so confident that you will be satisfied with our work, we back it with a 5-Year Guarantee!
                    </div>
                    <div class="text-white fs-10 letter-spacing-n02 line-height-3 fw-600 pt-4 pe-xxl-7">
                        We are Qualified & Considerate painting Professionals specialising in residential painting in Melbourne & surrounding suburbs.
                    </div>
                </div>
                <div class="col d-none d-lg-block d-xxl-none"><?= renderImg("banner-sm.png", "background") ?></div>
            </div>
        </div>
        <?= renderImg("banner.png", "background", "banner-img d-none d-xxl-block") ?>
        <?= renderImg("banner-sm.png", "background", "banner-img d-lg-none pt-5") ?>
    </div>
</header>

<section class="form" id="form">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-xl-6 pe-xxl-6">
                <div class="letter-spacing-n2 text-dark fw-800 fs-6 letter-spacing-n02">Book in your FREE Quote</div>
                <form action="./src/form" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                    <div class="row no-gutters justify-content-lg-between">
                        <div class="col-12 col-md-6 pr-md-1 pr-lg-2">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <div class="input-group">
                                    <input class="form-control bg-white rounded-0" type="text" placeholder="Marjorie" id="name" name="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pl-md-1 pl-lg-2">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <div class="input-group">
                                    <input class="form-control rounded-0 bg-white" type="tel" placeholder="0400 000 000" id="phone" name="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <div class="input-group">
                                    <input class="form-control rounded-0 bg-white" type="email" id="email" placeholder="example@email.com" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="service">Your Painting Need</label>
                                <div class="input-group">
                                    <select name="service" id="service" class="form-control rounded-0 bg-white">
                                        <option selected disabled>Select an option</option>
                                        <option>Fence spray painting</option>
                                        <option>Timber staining</option>
                                        <option>Renovations/Extensions</option>
                                        <option>Pressure washing</option>
                                        <option>Minor rot repairs</option>
                                        <option>Period homes</option>
                                        <option>Commercial & strata re-paints</option>
                                        <option>Interior & exterior painting</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pt-3 pt-md-5">
                            <div class="row no-gutters justify-content-between align-items-center">
                                <div class="col-12 col-md-auto pr-4">
                                    <label for="file-upload" class="my-0" id="file-label">
                                        <div class="bg-clear-light rounded-0 line-height-2 fs-16 fw-900 py-3 px-4">
                                            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.62792 4.47814L4.33392 6.77314C4.2098 6.89712 4.11133 7.04435 4.04415 7.20642C3.97697 7.36848 3.94239 7.5422 3.94239 7.71764C3.94239 7.89307 3.97697 8.06679 4.04415 8.22885C4.11133 8.39092 4.2098 8.53815 4.33392 8.66214C4.4579 8.78626 4.60514 8.88472 4.7672 8.9519C4.92927 9.01908 5.10298 9.05366 5.27842 9.05366C5.45385 9.05366 5.62757 9.01908 5.78964 8.9519C5.9517 8.88472 6.09893 8.78626 6.22292 8.66214L9.32292 5.56214C9.82384 5.0609 10.1052 4.38127 10.1052 3.67264C10.1052 2.964 9.82384 2.28437 9.32292 1.78314C9.07486 1.53487 8.78031 1.33791 8.4561 1.20354C8.13189 1.06916 7.78437 1 7.43342 1C7.08246 1 6.73495 1.06916 6.41074 1.20354C6.08652 1.33791 5.79197 1.53487 5.54392 1.78314L2.17392 5.15314C1.42226 5.90495 1 6.92453 1 7.98764C1 9.05075 1.42226 10.0703 2.17392 10.8221C2.92573 11.5738 3.94531 11.9961 5.00842 11.9961C6.07153 11.9961 7.09111 11.5738 7.84292 10.8221L10.9429 7.72214" stroke="#28292D" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Attach File
                                        </div>
                                    </label>
                                    <input id="file-upload" class="form-control rounded-0" type="file" name="uploadedFile" onchange="fileUploaded('file-upload','uploaded-file-name')">
                                </div>
                                <div class="col-12 col-md pt-3 pt-md-0">
                                    <div class="fs-14 fw-800">Improved Quote Accuracy (optional)</div>
                                    <div class="text-light-grey fs-16 fw-700" id="uploaded-file-name">Send
                                        us an image of your problem, so we can provide you an accurate quote
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-7 col-xl-4 pt-4 pt-md-5">
                            <button type="submit" class="btn w-100 btn-primary text-white rounded-0 border-0 letter-spacing-n02 fw-700 fs-13 py-3">
                                Get Free Quote
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-xl-6 px-xxl-5 py-5 py-xl-0">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-12" id="testimonials">
                        <div class="letter-spacing-n02 fs-8 line-height-1 fw-800">Receive $250 cash for every successful referral that you send our way.</div>
                        <div class="testimonial-wrapper">
                            <div class="testimonial-card">
                                <div class="row align-items-center review-row">
                                    <div class="col-md-5 col-xl-6 col-xxl-5">
                                        <div class="row gx-3 align-items-center">
                                            <div class="col-auto"><div class="icon bg-purple">N</div></div>
                                            <div class="col-auto">
                                                <div class="text-white fs-13 fw-700">Nick Adams</div>
                                                <?= renderImg("testimonial-stars.png", "icons") ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col pt-4 pt-md-0">
                                        <div class="comment">“John from Toned Up provided prompt, professional and high  quality work. The painting work he did looks amazing. I would recommend him to anyone looking to get some painting done.”</div>
                                        <a href="javascript:void(0)" class="btn fs-15 text-quartinary fw-600 see-review-btn">See Google Review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card active">
                                <div class="row align-items-center review-row">
                                    <div class="col-md-5 col-xl-6 col-xxl-5">
                                        <div class="row gx-3 align-items-center">
                                            <div class="col-auto"><div class="icon bg-orange">R</div></div>
                                            <div class="col-auto">
                                                <div class="text-white fs-13 fw-700">Richard Hawkins</div>
                                                <?= renderImg("testimonial-stars.png", "icons") ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col pt-4 pt-md-0">
                                        <div class="comment">“John did a stirling job on our bathroom repaint. He does quality work at a fair price. I highly recommend him.”</div>
                                        <a href="javascript:void(0)" class="btn fs-15 text-quartinary fw-600 see-review-btn">See Google Review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <div class="row align-items-center review-row">
                                    <div class="col-md-5 col-xl-6 col-xxl-5">
                                        <div class="row gx-3 align-items-center">
                                            <div class="col-auto"><?= renderImg("user.png", "icons") ?></div>
                                            <div class="col-auto">
                                                <div class="text-white fs-13 fw-700">Michael Papalia</div>
                                                <?= renderImg("testimonial-stars.png", "icons") ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col pt-4 pt-md-0">
                                        <div class="comment">“John was first class in response rate and the work done, could not recommend him enough!”</div>
                                        <a href="javascript:void(0)" class="btn fs-15 text-quartinary fw-600 see-review-btn">See Google Review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <div class="row align-items-center review-row">
                                    <div class="col-md-5 col-xl-6 col-xxl-5">
                                        <div class="row gx-3 align-items-center">
                                            <div class="col-auto"><div class="icon bg-pink text-dark">A</div></div>
                                            <div class="col-auto">
                                                <div class="text-white fs-13 fw-700">Adam Spitzer</div>
                                                <?= renderImg("testimonial-stars.png", "icons") ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col pt-4 pt-md-0">
                                        <div class="comment">“John did a great job on my house, he was a pleasure to deal with and I’d highly recommend him if you want a friendly and professional service.”</div>
                                        <a href="javascript:void(0)" class="btn fs-15 text-quartinary fw-600 see-review-btn">See Google Review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary sticky-contact">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-auto py-4 py-md-4">
                <a href="tel:<?= $phone_number ?>" class="text-white line-height-1 p-0 fs-13 fw-700"><?= $phone_number ?></a>
            </div>
            <div class="col-auto py-4 py-md-4">
                <a href="#form" class="text-white line-height-1 p-0 fs-13 fw-700">Get A Free Quote</a>
            </div>
            <div class="col-auto py-4 py-md-4">
                <a href="#form" class="text-white line-height-1 p-0 fs-13 fw-700">Book Online</a>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="heroHeading fs-5">Specialising in Melbourne Residential Repainting</div>
        <div class="row g-4">
            <?php
            $services = [
                "Fence spray painting",
                "Timber staining",
                "<span class='d-xxl-none'>Renovation / Extensions</span><span class='d-none d-xxl-block'>Renovations/extensions</span>",
                "Pressure washing",
                "$500.00",
                "Minor rot repairs",
                "Period homes",
                "Commercial & strata re-paints",
                "Interior & exterior painting",
            ];

            foreach ($services as $key => $service) {
            ?>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="service_card">
                        <div><?= renderImg("service-" . ($key + 1) . ".png", "lib", "w-100") ?></div>
                        <div class="title<?= ($key === 4) ? " hoverlay" : "" ?>"><?= $service ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="about-us">
    <div class="container">
        <div class="heroHeading fs-4 fw-800 text-white text-center text-capitalize pb-4 pb-md-5">Qualified &amp; Considerate Painting Professionals</div>
        <div class="row justify-content-center gx-xl-4">
            <div class="col-md-6 col-lg-4">
                <?= renderImg("about-1.png", "lib", "w-100") ?>
                <div class="description">
                    <p>Here at Toned Up Painting, we believe there's nothing more important than customer satisfaction. <strong>And you know who agrees? Our hundreds of loyal customers.</strong></p>
                    <p>After all, we specialise in residential repainting, which means our clients trust us to work on their most prized possessions: their homes.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <?= renderImg("about-2.png", "lib", "w-100") ?>
                <div class="description">
                    <p>The Toned Up team has the utmost care and respect for your biggest investment, and we believe in <strong>doing the job the RIGHT way the FIRST time.</strong></p>
                    <p>But it's more than just our work that helps us stand out from the crowd, it's our service.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <?= renderImg("about-3.png", "lib", "w-100") ?>
                <div class="description">
                    Letting a team of painters into your house requires trust. To help establish that trust, we believe in open communication. <strong>That's why we guarantee that every concern, phone call, and email will be answered in a timely manner by someone who really cares.</strong> No matter the problem, we promise we'll work out a solution.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-work">
    <div class="container-fluid px-xl-0">
        <div class="row gx-0 align-items-center">
            <div class="col">
                <div class="row gx-0 justify-content-end">
                    <div class="col-xxl-10 py-5 p-md-5">
                        <div class="fs-4 fw-800 text-dark text-capitalize line-height-1 letter-spacing-n02">At Toned Up Painting, we appreciate every customer.</div>
                        <div class="description fs-12 line-height-2 fw-700 py-4 py-md-5 pe-xxl-6">
                            <p>To show that appreciation, we arrive to appointments on time, listen to your concerns and opinions, and always treat you and your property with respect.</p>
                            <p>And while the quality of our work is always top-notch, we don't mind having a reputation as a customer-centric painting company.</p>
                        </div>
                        <a href="#testimonials" class="btn btn-dark text-white fw-700 border-0 rounded-0 letter-spacing-n02 fs-13 py-3 py-md-4 px-5">See Testiomonials</a>
                    </div>
                </div>
            </div>
            <div class="col-auto col-lg-12 ol-xl-6 col-xxl-auto"><?= renderImg("our-work.png", "lib", "w-100") ?></div>
        </div>
    </div>
</section>

<section class="our-history">
    <?= renderImg("paint-brush.png", "lib", "paint-brush") ?>
    <div class="history-1">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-end">
                <div class="col-lg-11 col-xl-6">
                    <div class="fs-7 text-quartinary fw-800 letter-spacing-n02 line-height-4 pb-3">A long time ago we made the decision to do one thing, and do it really well.</div>
                    <div class="text-white fs-12 fw-600 pt-4 pe-xxl-4">Residential repaints can be one of the more challenging projects for a contractor to tackle. It’s easy to nail a great paint job but the challenge comes down to the care factor.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="history-2">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-end">
                <div class="col-lg-11 col-xl-6">
                    <div class="fs-12 fw-600 pe-xxl-5">
                        <p>How much you care to meticulously cover up from paint splatter, how much you care to make sure the clients garden doesn’t get paint all over it, how much you care to lock up the clients property at the end of the day.</p>
                        <p>At Toned Up, we do not compete on price, we compete on customer experience, putting care factor above anything else ensures customer experience is A1.</p>
                    </div>
                    <div class="row pt-4 pt-md-6">
                        <div class="col-lg-9 col-xl-8 col-xxl-7">
                            <div class="row gx-2">
                                <div class="col-6">
                                    <a href="#form" class="btn w-100 btn-dark text-white fw-700 border-0 rounded-0 letter-spacing-n02 fs-13 py-3 py-md-4 px-md-5">Book Now</a>
                                </div>
                                <div class="col-6">
                                    <a href="tel:<?= $phone_number ?>" class="btn w-100 btn-gradient text-dark fw-700 border-0 rounded-0 letter-spacing-n02 fs-13 py-3 py-md-4 px-md-5">Call Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer-contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9 px-xxl-6">
                <div class="letter-spacing-n02 fs-3 text-center fw-800 text-white line-height-1"><span class="text-primary">Don't forget!</span> Receive $250 cash for every successful referral you send our way!</div>
            </div>
        </div>
        <div class="row justify-content-center pt-5">
            <div class="col-lg-7 col-xl-6">
                <div class="row gy-2 gy-md-0 gx-3">
                    <div class="col-md"><a href="tel:<?= $phone_number ?>" class="btn w-100 btn-grey text-white fw-700 border-0 rounded-0 letter-spacing-n02 fs-13 py-3 py-md-4 px-3">Call Now</a></div>
                    <div class="col-md"><a href="#testimonials" class="btn w-100 btn-primary text-white fw-700 border-0 rounded-0 letter-spacing-n02 fs-13 py-3 py-md-4 px-3">Get a Quote</a></div>
                    <div class="col-md"><a href="#testimonials" class="btn w-100 btn-tertiary text-dark fw-800 border-0 rounded-0 letter-spacing-n02 fs-13 py-3 py-md-4 px-3">Book Online</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>