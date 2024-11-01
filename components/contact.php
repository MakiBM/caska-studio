<section class="contact">
  <div class="contact__container">
    <div class="contact__image">
      <picture>
        <source media="(max-width: 1024px)" srcset="images/contact-mobile.jpg">
        <source srcset="images/contact.jpg">
        <img src="images/contact.jpg" alt="contact image">
      </picture>
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
    margin-top: 240rem;
  }

  .contact__container {
    position: relative;
    width: var(--width-container);
    margin: 40rem auto;
    padding: 0 40rem;
  }

  .contact__image {
    border-radius: 36rem;
    overflow: hidden;
    
    img {
      width: 100%;
      max-height: calc(100vh - 80rem);
      object-fit: cover;
    }
  }

  .contact__content {
    position: absolute;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    height: 100%;
    padding: 150rem 200rem;
  }

  .contact__title {
    text-transform: uppercase;
    font-size: 17rem;
    font-weight: 600;
    letter-spacing: 0.1em;
  }

  .contact__links {
    margin-top: auto;
    margin-bottom: 36rem;
    font-size: 48rem;
    font-family: var(--font-libre);
  }

  .contact__address {
    font-size: 24rem;
    font-style: normal;
  }

  @media (max-width: 1024px) {

    .contact {
      margin-top: 120px;
    }

    .contact__container {
      max-width: clamp(320px, calc(100% - 128rem), calc(800px - 128rem));
      max-height: calc(100vh - 128rem);
      margin: 64rem auto;
      padding: 0;
      border-radius: 24px;
      overflow: hidden;
    }

    .contact__image {
      border-radius: 24px;
    }

    .contact__content {
      position: static;
      padding: 0;
    }

    .contact__title {
      position: absolute;
      left: 100rem;
      top: 10%;
      font-size: 16px;
    }

    .contact__links {
      position: absolute;
      left: 100rem;
      top: 50%;
      margin-bottom: 1em;
      font-size: 26px;
    }
    
    .contact__address {
      position: absolute;
      left: 100rem;
      top: calc(50% + 140px);
      font-size: 18px;
      max-width: 160px;
    }
  }


  @media (max-width: 640px) {

    .contact__title {
      font-size: calc(1768 / 640 * 16rem);
    }

    .contact__links {
      font-size: calc(1768 / 640 * 26rem);
    }

    .contact__address {
      top: calc(50% + 1768 / 640 * 140rem);
      font-size: calc(1768 / 640 * 18rem);
      max-width: calc(1768 / 640 * 160rem);
    }
  }
</style>
