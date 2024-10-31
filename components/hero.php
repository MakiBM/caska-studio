<section class="hero">
  <div class="hero__container">
    <div class="hero__image">
      <img src="images/hero.jpg" alt="">
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
    width: var(--width-container);
    margin: 40rem auto;
    padding: 0 40rem;
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
</style>