<?php /* Template Name: Home */ 

get_header(); ?>

<main>
    <section class="hero">
        <?php 
        $home_hero_background_video = get_field('home_hero_background_video'); 
        if(!empty($home_hero_background_video)) {?>
            <video autoplay muted loop playsinline preload="auto" class="bg-video">
                <source src="<?php echo $home_hero_background_video; ?>" type="video/mp4" />
            </video><?php 
        }
        ?>
        <div class="hero-overlay">
            <div class="container">
                <div class="hero-content">
                    <div class="content-left" data-aos="fade-up">
                        <?php 
                        $home_hero_main_title = get_field('home_hero_main_title'); 
                        if(!empty($home_hero_main_title)) { ?>                        
                            <h1><?php echo $home_hero_main_title; ?></h1><?php 
                        }
                        $home_hero_sub_title = get_field('home_hero_sub_title'); 
                        if(!empty($home_hero_sub_title)) { ?>
                            <p><?php echo $home_hero_sub_title; ?></p><?php 
                        }
                        $home_hero_book_consultation_button = get_field('home_hero_book_consultation_button'); 
                        if(!empty($home_hero_book_consultation_button)) { ?>
                            <div
                                class="hero-action btn-wrapper d-flex align-items-center justify-content-center justify-content-lg-start">
                                <a href="<?php echo $home_hero_book_consultation_button['url']; ?>" class="app-btn"><span><?php echo $home_hero_book_consultation_button['title']; ?></span> <i></i></a>
                            </div><?php 
                        }
                        ?>
                    </div>
                    <div class="hero-actions" data-aos="fade-left" data-aos-delay="300">
                        <div class="testimonial-content">
                            <?php 
                            $home_hero_confidence_faces_images = get_field('home_hero_confidence_faces_images'); 
                            if(!empty($home_hero_confidence_faces_images)) { ?>
                                <div class="circles" data-aos="zoom-in" data-aos-delay="500">
                                    <?php 
                                    foreach($home_hero_confidence_faces_images as $img) {?>
                                        <span><img src="<?php echo $img; ?>" alt="testimonial"></span><?php 
                                    }
                                    ?>                                    
                                </div><?php
                            } 
                            $home_hero_confidence_text = get_field('home_hero_confidence_text'); 
                            if(!empty($home_hero_confidence_text)) { ?>
                                <div class="confidence-count" data-aos="fade-up" data-aos-delay="700">
                                    <?php echo $home_hero_confidence_text; ?>
                                </div><?php 
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
    if(have_rows('home_all_trending')) { ?>
        <section class="service">
            <div class="container">
                <div class="section-title text-center" data-aos="fade-down">
                    <?php 
                    $home_trending_main_title = get_field('home_trending_main_title'); 
                    if(!empty($home_trending_main_title)) { ?>
                        <h2><?php echo $home_trending_main_title; ?></h2><?php 
                    }
                    $home_trending_sub_title = get_field('home_trending_sub_title'); 
                    if(!empty($home_trending_sub_title)) {?>
                    <p><?php echo $home_trending_sub_title; ?></p><?php 
                    }
                    ?>
                </div>
                <div class="service-container">
                    <div class="row g-4 g-xxl-5 justify-content-center">
                        <?php 
                        while( have_rows('home_all_trending') ) { the_row(); 
                            $home_trending_image = get_sub_field('home_trending_image'); 
                            $home_trending_button = get_sub_field('home_trending_button'); 
                            if(!empty($home_trending_button) && !empty($home_trending_image)) { ?>
                                <div class="col-sm-6 col-lg-4" data-aos="zoom-in" data-aos-delay="00">
                                    <div class="service-card">
                                        <div class="service-img">
                                            <img src="<?php echo $home_trending_image; ?>" alt="s-image">
                                        </div>
                                        <?php 
                                        if(!empty($home_trending_button)) { ?>
                                            <div class="service-action">
                                                <a href="<?php echo $home_trending_button['url']; ?>" class="service-link"><?php echo $home_trending_button['title']; ?></a>
                                            </div><?php 
                                        }
                                        ?>
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
    $home_cta_text = get_field('home_cta_text'); 
    if(!empty($home_cta_text)) {?>
        <section class="cta">
            <div class="container">
                <div class="cta-content">
                    <h2><?php echo $home_cta_text; ?></h2>
                </div>
            </div>
        </section><?php 
    }
    $home_spotlight_main_title = get_field('home_spotlight_main_title'); 
    $spotlights = get_field('home_all_spotlight');   
    if(!empty($spotlights)) {         
        $first  = array_slice($spotlights, 0, 3);
        $second = array_slice($spotlights, 3, 5);
        $third  = array_slice($spotlights, 8, 5);
        $fourth = array_slice($spotlights, 13, 5);?>
        <section class="tm-spolight">
            <div class="container-fluid">
                <div class="tm-container">
                    <div class="cc section-title text-white text-center">
                        <h2><?php echo $home_spotlight_main_title; ?></h2>
                    </div>
                    <div class="moving-col-wrapper title">
                        <div class="section-title">
                            <h2><?php echo $home_spotlight_main_title; ?></h2>
                        </div>
                        <div class="moving-col reverse">
                            <?php 
                            foreach ($first as $fitem) { ?>
                                <a href="<?php echo esc_url($fitem['home_all_spotlight_link']['url']); ?>" class="tm-card">
                                    <div class="tm-content">
                                        <h3 class="mb-3"><?php echo esc_html($fitem['home_all_spotlight_title']); ?></h3>
                                        <?php echo wp_kses_post($fitem['home_all_spotlight_content']); ?>
                                    </div>
                                    <img src="<?php echo esc_url($fitem['home_all_spotlight_image']); ?>" alt="tm-img">
                                    <div class="tm-name">
                                        <span><?php echo esc_html($fitem['home_all_spotlight_title']); ?></span>
                                    </div>
                                </a><?php 
                            }
                            ?>
                        </div>
                    </div>
                    <div class="moving-col-wrapper">
                        <div class="moving-col" id="scroll-content">
                            <?php 
                            foreach ($second as $sitem) { ?>
                                <a href="<?php echo esc_url($sitem['home_all_spotlight_link']['url']); ?>" class="tm-card">
                                    <div class="tm-content">
                                        <h3 class="mb-3"><?php echo esc_html($sitem['home_all_spotlight_title']); ?></h3>
                                        <?php echo wp_kses_post($sitem['home_all_spotlight_content']); ?>
                                    </div>
                                    <img src="<?php echo esc_url($sitem['home_all_spotlight_image']); ?>" alt="tm-img">
                                    <div class="tm-name">
                                        <span><?php echo esc_html($sitem['home_all_spotlight_title']); ?></span>
                                    </div>
                                </a><?php 
                            }
                            ?>
                        </div>
                    </div>
                    <div class="moving-col-wrapper">
                        <div class="moving-col reverse">
                            <?php 
                            foreach ($third as $titem) { ?>
                                <a href="<?php echo esc_url($titem['home_all_spotlight_link']['url']); ?>" class="tm-card">
                                    <div class="tm-content">
                                        <h3 class="mb-3"><?php echo esc_html($titem['home_all_spotlight_title']); ?></h3>
                                        <?php echo wp_kses_post($titem['home_all_spotlight_content']); ?>
                                    </div>
                                    <img src="<?php echo esc_url($titem['home_all_spotlight_image']); ?>" alt="tm-img">
                                    <div class="tm-name">
                                        <span><?php echo esc_html($titem['home_all_spotlight_title']); ?></span>
                                    </div>
                                </a><?php 
                            }
                            ?>
                        </div>
                    </div>
                    <div class="moving-col-wrapper">
                        <div class="moving-col">
                            <?php 
                            foreach ($fourth as $fitem) { ?>
                                <a href="<?php echo esc_url($fitem['home_all_spotlight_link']['url']); ?>" class="tm-card">
                                    <div class="tm-content">
                                        <h3 class="mb-3"><?php echo esc_html($fitem['home_all_spotlight_title']); ?></h3>
                                        <?php echo wp_kses_post($fitem['home_all_spotlight_content']); ?>
                                    </div>
                                    <img src="<?php echo esc_url($fitem['home_all_spotlight_image']); ?>" alt="tm-img">
                                    <div class="tm-name">
                                        <span><?php echo esc_html($fitem['home_all_spotlight_title']); ?></span>
                                    </div>
                                </a><?php 
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section><?php 
    }
    if(have_rows('home_all_transformations')) { ?>
        <section class="result">
            <div class="container">
                <?php 
                $home_transformations_main_title = get_field('home_transformations_main_title');
                $home_transformations_sub_title = get_field('home_transformations_sub_title'); 
                ?>
                <div class="section-title text-center">
                    <h2><?php echo $home_transformations_main_title; ?></h2>
                    <p><?php echo $home_transformations_sub_title; ?></p>
                </div>
            </div>
            <div class="switter-wrapper">
                <div class="swiper resultSwiper">
                    <div class="swiper-wrapper">
                        <?php 
                        while( have_rows('home_all_transformations') ) { the_row(); 
                            $home_transformations_befor_label = get_sub_field('home_transformations_befor_label'); 
                            $home_transformations_after_label = get_sub_field('home_transformations_after_label');
                            $home_transformations_image = get_sub_field('home_transformations_image'); 
                            if(!empty($home_transformations_image)) { ?>
                                <div class="swiper-slide">
                                    <div class="result-card">
                                        <img src="<?php echo $home_transformations_image; ?>" alt="result">
                                        <div class="result-content">
                                            <div class="result-wrapper">
                                                <p><?php echo $home_transformations_befor_label; ?></p>
                                                <p><?php echo $home_transformations_after_label; ?></p>
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
    if(have_rows('home_desktop_all_magazines') || have_rows('home_mobile_all_magazines')) { ?>
        <section class="magazine">
            <div class="container position-relative">
                <?php 
                $home_magazine_main_title = get_field('home_magazine_main_title');  ?>
                <div class="section-title text-center" data-aos="fade-down">
                    <h2 class="hide-text"><?php echo $home_magazine_main_title; ?></h2>
                </div>                
                <div class="book center d-none d-sm-block">
                    <?php 
                    while( have_rows('home_desktop_all_magazines') ) { the_row(); 
                        $home_desktop_all_magazines_front_page = get_sub_field('home_desktop_all_magazines_front_page'); 
                        $home_desktop_all_magazines_back_page = get_sub_field('home_desktop_all_magazines_back_page'); 
                        if(!empty($home_desktop_all_magazines_front_page) || !empty($home_desktop_all_magazines_back_page)) { ?>
                            <div class="sheet" id="sheet<?php echo get_row_index(); ?>">
                                <?php 
                                if(!empty($home_desktop_all_magazines_front_page) || !empty($home_desktop_all_magazines_back_page)) { ?>
                                    <div class="page front" id="page<?php echo get_row_index(); ?>">
                                        <img src="<?php echo $home_desktop_all_magazines_front_page; ?>" alt="Front Page 1" />
                                    </div><?php 
                                }
                                if(!empty($home_desktop_all_magazines_back_page)) {?>
                                    <div class="page back" id="firstPage">
                                        <img src="<?php echo $home_desktop_all_magazines_back_page; ?>" alt="Front Page 2" />
                                    </div><?php 
                                }
                                ?>
                            </div><?php 
                        }
                    }
                    ?>
                    <button class="book-open-btn">Open Magazine</button>                    
                </div>
                <div class="mobile-book d-block d-sm-none">
                    <?php 
                    while( have_rows('home_mobile_all_magazines') ) { the_row(); 
                        $home_mobile_all_magazines_image = get_sub_field('home_mobile_all_magazines_image'); 
                        if(!empty($home_mobile_all_magazines_image)) { ?>
                            <div class="book-page page-<?php echo get_row_index(); ?>">
                                <img src="<?php echo $home_mobile_all_magazines_image; ?>" alt="page" />
                            </div><?php 
                        }
                    }
                    ?>                    
                    <button class="reset-flip d-sm-none d-sm-none"><span>Back to page 1</span></button>
                </div>
                <?php 
                $home_magazine_button = get_field('home_magazine_button'); 
                if(!empty($home_magazine_button)) { ?>    
                    <div class="d-flex align-items-center justify-content-center mt-4 mt-md-5">
                        <a href="<?php echo $home_magazine_button['url']; ?>" class="app-btn black"><span><?php echo $home_magazine_button['title']; ?></span> <i></i></a>
                    </div><?php 
                }
                ?>
            </div>
        </section><?php 
    }
    
    if(have_rows('home_all_testimonials')) { ?>
        <section class="testimonial">
            <?php 
            $home_testimonial_main_title = get_field('home_testimonial_main_title'); ?>
            <div class="container">
                <div class="section-title">
                    <h2 class="text-center text-white"><?php echo $home_testimonial_main_title; ?></h2>
                </div>
            </div>
            <div class="switter-wrapper">
                <div class="swiper testimonialSwiper">
                    <div class="swiper-wrapper">
                        <?php 
                        while( have_rows('home_all_testimonials') ) { the_row(); 
                            $home_all_testimonials_name = get_sub_field('home_all_testimonials_name');
                            $home_all_testimonials_years = get_sub_field('home_all_testimonials_years');
                            $home_all_testimonials_stars = get_sub_field('home_all_testimonials_stars');
                            $home_all_testimonials_content = get_sub_field('home_all_testimonials_content');
                            $home_all_testimonials_image = get_sub_field('home_all_testimonials_image'); 
                            if(!empty($home_all_testimonials_name) || !empty($home_all_testimonials_content) || !empty($home_transformations_image)) { ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="user-info">
                                            <div class="user-avatar">
                                                <img src="<?php echo $home_all_testimonials_image; ?>" alt="">
                                            </div>
                                            <div class="user-name">
                                                <p><?php echo $home_all_testimonials_name; ?></p>
                                                <i><?php echo $home_all_testimonials_years; ?></i>
                                            </div>
                                        </div>
                                        <p><?php echo $home_all_testimonials_content; ?></p>
                                        <?php 
                                        $max_stars = 5; ?>
                                        <div class="star-group">
                                            <?php for ($i = 1; $i <= $max_stars; $i++): ?>
                                                <span class="star-fill<?php echo ($i > $home_all_testimonials_stars) ? ' white' : ''; ?>"></span>
                                            <?php endfor; ?>
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
    ?>
    <section class="faq">
        <div class="container">
            <div class="faq-container">
                <div class="row gy-4 align-items-center">
                    <?php 
                    $home_contact_us_main_title = get_field('home_contact_us_main_title'); 
                    $home_contact_us_content = get_field('home_contact_us_content');
                    $home_contact_us_button = get_field('home_contact_us_button'); 
                    if(!empty($home_contact_us_button) || !empty($home_contact_us_main_title)) { ?>                    
                        <div class="col-md-6">
                            <div class="faq-content">
                                <h2><?php echo $home_contact_us_main_title; ?></h2>
                                <p>
                                    <?php echo $home_contact_us_content; ?>
                                </p>
                                <?php 
                                if(!empty($home_contact_us_button)) { ?>
                                    <div class="mt-4 mt-md-5">
                                        <a href="<?php echo $home_contact_us_button['url']; ?>" class="mx-auto mx-md-0 app-btn black"><span><?php echo $home_contact_us_button['title']; ?></span> <i>

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
                                while( have_rows('home_all_faqs') ) { the_row(); 
                                    $home_all_faqs_question = get_sub_field('home_all_faqs_question'); 
                                    $home_all_faqs_answer = get_sub_field('home_all_faqs_answer'); 

                                    if(!empty($home_all_faqs_question) && !empty($home_all_faqs_answer)) { 
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
                                                    <?php echo $home_all_faqs_question; ?>
                                                </button>
                                            </h2>

                                            <div id="collapse<?php echo $row_index; ?>" class="accordion-collapse collapse <?php echo $is_first ? 'show' : ''; ?>"
                                                aria-labelledby="heading<?php echo $row_index; ?>" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    <?php echo $home_all_faqs_answer; ?>
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
<script>
  const sheets = document.querySelectorAll(".sheet");
  const book = document.querySelector(".book");
  const page1 = document.querySelector("#page1");
  const fPage = document.querySelector("#firstPage");
  const pages = document.querySelectorAll(".mobile-book .book-page");
  const openButtons = document.querySelectorAll(".book-open-btn");
  const resetBtn = document.querySelector(".reset-flip");

  // ===== Desktop Flip Logic =====
  sheets.forEach((sheet, index) => {
    sheet.style.zIndex = sheets.length - index;
    sheet.addEventListener("click", () => {
      const isFlipped = sheet.classList.contains("flipped");
      sheet.classList.toggle("flipped");
      setTimeout(() => {
        sheet.style.zIndex = isFlipped ? sheets.length - index : index;
      }, 300);
    });
  });

  // ===== Mobile Flip Logic =====
  pages.forEach((page, index) => {
    page.style.zIndex = pages.length - index;
    page.addEventListener("click", () => {
      page.classList.add("flip");
    });
  });

  // ===== Reset Button =====
  resetBtn.addEventListener("click", () => {
    sheets.forEach((sheet, index) => {
      sheet.classList.remove("flipped");
      sheet.style.zIndex = sheets.length - index;
    });

    pages.forEach((page, index) => {
      page.classList.remove("flip");
      page.style.zIndex = pages.length - index;
    });

    book.classList.add("center");
    book.classList.remove("right");

    openButtons.forEach(btn => {
      btn.style.display = "inline-block";
    });
  });

  // ===== Book Position Change via Pages =====
  page1.addEventListener("click", () => {
    book.classList.add("right");
    book.classList.remove("center");
  });

  fPage.addEventListener("click", () => {
    book.classList.add("center");
    book.classList.remove("right");

    openButtons.forEach(btn => {
      btn.style.display = "inline-block";
    });
  });

  // ===== Book Open Buttons =====
  openButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      const firstSheet = document.querySelector("#sheet1");
      if (firstSheet) {
        firstSheet.classList.add("flipped");
        setTimeout(() => {
          firstSheet.style.zIndex = 0;
        }, 300);
      }

      const firstMobilePage = document.querySelector("#mpage1");
      if (firstMobilePage) {
        firstMobilePage.classList.add("flip");
        setTimeout(() => {
          firstMobilePage.style.zIndex = 0;
        }, 300);
      }

      book.classList.add("right");
      book.classList.remove("center");
      btn.style.display = "none";
    });
  });
</script>
<?php
get_footer();
?>
