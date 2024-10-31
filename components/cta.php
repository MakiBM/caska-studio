<section class="cta">
  <div class="cta__container">
    <div class="cta__content">
      <h2 class="cta__title">W Caska Studio tworzymy język identyfikacji wizualnej dla brandów osobistych. </h2>
      <p class="cta__text">Opracujemy i zrealizujemy dla ciebie wizerunek odpowiadający twojej roli, ambicji i wyzwaniom. Liderzy nie pozostają w cieniu.</p>
    </div>
    <div class="cta__image">
      <img src="images/cta.jpg" alt="">
    </div>
    <a href="" class="cta__button">
      Sprawdź naszą ofertę
    </a>
  </div>
</section>

<style>
  .cta__container {
    position: relative;
    width: var(--width-container);
    margin: 40px auto;
    padding: 0 40px;
    display: grid;
    gap: 40px;
    grid-template-columns: 2fr 1fr;
    grid-template-rows: 3fr 1fr;
    grid-template-areas:
      "a b"
      "a c"
    ;
  }

  .cta__content { grid-area: a; }
  .cta__image { grid-area: b; }
  .cta__button { grid-area: c; }

  .cta__content {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 80px 100px;
    border-radius: 36px;
    background-color: var(--color-background-3);
  }
  
  .cta__title {
    font-family: var(--font-libre);
    font-size: 48px;
    line-height: 1.2;
    color: var(--color-foreground-1);
  }

  .cta__text {
    font-size: 22px;
    color: var(--color-foreground-2);
  }

  .cta__image {
    border-radius: 36px;
    overflow: hidden;
  }

  .cta__button {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: var(--color-accent);
    border-radius: 36px;
    font-size: 22px;
    color: var(--color-background-2);
  }
</style>