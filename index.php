<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/common-assets.php'; ?>
    <?php include 'includes/google-tag-manager.php'; ?>
    <?php include 'includes/meta/index.php'; ?>
</head>

<body class="min-h-screen text-white">
    <div class="mx-auto min-h-screen max-w-full p-0 md:p-0">
        <?php include 'includes/header.php'; ?>
        <?php include 'includes/menupanel.php'; ?>
        <section class="hero-shell flex min-h-screen flex-col">
            <div id="heroStage" class="hero-stage relative flex flex-col justify-end px-5 pb-8 pt-10 sm:px-8 sm:pb-10 md:px-10 md:pb-12 lg:pt-16">
                <div class="hero-media-wrap pointer-events-none absolute inset-0 overflow-hidden">
                    <div class="hero-media media-item blur-xl">
                        <video muted loop playsinline preload="metadata" class="hero-carousel-video hue-rotate-[60deg] saturate-200">
                            <source src="assets/video/waves.mp4" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-green-600 mix-blend-color opacity-85"></div>
                    </div>
                </div>
                <div class="relative z-10 max-w-6xl mx-auto w-full">
                    <div class="grid items-end gap-12 lg:grid-cols-[minmax(0,1.2fr)_minmax(280px,0.2fr)] mb-[8vh] sm:mb-[auto]">
                        <div class="max-w-[700px]">
                            <div class="overflow-hidden">
                                <p class="mb-4 text-xs font-light uppercase tracking-[0.2em] text-white/45">Stay ahead of trend</p>
                                <h1 id="headline" class="slide-copy text-[2.2rem] font-light leading-[1.1em] tracking-[-0.00em] sm:text-[3rem] md:text-[3rem] lg:text-[4.1rem]">
                                    Empowering Your Business Through
                                    <span id="headlineRotator" class="headline-rotator font-light">Mobile App Development</span>
                                </h1>
                            </div>
                            <div class="mt-[20vh] flex items-center gap-5 text-sm text-white/85 hidden lg:flex">
                                <div class="relative h-px w-28 bg-white/10 overflow-hidden rounded-full sm:w-44">
                                    <div id="heroProgressLine" class="absolute inset-y-0 left-0 w-0 rounded-full bg-white/70"></div>
                                </div>
                                <span id="counter">01/05</span>
                            </div>
                        </div>
                        <div class="max-w-sm pb-2 lg:justify-self-end">
                            <div class="slide-copy flex flex-col gap-3 text-sm text-white/80 lg:text-[1rem] uppercase font-normal tracking-[0em] leading-[1.1em] mb-[6vh]">
                                <div class="line-mask-wrap">
                                    <div class="line-mask-content flex items-center gap-3">
                                        <div class="w-[40px] h-[40px]">
                                            <svg id="svg-stage" viewBox="0 0 248 248" class="w-full h-full">
                                                <g class="group2">
                                                    <image href="assets/images/icon-1.png" mask="url(#g2_mask)" />
                                                </g>
                                                <mask id="g2_mask" fill="#fff">
                                                    <circle cx="124" cy="0" r="0" />
                                                    <circle cx="124" cy="248" r="0" />
                                                </mask>
                                                <g class="group3">
                                                    <image href="assets/images/icon-2.png" mask="url(#g3_mask)" />
                                                </g>
                                                <mask id="g3_mask" fill="#fff">
                                                    <rect x="0" y="0" width="124" height="124" />
                                                    <rect x="124" y="0" width="124" height="124" />
                                                    <rect x="0" y="124" width="124" height="124" />
                                                    <rect x="124" y="124" width="124" height="124" />
                                                </mask>
                                                <g class="group5">
                                                    <image href="assets/images/icon-3.png" mask="url(#g5_mask)" />
                                                </g>
                                                <mask id="g5_mask" fill="#fff">
                                                    <path d="M0 248h248L124 0 0 247z" />
                                                    <circle cx="124" cy="83" r="83" />
                                                </mask>
                                            </svg>
                                        </div>
                                        <span class="block">Decade of Expertise</span>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-hidden">
                                <p id="description" class="slide-copy line-mask-content text-sm leading-5 text-white/80 sm:text-base font-light">
                                    We provide IT solutions and services for your business that can help your business thrive.
                                </p>
                            </div>
                            <div class="mt-8 overflow-hidden">
                                <a id="cta" href="contact.php" class="slide-copy line-mask-content inline-flex items-center gap-3 text-sm font-light text-white transition-colors duration-300 hover:text-accent">
                                    <span>Connect with us</span>
                                    <span>
                                        <svg class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="opacity: 0.8;">
                                            <path d="M5 12h14"></path>
                                            <path d="M13 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="aboutSection" class="min-h-screen relative flex items-center justify-center overflow-hidden px-4 sm:px-6 gradient-bg">
            <div class="max-w-6xl mx-auto w-full relative z-20 text-center">
                <div id="aboutContent">
                    <p id="aboutLabel" class="text-xs text-white/40 mb-4 sm:mb-6 uppercase tracking-[0.3em]">About Us</p>
                    <h2 id="aboutHeading" class="text-3xl sm:text-3xl md:text-4xl lg:text-[3.2rem] font-light leading-[1.1] lg:leading-[1.1em] tracking-[-0.0em] max-w-2xl lg:max-w-[48rem] mx-auto text-white/90">
                        We build sharp digital products with strategy, motion, and clean execution.
                    </h2>
                    <div id="aboutParagraph" class="mt-4 sm:mt-6 md:mt-8 text-white/60 text-sm sm:text-base md:text-lg font-light max-w-2xl md:max-w-3xl hidden md:block mx-auto">
                        <span class="about-line-wrap">
                            <span class="about-line">Our team blends product thinking, visual design, and engineering to create websites,</span>
                        </span>
                        <span class="about-line-wrap">
                            <span class="about-line">apps, and digital systems that feel premium from the first scroll to the final click.</span>
                        </span>
                    </div>

                    <div class="md:hidden mt-4 sm:mt-6 text-white/60 text-sm sm:text-base font-light max-w-2xl mx-auto">
                        <span class="about-line-wrap">
                            <span class="about-line">Our team blends product thinking, visual design, and engineering to create websites, apps, and digital systems that feel premium from the first scroll to the final click.</span>
                        </span>
                    </div>

                    <div id="aboutCta" class="about-cta z-10 pt-4 sm:pt-6">
                        <a href="about.php" class="discover-link inline-flex items-center gap-3 text-sm font-light text-white/60 transition-colors duration-300 hover:text-accent underline underline-offset-4">
                            <span id="aboutCtaText">Discover more</span>
                        </a>
                    </div>
                </div>
                
                <div id="aboutFinalStage" class="fixed md:absolute inset-0 opacity-0 pointer-events-none z-10">
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <h1 id="bgWazeefa" class="pointer-events-none select-none text-[24vw] sm:text-[8rem] md:text-[10rem] lg:text-[15rem] font-medium uppercase tracking-[-0.06em] text-[#ffffff]/[0.05] leading-[0.95]">WAZEEFA</h1>
                    </div>
                    <div id="circleAnimWrapper" class="absolute inset-0 flex items-center justify-center mt-[1rem] sm:mt-[0rem] md:mt-[0rem]">
                        <div class="relative w-[280px] h-[280px] sm:w-[220px] sm:h-[220px] md:w-[300px] md:h-[300px] lg:w-[420px] lg:h-[400px] flex items-center justify-center">
                            <svg id="circleMain" viewBox="0 0 594.6 594.5" class="w-full h-full">
                                <defs>
                                    <style>
                                        .circle {
                                            fill: #b3aba3;
                                            fill-rule: evenodd;
                                            stroke-width: 0px;
                                        }
                                    </style>
                                </defs>
                                <path class="circle" d="m594.6,297.6h-5.9v-.8h5.9v.8Zm-.4-16.1l-5.9.3v-.7l5.9-.3c-.1.2-.1.5,0,.7Zm-1.3-16l-5.8.6c0-.2,0-.5-.1-.7l5.8-.6c0,.2.1.4.1.7Zm-2.2-16l-5.8.9-.1-.3c0-.1,0-.3-.1-.4l5.8-.9c.2.2.2.5.2.7Zm-2.9-15.8l-5.7,1.2c-.1-.2-.1-.5-.2-.7l5.7-1.3c0,.3.1.5.2.8Zm-3.9-15.7l-5.7,1.6c-.1-.2-.1-.5-.2-.7l5.6-1.6c.2.3.2.5.3.7Zm-4.7-15.4l-5.6,1.9c-.1-.2-.1-.4-.2-.7l5.6-1.9c0,.3.1.5.2.7Zm-5.5-15.1l-5.5,2.2c-.1-.2-.2-.4-.3-.7l5.4-2.2c.2.3.3.5.4.7Zm-6.4-14.8l-5.3,2.5c-.1-.2-.2-.4-.3-.6l5.3-2.5c.1.2.2.4.3.6Zm-7.1-14.4l-5.2,2.7c-.1-.2-.2-.4-.3-.6l5.2-2.8c0,.3.1.5.3.7Zm-8-14l-5,3c-.1-.2-.2-.4-.4-.6l5-3c.2.2.3.4.4.6Zm-8.6-13.6l-4.9,3.3c-.1-.2-.3-.4-.4-.6l4.8-3.3c.2.2.3.4.5.6Zm-9.4-13.1l-4.7,3.5c-.1-.2-.3-.4-.4-.6l4.7-3.6c.1.3.2.5.4.7Zm-10.1-12.5l-4.5,3.8c-.1-.1-.1-.2-.2-.2-.1-.1-.2-.2-.3-.3l4.5-3.8c.2.1.3.3.5.5Zm-10.7-12c-.2-.2-.3-.3-.5-.5l-4.3,4c.2.2.3.3.5.5l4.3-4Zm-11.4-11.4l-4,4.3c-.1-.1-.2-.2-.3-.3l-.2-.2,4-4.3c.1.1.3.3.5.5Zm-12-10.8l-3.8,4.5-.3-.2c-.1-.1-.2-.2-.3-.2l3.8-4.5c.2.1.4.3.6.4Zm-12.5-10.1l-3.6,4.7c-.2-.1-.4-.3-.6-.4l3.5-4.7c.3.1.5.3.7.4Zm-13.1-9.4l-3.3,4.8c-.2-.1-.4-.3-.6-.4l3.3-4.9c.2.2.4.3.6.5Zm-13.5-8.7l-3,5c-.2-.1-.4-.2-.6-.4l3-5c.2.1.4.2.6.4Zm-14-8l-2.8,5.2c-.1-.1-.2-.1-.3-.2-.1,0-.2-.1-.3-.1l2.7-5.2c.3.1.5.2.7.3Zm-14.4-7.2l-2.5,5.3c-.2-.1-.4-.2-.6-.3l2.5-5.3c.1.1.3.2.6.3Zm-14.8-6.3l-2.2,5.4c-.2-.1-.4-.2-.7-.3l2.2-5.5c.2.2.5.3.7.4Zm-15.1-5.6l-1.9,5.6c-.2-.1-.4-.2-.7-.2l1.9-5.6c.2,0,.5.1.7.2Zm-15.4-4.8l-1.6,5.6c-.2-.1-.5-.1-.7-.2l1.6-5.7c.2.2.5.3.7.3Zm-15.6-3.9l-1.3,5.7c-.2-.1-.5-.1-.7-.2l1.2-5.7c.3.1.5.2.8.2Zm-15.8-3l-.9,5.8c-.2,0-.5-.1-.7-.1l.9-5.8c.2,0,.4.1.7.1Zm-16-2.2l-.6,5.8c-.2,0-.5-.1-.7-.1l.6-5.8c.2.1.5.1.7.1Zm-16.1-1.3l-.3,5.9h-.7l.3-5.9c.3,0,.5,0,.7,0Zm-16.1-.4v5.9h-.8V0h.4c.2,0,.3,0,.4,0Zm-16.1.4l.3,5.9h-.7l-.3-5.9c.3,0,.5,0,.7,0Zm-16,1.3l.6,5.8c-.2,0-.5.1-.7.1l-.6-5.8c.2-.1.4-.1.7-.1Zm-16,2.1l.9,5.8c-.2,0-.5.1-.7.1l-.9-5.8c.2,0,.5-.1.7-.1Zm-15.8,3l1.2,5.7c-.2.1-.5.1-.7.2l-1.3-5.7c.3-.1.6-.2.8-.2Zm-15.6,3.8l1.6,5.7c-.2.1-.5.1-.7.2l-1.6-5.6c.2-.1.4-.2.7-.3Zm-15.4,4.7l1.9,5.6c-.2.1-.4.2-.7.2l-1.9-5.6c.2,0,.4-.1.7-.2Zm-15.2,5.6l2.2,5.5c-.2.1-.4.2-.7.3l-2.2-5.4c.3-.2.5-.3.7-.4Zm-14.7,6.3l2.5,5.3c-.2.1-.4.2-.6.3l-2.5-5.3c.1-.1.3-.2.6-.3Zm-14.5,7.2l2.7,5.2c-.2.1-.4.2-.6.3l-2.8-5.2c.3-.1.5-.2.7-.3Zm-14,7.9l3,5c-.1.1-.2.1-.3.2-.1.1-.2.1-.3.2l-3-5c.2-.2.4-.3.6-.4Zm-13.6,8.7l3.3,4.9c-.2.1-.4.3-.6.4l-3.3-4.8c.2-.3.4-.4.6-.5Zm-13,9.4l3.5,4.7c-.2.1-.4.3-.6.4l-3.6-4.7c.3-.1.5-.3.7-.4Zm-12.6,10l3.8,4.5c-.2.2-.4.3-.5.5l-3.8-4.5c.1-.1.3-.3.5-.5Zm-12,10.8l4,4.3-.5.5-4-4.3c.2-.2.3-.4.5-.5Zm-11.4,11.4l4.3,4-.5.5-4.3-4c.2-.2.3-.4.5-.5Zm-10.8,11.9l4.5,3.8-.3.3c-.1.1-.1.2-.2.2l-4.5-3.8c.2-.1.4-.3.5-.5Zm-10.1,12.6l4.7,3.6c-.1.1-.2.2-.2.3-.1.1-.1.2-.2.2l-4.7-3.5c.1-.3.3-.5.4-.6Zm-9.4,13l4.8,3.3c-.1.2-.3.4-.4.6l-4.8-3.3c.1-.2.3-.4.4-.6Zm-8.7,13.6c-.1.2-.2.4-.4.6l5,3c.1-.2.2-.4.4-.6l-5-3Zm-8,14l5.2,2.8c-.1.2-.2.4-.3.6l-5.2-2.7c.1-.3.2-.5.3-.7Zm-7.1,14.4l5.3,2.5c-.1.2-.2.4-.3.6l-5.3-2.5c.1-.2.2-.4.3-.6Zm-6.4,14.8l5.4,2.2c0,.1-.1.2-.1.3s-.1.2-.1.3l-5.5-2.2c.1-.2.2-.4.3-.6Zm-5.6,15.1l5.6,1.9c-.1.2-.2.4-.2.7l-5.6-1.9c0-.3.1-.5.2-.7Zm-4.7,15.3l5.6,1.6c-.1.2-.1.5-.2.7l-5.7-1.6c.1-.2.2-.4.3-.7Zm-3.9,15.7l5.7,1.3c-.1.2-.1.5-.2.7l5.7,1.2c-.1.4-.2.6-.2.8Zm-3.1,15.8l5.8.9c0,.2-.1.5-.1.7l-5.8-.9c.1-.2.1-.5.1-.7Zm-2.1,15.9c0,.2-.1.5-.1.7l5.8.6c0-.2.1-.5.1-.7l-5.8-.6Zm-1.4,16.1l5.9.3v.7l-5.9-.3c0-.2,0-.5,0-.7Zm-.4,16.1v.8h5.9v-.8H0Zm.4,16.1l5.9-.3v.7l-5.9.3v-.7Zm1.3,16.1l5.8-.6c0,.2.1.5.1.7l-5.8.6c-.1-.3-.1-.5-.1-.7Zm2.1,15.9c0,.2.1.5.1.7l5.8-.9c0-.2-.1-.5-.1-.7l-5.8.9Zm3,15.8l5.7-1.2c.1.2.1.5.2.7l-5.7,1.2c-.1-.2-.1-.4-.2-.7Zm3.9,15.7l5.7-1.6c.1.2.1.5.2.7l-5.6,1.6c-.2-.3-.3-.5-.3-.7Zm4.7,15.4l5.6-1.9c.1.2.2.4.2.7l-5.6,1.9c-.1-.3-.2-.5-.2-.7Zm5.5,15.1l5.5-2.2c.1.2.2.4.3.7l-5.4,2.2c-.2-.3-.3-.5-.4-.7Zm6.4,14.8l5.3-2.5c.1.2.2.4.3.6l-5.3,2.5c-.1-.2-.2-.4-.3-.6Zm7.1,14.4l5.2-2.7c.1.2.2.4.3.6l-5.2,2.8c-.1-.3-.2-.5-.3-.7Zm7.9,14c.1.2.2.4.4.6l5-3c-.1-.2-.2-.4-.4-.6l-5,3Zm8.7,13.6c.1.2.3.4.4.6l4.8-3.3c-.1-.2-.3-.4-.4-.6l-4.8,3.3Zm9.4,13.1l4.7-3.5c.1.2.3.4.4.6l-4.7,3.6c-.1-.3-.3-.5-.4-.7Zm10.1,12.5l4.5-3.8c.1.1.2.2.2.3.1.1.1.2.2.2l-4.5,3.8c-.1-.1-.3-.3-.4-.5Zm10.7,12l4.3-4c.2.2.3.3.5.5l-4.3,4c-.2-.1-.3-.3-.5-.5Zm11.4,11.4l4-4.3c.1.1.2.2.3.3l.2.2-4,4.3c-.2-.1-.3-.3-.5-.5Zm11.9,10.8l3.8-4.5c.1.1.2.2.3.3l.2.2-3.8,4.5c-.1-.2-.3-.3-.5-.5Zm12.6,10.1l3.6-4.7c.1.1.2.2.3.3l.2.2-3.5,4.7c-.2-.2-.4-.3-.6-.5Zm13,9.4l3.3-4.8c.1.1.3.2.4.3l.2.1-3.3,4.9c-.2-.2-.4-.3-.6-.5Zm13.6,8.7l3-5c.1.1.2.1.3.2.1.1.2.1.3.2l-3,5c-.2-.1-.4-.2-.6-.4Zm14,8l2.8-5.2c.1.1.3.1.4.2l.2.1-2.7,5.2c-.3-.1-.5-.2-.7-.3Zm14.4,7.2l2.5-5.3c.2.1.4.2.6.3l-2.5,5.3c-.2-.1-.4-.2-.6-.3Zm14.8,6.4l2.2-5.4c.1,0,.2.1.4.1l.3.1-2.2,5.5c-.3-.2-.5-.3-.7-.3Zm15.1,5.5l1.9-5.6c.2.1.4.2.7.2l-1.9,5.6c-.3,0-.5-.1-.7-.2Zm15.4,4.8l1.6-5.6c.2.1.5.1.7.2l-1.6,5.7c-.3-.2-.5-.3-.7-.3Zm15.6,3.9l1.3-5.7c.2.1.5.1.7.2l-1.2,5.7c-.3-.1-.6-.2-.8-.2Zm15.8,3c.2,0,.5.1.7.1l.9-5.8c-.2,0-.5-.1-.7-.1l-.9,5.8Zm16,2.2l.6-5.8c.2,0,.5.1.7.1l-.6,5.8c-.3-.1-.5-.1-.7-.1Zm16,1.3l.3-5.9h.7l-.3,5.9h-.7Zm16.1.4v-5.9h.8v5.9h-.8Zm16.1-.4l-.3-5.9h.7l.3,5.9h-.7Zm16.1-1.2l-.6-5.8c.2,0,.5-.1.7-.1l.6,5.8c-.2,0-.5,0-.7.1Zm15.9-2.2l-.9-5.8.3-.1.4-.1.9,5.8c-.2.1-.4.2-.7.2Zm15.9-3l-1.2-5.7c.2,0,.5-.1.7-.2l1.3,5.7c-.4.1-.6.2-.8.2Zm15.6-3.8l-1.6-5.7c.2-.1.5-.1.7-.2l1.6,5.6c-.2.1-.5.2-.7.3Zm15.4-4.7l-1.9-5.6c.2-.1.4-.1.7-.2l1.9,5.6c-.2,0-.5.1-.7.2Zm15.1-5.6l-2.2-5.5c.1,0,.2-.1.4-.1l.3-.1,2.2,5.4c-.2.1-.5.2-.7.3Zm14.8-6.3l-2.5-5.3c.2-.1.4-.2.6-.3l2.5,5.3c-.2.1-.4.2-.6.3Zm14.4-7.2l-2.7-5.2c.2-.1.4-.2.6-.3l2.8,5.2c-.2.1-.4.2-.7.3Zm14.1-7.9l-3-5c.1-.1.2-.1.3-.2l.3-.2,3,5c-.2.2-.4.3-.6.4Zm13.5-8.7l-3.3-4.9c.2-.1.4-.3.6-.4l3.3,4.8c-.2.3-.4.4-.6.5Zm13.1-9.3l-3.5-4.7c.2-.1.4-.3.6-.4l3.6,4.7c-.3.1-.5.2-.7.4Zm12.6-10.1l-3.8-4.5c.2-.2.4-.3.5-.5l3.8,4.5c-.2.2-.4.3-.5.5Zm12-10.8l-4-4.3.5-.5,4,4.3c-.2.2-.4.4-.5.5Zm11.4-11.3l-4.3-4,.3-.3.2-.2,4.3,4c-.2.1-.4.3-.5.5Zm10.7-12c.2-.2.3-.4.5-.5l-4.5-3.8c-.2.2-.3.4-.5.5l4.5,3.8Zm10.1-12.5l-4.7-3.6c.1-.2.3-.4.4-.6l4.7,3.5c-.1.3-.2.5-.4.7Zm9.5-13.1l-4.8-3.3c.1-.2.3-.4.4-.6l4.9,3.3c-.3.2-.4.4-.5.6Zm8.7-13.6l-5-3c.1-.1.1-.2.2-.3.1-.1.1-.2.2-.3l5,3c-.2.2-.3.4-.4.6Zm7.9-14l-5.2-2.8c.1-.2.2-.4.3-.6l5.2,2.7c-.1.3-.2.5-.3.7Zm7.2-14.4l-5.3-2.5.1-.2c.1-.1.1-.3.2-.4l5.3,2.5c-.1.2-.2.4-.3.6Zm6.4-14.7l-5.4-2.2c.1-.2.2-.4.3-.7l5.5,2.2c-.2.2-.3.4-.4.7Zm5.6-15.1l-5.6-1.9c.1-.2.1-.3.2-.5l.1-.2,5.6,1.9c-.2.2-.3.4-.3.7Zm4.7-15.4l-5.6-1.6.1-.3c0-.1.1-.2.1-.4l5.7,1.6c-.2.2-.2.4-.3.7Zm3.9-15.7l-5.7-1.3c.1-.2.1-.5.2-.7l5.7,1.2c-.1.4-.2.6-.2.8Zm3-15.8l-5.8-.9c0-.2.1-.5.1-.7l5.8.9c0,.3,0,.5-.1.7Zm2.2-15.9l-5.8-.6c0-.2.1-.5.1-.7l5.8.6c0,.2-.1.4-.1.7Zm1.3-16.1v-.7l-5.9-.3v.7l5.9.3Z"/>
                            </svg>
                            <div class="absolute inset-0 flex flex-col items-center justify-center">
                                <svg id="iconTop" viewBox="0 0 113 33.7" class="brand-logo-icon max-w-[75%] sm:max-w-[67%] md:max-w-[68%]">
                                    <defs>
                                        <style>
                                            .top-1 { fill: url(#linear-gradient-top); }
                                            .top-1, .top-2, .top-3 { stroke-width: 0px; }
                                            .top-2 { fill: url(#linear-gradient-top-2); }
                                            .top-3 { fill: url(#linear-gradient-top-3); }
                                        </style>
                                        <linearGradient id="linear-gradient-top" x1="72.11" y1="94.31" x2="27.83" y2="-10.81" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#b85518"/>
                                            <stop offset=".46" stop-color="#e99511"/>
                                            <stop offset="1" stop-color="#e99511"/>
                                        </linearGradient>
                                        <linearGradient id="linear-gradient-top-2" x1="77.37" y1="92.1" x2="33.09" y2="-13.02" xlink:href="#linear-gradient-top"/>
                                        <linearGradient id="linear-gradient-top-3" x1="111.48" y1="77.73" x2="67.2" y2="-27.39" xlink:href="#linear-gradient-top"/>
                                    </defs>
                                    <path class="top-1" d="m38.04,1.83C16.28,3.64,7.92,18.48,4.69,32.61c-.06.37-.1.72-.16,1.09h18.51c.25-1.35.55-2.65.89-3.91,2.16-5.71,6.36-11.49,12.49-14.44,20.2-9.6,40.3,5.16,40.3,5.16l4.89-3.45C77.33,13.16,59.8.01,38.04,1.83Z"/>
                                    <path class="top-2" d="m36.69,33.7h25.54l.67-14.13-13.31-.63c-2.83,6.07-7.15,10.98-12.9,14.77Z"/>
                                    <path class="top-3" d="m89.99,24.97l-3.68,3.35s2.09,2.4,4.82,5.38h6.14c-3.91-5.58-7.29-8.73-7.29-8.73Z"/>
                                </svg>
                                
                                <svg id="iconCenter" viewBox="0 0 113 41.47" class="brand-logo-icon max-w-[75%] sm:max-w-[67%] md:max-w-[68%]">
                                    <defs>
                                        <style>
                                            .center-1 { fill: url(#linear-gradient-center); }
                                            .center-1, .center-2, .center-3 { stroke-width: 0px; }
                                            .center-2 { fill: url(#linear-gradient-center-2); }
                                            .center-3 { fill: url(#linear-gradient-center-3); }
                                        </style>
                                        <linearGradient id="linear-gradient-center" x1="109.26" y1="44.97" x2="64.98" y2="-60.15" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#b85518"/>
                                            <stop offset=".46" stop-color="#e99511"/>
                                            <stop offset="1" stop-color="#e99511"/>
                                        </linearGradient>
                                        <linearGradient id="linear-gradient-center-2" x1="69.17" y1="61.85" x2="24.89" y2="-43.27" xlink:href="#linear-gradient-center"/>
                                        <linearGradient id="linear-gradient-center-3" x1="40.44" y1="73.96" x2="-3.84" y2="-31.16" xlink:href="#linear-gradient-center"/>
                                    </defs>
                                    <path class="center-1" d="m94.02,3.11c11.66,16.42,8.55,30.72,5.05,38.36h9.65c2.2-17.93-5.29-32.7-11.44-41.47h-6.14c.91.99,1.89,2.05,2.89,3.11Z"/>
                                    <path class="center-2" d="m60.25,41.47L62.22,0h-25.54c-1.19.78-2.41,1.53-3.72,2.21l-.81,17.1c1.9-.28,4.12-1.05,6.66-2.32l6.3-3.36-1.32,27.84h16.45Z"/>
                                    <path class="center-3" d="m23.05,0H4.54c-2.51,16.4,2.89,30.8,9.35,41.47h23.4C22.57,23.89,21.11,10.49,23.05,0Z"/>
                                </svg>
                                
                                <svg id="iconBottom" viewBox="0 0 113 35.33" class="brand-logo-icon max-w-[75%] sm:max-w-[67%] md:max-w-[68%]">
                                    <defs>
                                        <style>
                                            .bottom-1 { fill: url(#linear-gradient-bottom); }
                                            .bottom-1, .bottom-2, .bottom-3 { stroke-width: 0px; }
                                            .bottom-2 { fill: none; }
                                            .bottom-3 { fill: url(#linear-gradient-bottom-2); }
                                        </style>
                                        <linearGradient id="linear-gradient-bottom" x1="77.38" y1="16.93" x2="33.1" y2="-88.19" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#b85518"/>
                                            <stop offset=".46" stop-color="#e99511"/>
                                            <stop offset="1" stop-color="#e99511"/>
                                        </linearGradient>
                                        <linearGradient id="linear-gradient-bottom-2" x1="40.06" y1="32.65" x2="-4.22" y2="-72.47" xlink:href="#linear-gradient-bottom"/>
                                    </defs>
                                    <g>
                                        <path class="bottom-1" d="m99.07,0c-.85,1.85-1.72,3.32-2.41,4.33-13.99,16.85-34.45,8.63-36.98,7.52L60.25,0h-16.45l-.86,18.04h.06c-.11,2.89-.21,6.02-.21,8.13,5.82,7.73,27.4,10.4,36.02,8.56,9.58-2.22,15.45-6.62,19.44-10.98,5.31-5.82,8.66-13.14,10.04-20.9.17-.96.31-1.91.43-2.85h-9.65Z"/>
                                        <path class="bottom-3" d="m29.84,19.36s6.97-11.13,10.24-16.14C39.1,2.13,38.18,1.06,37.29,0H13.89c7.31,12.07,15.96,19.36,15.96,19.36Z"/>
                                    </g>
                                    <path class="bottom-2" d="m59.46,11.79c2.6,1.1,23,9.3,37-7.5.92-1.35,1.72-2.78,2.4-4.27h-38.84l-.56,11.77Z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-6xl mx-auto w-full h-full relative flex flex-col items-center justify-between gap-6 px-4 pt-8 pb-8 sm:px-6 sm:pt-10 sm:pb-10 md:flex-row md:items-end md:gap-0 md:px-6 md:pt-0 md:pb-24">
                        <div id="leftRevealContent" class="relative md:absolute md:left-6 md:bottom-24 max-w-[20rem] sm:max-w-[24rem] md:max-w-[42rem] lg:max-w-[48rem] text-center md:text-left mt-2 sm:mt-14">
                            <div class="left-reveal-wrap mb-5 md:mb-9">
                                <p class="left-reveal-line text-white/30 text-[10px] sm:text-xs font-light uppercase tracking-widest mb-1 sm:mb-3">
                                    Empowering Your
                                </p>
                            </div>
                            <div class="left-reveal-wrap mb-0">
                                <h2 class="left-reveal-line lg:whitespace-nowrap text-[2.15rem] sm:text-3xl md:text-[2.2rem] lg:text-[3.2rem] font-light leading-[1.1] sm:leading-[1.1em] tracking-[0em]">
                                    Business Through
                                </h2>
                            </div>
                            <div class="left-reveal-wrap">
                                <h2 class="left-reveal-line lg:whitespace-nowrap text-[2.15rem] sm:text-3xl md:text-[2.2rem] lg:text-[3.2rem] font-light leading-[1.1] sm:leading-[1.1em] tracking-[0em] mb-0">
                                    with us
                                </h2>
                            </div>
                        </div>

                        <div id="rightRevealStats" class="relative md:absolute md:right-6 md:bottom-24 h-[120px] md:h-auto overflow-visible flex flex-col items-center md:items-end w-full md:w-auto mt-6 sm:mt-8 mb-0">
                            <div class="left-reveal-wrap text-center md:text-right z-10 hidden md:block">
                                <p id="sinceText" class="left-reveal-line text-xs text-white/40 uppercase tracking-[0.1em] font-light mb-0 leading-4 sm:mb-2">
                                    Since 2015
                                </p>
                            </div>
                            <p class="flex flex-col items-center left-reveal-line text-xs text-white/40 uppercase tracking-[0.1em] font-light mb-0 leading-10 sm:mb-2 fixed bottom-[150px] md:relative z-10 md:hidden">
                                Since 2015
                            </p>
                            <div id="verticalText">
                                <div id="verticalTextInner">
                                    <h4 class="stat-h4 active">
                                        <span class="stat-number">11+</span>
                                        <span class="stat-label max-w-full sm:max-w-full md:max-w-[118px] lg:max-w-[120px]">Years of Experience</span>
                                    </h4>
                                    <h4 class="stat-h4">
                                        <span class="stat-number">900+</span>
                                        <span class="stat-label max-w-full sm:max-w-full md:max-w-[118px] lg:max-w-[120px]">Successful Stories</span>
                                    </h4>
                                    <h4 class="stat-h4">
                                        <span class="stat-number">600+</span>
                                        <span class="stat-label max-w-full sm:max-w-full md:max-w-[118px] lg:max-w-[120px]">International Clients</span>
                                    </h4>
                                    <h4 class="stat-h4">
                                        <span class="stat-number">8+</span>
                                        <span class="stat-label max-w-full sm:max-w-full md:max-w-[118px] lg:max-w-[120px]">Countries Served</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="aboutOverlayFade" class="absolute inset-0 z-[40] pointer-events-none opacity-0"></div>
            </div>
            
            <div id="aboutSubtext" class="fixed bottom-6 left-0 right-0 mx-auto w-max z-50 flex items-center gap-3 px-4 py-3 rounded-full border border-white/10 bg-[#2c7d4c]/80 backdrop-blur-xl shadow-lg text-md text-white font-light hidden sm:flex">
                <div class="reveal-content flex items-center gap-2">
                    <span class="grid h-5 w-5 place-items-center">
                        <img id="rotatingIcon" src="assets/images/logo.png" class="w-full h-full object-contain" alt="">
                    </span>
                    <span class="text-waz tracking-tight">Building smart IT solutions for business growth.</span>
                </div>
                <div class="about-subtext-actions flex items-center gap-3">
                    <a href="#" class="px-5 py-2 rounded-full bg-white text-black text-sm font-medium transition-all duration-300 hover:bg-black hover:text-white">Let’s Build</a>
                    <a href="#" class="rounded-full text-white h-9 w-9 flex items-center justify-center transition-colors duration-300 hover:bg-white/20 border border-white/20">
                        <svg class="" style="display:inline-block;vertical-align:middle" width="18" height="18" fill="currentColor" viewBox="0 0 1004 1024" xmlns="http://www.w3.org/2000/svg">
                            <path d="M169.592 91.056c33.181 0.769 63.036 14.398 84.898 36.076l-0.009-0.008 97.317 97.317c24.222 21.501 39.41 52.717 39.41 87.481 0 1.438-0.026 2.87-0.078 4.296l0.006-0.206c-2.903 31.857-18.963 59.471-42.63 77.69l-0.259 0.192-1.588 1.215c-15.963 8.928-26.577 25.726-26.577 45.004 0 4.29 0.526 8.458 1.516 12.441l-0.074-0.354 0.748 2.57c1.822 7.335 13.409 36.395 85.73 103.531 40.427 37.149 84.049 73.139 129.538 106.748l4.313 3.043c6.417 4.36 14.335 6.961 22.861 6.961 0.027 0 0.055-0 0.082-0l-0.004 0c19.28-1.512 36.381-9.79 49.156-22.432l-0.007 0.007 19.482-19.482c14.211-14.425 33.958-23.362 55.793-23.362 0.227 0 0.453 0.001 0.679 0.003l-0.035-0c35.789 2.747 67.406 18.673 90.392 42.875l0.057 0.060 97.083 97.457c22.126 20.895 35.9 50.431 35.9 83.184s-13.774 62.29-35.845 83.133l-0.055 0.052-58.399 58.399c-26.076 27.807-62.038 46.071-102.249 49.163l-0.534 0.033h-2.616l-2.616-0.374c-530.034-80.498-696.823-502.095-710.932-713.829v-2.336c-0.068-1.99-0.107-4.329-0.107-6.676 0-51.489 18.625-98.628 49.506-135.046l-0.25 0.303 38.917-38.917c20.475-21.833 49.311-35.613 81.371-36.206l0.108-0.002zM306.434 337.642c7.943-6.378 13.374-15.601 14.742-26.101l0.021-0.202c-0.735-15.121-7.935-28.425-18.873-37.301l-0.095-0.075-97.317-97.27c-9.166-8.984-21.504-14.763-35.181-15.505l-0.139-0.006c-12.772 0.627-24.064 6.483-31.863 15.456l-0.047 0.055-38.917 38.917c-17.959 23.533-28.775 53.357-28.775 85.707 0 1.766 0.032 3.525 0.096 5.276l-0.007-0.253c13.362 192.204 165.668 572.502 648.047 647.3 20.419-4.187 38.001-14.325 51.346-28.497l0.046-0.049 58.353-58.119c9.343-8.243 15.206-20.244 15.206-33.615s-5.863-25.371-15.158-33.573l-0.049-0.042-97.317-97.317c-10.592-11.333-24.618-19.337-40.414-22.351l-0.466-0.074c-0.14-0.008-0.304-0.013-0.47-0.013-2.572 0-4.876 1.142-6.436 2.945l-0.009 0.011-19.482 19.482c-25.37 25.409-60.011 41.555-98.415 42.928l-0.256 0.007c-0.051 0-0.111 0-0.172 0-23.204 0-44.74-7.144-62.528-19.352l0.376 0.244-1.168-0.794c-37.376-27.097-223.553-166.088-246.633-252.286-2.883-9.86-4.541-21.188-4.541-32.903 0-42.981 22.323-80.748 56.008-102.34l0.485-0.291z"></path>
                            <path d="M848.708 502.189h-70.079c-0.159-152.593-123.804-276.254-276.375-276.44l-0.018-0v-70.079c191.272 0.239 346.26 155.244 346.472 346.499l0 0.020z"></path>
                            <path d="M1004.471 502.236h-70.079c-0.266-238.566-193.59-431.89-432.13-432.156l-0.026-0v-70.079c277.377-0 502.236 224.859 502.236 502.236v0z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <section id="serviceSection" class="relative z-30 px-5 py-16 text-black sm:px-8 md:px-12 md:pt-15 md:pb-10 lg:px-16 transition-colors duration-700 ease-out">
            <svg style="position: absolute; width: 0; height: 0; pointer-events: none;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                <filter id="waterFlow">
                    <feTurbulence type="fractalNoise" baseFrequency="0.02" numOctaves="3" result="noise" />
                    <feDisplacementMap in="SourceGraphic" in2="noise" scale="0" xChannelSelector="R" yChannelSelector="G" id="liquidDisplacement" />
                </filter>
            </svg>

            <div class="mx-auto max-w-6xl">
                <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45">Services</p>
                <div class="grid gap-5 md:gap-6">
                    <div class="flex flex-col gap-5 sm:flex-row md:flex-row sm:items-start md:items-start sm:justify-between md:justify-between md:gap-8">
                        <h2 id="serviceHeading" class="max-w-[22rem] text-[33px] font-light leading-[1.2] tracking-[-0.035em] text-left text-black sm:max-w-[28rem] sm:text-4xl md:max-w-[31rem] md:text-5xl md:leading-[1.15] md:tracking-[-0.0em] lg:max-w-[37rem] lg:text-[3.5rem] lg:leading-[1.1]">
                            Digital services designed for business growth.
                        </h2>
                        <a href="#featureServiceSection" aria-label="Go to service showcase" class="group hidden h-12 w-12 items-center justify-center sm:inline-flex">
                            <svg viewBox="0 0 24.02 15.27" class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                                <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                            </svg>
                        </a>
                    </div>

                    <p class="max-w-lg text-sm leading-6 text-black/65 md:hidden">
                        We offer web, eCommerce, app, CMS, digital marketing, and software solutions focused on delivering results that delight our clients.
                    </p>

                    <div id="serviceParagraph" class="hidden max-w-[36rem] text-black/65 md:block md:text-[17px] md:leading-7 lg:text-md lg:leading-7">
                        <div class="overflow-hidden">
                            <span class="service-line block">We offer web, eCommerce, app, CMS, digital marketing, and</span>
                        </div>
                        <div class="overflow-hidden">
                            <span class="service-line block">software solutions focused on delivering results that delight our clients.</span>
                        </div>
                    </div>

                    <div id="desktopServiceLayout" class="hidden lg:grid my-0 gap-8 lg:grid-cols-[160px_minmax(0,1fr)_minmax(0,350px)] lg:items-start p-0 relative">
                        <div class="flex flex-col justify-center sticky top-0 h-[100vh] flex-shrink-0 z-20">
                            <p id="serviceExploreText" class="text-sm text-black/65 font-medium leading-relaxed border-l-2 border-accent pl-3">
                                Explore Our<br>Creative & Digital<br>Services
                            </p>
                        </div>

                        <div class="feature-service-media sticky top-[6rem] h-[80vh] flex flex-col justify-center w-full relative">
                            <div class="h-[70vh] relative w-full">
                                <div class="feature-visual-frame absolute inset-0 w-full h-full bg-black/5 overflow-hidden shadow-lg">
                                    <figure class="feature-primary-visual absolute inset-0">
                                        <video class="h-full w-full object-cover" autoplay muted loop playsinline>
                                            <source src="assets/video/web.mp4" type="video/mp4">
                                        </video>
                                    </figure>
                                    <figure class="feature-primary-visual absolute inset-0">
                                        <img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/d754be230511570.Y3JvcCwxOTIxLDE1MDMsNCww.jpg" class="h-full w-full object-cover" />
                                    </figure>
                                    <figure class="feature-primary-visual absolute inset-0">
                                        <video class="h-full w-full object-cover" autoplay muted loop playsinline>
                                            <source src="assets/video/mobile.mp4" type="video/mp4">
                                        </video>
                                    </figure>
                                    <figure class="feature-primary-visual absolute inset-0">
                                        <img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/f850ce239041909.Y3JvcCwxOTM5LDE1MTYsMjczLDI0NA.jpg" class="h-full w-full object-cover" />
                                    </figure>
                                    <figure class="feature-primary-visual absolute inset-0">
                                        <img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/e85d2d246988107.Y3JvcCwyMDQ4LDE2MDEsMCwyMjM.png" class="h-full w-full object-cover" />
                                    </figure>
                                    <figure class="feature-primary-visual absolute inset-0">
                                        <img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/4aa307232271915.Y3JvcCwzMjMyLDI1MjgsOCww.jpg" class="h-full w-full object-cover" />
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class="feature-service-articles pl-10 pb-[25vh] pt-[15vh]">
                            <article class="feature-service-step min-h-[60vh] flex flex-col justify-center" data-feature-index="0">
                                <h3 class="text-3xl font-normal leading-[1.1] tracking-[-0.0em] text-black mb-3">Website Development</h3>
                                <div class="max-w-sm text-base leading-6 text-black/65">
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">Offering clients an unmatched web</span>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">experience using advanced tools and</span>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">technologies.</span>
                                    </div>
                                </div>
                                <div class="mt-4 overflow-hidden">
                                    <a href="web-development.php" class="feature-service-link text-sm text-black transition-colors duration-300 hover:text-accent font-medium inline-block">Discover More</a>
                                </div>
                            </article>

                            <article class="feature-service-step min-h-[60vh] flex flex-col justify-center" data-feature-index="1">
                                <h3 class="text-3xl font-normal leading-[1.1] tracking-[-0.0em] text-black mb-3">Ecommerce Development</h3>
                                <div class="max-w-sm text-base leading-6 text-black/65">
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">Build your online store to reach new</span>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">markets with a fast, conversion-ready</span>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">commerce experience.</span>
                                    </div>
                                </div>
                                <div class="mt-4 overflow-hidden">
                                    <a href="ecommerce-website-development.php" class="feature-service-link text-sm text-black transition-colors duration-300 hover:text-accent font-medium inline-block">Discover More</a>
                                </div>
                            </article>

                            <article class="feature-service-step min-h-[60vh] flex flex-col justify-center" data-feature-index="2">
                                <h3 class="text-3xl font-normal leading-[1.1] tracking-[-0.0em] text-black mb-3">Mobile App Development</h3>
                                <div class="max-w-sm text-base leading-6 text-black/65">
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">Design and build polished cross-platform</span>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">mobile apps that keep customers</span>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">engaged everywhere.</span>
                                    </div>
                                </div>
                                <div class="mt-4 overflow-hidden">
                                    <a href="mobile-application-development.php" class="feature-service-link text-sm text-black transition-colors duration-300 hover:text-accent font-medium inline-block">Discover More</a>
                                </div>
                            </article>

                            <article class="feature-service-step min-h-[60vh] flex flex-col justify-center" data-feature-index="3">
                                <h3 class="text-3xl font-normal leading-[1.1] tracking-[-0.0em] text-black mb-3">SEO & Digital Marketing</h3>
                                <div class="max-w-sm text-base leading-6 text-black/65">
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">Grow reach and performance through</span>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">data-driven SEO, SEM, and content</span>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">marketing that genuinely converts.</span>
                                    </div>
                                </div>
                                <div class="mt-4 overflow-hidden">
                                    <a href="digital-marketing.php" class="feature-service-link text-sm text-black transition-colors duration-300 hover:text-accent font-medium inline-block">Discover More</a>
                                </div>
                            </article>

                            <article class="feature-service-step min-h-[60vh] flex flex-col justify-center" data-feature-index="4">
                                <h3 class="text-3xl font-normal leading-[1.1] tracking-[-0.0em] text-black mb-3">SMM & Social Growth</h3>
                                <div class="max-w-sm text-base leading-6 text-black/65">
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">Humanizing your brand through</span>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">social storytelling and viral</span>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">performance marketing loops.</span>
                                    </div>
                                </div>
                                <div class="mt-4 overflow-hidden">
                                    <a href="digital-marketing.php" class="feature-service-link text-sm text-black transition-colors duration-300 hover:text-accent font-medium inline-block">Discover More</a>
                                </div>
                            </article>

                            <article class="feature-service-step min-h-[60vh] flex flex-col justify-center" data-feature-index="5">
                                <h3 class="text-3xl font-normal leading-[1.1] tracking-[-0.0em] text-black mb-3">Software Development</h3>
                                <div class="max-w-sm text-base leading-6 text-black/65">
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">Create adaptable custom software</span>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">solutions that scale with your processes,</span>
                                    </div>
                                    <div class="overflow-hidden">
                                        <span class="feature-service-copy-line">users, and business goals.</span>
                                    </div>
                                </div>
                                <div class="mt-4 overflow-hidden">
                                    <a href="software-development.php" class="feature-service-link text-sm text-black transition-colors duration-300 hover:text-accent font-medium inline-block">Discover More</a>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div id="mobileServiceContainer" class="lg:hidden mt-8 overflow-hidden">
                        <div id="mobileServiceTrack">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="clientsSection" class="parallax-bg relative z-10 bg-white px-5 py-16 text-black sm:px-8 md:px-12 md:py-24 lg:px-16 lg:py-15 bg-[#fafafa]">
            <div class="mx-auto max-w-6xl">
                <div class="grid gap-12 lg:grid-cols-full lg:items-start lg:gap-16">
                    <div>
                        <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45">Clients</p>
                        <h2 id="clientHeading" class="max-w-[25rem] text-[33px] font-light leading-[1.2] tracking-[-0.035em] text-left text-black sm:max-w-[33rem] sm:text-4xl md:max-w-[43rem] md:text-5xl md:leading-[1.15] md:tracking-[-0.0em] lg:max-w-[40rem] lg:text-[3.5rem] lg:leading-[1.1]">
                            Brands that trust us to build sharp digital experiences.
                        </h2>
                        <p class="mt-5 md:mt-8 text-sm leading-6 max-w-lg text-black/60 md:hidden">
                            We're nothing without our clients. We work closely with a wide range of clients from different sectors and regions.
                        </p>
                        <div id="clientParagraph" class="mt-8 hidden max-w-[36rem] text-black/65 md:block md:text-[17px] md:leading-7 lg:text-md lg:leading-7">
                            <div class="overflow-hidden">
                                <span class="client-line block">We're nothing without our clients. We work closely with a wide range</span>
                            </div>
                            <div class="overflow-hidden">
                                <span class="client-line block">of clients from different sectors and regions.</span>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-6 lg:grid-cols-6 text-black border border-gray-200 bg-gray-200 gap-[1px] rounded-lg overflow-hidden">
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/aaa.jpg" alt="Client 1" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/loanitol.jpg" alt="Client 2" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/advance.jpg" alt="Client 3" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/poweron.jpg" alt="Client 4" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/rasi.jpg" alt="Client 5" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/policysouq.jpg" alt="Client 6" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/u-storage.jpg" alt="Client 7" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/warid.jpg" alt="Client 8" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/lakewood.jpg" alt="" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/royal.jpg" alt="" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <!--  -->
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/osoul.jpg" alt="" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/usfood.jpg" alt="" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/beefrus.jpg" alt="" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/tekhive.jpg" alt="" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>

                        <!--  -->
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/rosehouse.jpg" alt="" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/apco.jpg" alt="" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/ezviz.jpg" alt="" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                        <div class="client-mark flex items-center justify-center bg-white min-h-[120px] p-6">
                            <img src="assets/images/clients/liyana.jpg" alt="" class="w-[80%] max-w-[140px] object-contain opacity-90 transition-opacity duration-300 hover:opacity-100" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonialSection" class="relative z-10 bg-white px-5 py-16 text-black sm:px-8 md:px-12 md:py-24 lg:px-16 lg:pb-23">
            <div class="mx-auto max-w-6xl">
                <div class="testimonial-layout grid gap-12 md:grid-cols-[1.2fr_1fr] lg:gap-12">
                    <div class="testimonial-copy-column flex flex-col justify-space-between">
                        <div>
                            <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45">
                                Testimonials
                            </p>
                            <h2 id="testimonialHeading" class="max-w-[19rem] text-[33px] font-normal leading-[1.2] tracking-[-0.035em] text-left text-black sm:max-w-[33rem] sm:text-4xl md:max-w-[28rem] md:text-5xl md:leading-[1.1] md:tracking-[-0.0em] lg:max-w-[28rem] lg:text-5xl">
                                What Our Clients Are Saying
                            </h2>
                            <p class="mt-6 max-w-lg text-sm leading-6 text-black/60 md:hidden">
                                We take pride in delivering exceptional solutions that deliver great results. But don't just take our word for it.
                            </p>
                            <p id="testimonialParagraph" class="mt-6 hidden max-w-xl text-black/60 md:block md:text-[17px] md:leading-7 lg:text-lg lg:leading-7">
                                We take pride in delivering exceptional solutions that deliver great results. But don't just take our word for it.
                            </p>
                        </div>

                        <div class="mt-6 hidden items-center gap-4 sm:flex md:mt-8">
                            <div class="mt-0 flex items-center justify-end gap-5">
                                <button id="testimonialPrev" type="button" class="testimonial-arrow inline-flex items-center justify-center text-black transform rotate-180" aria-label="Previous testimonial">
                                    <svg viewBox="0 0 24.02 15.27" class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                                        <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                                    </svg>
                                </button>
                                <button id="testimonialNext" type="button" class="testimonial-arrow inline-flex items-center justify-center text-black" aria-label="Next testimonial">
                                    <svg viewBox="0 0 24.02 15.27" class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                                        <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-stage relative">
                        <?php include 'includes/testimonial-items.php'; ?>
                        <div class="mt-8 flex items-center gap-4 sm:hidden">
                            <div class="mt-0 flex items-center justify-end gap-3">
                                <button id="testimonialPrevMobile" type="button" class="testimonial-arrow inline-flex items-center justify-center text-black transform rotate-180" aria-label="Previous testimonial">
                                    <svg viewBox="0 0 24.02 15.27" class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                                        <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                                    </svg>
                                </button>
                                <button id="testimonialNextMobile" type="button" class="testimonial-arrow inline-flex items-center justify-center text-black" aria-label="Next testimonial">
                                    <svg viewBox="0 0 24.02 15.27" class="h-4 w-4 text-black transition-colors duration-300 hover:text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path d="M0,12H21.75" transform="translate(0 -4.36)" />
                                        <path d="M15.75,5l7,7-7,7" transform="translate(0 -4.36)" />
                                    </svg>
                                </button>
                                <!-- <button id="testimonialPrevMobile" type="button" class="testimonial-arrow inline-flex h-12 w-12 items-center justify-center rounded-full border border-black/10 text-black" aria-label="Previous testimonial">
                                    <svg viewBox="0 0 20 20" class="h-4 w-4" fill="currentColor" aria-hidden="true">
                                        <path d="M11.707 4.293 10.293 5.707 6.999 9H17v2H6.999l3.294 3.293-1.414 1.414L3.171 10l5.708-5.707z" />
                                    </svg>
                                </button>
                                <button id="testimonialNextMobile" type="button" class="testimonial-arrow inline-flex h-12 w-12 items-center justify-center rounded-full border border-black/10 text-black" aria-label="Next testimonial">
                                    <svg viewBox="0 0 20 20" class="h-4 w-4" fill="currentColor" aria-hidden="true">
                                        <path d="m11.707 4.293 5.707 5.707-5.707 5.707-1.414-1.414L13.586 11H3V9h10.586l-3.293-3.293z" />
                                    </svg>
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'includes/footer.php'; ?>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>