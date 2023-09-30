<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/j839t1ewzv6l3x2ra5u0xe8atz07nydab9awrc3lmqynlwk9/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
	<h1>Post A Notice !</h1>
	 <form method="post" action="db_notice.php">
  <textarea class="container" name="container">
     Hey Admin! Post your notice here
  </textarea>
  <input type="submit" value="submit">
</form>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>
</body>
</html>