<?
require_once('header.php'); 
?>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#top">Link Trackr</a>

          <ul class="nav boxer_nav">
            <li class="active"><a href="#top">Home</a></li>
            <li><a href="#product2">Product Feature 2</a></li>
            <li><a href="#product3">Product Feature 3</a></li>
          </ul>
          <ul class="nav boxer_nav pull-right">
            <li><a href="#"><i class="icon-key"></i> Login</a></li>
            <li><a href="#"><i class="icon-inbox-box"></i> Register</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <article class="featured_top">
      <div class="container">
        <div class="white_gradient">
          <div class="row">
            <div class="span12 align_center">
              <h1 class="boxer_title">This is the featured area for your site</h1>
              <p>There is a css radial white background gradient here to make your product or service shine.</p>
              <a class="btn btn-large btn-success">Register Now</a>
              <a class="btn btn-large btn-info">Watch the Video</a>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article class="body_article">
      <div class="container">
        <div class="row">
          <div class="span7"><img src="include/bootstrap/img/macbook.png" /></div>
          <div class="span5">
            <h2 class="boxer_title">Product Feature #1 Goes Here.</h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis distinctio temporibus adipisci qui natus ullam fugiat doloremque quaerat laboriosam quisquam nisi maxime atque eum consectetur quis recusandae cumque reprehenderit accusantium.
          </div>
        </div>
      </div>
    </article>
    
    <article class="section_divider">
      <div class="container">
        <div class="next_section" style="width:200px; float:left; border-right: 1px solid #dbe3e5;"><span><a href="#product2" style="color:#888">Next: Product Feature #2</a></span>
        </div>
        <i class="icon-arrow-down" style="float:left; margin-left:10px; opacity:0.8"></i>
      </div>
    </article>
    
    <span id="product2"></span>
    <article class="body_article">
      <div class="container">
        <div class="row">
          <div class="span5"><h2 class="boxer_title">Product Feature #2 Goes Here.</h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis distinctio temporibus adipisci qui natus ullam fugiat doloremque quaerat laboriosam quisquam nisi maxime atque eum consectetur quis recusandae cumque reprehenderit accusantium.</div>
          <div class="span5 offset2"><img src="include/bootstrap/img/ipad.png"></div>
        </div>
      </div>
    </article>

    <article class="section_divider">
      <div class="container">
        <div class="next_section" style="width:200px; float:left; border-right: 1px solid #dbe3e5;"><span><a href="#product3" style="color:#888">Next: Product Feature #3</a></span>
        </div>
        <i class="icon-arrow-down" style="float:left; margin-left:10px; opacity:0.8"></i>
      </div>
    </article>
    
    <span id="product3"></span>
    <article class="body_article">
      <div class="container">
        <div class="row">
          <div class="span6"><img src="include/bootstrap/img/ipads.png"></div>
          <div class="span5 offset1"><h2 class="boxer_title">Product Feature #3 Goes Here.</h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis distinctio temporibus adipisci qui natus ullam fugiat doloremque quaerat laboriosam quisquam nisi maxime atque eum consectetur quis recusandae cumque reprehenderit accusantium.</div>
        </div>
      </div>
    </article>

    <article class="section_divider"></article>

<? require_once('footer.php'); ?>