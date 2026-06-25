<?php 
$current_page = basename($_SERVER['PHP_SELF']); 
?>

<header id="siteHeader" class="site-header px-5 py-4 sm:px-8 md:px-10 md:py-[0.45rem] header-theme-light">
  <div class="mx-auto flex w-full max-w-6xl items-center justify-between">
    <!-- Logo -->
    <a href="index.php" class="flex items-center gap-2 text-xl font-medium tracking-tight sm:text-2xl">
      <span class="header-logo-text">Wazeefa</span>
      <span class="grid h-9 w-9 place-items-center">
        <svg viewBox="0 0 113 124.4">
          <defs>
            <style>
              .logo-1 { fill: url(#linear-gradient); stroke-width: 0px; }
            </style>
            <linearGradient id="linear-gradient" x1="3.51" y1="-107.99" x2="-21.16" y2="-23.61" gradientTransform="translate(63.17 -17.19) rotate(2.72) scale(1 -1)" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#b85518" />
              <stop offset=".46" stop-color="#e99511" />
              <stop offset="1" stop-color="#e99511" />
            </linearGradient>
          </defs>
          <path class="logo-1" d="m20.05,28.13c2.16-5.71,6.36-11.49,12.49-14.44,20.2-9.6,40.3,5.16,40.3,5.16l4.89-3.45C73.45,11.5,55.91-1.64,34.15.17,12.39,1.99,4.04,16.83.81,30.96c-6.17,35.51,25.15,61.92,25.15,61.92,0,0,6.97-11.13,10.24-16.14-19.45-21.51-19.29-36.99-16.15-48.6Zm66.05-4.82l-3.68,3.35s3.71,4.26,7.71,8.49c14.48,20.4,6.18,37.53,2.65,42.69-13.99,16.85-34.45,8.63-36.98,7.52l3.21-67.45-13.31-.63c-3.42,7.33-8.96,12.99-16.62,16.98l-.81,17.1c1.9-.28,4.12-1.05,6.66-2.32l6.3-3.36-2.18,45.88h.06c-.11,2.89-.21,6.02-.21,8.13,5.82,7.73,27.4,10.4,36.02,8.56,9.58-2.22,15.45-6.62,19.44-10.98,5.31-5.82,8.66-13.14,10.04-20.9,5.47-30.83-18.3-53.05-18.3-53.05Z" />
        </svg>
      </span>
    </a>

    <!-- Desktop Navigation -->
    <nav class="hidden items-center gap-10 text-[15px] lg:flex">
      <a href="about-us.php" class="header-link header-link-muted transition hover:text-current hover:font-[450]">About</a>

      <!-- 1. Development Dropdown -->
      <div class="group relative">
        <a class="header-link header-link-muted transition hover:text-current hover:font-[450] inline-flex items-center gap-1 py-4 cursor-pointer">
          Development
        </a>
        <div class="absolute left-1/2 top-full z-50 -translate-x-1/2 pt-2 opacity-0 invisible translate-y-3 transition-all duration-300 ease-out group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
          <div class="w-[450px] rounded-none bg-white p-3 shadow-2xl flex flex-row items-stretch gap-6">
            <div class="relative w-1/2 shrink-0 overflow-hidden rounded-none bg-gray-100 min-h-[140px]">
              <img src="<?php 
                if ($current_page == 'web-development.php') echo 'assets/images/web-development.jpg';
                elseif ($current_page == 'software-development.php') echo 'assets/images/software-development.jpg';
                elseif ($current_page == 'mobile-application-development.php') echo 'assets/images/app-development.jpg';
                else echo 'assets/images/web-development.jpg'; 
              ?>" alt="Development" class="js-nav-base-img absolute inset-0 h-full w-full object-cover transition-all duration-500 ease-out">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" class="js-nav-hover-img absolute inset-0 h-full w-full object-cover opacity-0 scale-105 transition-all duration-500 ease-out pointer-events-none">
            </div>
            
            <!-- CHANGED: justify-center to justify-start pt-3 to arrange links top-to-bottom -->
            <div class="flex w-1/2 flex-col justify-start pt-3 space-y-4 py-2 pr-2">
              <a href="web-development.php" data-hover-img="assets/images/web-development.jpg" class="relative self-start text-[0.92rem] font-medium py-0.5 whitespace-nowrap after:absolute after:bottom-0 after:left-0 after:h-[1px] after:bg-black after:transition-all after:duration-300 
                <?php echo ($current_page == 'web-development.php') ? 'text-black after:w-full' : 'text-black/70 after:w-0 hover:text-black hover:after:w-full'; ?>">
                Web Development
              </a>
              
              <a href="software-development.php" data-hover-img="assets/images/software-development.jpg" class="relative self-start text-[0.92rem] font-medium py-0.5 whitespace-nowrap after:absolute after:bottom-0 after:left-0 after:h-[1px] after:bg-black after:transition-all after:duration-300 
                <?php echo ($current_page == 'software-development.php') ? 'text-black after:w-full' : 'text-black/70 after:w-0 hover:text-black hover:after:w-full'; ?>">
                Software Development
              </a>
              
              <a href="mobile-application-development.php" data-hover-img="assets/images/app-development.jpg" class="relative self-start text-[0.92rem] font-medium py-0.5 whitespace-nowrap after:absolute after:bottom-0 after:left-0 after:h-[1px] after:bg-black after:transition-all after:duration-300 
                <?php echo ($current_page == 'mobile-application-development.php') ? 'text-black after:w-full' : 'text-black/70 after:w-0 hover:text-black hover:after:w-full'; ?>">
                Mobile App Development
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- 2. E-Commerce & CMS Dropdown -->
      <div class="group relative">
        <div class="header-link header-link-muted transition hover:text-current hover:font-[450] inline-flex items-center gap-1 py-4 cursor-pointer">
          E-Commerce & CMS
        </div>
        
        <div class="absolute left-1/2 top-full z-50 -translate-x-1/2 pt-2 opacity-0 invisible translate-y-3 transition-all duration-300 ease-out group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
          <div class="w-[450px] rounded-none bg-white p-3 shadow-xl ring-1 ring-black/5 flex flex-row items-stretch gap-6">
            
            <div class="relative w-1/2 shrink-0 overflow-hidden rounded-none bg-gray-100 min-h-[140px]">
              <img src="<?php 
                if ($current_page == 'ecommerce-website-development.php') echo 'https://images.unsplash.com/photo-1773332585754-f1436987743b?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
                elseif ($current_page == 'cms-development.php') echo 'https://images.unsplash.com/photo-1618477388954-7852f32655ec?q=80&w=870&auto=format&fit=crop';
                else echo 'https://images.unsplash.com/photo-1773332585754-f1436987743b?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; 
              ?>" alt="E-Commerce & CMS" class="js-nav-base-img absolute inset-0 h-full w-full object-cover transition-all duration-500 ease-out">
              <!-- FIXED: Added base64 spacer source to eliminate layout broken image block -->
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" class="js-nav-hover-img absolute inset-0 h-full w-full object-cover opacity-0 scale-105 transition-all duration-500 ease-out pointer-events-none">
            </div>
            
            <!-- CHANGED: justify-center to justify-start pt-3 to arrange links top-to-bottom -->
            <div class="flex w-1/2 flex-col justify-start pt-3 space-y-4 py-2 pr-2">
              <a href="ecommerce-website-development.php" data-hover-img="https://images.unsplash.com/photo-1773332585754-f1436987743b?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="relative self-start text-sm font-medium py-0.5 whitespace-nowrap after:absolute after:bottom-0 after:left-0 after:h-[1px] after:bg-black after:transition-all after:duration-300 
                <?php echo ($current_page == 'ecommerce-website-development.php') ? 'text-black after:w-full' : 'text-black/70 after:w-0 hover:text-black hover:after:w-full'; ?>">
                Ecommerce Development
              </a>
              
              <!-- FIXED: Configured with a fresh, highly reliable hover image asset link -->
              <a href="cms-development.php" data-hover-img="https://images.unsplash.com/photo-1618477388954-7852f32655ec?q=80&w=870&auto=format&fit=crop" class="relative self-start text-sm font-medium py-0.5 whitespace-nowrap after:absolute after:bottom-0 after:left-0 after:h-[1px] after:bg-black after:transition-all after:duration-300 
                <?php echo ($current_page == 'cms-development.php') ? 'text-black after:w-full' : 'text-black/70 after:w-0 hover:text-black hover:after:w-full'; ?>">
                CMS Development
              </a>
            </div>
            
          </div>
        </div>
      </div>

      <!-- 3. Business Growth Dropdown -->
      <div class="group relative">
        <div class="header-link header-link-muted transition hover:text-current hover:font-[450] inline-flex items-center gap-1 py-4 cursor-pointer">
          Business Growth
        </div>
        <div class="absolute left-1/2 top-full z-50 -translate-x-1/2 pt-2 opacity-0 invisible translate-y-3 transition-all duration-300 ease-out group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
          <div class="w-[450px] rounded-none bg-white p-3 shadow-xl ring-1 ring-black/5 flex flex-row items-stretch gap-6">
            
            <div class="relative w-1/2 shrink-0 overflow-hidden rounded-none bg-gray-100 min-h-[140px]">
              <img src="<?php 
                if ($current_page == 'digital-marketing.php') echo 'assets/images/digital-marketing.jpg';
                elseif ($current_page == 'branding.php') echo 'assets/images/branding.jpg';
                else echo 'assets/images/digital-marketing.jpg'; 
              ?>" alt="Business Growth" class="js-nav-base-img absolute inset-0 h-full w-full object-cover transition-all duration-500 ease-out">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" class="js-nav-hover-img absolute inset-0 h-full w-full object-cover opacity-0 scale-105 transition-all duration-500 ease-out pointer-events-none">
            </div>
            
            <!-- CHANGED: justify-center to justify-start pt-3 to arrange links top-to-bottom -->
            <div class="flex w-1/2 flex-col justify-start pt-3 space-y-4 py-2 pr-2">
              <a href="digital-marketing.php" data-hover-img="assets/images/digital-marketing.jpg" class="relative self-start text-sm font-medium py-0.5 whitespace-nowrap after:absolute after:bottom-0 after:left-0 after:h-[1px] after:bg-black after:transition-all after:duration-300 
                <?php echo ($current_page == 'digital-marketing.php') ? 'text-black after:w-full' : 'text-black/70 after:w-0 hover:text-black hover:after:w-full'; ?>">
                Digital Marketing
              </a>
              
              <a href="branding.php" data-hover-img="assets/images/branding.jpg" class="relative self-start text-sm font-medium py-0.5 whitespace-nowrap after:absolute after:bottom-0 after:left-0 after:h-[1px] after:bg-black after:transition-all after:duration-300 
                <?php echo ($current_page == 'branding.php') ? 'text-black after:w-full' : 'text-black/70 after:w-0 hover:text-black hover:after:w-full'; ?>">
                Branding
              </a>
            </div>
            
          </div>
        </div>
      </div>

      <a href="career.php" class="header-link header-link-muted transition hover:text-current hover:font-[450]">Careers</a>
      <a href="contact-us.php" class="header-link header-link-muted transition hover:text-current hover:font-[450]">Contact</a>
    </nav>

    <!-- Actions & Mobile Layout Toggles -->
    <div class="hidden items-center gap-5 sm:gap-4 lg:flex">
      <a href="tel:919188339903" aria-label="Call us" class="header-icon-glass inline-flex items-center justify-center">
        <svg width="18" height="18" fill="currentColor" viewBox="0 0 1004 1024" xmlns="http://www.w3.org/2000/svg">
          <path d="M169.592 91.056c33.181 0.769 63.036 14.398 84.898 36.076l-0.009-0.008 97.317 97.317c24.222 21.501 39.41 52.717 39.41 87.481 0 1.438-0.026 2.87-0.078 4.296l0.006-0.206c-2.903 31.857-18.963 59.471-42.63 77.69l-0.259 0.192-1.588 1.215c-15.963 8.928-26.577 25.726-26.577 45.004 0 4.29 0.526 8.458 1.516 12.441l-0.074-0.354 0.748 2.57c1.822 7.335 13.409 36.395 85.73 103.531 40.427 37.149 84.049 73.139 129.538 106.748l4.313 3.043c6.417 4.36 14.335 6.961 22.861 6.961 0.027 0 0.055-0 0.082-0l-0.004 0c19.28-1.512 36.381-9.79 49.156-22.432l-0.007 0.007 19.482-19.482c14.211-14.425 33.958-23.362 55.793-23.362 0.227 0 0.453 0.001 0.679 0.003l-0.035-0c35.789 2.747 67.406 18.673 90.392 42.875l0.057 0.060 97.083 97.457c22.126 20.895 35.9 50.431 35.9 83.184s-13.774 62.29-35.845 83.133l-0.055 0.052-58.399 58.399c-26.076 27.807-62.038 46.071-102.249 49.163l-0.534 0.033h-2.616l-2.616-0.374c-530.034-80.498-696.823-502.095-710.932-713.829v-2.336c-0.068-1.99-0.107-4.329-0.107-6.676 0-51.489 18.625-98.628 49.506-135.046l-0.25 0.303 38.917-38.917c20.475-21.833 49.311-35.613 81.371-36.206l0.108-0.002zM306.434 337.642c7.943-6.378 13.374-15.601 14.742-26.101l0.021-0.202c-0.735-15.121-7.935-28.425-18.873-37.301l-0.095-0.075-97.317-97.27c-9.166-8.984-21.504-14.763-35.181-15.505l-0.139-0.006c-12.772 0.627-24.064 6.483-31.863 15.456l-0.047 0.055-38.917 38.917c-17.959 23.533-28.775 53.357-28.775 85.707 0 1.766 0.032 3.525 0.096 5.276l-0.007-0.253c13.362 192.204 165.668 572.502 648.047 647.3 20.419-4.187 38.001-14.325 51.346-28.497l0.046-0.049 58.353-58.119c9.343-8.243 15.206-20.244 15.206-33.615s-5.863-25.371-15.158-33.573l-0.049-0.042-97.317-97.317c-10.592-11.333-24.618-19.337-40.414-22.351l-0.466-0.074c-0.14-0.008-0.304-0.013-0.47-0.013-2.572 0-4.876 1.142-6.436 2.945l-0.009 0.011-19.482 19.482c-25.37 25.409-60.011 41.555-98.415 42.928l-0.256 0.007c-0.051 0-0.111 0-0.172 0-23.204 0-44.74-7.144-62.528-19.352l0.376 0.244-1.168-0.794c-37.376-27.097-223.553-166.088-246.633-252.286-2.883-9.86-4.541-21.188-4.541-32.903 0-42.981 22.323-80.748 56.008-102.34l0.485-0.291z" />
        </svg>
      </a>
      <a href="https://wa.me/919188339903?text=Hello" aria-label="WhatsApp" class="header-icon-glass inline-flex items-center justify-center transition">
        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5" aria-hidden="true">
          <path d="M19.05 4.91A9.82 9.82 0 0 0 12.03 2C6.6 2 2.18 6.42 2.18 11.85c0 1.74.46 3.45 1.32 4.95L2 22l5.36-1.41a9.84 9.84 0 0 0 4.67 1.19h.01c5.43 0 9.85-4.42 9.85-9.85a9.8 9.8 0 0 0-2.84-7.02Zm-7.02 15.2h-.01a8.14 8.14 0 0 1-4.14-1.13l-.3-.18-3.18.84.85-3.1-.2-.32a8.16 8.16 0 0 1-1.25-4.37c0-4.52 3.68-8.2 8.21-8.2 2.19 0 4.25.85 5.8 2.41a8.15 8.15 0 0 1 2.39 5.8c0 4.52-3.68 8.2-8.17 8.2Zm4.5-6.15c-.25-.13-1.47-.72-1.7-.8-.23-.09-.39-.13-.56.12-.17.25-.64.8-.79.97-.15.17-.29.19-.54.06-.25-.13-1.05-.39-2.01-1.24-.74-.66-1.24-1.48-1.38-1.73-.14-.25-.02-.38.11-.5.11-.11.25-.29.38-.43.13-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.76-1.84-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.66.31-.23.25-.87.85-.87 2.06 0 1.21.89 2.38 1.01 2.55.13.17 1.75 2.67 4.24 3.74.59.25 1.06.4 1.42.51.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.1-.23-.16-.48-.29Z" />
        </svg>
      </a>
      <button id="desktopMenuButton" aria-label="Open menu" class="group flex h-10 w-10 items-center justify-center">
        <span class="space-y-1.5">
          <span class="header-icon-line block h-[1px] w-6 bg-white/60 transition group-hover:opacity-100"></span>
          <span class="header-icon-line block h-[1px] w-6 bg-white/60 transition group-hover:opacity-100"></span>
        </span>
      </button>
    </div>

    <div class="flex items-center gap-6 lg:hidden">
      <a href="tel:919188339903" aria-label="Call us" class="header-icon-glass inline-flex items-center justify-center">
        <svg width="18" height="18" fill="currentColor" viewBox="0 0 1004 1024" xmlns="http://www.w3.org/2000/svg"><path d="M169.592 91.056..."></path></svg>
      </a>
      <button id="mobileMenuButton" aria-label="Toggle menu" class="relative flex h-11 items-center justify-center">
        <span class="menu-icon inline-flex flex-col gap-1.5">
          <span class="menu-line menu-line-top block h-[1px] w-6 rounded bg-white"></span>
          <span class="menu-line menu-line-middle block h-[1px] w-6 rounded bg-white"></span>
        </span>
      </button>
    </div>
  </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const hoverLinks = document.querySelectorAll('[data-hover-img]');
  
  hoverLinks.forEach(link => {
    const parentGroup = link.closest('.group');
    if (!parentGroup) return;
    
    const baseImg = parentGroup.querySelector('.js-nav-base-img');
    const hoverImg = parentGroup.querySelector('.js-nav-hover-img');
    
    link.addEventListener('mouseenter', () => {
      const newImgPath = link.getAttribute('data-hover-img');
      if (hoverImg && newImgPath) {
        hoverImg.src = newImgPath;
        hoverImg.classList.remove('opacity-0', 'scale-105');
        hoverImg.classList.add('opacity-100', 'scale-100');
        
        if (baseImg) {
          baseImg.classList.add('scale-95', 'opacity-95');
        }
      }
    });
    
    link.addEventListener('mouseleave', () => {
      if (hoverImg) {
        hoverImg.classList.remove('opacity-100', 'scale-100');
        hoverImg.classList.add('opacity-0', 'scale-105');
      }
      if (baseImg) {
        baseImg.classList.remove('scale-95', 'opacity-95');
      }
    });
  });
});
</script>