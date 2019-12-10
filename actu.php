<?php
    require 'inc/header.php';
?>



	<!-- - - - - - - -  END HEADER  - - - - - - - -->

	<!-- - - - - - - - MAIN  - - - - - - - -->
	<main id="content" class="row no_sidebar" style="margin-top: 25px">

		<!-- <div class="large-12 columns">
			<div class="page-title">

				<h1>Full Width</h1>

				<div class="breadcrumbs">
					<a href="home.html" title="">Home</a>
					Full Width
				</div>
			</div>
		</div> -->

		<div id="main" class="medium-12 large-12 columns">

			<div class="row post-list full-width">


				<article class="medium-12 large-12 columns">

				<h3 style="color:darkgreen">
					Culture:
				</h3>
				<header class="entry-header" style="margin-top:-20px">
							<h1 class="entry-title" >
								Aenean semper sapien pellentesque pelentesque vivamus sapien
									vehicula id libero
							</h1>
						</header>

					<div class="post border post-classic slideUp">
						<span class="image-post">
							<img src="images/blog/large/05_people.jpg" alt="" width="100%"/>
						</span>

						<div style="">
						<br>
							<p style="font-size: 150%; color:black; text-align: justify;">
								Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe laudantium necessitatibus cumque dolore nesciunt debitis porro quod facere et sapiente dolores deserunt quo, dolorem voluptas ducimus, labore optio laborum explicabo.
								Assumenda placeat modi sit, vel veritatis sequi voluptas architecto ad praesentium neque mollitia officiis ullam hic eius! Facere quisquam dolores excepturi labore modi? Porro quas modi, quos harum veniam ipsum.
								Dicta eos magni architecto, consectetur fugiat sed velit quasi vero hic ratione officiis recusandae, ad porro voluptate quis sunt laborum ab possimus inventore, odio eligendi dignissimos? Mollitia, reprehenderit deleniti. Quaerat!
								Officiis sed cum dolorem eveniet deleniti esse neque deserunt labore nobis at quos, tenetur alias sit sapiente ipsa voluptas dignissimos sequi iure placeat minus doloribus hic. Totam nisi eos provident.
								Modi deserunt assumenda quam similique, quae eveniet ab natus error reprehenderit impedit eligendi sit hic ratione. Quos amet praesentium harum dolores tenetur, eum ullam quod, nam quia aperiam accusantium ex?
								Aperiam, aliquam iure illo similique reiciendis ratione molestias iste architecto amet odio ducimus distinctio ab necessitatibus perferendis, consectetur, autem suscipit mollitia excepturi! Accusamus esse, quasi ad necessitatibus deleniti excepturi facere.
								Nisi nemo cumque nam neque eum nesciunt fugit dolore, laboriosam id quae doloremque unde doloribus ratione a aspernatur, quibusdam incidunt velit enim aliquid reiciendis ipsum sint asperiores nostrum. Mollitia, sequi?
								Sapiente quibusdam corrupti iure nesciunt eum! Deserunt ex dicta, asperiores velit minima suscipit maxime. Animi, exercitationem. Sapiente, dolorum provident dolore, eum ad odit cum inventore quasi nostrum molestiae nisi voluptas?
							</p>
							<br>
						</div>

						<footer class="entry-footer">

							<div class="right">
								<span class="posted-on" style=" font-size:100%; color:black;">13.04.2010</span>
								<span class="byline" style=" font-size:100%; color:black;">Service Communication</span>
							</div>

						</footer>
					</div>
					<!--/ .post-extra-->

				</article>


			</div>
			<!--/ .post-area-->

			<div class="clear"></div>

		</div>

	</main>
	<!--/ #content-->

	<!-- Dialog Login/Register Widnows -->

	<div id="accountDialog" class="dialog">
		<div class="dialog-overlay"></div>
		<div class="dialog-content">
			<div class="morph-shape">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 560 280" preserveAspectRatio="none">
					<rect x="3" y="3" fill="none" width="556" height="276"/>
				</svg>
			</div>
			<div class="dialog-inner">
				<form action="http://html.webtemplatemasters.com/">
					<fieldset class="login">

						<p><input type="text" name="user_name" id="user_name" placeholder="Username*" required="" autocomplete="off"/></p>

						<p><input type="email" name="user_email" id="user_email" placeholder="E-mail*" required="" autocomplete="off"/></p>

						<p>
							<button class="button middle" type="submit">Register</button>
							&nbsp;
							<a href="#" class="button middle dialog-login-button">Log In</a>
						</p>

					</fieldset>
				</form>
				<i class="action-close" data-dialog-close>Close</i>
			</div>
		</div>
	</div>

	<div id="loginDialog" class="dialog">
		<div class="dialog-overlay"></div>
		<div class="dialog-content">
			<div class="morph-shape">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 560 280" preserveAspectRatio="none">
					<rect x="3" y="3" fill="none" width="556" height="276"/>
				</svg>
			</div>
			<div class="dialog-inner">
				<form action="http://html.webtemplatemasters.com/" method="post" class="account">
					<fieldset>

						<p><input type="text" name="log" id="user_login" placeholder="Username*" required="" autocomplete="off"/></p>

						<p><input type="password" name="pwd" id="user_pass" placeholder="Password*" required="" autocomplete="off"/></p>

						<p>
							<input type="checkbox" id="rememberme" class="tmm-checkbox" name="rememberme" value="forever">

							<label for="rememberme">Remember Me</label>

							<button class="button middle right" type="submit">Log In</button>

							<a href="#" class="reset-pass">Reset password</a>
						</p>

					</fieldset>
				</form>

				<i class="action-close" data-dialog-close>Close</i>
			</div>

		</div>
	</div>

	<!-- End Dialog Login/Register Widnows -->

	<!-- - - - - - - - END MAIN  - - - - - - - -->

	<!-- - - - - - - - FOOTER - - - - - - - -->
	<?php
    include 'inc/footer.php';