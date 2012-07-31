<?php include("_header.php") ?>
  <section id="content">
    <hgroup>
      <h1>Hire us</h1>
      <h2>let's create something cool together!</h2>
    </hgroup>
    <section id="form">
      <div class="clearfix">
        <a class="active" href="#" data-type="offer">Offer</a>
        <a href="#" data-type="contact">Contact</a>
      </div>
      <form action="/" id="offer-form" class="formy" validate>
        <fieldset>
          <label for="offer-name">Your name/Company name</label>
          <input type="text" name="offer-name" id="offer-name" required>
        </fieldset>
        <fieldset>
          <label for="offer-email">Your email address</label>
          <input type="email" name="offer-email" id="offer-email" required>
        </fieldset>
        <fieldset id="budget-field">
          <label for="offer-budget">Budget</label>
          <select name="offer-budget" id="budget">
            <option value="10000&euro;">~ 10 000 &euro;</option>
            <option value="50000&euro;">~ 50 000 &euro;</option>
            <option value="100000&euro;">~ 100 000 &euro;</option>
            <option value="100001&euro;">&gt; 100 000 &euro;</option>
          </select>
        </fieldset>
        <fieldset>
          <label id="description-label" for="offer-description">Description of the work</label>
          <textarea name="offer-description" id="offer-description" cols="30" rows="10" required></textarea>
        </fieldset>
        <input type="submit" value="Send">
      </form>
    </section>

    <div id="cta" class="clearfix">
      <a href="">Who we are</a>
      <a class="most" href=""><b>Works</b></a>
      <a href="">Hire us</a>
    </div>

  </section>
  <?php include("_footer.php") ?>
</body>
</html>