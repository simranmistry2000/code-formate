<?php /* Template Name: Bridal */ 

get_header(); ?>

<main>
    <?php 
    $bridal_hero_main_title = get_field('bridal_hero_main_title');
    $bridal_hero_sub_title = get_field('bridal_hero_sub_title');
    $bridal_hero_button = get_field('bridal_hero_button'); 
    $bridal_hero_image = get_field('bridal_hero_image'); 
    if(!empty($bridal_hero_main_title) || !empty($bridal_hero_sub_title) || !empty($services_hero_content) || !empty($bridal_hero_button)) { ?>
        <section class="bridal-hero" style="background-image: url('<?php echo $bridal_hero_image; ?>');">
            <div class="hero-overlay">
                <div class="container">
                    <div class="hero-content">
                        <article class="service-hero-page-content">
                            <h1 class="text-white"><?php echo $bridal_hero_main_title; ?></h1>
                            <p class="hero-tag-line"><?php echo $bridal_hero_sub_title; ?></p>
                            <div
                                class="hero-action btn-wrapper d-flex align-items-center justify-content-center justify-content-lg-start mt-4 mt-lg-5">
                                <a href="<?php echo $bridal_hero_button['url']; ?>" class="app-btn"><span><?php echo $bridal_hero_button['title']; ?></span> <i></i></a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section><?php 
    }
    $bridal_about_main_title = get_field('bridal_about_main_title');
    $bridal_about_content = get_field('bridal_about_content'); 
    if(!empty($bridal_about_main_title) || !empty($bridal_about_content)) { ?>
        <section class="service-intro">
            <div class="container">
                <p class="content-title text-center text-md-start"><?php echo $bridal_about_main_title; ?></p>
                <p class="content-copy text-center text-md-start"><?php echo $bridal_about_content; ?></p>
            </div>
        </section><?php 
    }
    $bridal_service_main_title = get_field('bridal_service_main_title');
    $bridal_service_content = get_field('bridal_service_content'); 
    $bridal_all_services = get_field('bridal_all_services');
    if(have_rows('bridal_all_services')) { ?>
        <section class="bridal-program py-70">
            <div class="container">
                <div class="section-title text-center mb-5">
                    <h2><?php echo $bridal_service_main_title; ?></h2>
                    <p><?php echo $bridal_service_content; ?></p>
                </div>
                <?php 
                $index = count(get_field('bridal_all_services'));
                while( have_rows('bridal_all_services') ) { the_row();  
                    $bridal_all_services_title = get_sub_field('bridal_all_services_title');
                    $bridal_all_services_best_for = get_sub_field('bridal_all_services_best_for');
                    $bridal_all_services_duration = get_sub_field('bridal_all_services_duration');
                    $bridal_all_services_image = get_sub_field('bridal_all_services_image');
                    $class = (get_row_index() !== $index) ? 'mb-70' : '';                  
                    if(!empty($bridal_all_services_title) || !empty($bridal_all_services_best_for) || !empty($bridal_all_services_duration) || have_rows('bridal_all_services_all_content')) {
                        if(get_row_index() % 2 === 1) {?>
                            <div class="service-info-container white <?php echo $class; ?>">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="service-info-img" style="height: 459px;">
                                            <img src="<?php echo $bridal_all_services_image; ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="service-info-content">
                                            <div class="service-info-item">
                                                <p class="content-title"><?php echo $bridal_all_services_title; ?></p>
                                                <div class="bridal">
                                                    <div class="sif-item gap-4 justify-content-start">
                                                        <p>Best For:</p> <span class="item-badge"><?php echo $bridal_all_services_best_for; ?></span>
                                                    </div>
                                                    <div class="sif-item gap-4 justify-content-start">
                                                        <p>Duration:</p> <span class="item-badge-outline"><?php echo $bridal_all_services_duration; ?></span>
                                                    </div>
                                                </div>
                                                <?php 
                                                while( have_rows('bridal_all_services_all_content') ) { the_row(); 
                                                    $bridal_all_services_all_content_title = get_sub_field('bridal_all_services_all_content_title');
                                                    if(!empty($bridal_all_services_all_content_title) || have_rows('bridal_all_services_all_content_all_points')) { ?>
                                                        <div class="bridal-items">
                                                            <p class="bridal-item-heading"><strong><?php echo $bridal_all_services_all_content_title; ?></strong></p>
                                                            <?php 
                                                            while( have_rows('bridal_all_services_all_content_all_points') ) { the_row(); 
                                                                $bridal_all_services_all_content_all_point = get_sub_field('bridal_all_services_all_content_all_point');
                                                                if(!empty($bridal_all_services_all_content_all_point)) {?>
                                                                    <p class="bridal-item-text">
                                                                       <?php echo $bridal_all_services_all_content_all_point; ?>
                                                                    </p><?php 
                                                                }
                                                            }
                                                            ?>
                                                        </div><?php 
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><?php 
                        } else { ?>
                            <div class="service-info-container white <?php echo $class; ?>">
                                <div class="row">
                                    <div class="col-lg-6 order-1 order-lg-0">
                                        <div class="service-info-content">
                                            <div class="service-info-item">
                                                <p class="content-title"><?php echo $bridal_all_services_title; ?></p>
                                                <div class="bridal">
                                                    <div class="sif-item gap-4 justify-content-start">
                                                        <p>Best For:</p> <span class="item-badge"><?php echo $bridal_all_services_best_for; ?></span>
                                                    </div>
                                                    <div class="sif-item gap-4 justify-content-start">
                                                        <p>Duration:</p> <span class="item-badge-outline"><?php echo $bridal_all_services_duration; ?></span>
                                                    </div>
                                                </div>
                                                <?php 
                                                while( have_rows('bridal_all_services_all_content') ) { the_row(); 
                                                    $bridal_all_services_all_content_title = get_sub_field('bridal_all_services_all_content_title');
                                                    if(!empty($bridal_all_services_all_content_title) || have_rows('bridal_all_services_all_content_all_points')) { ?>
                                                        <div class="bridal-items">
                                                            <p class="bridal-item-heading"><strong><?php echo $bridal_all_services_all_content_title; ?></strong></p>
                                                            <?php 
                                                            while( have_rows('bridal_all_services_all_content_all_points') ) { the_row(); 
                                                                $bridal_all_services_all_content_all_point = get_sub_field('bridal_all_services_all_content_all_point');
                                                                if(!empty($bridal_all_services_all_content_all_point)) {?>
                                                                    <p class="bridal-item-text">
                                                                       <?php echo $bridal_all_services_all_content_all_point; ?>
                                                                    </p><?php 
                                                                }
                                                            }
                                                            ?>
                                                        </div><?php 
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 order-0 order-lg-1">
                                        <div class="service-info-img" style="height: 459px;">
                                            <img src="<?php echo $bridal_all_services_image; ?>" alt="">
                                        </div>
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
    $bridal_cta_main_title = get_field('bridal_cta_main_title');
    $bridal_cta_button = get_field('bridal_cta_button'); 
    if(!empty($bridal_cta_main_title) || !empty($bridal_cta_button)) {?>
        <section class="service-cta">
            <div class="section-title text-center mb-2 mb-sm-3" data-aos="fade-up" data-aos-duration="500"
                data-aos-easing="ease-in-out">
                <h2 class="text-white"><?php echo $bridal_cta_main_title; ?></h2>
            </div>
            <a href="<?php echo $bridal_cta_button['url']; ?>" class="app-btn mx-auto" data-aos="zoom-in" data-aos-delay="200"
                data-aos-duration="800">
                <span><?php echo $bridal_cta_button['title']; ?></span><i></i>
            </a>
        </section><?php 
    }
    $bridal_why_choose_background_image = get_field('bridal_why_choose_background_image'); 
    $bridal_why_choose_image = get_field('bridal_why_choose_image');
    if(have_rows('bridal_why_choose_all_points')) { ?>
        <section class="bridal-why-choose-us" style="background-image: url('<?php echo $bridal_why_choose_background_image; ?>');">
            <div class="container position-relative">
                <div class="flower-image position-relative" >
                    <div class="pointer-box" data-aos="fade-left" data-aos-duration="1000">
                        <?php 
                        while( have_rows('bridal_why_choose_all_points') ) { the_row();  
                            $bridal_why_choose_all_points_text = get_sub_field('bridal_why_choose_all_points_text');
                            if(!empty($bridal_why_choose_all_points_text)) { ?>
                                <div class="bridal-point point-<?php echo get_row_index(); ?>"><?php echo $bridal_why_choose_all_points_text; ?></div><?php 
                            }
                        }
                        ?>
                    </div>
                    <img src="<?php echo $bridal_why_choose_image; ?>" alt="" class="img-fluid position-relative" data-aos="fade-right" data-aos-duration="1000">
                </div>
            </div>
        </section><?php 
    }
    ?>
</main>

<?php get_footer(); ?>