@extends('layouts.main')


@section('content')
<!-- comon header ends  -->
<div class="banner-part">
    <div class="container">
      <div class="banner-div-content d-grid align-content-center">
        <div class="row  row-cols-1 row-cols-lg-2 align-items-center text-center text-lg-start justify-content-center flex-column-reverse flex-lg-row justify-content-lg-between">
          <div class="col">
            <h1 class="mb-3 mt-3 mt-lg-0"> 
              Создание продающих сайтов
            </h1>
            
            <p class="banner__txt mb-3">
                ✓ Адаптив под все устройства
              <br>
                ✓ Платформа WordPress
              <br>
                ✓&nbsp;Кроссбраузерность и быстродействие<br>
            </p>
            
            <a href="#" class="btn consult-bn" data-bs-toggle="modal" data-bs-target="#quickModal">Получить консультацию</a>
          </div>
          <div class="col">
            <figure>
              <img src="{{asset('plugins_site/images/pngwing.com%20%281%29.png')}}" alt="banner-img">
            </figure>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- section -->
<section class="total-body mobile-comon-animation pt-4 d-block">
    <div class="service-block">
      <div class="container">
        <h6 class="text-center " data-aos="fade-up">Наши услуги</h6>
        <h2 class="text-center " data-aos="fade-down">Что мы делаем</h2>
        <div class="row row-cols-1 row-cols-sm-2 g-lg-5  mt-0 row-cols-lg-3">
          <div class="col" data-aos="fade-left">
            <a href="#" class="comon-services text-center">
              <figure>
                <img src="{{asset('plugins_site/images/it-icon.png')}}" class="dissplay-show" alt="it">
                <img src="{{asset('plugins_site/images/it-icon-hover.png')}}" class="hover-show" alt="it">
              </figure>
              <h5>IT Solution</h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna
                aliqua </p>
              <h6> Read more <i class="fas fa-caret-right"></i> </h6>
            </a>
          </div>
          
          <div class="col " data-aos="fade-right">
            <a href="#" class="comon-services text-center">
              <figure>
                <img src="{{asset('plugins_site/images/web-icon.png')}}" class="dissplay-show" alt="it">
                <img src="{{asset('plugins_site/images/web-icon-hover.png')}}" class="hover-show" alt="it">
              </figure>
              <h5>Web Development</h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna
                aliqua </p>
              <h6> Read more <i class="fas fa-caret-right"></i> </h6>
            </a>
          </div>
          
          <div class="col " data-aos="fade-down">
            <a href="#" class="comon-services text-center">
              <figure>
                <img src="{{asset('plugins_site/images/network.png')}}" class="dissplay-show" alt="it">
                <img src="{{asset('plugins_site/images/network-hover.png')}}" class="hover-show" alt="it">
              </figure>
              <h5>Networking Services</h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna
                aliqua </p>
              <h6> Read more <i class="fas fa-caret-right"></i> </h6>
            </a>
          </div>
          
          <div class="col " data-aos="fade-up">
            <a href="#" class="comon-services text-center">
              <figure>
                <img src="{{asset('plugins_site/images/seo-icon.png')}}" class="dissplay-show" alt="it">
                <img src="{{asset('plugins_site/images/seo-icon-hover.png')}}" class="hover-show" alt="it">
              </figure>
              <h5>SEO Optimization</h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna
                aliqua </p>
              <h6> Read more <i class="fas fa-caret-right"></i> </h6>
            </a>
          </div>
          
          <div class="col " data-aos="fade-down">
            <a href="#" class="comon-services text-center">
              <figure>
                <img src="{{asset('plugins_site/images/apps-icon.png')}}" class="dissplay-show" alt="it">
                <img src="{{asset('plugins_site/images/apps-icon-hover.png')}}" class="hover-show" alt="it">
              </figure>
              <h5>App Optimization</h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna
                aliqua </p>
              <h6> Read more <i class="fas fa-caret-right"></i> </h6>
            </a>
          </div>
          
          <div class="col " data-aos="fade-up">
            <a href="#" class="comon-services text-center">
              <figure>
                <img src="{{asset('plugins_site/images/data-icon.png')}}" class="dissplay-show" alt="it">
                <img src="{{asset('plugins_site/images/data-icon-hover.png')}}" class="hover-show" alt="it">
              </figure>
              <h5>Data Recovery</h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna
                aliqua </p>
              <h6> Read more <i class="fas fa-caret-right"></i> </h6>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="about-block">
      <div class="about-svg">
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
          <path fill="#f6f8fd" fill-opacity="1"
            d="M0,160L40,176C80,192,160,224,240,250.7C320,277,400,299,480,288C560,277,640,235,720,224C800,213,880,235,960,234.7C1040,235,1120,213,1200,218.7C1280,224,1360,256,1400,272L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
          </path>
        </svg>
      </div>
      <div class="container">
        <div class="row g-lg-5 mt-4 row-cols-1 row-cols-lg-2 align-items-center">
          <div class="col " data-aos="fade-left">
            <figure>
              <img src="{{asset('plugins_site/images/rawpixel-567016-unsplash-copyright-min-1024x683.jpg')}}" alt="ab-pic">
            </figure>
          </div>
          <div class="col " data-aos="fade-right">
            <h6 class="mt-5 mt-lg-0">Biz haqimizda</h6>
            <h2> TeamDevs-Freelance Team</h2>
            <p>TeamDevs — это команда молодых специалистов, которые выбирают маркетинговую стратегию и план действий для продвижения вашего бизнеса, достижения эффективных результатов и выведения вашего бизнеса на лидирующие позиции с минимальными затратами.</p>
            <div class="skillset">
              <div class="skill-lockup">
                <span class="skill-name mb">Коммуникация</span><span class="skill-status">40%</span>
                <span class="skill-bar">
                  <span class="skill-level  communication"></span>
                </span>
              </div>
              <div class="skill-lockup mr">
                <span class="skill-name mb">Планирование</span><span class="skill-status">15%</span>
                <span class="skill-bar">
                  <span class="skill-level planning"></span>
                </span>
              </div>
              <div class="skill-lockup">
                <span class="skill-name mb">Обучение</span><span class="skill-status">45%</span>
                <span class="skill-bar">
                  <span class="skill-level learning"></span>
                </span>
              </div>
              <div class="skill-lockup mr">
                <span class="skill-name mb">Программирование</span><span class="skill-status">30%</span>
                <span class="skill-bar">
                  <span class="skill-level programming"></span>
                </span>
              </div>
            </div>
            <a href="#" class="btn read-more" data-bs-toggle="modal" data-bs-target="#quickModal"> Получить консультацию <i class="fas fa-caret-right"></i> </a>
          </div>
        </div>
      </div>
      <div class="about-svg-bt">
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
          <path fill="#f6f8fd" fill-opacity="1"
            d="M0,64L40,85.3C80,107,160,149,240,149.3C320,149,400,107,480,101.3C560,96,640,128,720,128C800,128,880,96,960,90.7C1040,85,1120,107,1200,144C1280,181,1360,235,1400,261.3L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
          </path>
        </svg>
      </div>
    </div>

    <div class="why-choose-block">
      <div class="container">
        <h6 class="text-center mt-5" data-aos="fade-up">Почему нужно выбрать нас?</h6>
        <h2 class="text-center text-6 mb-4" data-aos="fade-down">Наша сильная сторона в сервисе создания сайтов</h2>
        <div class="row justify-content-lg-start justify-content-center mb-3 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
          <div class="col-lg-10">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-7">
                <h3>Скоростной</h3>
                <p>Создайте и запустите свой веб-сайт в течение нескольких дней, чтобы помочь вам создать бизнес, повысить узнаваемость бренда и повысить доброжелательность ваших клиентов и целевой аудитории.</p>
              </div>
              <div class="col-lg-4" data-aos="fade-right">
                  <figure class="mb-0">
                    <img src="{{asset('plugins_site/images/icons/icon-1.png')}}" alt="bn">
                  </figure>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row justify-content-lg-end justify-content-center mb-3 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
          <div class="col-lg-10">
            <div class="row align-items-center justify-content-center flex-row-reverse">
              <div class="col-lg-7">
                <h3>Низкая цена</h3>
                <p>Предлагайте разумную цену на рынке от 300 ринггитов в месяц с высококачественными услугами по продвижению вашего бренда в Интернете с помощью тем профессионального качества, разработанных с использованием Webflow в качестве платформы.</p>
              </div>
              <div class="col-lg-4" data-aos="fade-left">
                  <figure class="mb-0">
                    <img src="{{asset('plugins_site/images/icons/icon-2.png')}}" alt="bn">
                  </figure>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row justify-content-lg-start justify-content-center mb-3 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
          <div class="col-lg-10">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-7">
                <h3>Полная поддержка вашего сайта</h3>
                <p>Создавайте веб-сайты, которые поддерживаются на всех устройствах, включая мобильные устройства, планшеты и ПК, чтобы еще больше расширить свое присутствие в Интернете, особенно на рынках Малайзии и Юго-Восточной Азии. Расширьте свой веб-сайт с помощью наших удобных настроек поисковой оптимизации (SEO) при создании своего веб-сайта.</p>
              </div>
              <div class="col-lg-4" data-aos="fade-right">
                  <figure class="mb-0">
                    <img src="{{asset('plugins_site/images/icons/icon-3.png')}}" alt="bn">
                  </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="our-work-details">
      <div class="our-work-svg">
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
          <path fill="#ffffff" fill-opacity="1"
            d="M0,32L80,58.7C160,85,320,139,480,154.7C640,171,800,149,960,149.3C1120,149,1280,171,1360,181.3L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
          </path>
        </svg>
      </div>
      <div class="container">
        <div class="row row-cols-1 row-cols-lg-4" data-aos="fade-up">
          <div class="col">
            <div class="comon-st-div">
              <i class="fas fa-award"></i>
              <h5> 10+ <span class="d-block"> Years Expreience </span> </h5>
            </div>
          </div>
          <div class="col">
            <div class="comon-st-div">
              <i class="fas fa-briefcase"></i>
              <h5> 180+ <span class="d-block"> Complete Projects </span> </h5>
            </div>
          </div>
          <div class="col">
            <div class="comon-st-div">
              <i class="far fa-smile-beam"></i>
              <h5> 205+ <span class="d-block"> Happy Clients </span> </h5>
            </div>
          </div>
          <div class="col">
            <div class="comon-st-div">

              <i class="fas fa-users"></i>
              <h5> 57+ <span class="d-block"> Employees </span> </h5>
            </div>
          </div>
        </div>
      </div>
      <div class="our-work-bg1">
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
          <path fill="#ffffff" fill-opacity="1"
            d="M0,192L80,181.3C160,171,320,149,480,149.3C640,149,800,171,960,170.7C1120,171,1280,149,1360,138.7L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
          </path>
        </svg>
      </div>
    </div>

    <div class="team-block padding_y-80">
      <div class="container">
        <h6 class="text-center mt-5 mt-lg-0 mainn-head " data-aos="fade-up">Участник команды</h6>
        <h2 class="text-center " data-aos="fade-down">Группа экспертов</h2>
        <div class="slide-team-div mt-5 " data-aos="fade-up">
          <div class="team-slid owl-carousel owl-theme">
            <div class="comon-team-div text-center">
              <figure>
                <img src="{{asset('plugins_site/images/teacher-11.jpg')}}" alt="te">
              </figure>
              <h5> Ava Farrington </h5>
              <h6> Founder, ceo </h6>
            </div>
            <div class="comon-team-div text-center">
              <figure>
                <img src="{{asset('plugins_site/images/a1.jpeg')}}" alt="te">
              </figure>
              <h5> Ava Farrington </h5>
              <h6> Founder, ceo </h6>
            </div>
            <div class="comon-team-div text-center">
              <figure>
                <img src="images/a2.jpg" alt="te">
              </figure>
              <h5> Ava Farrington </h5>
              <h6> Founder, ceo </h6>
            </div>
            <div class="comon-team-div text-center">
              <figure>
                <img src="images/a3.jpg" alt="te">
              </figure>
              <h5> Ava Farrington </h5>
              <h6> Founder, ceo </h6>
            </div>
            <div class="comon-team-div text-center">
              <figure>
                <img src="images/a5.jfif" alt="te">
              </figure>
              <h5> Ava Farrington </h5>
              <h6> Founder, ceo </h6>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="news-sec-div">
      <div class="container">
        <h6 class="text-center" data-aos="fade-down"> News & Articles </h6>
        <h2 class="text-center" data-aos="fade-up"> Our Latest Blogs </h2>
        <div class="news-sec-div-part " data-aos="fade-down">
          <div class="news-slid owl-carousel owl-theme">
            <div class="item">
              <div class="comon-news-part">
                <div class="comon-pic-news">
                  <figure class="position-relative">
                    <a href="#"> <img src="images/pexels-photo-5673488.jpeg" alt="picb"> </a>
                  </figure>

                </div>
                <div class="dtails-idv-text">
                  <ul class="list-unstyled d-flex">
                    <li>
                      <a href="#"> <i class="fa fa-user-alt"></i> Author </a>
                    </li>
                    <li>
                      <a href="#"> <i class="fas fa-calendar-week"></i> 20 June 2021 </a>
                    </li>
                  </ul>
                  <h5> Announcing Our New Smiles for Success Charity </h5>
                  <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                  <a href="#" class="btn read-more-bn text-uppercase"> read more </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="comon-news-part">
                <div class="comon-pic-news">
                  <figure class="position-relative">
                    <a href="#"> <img src="images/developing-a-web-solution-1024x660-1024x660.jpg" alt="picb"> </a>
                  </figure>

                </div>
                <div class="dtails-idv-text">
                  <ul class="list-unstyled d-flex">
                    <li>
                      <a href="#"> <i class="fa fa-user-alt"></i> Author </a>
                    </li>
                    <li>
                      <a href="#"> <i class="fas fa-calendar-week"></i> 20 June 2021 </a>
                    </li>
                  </ul>
                  <h5> Machine Learning Applications for Every </h5>
                  <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                  <a href="#" class="btn read-more-bn text-uppercase"> read more </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="comon-news-part">
                <div class="comon-pic-news">
                  <figure class="position-relative">
                    <a href="#"> <img src="images/pexels-photo-443383.jpeg" alt="picb"> </a>
                  </figure>

                </div>
                <div class="dtails-idv-text">
                  <ul class="list-unstyled d-flex">
                    <li>
                      <a href="#"> <i class="fa fa-user-alt"></i> Author </a>
                    </li>
                    <li>
                      <a href="#"> <i class="fas fa-calendar-week"></i> 20 June 2021 </a>
                    </li>
                  </ul>
                  <h5> Planning for a Safe Return to the Workplace IT Solutions </h5>
                  <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                  <a href="#" class="btn read-more-bn text-uppercase"> read more </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="comon-news-part">
                <div class="comon-pic-news">
                  <figure class="position-relative">
                    <a href="#"> <img src="images/pexels-photo-5673488.jpeg" alt="picb"> </a>
                  </figure>

                </div>
                <div class="dtails-idv-text">
                  <ul class="list-unstyled d-flex">
                    <li>
                      <a href="#"> <i class="fa fa-user-alt"></i> Author </a>
                    </li>
                    <li>
                      <a href="#"> <i class="fas fa-calendar-week"></i> 20 June 2021 </a>
                    </li>
                  </ul>
                  <h5> Machine Learning Applications for Every </h5>
                  <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                  <a href="#" class="btn read-more-bn text-uppercase"> read more </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="call-contact" data-aos="fade-down">
      <div class="call-svg">

        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
          <path fill="#ffffff" fill-opacity="1"
            d="M0,320L48,293.3C96,267,192,213,288,192C384,171,480,181,576,186.7C672,192,768,192,864,165.3C960,139,1056,85,1152,90.7C1248,96,1344,160,1392,192L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
          </path>
        </svg>
      </div>
      <div class="container">
        <h6 class="text-center"> Want To Work With Us? </h6>
        <h2 class="text-center"> Digitally transform and grow your business! </h2>
        <p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud consectetur voluptatem
          accusantium doloremque adipiscing elit.

        </p>

        <a href="#" class="btn get-bn d-table m-auto">Get Free Consultaion </a>

      </div>
      <div class="call-bn-svg d-none">
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
          <path fill="#ffffff" fill-opacity="1"
            d="M0,256L48,245.3C96,235,192,213,288,208C384,203,480,213,576,186.7C672,160,768,96,864,106.7C960,117,1056,203,1152,250.7C1248,299,1344,309,1392,314.7L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
          </path>
        </svg>
      </div>
    </div>

    <div class="client-block">
      <div class="container">
        <h6 class="text-center " data-aos="fade-down"> Trusted By Over 40,000</h6>
        <h2 class="text-center" data-aos="fade-up"> Our Customers </h2>
        <div
          class="row row-cols-1 row-cols-sm-2 row-cols-lg-5 mt-5 mt-lg-0 mb-5 g-lg-5 align-items-center justify-content-center">
          <div class="col " data-aos="fade-left">
            <div class="client-logo-cm">
              <img src="images/clogo6.png" alt="cl-logo1">
            </div>
          </div>
          <div class="col" data-aos="fade-down">
            <div class="client-logo-cm">
              <img src="images/clogo9.png" alt="cl-logo1">
            </div>
          </div>

          <div class="col" data-aos="fade-up">
            <div class="client-logo-cm">
              <img src="images/Client-Logo-20.png" alt="cl-logo1">
            </div>
          </div>

          <div class="col " data-aos="fade-right">
            <div class="client-logo-cm">
              <img src="images/metranet.png" alt="cl-logo1">
            </div>
          </div>

          <div class="col " data-aos="fade-down">
            <div class="client-logo-cm">
              <img src="images/awd-logo5.jpg" alt="cl-logo1">
            </div>
          </div>

          <div class="col" data-aos="fade-up">
            <div class="client-logo-cm">
              <img src="images/awd-logo.png" alt="cl-logo1">
            </div>
          </div>
          <div class="col" data-aos="fade-down">
            <div class="client-logo-cm">
              <img src="images/awd-logo2.jpg" alt="cl-logo1">
            </div>
          </div>

        </div>
      </div>
    </div>


  </section>
<!-- section -->
@endsection