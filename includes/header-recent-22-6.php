<?php
$current_page = basename( $_SERVER[ 'PHP_SELF' ] );
?>

<header id = 'siteHeader' class = 'site-header px-5 py-4 sm:px-8 md:px-10 md:py-[0.45rem] header-theme-light'>
<style>
.js-nav-base-img,
.js-nav-hover-img {
    object-fit: cover !important;
    object-position: center center !important;
    width: 100% !important;
    height: 100% !important;
    min-width: 100% !important;
    min-height: 100% !important;
    position: absolute;
}
</style>
<div class = 'mx-auto flex w-full max-w-6xl items-center justify-between'>
<a href = 'index.php' class = 'flex items-center gap-2 text-xl font-medium tracking-tight sm:text-2xl'>
<span class = 'header-logo-text'>Wazeefa</span>
<span class = 'grid h-9 w-9 place-items-center'>
<svg viewBox = '0 0 113 124.4'>
<defs>
<style>
.logo-1 {
    fill: url( #linear-gradient );
    stroke-width: 0px;
}
</style>
<linearGradient id = 'linear-gradient' x1 = '3.51' y1 = '-107.99' x2 = '-21.16' y2 = '-23.61' gradientTransform = 'translate(63.17 -17.19) rotate(2.72) scale(1 -1)' gradientUnits = 'userSpaceOnUse'>
<stop offset = '0' stop-color = '#b85518' />
<stop offset = '.46' stop-color = '#e99511' />
<stop offset = '1' stop-color = '#e99511' />
</linearGradient>
</defs>
<path class = 'logo-1' d = 'm20.05,28.13c2.16-5.71,6.36-11.49,12.49-14.44,20.2-9.6,40.3,5.16,40.3,5.16l4.89-3.45C73.45,11.5,55.91-1.64,34.15.17,12.39,1.99,4.04,16.83.81,30.96c-6.17,35.51,25.15,61.92,25.15,61.92,0,0,6.97-11.13,10.24-16.14-19.45-21.51-19.29-36.99-16.15-48.6Zm66.05-4.82l-3.68,3.35s3.71,4.26,7.71,8.49c14.48,20.4,6.18,37.53,2.65,42.69-13.99,16.85-34.45,8.63-36.98,7.52l3.21-67.45-13.31-.63c-3.42,7.33-8.96,12.99-16.62,16.98l-.81,17.1c1.9-.28,4.12-1.05,6.66-2.32l6.3-3.36-2.18,45.88h.06c-.11,2.89-.21,6.02-.21,8.13,5.82,7.73,27.4,10.4,36.02,8.56,9.58-2.22,15.45-6.62,19.44-10.98,5.31-5.82,8.66-13.14,10.04-20.9,5.47-30.83-18.3-53.05-18.3-53.05Z' />
</svg>
</span>
</a>

<nav class = 'hidden items-center gap-10 text-[15px] lg:flex desktop-header'>
<a href = 'about-us.php' class = 'header-link header-link-muted transition hover:text-current hover:font-[450]'>About</a>

<!-- DEVELOPMENT DROP DOWN -->
<div class = 'group'>
<a class = 'header-link header-link-muted transition hover:text-current hover:font-[450] inline-flex items-center gap-1 py-4 cursor-pointer'>
<span>Development</span>
<svg class = 'h-3.5 w-3.5 transition-transform duration-300 group-hover:rotate-180 opacity-70' fill = 'none' viewBox = '0 0 24 24' stroke = 'currentColor' stroke-width = '2'>
<path stroke-linecap = 'round' stroke-linejoin = 'round' d = 'm19.5 8.25-7.5 7.5-7.5-7.5' />
</svg>
</a>

<div class = 'absolute left-0 top-full z-50 w-full opacity-0 invisible translate-y-3 transition-all duration-500 ease-out group-hover:visible group-hover:translate-y-0 group-hover:opacity-100'>
<div class = 'w-full bg-[#0a0a0a] text-white shadow-2xl border-t border-white/10 relative overflow-hidden'>
<div class = 'mx-auto flex w-full max-w-6xl items-stretch min-h-[280px]'>

<div class = 'w-[35%] pt-8 pb-8 pr-10 flex flex-col z-10 transition-all duration-[800ms] ease-[cubic-bezier(0.16,1,0.3,1)] opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 delay-[50ms]'>
<h3 class = 'text-[1.8rem] font-light leading-tight mb-3 tracking-tight'>
Building Digital Solutions That Drive Growth
</h3>
<p class = 'text-gray-400 text-[0.9rem] leading-relaxed'>
From websites and mobile apps to custom software, we create scalable digital solutions that help businesses streamline operations, engage customers, and accelerate growth.
</p>
<a href = 'services.php' class = 'job-view-link inline-flex items-center md:justify-center gap-2 border border-white/20 bg-transparent hover:bg-white md:px-4 md:py-3 text-sm font-medium text-white hover:text-black transition w-fit px-4 py-3 mt-4'>
<span>View All Services</span>
<svg viewBox = '0 0 24.02 15.27' class = 'h-4 w-4' fill = 'none' stroke = 'currentColor' stroke-width = '1.8'>
<path d = 'M0,12H21.75' transform = 'translate(0 -4.36)' />
<path d = 'M15.75,5l7,7-7,7' transform = 'translate(0 -4.36)' />
</svg>
</a>
</div>

<div class = 'w-[35%] flex flex-col pt-4 pb-4 pl-4 pr-6 border-l border-white/10 relative z-10'>
<a href = 'web-development.php' data-hover-img = 'assets/images/header-web.jpg' <?php if ( $current_page == 'web-development.php' ) echo 'data-active="true"';
?> class = 'flex items-center gap-4 transition group/link w-full transition-all duration-[800ms] ease-[cubic-bezier(0.16,1,0.3,1)] opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 delay-[100ms]'>
<div class = "w-12 flex justify-center shrink-0 transition-all duration-300 <?php echo ($current_page == 'web-development.php') ? 'text-white' : 'text-gray-500 group-hover/link:text-white group-hover/link:scale-110 group-hover/link:-translate-y-0.5'; ?>">
<svg width = '20' height = '20' x = '0' y = '0' viewBox = '0 0 682.667 682.667'><g><defs><clipPath id = 'b' clipPathUnits = 'userSpaceOnUse'><path d = 'M0 512h512V0H0Z' fill = 'currentColor' opacity = '1' data-original = 'currentColor'></path></clipPath></defs><mask id = 'a'><rect width = '100%' height = '100%' fill = 'currentColor' opacity = '1' data-original = 'currentColor'></rect></mask><g mask = 'url(#a)'><g clip-path = 'url(#b)' transform = 'matrix(1.33333 0 0 -1.33333 0 682.667)'><path d = 'M0 0v0c-43.447 0-78.667 35.221-78.667 78.667v21.078c0 56.21-29.987 108.151-78.666 136.255 48.679 28.104 78.666 80.045 78.666 136.255v21.078C-78.667 436.779-43.447 472 0 472' style = 'stroke-width:40;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1' transform = 'translate(177.333 20)' fill = 'none' stroke = 'currentColor' stroke-width = '40' stroke-linecap = 'round' stroke-linejoin = 'round' stroke-miterlimit = '10' stroke-dasharray = 'none' stroke-opacity = '' data-original = 'currentColor' class = ''></path><path d = 'M0 0v0c43.446 0 78.666-35.221 78.666-78.667v-21.078c0-56.21 29.988-108.151 78.667-136.255-48.679-28.104-78.667-80.045-78.667-136.255v-21.078C78.666-436.779 43.446-472 0-472' style = 'stroke-width:40;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1' transform = 'translate(334.667 492)' fill = 'none' stroke = 'currentColor' stroke-width = '40' stroke-linecap = 'round' stroke-linejoin = 'round' stroke-miterlimit = '10' stroke-dasharray = 'none' stroke-opacity = '' data-original = 'currentColor' class = ''></path></g></g></g></svg>
</div>
<div class = 'flex-1 py-5 relative'>
<div class = 'absolute bottom-0 left-0 w-full h-[1px] bg-white/10'></div>
<div class = "absolute bottom-0 left-0 h-[1px] transition-all duration-500 ease-out <?php echo ($current_page == 'web-development.php') ? 'w-full bg-white' : 'w-0 bg-white group-hover/link:w-full'; ?>"></div>
<span class = "text-[0.92rem] sm:text-[0.95rem] font-normal transition <?php echo ($current_page == 'web-development.php') ? 'text-white' : 'text-gray-300 group-hover/link:text-white'; ?>">Web Development</span>
</div>
</a>

<a href = 'software-development.php' data-hover-img = 'assets/images/software-development.jpg' <?php if ( $current_page == 'software-development.php' ) echo 'data-active="true"';
?> class = 'flex items-center gap-4 transition group/link w-full transition-all duration-[800ms] ease-[cubic-bezier(0.16,1,0.3,1)] opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 delay-[150ms]'>
<div class = "w-12 flex justify-center shrink-0 transition-all duration-300 <?php echo ($current_page == 'software-development.php') ? 'text-white' : 'text-gray-500 group-hover/link:text-white group-hover/link:scale-110 group-hover/link:-translate-y-0.5'; ?>">
<svg width = '22' height = '22' x = '0' y = '0' viewBox = '0 0 682.667 682.667'><g><defs><clipPath id = 'a' clipPathUnits = 'userSpaceOnUse'><path d = 'M0 512h512V0H0Z' fill = 'currentColor' opacity = '1' data-original = 'currentColor'></path></clipPath></defs><g clip-path = 'url(#a)' transform = 'matrix(1.33333 0 0 -1.33333 0 682.667)'><path d = 'M0 0c.016.789.03 1.578.03 2.371 0 66.724-54.09 120.814-120.813 120.814-47.529 0-88.639-27.449-108.363-67.355-12.561 10.48-28.72 16.792-46.358 16.792-39.655 0-71.848-31.88-72.389-71.406-39.764-6.636-70.076-41.198-70.076-82.846v-.001c0-46.392 37.61-84.001 84.002-84.001h314.094c46.393 0 84.001 37.609 84.001 84.001v.001C64.128-42.085 36.8-8.928 0 0Z' style = 'stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1' transform = 'translate(432.872 277.224)' fill = 'none' stroke = 'currentColor' stroke-width = '30' stroke-linecap = 'round' stroke-linejoin = 'round' stroke-miterlimit = '10' stroke-dasharray = 'none' stroke-opacity = '' data-original = 'currentColor' class = ''></path></g></g></svg>
</div>
<div class = 'flex-1 py-5 relative'>
<div class = 'absolute bottom-0 left-0 w-full h-[1px] bg-white/10'></div>
<div class = "absolute bottom-0 left-0 h-[1px] transition-all duration-500 ease-out <?php echo ($current_page == 'software-development.php') ? 'w-full bg-white' : 'w-0 bg-white group-hover/link:w-full'; ?>"></div>
<span class = "text-[0.92rem] sm:text-[0.95rem] font-normal transition <?php echo ($current_page == 'software-development.php') ? 'text-white' : 'text-gray-300 group-hover/link:text-white'; ?>">Software Development</span>
</div>
</a>

<a href = 'mobile-application-development.php' data-hover-img = 'assets/images/app-development.jpg' <?php if ( $current_page == 'mobile-application-development.php' ) echo 'data-active="true"';
?> class = 'flex items-center gap-4 transition group/link w-full transition-all duration-[800ms] ease-[cubic-bezier(0.16,1,0.3,1)] opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 delay-[200ms]'>
<div class = "w-12 flex justify-center shrink-0 transition-all duration-300 <?php echo ($current_page == 'mobile-application-development.php') ? 'text-white' : 'text-gray-500 group-hover/link:text-white group-hover/link:scale-110 group-hover/link:-translate-y-0.5'; ?>">
<svg width = '22' height = '22' x = '0' y = '0' viewBox = '0 0 512 512'><g><path d = 'M302.933 42.667h-51.2c-7.074 0-12.8 5.726-12.8 12.8s5.726 12.8 12.8 12.8h51.2c7.074 0 12.8-5.726 12.8-12.8s-5.726-12.8-12.8-12.8z' fill = 'currentColor' opacity = '1' data-original = 'currentColor' class = ''></path><path d = 'M358.4 0H153.6c-28.228 0-51.2 22.972-51.2 51.2v409.6c0 28.228 22.972 51.2 51.2 51.2h204.8c28.228 0 51.2-22.972 51.2-51.2V51.2c0-28.228-22.972-51.2-51.2-51.2zM384 460.8c0 14.14-11.46 25.6-25.6 25.6H153.6c-14.14 0-25.6-11.46-25.6-25.6V51.2c0-14.14 11.46-25.6 25.6-25.6h204.8c14.14 0 25.6 11.46 25.6 25.6v409.6z' fill = 'currentColor' opacity = '1' data-original = 'currentColor' class = ''></path><circle cx = '256' cy = '443.733' r = '25.6' fill = 'currentColor' opacity = '1' data-original = 'currentColor' class = ''></circle><circle cx = '209.067' cy = '55.467' r = '12.8' fill = 'currentColor' opacity = '1' data-original = 'currentColor' class = ''></circle></g></svg>
</div>
<div class = 'flex-1 py-5 relative'>
<div class = 'absolute bottom-0 left-0 w-full h-[1px] bg-white/10'></div>
<div class = "absolute bottom-0 left-0 h-[1px] transition-all duration-500 ease-out <?php echo ($current_page == 'mobile-application-development.php') ? 'w-full bg-white' : 'w-0 bg-white group-hover/link:w-full'; ?>"></div>
<span class = "text-[0.92rem] sm:text-[0.95rem] font-normal transition <?php echo ($current_page == 'mobile-application-development.php') ? 'text-white' : 'text-gray-300 group-hover/link:text-white'; ?>">Mobile App Development</span>
</div>
</a>
</div>

<!-- Bound to exactly w-[ 30% ] right side panel -->
<div class = 'w-[30%] relative z-0'>
<div class = 'absolute inset-0 w-[450px] overflow-hidden'>
<img src = "<?php 
                        if ($current_page == 'software-development.php') echo 'assets/images/software-development.jpg';
                        elseif ($current_page == 'mobile-application-development.php') echo 'assets/images/app-development.jpg';
                        else echo 'assets/images/header-web.jpg';
                       ?>" alt = 'Development' class = 'js-nav-base-img absolute inset-0 h-full w-full min-h-full min-w-full object-cover object-center transition-opacity duration-500 ease-out'>
<img src = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7' alt = '' class = 'js-nav-hover-img absolute inset-0 h-full w-full min-h-full min-w-full object-cover object-center opacity-0 transition-opacity duration-500 ease-out pointer-events-none'>
</div>
</div>

</div>
</div>
</div>
</div>

<!-- E-COMMERCE & CMS DROP DOWN -->
<div class = 'group'>
<a class = 'header-link header-link-muted transition hover:text-current hover:font-[450] inline-flex items-center gap-1 py-4 cursor-pointer'>
<span>E-Commerce & CMS</span>
<svg class = 'h-3.5 w-3.5 transition-transform duration-300 group-hover:rotate-180 opacity-70' fill = 'none' viewBox = '0 0 24 24' stroke = 'currentColor' stroke-width = '2'>
<path stroke-linecap = 'round' stroke-linejoin = 'round' d = 'm19.5 8.25-7.5 7.5-7.5-7.5' />
</svg>
</a>

<div class = 'absolute left-0 top-full z-50 w-full opacity-0 invisible translate-y-3 transition-all duration-500 ease-out group-hover:visible group-hover:translate-y-0 group-hover:opacity-100'>
<div class = 'w-full bg-[#0a0a0a] text-white shadow-2xl border-t border-white/10 relative overflow-hidden'>
<div class = 'mx-auto flex w-full max-w-6xl items-stretch min-h-[280px]'>

<div class = 'w-[35%] pt-8 pb-8 pr-10 flex flex-col relative z-10 transition-all duration-[800ms] ease-[cubic-bezier(0.16,1,0.3,1)] opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 delay-[50ms]'>
<h3 class = 'text-[1.8rem] font-light leading-tight mb-3 tracking-tight'>
Creating Ecommerce Experiences That Convert
</h3>
<p class = 'text-gray-400 text-[0.9rem] leading-relaxed'>
We build ecommerce platforms and CMS solutions that simplify management, enhance customer experiences, and support long-term business growth.
</p>
<a href = 'services.php' class = 'job-view-link inline-flex items-center md:justify-center gap-2 border border-white/20 bg-transparent hover:bg-white md:px-4 md:py-3 text-sm font-medium text-white hover:text-black transition w-fit px-4 py-3 mt-4'>
<span>View All Services</span>
<svg viewBox = '0 0 24.02 15.27' class = 'h-4 w-4' fill = 'none' stroke = 'currentColor' stroke-width = '1.8'>
<path d = 'M0,12H21.75' transform = 'translate(0 -4.36)' />
<path d = 'M15.75,5l7,7-7,7' transform = 'translate(0 -4.36)' />
</svg>
</a>
</div>

<div class = 'w-[35%] flex flex-col pt-4 pb-4 pl-4 pr-6 border-l border-white/10 relative z-10'>
<a href = 'ecommerce-website-development.php' data-hover-img = 'https://images.unsplash.com/photo-1773332585754-f1436987743b?q=80&w=870&auto=format&fit=crop' <?php if ( $current_page == 'ecommerce-website-development.php' ) echo 'data-active="true"';
?> class = 'flex items-center gap-4 transition group/link w-full transition-all duration-[800ms] ease-[cubic-bezier(0.16,1,0.3,1)] opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 delay-[100ms]'>
<div class = "w-12 flex justify-center shrink-0 transition-all duration-300 <?php echo ($current_page == 'ecommerce-website-development.php') ? 'text-white' : 'text-gray-500 group-hover/link:text-white group-hover/link:scale-110 group-hover/link:-translate-y-0.5'; ?>">
<svg width = '22' height = '22' x = '0' y = '0' viewBox = '0 0 32 32'><g><path d = 'M10 28c0 1.654 1.346 3 3 3s3-1.346 3-3-1.346-3-3-3-3 1.346-3 3zm3-1c.551 0 1 .449 1 1s-.449 1-1 1-1-.449-1-1 .449-1 1-1zM23 28c0 1.654 1.346 3 3 3s3-1.346 3-3-1.346-3-3-3-3 1.346-3 3zm3-1c.551 0 1 .449 1 1s-.449 1-1 1-1-.449-1-1 .449-1 1-1zM30 23H11c-.551 0-1-.449-1-1v-1h15c1.56 0 3.077-1.185 3.455-2.698l2.515-10.06A1 1 0 0 0 30 7H7.136L6.41 3.735C6.069 2.201 4.791 1 3.5 1H2a1 1 0 0 0 0 2h1.5c.246 0 .797.444.958 1.169l.881 3.966c.008.057.02.111.037.165L8 20.109V22c0 1.654 1.346 3 3 3h19a1 1 0 0 0 0-2zM28.719 9l-2.205 8.817C26.36 18.436 25.638 19 25 19H9.802L7.58 9z' fill = 'currentColor' opacity = '1' data-original = 'currentColor' class = ''></path></g></svg>
</div>
<div class = 'flex-1 py-5 relative'>
<div class = 'absolute bottom-0 left-0 w-full h-[1px] bg-white/10'></div>
<div class = "absolute bottom-0 left-0 h-[1px] transition-all duration-500 ease-out <?php echo ($current_page == 'ecommerce-website-development.php') ? 'w-full bg-white' : 'w-0 bg-white group-hover/link:w-full'; ?>"></div>
<span class = "text-[0.92rem] sm:text-[0.95rem] font-normal transition <?php echo ($current_page == 'ecommerce-website-development.php') ? 'text-white' : 'text-gray-300 group-hover/link:text-white'; ?>">Ecommerce Development</span>
</div>
</a>

<a href = 'cms-development.php' data-hover-img = 'https://images.unsplash.com/photo-1618477388954-7852f32655ec?q=80&w=870&auto=format&fit=crop' <?php if ( $current_page == 'cms-development.php' ) echo 'data-active="true"';
?> class = 'flex items-center gap-4 transition group/link w-full transition-all duration-[800ms] ease-[cubic-bezier(0.16,1,0.3,1)] opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 delay-[150ms]'>
<div class = "w-12 flex justify-center shrink-0 transition-all duration-300 <?php echo ($current_page == 'cms-development.php') ? 'text-white' : 'text-gray-500 group-hover/link:text-white group-hover/link:scale-110 group-hover/link:-translate-y-0.5'; ?>">
<svg width = '22' height = '22' x = '0' y = '0' viewBox = '0 0 24 24' ><g><path d = 'M22.75 11V4c0-.729-.29-1.429-.805-1.945A2.755 2.755 0 0 0 20 1.25H4c-.729 0-1.429.29-1.945.805A2.755 2.755 0 0 0 1.25 4v16c0 .729.29 1.429.805 1.945A2.755 2.755 0 0 0 4 22.75h7a.75.75 0 0 0 0-1.5H4A1.252 1.252 0 0 1 2.75 20V4A1.252 1.252 0 0 1 4 2.75h16A1.252 1.252 0 0 1 21.25 4v7a.75.75 0 0 0 1.5 0z' fill = 'currentColor' opacity = '1' data-original = 'currentColor' class = ''></path><path d = 'M2 7.75h20a.75.75 0 0 0 0-1.5H2a.75.75 0 0 0 0 1.5zM4.5 5.25h1a.75.75 0 0 0 0-1.5h-1a.75.75 0 0 0 0 1.5zM8 5.25h1a.75.75 0 0 0 0-1.5H8a.75.75 0 0 0 0 1.5zM11.5 5.25h1a.75.75 0 0 0 0-1.5h-1a.75.75 0 0 0 0 1.5zM17 13.25c-2.07 0-3.75 1.68-3.75 3.75s1.68 3.75 3.75 3.75 3.75-1.68 3.75-3.75-1.68-3.75-3.75-3.75zm0 1.5a2.25 2.25 0 1 1-.002 4.502A2.25 2.25 0 0 1 17 14.75z' fill = 'currentColor' opacity = '1' data-original = 'currentColor' class = ''></path><path d = 'M20 17.75h2a.75.75 0 0 0 0-1.5h-2a.75.75 0 0 0 0 1.5zM19.652 15.409l1.414-1.414a.75.75 0 1 0-1.061-1.061l-1.414 1.414a.75.75 0 1 0 1.061 1.061zM17.75 14v-2a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0zM15.409 14.348l-1.414-1.414a.75.75 0 1 0-1.061 1.061l1.414 1.414a.75.75 0 1 0 1.061-1.061zM14 16.25h-2a.75.75 0 0 0 0 1.5h2a.75.75 0 0 0 0-1.5zM14.348 18.591l-1.414 1.414a.75.75 0 1 0 1.061 1.061l1.414-1.414a.75.75 0 1 0-1.061-1.061zM16.25 20v2a.75.75 0 0 0 1.5 0v-2a.75.75 0 0 0-1.5 0zM18.591 19.652l1.414 1.414a.75.75 0 1 0 1.061-1.061l-1.414-1.414a.75.75 0 1 0-1.061 1.061z' fill = 'currentColor' opacity = '1' data-original = 'currentColor' class = ''></path></g></svg>
</div>
<div class = 'flex-1 py-5 relative'>
<div class = 'absolute bottom-0 left-0 w-full h-[1px] bg-white/10'></div>
<div class = "absolute bottom-0 left-0 h-[1px] transition-all duration-500 ease-out <?php echo ($current_page == 'cms-development.php') ? 'w-full bg-white' : 'w-0 bg-white group-hover/link:w-full'; ?>"></div>
<span class = "text-[0.92rem] sm:text-[0.95rem] font-normal transition <?php echo ($current_page == 'cms-development.php') ? 'text-white' : 'text-gray-300 group-hover/link:text-white'; ?>">CMS Development</span>
</div>
</a>
</div>

<!-- Moved to the right panel & bound to exactly w-[ 30% ] to match other layout columns -->
<div class = 'w-[30%] relative z-0'>
<div class = 'absolute inset-0 w-[450px] overflow-hidden'>
<img src = "<?php 
                        if ($current_page == 'cms-development.php') echo 'https://images.unsplash.com/photo-1618477388954-7852f32655ec?q=80&w=870&auto=format&fit=crop';
                        else echo 'https://images.unsplash.com/photo-1773332585754-f1436987743b?q=80&w=870&auto=format&fit=crop';
                       ?>" alt = 'E-Commerce & CMS' class = 'js-nav-base-img absolute inset-0 h-full w-full min-h-full min-w-full object-cover object-center transition-opacity duration-500 ease-out'>
<img src = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7' alt = '' class = 'js-nav-hover-img absolute inset-0 h-full w-full min-h-full min-w-full object-cover object-center opacity-0 transition-opacity duration-500 ease-out pointer-events-none'>
</div>
</div>

</div>
</div>
</div>
</div>

<!-- BUSINESS GROWTH DROP DOWN -->
<div class = 'group'>
<a class = 'header-link header-link-muted transition hover:text-current hover:font-[450] inline-flex items-center gap-1 py-4 cursor-pointer'>
<span>Business Growth</span>
<svg class = 'h-3.5 w-3.5 transition-transform duration-300 group-hover:rotate-180 opacity-70' fill = 'none' viewBox = '0 0 24 24' stroke = 'currentColor' stroke-width = '2'>
<path stroke-linecap = 'round' stroke-linejoin = 'round' d = 'm19.5 8.25-7.5 7.5-7.5-7.5' />
</svg>
</a>

<div class = 'absolute left-0 top-full z-50 w-full opacity-0 invisible translate-y-3 transition-all duration-500 ease-out group-hover:visible group-hover:translate-y-0 group-hover:opacity-100'>
<div class = 'w-full bg-[#0a0a0a] text-white shadow-2xl border-t border-white/10 relative overflow-hidden'>
<div class = 'mx-auto flex w-full max-w-6xl items-stretch min-h-[280px]'>

<div class = 'w-[35%] pt-8 pb-8 pr-10 flex flex-col relative z-10 transition-all duration-[800ms] ease-[cubic-bezier(0.16,1,0.3,1)] opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 delay-[50ms]'>
<h3 class = 'text-[1.8rem] font-light leading-tight mb-3 tracking-tight'>
Growing Brands Through Digital Strategy
</h3>
<p class = 'text-gray-400 text-[0.9rem] leading-relaxed'>
From digital marketing to branding, we help businesses increase visibility, strengthen market presence, and drive measurable growth.
</p>
<a href = 'services.php' class = 'job-view-link inline-flex items-center md:justify-center gap-2 border border-white/20 bg-transparent hover:bg-white md:px-4 md:py-3 text-sm font-medium text-white hover:text-black transition w-fit px-4 py-3 mt-4'>
<span>View All Services</span>
<svg viewBox = '0 0 24.02 15.27' class = 'h-4 w-4' fill = 'none' stroke = 'currentColor' stroke-width = '1.8'>
<path d = 'M0,12H21.75' transform = 'translate(0 -4.36)' />
<path d = 'M15.75,5l7,7-7,7' transform = 'translate(0 -4.36)' />
</svg>
</a>
</div>

<div class = 'w-[35%] flex flex-col pt-4 pb-4 pl-4 pr-6 border-l border-white/10 relative z-10'>
<a href = 'digital-marketing.php' data-hover-img = 'assets/images/digital-marketing.jpg' <?php if ( $current_page == 'digital-marketing.php' ) echo 'data-active="true"';
?> class = 'flex items-center gap-4 transition group/link w-full transition-all duration-[800ms] ease-[cubic-bezier(0.16,1,0.3,1)] opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 delay-[100ms]'>
<div class = "w-12 flex justify-center shrink-0 transition-all duration-300 <?php echo ($current_page == 'digital-marketing.php') ? 'text-white' : 'text-gray-500 group-hover/link:text-white group-hover/link:scale-110 group-hover/link:-translate-y-0.5'; ?>">
<svg width = '25' height = '25' x = '0' y = '0' viewBox = '0 0 32 32' style = 'enable-background:new 0 0 512 512' xml:space = 'preserve'><g><path d = 'M30.97 7.75a.991.991 0 0 0-.77-.73l-3.17-.63.68-.68A.996.996 0 1 0 26.3 4.3l-.68.68-.64-3.18a.993.993 0 0 0-1.74-.44l-5 6c-.2.25-.28.57-.2.88l.78 3.14A11.007 11.007 0 0 0 12 9C5.93 9 1 13.93 1 20s4.93 11 11 11 11-4.93 11-11c0-2.57-.9-4.94-2.38-6.81l3.14.78a1.005 1.005 0 0 0 .88-.2l6-5c.3-.25.42-.64.33-1.02zm-7.54-3.5.48 2.42-3.37 3.37-.45-1.79zM12 29c-4.96 0-9-4.04-9-9s4.04-9 9-9c2.12 0 4.07.74 5.61 1.98l-2.14 2.14C14.49 14.42 13.29 14 12 14c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6c0-1.29-.42-2.49-1.11-3.47l2.14-2.14A8.963 8.963 0 0 1 21 20c0 4.96-4.04 9-9 9zm4-9c0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4c.74 0 1.42.22 2.02.57l-1.51 1.51c-.16-.05-.33-.08-.51-.08-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2c0-.18-.03-.35-.07-.51l1.51-1.51c.34.6.56 1.28.56 2.02zm7.75-8.09-1.79-.45 3.37-3.37 2.42.48z' fill = 'currentColor' opacity = '1' data-original = 'currentColor'></path></g></svg>
</div>
<div class = 'flex-1 py-5 relative'>
<div class = 'absolute bottom-0 left-0 w-full h-[1px] bg-white/10'></div>
<div class = "absolute bottom-0 left-0 h-[1px] transition-all duration-500 ease-out <?php echo ($current_page == 'digital-marketing.php') ? 'w-full bg-white' : 'w-0 bg-white group-hover/link:w-full'; ?>"></div>
<span class = "text-[0.92rem] sm:text-[0.95rem] font-normal transition <?php echo ($current_page == 'digital-marketing.php') ? 'text-white' : 'text-gray-300 group-hover/link:text-white'; ?>">Digital Marketing</span>
</div>
</a>

<a href = 'branding.php' data-hover-img = 'assets/images/branding.jpg' <?php if ( $current_page == 'branding.php' ) echo 'data-active="true"';
?> class = 'flex items-center gap-4 transition group/link w-full transition-all duration-[800ms] ease-[cubic-bezier(0.16,1,0.3,1)] opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 delay-[150ms]'>
<div class = "w-12 flex justify-center shrink-0 transition-all duration-300 <?php echo ($current_page == 'branding.php') ? 'text-white' : 'text-gray-500 group-hover/link:text-white group-hover/link:scale-110 group-hover/link:-translate-y-0.5'; ?>">
<svg width = '25' height = '25' x = '0' y = '0' viewBox = '0 0 32 32' style = 'enable-background:new 0 0 512 512' xml:space = 'preserve'><g><path d = 'M25.5 10.5a9.5 9.5 0 1 0-15 7.74V21H9v2h3.5v3a3 3 0 0 0 1.13 2.34L15 29.48V31h2v-1.52l1.37-1.1A3 3 0 0 0 19.5 26v-3H23v-2h-1.5v-2.76a9.47 9.47 0 0 0 4-7.74zm-8 15.5a1 1 0 0 1-.38.78l-1.12.9-1.12-.9a1 1 0 0 1-.38-.78v-3h3zm-5-5v-3.3a1 1 0 0 0-.47-.85 7.5 7.5 0 1 1 7.94 0 1 1 0 0 0-.47.85V21z' fill = 'currentColor' opacity = '1' data-original = 'currentColor' class = ''></path><path d = 'm18.46 7.84-3.29 3.46-1.63-1.72L12.09 11l2.36 2.49a1 1 0 0 0 1.45 0l4-4.23zM27 10h4v2h-4zM25.633 6.125l3.464-2 1 1.732-3.464 2zM25.639 15.87l1-1.731 3.464 2-1 1.732zM1 10h4v2H1zM1.899 5.87l1-1.733 3.464 2-1 1.732zM1.895 16.135l3.464-2 1 1.732-3.464 2z' fill = 'currentColor' opacity = '1' data-original = 'currentColor' class = ''></path></g></svg>
</div>
<div class = 'flex-1 py-5 relative'>
<div class = 'absolute bottom-0 left-0 w-full h-[1px] bg-white/10'></div>
<div class = "absolute bottom-0 left-0 h-[1px] transition-all duration-500 ease-out <?php echo ($current_page == 'branding.php') ? 'w-full bg-white' : 'w-0 bg-white group-hover/link:w-full'; ?>"></div>
<span class = "text-[0.92rem] sm:text-[0.95rem] font-normal transition <?php echo ($current_page == 'branding.php') ? 'text-white' : 'text-gray-300 group-hover/link:text-white'; ?>">Branding</span>
</div>
</a>
</div>

<!-- Bound to exactly w-[ 30% ] right side panel -->
<div class = 'w-[30%] relative z-0'>
<div class = 'absolute inset-0 w-[450px] overflow-hidden'>
<img src = "<?php 
                        if ($current_page == 'branding.php') echo 'assets/images/branding.jpg';
                        else echo 'assets/images/digital-marketing.jpg';
                       ?>" alt = 'Business Growth' class = 'js-nav-base-img absolute top-0 left-0 h-full w-full object-cover transition-opacity duration-500 ease-out'>
<img src = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7' alt = '' class = 'js-nav-hover-img absolute top-0 left-0 h-full w-full object-cover opacity-0 transition-opacity duration-500 ease-out pointer-events-none'>
</div>
</div>

</div>
</div>
</div>
</div>

<a href = 'career.php' class = 'header-link header-link-muted transition hover:text-current hover:font-[450]'>Careers</a>
<a href = 'contact-us.php' class = 'header-link header-link-muted transition hover:text-current hover:font-[450]'>Contact</a>
</nav>

<div class = 'hidden items-center gap-5 sm:gap-4 lg:flex desktop-header'>
<a href = 'tel:919188339903' aria-label = 'Call us' class = 'header-icon-glass inline-flex items-center justify-center'>
<svg class = '' style = 'display:inline-block;vertical-align:middle' width = '18' height = '18' fill = 'currentColor' viewBox = '0 0 1004 1024' xmlns = 'http://www.w3.org/2000/svg'>
<path d = 'M169.592 91.056c33.181 0.769 63.036 14.398 84.898 36.076l-0.009-0.008 97.317 97.317c24.222 21.501 39.41 52.717 39.41 87.481 0 1.438-0.026 2.87-0.078 4.296l0.006-0.206c-2.903 31.857-18.963 59.471-42.63 77.69l-0.259 0.192-1.588 1.215c-15.963 8.928-26.577 25.726-26.577 45.004 0 4.29 0.526 8.458 1.516 12.441l-0.074-0.354 0.748 2.57c1.822 7.335 13.409 36.395 85.73 103.531 40.427 37.149 84.049 73.139 129.538 106.748l4.313 3.043c6.417 4.36 14.335 6.961 22.861 6.961 0.027 0 0.055-0 0.082-0l-0.004 0c19.28-1.512 36.381-9.79 49.156-22.432l-0.007 0.007 19.482-19.482c14.211-14.425 33.958-23.362 55.793-23.362 0.227 0 0.453 0.001 0.679 0.003l-0.035-0c35.789 2.747 67.406 18.673 90.392 42.875l0.057 0.060 97.083 97.457c22.126 20.895 35.9 50.431 35.9 83.184s-13.774 62.29-35.845 83.133l-0.055 0.052-58.399 58.399c-26.076 27.807-62.038 46.071-102.249 49.163l-0.534 0.033h-2.616l-2.616-0.374c-530.034-80.498-696.823-502.095-710.932-713.829v-2.336c-0.068-1.99-0.107-4.329-0.107-6.676 0-51.489 18.625-98.628 49.506-135.046l-0.25 0.303 38.917-38.917c20.475-21.833 49.311-35.613 81.371-36.206l0.108-0.002zM306.434 337.642c7.943-6.378 13.374-15.601 14.742-26.101l0.021-0.202c-0.735-15.121-7.935-28.425-18.873-37.301l-0.095-0.075-97.317-97.27c-9.166-8.984-21.504-14.763-35.181-15.505l-0.139-0.006c-12.772 0.627-24.064 6.483-31.863 15.456l-0.047 0.055-38.917 38.917c-17.959 23.533-28.775 53.357-28.775 85.707 0 1.766 0.032 3.525 0.096 5.276l-0.007-0.253c13.362 192.204 165.668 572.502 648.047 647.3 20.419-4.187 38.001-14.325 51.346-28.497l0.046-0.049 58.353-58.119c9.343-8.243 15.206-20.244 15.206-33.615s-5.863-25.371-15.158-33.573l-0.049-0.042-97.317-97.317c-10.592-11.333-24.618-19.337-40.414-22.351l-0.466-0.074c-0.14-0.008-0.304-0.013-0.47-0.013-2.572 0-4.876 1.142-6.436 2.945l-0.009 0.011-19.482 19.482c-25.37 25.409-60.011 41.555-98.415 42.928l-0.256 0.007c-0.051 0-0.111 0-0.172 0-23.204 0-44.74-7.144-62.528-19.352l0.376 0.244-1.168-0.794c-37.376-27.097-223.553-166.088-246.633-252.286-2.883-9.86-4.541-21.188-4.541-32.903 0-42.981 22.323-80.748 56.008-102.34l0.485-0.291z'></path>
<path d = 'M848.708 502.189h-70.079c-0.159-152.593-123.804-276.254-276.375-276.44l-0.018-0v-70.079c191.272 0.239 346.26 155.244 346.472 346.499l0 0.020z'></path>
<path d = 'M1004.471 502.236h-70.079c-0.266-238.566-193.59-431.89-432.13-432.156l-0.026-0v-70.079c277.377-0 502.236 224.859 502.236 502.236v0z'></path>
</svg>
</a>
<a href = 'https://wa.me/919188339903?text=Hello' aria-label = 'WhatsApp' class = 'header-icon-glass inline-flex items-center justify-center transition'>
<svg viewBox = '0 0 24 24' fill = 'currentColor' class = 'h-5 w-5' aria-hidden = 'true'>
<path d = 'M19.05 4.91A9.82 9.82 0 0 0 12.03 2C6.6 2 2.18 6.42 2.18 11.85c0 1.74.46 3.45 1.32 4.95L2 22l5.36-1.41a9.84 9.84 0 0 0 4.67 1.19h.01c5.43 0 9.85-4.42 9.85-9.85a9.8 9.8 0 0 0-2.84-7.02Zm-7.02 15.2h-.01a8.14 8.14 0 0 1-4.14-1.13l-.3-.18-3.18.84.85-3.1-.2-.32a8.16 8.16 0 0 1-1.25-4.37c0-4.52 3.68-8.2 8.21-8.2 2.19 0 4.25.85 5.8 2.41a8.15 8.15 0 0 1 2.39 5.8c0 4.52-3.68 8.2-8.17 8.2Zm4.5-6.15c-.25-.13-1.47-.72-1.7-.8-.23-.09-.39-.13-.56.12-.17.25-.64.8-.79.97-.15.17-.29.19-.54.06-.25-.13-1.05-.39-2.01-1.24-.74-.66-1.24-1.48-1.38-1.73-.14-.25-.02-.38.11-.5.11-.11.25-.29.38-.43.13-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.76-1.84-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.66.31-.23.25-.87.85-.87 2.06 0 1.21.89 2.38 1.01 2.55.13.17 1.75 2.67 4.24 3.74.59.25 1.06.4 1.42.51.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.1-.23-.16-.48-.29Z' />
</svg>
</a>
<button id = 'desktopMenuButton' aria-label = 'Open menu' class = 'group flex h-10 w-10 items-center justify-center'>
<span class = 'space-y-1.5'>
<span class = 'header-icon-line block h-[1.5px] w-6 bg-white/60 transition group-hover:opacity-100'></span>
<span class = 'header-icon-line block h-[1.5px] w-6 bg-white/60 transition group-hover:opacity-100'></span>
</span>
</button>
</div>

<div class = 'flex items-center gap-6 lg:hidden mobile-header'>
<a href = 'tel:919188339903' aria-label = 'Call us' class = 'header-icon-glass inline-flex items-center justify-center'>
<svg class = '' style = 'display:inline-block;vertical-align:middle' width = '18' height = '18' fill = 'currentColor' viewBox = '0 0 1004 1024' xmlns = 'http://www.w3.org/2000/svg'>
<path d = 'M169.592 91.056c33.181 0.769 63.036 14.398 84.898 36.076l-0.009-0.008 97.317 97.317c24.222 21.501 39.41 52.717 39.41 87.481 0 1.438-0.026 2.87-0.078 4.296l0.006-0.206c-2.903 31.857-18.963 59.471-42.63 77.69l-0.259 0.192-1.588 1.215c-15.963 8.928-26.577 25.726-26.577 45.004 0 4.29 0.526 8.458 1.516 12.441l-0.074-0.354 0.748 2.57c1.822 7.335 13.409 36.395 85.73 103.531 40.427 37.149 84.049 73.139 129.538 106.748l4.313 3.043c6.417 4.36 14.335 6.961 22.861 6.961 0.027 0 0.055-0 0.082-0l-0.004 0c19.28-1.512 36.381-9.79 49.156-22.432l-0.007 0.007 19.482-19.482c14.211-14.425 33.958-23.362 55.793-23.362 0.227 0 0.453 0.001 0.679 0.003l-0.035-0c35.789 2.747 67.406 18.673 90.392 42.875l0.057 0.060 97.083 97.457c22.126 20.895 35.9 50.431 35.9 83.184s-13.774 62.29-35.845 83.133l-0.055 0.052-58.399 58.399c-26.076 27.807-62.038 46.071-102.249 49.163l-0.534 0.033h-2.616l-2.616-0.374c-530.034-80.498-696.823-502.095-710.932-713.829v-2.336c-0.068-1.99-0.107-4.329-0.107-6.676 0-51.489 18.625-98.628 49.506-135.046l-0.25 0.303 38.917-38.917c20.475-21.833 49.311-35.613 81.371-36.206l0.108-0.002zM306.434 337.642c7.943-6.378 13.374-15.601 14.742-26.101l0.021-0.202c-0.735-15.121-7.935-28.425-18.873-37.301l-0.095-0.075-97.317-97.27c-9.166-8.984-21.504-14.763-35.181-15.505l-0.139-0.006c-12.772 0.627-24.064 6.483-31.863 15.456l-0.047 0.055-38.917 38.917c-17.959 23.533-28.775 53.357-28.775 85.707 0 1.766 0.032 3.525 0.096 5.276l-0.007-0.253c13.362 192.204 165.668 572.502 648.047 647.3 20.419-4.187 38.001-14.325 51.346-28.497l0.046-0.049 58.353-58.119c9.343-8.243 15.206-20.244 15.206-33.615s-5.863-25.371-15.158-33.573l-0.049-0.042-97.317-97.317c-10.592-11.333-24.618-19.337-40.414-22.351l-0.466-0.074c-0.14-0.008-0.304-0.013-0.47-0.013-2.572 0-4.876 1.142-6.436 2.945l-0.009 0.011-19.482 19.482c-25.37 25.409-60.011 41.555-98.415 42.928l-0.256 0.007c-0.051 0-0.111 0-0.172 0-23.204 0-44.74-7.144-62.528-19.352l0.376 0.244-1.168-0.794c-37.376-27.097-223.553-166.088-246.633-252.286-2.883-9.86-4.541-21.188-4.541-32.903 0-42.981 22.323-80.748 56.008-102.34l0.485-0.291z'></path>
<path d = 'M848.708 502.189h-70.079c-0.159-152.593-123.804-276.254-276.375-276.44l-0.018-0v-70.079c191.272 0.239 346.26 155.244 346.472 346.499l0 0.020z'></path>
<path d = 'M1004.471 502.236h-70.079c-0.266-238.566-193.59-431.89-432.13-432.156l-0.026-0v-70.079c277.377-0 502.236 224.859 502.236 502.236v0z'></path>
</svg>
</a>
<a href = 'https://wa.me/919188339903?text=Hello' aria-label = 'WhatsApp' class = 'header-icon-glass inline-flex items-center justify-center transition'>
<svg viewBox = '0 0 24 24' fill = 'currentColor' class = 'h-5 w-5' aria-hidden = 'true'>
<path d = 'M19.05 4.91A9.82 9.82 0 0 0 12.03 2C6.6 2 2.18 6.42 2.18 11.85c0 1.74.46 3.45 1.32 4.95L2 22l5.36-1.41a9.84 9.84 0 0 0 4.67 1.19h.01c5.43 0 9.85-4.42 9.85-9.85a9.8 9.8 0 0 0-2.84-7.02Zm-7.02 15.2h-.01a8.14 8.14 0 0 1-4.14-1.13l-.3-.18-3.18.84.85-3.1-.2-.32a8.16 8.16 0 0 1-1.25-4.37c0-4.52 3.68-8.2 8.21-8.2 2.19 0 4.25.85 5.8 2.41a8.15 8.15 0 0 1 2.39 5.8c0 4.52-3.68 8.2-8.17 8.2Zm4.5-6.15c-.25-.13-1.47-.72-1.7-.8-.23-.09-.39-.13-.56.12-.17.25-.64.8-.79.97-.15.17-.29.19-.54.06-.25-.13-1.05-.39-2.01-1.24-.74-.66-1.24-1.48-1.38-1.73-.14-.25-.02-.38.11-.5.11-.11.25-.29.38-.43.13-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.76-1.84-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.66.31-.23.25-.87.85-.87 2.06 0 1.21.89 2.38 1.01 2.55.13.17 1.75 2.67 4.24 3.74.59.25 1.06.4 1.42.51.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.1-.23-.16-.48-.29Z' />
</svg>
</a>
<button id = 'mobileMenuButton' aria-label = 'Toggle menu' class = 'relative flex h-11 items-center justify-center'>
<span class = 'menu-icon inline-flex flex-col gap-1.5'>
<span class = 'menu-line menu-line-top block h-[1.5px] w-6 rounded bg-white'></span>
<span class = 'menu-line menu-line-middle block h-[1.5px] w-6 rounded bg-white'></span>
</span>
</button>
</div>
</div>
</header>