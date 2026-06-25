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
                        <h1
                            class="service-hero-h2 text-[2.2rem] font-normal leading-[1.05] tracking-[-0.01em] sm:text-[3.3rem] md:text-[48px] lg:text-[53px] md:leading-[1.10] text-black">
                            Everything you need to reach and engage your audience
                        </h1>
                    </div>
                    <div class="mt-4 flex items-center gap-3 md:mt-[3.6rem] md:ml-auto md:flex-shrink-0 md:justify-end">
                        <span class="hidden h-px w-16 bg-black md:block"></span>
                        <p class="text-base leading-6 text-black md:text-md">Turning ideas into digital success</p>
                    </div>
                </div>

                <div class="mt-6 md:mt-8">
                    <div id="aboutIntroMediaSection" class="relative">
                        <div class="mt-[0px] flex w-full justify-end overflow-hidden md:mt-[-5px]">
                            <div id="aboutIntroMediaFrame"
                                class="ml-auto h-[270px] w-full overflow-hidden sm:h-[330px] md:h-[230px] md:w-full md:max-h-[35vw]">
                                <video id="aboutIntroParallaxImage" class="h-full w-full object-cover" autoplay muted
                                    loop playsinline poster="assets/video/office.mp4">
                                    <source src="assets/video/office.mp4" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="my-10 grid gap-5 text-black/70 md:my-5 md:grid-cols-1 md:gap-5 md:pb-8 md:pt-5">
                        <p class="text-sm leading-6 md:text-[15px]">
                            Wazeefa1 Technologies Pvt. Ltd., based in Infopark Thrissur, delivers web development, eCommerce, mobile app, CMS, digital marketing, branding, and software development solutions to businesses worldwide. We create custom digital solutions tailored to your business goals, combining creativity, technology, and strategy to deliver performance, scalability, and long-term value.
                        </p>
                        <p class="text-sm leading-6 md:text-[15px]">
                            Our approach focuses on understanding your business, identifying growth opportunities, and building solutions that create meaningful impact. By combining industry expertise with modern technologies, we help businesses strengthen their digital presence, improve customer engagement, and achieve sustainable success in an evolving digital landscape.
                        </p>
                    </div>
                </div>
            </div>
        </section>
   <style>
        #pinned-sequence{ background-color: #000; color: #fff; margin: 0; overflow-x: hidden; }
        .perspective-container { perspective: 1500px; }
    </style>
    <section id="pinned-sequence" class="relative h-screen w-full flex flex-col items-center justify-center overflow-hidden bg-black z-0">
        
        <div id="intro-text" class="absolute top-[15%] text-center z-10 flex flex-col items-center w-full px-4">
            <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-white/40">Why Choose Us</p>
                <h2 id="storyHeading"
                    class="max-w-[38rem] text-[32px] font-light leading-[1.02] tracking-[-0.01em] md:text-[2.5rem] text-white text-center">
                    Connecting Technology With Business Growth
                </h2>
        </div>

        <div id="hero-media" class="relative w-[60vw] h-[50vh] mt-40 overflow-hidden z-0">
            <video src="assets/video/meeting.mp4" alt="Business Meeting" class="w-full h-full object-cover" autoplay muted loop>
            </video>
            <div id="media-overlay" class="absolute inset-0 bg-black opacity-0"></div>
        </div>

        <div class="absolute inset-0 flex items-center justify-center pointer-events-none perspective-container z-20">
            <div class="article-item absolute flex flex-col items-center justify-center text-center max-w-xl px-6 opacity-0 invisible will-change-transform">
                <h3
                        class="max-w-2xl text-4xl sm:text-4xl md:text-5xl lg:text-[3rem] leading-[1.15] tracking-[-0.01em] text-white/95 font-light">
                        Managed Website</h3>
                    <p class="max-w-[21rem] sm:max-w-lg md:max-w-3xl text-md mt-5 font-light">
                        We create and manage high-performance websites designed to strengthen your brand, enhance user experience, and support long-term business growth through modern design, reliable functionality, and scalable digital solutions.
                    </p>
            </div>
            <div class="article-item absolute flex flex-col items-center justify-center text-center max-w-xl px-6 opacity-0 invisible will-change-transform">
                <h3
                        class="max-w-2xl text-4xl sm:text-4xl md:text-5xl lg:text-[3rem] leading-[1.15] tracking-[-0.01em] text-white/95 font-light">
                        Expert Solutions</h3>
                    <p class="max-w-[21rem] sm:max-w-lg md:max-w-3xl text-md mt-5 font-light">
                        From strategy and design to development and deployment, we deliver tailored digital solutions that align with your business goals, improve operational efficiency, and create measurable results that support sustainable growth.
                    </p>
            </div>
            <div class="article-item absolute flex flex-col items-center justify-center text-center max-w-xl px-6 opacity-0 invisible will-change-transform">
                <h3
                        class="max-w-2xl text-4xl sm:text-4xl md:text-5xl lg:text-[3rem] leading-[1.15] tracking-[-0.01em] text-white/95 font-light">
                        Grow Online</h3>
                    <p class="max-w-[21rem] sm:max-w-lg md:max-w-3xl text-md mt-5 font-light">
                        We help businesses increase visibility, attract qualified leads, and achieve sustainable growth through data-driven digital marketing strategies focused on engagement, conversions, and long-term online success.
                    </p>
            </div>
        </div>
    </section>

    <div id="animation-spacer" class="w-full pointer-events-none" style="height: 500vh;"></div>

     <section id="serviceSection"
            class="relative z-0 bg-gray-100 px-5 pt-16 pb-0 text-black sm:px-8 md:px-12 md:pt-10 md:pb-0 lg:px-16">
            <div class="mx-auto max-w-6xl">
                <div id="featureServiceSection"
                    class="service-story-layout mt-0 mb-0 md:mt-12 md:mb-0 grid gap-10 md:grid-cols-[minmax(0,2fr)_minmax(0,1.3fr)] md:items-start md:gap-16">
                    <div
                        class="service-story-sidebar flex flex-col gap-8 md:sticky md:top-[35vh] md:min-h-[0vh] md:justify-center md:mb-[18vh]">
                        <div>
                            <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45">What Changes With Us</p>
                            <h2
                                class="mt-5 max-w-full text-[35px] font-light leading-[1.05] tracking-[-0.01em] text-black md:text-[2.8rem]">
                                A seamless workflow that transforms ideas into measurable results.
                            </h2>
                        </div>
                        <p class="max-w-lg text-base leading-7 text-black/60 md:text-lg">
                            Every stage is designed to create meaningful outcomes that strengthen your brand, improve performance, and support business growth.
                        </p>
                    </div>

                    <div class="service-story-column md:pt-10">
                        <div class="service-story-display hidden md:sticky md:top-[35vh] md:flex">
                            <div class="service-story-stage relative min-h-[20rem] w-full overflow-hidden p-30">
                                <article class="service-story-panel absolute inset-0 flex flex-col justify-center p-10"
                                    data-service-story-panel="0">
                                    <div>
                                        <h2
                                            class="mt-6 max-w-xl font-light leading-[0.95] tracking-[-0.01em]">
                                            <span class="block font-medium text-8xl gradient-text">10+</span>
                                            <span class="text-black text-2xl">Years of Experience</span>
                                        </h2>
                                    </div>
                                </article>
                                <article class="service-story-panel absolute inset-0 flex flex-col justify-center p-10"
                                    data-service-story-panel="1">
                                    <div>
                                        <h2
                                            class="mt-6 max-w-xl font-light leading-[0.95] tracking-[-0.01em]">
                                            <span class="block font-medium text-8xl gradient-text">100+</span>
                                            <span class="text-black text-2xl">Successful Stories</span>
                                        </h2>
                                    </div>
                                </article>
                                <article class="service-story-panel absolute inset-0 flex flex-col justify-center p-10"
                                    data-service-story-panel="2">
                                    <div>
                                        <h2
                                            class="mt-6 max-w-xl font-light leading-[0.95] tracking-[-0.01em]">
                                            <span class="block font-medium text-8xl gradient-text">150+</span>
                                            <span class="text-black text-2xl">International Clients</span>
                                        </h2>
                                    </div>
                                </article>
                                <article class="service-story-panel absolute inset-0 flex flex-col justify-center p-10"
                                    data-service-story-panel="3">
                                    <div>
                                        <h2
                                            class="mt-6 max-w-xl font-light leading-[0.95] tracking-[-0.01em] text-black">
                                            <span class="block font-medium text-8xl gradient-text">8+</span>
                                            <span class="text-black text-2xl">Countries Served</span>
                                        </h2>
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
                                    <h2 class="mt-4 text-[1.7rem] sm:text-3xl font-light leading-[1.02] tracking-[-0.01em] text-black">
                                        <span class="text-[1.7rem] sm:text-3xl">13+</span> Years of Experience
                                    </h2>
                                    <p class="mt-5 text-base leading-7 text-black/60">Years of delivery across web,
                                        commerce, apps, and growth strategy give each project a steadier foundation from
                                        day one.</p>
                                </article>
                                <article
                                    class="w-full border-black/10 py-8 md:p-8 flex flex-col justify-center border-t border-b">
                                    <h2 class="mt-4 text-[1.6rem] sm:text-3xl font-light leading-[1.02] tracking-[-0.01em] text-black">
                                        <span class="text-[1.6rem] sm:text-3xl">850+</span> Success Stories
                                    </h2>
                                    <p class="mt-5 text-base leading-7 text-black/60">We build systems that launch with
                                        confidence and stay practical for real teams managing growth, content, and
                                        performance.</p>
                                </article>
                                <article class="w-full py-8 md:p-8 flex flex-col justify-center">
                                    <h2 class="mt-4 text-[1.6rem] sm:text-3xl font-light leading-[1.02] tracking-[-0.01em] text-black">
                                        <span class="text-[1.6rem] sm:text-3xl">600+</span> International Clients
                                    </h2>
                                    <p class="mt-5 text-base leading-7 text-black/60">Strategy, build, optimization, and
                                        marketing work together so growth does not stall after launch or handoff.</p>
                                </article>
                                <article
                                    class="w-full border-t border-black/10 py-8 md:p-8 flex flex-col justify-center">
                                    <h2 class="mt-4 text-[1.6rem] sm:text-3xl font-light leading-[1.02] tracking-[-0.01em] text-black">
                                        <span class="text-[1.6rem] sm:text-3xl">35+</span> Countries
                                    </h2>
                                    <p class="mt-5 text-base leading-7 text-black/60">We stay close to performance,
                                        iteration, and next-step planning so the service relationship keeps creating
                                        momentum.</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php include 'includes/footer.php'; ?>
    </div>
    <Script src="assets/js/script.js"></Script>
</body>
</html>