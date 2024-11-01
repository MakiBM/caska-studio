<section class="logo-wall">
  <div class="logo-wall__container">
    <div class="logo-wall__logo-list">
      <img class="logo-wall__logo" src="/images/logo-1.png" alt="Logo 1">
      <img class="logo-wall__logo" src="/images/logo-2.png" alt="Logo 2">
      <img class="logo-wall__logo" src="/images/logo-3.png" alt="Logo 3">
      <img class="logo-wall__logo" src="/images/logo-4.png" alt="Logo 4">
      <img class="logo-wall__logo" src="/images/logo-5.png" alt="Logo 5">
      <img class="logo-wall__logo" src="/images/logo-6.png" alt="Logo 6">
      <img class="logo-wall__logo" src="/images/logo-7.png" alt="Logo 7">
      <img class="logo-wall__logo" src="/images/logo-8.png" alt="Logo 8">
      <img class="logo-wall__logo" src="/images/logo-9.png" alt="Logo 9">
    </div>
    <div class="logo-wall__content">
      <h2 class="logo-wall__title">Twój biznes cię potrzebuje</h2>
      <div class="logo-wall__text">
        <p>Marka osobista jest zarodkiem marki firmowej. Zanim twój biznes uzyska niezależny brand, to właśnie z tobą będzie on utożsamiany.</p>  
        <p>Pomogliśmy już dziesiątkom firm. <br><strong>Teraz twoja kolej.</strong></p>
      </div>
      <a class="logo-wall__button" href="#">Sprawdź naszą ofertę</a>
    </div>
  </div>
</section>

<style>
  .logo-wall {
    margin-top: 190rem;
  }

  .logo-wall__container {
    width: var(--width-container);
    margin: 40rem auto;
    padding: 0 40rem;
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: 40rem;
  }

  .logo-wall__logo-list {
    grid-column: span 7;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20rem;
    padding: 16rem 40rem;
    justify-content: center;
    align-items: center;
    border-radius: 36rem;
    background-color: #161614;
  }

  .logo-wall__logo {
    grid-column: span 1;
  }

  .logo-wall__content {
    grid-column: span 5;
    margin-left: calc(1 / 5 * 100% + 40rem * 1 / 5);
    margin-top: 100rem;
    margin-bottom: 100rem;
    display: flex;
    flex-direction: column;
  }

  .logo-wall__title {
    font-family: var(--font-libre);
    font-size: 48rem;
    line-height: 1.2;
    color: var(--color-foreground-1);
  }

  .logo-wall__text {
    margin-top: auto;
    font-size: 22rem;
    color: var(--color-foreground-2);

    p + p {
      margin-top: 36rem;
    }

    strong {
      font-weight: 400;
      color: var(--color-foreground-1);
    }
  }

  .logo-wall__button {
    margin-top: 94rem;
    margin-bottom: 24rem;
    padding: 28rem 64rem;
    width: fit-content;
    border-radius: 999px;
    background-color: var(--color-accent);
    color: var(--color-background-1);
    text-align: center;
    font-size: 24rem;
  }

  @media (max-width: 1024px) {

    .logo-wall {
      margin-top: 80px;
    }

    .logo-wall__container {
      max-width: clamp(320px, calc(100% - 128rem), calc(800px - 128rem));
      margin: 64rem auto;
      padding: 0;
      display: flex;
      flex-direction: column;
      gap: 0;
    }

    .logo-wall__logo-list {
      order: 2;
      border-radius: 24px;
    }

    .logo-wall__content {
      margin-left: 0;
      margin-top: 0;
      margin-bottom: 0;
      padding: 36px 24px;
    }

    .logo-wall__title {
      font-size: 24px;
      margin-bottom: 48px;
    }

    .logo-wall__text {
      font-size: 16px;

      p + p {
        margin-top: 24px;
      }
    }

    .logo-wall__button {
      margin-top: 64px;
      margin-bottom: 48px;
      padding: 12px 32px;
      font-size: 16px;
    }
  }
</style>