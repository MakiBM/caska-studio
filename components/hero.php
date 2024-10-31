<section class="hero">
  <div class="hero__container">
    <div class="hero__image">
      <picture>
        <source media="(max-width: 1024px)" srcset="images/hero-mobile.jpg">
        <source srcset="images/hero.jpg">
        <img src="images/hero.jpg" alt="Hero image">
      </picture>
    </div>
    <h1 class="hero__title">Caska Studio</h1>
    <div class="hero__content">
      <h2 class="hero__subtitle">Pokaż się</h2>
      <p class="hero__text">Stwórzmy  twój  personal  brand   </p>
    </div>
  </div>
</section>

<style>
  .hero {
    color: var(--color-background-2);
  }

  .hero__container {
    position: relative;
    margin: 40rem auto;
    padding: 0 40rem;
    width: var(--width-container);
  }
  
  .hero__image {
    border-radius: 36rem;
    overflow: hidden;
  }

  .hero__title {
    position: absolute;
    top: 160rem;
    left: 420rem;
    text-transform: uppercase;
    font-size: 17rem;
    font-weight: 600;
    letter-spacing: 0.1em;
  }
  
  .hero__content {
    position: absolute;
    top: 0;
    left: 0;
    height: clamp(200rem, 100%, 100vh);
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  
  .hero__subtitle {
    font-family: var(--font-fatface);
    text-transform: uppercase;
    font-size: 240rem;
    letter-spacing: -0.04em;
    line-height: 1;
  }

  .hero__text {
    text-transform: uppercase;
    font-size: 17rem;
    font-weight: 600;
    letter-spacing: 1.3em;
    white-space: pre-wrap;
  }

  @media (max-width: 1024px) {
    
    .hero__container {
      max-width: clamp(320px, calc(100% - 128rem), calc(600px - 128rem));
      max-height: calc(100vh - 128rem);
      margin: 64rem auto;
      padding: 0;
      border-radius: 24px;
      overflow: hidden;
    }

    .hero__image {
      border-radius: 24px;
    }

    .hero__title {
      top: 50%;
      left: 50%;
      transform: translateX(-50%);
      font-size: 17px;
    }

    .hero__content {
      top: 55%;
      height: auto;
    }

    .hero__subtitle {
      font-size: 100px;
      line-height: 1.5;
    }

    .hero__text {
      font-size: 16px;
      letter-spacing: 0.3em;
      white-space: initial;
    }
  }

  @media (max-width: 640px) {

    .hero__subtitle {
      font-size: calc(1768 / 640 * 100rem);
    }

    .hero__title {
      font-size: calc(1768 / 640 * 17rem);
    }

    .hero__text {
      font-size: calc(1768 / 640 * 16rem);
    }
  }
</style>
