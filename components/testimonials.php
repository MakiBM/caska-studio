<section class="testimonials">
  <div class="testimonials__container">
    <div class="testimonials__bg-text">Realizacje</div>
    <h2 class="testimonials__title">Wybrane realizacje</h2>
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
</section>

<style>
  .testimonials {
    overflow: hidden;
  }

  .testimonials__container {
    position: relative;
    width: var(--width-container);
    margin: 40px auto;
    padding: 0 40px;
  }

  .testimonials__bg-text {
    margin-top: 46px;
    font-size: 330px;
    font-family: var(--font-fatface);
    line-height: 1.2;
    text-transform: uppercase;
    color: var(--color-foreground-1);
    opacity: 0.02;
  }

  .testimonials__title {
    margin-left: 100px;
    margin-top: -180px;
    margin-bottom: 120px;
    font-size: 64px;
    font-family: var(--font-libre);
    color: var(--color-foreground-1);
  }

  .testimonials__list {
    display: flex;
    gap: 40px;
  }

  .testimonials__item {
    &:nth-of-type(1) { width: calc(5 / 12 * 100%); }
    &:nth-of-type(2) { width: calc(3 / 12 * 100%); }
    &:nth-of-type(3) { width: calc(4 / 12 * 100%); }
  }

  .testimonials__image {
    border-radius: 36px;
    overflow: hidden;

    img { width: 100%; }
  }

  .testimonials__content {
    margin-top: 48px;
  }

  .testimonials__text {
    font-size: 24px;
    color: var(--color-foreground-2);
  }

  .testimonials__author {
    margin-top: 36px;
    font-size: 16px;
    font-weight: 600;
    color: var(--color-foreground-1);
  }

  .testimonials__signature {
    margin-top: 36px;
    width: 150px;
  }

  .testimonials__item {
    position: relative;

    &:nth-of-type(1) {
      padding-right: 40px;

      .testimonials__content {
        z-index: 1;
        position: absolute;
        top: 50%;
        left: 100px;
      }

      .testimonials__signature {
        width: 240px;
      }
    }
  } 
</style>