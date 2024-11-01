<section class="video-grid">
  <div class="video-grid__container">
    <div class="video-grid__video --video-1">
      <img class="video-grid__play" src="/images/play.svg" alt="Play video">
      <img class="video-grid__cover" src="/images/video-1.jpg" alt="Video 1">
    </div>
    <div class="video-grid__video --video-2">
      <img class="video-grid__play" src="/images/play.svg" alt="Play video">
      <img class="video-grid__cover" src="/images/video-2.jpg" alt="Video 2">
    </div>
    <div class="video-grid__content">
      <h2 class="video-grid__title">Sukces to złożona dziedzina</h2>
      <div class="video-grid__text">
        <p>Pokażemy dynamikę i balans między twoim życiem zawodowym i prywatnym, między wzlotami i upadkami, luzem i potem...</p>
        <p>Zadbamy aby twój image budził podziw i szacunek, nie pustą zazdrość.</p>
      </div>
    </div>
  </div>
</section>

<style>
  .video-grid {
    margin-top: 250rem;
  }

  .video-grid__container {
    width: var(--width-container);
    margin: 40rem auto;
    padding: 0 40rem;
    display: flex;
    flex-wrap: wrap;
    gap: 80rem;
  }

  /* Grid positioning */
  .video-grid__video.--video-1 {
    order: 1;
    width: 100%;
  }

  .video-grid__content {
    order: 2;
    width: calc(6 / 12 * 100% - 40rem);
    margin-left: 60rem;
    margin-right: calc(-1 / 12 * 100% - 60rem);
    position: relative;
    top: -240rem;
    z-index: 1;
  }

  .video-grid__video.--video-2 {
    order: 3;
    width: calc(7 / 12 * 100% - 40rem);
  }
  /* End of grid positioning */

  .video-grid__video {
    position: relative;
    border-radius: 36rem;
    overflow: hidden;
  }

  .video-grid__play {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 64rem;
    height: 64rem;
    transform: translate(-50%, -50%);
  }

  .video-grid__cover {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .video-grid__content {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 80rem 100rem;
    border-radius: 36rem;
    background-color: rgba(20,20,20, 0.02);
    border: 1rem solid rgba(230,230,230, 0.1);
    backdrop-filter: blur(10px);
  }

  .video-grid__title {
    font-family: var(--font-libre);
    font-size: 48rem;
    line-height: 1.2;
    color: var(--color-foreground-1);
  }

  .video-grid__text {
    font-size: 22rem;
    color: var(--color-foreground-2);

    p + p {
      margin-top: 36rem;
    }
  }

  @media (max-width: 1024px) {

    .video-grid {
      margin-top: 80px;
    }

    .video-grid__container {
      max-width: clamp(320px, calc(100% - 128rem), calc(600px - 128rem));
      margin: 64rem auto;
      padding: 0;
      gap: 12px;
    }

    /* Grid positioning */
    .video-grid__content {
      order: 3;
      width: 100%;
      margin-left: 0;
      margin-right: 0;
      margin-top: 18px;
      top: 0;
    }

    .video-grid__video.--video-2 {
      order: 2;
      width: 100%;
    }
    /* End of grid positioning */

    .video-grid__video {
      border-radius: 24px;
    }

    .video-grid__play {
      width: 64rem;
      height: 64rem;
    }

    .video-grid__content {
      padding: 36px 24px;
      border-radius: 24px;
      border: 1px solid rgba(230,230,230, 0.1);
    }

    .video-grid__title {
      font-size: 24px;
      margin-bottom: 48px;
    }

    .video-grid__text {
      font-size: 16px;

      p + p {
        margin-top: 24px;
      }
    }
  }
</style>