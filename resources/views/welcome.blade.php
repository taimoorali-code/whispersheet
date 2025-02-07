<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>html</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg p-0">
            <div class="nav-wrap">
                <div class="d-flex justify-content-between">
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                    <button class="menu" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))">
                        <svg width="400" height="40" viewBox="0 0 100 100">
                            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                            <path class="line line2" d="M 20,50 H 80" />
                            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                        </svg>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-md-auto ">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Product</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Solutions
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Enterprise</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Company</a>
                        </li>
                    </ul>
                    <div class="navbar-right">
                        <ul class="navbar-nav navbar-right-link">
                            @auth
                                <!-- User is authenticated -->
                                <li class="nav-item">
                                    <a href="{{ route('dashboard') }}" class="button button-outline-secondary button-round mr-2">Dashboard</a>
                                </li>
                            @endauth
                    
                            @guest
                                <!-- User is not authenticated -->
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="button button-outline-secondary button-round mr-2">Login</a>
                                    <a href="#pricing-section" id="signup-button" class="button button-outline-secondary button-round">Sign up</a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                    
                </div>
            </div>
        </nav>
    </header>
    <section class=" hero-section">
        <div class="hero-content">
            <div class="section-title mb-3 mb-md-5">
                <h1 class="text-center">Make Software . Make Sens</h1>
            </div>
            <h3 class="mb-0 mb-md-4 text-center"> Capture and share your team's expertise with smarter documentation</h3>
            <a href="" class="button button-orange button-round mt-4">Get Start</a>
        </div>
    </section>
    <section class="simple-section bg-graident-gray">
        <div class="container">
            <div class="section-title text-center">
                <h4>How it works</h4>
                <h3>Build an income-generating real estate portfolio, easily</h3>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="modal-img">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/images/work.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="simple-section bg-gray">
        <div class="container">
            <div class="section-title text-center">
                <h4>What we do</h4>
                <h3>The Digital Marketing Game Has Changed Forever…</h3>
            </div>
            <div class="row align-items-center mt-3 mt-md-5">
                <div class="col-md-6">
                    <div class="section-title">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                            electronic typesetting, remaining essentially unchanged. </p>
                        <p class=" mt-3 mt-md-5">It was popularised in the 1960s with the release of Letraset sheets containing
                            Lorem Ipsum
                            passages, and
                            more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="assets/images/markting.png" alt="Markting-img">
                </div>
            </div>
            <h3 class="my-3 my-md-5 heading">Which means you can:</h3>
            <div class="row">
                <div class="col-md-4 mb-md-0 mb-4">
                    <div class="mean-card">
                        <div class="bg-icon">
                            <i class="ri-lightbulb-line"></i>
                        </div>
                        <div class="info">
                            <p>Map your ideas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                    <div class="mean-card">
                        <div class="bg-icon">
                            <i class="ri-global-line"></i>
                        </div>
                        <div class="info">
                            <p>Simulate Traffic</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                    <div class="mean-card">
                        <div class="bg-icon">
                            <i class="ri-filter-line"></i>
                        </div>
                        <div class="info">
                            <p>Stop any financial leaks in your funnel</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="simple-section">
        <div class="container">
            <div class="section-title text-center">
                <h4>What we do</h4>
                <h3>The Digital Marketing Game Has Changed Forever…</h3>
            </div>
            <div class="row align-items-center mt-3 mt-md-5">
                <div class="col-md-6">
                    <div class="section-title">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                            electronic typesetting, remaining essentially unchanged. </p>
                        <p class="mt-3 mt-md-5">It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                            Ipsum
                            passages, and
                            more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="assets/images/markting.png" alt="Markting-img">
                </div>
            </div>
        </div>
    </section>
    <section class="simple-section bg-gray">
        <div class="container">
            <div class="section-title text-center mb-4 md-md-5">
                <h4>Who is it for?</h4>
                <h3>Perfect for Entrepreneurs and Online Store Owners</h3>
            </div>
            <div class="row">
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="store-card">
                        <div class="owner">1</div>
                        <p>Aspiring Business Owners</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="store-card">
                        <div class="owner">2</div>
                        <p>Small to Medium Enterprises</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="store-card">
                        <div class="owner">3</div>
                        <p>Freelance Entrepreneurs</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="store-card">
                        <div class="owner">4</div>
                        <p>Custom Brand Creators</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="simple-section">
        <div class="container">
            <div class="section-title text-center mb-4 mb-md-5">
                <h4>How it works</h4>
                <h3>Here's how Type cart works</h3>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <ul class="my-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                <h5>Step 1: Capture any process</h5>
                                <p>Turn on the Scribe extension and go through your process like normal. Your step-by-step guide will be
                                    automatically created!</p>
                            </a>
                            <div class="circle"></div>
                            <div class="circles">
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="19" cy="19" r="18.75" stroke="black" stroke-opacity="0.2" stroke-width="0.5" />
                                    <circle cx="19" cy="19" r="10.75" stroke="black" stroke-opacity="0.2" stroke-width="0.5" />
                                </svg>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                <h5>Step 2: Easily customize</h5>
                                <p>
                                    Turn on the Scribe extension and go through your process like normal. Your step-by-step guide will be
                                    automatically created!
                                </p>
                            </a>
                            <div class="circle"></div>
                            <div class="circles">
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="19" cy="19" r="18.75" stroke="black" stroke-opacity="0.2" stroke-width="0.5" />
                                    <circle cx="19" cy="19" r="10.75" stroke="black" stroke-opacity="0.2" stroke-width="0.5" />
                                </svg>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                                <h5>Step 3: Share with one click</h5>
                                <p>Turn on the Scribe extension and go through your process like normal. Your step-by-step guide will be
                                    automatically created!</p>
                            </a>
                            <div class="circle"></div>
                            <div class="circles">
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="19" cy="19" r="18.75" stroke="black" stroke-opacity="0.2" stroke-width="0.5" />
                                    <circle cx="19" cy="19" r="10.75" stroke="black" stroke-opacity="0.2" stroke-width="0.5" />
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 ">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <img src="assets/images/markting.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <img src="assets/images/markting.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            <img src="assets/images/markting.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-md-6 mb-md-0 mb-4">
                    <img src="assets/images/editor.png" alt="">
                </div>
                <div class="col-md-6 ps-4">
                    <div class="section-title mb-4 mb-md-5">
                        <h4>Drag-and-Drop Editor</h4>
                        <p>Easily design your eCommerce website with a simple drag-and-drop interface. No coding required—just
                            click, customize, and publish.</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="" class="button button-primary button-round">Learn More</a>
                        <a href="" class="button button-outline-primary button-round">Watch how it works</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center flex-column-reverse flex-md-row mt-5">
                <div class="col-md-6 ps-4">
                    <div class="section-title mb-4 mb-md-5">
                        <h4>Pre-Designed Templates</h4>
                        <p>Choose from a variety of stunning, ready-to-use templates tailored for different industries, helping you
                            launch faster with a professional look.</p>
                    </div>
                    <div class="text-start">
                        <a href="" class="button button-primary button-round">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6  mb-md-0 mb-4">
                    <img src="assets/images/template.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="simple-section bg-green">
        <div class="container">
            <div class="section-title text-center mb-4 mb-md-5">
                <h4 class="text-light">Effortless and Seamless Sharing</h4>
                <h3 class="text-white">Export & Share. Smooth and easy</h3>
            </div>
            <div class="row">
                <div class="col-md-6 mb-md-0 mb-4">
                    <div class="export-card">
                        <h6 class="text-start">Export in One Click</h6>
                        <div class="section-title text-start">
                            <p>Quickly download your website files with a single click.</p>
                        </div>
                        <img src="assets/images/export1.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="export-card">
                        <h6 class="text-start">Share Instantly</h6>
                        <div class="section-title text-start">
                            <p>Generate shareable links to showcase your site anywhere.</p>
                        </div>
                        <img src="assets/images/export2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6  mb-md-0 mb-4">
                    <div class="export-card">
                        <h6 class="text-start">Optimized for All Platforms</h6>
                        <div class="section-title text-start">
                            <p>Compatible with web hosting and CMS platforms.</p>
                        </div>
                        <img src="assets/images/export3.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="export-card">
                        <h6 class="text-start">Secure and Reliable</h6>
                        <div class="section-title text-start">
                            <p>Safeguard your data with secure export options.</p>
                        </div>
                        <img src="assets/images/export4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="simple-section">
        <div class="container">
            <div class="section-title text-center mb-4 mb-md-5">
                <h4>Examples</h4>
                <h3>Here's 4 examples of videos we made in under 10 minutes </h3>
            </div>
            <div class="row align-items-center flex-column-reverse flex-md-row mb-3 mb-md-5">
                <div class="col-md-6">
                    <div class="example-content">
                        <h6>Elegant Fashion Boutique</h6>
                        <p>A sleek and modern website tailored for showcasing stylish clothing collections, complete with
                            high-quality
                            imagery and seamless navigation.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <a href="" data-bs-toggle="modal" data-bs-target="#modal2">
                        <img src="assets/images/img.png" alt="">
                    </a>
                </div>
            </div>
            <div class="row align-items-center mb-3 mb-md-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <a href="" data-bs-toggle="modal" data-bs-target="#modal2">
                        <img src="assets/images/img.png" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="example-content">
                        <h6>Modern Tech Gadgets</h6>
                        <p>A clean and futuristic design highlighting innovative products, with engaging layouts to captivate gadget
                            enthusiasts.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center flex-column-reverse flex-md-row mb-3 mb-md-5">
                <div class="col-md-6">
                    <div class="example-content">
                        <h6>Handcrafted Dashboard Décor</h6>
                        <p>A warm and inviting website that perfectly showcases artisanal and handmade home décor products,
                            reflecting creativity and charm.</p>
                    </div>
                </div>
                <div class="col-md-6  mb-4 mb-md-0">
                    <a href="" data-bs-toggle="modal" data-bs-target="#modal2">
                        <img src="assets/images/img.png" alt="">
                    </a>
                </div>
            </div>
            <div class="row align-items-center mb-3 mb-md-5">
                <div class="col-md-6  mb-4 mb-md-0">
                    <a href="" data-bs-toggle="modal" data-bs-target="#modal2">
                        <img src="assets/images/img.png" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="example-content">
                        <h6>Vibrant Fitness Gear</h6>
                        <p>A bold and dynamic layout designed to energize your brand, featuring vivid visuals and user-friendly
                            shopping options for fitness enthusiasts.</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="" class="button button-orange button-round">Lets get started</a>
            </div>
        </div>
    </section>
    <section class="simple-section bg-gray">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h4>Who is it for?</h4>
                <h3>Use Type cart’s built-in blueprints to plan, map, and simulate for</h3>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="theme-card">
                        <div class="card-info">
                            <div class="icon">
                                <i class="ri-shopping-bag-line"></i>
                            </div>
                            <h6>Product Catalog Organization</h6>
                        </div>
                        <p>A bold and dynamic layout designed to energize your brand, featuring vivid visuals and user-friendly
                            shopping options for fitness enthusiasts.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="theme-card">
                        <div class="card-info">
                            <div class="icon">
                                <i class="ri-shopping-cart-line"></i>
                            </div>
                            <h6>Checkout Process Mapping</h6>
                        </div>
                        <p>Simulate user journeys to ensure a smooth and secure checkout experience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="theme-card">
                        <div class="card-info">
                            <div class="icon">
                                <i class="ri-menu-line"></i>
                            </div>
                            <h6>Custom Navigation Menus</h6>
                        </div>
                        <p>Plan intuitive menus to guide your customers effortlessly through your site.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="theme-card">
                        <div class="card-info">
                            <div class="icon">
                                <i class="ri-device-line"></i>
                            </div>
                            <h6>Responsive Design Templates</h6>
                        </div>
                        <p>Visualize how your website looks on mobile, tablet, and desktop devices.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="theme-card">
                        <div class="card-info">
                            <div class="icon">
                                <i class="ri-flashlight-line"></i>
                            </div>
                            <h6>Marketing and Promo Pages</h6>
                        </div>
                        <p>A bold and dynamic layout designed to energize your brand, featuring vivid visuals and user-friendly
                            shopping options for fitness enthusiasts.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="theme-card">
                        <div class="card-info">
                            <div class="icon">
                                <i class="ri-line-chart-line"></i>
                            </div>
                            <h6>Analytics Integration Planning</h6>
                        </div>
                        <p>A bold and dynamic layout designed to energize your brand, featuring vivid visuals and user-friendly
                            shopping options for fitness enthusiasts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="simple-section ">
        <div class="container">
            <div class="section-title text-center mb-3 mb-md-5">
                <h4>Features</h4>
                <h3>More reasons to choose Type cart</h3>
            </div>
            <div class="row mb-4">
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="feature-cart">
                        <h6>Some Heading</h6>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout.</p>
                    </div>
                </div>
                <div class="col-md-3  mb-4 mb-md-0">
                    <div class="feature-cart">
                        <h6>Some Heading</h6>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout.</p>
                    </div>
                </div>
                <div class="col-md-3  mb-4 mb-md-0">
                    <div class="feature-cart">
                        <h6>Some Heading</h6>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-cart">
                        <h6>Some Heading</h6>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-3  mb-4 mb-md-0">
                    <div class="feature-cart">
                        <h6>Some Heading</h6>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout.</p>
                    </div>
                </div>
                <div class="col-md-3  mb-4 mb-md-0">
                    <div class="feature-cart">
                        <h6>Some Heading</h6>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="feature-cart">
                        <h6>Some Heading</h6>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-cart">
                        <h6>Some Heading</h6>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="simple-section bg-gray">
        <div class="container">
            <div class="section-title text-center mb-4 mb-md-5">
                <h4>Testimonials</h4>
                <h3>Hear from our global investors</h3>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="theme-card">
                        <div class="rc-head">
                            <div class="avatar">
                                <img src="assets/images/avatar1.png" alt="" />
                            </div>
                            <div class="name-detail">
                                <h6>Guy Hawkins</h6>
                                <p>Some designation</p>
                            </div>
                        </div>
                        <div class="rc-comment">
                            <p>
                                “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                consequat. ”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="theme-card">
                        <div class="rc-head">
                            <div class="avatar">
                                <img src="assets/images/avatar2.png" alt="" />
                            </div>
                            <div class="name-detail">
                                <h6>Darrell Steward</h6>
                                <p>Some designation</p>
                            </div>
                        </div>
                        <div class="rc-comment">
                            <p>
                                “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                consequat. ”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="theme-card">
                        <div class="rc-head">
                            <div class="avatar">
                                <img src="assets/images/avatar3.png" alt="" />
                            </div>
                            <div class="name-detail">
                                <h6>Kristin Watson</h6>
                                <p>Some designation</p>
                            </div>
                        </div>
                        <div class="rc-comment">
                            <p>
                                “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                consequat. ”
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="theme-card">
                        <div class="rc-head">
                            <div class="avatar">
                                <img src="assets/images/avatar4.png" alt="" />
                            </div>
                            <div class="name-detail">
                                <h6>Jane Cooper</h6>
                                <p>Some designation</p>
                            </div>
                        </div>
                        <div class="rc-comment">
                            <p>
                                “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                consequat. ”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="theme-card">
                        <div class="rc-head">
                            <div class="avatar">
                                <img src="assets/images/avatar5.png" alt="" />
                            </div>
                            <div class="name-detail">
                                <h6>Ralph Edwards</h6>
                                <p>Some designation</p>
                            </div>
                        </div>
                        <div class="rc-comment">
                            <p>
                                “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                consequat. ”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="theme-card">
                        <div class="rc-head">
                            <div class="avatar">
                                <img src="assets/images/avatar6.png" alt="" />
                            </div>
                            <div class="name-detail">
                                <h6>Brooklyn Simmons</h6>
                                <p>Some designation</p>
                            </div>
                        </div>
                        <div class="rc-comment">
                            <p>
                                “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                consequat. ”
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="simple-section pricing-section">
        <div class="container">
            <div class="section-title text-center mb-4 mb-md-5">
                <h4>Pricing</h4>
                <h3>Grab a limited LIFETIME license to Type cart today, </h3>
            </div>
            <div class="row mb-4">
                <div class="col-md-8 offset-md-2">
                    <div class="pricing-card">
                        <h3>$495</h3>
                        <h6 class="mb-4 mb-md-5">Lorem Ipsum is simply dummy text of the printing.</h6>
                        <ul class="pricing-list mb-4 mb-md-5">
                            <li>
                                <i class="ri-checkbox-circle-fill"></i>
                                <p>Lorem Ipsum has been the industry's standard dummy</p>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-fill"></i>
                                <p>It is a long established fact that a reader will be distracted</p>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-fill"></i>
                                <p>Many desktop publishing packages and web page </p>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-fill"></i>
                                <p>Lorem Ipsum has been the industry's standard dummy</p>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-fill"></i>
                                <p>Sometimes on purpose (injected humour and the like).</p>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-fill"></i>
                                <p>If you are going to use a passage of Lorem Ipsum</p>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-fill"></i>
                                <p>Lorem Ipsum has been the industry's standard dummy</p>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-fill"></i>
                                <p>The generated Lorem Ipsum is therefore always free from</p>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-fill"></i>
                                <p>Lorem Ipsum has been the industry's standard dummy</p>
                            </li>
                        </ul>
                        <div class="text-cetner">

                            <a href="{{route('payment')}}" class="button button-orange button-round">Get my life time account now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="simple-section bg-graident-gray">
        <div class="container">
            <div class="section-title text-center mb-4 mb-md-5">
                <h4>Pricing</h4>
                <h3>A simple comparison</h3>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="table-wrapper">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Feature</th>
                                    <th scope="col">Type Cart</th>
                                    <th scope="col">Framer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Intuitive Drag-and-Drop Builder</td>
                                    <td><i class="ri-checkbox-circle-fill check"></i>
                                    </td>
                                    <td><i class="ri-checkbox-circle-fill check"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pre-Designed Customizable Templates</td>
                                    <td><i class="ri-checkbox-circle-fill check"></i>
                                    </td>
                                    <td>
                                        <i class="ri-close-circle-fill x-circle"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mobile-Friendly Design</td>
                                    <td><i class="ri-checkbox-circle-fill check"></i>
                                    </td>
                                    <td>
                                        <i class="ri-close-circle-fill x-circle"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Seamless Payment Integration</td>
                                    <td><i class="ri-checkbox-circle-fill check"></i>
                                    </td>
                                    <td>
                                        <i class="ri-close-circle-fill x-circle"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Built-In SEO Optimization</td>
                                    <td><i class="ri-checkbox-circle-fill check"></i>
                                    </td>
                                    <td>
                                        <i class="ri-close-circle-fill x-circle"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Fast and Secure Hosting</td>
                                    <td><i class="ri-checkbox-circle-fill check"></i>
                                    </td>
                                    <td>
                                        <i class="ri-close-circle-fill x-circle"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Advanced Analytics Dashboard</td>
                                    <td><i class="ri-checkbox-circle-fill check"></i>
                                    </td>
                                    <td>
                                        <i class="ri-close-circle-fill x-circle"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>One-Click Website Export</td>
                                    <td><i class="ri-checkbox-circle-fill check"></i>
                                    </td>
                                    <td>
                                        <i class="ri-close-circle-fill x-circle"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="narrow-section bg-orange">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center ">
                    <div class="bg-icon">
                        <i class="ri-group-fill"></i>
                    </div>
                    <div class="info-card">
                        <h6 class="text-white">Customer Testimonials</h6>
                        <p class="text-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-icon">
                        <i class="ri-money-dollar-circle-fill"></i>
                    </div>
                    <div class="info-card">
                        <h6 class="text-white">Secure Payments</h6>
                        <p class="text-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-icon">
                        <i class="ri-truck-fill"></i>
                    </div>
                    <div class="info-card">
                        <h6 class="text-white">Fast Shipping Guarantees</h6>
                        <p class="text-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="bg-icon">
                        <i class="ri-police-badge-fill"></i>
                    </div>
                    <div class="info-card">
                        <h6 class="text-white">Quality Certifications</h6>
                        <p class="text-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="simple-section bg-orange-gray">
        <div class="container">
            <div class="section-title text-center mb-4 mb-md-5">
                <h4>FAQ</h4>
                <h3>Frequently Asked Questions</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="accordian-theme">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item" data-aos="fade-in">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How quickly can I design my eCommerce website?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can create a fully functional eCommerce website in minutes using our intuitive tools and
                                        pre-built blueprints, without any coding knowledge.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-in">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        When will my payment be processed?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        After you complete the payment transfer, please create your account. We will
                                        activate your account once the payment is verified.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-in">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Can I export and host my website anywhere?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        If a payment fails, we will notify you via email. You can attempt the payment
                                        again
                                        or update your payment information. Access to the software may be temporarily
                                        suspended until the payment is resolved.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-in">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Is the tool compatible with mobile devices?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our billing cycle is based on the plan you choose. For the Monthly Plan, you'll
                                        be
                                        billed every month. The 6-Month Plan is billed every six months, while the
                                        Annual
                                        Plan is billed once a year. You’ll receive reminders before each renewal.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-in">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        What payment gateways can I integrate?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, you can update your payment method anytime through your account settings.
                                        Simply log in and navigate to the billing section.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta">
        <div class="section-title">
            <h3 class="text-light fw-normal">Start Building Your eCommerce Website Today</h3>
        </div>
        <div class="text-center pb-5">
            <a href="" class="button button-round button-orange">Get started now</a>
        </div>
    </section>
    <footer class="footer black-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="">
                        <div class="ft-logo">
                            <img src="assets/images/footer-logo.png" alt="">
                        </div>
                        <div class="footer-widget py-3">
                            <span>hello@typecart.io</span>
                        </div>
                        <div class="footer-widget footer-copyright">
                            <p class="mb-3 mb-md-0">© 2025 TypeCart. All rights reserved.</p>
                        </div>
                        <div class="footer-widget">
                            <ul class="d-flex">
                                <li><a href=""><i class="ri-twitter-x-line"></i></a></li>
                                <li><a href=""><i class="ri-facebook-fill"></i></a></li>
                                <li><a href=""><i class="ri-instagram-fill"></i></a></li>
                                <li><a href=""><i class="ri-linkedin-box-fill"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6 mb-4 mb-md-0">
                    <div class="footer-widget">
                        <h5>Product</h5>
                        <ul>
                            <li><a href="">Typecart</a></li>
                            <li><a href="">Gallery</a></li>
                            <li><a href="">Security</a></li>
                            <li><a href="">Explore</a></li>
                            <li><a href="">Help Center</a></li>
                            <li><a href="">What's New</a></li>
                            <li><a href="">Resources</a></li>
                            <li><a href="">Tools</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-6 mb-4 mb-md-0">
                    <div class="footer-widget">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Contact Sales</a></li>
                            <li><a href="">Support</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Affiliates </a></li>
                            <li><a href="">Status</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h5>Legal</h5>
                        <ul>
                            <li><a href="">Terms</a></li>
                            <li><a href="">Privacy</a></li>
                            <li><a href="">Cookies</a></li>
                            <li><a href="">DPA</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/BadB1z-V_qU?si=XoZqyrQHj2T83xde" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal2 -->
    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal2Label">Modal 2 Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/P90X9xxm1gc?si=R7Yv7O1Zr7r4Pp__" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;  clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script>

        document.addEventListener("DOMContentLoaded", function () {
    const signUpButton = document.getElementById("signup-button");
    const pricingSection = document.querySelector(".pricing-section");

    if (signUpButton && pricingSection) {
        signUpButton.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default link behavior
            pricingSection.scrollIntoView({ behavior: "smooth" });
        });
    }
});
;


    </script>
</body>

</html>