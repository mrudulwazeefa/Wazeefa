<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/common-assets.php'; ?>
    <?php include 'includes/google-tag-manager.php'; ?>
    <?php include 'includes/meta/about-us.php'; ?>
</head>

<body class="min-h-screen text-white bg-black">
    <div class="mx-auto min-h-screen max-w-full p-0 md:p-0">
        <!-- Header -->
        <?php include 'includes/header.php'; ?>
        <!-- Menupanel -->
        <?php include 'includes/menupanel.php'; ?>
        <!-- HERO -->
        <section id="aboutSection-about"
            class="bg-white px-5 pt-32 pb-4 text-black sm:px-8 md:px-12 md:pt-40 md:pb-6 lg:px-16 lg:pt-35 lg:pb-5">
            <div class="mx-auto max-w-6xl">
                <div id="aboutIntroTextBlock" class="max-w-6xl md:flex md:items-start md:justify-between md:gap-8">
                    <div class="md:max-w-3xl">
                        <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45">About Us</p>
                        <h2
                            class="text-[2.2rem] font-normal leading-[0.92] tracking-[-0.01em] sm:text-[3.3rem] md:text-[48px] lg:text-[53px] md:leading-[1.10] text-black">
                            Everything you need to get the attention of your audience
                        </h2>
                    </div>
                    <div class="mt-4 flex items-center gap-3 md:mt-[3.6rem] md:ml-auto md:flex-shrink-0 md:justify-end">
                        <span class="hidden h-px w-16 bg-black md:block"></span>
                        <p class="text-base leading-6 text-black md:text-md">Turning vision into reality</p>
                    </div>
                </div>

                <div class="mt-6 md:mt-8">
                    <div id="aboutIntroMediaSection" class="relative">
                        <div class="mt-[0px] flex w-full justify-end overflow-hidden md:mt-[-5px]">
                            <div id="aboutIntroMediaFrame"
                                class="ml-auto h-[270px] w-full overflow-hidden sm:h-[330px] md:h-[230px] md:w-full md:max-h-[35vw]">
                                <video id="aboutIntroParallaxImage" class="h-full w-full object-cover" autoplay muted
                                    loop playsinline poster="https://www.pexels.com/download/video/8347237/">
                                    <source src="https://www.pexels.com/download/video/8347237/" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="my-10 grid gap-5 text-black/70 md:my-5 md:grid-cols-1 md:gap-5 md:pb-8 md:pt-5">
                        <p class="text-sm leading-7 md:text-[15px]">
                            Wazeefa1 Technologies Pvt. Ltd., based in Infopark Thrissur, delivers a wide range of IT
                            solutions including web, eCommerce, mobile app, CMS, digital marketing, and software
                            development services to clients worldwide.
                        </p>
                        <p class="text-sm leading-7 md:text-[15px]">
                            We create custom, high-quality digital solutions tailored to your business needs, ensuring
                            affordability, performance, and strong brand presence. Our expert team focuses on innovation
                            and advanced technology to help you stay ahead in a competitive market.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="storySection" class="relative z-10 bg-black text-white h-screen overflow-hidden">

            <div id="storyHeadingWrapper"
                class="absolute top-[12vh] w-full flex flex-col items-center justify-start z-20 pointer-events-none px-5 will-change-transform">
                <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-white/40">Why Choose Us</p>
                <h2 id="storyHeading"
                    class="max-w-[38rem] text-[33px] font-light leading-[1.02] tracking-[-0.01em] md:text-[2.5rem] text-white text-center">
                    Seamlessly Connecting Technology for Growth
                </h2>
            </div>

            <div id="storyImageHero"
                class="absolute top-[56%] md:top-[58%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-[85vw] h-[40vh] md:w-[60vw] md:h-[45vh] overflow-hidden z-10 will-change-transform">
                <div class="story-overlay absolute inset-0 bg-black/55 z-10 opacity-0 transition-opacity duration-500">
                </div>
                <video id="storyBackdropVideo" class="w-full h-full object-cover scale-105 will-change-transform"
                    autoplay muted loop playsinline>
                    <source src="assets/video/carousel-slider-2.mp4" type="video/mp4" />
                </video>
            </div>

            <div id="storyTextTrack"
                class="absolute inset-0 z-30 flex items-center justify-center perspective-[1500px] px-5 pointer-events-none">

                <article
                    class="story-rotate-card absolute flex flex-col items-center justify-center text-center w-full max-w-5xl h-auto mx-auto will-change-transform">
                    <h3
                        class="max-w-2xl text-2xl sm:text-4xl md:text-5xl lg:text-[3rem] leading-[1.15] tracking-[-0.01em] text-white/95 font-light">
                        Managed Website</h3>
                    <p class=" max-w-xssm:max-w-lg md:max-w-3xl text-md mt-5 font-light">
                        A well-managed website gives you an edge in the business space. Get the website designed and
                        conceived in tune with today’s emerging business demands.
                    </p>
                </article>

                <article
                    class="story-rotate-card absolute flex flex-col items-center justify-center text-center w-full max-w-5xl h-auto mx-auto will-change-transform">
                    <h3
                        class="max-w-2xl text-2xl sm:text-4xl md:text-5xl lg:text-[3rem] leading-[1.15] tracking-[-0.01em] text-white/95 font-light">
                        Expert Solutions</h3>
                    <p class=" max-w-xs sm:max-w-lg md:max-w-3xl text-md mt-5 font-light">
                        We express things in a different way. After finalizing the preferences with you, we set the
                        stage for the development phase with our team who understands the needs perfectly.
                    </p>
                </article>

                <article
                    class="story-rotate-card absolute flex flex-col items-center justify-center text-center w-full max-w-5xl h-auto mx-auto will-change-transform">
                    <h3
                        class="max-w-2xl text-2xl sm:text-4xl md:text-5xl lg:text-[3rem] leading-[1.15] tracking-[-0.01em] text-white/95 font-light">
                        Grow Online</h3>
                    <p class=" max-w-xs sm:max-w-lg md:max-w-3xl text-md mt-5 font-light">
                        Once your website is launched, we have a set of digital marketing strategies to help you grow
                        your business with more traffic and leads and with a larger user base.
                    </p>
                </article>

            </div>
        </section>

        <section id="serviceSection"
            class="relative z-0 bg-white px-5 pt-16 pb-0 text-black sm:px-8 md:px-12 md:pt-10 md:pb-0 lg:px-16">
            <div class="mx-auto max-w-6xl">
                <div id="featureServiceSection"
                    class="service-story-layout mt-0 mb-0 md:mt-12 md:mb-0 grid gap-10 md:grid-cols-[minmax(0,2fr)_minmax(0,1.3fr)] md:items-start md:gap-16">
                    <div
                        class="service-story-sidebar flex flex-col gap-8 md:sticky md:top-[35vh] md:min-h-[0vh] md:justify-center md:mb-[18vh]">
                        <div>
                            <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45">What Changes
                                With Us</p>
                            <h3
                                class="mt-5 max-w-full text-[35px] font-normal leading-[1.02] tracking-[-0.01em] text-black md:text-[2.8rem]">
                                A service flow designed to keep clarity, speed, and traction in sync.
                            </h3>
                        </div>
                        <p class="max-w-lg text-base leading-7 text-black/60 md:text-lg">
                            The left side stays grounded while the right side updates with the outcomes clients feel as
                            the engagement deepens.
                        </p>
                    </div>

                    <div class="service-story-column md:pt-10">
                        <div class="service-story-display hidden md:sticky md:top-[35vh] md:flex">
                            <div class="service-story-stage relative min-h-[20rem] w-full overflow-hidden p-30">
                                <article class="service-story-panel absolute inset-0 flex flex-col justify-center p-10"
                                    data-service-story-panel="0">
                                    <div>
                                        <h3
                                            class="mt-6 max-w-xl text-4xl font-light leading-[0.95] tracking-[-0.01em] text-black">
                                            <span class="block font-medium text-7xl">13+</span>
                                            Years of Experience
                                        </h3>
                                    </div>
                                </article>
                                <article class="service-story-panel absolute inset-0 flex flex-col justify-center p-10"
                                    data-service-story-panel="1">
                                    <div>
                                        <h3
                                            class="mt-6 max-w-xl text-4xl font-light leading-[0.95] tracking-[-0.01em] text-black">
                                            <span class="block font-medium text-7xl">900+</span>
                                            Success Stories
                                        </h3>
                                    </div>
                                </article>
                                <article class="service-story-panel absolute inset-0 flex flex-col justify-center p-10"
                                    data-service-story-panel="2">
                                    <div>
                                        <h3
                                            class="mt-6 max-w-xl text-4xl font-light leading-[0.95] tracking-[-0.01em] text-black">
                                            <span class="block font-medium text-7xl">600+</span>
                                            International Clients
                                        </h3>
                                    </div>
                                </article>
                                <article class="service-story-panel absolute inset-0 flex flex-col justify-center p-10"
                                    data-service-story-panel="3">
                                    <div>
                                        <h3
                                            class="mt-6 max-w-xl text-4xl font-light leading-[0.95] tracking-[-0.01em] text-black">
                                            <span class="block font-medium text-7xl">35+</span>
                                            Countries
                                        </h3>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="service-story-scrollspace hidden md:block" aria-hidden="true">
                            <div class="service-story-marker min-h-[48vh]" data-service-story-index="0"></div>
                            <div class="service-story-marker min-h-[48vh]" data-service-story-index="1"></div>
                            <div class="service-story-marker min-h-[48vh]" data-service-story-index="2"></div>
                            <div class="service-story-marker min-h-[48vh]" data-service-story-index="3"></div>
                            <div class="service-story-endcap hidden"></div>
                        </div>

                        <div class="service-story-mobile md:hidden w-full mb-8 md:mt-8">
                            <div class="flex flex-col gap-6">
                                <article class="w-full py-8 md:p-8 flex flex-col justify-center">
                                    <h3 class="mt-4 text-3xl font-normal leading-[1.02] tracking-[-0.01em] text-black">
                                        <span class="text-4xl">13+</span> Years of Experience
                                    </h3>
                                    <p class="mt-5 text-base leading-7 text-black/62">Years of delivery across web,
                                        commerce, apps, and growth strategy give each project a steadier foundation from
                                        day one.</p>
                                </article>
                                <article
                                    class="w-full border-black/10 py-8 md:p-8 flex flex-col justify-center border-t border-b">
                                    <h3 class="mt-4 text-3xl font-normal leading-[1.02] tracking-[-0.01em] text-black">
                                        <span class="text-4xl">850+</span> Success Stories
                                    </h3>
                                    <p class="mt-5 text-base leading-7 text-black/62">We build systems that launch with
                                        confidence and stay practical for real teams managing growth, content, and
                                        performance.</p>
                                </article>
                                <article class="w-full py-8 md:p-8 flex flex-col justify-center">
                                    <h3 class="mt-4 text-3xl font-normal leading-[1.02] tracking-[-0.01em] text-black">
                                        <span class="text-4xl">600+</span> International Clients
                                    </h3>
                                    <p class="mt-5 text-base leading-7 text-black/62">Strategy, build, optimization, and
                                        marketing work together so growth does not stall after launch or handoff.</p>
                                </article>
                                <article
                                    class="w-full border-t border-black/10 py-8 md:p-8 flex flex-col justify-center">
                                    <h3 class="mt-4 text-3xl font-normal leading-[1.02] tracking-[-0.01em] text-black">
                                        <span class="text-4xl">35+</span> Countries
                                    </h3>
                                    <p class="mt-5 text-base leading-7 text-black/62">We stay close to performance,
                                        iteration, and next-step planning so the service relationship keeps creating
                                        momentum.</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>
    </div>
    <Script src="assets/js/script.js"></Script>

</body>

</html>