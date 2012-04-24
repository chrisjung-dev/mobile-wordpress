			</div><!-- /content -->

			<div data-role="footer" data-position="fixed" data-tap-toggle="false">
				<div data-role="navbar">
					<ul>
						<li><a href="index.php" data-icon="home"><?php echo $lng[ 'btn_home' ];?></a></li>
						<li><a href="#about" data-rel="dialog" data-transition="pop" data-icon="info"><?php echo $lng[ 'btn_info' ];?></a></li>
						<li><a href="categories.php" data-icon="grid"><?php echo $lng[ 'btn_categories' ];?></a></li>
						<li><a href="#" data-icon="gear"><?php echo $lng[ 'btn_desktop' ];?></a></li>
					</ul>
				</div><!-- /navbar -->

			</div><!-- /footer -->

			
		</div><!-- /page -->

		<!-- Start of about page: #about -->
		<div data-role="page" id="about">

			<div data-role="header" data-theme="e">
				<h1><?php echo $about[ 'title' ]; ?></h1>
			</div><!-- /header -->

			<div data-role="content" data-theme="d">	
				<p><?php echo $about[ 'text' ]; ?></p>
			</div><!-- /content -->

			<div data-role="footer">
				<h4><?php echo $about[ 'footer' ]; ?></h4>
			</div><!-- /footer -->
		</div><!-- /page popup -->
	</body>
</html>
