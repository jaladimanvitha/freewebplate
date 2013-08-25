<?php define( 'title', 'Contact' ); ?>
<?php define( 'description', 'Description of page goes here.' ); ?>
<?php define( 'keywords', 'keywords, of, page, go, here' ); ?>
<?php define( 'pageid', 'contact' ); ?>
<?php include( 'header.php' ); ?> 

<h2 id="page-title"><?php echo title; ?></h2>

<section class="entry-content">

<p>The intent of web design is to create a web site (a collection of electronic files residing on one or more web servers) that presents content (including interactive features or interfaces) to the end user in the form of web pages once requested. Such elements as text, forms, and bit-mapped images (GIFs, JPEGs, PNGs) can be placed on the page using HTML, XHTML, or XML tags. Displaying more complex media (vector graphics, animations, videos, sounds) usually requires plug-ins such as Flash, QuickTime, Java run-time environment, etc.</p>
<br />
<form action="contact-actions.php" method="post">
<p>Name:<br /><input size="25" name="name" type="text" /></p>
<p>Phone:<br /><input size="25" name="phone" type="text" /></p>
<p>Email:<br /><input size="25" name="EmailFrom" type="text" /></p>
<p class="url">URL:<br /><input size="25" name="url" type="text" value="http://" class="url" id="url" /></p>
<p>Message:<br /><textarea name="message" rows="5" cols="80" id="message-box"></textarea></p>
<p><input type="submit" value="Submit &rarr;" class="button" /></p>
</form>

</section>

<?php include( 'footer.php' ); ?>