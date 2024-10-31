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
    margin-top: 250px;
  }

  .video-grid__container {
    width: var(--width-container);
    margin: 40px auto;
    padding: 0 40px;
    display: flex;
    flex-wrap: wrap;
    gap: 80px;
  }

  /* Grid positioning */
  .video-grid__video.--video-1 {
    order: 1;
    width: 100%;
  }

  .video-grid__content {
    order: 2;
    width: calc((6 / 12 * 100%) - 60px);
    margin-left: 60px;
    margin-right: calc((-1 / 12 * 100%) - 80px);
    position: relative;
    top: -240px;
    z-index: 1;
  }

  .video-grid__video.--video-2 {
    order: 3;
    width: calc(7 / 12 * 100%);
  }
  /* End of grid positioning */

  .video-grid__video {
    position: relative;
    border-radius: 36px;
    overflow: hidden;
  }

  .video-grid__play {
    position: absolute;
    top: 50%;
    left: 50%;
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
    padding: 80px 100px;
    border-radius: 36px;
    background-color: rgba(20,20,20, 0.02);
    border: 1px solid rgba(230,230,230, 0.1);
    backdrop-filter: blur(10px);
  }

  .video-grid__title {
    font-family: var(--font-libre);
    font-size: 48px;
    line-height: 1.2;
    color: var(--color-foreground-1);
  }

  .video-grid__text {
    font-size: 22px;
    color: var(--color-foreground-2);

    p + p {
      margin-top: 36px;
    }
  }
</style>