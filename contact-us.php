<?php session_start();
?>
<!DOCTYPE html>
<html lang = 'en'>

<head>
<?php include 'includes/common-assets.php';
?>
<?php include 'includes/google-tag-manager.php';
?>
<?php include 'includes/meta/contact.php';
?>
<link rel = 'stylesheet' href = 'https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css'>
</head>

<body class = 'min-h-screen text-white'>
<div class = 'mx-auto min-h-screen max-w-full p-0 md:p-0'>
<?php include 'includes/header.php';
?>
<?php include 'includes/menupanel.php';
?>
<section id = 'webDevHeroParallax' class = 'relative h-[30vh] overflow-hidden'>
<img id = 'webDevHeroParallaxImage' src = 'assets/images/banners/contact.webp' alt = 'Web Development'

class = 'h-[45vh] w-full object-cover object-center will-change-transform' />
</section>
<section class = 'bg-white px-5 pt-[8rem] pb-12 text-black sm:px-8 md:px-12 md:pt-32 md:pb-24 lg:px-16 lg:pt-[5rem] lg:pb-25'>
<div class = 'mx-auto max-w-6xl'>

<div class = 'grid grid-cols-1 gap-y-12 md:grid-cols-12 md:gap-x-10 lg:gap-x-16 xl:gap-x-10 items-start'>

<div class = 'order-1 md:order-none md:col-span-6 lg:col-span-7 md:col-start-1 md:row-start-1'>
<p class = 'mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-black/45'>
Contact Us
</p>
<h1 class = 'service-hero-h2 text-[9vw] leading-[1.05] tracking-[-0.0em] sm:text-[3.3rem] md:text-[4.4vw] lg:text-[3.5rem] text-black'>
Let's Build Something <span class="text-[#dc8413]">Together</span>
                        </h1>
                        <p class="mt-4 text-black/65 md:text-md max-w-[39rem]">
                            Whether you're planning a new website, mobile application, digital marketing campaign, or custom software solution, we're here to help turn your ideas into results.
                        </p>
                    </div>

                    <div class="order-2 md:order-none md:col-span-6 lg:col-span-5 md:col-start-7 lg:col-start-8 md:row-start-1 md:row-span-3 self-start bg-white p-6 sm:p-8 md:p-8 lg:p-8 shadow-[0_10px_60px_rgba(0,0,0,0.05)] border border-black/0 lg:mt-8">
                        <div class="mb-8">
                            <h3 class="text-[2rem] font-light leading-tight tracking-[-0.04em] text-black">
                                Get in Touch
                            </h3>
                            <p class="mt-2 text-sm text-black/50">
                                We'd Love to Hear From You
</p>
</div>

<?php if ( !empty( $_SESSION[ 'flash' ] ) ): ?>
<?php $flash = $_SESSION[ 'flash' ];
unset( $_SESSION[ 'flash' ] );
?>
<div class = "mb-4 rounded-md p-3 text-sm <?php echo ($flash['type']==='success')? 'bg-green-100 text-green-800':'bg-red-100 text-red-800'; ?>">
<?php echo htmlspecialchars( $flash[ 'message' ] );
?>
</div>
<?php endif;
?>

<form id = 'contactForm' class = 'space-y-5' action = 'send-contact-us.php' method = 'post'>
<div class = 'grid gap-4 sm:grid-cols-2'>
<input type = 'text' name = 'first_name' placeholder = 'First name' required class = 'h-12 border border-black/10 bg-transparent px-4 text-sm text-black outline-none transition placeholder:text-black/60 focus:border-black/30' />
<input type = 'text' name = 'last_name' placeholder = 'Last name' required class = 'h-12 border border-black/10 bg-transparent px-4 text-sm text-black outline-none transition placeholder:text-black/60 focus:border-black/30' />
</div>

<div class = 'relative'>
<span id = 'emailIcon' class = 'pointer-events-none absolute inset-y-0 left-4 flex items-center text-black/30 transition-colors duration-200'>
<svg fill = 'none' viewBox = '0 0 24 24' stroke-width = '1.5' stroke = 'currentColor' class = 'w-[18px] h-[18px]'>
<path stroke-linecap = 'round' stroke-linejoin = 'round' d = 'M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75' />
</svg>
</span>
<input type = 'email' id = 'emailInput' name = 'email' placeholder = 'Your email' required class = 'h-12 w-full border border-black/10 bg-transparent pl-11 pr-4 text-sm text-black outline-none transition placeholder:text-black/60 focus:border-black/30' />
</div>
<div id = 'contactPhoneField' class = 'relative overflow-visible'>
<input type = 'tel' id = 'phone' placeholder = 'Phone number' required inputmode = 'tel' autocomplete = 'tel' class = 'h-12 w-full border border-black/10 bg-transparent px-4 text-sm text-black outline-none transition placeholder:text-black/60 focus:border-black/30' />
<input type = 'hidden' id = 'fullPhoneE164' name = 'phone_national' />
<p id = 'phoneError' class = 'mt-2 hidden text-sm text-red-500' role = 'alert'></p>
</div>

<div class = 'relative overflow-visible'>
<div id = 'servicesDropdownTrigger' class = 'flex h-12 w-full items-center justify-between border border-black/10 bg-transparent px-4 text-sm text-black cursor-pointer transition select-none focus:border-black/30'>
<span id = 'selectedServicesText' class = 'text-black/60 truncate pr-2'>What Services Do You Need?</span>
<svg id = 'dropdownArrow' fill = 'none' viewBox = '0 0 24 24' stroke-width = '1.5' stroke = 'currentColor' class = 'w-4 h-4 text-black/40 transition-transform duration-200 flex-shrink-0'>
<path stroke-linecap = 'round' stroke-linejoin = 'round' d = 'm19.5 8.25-7.5 7.5-7.5-7.5' />
</svg>
</div>

<div id = 'servicesOptionsPanel' class = 'absolute left-0 right-0 z-50 mt-1 hidden max-h-40 overflow-y-auto border border-black/10 bg-white p-1 shadow-[0_10px_30px_rgba(0,0,0,0.08)] transition-all'>
<?php
$services = [
    'Web Development',
    'Software Development',
    'Mobile Application Development',
    'Ecommerce Development',
    'CMS Development',
    'Digital Marketing',
    'Branding',
];
foreach ( $services as $service ):
?>
<label class = 'flex items-center gap-3 px-3 py-2.5 hover:bg-black/[0.03] cursor-pointer rounded text-sm text-black transition-colors select-none'>
<input type = 'checkbox' name = 'services[]' value = "<?php echo htmlspecialchars($service); ?>" class = 'w-4 h-4 rounded border-black/20 text-black accent-black focus:ring-0' />
<span><?php echo htmlspecialchars( $service );
?></span>
</label>
<?php endforeach;
?>
</div>
</div>
<div class = 'relative'>
<textarea name = 'help' rows = '4' maxlength = '120' placeholder = 'How can we help?' required class = 'min-h-[7.5rem] w-full resize-none border border-black/10 bg-transparent px-4 py-4 text-sm text-black outline-none transition placeholder:text-black/60 focus:border-black/30'></textarea>
<span class = 'pointer-events-none absolute bottom-4 right-4 text-[11px] text-black/30'>
0/120
</span>
</div>

<div class = 'h-captcha min-h-[78px] w-full' data-sitekey = '69f7c7af-7ddf-4965-867f-a1d1406c11ef'></div>

<button type = 'submit' class = 'inline-flex h-14 w-full items-center justify-center bg-black px-6 text-[15px] font-medium text-white transition hover:bg-green-800'>
Submit
</button>
</form>
</div>

<div class = 'order-3 md:order-none md:col-span-6 lg:col-span-7 md:col-start-1 md:row-start-2 md:mt-2 lg:mt-4'>
<div class = 'grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-8 mt-4'>
<article>
<h3 class = 'text-[1.15rem] font-normal text-black mb-4 tracking-[-0.0em]'>
Office Address :</h3>
<p class = 'text-[0.95rem] md:text-[0.879rem]/6 text-black pr-4'>
Wazeefa1 Technologies Private Limited<br>
First Floor, Rajamalli Building Infopark Thrissur<br>
Koratty P.O, 680308 Kerala, India
</p>
</article>

<article>
<h3 class = 'text-[1.15rem] font-normal text-black mb-4 tracking-[-0.0em]'>Let’s Connect :</h3>
<div class = 'flex flex-row gap-6 text-[0.95rem] leading-5 text-black'>
<div class = 'flex flex-col gap-1 text-[0.95rem] md:text-sm leading-6 text-black '>
<a href = 'tel:914872970765' class = 'hover:text-black transition'>+91 487 2970765</a>
<a href = 'tel:919188339903' class = 'hover:text-black transition'>+91 9188339903</a>
</div>
<div class = 'flex flex-col gap-1 text-[0.95rem] md:text-sm leading-6 text-black'>
<a href = 'mailto:%69%6E%66%6F%40%77%61%7A%65%65%66%61%2C%69%6E'>info@wazeefa.in</a>
</div>
</div>
</article>
</div>
</div>

<div class = 'order-4 md:order-none w-full md:col-span-6 lg:col-span-7 md:col-start-1 md:row-start-3 md:mt-2 lg:mt-0 overflow-hidden bg-gray-100 border border-black/5'>
<iframe src = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.9188255081694!2d76.3537425!3d10.2681243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0803db3df36871%3A0xa0666bbc7415ea7e!2sWazeefa1%20Technologies%20Private%20Limited.!5e0!3m2!1sen!2sin!4v1776162420021!5m2!1sen!2sin' class = 'h-[280px] w-full md:h-[90%] lg:h-[270px]' style = 'border:0;' allowfullscreen = '' loading = 'lazy' referrerpolicy = 'no-referrer-when-downgrade'></iframe>
</div>

</div>
</div>
</section>

<?php include 'includes/footer.php';
?>
</div>

<script src = 'assets/js/script.js'></script>

<script src = 'https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/intlTelInput.min.js'></script>
<script>
if ( isset( $_POST[ 'services' ] ) && is_array( $_POST[ 'services' ] ) ) {
    $selectedServices = filter_var_array( $_POST[ 'services' ], FILTER_SANITIZE_SPECIAL_CHARS );
    // Combines array to a string value: e.g., 'Web Development, Branding'
    $servicesString = implode( ', ', $selectedServices );

} else {
    $servicesString = 'None selected';
}
</script>
</body>
</html>