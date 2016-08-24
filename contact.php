<?php require_once('header.php'); ?>

<div class="main"  >

<div class="breadcrumb-bar">
  <div class="content-wrapper mobile-wrapper">
    <p>Contact</p>
  </div> <!--/ site-wrapper mobile-wrapper-->
</div> <!--/ breadcrumb-bar-->

<div class="content-wrapper resources-listing-container">

<div class="site-wrapper mobile-wrapper group">
 <p>This is a standard paragraph - Noto Sans 16px font - body copy is #6b6b6b - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, <a href="<?php echo $site_url; ?>index.php">Body links are naturally orange #F19525 and rollover to blue #6582A1</a> aut, nostrum similique animi voluptate qui perferendis natus ipsa quis tempora iusto explicabo illum accusamus repudiandae enim reprehenderit ratione. Consequatur, <a href="<?php echo $site_url; ?>index.php">Body links are naturally orange #F19525 and rollover to blue #6582A1</a> consequuntur quidem aperiam rerum voluptatibus enim eius molestiae veritatis culpa. Non, nisi maiores suscipit distinctio magni aspernatur a maxime mollitia!</p>

      <hr>

<p>Questions? Feedback? Fill out this form and let us know what you think. We'll get right back to you.</p>

<form>

      <fieldset>
      <div class="form-wrapper">
          <h4 class="input-label">Name:</h4>

    <div class="group">
      <div class="left size1of2">
        <p>
          <label class="input-sub-label" for="first_name">First</label>
          <input class="split-input-half" name="first_name" type="text" id="first_name" placeholder="First Name" />
        </p>
      </div> <!--/ left size1of2 -->

      <div class="right size1of2">
        <p>
          <label class="input-sub-label" for="last_name">Last</label>
          <input class="split-input-half" name="last_name" type="text" id="last_name" placeholder="Last Name" />
        </p>
      </div> <!--/ right size1of2 -->
    </div> <!--/ group-->

  <div class="group">

    <div class="left size1of2">
      <p>
        <label class="input-label" for="company_name">Company Name:</label>
        <input class="split-input-half" name="company_name" type="text" id="company_name" placeholder="Company Name" />
      </p>
    </div> <!--/ left size1of2 -->

  <div class="right size1of2">
      <p>
        <label class="input-label" for="email">Email:</label>
        <input class="split-input-half" name="email" type="email" id="email" placeholder="janedoe@email.com"/>
      </p>
    </div> <!--/ right size1of2 -->
  </div> <!--/ group -->

<p>
  <label class="input-label" for="message">Message:</label>
  <textarea id="message" name="message" class="split-input-whole"></textarea>
</p>


<p>
<button class="progress-button mbl" data-style="shrink" data-horizontal=""><span class="content">Submit</span><span class="progress"><span class="progress-inner"></span></span></button>
</p>
</div><!--/ form-wrapper-->
</fieldset>

</form>


</div> <!--/ content-wrapper resources-listing-container-->
</div> <!--/ main-->

<?php require_once('footer.php'); ?>