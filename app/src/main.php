<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="header-top-bar">
        <div class="container-fluid px-xl-0">
            <div class="row gx-xl-5 justify-content-end align-items-center">
                <div class="col">
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
                <div class="col-auto text-white fs-14 fw-600">
                    Toned Up Specialises in Residential Painting
                </div>
                <div class="col-auto">
                    <div class="row gx-3">
                        <div class="col-auto">
                            <a href="#" class=""><?= renderImg("facebook.png", "icons") ?></a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class=""><?= renderImg("instagram.png", "icons") ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="row gx-0 align-items-center header-buttons">
                        <div class="col-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-primary py-3 px-md-5">
                                <?= $phone_number ?>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#form" class="btn btn-gradient py-3 px-md-5">
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
                <div class="col-xl-7">
                    <div class="heroHeading fs-2 pe-xxl-7">
                        We’re so confident that you will be satisfied with our work, we back it with a 5-Year Guarantee!
                    </div>
                    <div class="text-white fs-10 letter-spacing-n02 line-height-3 fw-600 pt-4 pe-xxl-7">
                        We are Qualified & Considerate painting Professionals specialising in residential painting in Melbourne & surrounding suburbs.
                    </div>
                </div>
            </div>
        </div>
        <?= renderImg("banner.png", "background", "banner-img") ?>
    </div>
</header>

<section class="form" id="form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="row align-items-center">
                    <div class="col-12 col-xl-6">
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
                                                <option>Handyman</option>
                                                <option>Maintenance</option>
                                                <option>Carpentry</option>
                                                <option>Gyprock</option>
                                                <option>Tiling</option>
                                                <option>Doors & Windows</option>
                                                <option>Carports</option>
                                                <option>Home Renos</option>
                                                <option>Roofing</option>
                                                <option>Fencing</option>
                                                <option>Plumbing</option>
                                                <option>Waterproofing</option>
                                                <option>Highpressure Cleaning</option>
                                                <option>Electrical Work</option>
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
                    <div class="col-12 col-xl-6 px-xxl-6 py-5 py-lg-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="review-card">
                                    <div class="fw-700 h1 text-center"><span data-countup>200</span>+</div>
                                    <div class="h11 text-center pb-5">Customer Reviews</div>
                                    <div class="btn btn-tertiary btn-block text-white border-0 rounded-0 h12 py-3">See Testimonials</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="review-card">
                                    <div class="fw-700 h1 text-center">4.9</div>
                                    <div class="h11 text-center pb-5">Customer Rating</div>
                                    <div class="btn btn-red btn-block text-white border-0 rounded-0 h12 py-3"><?= renderImg("google.png", "logo") ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="row no-gutters pt-5">
                            <div class="col-6 col-md">
                                <div class="bg-teal d-flex flex-column align-items-center py-6">
                                    <div class=""><?= renderImg("oneflare.png", "logo") ?></div>
                                    <div class="py-3"><?= renderImg("stars.png", "icons") ?></div>
                                    <div class="fw-700 text-white line-height-1">oneflare</div>
                                </div>
                            </div>
                            <div class="col-6 col-md">
                                <div class="bg-orange d-flex flex-column align-items-center py-6">
                                    <div class=""><?= renderImg("wom.png", "logo") ?></div>
                                    <div class="py-3"><?= renderImg("stars.png", "icons") ?></div>
                                    <div class="fw-700 text-white line-height-1">Word of Mouth</div>
                                </div>
                            </div>
                            <div class="col-6 col-md">
                                <div class="bg-red d-flex flex-column align-items-center py-6">
                                    <div class=""><?= renderImg("google-big.png", "logo") ?></div>
                                    <div class="py-3"><?= renderImg("stars.png", "icons") ?></div>
                                    <div class="fw-700 text-white line-height-1">Google</div>
                                </div>
                            </div>
                            <div class="col-6 col-md">
                                <div class="bg-dark-blue d-flex flex-column align-items-center py-6">
                                    <div class=""><?= renderImg("truelocal.png", "logo") ?></div>
                                    <div class="py-3"><?= renderImg("stars.png", "icons") ?></div>
                                    <div class="fw-700 text-white line-height-1">True Local</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-auto py-5">
                <a href="tel:<?= $phone_number ?>" class="text-white line-height-1 p-0 fs-13 fw-700"><?= $phone_number ?></a>
            </div>
            <div class="col-auto py-5">
                <a href="#form" class="text-white line-height-1 p-0 fs-13 fw-700">Get A Free Quote</a>
            </div>
            <div class="col-auto py-5">
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
                "Renovations/extensions",
                "Pressure washing",
                "$500.00",
                "Minor rot repairss",
                "Period homes",
                "Commercial & strata re-paints",
                "Interior & exterior painting",
            ];

            foreach ($services as $key => $service) {
            ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service_card">
                        <div><?= renderImg("service-" . ($key + 1) . ".png", "lib", "w-100") ?></div>
                        <div class="title<?= ($key === 4) ? " hoverlay" : "" ?>"><?= $service ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>