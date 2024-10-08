<?php

use CodeIgniter\Database\BaseUtils;
?>
<?= $this->extend('layout/main_layout') ?>

<?= $this->section('title') ?>
<?= $this->endSection() ?>

<?= $this->section('css') ?>
<?= $this->include('css/index_css') ?>
<?= $this->endSection() ?>

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
              <img src="<?= base_url('assets/images/index/minecraftguide.jpg') ?>" alt="">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card shadow">
              <img src="<?= base_url('assets/images/index/thevillage.jpg') ?>" alt="">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card shadow">
              <img src="<?= base_url('assets/images/index/shop1.jpg') ?>" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="container-btn text-center mt-4">
        <a class="viewProducts" href="product.html">
          <button>Browse Minecrafty Tim's Collection!</button>
        </a>
      </div>
    </div>
  </div>
</section>
<section style="background-color: #3C3C3C; color: #FFFFFF;">
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row row1 flex-lg-row align-items-center g-5 py-5 ml-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?= base_url('assets/images/index/minecraftarrival.png') ?>" class="d-block mx-lg-auto img-fluid" alt="Minecrafty Tim" width="600" height="600" loading="lazy">
      </div>
      <div class="coming-soon col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3" style="color: #00FF00;">Who is Minecrafty Tim?</h1>
        <p class="lead" style="color: #FFFFFF;">Minecrafty Tim is a passionate Minecraft enthusiast dedicated to bringing the best Minecraft collectibles to fans around the world. With a keen eye for quality and exclusivity, Tim curates a unique collection of figurines, posters, and other memorabilia that every Minecraft lover will cherish. Discover the story behind Minecrafty Tim and explore the world of Minecraft like never before!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection('content') ?>