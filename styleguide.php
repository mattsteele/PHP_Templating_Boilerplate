<?php require_once('header.php'); ?>

<div id="primary_content"  >
<div class="breadcrumb-bar">
  <div class="content-wrapper mobile-wrapper">
    <p><a href="styleguide.php">Styleguide</a></p>
  </div> <!--/ content-wrapper mobile-wrapper-->
</div> <!--/ breadcrumb-bar-->

<div class="content-wrapper mobile-wrapper">
	<h2 class="font-sans-serif">Colors</h2>

	<h2 class="color-chip-spacing">$blue-1 #34495e<span class="color-chip blue-1-background"></span></h2>

	<h2 class="color-chip-spacing">$blue-2 #2c3e50<span class="color-chip blue-2-background"></span></h2>

	<hr />

	<h2 class="color-chip-spacing">$grey-1 #ecf0f1<span class="color-chip grey-1-background"></span></h2>

	<h2 class="color-chip-spacing">$grey-2 #bdc3c7<span class="color-chip grey-2-background"></span></h2>

	<h2 class="color-chip-spacing">$grey-3 #95a5a6<span class="color-chip grey-3-background"></span></h2>

	<h2 class="color-chip-spacing">$grey-4 #7f8c8d<span class="color-chip grey-4-background"></span></h2>

</div> <!--/ content-wrapper mobile-wrapper-->



<div class="content-wrapper mobile-wrapper">
	<hr />
	<h2 class="font-sans-serif">Headings</h2>

	<h1><a href="">This is a Heading 1 - 44px font size - {{ FONT NAME }}</a></h1>
	<h2><a href="">This is a Heading 2 - 32px font size - {{ FONT NAME }}</a></h2>
	<h3><a href="">This is a Heading 3 - 28px font size - {{ FONT NAME }}</a></h3>
	<h4><a href="">This is a Heading 4 - 24px font size - {{ FONT NAME }}</a></h4>
	<h5><a href="">This is a Heading 5 - 20px font size - {{ FONT NAME }}</a></h5>
	<h6><a href="">This is a Heading 6 - 18px font size - {{ FONT NAME }}</a></h6>

</div> <!--/ content-wrapper mobile-wrapper-->


<div class="content-wrapper mobile-wrapper">
	<hr />
	<h2 class="font-sans-serif">Fonts</h2>

	<p class="font-sans-serif"> This paragraph uses the {{ FONT NAME }} font. You can add the {{ FONT NAME }} font by adding the class ".{{ FONT NAME }}" to any HTML element.</p>

	<p class="font-sans-serif">This paragraph uses the {{ FONT NAME }} font. You can add the {{ FONT NAME }} by adding the class ".{{ FONT NAME }}" to any HTML element.</p>
<hr />
	<h2 class="font-sans-serif">Links</h2>

	<p><a href="">Body links are naturally #F19525 and rollover to: #6582A1</a></p>

	<p class="link-underline"><a href="">Body links can also be underlined by adding the class ".link-underline". to its parent element.</a></p>
</div> <!--/ content-wrapper mobile-wrapper-->


<div class="content-wrapper mobile-wrapper">
	<hr />
	<h2 class="font-sans-serif">Paragraphs</h2>

		<p>This is a standard paragraph - {{ FONT NAME }} 18px font - body copy is #{{ FONT COLOR }} - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, <a href="<?php echo $site_url; ?>index.php">Body links are naturally #{{ FONT COLOR }} and rollover to #{{ FONT COLOR }}</a> aut, nostrum similique animi voluptate qui perferendis natus ipsa quis tempora iusto explicabo illum accusamus repudiandae enim reprehenderit ratione. Consequatur, <a href="<?php echo $site_url; ?>index.php">Body links are naturally #{{ FONT COLOR }} and rollover to #{{ FONT COLOR }}</a> consequuntur quidem aperiam rerum voluptatibus enim eius molestiae veritatis culpa. Non, nisi maiores suscipit distinctio magni aspernatur a maxime mollitia!</p>
</div> <!--/ content-wrapper mobile-wrapper-->

<div class="content-wrapper mobile-wrapper group">
<hr />

	<h2 class="font-sans-serif">Search</h2>

	<form class="search-form">
		<input class="search-submit styleguide-search-submit-position" value="submit" type="submit">
		<input class="search-term styleguide-search-term-width" name="keywords" id="keywords" placeholder="Search">
	</form>
</div> <!--/ content-wrapper mobile-wrapper group-->

<div class="content-wrapper mobile-wrapper">
	<hr />

	<h2 class="font-sans-serif">Buttons</h2>

	<p>HREF Link</p>
		<a class="button" href="">Click me</a>


	<p>Button Element</p>
		<button type="submit" class="button">Submit Form</button>
</div> <!--/ content-wrapper mobile-wrapper-->


<div class="content-wrapper mobile-wrapper">
	<hr/>
	<h1 class="font-sans-serif">Lists</h1>

	<ol>
		<li><a href="">Ordered list item</a></li>
		<li><a href="">Ordered list item</a></li>
		<li><a href="">Ordered list item</a></li>
		<li><a href="">Ordered list item</a></li>
		<li><a href="">Ordered list item</a></li>
		<li><a href="">Ordered list item</a></li>
	</ol>

	<ul>
		<li><a href="">Unordered list item</a></li>
		<li><a href="">Unordered list item</a></li>
		<li><a href="">Unordered list item</a></li>
		<li><a href="">Unordered list item</a></li>
		<li><a href="">Unordered list item</a></li>
		<li><a href="">Unordered list item</a></li>
	</ul>
</div> <!--/ content-wrapper mobile-wrapper-->


<div class="content-wrapper mobile-wrapper">
	<hr />
	<blockquote>
		<p>I don't think the human race will survive the next thousand years, unless we spread into space. There are too many accidents that can befall life on a single planet. But I'm an optimist. We will reach out to the stars.</p>
		<cite><a href="/"> -Stephen Hawking</a>, 2001</cite>
	</blockquote>
</div> <!--/ content-wrapper mobile-wrapper-->

<div class="content-wrapper mobile-wrapper group">
	<hr />
	<h2 class="font-sans-serif">Pagination</h2>

		<nav class="pagination left">
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
</div> <!--/ content-wrapper mobile-wrapper group-->

<?php require_once('footer.php'); ?>
