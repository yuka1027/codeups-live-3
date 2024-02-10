<?php if(is_page('contact')): ?>
  <footer class="l-footer p-footer">
<?php else: ?>
  <footer class="p-footer">
<?php endif; ?>
  <div class="p-footer__inner">
    <nav class="p-footer__nav p-footer-nav">
      <div class="p-footer-nav__items">
        <li class="p-footer-nav__item">
          <a href="<?php echo esc_url(home_url('/')); ?>">home</a>
        </li>
        <li class="p-footer-nav__item">
          <a href="<?php echo esc_url(home_url('/news')); ?>">news</a>
        </li>
        <li class="p-footer-nav__item">
          <a href="<?php echo esc_url(home_url('/service')); ?>">service</a>
        </li>
        <li class="p-footer-nav__item">
          <a href="<?php echo esc_url(home_url('/works')); ?>">works</a>
        </li>
        <li class="p-footer-nav__item">
          <a href="<?php echo esc_url(home_url('/recruit')); ?>">recruit</a>
        </li>
        <li class="p-footer-nav__item">
          <a href="<?php echo esc_url(home_url('/contact')); ?>">contact</a>
        </li>
      </div>
    </nav>
    <div class="p-footer__copyright">
      <small>&copy;&nbsp;pon&nbsp;design</small>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>