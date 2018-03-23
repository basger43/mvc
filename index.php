<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>


<?php spl_autoload_register(function($link){
	include_once "system/lib/".$link.".php";
}); 

$abc = new Main();



?>









<header>
	<img src="images/php.png" alt="">
	<h1>  PHP OOP MVC FRAME WORK</h1>
</header>

<div class="content">
<div class="search">
	<button>HOME</button>
	<div class="form">
		<form action="" method="post">
			<input type="search" name="" id="" placeholder="Search Here...">
			<select name="" id="">
				<option value="">Select Category</option>
				<option value="">Category 1</option>
				<option value="">Category 2</option>
				<option value="">Category 3</option>
				<option value="">Category 4</option>
			</select>
			<input type="submit" value="Search">
		</form>
	</div>
</div>
	<main>
		<article>
			<h2>Post Title 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil atque modi velit molestiae, repellendus iure sint possimus cumque, provident, dolorum unde laboriosam ut eius ex maiores quod repudiandae aut asperiores? Quia voluptatem laborum magni facilis, officiis vel accusantium sed, hic cumque quis id a, nihil, dicta dignissimos blanditiis tempore quidem! <a href="#">Read More...</a></p>

		</article>
		<article>
			<h2>Post Title 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil atque modi velit molestiae, repellendus iure sint possimus cumque, provident, dolorum unde laboriosam ut eius ex maiores quod repudiandae aut asperiores? Quia voluptatem laborum magni facilis, officiis vel accusantium sed, hic cumque quis id a, nihil, dicta dignissimos blanditiis tempore quidem!</p>
		</article>
		<article>
			<h2>Post Title 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil atque modi velit molestiae, repellendus iure sint possimus cumque, provident, dolorum unde laboriosam ut eius ex maiores quod repudiandae aut asperiores? Quia voluptatem laborum magni facilis, officiis vel accusantium sed, hic cumque quis id a, nihil, dicta dignissimos blanditiis tempore quidem!</p>
		</article>
		<article>
			<h2>Post Title 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil atque modi velit molestiae, repellendus iure sint possimus cumque, provident, dolorum unde laboriosam ut eius ex maiores quod repudiandae aut asperiores? Quia voluptatem laborum magni facilis, officiis vel accusantium sed, hic cumque quis id a, nihil, dicta dignissimos blanditiis tempore quidem!</p>
		</article>
		<article>
			<h2>Post Title 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil atque modi velit molestiae, repellendus iure sint possimus cumque, provident, dolorum unde laboriosam ut eius ex maiores quod repudiandae aut asperiores? Quia voluptatem laborum magni facilis, officiis vel accusantium sed, hic cumque quis id a, nihil, dicta dignissimos blanditiis tempore quidem!</p>
		</article>
	</main>
	<aside class="right_sidebar">
		<div class="category">
			<h3>Category</h3>
			<ul>
				<li><a href="#">Category 1</a></li>
				<li><a href="#">Category 2</a></li>
				<li><a href="#">Category 3</a></li>
				<li><a href="#">Category 4</a></li>
				<li><a href="#">Category 5</a></li>
			</ul>	
		</div>
		<div class="latest_post">
			<h3>Latest Post</h3>
			<ul>
				<li><a href="#">Post 1</a></li>
				<li><a href="#">Post 2</a></li>
				<li><a href="#">Post 3</a></li>
				<li><a href="#">Post 4</a></li>
				<li><a href="#">Post 5</a></li>
			</ul>	
		</div>
	</aside>
</div>
<footer>
	<h1>DEVELOPPED BY BASHER43</h1>
</footer> 

</body>
</html>