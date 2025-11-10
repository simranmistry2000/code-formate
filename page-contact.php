<?php /* Template Name: Contact */ 
get_header();
?>
<main>
    <?php 
    $contact_hero_background_image = get_field('contact_hero_background_image'); 
    if(!empty($contact_hero_background_image)) { ?>
        <section class="contact-bg" style="background-image: url('<?php echo $contact_hero_background_image; ?>'); "><?php 
    }
    ?>
    </section>
    <section class="contact-form-container">
        <div class="container">
            <div class="contact-details-container">
                <div class="row g-0 align-items-center">
                    <div class="col-md-6">
                        <div class="contact-details">
                            <h3><?php echo get_field('contact_get_in_touch_title'); ?></h3>
                            <div class="contact-details-item mt-3 mt-md-4">
                                <div class="c-item">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_569_83)">
                                            <path
                                                d="M3.94141 8.26226C3.94141 7.67122 4.17619 7.10439 4.59412 6.68647C5.01204 6.26854 5.57887 6.03375 6.16991 6.03375H21.7694C22.3605 6.03375 22.9273 6.26854 23.3452 6.68647C23.7631 7.10439 23.9979 7.67122 23.9979 8.26226V19.4048C23.9979 19.9958 23.7631 20.5626 23.3452 20.9806C22.9273 21.3985 22.3605 21.6333 21.7694 21.6333H6.16991C5.57887 21.6333 5.01204 21.3985 4.59412 20.9806C4.17619 20.5626 3.94141 19.9958 3.94141 19.4048V8.26226Z"
                                                stroke="#843549" stroke-width="1.11425" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M3.94141 8.26233L13.9697 14.9478L23.9979 8.26233"
                                                stroke="#843549" stroke-width="1.11425" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_569_83">
                                                <rect width="26.742" height="26.742" fill="white"
                                                    transform="translate(0.597656 0.462463)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span><?php echo get_field('email_address','option'); ?></span>
                                </div>
                                <div class="c-item">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_569_89)">
                                            <path
                                                d="M6.16991 5.37537H10.6269L12.8554 10.9466L10.0698 12.618C11.2631 15.0376 13.2214 16.9959 15.641 18.1893L17.3124 15.4036L22.8837 17.6321V22.0891C22.8837 22.6802 22.6489 23.247 22.231 23.6649C21.813 24.0828 21.2462 24.3176 20.6552 24.3176C16.3088 24.0535 12.2093 22.2078 9.13028 19.1288C6.05125 16.0497 4.20554 11.9503 3.94141 7.60387C3.94141 7.01283 4.17619 6.446 4.59412 6.02808C5.01204 5.61015 5.57887 5.37537 6.16991 5.37537Z"
                                                stroke="#843549" stroke-width="1.11425" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M17.3125 8.71814C17.9035 8.71814 18.4704 8.95293 18.8883 9.37085C19.3062 9.78878 19.541 10.3556 19.541 10.9466"
                                                stroke="#843549" stroke-width="1.11425" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M17.3125 4.26105C19.0856 4.26105 20.7861 4.96541 22.0399 6.21919C23.2936 7.47296 23.998 9.17345 23.998 10.9466"
                                                stroke="#843549" stroke-width="1.11425" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_569_89">
                                                <rect width="26.742" height="26.742" fill="white"
                                                    transform="translate(0.597656 0.918274)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <span><?php echo get_field('phone_number','option'); ?></span>
                                </div>
                                <div class="c-item">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_569_96)">
                                            <path
                                                d="M10.627 12.6308C10.627 13.5174 10.9791 14.3676 11.606 14.9945C12.2329 15.6214 13.0832 15.9736 13.9697 15.9736C14.8563 15.9736 15.7065 15.6214 16.3334 14.9945C16.9603 14.3676 17.3125 13.5174 17.3125 12.6308C17.3125 11.7443 16.9603 10.894 16.3334 10.2672C15.7065 9.64027 14.8563 9.28809 13.9697 9.28809C13.0832 9.28809 12.2329 9.64027 11.606 10.2672C10.9791 10.894 10.627 11.7443 10.627 12.6308Z"
                                                stroke="#843549" stroke-width="1.11425" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M20.272 18.9341L15.5443 23.6619C15.1264 24.0793 14.5599 24.3138 13.9693 24.3138C13.3786 24.3138 12.8121 24.0793 12.3943 23.6619L7.66538 18.9341C6.41878 17.6874 5.56985 16.0991 5.22594 14.37C4.88203 12.6408 5.05858 10.8486 5.73327 9.21976C6.40797 7.59097 7.5505 6.19882 9.01639 5.21935C10.4823 4.23989 12.2057 3.7171 13.9687 3.7171C15.7317 3.7171 17.4551 4.23989 18.921 5.21935C20.3869 6.19882 21.5294 7.59097 22.2041 9.21976C22.8788 10.8486 23.0554 12.6408 22.7115 14.37C22.3676 16.0991 21.5186 17.6874 20.272 18.9341Z"
                                                stroke="#843549" stroke-width="1.11425" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_569_96">
                                                <rect width="26.742" height="26.742" fill="white"
                                                    transform="translate(0.597656 0.374084)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <span><?php echo get_field('address','option'); ?></span>
                                </div>
                                <div class="c-item">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_569_102)">
                                            <path
                                                d="M3.94141 14.2009C3.94141 15.5178 4.20079 16.8218 4.70476 18.0385C5.20873 19.2552 5.94741 20.3607 6.87862 21.2919C7.80983 22.2231 8.91533 22.9618 10.132 23.4658C11.3487 23.9697 12.6527 24.2291 13.9697 24.2291C15.2866 24.2291 16.5906 23.9697 17.8073 23.4658C19.024 22.9618 20.1295 22.2231 21.0607 21.2919C21.9919 20.3607 22.7306 19.2552 23.2346 18.0385C23.7385 16.8218 23.9979 15.5178 23.9979 14.2009C23.9979 11.5412 22.9414 8.99048 21.0607 7.10982C19.1801 5.22915 16.6293 4.17261 13.9697 4.17261C11.31 4.17261 8.75928 5.22915 6.87862 7.10982C4.99795 8.99048 3.94141 11.5412 3.94141 14.2009Z"
                                                stroke="#843549" stroke-width="1.11425" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M13.9688 8.62964V14.2009L17.3115 17.5436" stroke="#843549"
                                                stroke-width="1.11425" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_569_102">
                                                <rect width="26.742" height="26.742" fill="white"
                                                    transform="translate(0.597656 0.829834)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <span><?php echo get_field('timing','option'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                            <h3 class="text-white mb-3"><?php echo get_field('contact_book_a_consultation_title'); ?></h3>
                            <?php echo do_shortcode('[contact-form-7 id="a36a92e" title="Contact Us Form" html5="false"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
    $contact_map_url = get_field('contact_map_url'); 
    if(!empty($contact_map_url)) { ?>
        <section class="contact-map">
            <iframe src="<?php echo $contact_map_url; ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section><?php 
    }
    ?>
</main>
<?php 
get_footer();
?>