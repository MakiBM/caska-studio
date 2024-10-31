<section class="contact">
  <div class="contact__container">
    <div class="contact__image">
      <img src="/images/contact.jpg" alt="Contact">
    </div>
    <div class="contact__content">
      <div class="contact__title">Caska Studio</div>
      <div class="contact__links">
      <a href="mailto:info@caskastudio.pl">info@caskastudio.pl</a> <br>
      <a href="tel:+48533112466">+48 533112466</a> <br>
      <a href="tel:+48508153512">+48 508153512</a>
    </div>
      <address class="contact__address">ul. Lotników 35, 38-400 Krosno</address>
    </div>
  </div>
</section>

<style>
  .contact {
    margin-top: 240px;
  }

  .contact__container {
    position: relative;
    width: var(--width-container);
    margin: 40px auto;
    padding: 0 40px;
  }

  .contact__image {
    border-radius: 36px;
    overflow: hidden;
  }

  .contact__content {
    position: absolute;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    height: 100%;
    padding: 150px 200px;
  }

  .contact__title {
    text-transform: uppercase;
    font-size: 17px;
    font-weight: 600;
    letter-spacing: 0.1em;
  }

  .contact__links {
    margin-top: auto;
    margin-bottom: 36px;
    font-size: 48px;
    font-family: var(--font-libre);
  }

  .contact__address {
    font-size: 24px;
    font-style: normal;
  }
</style>
