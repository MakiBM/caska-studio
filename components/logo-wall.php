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
    margin-top: 190px;
  }

  .logo-wall__container {
    width: var(--width-container);
    margin: 40px auto;
    padding: 0 40px;
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: 40px;
  }

  .logo-wall__logo-list {
    grid-column: span 7;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    padding: 16px 40px;
    justify-content: center;
    align-items: center;
    border-radius: 36px;
    background-color: #161614;
  }

  .logo-wall__logo {
    grid-column: span 1;
  }

  .logo-wall__content {
    grid-column: span 5;
    margin-left: calc(1 / 5 * 100% + 40px * 1 / 5);
    margin-top: 100px;
    margin-bottom: 100px;
    display: flex;
    flex-direction: column;
  }

  .logo-wall__title {
    font-family: var(--font-libre);
    font-size: 48px;
    line-height: 1.2;
    color: var(--color-foreground-1);
  }

  .logo-wall__text {
    margin-top: auto;
    font-size: 22px;
    color: var(--color-foreground-2);

    p + p {
      margin-top: 36px;
    }

    strong {
      font-weight: 400;
      color: var(--color-foreground-1);
    }
  }

  .logo-wall__button {
    margin-top: 94px;
    margin-bottom: 24px;
    padding: 28px 64px;
    width: fit-content;
    border-radius: 999px;
    background-color: var(--color-accent);
    color: var(--color-background-1);
    text-align: center;
    font-size: 24px;
  }
</style>