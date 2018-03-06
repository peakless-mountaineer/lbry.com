<?php
Response::setCssAssets(['/css/yt2.css']);
Response::addJsAsset('/js/yt2/TweenMax.min.js');
Response::addJsAsset('/js/yt2/ScrollToPlugin.min.js');
Response::addJsAsset('/js/yt2/app.js');
Response::addJsAsset('/js/yt2/FormValidation.js');
Response::addJsAsset('/js/yt2/SyncStatus.js');
$reward = LBRY::youtubeReward();
?>
<main>
  <?php echo View::render('acquisition/_youtube_header') ?>
<section class="hero">
  <div class="shape">
    <svg style="width: 100%; height: 100%;">
      <path d="M 0,0" stroke="#2F3C5C" stroke-width="0.3px" fill="none" data-from="-1" />
      <path d="M 0,0" stroke="#2F3C5C" stroke-width="0.3px" fill="none" data-from="0" />
      <path d="M 0,0" stroke="#2F3C5C" stroke-width="0.3px" fill="none" data-from="0" />
      <path d="M 0,0" stroke="#2F3C5C" stroke-width="0.3px" fill="none" data-from="1" />
      <path d="M 0,0" stroke="#2F3C5C" stroke-width="0.3px" fill="none" data-from="1" />
      <path d="M 0,0" stroke="#2F3C5C" stroke-width="0.3px" fill="none" data-from="2" />
      <path d="M 0,0" stroke="#2F3C5C" stroke-width="0.3px" fill="none" data-from="2" />
      <path d="M 0,0" stroke="#2F3C5C" stroke-width="0.3px" fill="none" data-from="2" />
    </svg>
    <div class="circle one"></div>
    <div class="circle two"></div>
    <div class="circle three"></div>
    <div class="dot a"></div>
    <div class="dot b"></div>
    <div class="dot c"></div>
    <div class="dot d"></div>
    <div class="dot e"></div>
  </div>
  <div class="title">
    <div class="overflow"><h1>Leave YouTube</h1></div>
    <div class="overflow"><h1>for good.</h1></div>
    <p>No more demonetization or sneaky algorithms</p>
    <div class="button">Claim Your Channel</div>
  </div>
</section>
<section class="claim section">
  <div class="inner">

    <div class="content">
      <?php
      if (isset($_GET['error'])): echo "<div>" . "The following error occurred: ". $_GET['error_message']  . " For support please send an email to hello@lbry.io" . "</div>";
      endif;?>
      <div class="zigzag"></div>
      <h1>Own your identity. For real this time.</h1>
        <div hidden id="sync-status">

        </div>
      <form id="youtube_claim" method="post" action="/youtube/token">
        <div class="form-inner" >
            <div class="block" hidden id="lbry_error">LBRY channel name is not valid or blank</div>
          <div class="block">
            <input id="lbry_channel_name" type="text" name="desired_lbry_channel_name" placeholder="Desired LBRY channel name" />
              <label>@</label>
          </div>
      </form>
        <div class="block">
            <input type="submit" value="Claim now" onClick="return submitDetailsForm()"/>
        </div>
      <div class="meta">
        This will verify you are an active YouTuber, then instructions and your welcome credits will be emailed to you.
        <a href="//faq/youtube">Learn more</a>.
      </div>
    </div>
  </div>
</section>
<section class="join section">
  <div class="inner">
    <div class="content">
      <h1>LBRY is more fun with friends</h1>
      <p>Take your peers and your audience with you. Create without limits.</p>
      <div class="boxes">
        <div class="box">
          <a href="https://spee.ch/ever-wonder-how-bitcoin-and-other" class="image" target="_blank">
            <img src="/img/youtube/01@2x.jpg">
          </a>
          <div class="text">
            <p>@3Blue1Brown</p>
          </div>
        </div>
        <div class="box">
          <a href="https://spee.ch/3c96f32de285db6c04e80bd6f5fad573250541e9/casually-successful" class="image" target="_blank">
            <img src="/img/youtube/02@2x.jpg">
          </a>
          <div class="text">
            <p>@CasuallyExplained</p>
          </div>
        </div>
        <div class="box">
          <a href="https://spee.ch/the-historical-elements-of-wolfenstein" class="image"  target="_blank">
            <img src="/img/youtube/03@2x.jpg">
          </a>
          <div class="text">
            <p>@ColinsLastStand</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="how section">
  <div class="inner">
    <div class="content">
      <h1>Migrating to LBRY</h1>
      <p>We will automatically mirror your existing YouTube channel to the LBRY Network.</p>
      <div class="steps">
        <div class="path">
          <div class="journey"></div>
        </div>
        <div class="step one enabled" data-enable="12">
          <div class="circle">1</div>
          <p class="text">Claim your LBRY name</p>
        </div>
        <div class="step two enabled" data-enable="33">
          <div class="circle">2</div>
          <p class="text">Check your email for confirmation</p>
        </div>
        <div class="step three enabled" data-enable="75">
          <div class="circle">3</div>
          <p class="text">Sync your existing YouTube content</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="sync section">
  <div class="inner">
    <div class="content">
      <div class="zigzag"></div>
      <h1>Sync &amp; Earn</h1>
      <p>LBRY offers a single-click sync process<br>for existing YouTubers</p>
      <div class="button">
        <a href="https://api.lbry.io/yt/connect?type=sync">Sync now</a>
      </div>
      <div class="meta">
        By syncing, you agree to mirror your content to the LBRY network for 1 year, and acknowledge <a href="//faq/youtube">these terms</a>.
      </div>
    </div>
  </div>
</section>
<section class="rewards section">
  <div class="inner">
    <div class="content">
      <h1>LBRY Credits and Your Channel</h1>
      <p>Be compensated for your value to your audience and the network, not what advertisers think you're worth.</p>
      <div class="price">
        <h3>Partner Programs</h3>
        <p>LBC <span class="current-value">(0.3267 USD)</span></p>
      </div>
      <div class="table">
        <div class="head">
          <p>Subscribers</p>
          <p>Monthly</p>
          <p>Amount</p>
        </div>
        <div class="line">
          <p>1,000</p>
          <p><?php echo $reward['data']['1000']; ?><span></span></p>
          <p></p>
        </div>
        <div class="line">
          <p>10,000</p>
          <p><?php echo $reward['data']['10000']; ?><span></span></p>
          <p></p>
        </div>
        <div class="line">
          <p>100,000</p>
          <p><?php echo $reward['data']['100000']; ?> <span></span></p>
          <p></p>
        </div>
        <div class="line">
          <p>1,000,000</p>
          <p><?php echo $reward['data']['1000000']; ?> <span></span></p>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact section">
  <div class="inner">
    <div class="content">
      <h1>Tell me more.</h1>
      <p>We have a guy that elaborates on things. Apply directly to the forehead.</p>
      <div class="v-card">
        <div class="photo"><img src="/img/youtube/reilly-smith@2x.png"></div>
        <div class="text">
          <h3>Reilly Smith</h3>
          <p>Head of Content</p>
          <a href="mailto:reilly@lbry.io?subject=YouTube+Freedom">Contact</a>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="to-top"><span>to top</span></div>
</main>
