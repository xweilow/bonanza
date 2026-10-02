<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CA Flavor Sdn. Bhd. — Give Life to Foods</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

  <!-- TOPBAR -->
  <div class="topbar">
    <div class="topbar__inner container">
      <div class="topbar__contacts">
        <a href="tel:+60356218862" class="topbar__item">
          <span class="topbar__icon">&#9742;</span> +603-5621 8862
        </a>
        <a href="tel:+60356218863" class="topbar__item">
          <span class="topbar__icon">&#9742;</span> +603-5621 8863
        </a>
        <a href="mailto:info@flavor.com.my" class="topbar__item">
          <span class="topbar__icon">&#9993;</span> info@flavor.com.my
        </a>
      </div>
      <a href="#contact" class="btn btn--sm btn--outline-light">Request Sample</a>
    </div>
  </div>

  <!-- HEADER / NAV -->
  <header class="site-header" id="site-header">
    <div class="site-header__inner container">
      <a href="{{ url('/') }}" class="logo">
        <div class="logo__mark">CA</div>
        <div class="logo__text">
          <span class="logo__name">CA Flavor</span>
          <span class="logo__tagline">Sdn. Bhd.</span>
        </div>
      </a>

      <nav class="nav" aria-label="Primary navigation">
        <ul class="nav__list" id="navList">
          <li class="nav__item"><a href="#about" class="nav__link">About Us</a></li>
          <li class="nav__item nav__item--has-dropdown" id="productsMenu">
            <a href="#products" class="nav__link">
              Products <span class="nav__caret">&#9660;</span>
            </a>
            <ul class="nav__dropdown">
              <li><a href="{{ url('/bakery-confectionery') }}">Bakery &amp; Confectionery</a></li>
              <li><a href="#products">Beverage &amp; Cordial</a></li>
              <li><a href="#products">Dairy Products</a></li>
              <li><a href="#products">Oil &amp; Fats</a></li>
              <li><a href="#products">Savory &amp; Snack</a></li>
            </ul>
          </li>
          <li class="nav__item"><a href="#accreditation" class="nav__link">Accreditation</a></li>
          <li class="nav__item"><a href="#application" class="nav__link">Application</a></li>
          <li class="nav__item"><a href="#contact" class="nav__link">Contact Us</a></li>
        </ul>
      </nav>

      <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <!-- HERO CAROUSEL -->
  <section class="hero" aria-label="Featured highlights">
    <div class="hero__track" id="heroTrack">

      <div class="hero__slide hero__slide--1" aria-hidden="false">
        <div class="hero__overlay"></div>
        <div class="hero__content">
          <p class="hero__eyebrow">Welcome to CA Flavor</p>
          <h1 class="hero__heading">Give Life<br>to Foods</h1>
          <a href="#products" class="btn btn--lg btn--primary">Explore Products</a>
        </div>
      </div>

      <div class="hero__slide hero__slide--2" aria-hidden="true">
        <div class="hero__overlay"></div>
        <div class="hero__content">
          <p class="hero__eyebrow">Over 20 Years of Excellence</p>
          <h1 class="hero__heading">Crafting Flavors<br>with Precision</h1>
          <a href="#about" class="btn btn--lg btn--primary">Learn More</a>
        </div>
      </div>

      <div class="hero__slide hero__slide--3" aria-hidden="true">
        <div class="hero__overlay"></div>
        <div class="hero__content">
          <p class="hero__eyebrow">Halal &nbsp;|&nbsp; FSSC 22000 &nbsp;|&nbsp; ISO 22000</p>
          <h1 class="hero__heading">Quality You<br>Can Trust</h1>
          <a href="#contact" class="btn btn--lg btn--outline-light">Request Sample</a>
        </div>
      </div>

    </div>

    <button class="hero__btn hero__btn--prev" aria-label="Previous slide">&#8592;</button>
    <button class="hero__btn hero__btn--next" aria-label="Next slide">&#8594;</button>

    <div class="hero__dots" role="tablist" aria-label="Slide indicators">
      <button class="hero__dot is-active" role="tab" aria-selected="true" data-index="0" aria-label="Slide 1"></button>
      <button class="hero__dot" role="tab" aria-selected="false" data-index="1" aria-label="Slide 2"></button>
      <button class="hero__dot" role="tab" aria-selected="false" data-index="2" aria-label="Slide 3"></button>
    </div>
  </section>

  <!-- WELCOME SECTION -->
  <section class="welcome" id="about">
    <div class="container">
      <div class="welcome__grid">

        <div class="welcome__text">
          <p class="section-eyebrow">Welcome to CA Flavor</p>
          <h2 class="section-heading">Your Trusted Flavor<br>Manufacturing Partner</h2>
          <p class="welcome__body">
            Established in Selangor, Malaysia, CA Flavor Sdn. Bhd. has been delivering premium food flavoring solutions for over 20 years. We serve manufacturers across bakery, beverage, dairy, oil, and savory segments throughout Southeast Asia with state-of-the-art manufacturing facilities.
          </p>
          <p class="welcome__body">
            Every flavor we create is developed by our expert team using the finest ingredients, backed by rigorous quality control processes that meet the highest international food safety standards.
          </p>
          <div class="certifications">
            <span class="cert-badge">FSSC 22000</span>
            <span class="cert-badge">ISO 22000</span>
            <span class="cert-badge">HACCP</span>
            <span class="cert-badge">GMP</span>
            <span class="cert-badge cert-badge--halal">&#10003; Halal Certified</span>
          </div>
          <a href="#about" class="btn btn--primary">Read More</a>
        </div>

        <div class="welcome__image">
          <div class="welcome__img-frame">
            <img
              src="https://images.unsplash.com/photo-1542838132-92c53300491e?w=640&q=80"
              alt="Assorted food products showcasing CA Flavor applications"
              loading="lazy"
            >
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- PRODUCT CATEGORIES -->
  <section class="categories" id="products">
    <div class="container">
      <div class="categories__header">
        <p class="section-eyebrow">Our Product Range</p>
        <h2 class="section-heading">Explore Our Flavor Categories</h2>
        <p class="categories__subtitle">Over 500 flavor variants across five core application categories</p>
      </div>

      <div class="categories__grid">

        <article class="cat-card">
          <div class="cat-card__img cat-card__img--bakery"></div>
          <div class="cat-card__body">
            <h3 class="cat-card__title">Bakery &amp; Confectionery</h3>
            <ul class="cat-card__list">
              <li>Butter Flavour</li>
              <li>Vanilla Flavour</li>
              <li>Chocolate Flavour</li>
              <li>Strawberry Flavour</li>
              <li>Blueberry Flavour</li>
            </ul>
            <a href="{{ url('/bakery-confectionery') }}" class="cat-card__link">Read More &#8594;</a>
          </div>
        </article>

        <article class="cat-card">
          <div class="cat-card__img cat-card__img--beverage"></div>
          <div class="cat-card__body">
            <h3 class="cat-card__title">Beverage &amp; Cordial</h3>
            <ul class="cat-card__list">
              <li>Lychee Flavour</li>
              <li>Mango Flavour</li>
              <li>Passion Fruit Flavour</li>
              <li>Peach Flavour</li>
              <li>Watermelon Flavour</li>
            </ul>
            <a href="#products" class="cat-card__link">Read More &#8594;</a>
          </div>
        </article>

        <article class="cat-card">
          <div class="cat-card__img cat-card__img--dairy"></div>
          <div class="cat-card__body">
            <h3 class="cat-card__title">Dairy Products</h3>
            <ul class="cat-card__list">
              <li>Cheese Flavour</li>
              <li>Cream Flavour</li>
              <li>Milk Flavour</li>
              <li>Yogurt Flavour</li>
              <li>Butter Cream Flavour</li>
            </ul>
            <a href="#products" class="cat-card__link">Read More &#8594;</a>
          </div>
        </article>

        <article class="cat-card">
          <div class="cat-card__img cat-card__img--oil"></div>
          <div class="cat-card__body">
            <h3 class="cat-card__title">Oil &amp; Fats</h3>
            <ul class="cat-card__list">
              <li>Coconut Oil Flavour</li>
              <li>Corn Oil Flavour</li>
              <li>Margarine Flavour</li>
              <li>Palm Oil Flavour</li>
              <li>Shortening Flavour</li>
            </ul>
            <a href="#products" class="cat-card__link">Read More &#8594;</a>
          </div>
        </article>

        <article class="cat-card">
          <div class="cat-card__img cat-card__img--savory"></div>
          <div class="cat-card__body">
            <h3 class="cat-card__title">Savory &amp; Snack</h3>
            <ul class="cat-card__list">
              <li>BBQ Flavour</li>
              <li>Chicken Flavour</li>
              <li>Curry Flavour</li>
              <li>Prawn Flavour</li>
              <li>Sour Cream Flavour</li>
            </ul>
            <a href="#products" class="cat-card__link">Read More &#8594;</a>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- MOTIVATIONAL BANNER -->
  <section class="banner">
    <div class="container">
      <div class="banner__inner">
        <div class="logo__mark logo__mark--lg" aria-hidden="true">CA</div>
        <div class="banner__text">
          <h2 class="banner__heading">Make your food more flavorful</h2>
          <p class="banner__sub">Partner with CA Flavor — Malaysia's trusted flavoring specialist since 2000</p>
        </div>
        <a href="#contact" class="btn btn--lg btn--primary">Get in Touch</a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer" id="contact">
    <div class="container">
      <div class="footer__grid">

        <div class="footer__col">
          <h4 class="footer__heading">Visit Us</h4>
          <address class="footer__address">
            CA Flavor Sdn. Bhd. (123456-X)<br>
            No. 12, Jalan Industri 3/1,<br>
            Taman Industri Selesa Jaya,<br>
            47500 Subang Jaya,<br>
            Selangor, Malaysia.
          </address>
        </div>

        <div class="footer__col">
          <h4 class="footer__heading">Contact Us</h4>
          <ul class="footer__contact-list">
            <li><span>Tel:</span> <a href="tel:+60356218862">+603-5621 8862</a></li>
            <li><span>Tel:</span> <a href="tel:+60356218863">+603-5621 8863</a></li>
            <li><span>Fax:</span> <span>+603-5621 8864</span></li>
            <li><span>Email:</span> <a href="mailto:info@flavor.com.my">info@flavor.com.my</a></li>
            <li><span>Sales:</span> <a href="mailto:sales@flavor.com.my">sales@flavor.com.my</a></li>
          </ul>
        </div>

        <div class="footer__col">
          <h4 class="footer__heading">Quick Links</h4>
          <ul class="footer__links">
            <li><a href="#about">About Us</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="{{ url('/bakery-confectionery') }}">Bakery &amp; Confectionery</a></li>
            <li><a href="#accreditation">Accreditation</a></li>
            <li><a href="#application">Application</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>

      </div>

      <div class="footer__bottom">
        <p>&copy; {{ date('Y') }} CA Flavor Sdn. Bhd. All rights reserved.</p>
        <p>Flavor solutions for a better tomorrow.</p>
      </div>
    </div>
  </footer>

  <script>
    // --- Hero Carousel ---
    (function () {
      var track = document.getElementById('heroTrack');
      var slides = document.querySelectorAll('.hero__slide');
      var dots = document.querySelectorAll('.hero__dot');
      var current = 0;
      var timer;

      function goTo(index) {
        slides[current].setAttribute('aria-hidden', 'true');
        dots[current].classList.remove('is-active');
        dots[current].setAttribute('aria-selected', 'false');
        current = (index + slides.length) % slides.length;
        track.style.transform = 'translateX(-' + (current * 100) + '%)';
        slides[current].setAttribute('aria-hidden', 'false');
        dots[current].classList.add('is-active');
        dots[current].setAttribute('aria-selected', 'true');
      }

      document.querySelector('.hero__btn--prev').addEventListener('click', function () {
        clearInterval(timer); goTo(current - 1); startTimer();
      });
      document.querySelector('.hero__btn--next').addEventListener('click', function () {
        clearInterval(timer); goTo(current + 1); startTimer();
      });
      dots.forEach(function (dot) {
        dot.addEventListener('click', function (e) {
          clearInterval(timer); goTo(+e.currentTarget.dataset.index); startTimer();
        });
      });

      function startTimer() { timer = setInterval(function () { goTo(current + 1); }, 5000); }
      startTimer();
    })();

    // --- Mobile Nav Toggle ---
    (function () {
      var toggle = document.getElementById('navToggle');
      var navList = document.getElementById('navList');
      var productsMenu = document.getElementById('productsMenu');

      toggle.addEventListener('click', function () {
        var expanded = toggle.getAttribute('aria-expanded') === 'true';
        toggle.setAttribute('aria-expanded', !expanded);
        toggle.classList.toggle('is-open');
        navList.classList.toggle('is-open');
      });

      if (productsMenu) {
        productsMenu.querySelector('.nav__link').addEventListener('click', function (e) {
          if (window.innerWidth <= 768) {
            e.preventDefault();
            productsMenu.classList.toggle('is-open');
          }
        });
      }
    })();
  </script>

</body>
</html>
