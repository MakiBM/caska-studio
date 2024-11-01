<section class="tag-cloud">
  <div class="tag-cloud__container">
    <h2 class="tag-cloud__bg-text">Podstawa sukcesu</h2>
    <div class="tag-cloud__grid">
      <div class="tag-cloud__content">
        <h3 class="tag-cloud__title">
          Twoja marka osobista <br>
          to podstawa sukcesu
        </h3>
        <p class="tag-cloud__text">
          Świat to 8 miliardów  monopoli. Nie ma drugiej takiej osoby jak Ty.
          Zastanówmy się  nad unikalnym wizerunkiem i uchwyćmy najlepszy wariant Ciebie.
          Jak cię widzą tak cię piszą.
        </p>
      </div>
      <div class="tag-cloud__tags">
        <img class="tag-cloud__pointer" src="/images/hand.svg" alt="Hand pointer">
        <ul class="tag-cloud__list">
          <li class="tag-cloud__item"># Reputacja</li>
          <li class="tag-cloud__item"># Rozpoznawalność</li>
          <li class="tag-cloud__item"># Tosamość</li>
          <li class="tag-cloud__item"># Zaufanie</li>
          <li class="tag-cloud__item"># Wartości</li>
          <li class="tag-cloud__item"># Wizerunek</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<style>
  .tag-cloud {
    margin-top: 120rem;
    overflow: hidden;
  }

  .tag-cloud__container {
    width: var(--width-container);
    margin: 40rem auto;
    padding: 0 40rem;
  }

  .tag-cloud__bg-text {
    font-size: 330rem;
    font-family: var(--font-fatface);
    line-height: 1.2;
    text-transform: uppercase;
    color: var(--color-foreground-1);
    opacity: 0.02;
    white-space: nowrap;
  }

  .tag-cloud__grid {
    position: relative;
    z-index: 1;
    margin-top: -160rem;
    display: grid;
    gap: 40rem;
    grid-template-columns: 2fr 1fr;
    grid-template-rows: 3fr 1fr;
    grid-template-areas:
      "a b"
      "a c"
    ;
  }

  .tag-cloud__content { grid-area: a; }
  .tag-cloud__tags { grid-area: b; }

  .tag-cloud__content {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 80rem 100rem;
    border-radius: 36rem;
    background-color: rgba(20,20,20, 0.02);
    border: 1rem solid rgba(230,230,230, 0.1);
    backdrop-filter: blur(10px);
  }

  .tag-cloud__title {
    font-family: var(--font-libre);
    font-size: 48rem;
    line-height: 1.2;
    color: var(--color-foreground-1);
  }

  .tag-cloud__text {
    font-size: 22rem;
    color: var(--color-foreground-2);
  }

  .tag-cloud__tags {
    position: relative;
    padding-top: 80rem;
    padding-left: 100rem;
  }

  .tag-cloud__pointer {
    position: absolute;
    top: 92rem;
    left: 20rem;
    width: 52rem;
    height: 32rem;
  }

  .tag-cloud__list {
    display: flex;
    flex-direction: column;
    gap: 16rem;
  }

  .tag-cloud__item {
    border-radius: 999px;
    padding: 10rem 24rem;
    background-color: rgba(101,132,194, 0.2);
    font-size: 24rem;
    color: var(--color-foreground-1);
    border: 1rem solid rgba(230,230,230, 0.1);
    width: fit-content;
  }

  @media (max-width: 1024px) {

    .tag-cloud {
      margin-top: 0;
    }

    .tag-cloud__container {
      max-width: clamp(320px, calc(100% - 128rem), calc(800px - 128rem));
      margin: 64rem auto;
      padding: 0;
    }

    .tag-cloud__bg-text {
      font-size: 120px;
    }

    .tag-cloud__grid {
      margin-top: -60px;
      gap: 0;
      display: flex;
      flex-direction: column;
    }

    .tag-cloud__content {
      padding: 36px 24px;
      border-radius: 24px;
      gap: 64px;
    }

    .tag-cloud__title {
      font-size: 24px;
    }

    .tag-cloud__text {
      font-size: 16px;
    }

    .tag-cloud__tags {
      padding-top: 110px;
      padding-left: 0;
    }

    .tag-cloud__pointer {
      top: 45px;
      left: 40px;
      width: 35px;
      height: 22px;
      transform: rotate(90deg);
    }

    .tag-cloud__list {
      flex-direction: row;
      flex-wrap: wrap;
      gap: 8px;
    }

    .tag-cloud__item {
      padding: 12px 18px;
      font-size: 16px;
    }
  }
</style>
