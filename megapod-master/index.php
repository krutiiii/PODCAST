<!DOCTYPE html>
<html lang="en">








<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Megapod Template" />
    <meta name="keywords" content="Megapod, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>audio upload php and mysql</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
		input {
			font-size: 2rem;
		}
		a {
			text-decoration: none;
			color: #006CFF;
			font-size: 1.5rem;
		}
		header{
			background-color: black;
		}

		/* img {
 	 max-width: 100%;
		height: auto;
		} */
	</style>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    
  </head>

  <body>
    <!-- Page Preloder -->
    

    <!-- Offcanvas Menu Begin -->
  
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    

<body>
	<img src="img/pod.jpg" alt="" style="width:100%;height:500px;">
	
	<a href="view.php">audios</a>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>
	 <form action="upload.php"
	       method="post"
	       enctype="multipart/form-data">

	 	<input type="file"
	 	       name="my_audio">

	 	<input type="submit"
	 	       name="submit" 
	 	       value="Upload">
	 </form>
</body>
</html>