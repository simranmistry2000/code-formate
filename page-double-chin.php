<?php /* Template Name: Double Chin */ 

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
    if(have_rows('services_all_information')) { 
        while( have_rows('services_all_information') ) { the_row();
            $services_all_information_image = get_sub_field('services_all_information_image'); 
            $services_all_information_title = get_sub_field('services_all_information_title'); 
            if(!empty($services_all_information_image) || !empty($services_all_information_title) || have_rows('services_all_information_content')) { 
                if(get_row_index() % 2 !== 0 ) { ?>
                    <section class="service-info mt-4 mb-70">
                        <div class="container">
                            <div class="service-info-container">
                                <div class="row">
                                    <div class="col-lg-6 order-1 order-lg-0">
                                        <div class="service-info-content">
                                            <div class="service-info-item">
                                                <p class="content-title"><?php echo $services_all_information_title; ?></p>
                                                <?php 
                                                while( have_rows('services_all_information_content') ) { the_row();
                                                    $services_all_information_content_points = get_sub_field('services_all_information_content_points'); 
                                                    if(!empty($services_all_information_content_points)) { ?>
                                                        <p class="content-copy"><?php echo $services_all_information_content_points; ?>  </p><?php 
                                                    }
                                                }
                                                ?>                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 order-0 order-lg-1">
                                        <div class="service-info-img">
                                            <img src="<?php echo $services_all_information_image; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><?php 
                } else { ?>
                    <section class="service-info mt-4 mb-70">
                        <div class="container">
                            <div class="service-info-container">
                                <div class="row gx-0">
                                    <div class="col-lg-6">
                                        <div class="service-info-img">
                                            <img src="<?php echo $services_all_information_image; ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 grd-bg">
                                        <div class="service-info-content">
                                            <div class="service-info-item">
                                                <p class="content-title"><?php echo $services_all_information_title; ?></p>
                                                <?php 
                                                while( have_rows('services_all_information_content') ) { the_row();
                                                    $services_all_information_content_points = get_sub_field('services_all_information_content_points'); 
                                                    if(!empty($services_all_information_content_points)) { ?>
                                                        <p class="content-copy"><?php echo $services_all_information_content_points; ?>  </p><?php 
                                                    }
                                                }
                                                ?>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><?php 
                }
            }
        }
    } 
    $services_promotion_image = get_field('services_promotion_image'); 
    $services_promotion_main_title = get_field('services_promotion_main_title'); 
    if(have_rows('services_promotion_points') || !empty($services_promotion_image) || !empty($services_promotion_main_title)) { ?>
        <section class="service-info py-0 py-sm-4">
            <div class="container">
                <div class="secondary-service-container">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6">
                            <div class="secondary-service-img pe-0 pe-lg-5">
                                <img src="<?php echo $services_promotion_image; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="secondary-service-content">
                                <h3><?php echo $services_promotion_main_title; ?></h3>
                                <ul class="list-unstyled">
                                    <?php 
                                    while( have_rows('services_promotion_points') ) { the_row();
                                        $services_promotion_points_list = get_sub_field('services_promotion_points_list');
                                        if(!empty($services_promotion_points_list))  {?>
                                            <li><?php echo $services_promotion_points_list;  ?></li><?php  
                                        }
                                    }
                                    ?>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
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
            <?php 
            if(!empty($services_cta_button)) { ?>
                <a href="<?php echo $services_cta_button['url']; ?>" class="app-btn mx-auto" data-aos="zoom-in" data-aos-delay="200"
                    data-aos-duration="800">
                    <span><?php echo $services_cta_button['title']; ?></span><i></i>
                </a><?php 
            }
            ?>
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
                                <?php 
                                if(!empty($services_faqs_button)) { ?>
                                    <div class="mt-4 mt-md-5">
                                        <a href="<?php echo $services_faqs_button['url']; ?>" class="mx-auto mx-md-0 app-btn black"><span><?php echo $services_faqs_button['title']; ?></span> <i>

                                            </i></a>
                                    </div><?php 
                                }
                                ?>
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
                                    if(!empty($services_faqs_question) && !empty($services_faqs_answer)) { 
                                        $row_index = get_row_index();
                                        $is_first = ($row_index == 1);
                                        ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading<?php echo $row_index; ?>">
                                                <button class="accordion-button <?php echo $is_first ? '' : 'collapsed'; ?>" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse<?php echo $row_index; ?>" 
                                                    aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>"
                                                    aria-controls="collapse<?php echo $row_index; ?>">
                                                    <?php echo $services_faqs_question; ?>
                                                </button>
                                            </h2>

                                            <div id="collapse<?php echo $row_index; ?>" class="accordion-collapse collapse <?php echo $is_first ? 'show' : ''; ?>"
                                                aria-labelledby="heading<?php echo $row_index; ?>" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    <?php echo $services_faqs_answer; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
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