<?php require_once('header.php'); ?>

<div class="breadcrumb-bar">
  <div class="content-wrapper mobile-wrapper">
    <p>Contact</p>
  </div> <!--/ site-wrapper mobile-wrapper-->
</div> <!--/ breadcrumb-bar-->


<div class="content-wrapper mobile-wrapper">
  <p>This is a standard paragraph - Noto Sans 16px font - body copy is #6b6b6b - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, <a href="<?php echo $site_url; ?>index.php">Body links are naturally orange #F19525 and rollover to blue #6582A1</a> aut, nostrum similique animi voluptate qui perferendis natus ipsa quis tempora iusto explicabo illum accusamus repudiandae enim reprehenderit ratione. Consequatur, <a href="<?php echo $site_url; ?>index.php">Body links are naturally orange #F19525 and rollover to blue #6582A1</a> consequuntur quidem aperiam rerum voluptatibus enim eius molestiae veritatis culpa. Non, nisi maiores suscipit distinctio magni aspernatur a maxime mollitia!</p>
      <hr>
  <p>Questions? Feedback? Fill out this form and let us know what you think. We'll get right back to you.</p>



    <form>
      <div class="form-group">
        <label for="full-name">Full Name</label>
        <input type="text" class="form-control freelance-directory-field" id="full-name" aria-describedby="fullNameHelp" placeholder="Jane Doe"><span class="error-icon"></span>
      </div><!--  form-group -->

      <div class="form-group freelance-specialities">

      <h2>Specialites <span>(choose three)</span></h2>

      <div class="checkbox-wrapper">
        <label class="checkbox-inline" for="cbox1">
          <input type="checkbox" name="fields[freelanceSpecialties]" id="specialties" value="Academic" checked="checked">
          <p>Academic</p>
        </label>
        <label class="checkbox-inline" for="cbox2">
          <input type="checkbox" name="fields[freelanceSpecialties]" id="cbox2" value="Medical">
          <p>Medical</p>
        </label>
        <label class="checkbox-inline" for="cbox3">
          <input type="checkbox" name="fields[freelanceSpecialties]" id="cbox3" value="Technical">
          <p>Technical</p>
        </label>
        <label class="checkbox-inline" for="cbox4">
          <input type="checkbox" name="fields[freelanceSpecialties]" id="cbox4" value="General Nonfiction">
          <p>General Nonfiction</p>
        </label>
      </div><!-- checkbox-wrapper -->

      <div class="checkbox-wrapper">
        <label class="checkbox-inline" for="cbox5">
          <input type="checkbox" name="fields[freelanceSpecialties]" id="cbox4" value="Fiction">
          <p>Fiction</p>
        </label>
        <label class="checkbox-inline" for="cbox5">
          <input type="checkbox" name="fields[freelanceSpecialties]" id="cbox5" value="Marketing/Corporate Communications">
          <p>Marketing/Corporate Communications</p>
        </label>
      </div><!-- checkbox-wrapper -->

      <div class="checkbox-wrapper">
        <label class="checkbox-inline" for="cbox6">
          <input type="checkbox" name="fields[freelanceSpecialties]" id="cbox6" value="Media/News">
          <p>Media/News</p>
        </label>
        <label class="checkbox-inline" for="cbox7">
          <input type="checkbox" name="fields[freelanceSpecialties]" id="cbox7" value="Government/Policy">
          <p>Government/Policy</p>
        </label>
        <label class="checkbox-inline" for="cbox8">
          <input type="checkbox" name="fields[freelanceSpecialties]" id="cbox8" value="Other">
          <p>Other</p>
        </label>
      </div><!-- checkbox-wrapper -->
      </div><!--  form-group -->

      <div class="form-group">
        <label for="location">Location</label>
        <div class="styled-select">
          <select class="form-control" id="location">
            <option value="" disabled selected hidden>&#43; Choose Your Location</option>
            <option>California</option>
            <option>Colorado</option>
            <option>Oklahoma</option>
            <option>New York</option>
            <option>Delaware</option>
          </select>
          <span class="error-icon"></span>
        </div><!-- styled-select -->
      </div><!-- form-group -->


      <div class="form-group">
        <label for="job-description">Describe Yourself</label>
        <textarea class="form-control" id="description" rows="6" placeholder="A brief 300 character desiption of who you are and what you do."></textarea><span class="error-icon"></span>
      </div><!-- /  .form-group -->

      <h3>Contact Info</h3>

      <div class="form-group">
        <label for="member-phone">Phone</label>
        <input type="tel" class="form-control" id="phone" aria-describedby="memberPhoneHelp" placeholder="Phone Number"><span class="error-icon"></span>
      </div><!--  form-group -->

      <div class="form-group">
        <label for="member-email">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="memberemailHelp" placeholder="Email"><span class="error-icon"></span>
      </div><!--  form-group -->

    </form>


</div> <!-- content-wrapper mobile-wrapper  -->

<?php require_once('footer.php'); ?>
