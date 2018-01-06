<div class="navbar-fixed">
	<nav class="blue accent-4">
	  <div class="container">
	    <div class="nav-wrapper">
	      <a href="index.php?page=home" class="brand-logo left"><img id="logo" class="responsive-img" src="../assets/img/logompaw.png" alt=""></a>
	      <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
	      <ul class="right hide-on-med-and-down">
	        <li class="<?php echo($page == 'home')? 'active' : '';?>"><a href="index.php?page=home">Home</a></li>
	        <li class="<?php echo($page == 'blog')? 'active' : '';?>"><a href="index.php?page=blog">Articles</a></li>
	      </ul>
	      <ul class="side-nav" id="mobile-menu">
	        <li class="<?php echo($page == 'home')? 'active' : '';?>"><a href="index.php?page=home">Home</a></li>
	        <li class="<?php echo($page == 'blog')? 'active' : '';?>"><a href="index.php?page=blog">Articles</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
</div>