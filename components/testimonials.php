<section class="testimonials">
  <div class="testimonials__container">
    <div class="testimonials__bg-text">Realizacje</div>
    <h2 class="testimonials__title">Wybrane realizacje</h2>
  </div>
  <div class="testimonials__scroll">
  <div class="testimonials__container">
      <ul class="testimonials__list">
        <li class="testimonials__item">
        <div class="testimonials__image">
          <img src="images/testimonials-1.jpg" alt="">
        </div>
        <div class="testimonials__content">
          <div class="testimonials__text">
            Najważniejsze są brwi. <br>
            Smutna buzia w kapeluszu.
          </div>
          <div class="testimonials__author">
            Zygmuny Chrobry
          </div>
          <div class="testimonials__signature">
            <img src="images/signature.svg" alt="">
          </div>
        </div>
      </li>
      <li class="testimonials__item">
        <div class="testimonials__image">
          <img src="images/testimonials-2.jpg" alt="">
        </div>
        <div class="testimonials__content">
          <div class="testimonials__text">
            Najważniejsze są brwi. <br>
            Smutna buzia w kapeluszu.
          </div>
          <div class="testimonials__author">
            Zygmuny Chrobry
          </div>
          <div class="testimonials__signature">
            <img src="images/signature.svg" alt="">
          </div>
        </div>
      </li>
      <li class="testimonials__item">
        <div class="testimonials__image">
          <img src="images/testimonials-3.jpg" alt="">
        </div>
        <div class="testimonials__content">
          <div class="testimonials__text">
            Najważniejsze są brwi. <br>
            Smutna buzia w kapeluszu.
          </div>
          <div class="testimonials__author">
            Zygmuny Chrobry
          </div>
          <div class="testimonials__signature">
            <img src="images/signature.svg" alt="">
          </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<style>
  .testimonials {
    overflow: hidden;
  }

  .testimonials__container {
    position: relative;
    width: var(--width-container);
    margin: 40rem auto;
    padding: 0 40rem;
  }

  .testimonials__bg-text {
    margin-top: 46rem;
    font-size: 330rem;
    font-family: var(--font-fatface);
    line-height: 1.2;
    text-transform: uppercase;
    color: var(--color-foreground-1);
    opacity: 0.02;
  }

  .testimonials__title {
    margin-left: 100rem;
    margin-top: -180rem;
    margin-bottom: 120rem;
    font-size: 64rem;
    font-family: var(--font-libre);
    color: var(--color-foreground-1);
  }

  .testimonials__scroll {
    overflow-x: auto;
    scrollbar-width: none;
    -ms-overflow-style: none;

    &::-webkit-scrollbar {
      display: none;
    }
  }

  .testimonials__list {
    display: flex;
    gap: 40rem;
  }

  .testimonials__item {
    position: relative;

    &:nth-of-type(1) { width: calc(5 / 12 * 100%); }
    &:nth-of-type(2) { width: calc(3 / 12 * 100%); }
    &:nth-of-type(3) { width: calc(4 / 12 * 100%); }

    &:nth-of-type(1) {
      padding-right: 40rem;

      .testimonials__content {
        z-index: 1;
        position: absolute;
        top: 50%;
        left: 100rem;
      }

      .testimonials__signature {
        width: 240rem;
      }
    }
  }

  .testimonials__image {
    border-radius: 36rem;
    overflow: hidden;

    img { width: 100%; }
  }

  .testimonials__content {
    margin-top: 48rem;
  }

  .testimonials__text {
    font-size: 24rem;
    color: var(--color-foreground-2);
  }

  .testimonials__author {
    margin-top: 36rem;
    font-size: 16rem;
    font-weight: 600;
    color: var(--color-foreground-1);
  }

  .testimonials__signature {
    margin-top: 36rem;
    width: 150rem;
  }

  @media (max-width: 1024px) {

    .testimonials__container {
      max-width: clamp(320px, calc(100% - 128rem), calc(600px - 128rem));
      margin: 64rem auto;
      padding: 0;
    }

    .testimonials__bg-text {
      margin-top: 24px;
      font-size: 120px;
    }

    .testimonials__title {
      margin-left: 20px;
      margin-top: -80px;
      margin-bottom: 80rem;
      font-size: 36px;
    }

    .testimonials__list {
      gap: 24px;
      width: fit-content;
    }

    .testimonials__item {
      flex-shrink: 0;

      &:nth-of-type(1) { width: clamp(280px, 70vw, 400px); }
      &:nth-of-type(2) { width: clamp(280px, 70vw, 400px); }
      &:nth-of-type(3) { width: clamp(280px, 70vw, 400px); }

      &:nth-of-type(1) {
        padding-right: 0;

        .testimonials__content {
          position: static;
        }
      }
    }

    .testimonials__image {
      border-radius: 24px;
    }

    .testimonials__content {
      margin-top: 48px;
    }

    .testimonials__text {
      font-size: 18px;
    }

    .testimonials__author {
      margin-top: 36px;
      font-size: 16px;
    }

    .testimonials__signature {
      margin-top: 36px;
      width: 400rem !important;
    }
  }
</style>