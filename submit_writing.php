<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>W&S | Submit Writing</title>
</head>
<body>

<!-- FORM TO BE COMPLETED BY USER BEFORE UPLOADING -->
<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<!-- USERNAME -->
	<label for="username:">Username:</label>
	<input type="text" name="username"><br>
	<!-- EMAIL ADDRESS -->
	<label for="email">Email Address:</label>
	<input type="text" name="email"><br>
	<!-- BLOG TITLE -->
	<label for="blog_title">Blog Title:</label>
	<input type="text" name="blog_title"><br>
	<!-- BOOK TITLE -->
	<label for="book_title">Book Title:</label>
	<input type="text" name="book_title"><br>
	<!-- BOOK AUTHOR -->
	<label for="book_autor">Book Author:</label>
	<input type="text" name="book_author"><br>
	<!-- BOOK COVER -->
	<label for="book_cover">Upload Corresponding Book Cover:</label><br>
	<input type="file" name="book_cover"><br>
	<!-- BLOG DESCRIPTION -->
	<label for="blog_desc">Blog Description:</label><br>
	<textarea name="blog_desc" id="blog_desc" cols="30" rows="10" placeholder="Insert a brief discription about your blog"></textarea><br>
	<!-- BLOG UPLOAD -->
	<label for="blog_upload">Upload Blog: </label>
	<input type="file" name="blog_upload"><br>
	<!-- SUBMIT -->
	<input type="submit" name="submit" value="Upload Blog">
</form>
<?php
	echo "testing to see how this works";  
?>
</body>
</html>