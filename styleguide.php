<?php require_once('header.php'); ?>

<div id="primary_content"  >
<div class="breadcrumb-bar">
  <div class="content-wrapper mobile-wrapper">
    <p><a href="events-calendar.php">Styleguide</a></p>
  </div> <!--/ site-wrapper mobile-wrapper-->
</div> <!--/ breadcrumb-bar-->
	<div class="mobile-wrapper content-wrapper">
		<div class="group">

	<hr />
	<h2 class="font-raleway">Headings</h2>

	<h1><a href="">This is a Heading 1 - 26px font size - Font Name</a></h1>
	<h2><a href="">This is a Heading 2 - 21px font size - Font Name</a></h2>
	<h3><a href="">This is a Heading 3 - 19px font size - Font Name</a></h3>
	<h4><a href="">This is a Heading 4 - 17px font size - Font Name</a></h4>
	<h5><a href="">This is a Heading 5 - 15px font size - Font Name</a></h5>
	<h6><a href="">This is a Heading 6 - 13px font size - Font Name</a></h6>

<hr />
	<h2 class="font-raleway">Fonts</h2>

	<p class="font-noto"> This paragraph uses the "Enter Font Name" font. You can add the Noto Sans font by adding the class ".font-name" to any HTML element.</p>

	<p class="font-raleway">This paragraph uses the "Enter Font Name" font. You can add the Roboto font by adding the class ".font-name" to any HTML element.</p>
<hr />
	<h2 class="font-raleway">Links</h2>

	<p><a href="">Body links are naturally #F19525 and rollover to: #6582A1</a></p>

	<p class="link-underline"><a href="">Body links can also be underlined by adding the class ".link-underline". to its parent element.</a></p>


<hr />
	<h2 class="font-raleway">Paragraphs</h2>

		<p>This is a standard paragraph - Noto Sans 16px font - body copy is #6b6b6b - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, <a href="<?php echo $site_url; ?>index.php">Body links are naturally orange #F19525 and rollover to blue #6582A1</a> aut, nostrum similique animi voluptate qui perferendis natus ipsa quis tempora iusto explicabo illum accusamus repudiandae enim reprehenderit ratione. Consequatur, <a href="<?php echo $site_url; ?>index.php">Body links are naturally orange #F19525 and rollover to blue #6582A1</a> consequuntur quidem aperiam rerum voluptatibus enim eius molestiae veritatis culpa. Non, nisi maiores suscipit distinctio magni aspernatur a maxime mollitia!</p>

<hr />

	<h2 class="font-raleway">Search</h2>

	<form class="search-form">
		<input class="search-submit styleguide-search-submit-position" value="submit" type="submit">
		<input class="search-term styleguide-search-term-width" name="keywords" id="keywords" placeholder="Search">
	</form>

<hr />

<h2 class="font-raleway">Buttons</h2>

<div class="mbl">
<p>HREF Link</p>
	<a class="button" href="">Click me</a>
</div>

<div class="mvl">
<p>Button Element</p>
	<button type="submit" class="button">Submit Form</button>
</div>

<hr />
	<h1 class="font-raleway">Lists</h1>
	<div>
		<ol>
			<li><a href="">Ordered list item</a></li>
			<li><a href="">Ordered list item</a></li>
			<li><a href="">Ordered list item</a></li>
			<li><a href="">Ordered list item</a></li>
			<li><a href="">Ordered list item</a></li>
			<li><a href="">Ordered list item</a></li>
		</ol>
	</div>

	<div>
		<ul>
			<li><a href="">Unordered list item</a></li>
			<li><a href="">Unordered list item</a></li>
			<li><a href="">Unordered list item</a></li>
			<li><a href="">Unordered list item</a></li>
			<li><a href="">Unordered list item</a></li>
			<li><a href="">Unordered list item</a></li>
		</ul>
</div>
	 	<hr />

	 <blockquote>
		<p>I don't think the human race will survive the next thousand years, unless we spread into space. There are too many accidents that can befall life on a single planet. But I'm an optimist. We will reach out to the stars.</p>
		<cite><a href="/"> -Stephen Hawking</a>, 2001</cite>
	</blockquote>

	<hr />
	<h2 class="font-raleway">Colors</h2>

<h2 class="color-chip-spacing">$orange-1 #F19525<span class="color-chip orange-1-background"></span></h2>

<h2 class="color-chip-spacing">$blue-1 #6582A1<span class="color-chip blue-1-background"></span></h2>

<h2 class="color-chip-spacing">$blue-2 #8FB6D3<span class="color-chip blue-2-background"></span></h2>

<h2 class="color-chip-spacing">$blue-3 #CFDFED<span class="color-chip blue-3-background"></span></h2>

<h2 class="color-chip-spacing">$blue-4 #6582A1<span class="color-chip blue-4-background"></span></h2>

<h2 class="color-chip-spacing">$grey-1 #BCCAD0<span class="color-chip grey-1-background"></span></h2>

<h2 class="color-chip-spacing">$grey-2 #EEEEEE<span class="color-chip grey-2-background"></span></h2>

<h2 class="color-chip-spacing">$grey-3 #565656<span class="color-chip grey-3-background"></span></h2>

<h2 class="color-chip-spacing">$grey-4 #3e3e3e<span class="color-chip grey-4-background"></span></h2>

<h2 class="color-chip-spacing">white #FFFFFF<span class="color-chip pure-white-background"></span></h2>

<h2 class="color-chip-spacing">black #000000<span class="color-chip pure-black-background"></span></h2>

</div> <!--/ group -->

	<hr />

	<h2 class="font-raleway">Pagination</h2>

	<div class="group mvl">
		<nav class="pagination left"  >
			<a class="prev" href="#">Prev</a>
			<a href="#">1</a>
			<a href="#">2</a>
			<a class="active" href="#">3</a>
			<a href="#">4</a>
			<a href="#">5</a>
			<a href="#">6</a>
			<a href="#">7</a>
			<a class="next" href="#">Next</a>
		</nav>
	</div> <!--/ group mvl -->

</div> <!--/ mobile-wrapper-->
</div> <!--/ primary_content-->

<?php require_once('footer.php'); ?>
