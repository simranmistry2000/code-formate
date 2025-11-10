<?php /* Template Name: About */ 

get_header(); ?>

<main>
    <?php 
    $about_hero_main_title = get_field('about_hero_main_title'); 
    $about_hero_image = get_field('about_hero_image');
    if(have_rows('about_hero_content') || !empty($about_hero_image)) { ?>
        <section class="about-us-main position-relative d-flex flex-column">
            <div class="container position-relative order-1">
                <div class="row">
                    <div class="col-md-6">
                        <article class="service-hero-page-content about-us">
                            <h1><?php echo $about_hero_main_title; ?></h1>
                            <?php 
                            while( have_rows('about_hero_content') ) { the_row(); 
                                $about_hero_content_list = get_sub_field('about_hero_content_list'); 
                                if(!empty($about_hero_content_list)) { ?>
                                    <p class="copy">
                                        <?php echo $about_hero_content_list; ?>
                                    </p><?php 
                                }
                            }
                            ?>
                        </article>
                    </div>
                    <div class="col-lg-6">
                    </div>
                    <div class="mb-70"></div>
                </div>
            </div>
            <div class="service-hero-page-image about-us-hero order-0">
                <img src="<?php echo $about_hero_image; ?>" alt="hero">
            </div>
        </section><?php 
    }
    ?>
    <div class="empty-div mb-70"></div>
    <?php 
    if(have_rows('about_all_informations')) { ?>
        <section class="about-content-container">
            <div class="container">
                <?php 
                while( have_rows('about_all_informations') ) { the_row(); 
                    $about_all_informations_image = get_sub_field('about_all_informations_image'); 
                    $about_all_informations_name = get_sub_field('about_all_informations_name'); 
                    $about_all_informations_designation = get_sub_field('about_all_informations_designation'); 
                    if(!empty($about_all_informations_image) || !empty($about_all_informations_name) || !empty($about_all_informations_designation) || have_rows('about_all_informations_content_list')) { 
                        if(get_row_index() % 2 === 1) { ?>
                            <div class="row gy-4 align-items-center mb-5">
                                <div class="col-lg-5" data-aos="fade-right">
                                    <div class="founder-img">
                                        <img src="<?php echo $about_all_informations_image; ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                                    <div class="founder-content">
                                        <div class="founder-details">
                                            <p class="founder-name"><?php echo $about_all_informations_name; ?></p>
                                            <p class="content-copy"><?php echo $about_all_informations_designation; ?></p>
                                        </div>
                                        <article>
                                            <?php 
                                            while( have_rows('about_all_informations_content_list') ) { the_row(); 
                                                $about_all_informations_content = get_sub_field('about_all_informations_content'); 
                                                if(!empty($about_all_informations_content)) { ?>
                                                    <p class="content-copy"><?php echo $about_all_informations_content; ?></p><?php 
                                                }
                                            }
                                            ?>                                            
                                        </article>
                                    </div>
                                </div>
                            </div><?php 
                        } else { ?>
                            <!-- Founder 2: Dr. Puja Karnani Agarwal -->
                            <div class="row gy-4 align-items-center">
                                <div class="col-lg-7 order-1 order-lg-0" data-aos="fade-right">
                                    <div class="founder-content">
                                        <div class="founder-details">
                                            <p class="founder-name"><?php echo $about_all_informations_name; ?></p>
                                            <p class="content-copy"><?php echo $about_all_informations_designation; ?></p>
                                        </div>
                                        <article>
                                            <?php 
                                            while( have_rows('about_all_informations_content_list') ) { the_row(); 
                                                $about_all_informations_content = get_sub_field('about_all_informations_content'); 
                                                if(!empty($about_all_informations_content)) { ?>
                                                    <p class="content-copy"><?php echo $about_all_informations_content; ?></p><?php 
                                                }
                                            }
                                            ?>
                                        </article>
                                    </div>
                                </div>
                                <div class="col-lg-5 order-0 order-lg-1" data-aos="fade-left" data-aos-delay="200">
                                    <div class="founder-img right">
                                        <img src="<?php echo $about_all_informations_image; ?>" alt="">
                                    </div>
                                </div>
                            </div><?php
                        }
                    } 
                }
                ?>
            </div>
        </section><?php 
    }
    if(have_rows('about_all_features')) { ?>
        <section class="about-features">
            <div class="container">
                <div class="about-feature-container mx-auto">
                    <div class="row gy-4">
                        <?php                        
                        while( have_rows('about_all_features') ) { the_row(); 
                            $about_all_features_main_title = get_sub_field('about_all_features_main_title');
                            $about_all_features_content = get_sub_field('about_all_features_content'); 
                            $index = get_row_index(); // 1-based
                            $alignment_class = ($index % 2 === 0) ? 'fade-left' : 'fade-right';
                            if(!empty($about_all_features_content) || !empty($about_all_features_main_title)) { ?>                                                    
                                <div class="col-md-6">
                                    <div class="about-feature-card secondary-service-content">
                                        <p class="about-feature-heading"><?php echo $about_all_features_main_title; ?></p>
                                        <?php echo $about_all_features_content; ?>
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
    $about_cta_main_title = get_field('about_cta_main_title');
    $about_cta_button = get_field('about_cta_button');
    $about_cta_content = get_field('about_cta_content');
    $about_cta_image = get_field('about_cta_image'); 
    if(!empty($about_cta_image) || !empty($about_cta_content) || !empty($about_cta_main_title)) { ?>
        <section class="about-cta mb-70">
            <div class="container">
                <div class="about-cta-container mx-auto" data-aos="fade-up">
                    <div class="row gy-4 align-items-center justify-content-between">
                        <div class="col-md-6 col-lg-7 order-1 order-md-0">
                            <div class="glu-promo-content mb-3 mb-md-5">
                                <h2 class="text-white text-center text-md-start"><?php echo $about_cta_main_title; ?></h2>
                                <p class="content-copy text-white mt-3 text-center text-md-start"><?php echo $about_cta_content; ?></p>
                            </div>
                            <?php 
                            if(!empty($about_cta_button)) { ?>
                                <a href="<?php echo $about_cta_button['url'];?>" class="app-btn mx-auto mx-md-0">
                                    <span><?php echo $about_cta_button['title'];?></span><i></i>
                                </a><?php 
                            }
                            ?>
                        </div>
                        <div class="col-md-6 col-lg-4 order-0 order-md-1">
                            <div class="abt-logo mx-auto">
                                <img src="<?php echo $about_cta_image; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><?php 
    }
    ?>
</main>

<?php get_footer(); ?>