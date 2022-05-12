<?php 
/* Template Name: SEO Audit */
//thrive_template()->render('SEO Audit');
get_header('landing');  ?>

<form class="turboform" method="POST" action="" onsubmit="return fixURL();">
    <div class="input-group review">
      <input type="text" autocomplete="off" spellcheck="false" class="form-control" placeholder="Type Your Website Address" name="url">
      <span class="input-group-btn"> 
          <button class="btn btn-green" type="submit" id="review-btn"><span class="glyphicon glyphicon-search"></span> REVIEW</button>
      </span>
    </div>
</form>


<?php get_footer(); ?>