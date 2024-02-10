<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header js-header">
    <div class="p-header__inner">
      <?php if(is_front_page()): ?>
        <h1 class="p-header__logo">
      <?php else: ?>
        <div class="p-header__logo">
      <?php endif; ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__logoLink">pon&nbsp;design</a>
      <?php if(is_front_page()): ?>
        </h1>
      <?php else: ?>
        </div>
      <?php endif; ?>
      <div class="p-header__drawer c-hamburger js-hamburger u-mobile">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="p-header__pc-nav p-pc-nav u-desktop">
        <ul class="p-pc-nav__items">
          <li class="p-pc-nav__item">
            <a href="<?php echo esc_url(home_url('/news')); ?>">news</a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php echo esc_url(home_url('/service')); ?>">service</a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php echo esc_url(home_url('/works')); ?>">works</a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php echo esc_url(home_url('/company')); ?>">company</a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php echo esc_url(home_url('/recruit')); ?>">recruit</a>
          </li>
          <li class="p-pc-nav__item">
            <a href="<?php echo esc_url(home_url('/contact')); ?>">contact</a>
          </li>
        </ul>
      </nav>
      <nav class="p-header__sp-nav p-sp-nav js-sp-nav">
        <ul class="p-sp-nav__items">
          <li class="p-sp-nav__item">
            <a href="<?php echo esc_url(home_url('/news')); ?>">news</a>
          </li>
          <li class="p-sp-nav__item">
            <a href="<?php echo esc_url(home_url('/service')); ?>">service</a>
          </li>
          <li class="p-sp-nav__item">
            <a href="<?php echo esc_url(home_url('/works')); ?>">works</a>
          </li>
          <li class="p-sp-nav__item">
            <a href="<?php echo esc_url(home_url('/company')); ?>">company</a>
          </li>
          <li class="p-sp-nav__item">
            <a href="<?php echo esc_url(home_url('/recruit')); ?>">recruit</a>
          </li>
          <li class="p-sp-nav__item">
            <a href="<?php echo esc_url(home_url('/contact')); ?>">contact</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>