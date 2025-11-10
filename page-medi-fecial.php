<?php /* Template Name: Medi Fecial */ 

get_header(); ?>

<main>
    <?php 
    $services_hero_main_title = get_field('services_hero_main_title');
    $services_hero_sub_title = get_field('services_hero_sub_title');
    $services_hero_sub_text = get_field('services_hero_sub_text');
    $services_hero_button = get_field('services_hero_button');
    $services_hero_content = get_field('services_hero_content');
    $services_hero_image = get_field('services_hero_image'); 
    if(!empty($services_hero_main_title) || !empty($services_hero_sub_title) || !empty($services_hero_content) || !empty($services_hero_image)) { ?> 
        <section class="service-hero-page position-relative d-flex flex-column">
            <div class="container position-relative order-1">
                <div class="row">
                    <div class="col-md-6">
                        <article class="service-hero-page-content"> 
                            <p class="hero-tag-line"><?php echo $services_hero_sub_title; ?></p>
                            <h1><?php echo $services_hero_main_title; ?></h1>
                            <summary class="highlight"><?php echo $services_hero_sub_text; ?></summary>
                            <p class="copy">
                                <?php echo $services_hero_content; ?>
                            </p>
                        </article>
                        <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                            <button class="app-btn black"><span><?php echo $services_hero_button['title']; ?></span> <i></i></button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>
            </div>
            <div class="service-hero-page-image order-0">
                <img src="<?php echo $services_hero_image; ?>" alt="">
            </div>
        </section><?php 
    }
    if(have_rows('services_intro_all_contents')) { ?>
        <section class="service-intro">
            <div class="container">
                <p class="content-title text-center text-md-start"><?php echo get_field('services_intro_main_title'); ?>
                </p>
                <?php 
                while( have_rows('services_intro_all_contents') ) { the_row();
                    $services_intro_all_contents_points = get_sub_field('services_intro_all_contents_points'); 
                    if(!empty($services_intro_all_contents_points)) {?>
                        <p class="content-copy text-center text-md-start"><?php echo $services_intro_all_contents_points; ?></p><?php
                    } 
                }
                ?>                
            </div>
        </section><?php 
    }
    $services_signature_solutions_main_title = get_field('services_signature_solutions_main_title');
    $services_signature_solutions_sub_title = get_field('services_signature_solutions_sub_title'); 
    if(have_rows('services_all_signature_solutions')) { ?>
        <section class="services-items">
            <div class="container">
                <div class="section-title text-center mb-2 mb-sm-3">
                    <h2><?php echo $services_signature_solutions_main_title; ?></h2>
                    <p><?php echo $services_signature_solutions_sub_title; ?></p>
                </div>
                <div class="row g-3 g-xl-4 mt-4">
                    <?php 
                    while( have_rows('services_all_signature_solutions') ) { the_row(); 
                        $services_all_signature_solutions_main_title = get_sub_field('services_all_signature_solutions_main_title');
                        $services_all_signature_solutions_content = get_sub_field('services_all_signature_solutions_content');
                        $services_all_signature_solutions_image = get_sub_field('services_all_signature_solutions_image');
                        $services_all_signature_solutions_best_for = get_sub_field('services_all_signature_solutions_best_for');
                        $services_all_signature_solutions_downtime = get_sub_field('services_all_signature_solutions_downtime');
                        $services_all_signature_solutions_duration = get_sub_field('services_all_signature_solutions_duration');
                        $services_all_signature_solutions_frequency = get_sub_field('services_all_signature_solutions_frequency');
                        if(!empty($services_all_signature_solutions_main_title) || !empty($services_all_signature_solutions_content) || !empty($services_all_signature_solutions_image)) { ?>
                            <div class="col-xl-6">
                                <div class="service-items-card">
                                    <img src="<?php echo $services_all_signature_solutions_image; ?>" alt="">
                                    <div class="service-items-content">
                                        <h3 class="service-item-name"><?php echo $services_all_signature_solutions_main_title; ?></h3>
                                        <p><?php echo $services_all_signature_solutions_content; ?></p>
                                        <ul class="service-items-features p-0 mb-0">
                                            <li class="sif-item">
                                                <p>Best For:</p> <span class="item-badge"><?php echo $services_all_signature_solutions_best_for; ?> </span>
                                            </li>
                                            <li class="sif-item">
                                                <p>Downtime:</p> <span class="item-badge-outline"><?php echo $services_all_signature_solutions_downtime; ?></span>
                                            </li>
                                            <li class="sif-item">
                                                <p>Duration:</p> <span class="item-badge-outline"><?php echo $services_all_signature_solutions_duration; ?></span>
                                            </li>
                                            <li class="sif-item">
                                                <p>Frequency:</p> <span class="item-badge-outline"><?php echo $services_all_signature_solutions_frequency; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><?php 
                        }
                    }
                    ?>
                </div>
            </div>
        </section><?php 
    }
    $services_facial_aware_center_image = get_field('services_facial_aware_center_image');
    $items = get_field('services_facial_aware_items');
    if(!empty($items)) { ?>
        <section class="facial-aware">
            <div class="container-fluid">
                <div class="facial-aware-container">
                    <?php 
                    if(!empty($services_facial_aware_center_image)) { ?>
                        <!-- Character Image -->
                        <div class="cherector-img mb-4 mb-sm-0" data-aos="zoom-in-up" data-aos-duration="800">
                            <img src="<?php echo $services_facial_aware_center_image; ?>" alt="">
                        </div><?php 
                    }
                    $items = get_field('services_facial_aware_items');

                    if ($items) {
                        $left  = array_slice($items, 0, 3);
                        $right = array_slice($items, 3, 4);

                        // LEFT ITEMS (1–3)
                        foreach ($left as $index => $item) {
                            $number = $index + 1; // to display 1, 2, 3
                            $delay = ($index + 1) * 100;  ?>
                            <div class="aware-items item-<?php echo $number; ?> aware-container-left" data-aos="fade-right" data-aos-delay="<?php echo $delay; ?>">
                                <div class="order">
                                    <h5 class="text-start text-sm-end"><?php echo esc_html($item['services_facial_aware_items_title']); ?></h5>
                                    <p class="text-start text-sm-end"><?php echo esc_html($item['services_facial_aware_items_content']); ?></p>
                                </div>
                                <div class="sn-no"><?php echo $number; ?></div>
                            </div><?php 
                        }

                        // RIGHT ITEMS (4–7)
                        foreach ($right as $index => $item) {
                            $number = $index + 4; // to display 4, 5, 6, 7
                            $delay = ($index + 1) * 100; ?>

                            <div class="aware-items item-<?php echo $number; ?> aware-container-right" data-aos="fade-left" data-aos-delay="<?php echo $delay; ?>">
                                <div class="sn-no"><?php echo $number; ?></div>
                                <div class="order">
                                    <h5 class="text-start"><?php echo esc_html($item['services_facial_aware_items_title']); ?></h5>
                                    <p class="text-start"><?php echo esc_html($item['services_facial_aware_items_content']); ?></p>
                                </div>
                            </div><?php 
                        }
                    }
                    ?>

                </div>
            </div>
        </section> <?php 
    }
    $real_transfermation_main_title = get_field('real_transfermation_main_title'); 
    if(have_rows('real_all_transfermations')) { ?>
        <section class="result">
            <div class="container">
                <div class="section-title text-center">
                    <h2><?php echo $real_transfermation_main_title; ?></h2>
                </div>
            </div>
            <div class="switter-wrapper">
                <div class="swiper resultSwiper">
                    <div class="swiper-wrapper">
                        <?php 
                        while( have_rows('real_all_transfermations') ) { the_row(); 
                            $real_all_transfermations_image = get_sub_field('real_all_transfermations_image');
                            $real_all_transfermations_before = get_sub_field('real_all_transfermations_before'); 
                            $real_all_transfermations_after = get_sub_field('real_all_transfermations_after'); 
                            if(!empty($real_all_transfermations_image)) { ?>
                                <div class="swiper-slide">
                                    <div class="result-card">
                                        <img src="<?php echo $real_all_transfermations_image; ?>" alt="result">
                                        <div class="result-content">
                                            <div class="result-wrapper">
                                                <p><?php echo $real_all_transfermations_before; ?></p>
                                                <p><?php echo $real_all_transfermations_after; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div><?php 
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section><?php 
    }
    $services_cta_main_title = get_field('services_cta_main_title');
    $services_cta_button = get_field('services_cta_button'); 
    if(!empty($services_cta_main_title)) { ?>
        <section class="service-cta">
            <div class="section-title text-center mb-2 mb-sm-3" data-aos="fade-up" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <h2 class="text-white"><?php echo $services_cta_main_title; ?></h2>
            </div>
            <a href="<?php echo $services_cta_button['url']; ?>" class="app-btn mx-auto" data-aos="zoom-in" data-aos-delay="200"
                data-aos-duration="800">
                <span><?php echo $services_cta_button['title']; ?></span><i></i>
            </a>
        </section><?php 
    }
    ?>
    <section class="faq">
        <div class="container">
            <div class="faq-container">
                <div class="row gy-4 align-items-center">
                    <?php 
                    $services_faqs_main_title = get_field('services_faqs_main_title'); 
                    $services_faqs_content = get_field('services_faqs_content');
                    $services_faqs_button = get_field('services_faqs_button'); 
                    if(!empty($services_faqs_button) || !empty($services_faqs_main_title)) { ?>                    
                        <div class="col-md-6">
                            <div class="faq-content">
                                <h2><?php echo $services_faqs_main_title; ?></h2>
                                <p>
                                    <?php echo $services_faqs_content; ?>
                                </p>
                                <div class="mt-4 mt-md-5">
                                    <a href="<?php echo $services_faqs_button['url']; ?>" class="mx-auto mx-md-0 app-btn black"><span><?php echo $services_faqs_button['title']; ?></span> <i>

                                        </i></a>
                                </div>
                            </div>
                        </div><?php 
                    }
                    ?>
                    <div class="col-md-6">
                        <div class="faq-accordian">
                            <div class="accordion" id="faqAccordion">
                                <?php 
                                while( have_rows('services_faqs_questions_answers') ) { the_row(); 
                                    $services_faqs_question = get_sub_field('services_faqs_question'); 
                                    $services_faqs_answer = get_sub_field('services_faqs_answer'); 
                                    if(!empty($services_faqs_question) && !empty($services_faqs_answer)) { ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading<?php echo get_row_index(); ?>">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse<?php echo get_row_index(); ?>" aria-expanded="true"
                                                    aria-controls="collapse<?php echo get_row_index(); ?>">
                                                    <?php echo $services_faqs_question; ?>
                                                </button>
                                            </h2>
                                            <?php $row_class = (get_row_index() == 1) ? 'show' : ''; ?>
                                            <div id="collapse<?php echo get_row_index(); ?>" class="accordion-collapse collapse <?php echo $row_class; ?>"
                                                aria-labelledby="heading<?php echo get_row_index(); ?>" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    <?php echo $services_faqs_answer; ?>
                                                </div>
                                            </div>
                                        </div><?php 
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php 
get_footer(); ?>