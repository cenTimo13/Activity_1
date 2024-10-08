<?php

use CodeIgniter\Database\BaseUtils;
?>
<?= $this->extend('layout/main_layout') ?>

<?= $this->section('title') ?>

<?= $this->endSection('title') ?>
<?= $this->section('css') ?>
<?= $this->include('css/index_css') ?>
<?= $this->endSection('css') ?>

<?= $this->section('content') ?>
<section>
  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg row2">
      <div class="header col-lg-9 p-3 p-lg-5 pt-lg-3">
        <h1 class="headings display-4 fw-bold lh-1 text-body-emphasis">Discover Minecrafty Tim’s Exclusive Minecraft Collection</h1>
        <p class="lead mt-4">Dive into the world of Minecraft with our extensive range of figurines and collectibles. From the latest character figures to rare, limited-edition items, Minecrafty Tim offers everything you need to bring your favorite game to life. Showcase your love for Minecraft with our unique and high-quality products.</p>
      </div>
    </div>

    <div class="container mt-5">
      <h2 class="pb-2 border-bottom">Minecraft Collectibles!</h2>
      <div class="row designs row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3">
        <div class="col">
          <div class="card shadow-sm">
            <div class="card shadow">
              <img src="https://image.api.playstation.com/vulcan/ap/rnd/202405/2306/e940c07107a4cefbbedbbd53451e26f0dbf292dcfab6c307.png" alt="">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card shadow">
              <img src="https://i.ebayimg.com/images/g/kLYAAOSwuwJkNaXz/s-l1200.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card shadow">
              <img src="https://preview.redd.it/metaphor-refantazio-high-quality-poster-v0-tx2vj1xvl8wc1.jpeg?auto=webp&s=5d6dd13ff191638e666fdefaf0ec361cc73d70bd" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="container-btn text-center mt-4">
        <a class="viewProducts" href="product.html">
          <button>Browse games</button>
        </a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="album py-5 bg-body-tertiary row5">
    <h2 class="t-title">Message From The Devs!</h2>
    <div class="container testimonial">
      <div class="text-box t1">"Minecraft Tim is all about bringing the magic of Minecraft to life. Our goal is to create a unique experience for every player, with exclusive collectibles and in-game items that you won't find anywhere else." <span><br><br>- Jethro, Lead Developer</span></div>
      <div class="text-box t1">"We strive to offer the best selection of Minecraft merchandise, from rare figurines to limited-edition items. Our passion for the game drives us to provide top-quality products that every Minecraft fan will love." <span><br><br>- Timothy, Product Designer</span></div>
      <div class="text-box t1">"At Minecraft Tim, we are dedicated to enhancing your gaming experience. Our exclusive collectibles and in-game items are designed to add a special touch to your Minecraft adventures, making every moment memorable." <span><br><br>- Julius, Creative Director</span></div>
    </div>
  </div>
</section>

<section>
  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">What is Minecrafty Tim!</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div
          class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-star-fill"
            viewBox="0 0 16 16">
            <path
              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
          </svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Curated Collectibles</h3>
          <p>Discover a premium selection of Minecraft collectibles, handpicked to delight every fan.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div
          class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-brush-fill"
            viewBox="0 0 16 16">
            <path
              d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04z" />
          </svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Exclusive Items</h3>
          <p>Get your hands on limited-edition Minecraft items, available only at Minecrafty Tim.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div
          class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-headset"
            viewBox="0 0 16 16">
            <path
              d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
          </svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Dedicated Support</h3>
          <p>We are committed to providing top-notch service to ensure your Minecraft experience is always first-class.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section style="background-color: #3C3C3C; color: #FFFFFF;">
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row row1 flex-lg-row align-items-center g-5 py-5 ml-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://figurama-collectors.com/cdn/shop/products/03_76c2425f-2309-4248-998c-1264c4d37f13_5000x.png?v=1677490686" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
          height="500" loading="lazy">
      </div>
      <div class="coming-soon col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3" style="color: #00FF00;">Unlock Exclusive Collectibles with GameWorld</h1>
        <p class="lead" style="color: #FFFFFF;">Something big is coming to GameWorld! Get ready for the release of new limited-edition
          games and rare collectibles, both in-game and physical. Stay tuned for the launch, and be among the
          first to get your hands on these one-of-a-kind items!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection('content') ?>