<?php /* Template Name: Face GFC And PRP */ 

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
                        <?php 
                        if(!empty($services_hero_button)) { ?>
                            <div class="d-flex align-items-center justify-content-center justify-content-md-start"
                                data-aos="fade-up">
                                <a href="<?php echo $services_hero_button['url']; ?>" class="app-btn black"><span><?php echo $services_hero_button['title']; ?></span> <i></i></a>
                            </div><?php 
                        }
                        ?>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>
            </div>
            <div class="service-hero-page-image order-0">
                <img src="<?php echo $services_hero_image; ?>" alt="">
            </div>
        </section>
        <div class="mb-70"></div><?php 
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
    $services_facial_aware_items_title = get_field('services_facial_aware_items_title');
    $services_facial_aware_image = get_field('services_facial_aware_image'); 
    if(!empty($services_facial_aware_image) || !empty($services_facial_aware_items_title) || have_rows('services_facial_aware_items_content') ) { ?>
        <section class="service-info py-0 py-sm-4">
            <div class="container">
                <div class="secondary-service-container">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6 order-1 order-lg-0">
                            <div class="secondary-service-content pe-0 pe-lg-3">
                                <h3><?php echo $services_facial_aware_items_title; ?></h3>
                                <?php 
                                while( have_rows('services_facial_aware_items_content') ) { the_row();
                                    $services_facial_aware_items_content_points = get_sub_field('services_facial_aware_items_content_points'); 
                                    if(!empty($services_facial_aware_items_content_points)) { ?>
                                        <p>
                                            <?php echo $services_facial_aware_items_content_points; ?>
                                        </p><?php 
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1">
                            <div class="secondary-service-img">
                                <img src="<?php echo $services_facial_aware_image; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><?php 
    }
    $services_best_work_main_title = get_field('services_best_work_main_title'); 
    if(!empty($services_best_work_main_title) || have_rows('services_all_best_works') ) {?>
        <section class="result best-of">
            <div class="container">
                <div class="section-title text-center">
                    <h2><?php echo $services_best_work_main_title; ?></h2>
                </div>
                <div class="best-of-container">
                    <?php 
                    while( have_rows('services_all_best_works') ) { the_row();
                        $services_all_best_works_image = get_sub_field('services_all_best_works_image');
                        $services_all_best_works_main_title = get_sub_field('services_all_best_works_main_title');
                        if(!empty($services_all_best_works_main_title) && !empty($services_all_best_works_image)) { ?>
                            <div class="best-of-box" data-aos="fade-up">
                                <div class="result-card">
                                    <img src="<?php echo $services_all_best_works_image; ?>" alt="result">
                                    <div class="result-content">
                                        <p><?php echo $services_all_best_works_main_title; ?></p>
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
    if(have_rows('services_all_myth_section')) { ?>
        <section class="myth-brust">
            <div class="container">
                <div class="myth-brust-container">
                    <?php 
                    $value = 100;
                    while( have_rows('services_all_myth_section') ) { the_row();
                        $services_all_myth_section_frontend = get_sub_field('services_all_myth_section_frontend');
                        $services_all_myth_section_backend = get_sub_field('services_all_myth_section_backend');
                        if(!empty($services_all_myth_section_backend) && !empty($services_all_myth_section_frontend)) {?>
                            <div class="myth-brust-card" data-aos="fade-up" data-aos-delay="<?php echo $value; ?>"
                                data-myth="<?php echo $services_all_myth_section_frontend; ?>">
                                <canvas width="250" height="289"></canvas>
                                <img src="<?php echo $services_all_myth_section_backend; ?>" alt="fact" class="fact-img" />
                            </div><?php 
                        }
                        $value += 50;
                    }
                    ?>                    
                </div>
            </div>
        </section>  <?php
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
<script>
    document.querySelectorAll('.myth-brust-card').forEach((card) => {
        const canvas = card.querySelector('canvas');
        const ctx = canvas.getContext('2d');
        const factImg = card.querySelector('.fact-img');
        const mythSrc = card.getAttribute('data-myth');
        const img = new Image();
        img.crossOrigin = "Anonymous";
        img.src = mythSrc;

        let animationFrame;
        let particles = [];
        let imageDataOriginal;

        img.onload = () => {
            ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
            // Save the initial state
            imageDataOriginal = ctx.getImageData(0, 0, canvas.width, canvas.height);
        };

        function createParticles() {
            const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
            particles = [];

            for (let y = 0; y < canvas.height; y += 4) {
                for (let x = 0; x < canvas.width; x += 4) {
                    const index = (y * canvas.width + x) * 4;
                    const r = imageData.data[index];
                    const g = imageData.data[index + 1];
                    const b = imageData.data[index + 2];
                    const a = imageData.data[index + 3];

                    if (a > 0) {
                        particles.push({
                            x,
                            y,
                            vx: (Math.random() - 1) * 2,
                            vy: (Math.random() - 1) * 2,
                            alpha: 1,
                            size: 4,
                            color: `rgba(${r},${g},${b},${a / 255})`,
                        });
                    }
                }
            }
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach((p) => {
                p.x += p.vx;
                p.y += p.vy;
                p.alpha -= 0.020;

                if (p.alpha > 0) {
                    ctx.fillStyle = p.color.replace(/[^,]+(?=\))/, p.alpha.toFixed(2));
                    ctx.fillRect(p.x, p.y, p.size, p.size);
                }
            });

            if (particles.some(p => p.alpha > 0)) {
                animationFrame = requestAnimationFrame(animate);
            } else {
                factImg.style.opacity = 1;
            }
        }

        card.addEventListener('click', () => {
            cancelAnimationFrame(animationFrame);
            factImg.style.opacity = 0;
            ctx.putImageData(imageDataOriginal, 0, 0);
            createParticles();
            animate();
        });
    });
</script>