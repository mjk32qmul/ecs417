<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>My Site</title>
		<link rel="stylesheet" type="text/css" href="webroot/css/reset.css">
		<link rel="stylesheet" type="text/css" href="webroot/css/style.css">
	</head>
	<header id='homePageTitle'>
		<img id='logoImage' src="img/Logo.png"/>
	</header>
    <body id='home'>
        <div id="nav" class="nav">
            <nav>
                <ul>
					<li><a href="#homePageTitle">Home</a></li>
                    <li><a href="#aboutMe">About Me</a></li>
                    <li><a href="#skills">Skills</a></li>
					<li><a href="#education">Education</a></li>
					<li><a href="#experience">Experience</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="Blog.php">Blog</a></li>
					<?php
						session_start();
						if($_SESSION["loggedIn"]){
							echo"<li><a href='Logout.php'>Logout</a></li>";
						}
						else{
							echo"<li><a href=''Login''>Login</a></li>";
						}
					?>
					
                </ul>
            </nav>
        </div>
		<div id="parallax"></div>
		<div class='aboutMe' id='aboutMe'>
			<article>
				<header>
					<h1>All About Me</h1>
				</header>
				<section>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Libero volutpat sed cras ornare arcu dui vivamus arcu felis. Lacus viverra vitae congue eu consequat ac. Ante metus dictum at tempor. Risus nullam eget felis eget. Nisi scelerisque eu ultrices vitae auctor eu augue ut lectus. Turpis cursus in hac habitasse platea dictumst quisque. Egestas congue quisque egestas diam in arcu cursus euismod. Cursus euismod quis viverra nibh cras pulvinar. In pellentesque massa placerat duis ultricies lacus. Blandit volutpat maecenas volutpat blandit aliquam etiam erat velit. Pellentesque id nibh tortor id. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Diam quis enim lobortis scelerisque fermentum dui faucibus in. Tincidunt arcu non sodales neque. Nulla pharetra diam sit amet nisl. Euismod lacinia at quis risus sed vulputate. Massa ultricies mi quis hendrerit dolor magna eget est lorem. Egestas congue quisque egestas diam in arcu cursus. Neque laoreet suspendisse interdum consectetur libero id.

Tempus egestas sed sed risus pretium quam vulputate dignissim. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et. Nulla pellentesque dignissim enim sit amet venenatis. Purus in mollis nunc sed id semper risus in. Vel pharetra vel turpis nunc eget. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. In hac habitasse platea dictumst quisque sagittis. Urna neque viverra justo nec. Orci a scelerisque purus semper. Sit amet justo donec enim diam vulputate. Nulla facilisi cras fermentum odio eu.

Lectus proin nibh nisl condimentum id venenatis a condimentum. Gravida cum sociis natoque penatibus et magnis dis. Eget nulla facilisi etiam dignissim diam quis enim. Sed egestas egestas fringilla phasellus. Integer eget aliquet nibh praesent tristique magna. Ut morbi tincidunt augue interdum velit euismod in. Neque ornare aenean euismod elementum nisi. Donec ac odio tempor orci dapibus ultrices in. Odio ut enim blandit volutpat maecenas volutpat. Nec tincidunt praesent semper feugiat nibh. Imperdiet proin fermentum leo vel orci porta non pulvinar neque. Ullamcorper a lacus vestibulum sed arcu non.</p>
				</section>
				<section>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Euismod quis viverra nibh cras pulvinar mattis. Nunc sed velit dignissim sodales. Mattis rhoncus urna neque viverra justo nec. Pellentesque eu tincidunt tortor aliquam nulla facilisi. Fermentum dui faucibus in ornare quam viverra orci. Ut consequat semper viverra nam. Nisl suscipit adipiscing bibendum est ultricies integer quis. Sit amet est placerat in egestas erat. Pretium viverra suspendisse potenti nullam ac tortor vitae. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio. Urna et pharetra pharetra massa massa. Imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula ipsum. Nibh cras pulvinar mattis nunc.

Penatibus et magnis dis parturient montes nascetur ridiculus mus. Cursus eget nunc scelerisque viverra. Consectetur libero id faucibus nisl tincidunt eget. Proin libero nunc consequat interdum varius sit amet. Quam vulputate dignissim suspendisse in est ante. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Tincidunt praesent semper feugiat nibh sed pulvinar. Ullamcorper a lacus vestibulum sed. Massa tincidunt nunc pulvinar sapien et ligula. Neque egestas congue quisque egestas diam in arcu cursus euismod. Imperdiet proin fermentum leo vel orci porta non pulvinar neque. Tellus elementum sagittis vitae et leo duis ut. Eget velit aliquet sagittis id consectetur purus ut. Nulla facilisi cras fermentum odio. Proin sed libero enim sed faucibus. Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat. Sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus. Interdum varius sit amet mattis vulputate. Quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Dictum sit amet justo donec enim diam vulputate ut pharetra.

Turpis egestas sed tempus urna et pharetra. Habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Ut sem viverra aliquet eget sit amet tellus. Suscipit tellus mauris a diam maecenas. Scelerisque eu ultrices vitae auctor eu. Urna et pharetra pharetra massa massa. Parturient montes nascetur ridiculus mus mauris vitae ultricies leo integer. Sed ullamcorper morbi tincidunt ornare massa. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. In arcu cursus euismod quis viverra. Tempus iaculis urna id volutpat. Ac tortor dignissim convallis aenean et tortor at risus viverra. Porttitor lacus luctus accumsan tortor posuere. Vitae congue mauris rhoncus aenean vel elit. Amet commodo nulla facilisi nullam vehicula ipsum a arcu. Nunc scelerisque viverra mauris in aliquam sem. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse. Lacus suspendisse faucibus interdum posuere lorem ipsum.</p>
				</section>
			</article>
		</div>
		
		<div id="parallax"></div>
		
		<div class='skills' id='skills'>
			<article>
				<section id='title'><h1>My Skills</h1></section>
				<article id='listOfSkills'>
					<section id='row' class='row'>
						<aside id='column'>
							<h1>Skill 1</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus vulputate eu scelerisque felis imperdiet proin fermentum leo. Integer malesuada nunc vel risus commodo. Viverra tellus in hac habitasse platea dictumst vestibulum rhoncus. Risus pretium quam vulputate dignissim suspendisse in est. Aenean vel elit scelerisque mauris pellentesque. Viverra vitae congue eu consequat ac felis. Risus viverra adipiscing at in. Tortor condimentum lacinia quis vel eros. Id aliquet risus feugiat in. Faucibus purus in massa tempor nec feugiat. Mauris pellentesque pulvinar pellentesque habitant. Dignissim cras tincidunt lobortis feugiat vivamus at augue eget. Imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Nunc aliquet bibendum enim facilisis. Id neque aliquam vestibulum morbi blandit cursus. Nisl rhoncus mattis rhoncus urna neque viverra justo nec. Sed arcu non odio euismod lacinia. Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Nisl nisi scelerisque eu ultrices vitae.

			Sagittis aliquam malesuada bibendum arcu. Id semper risus in hendrerit gravida rutrum quisque non tellus. Ac tincidunt vitae semper quis lectus nulla at. Bibendum enim facilisis gravida neque convallis a cras semper auctor. Mollis nunc sed id semper risus in hendrerit. Rhoncus dolor purus non enim. At quis risus sed vulputate odio ut enim blandit. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Eget aliquet nibh praesent tristique magna sit. Non consectetur a erat nam at. Cursus metus aliquam eleifend mi in. Laoreet sit amet cursus sit amet dictum sit. Amet nulla facilisi morbi tempus iaculis. Rhoncus mattis rhoncus urna neque. Volutpat sed cras ornare arcu dui vivamus arcu. Phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Porta nibh venenatis cras sed felis. Urna cursus eget nunc scelerisque. Accumsan lacus vel facilisis volutpat est.</p>
						</aside>
						<aside id='column'>
							<h1>Skill 2</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium vulputate sapien nec sagittis. Gravida rutrum quisque non tellus. Adipiscing enim eu turpis egestas pretium aenean pharetra magna ac. Tristique senectus et netus et malesuada fames ac turpis. Nam at lectus urna duis convallis convallis tellus. Quis blandit turpis cursus in hac habitasse. Feugiat nibh sed pulvinar proin gravida. Ullamcorper eget nulla facilisi etiam dignissim. Aliquet nibh praesent tristique magna. Tellus rutrum tellus pellentesque eu tincidunt tortor.

			Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium. Nibh sit amet commodo nulla facilisi. Faucibus ornare suspendisse sed nisi lacus sed viverra tellus. Blandit volutpat maecenas volutpat blandit aliquam. Id ornare arcu odio ut sem nulla pharetra. Vulputate mi sit amet mauris commodo quis. Arcu bibendum at varius vel pharetra vel turpis. Eget duis at tellus at urna condimentum. Tellus integer feugiat scelerisque varius morbi enim nunc. Nam libero justo laoreet sit amet cursus sit amet. Neque ornare aenean euismod elementum nisi. Donec ac odio tempor orci. Aliquet nec ullamcorper sit amet risus nullam eget. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Scelerisque purus semper eget duis. Iaculis nunc sed augue lacus viverra.</p>
						</aside>
						<aside id='column'>
							<h1>Skill 3</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus metus aliquam eleifend mi in. Lorem ipsum dolor sit amet consectetur. Tincidunt augue interdum velit euismod in pellentesque. Dictumst quisque sagittis purus sit amet. Faucibus purus in massa tempor nec feugiat. Sagittis vitae et leo duis ut diam quam. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Egestas egestas fringilla phasellus faucibus scelerisque eleifend. Quis vel eros donec ac odio tempor orci dapibus ultrices. Vestibulum rhoncus est pellentesque elit. Iaculis nunc sed augue lacus. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque. Aliquam sem fringilla ut morbi tincidunt augue. At urna condimentum mattis pellentesque id. Pellentesque sit amet porttitor eget dolor. Ultrices eros in cursus turpis massa tincidunt dui. Sodales neque sodales ut etiam sit amet nisl purus. Etiam dignissim diam quis enim lobortis. Fermentum iaculis eu non diam phasellus vestibulum lorem.

			Netus et malesuada fames ac turpis egestas sed tempus urna. Sit amet mauris commodo quis imperdiet massa tincidunt. Sit amet nisl purus in mollis nunc. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Dictum varius duis at consectetur. Consectetur purus ut faucibus pulvinar elementum integer enim neque. In metus vulputate eu scelerisque. Gravida neque convallis a cras semper auctor neque vitae. Commodo viverra maecenas accumsan lacus vel facilisis volutpat est. Mauris vitae ultricies leo integer malesuada nunc vel. Vulputate eu scelerisque felis imperdiet proin. Sem nulla pharetra diam sit amet nisl. Curabitur gravida arcu ac tortor dignissim convallis. Nulla facilisi etiam dignissim diam quis enim. Bibendum est ultricies integer quis auctor. Eros donec ac odio tempor. Senectus et netus et malesuada.</p>
						</aside>
					</section>
					<section id='row' class='row'>
						<aside id='column'>
							<h1>Skill 4</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus vulputate eu scelerisque felis imperdiet proin fermentum leo. Integer malesuada nunc vel risus commodo. Viverra tellus in hac habitasse platea dictumst vestibulum rhoncus. Risus pretium quam vulputate dignissim suspendisse in est. Aenean vel elit scelerisque mauris pellentesque. Viverra vitae congue eu consequat ac felis. Risus viverra adipiscing at in. Tortor condimentum lacinia quis vel eros. Id aliquet risus feugiat in. Faucibus purus in massa tempor nec feugiat. Mauris pellentesque pulvinar pellentesque habitant. Dignissim cras tincidunt lobortis feugiat vivamus at augue eget. Imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Nunc aliquet bibendum enim facilisis. Id neque aliquam vestibulum morbi blandit cursus. Nisl rhoncus mattis rhoncus urna neque viverra justo nec. Sed arcu non odio euismod lacinia. Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Nisl nisi scelerisque eu ultrices vitae.

			Sagittis aliquam malesuada bibendum arcu. Id semper risus in hendrerit gravida rutrum quisque non tellus. Ac tincidunt vitae semper quis lectus nulla at. Bibendum enim facilisis gravida neque convallis a cras semper auctor. Mollis nunc sed id semper risus in hendrerit. Rhoncus dolor purus non enim. At quis risus sed vulputate odio ut enim blandit. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Eget aliquet nibh praesent tristique magna sit. Non consectetur a erat nam at. Cursus metus aliquam eleifend mi in. Laoreet sit amet cursus sit amet dictum sit. Amet nulla facilisi morbi tempus iaculis. Rhoncus mattis rhoncus urna neque. Volutpat sed cras ornare arcu dui vivamus arcu. Phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Porta nibh venenatis cras sed felis. Urna cursus eget nunc scelerisque. Accumsan lacus vel facilisis volutpat est.</p>
						</aside>
						<aside id='column'>
							<h1>Skill 5</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium vulputate sapien nec sagittis. Gravida rutrum quisque non tellus. Adipiscing enim eu turpis egestas pretium aenean pharetra magna ac. Tristique senectus et netus et malesuada fames ac turpis. Nam at lectus urna duis convallis convallis tellus. Quis blandit turpis cursus in hac habitasse. Feugiat nibh sed pulvinar proin gravida. Ullamcorper eget nulla facilisi etiam dignissim. Aliquet nibh praesent tristique magna. Tellus rutrum tellus pellentesque eu tincidunt tortor.

			Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium. Nibh sit amet commodo nulla facilisi. Faucibus ornare suspendisse sed nisi lacus sed viverra tellus. Blandit volutpat maecenas volutpat blandit aliquam. Id ornare arcu odio ut sem nulla pharetra. Vulputate mi sit amet mauris commodo quis. Arcu bibendum at varius vel pharetra vel turpis. Eget duis at tellus at urna condimentum. Tellus integer feugiat scelerisque varius morbi enim nunc. Nam libero justo laoreet sit amet cursus sit amet. Neque ornare aenean euismod elementum nisi. Donec ac odio tempor orci. Aliquet nec ullamcorper sit amet risus nullam eget. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Scelerisque purus semper eget duis. Iaculis nunc sed augue lacus viverra.</p>
						</aside>
						<aside id='column'>
							<h1>Skill 6</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus metus aliquam eleifend mi in. Lorem ipsum dolor sit amet consectetur. Tincidunt augue interdum velit euismod in pellentesque. Dictumst quisque sagittis purus sit amet. Faucibus purus in massa tempor nec feugiat. Sagittis vitae et leo duis ut diam quam. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Egestas egestas fringilla phasellus faucibus scelerisque eleifend. Quis vel eros donec ac odio tempor orci dapibus ultrices. Vestibulum rhoncus est pellentesque elit. Iaculis nunc sed augue lacus. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque. Aliquam sem fringilla ut morbi tincidunt augue. At urna condimentum mattis pellentesque id. Pellentesque sit amet porttitor eget dolor. Ultrices eros in cursus turpis massa tincidunt dui. Sodales neque sodales ut etiam sit amet nisl purus. Etiam dignissim diam quis enim lobortis. Fermentum iaculis eu non diam phasellus vestibulum lorem.

			Netus et malesuada fames ac turpis egestas sed tempus urna. Sit amet mauris commodo quis imperdiet massa tincidunt. Sit amet nisl purus in mollis nunc. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Dictum varius duis at consectetur. Consectetur purus ut faucibus pulvinar elementum integer enim neque. In metus vulputate eu scelerisque. Gravida neque convallis a cras semper auctor neque vitae. Commodo viverra maecenas accumsan lacus vel facilisis volutpat est. Mauris vitae ultricies leo integer malesuada nunc vel. Vulputate eu scelerisque felis imperdiet proin. Sem nulla pharetra diam sit amet nisl. Curabitur gravida arcu ac tortor dignissim convallis. Nulla facilisi etiam dignissim diam quis enim. Bibendum est ultricies integer quis auctor. Eros donec ac odio tempor. Senectus et netus et malesuada.</p>
						</aside>
					</section>
				</article>
			</article>
		</div>
		
		<div id="parallax"></div>
		
		<div class='education' id='education'>
			<h1>My Schooling History</h1>
			<summary>
                <p><b>2012-2017</b> GCSE Caterham High School</p>
                <p><b>2017-2019</b> A Level Caterham High School (sixth form)</p>
                <p><b>2019-2022</b> BSc Computer Science</p>
			</summary>
			<h1>My Qualifications</h1>
			<main>
				<h2>My Alevels</h2>
				<p><b>B</b> Computer Science A level</p>
                <p><b>B</b> Physics A level</p>
                <p><b>C</b> Maths A level</p>
				<br/>
				<h2>My GCES's</h2>
				<p><b>B</b> Computer Science GCSE</p>
				<p><b>A</b> Maths GCSE</p>
				<p><b>B</b> Further Aditional Science GCSE</p>
				<p><b>A</b> Aditional Science GCSE</p>
				<p><b>A</b> Science GCSE</p>
				<p><b>A</b> English Literature GCSE</p>
				<p><b>C</b> English Language GCSE</p>
				<p><b>A</b> Geography GCSE</p>
				<p><b>C</b> Art GCSE</p>
				<p><b>D</b> Spanish GCSE</p>
				
			</main>
		</div>
		
		<div id="parallax"></div>
		
		<div class='experience' id='experience'>
			<h1>Work Experience</h1>
			<dl>
					<dt><h2>Working in IT department</h2></dt>
					<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra nam libero justo laoreet sit. Parturient montes nascetur ridiculus mus mauris vitae ultricies. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. Leo integer malesuada nunc vel risus commodo. Suspendisse in est ante in nibh mauris cursus mattis molestie. Nisl nunc mi ipsum faucibus vitae aliquet nec. Elementum nibh tellus molestie nunc non blandit massa. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. Eget nunc scelerisque viverra mauris in aliquam sem fringilla. Mattis aliquam faucibus purus in massa. Tortor vitae purus faucibus ornare suspendisse sed nisi. In ante metus dictum at tempor. Pellentesque elit eget gravida cum sociis natoque penatibus et. Magna ac placerat vestibulum lectus mauris. Faucibus a pellentesque sit amet porttitor eget dolor.

Gravida quis blandit turpis cursus in hac. A diam maecenas sed enim ut. Purus in mollis nunc sed id semper risus in. Purus gravida quis blandit turpis cursus. Elementum nibh tellus molestie nunc non blandit massa. Tincidunt tortor aliquam nulla facilisi cras fermentum odio. Volutpat est velit egestas dui. Fermentum leo vel orci porta non. Ut morbi tincidunt augue interdum velit euismod in pellentesque massa. Turpis massa tincidunt dui ut. Velit egestas dui id ornare arcu odio. Orci nulla pellentesque dignissim enim. Malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Nulla pellentesque dignissim enim sit amet. Neque convallis a cras semper auctor neque vitae tempus quam. Ut porttitor leo a diam sollicitudin tempor id. Varius vel pharetra vel turpis nunc eget lorem. Rhoncus mattis rhoncus urna neque viverra justo nec ultrices. In iaculis nunc sed augue lacus viverra vitae.

Massa ultricies mi quis hendrerit. Hendrerit dolor magna eget est lorem. Varius sit amet mattis vulputate enim. Suspendisse faucibus interdum posuere lorem ipsum dolor sit. Massa ultricies mi quis hendrerit dolor magna eget. Accumsan in nisl nisi scelerisque eu. Tempus egestas sed sed risus pretium quam. Nisi quis eleifend quam adipiscing. Luctus accumsan tortor posuere ac. Ultrices eros in cursus turpis massa tincidunt. Orci phasellus egestas tellus rutrum. Mollis nunc sed id semper risus in hendrerit. Ornare suspendisse sed nisi lacus. Pellentesque sit amet porttitor eget dolor morbi. Suscipit adipiscing bibendum est ultricies integer quis auctor.
					</dd>
					<dt><h2>Current Job</h2></dt>
					<dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquam nulla facilisi cras fermentum odio eu feugiat pretium. Lobortis elementum nibh tellus molestie nunc non blandit. Nulla posuere sollicitudin aliquam ultrices sagittis. Nulla aliquet enim tortor at auctor. Id porta nibh venenatis cras sed felis eget. Nec ultrices dui sapien eget mi proin sed. Porttitor lacus luctus accumsan tortor posuere ac ut consequat semper. At quis risus sed vulputate odio ut enim blandit. Cursus euismod quis viverra nibh cras pulvinar mattis. Magnis dis parturient montes nascetur ridiculus mus. Tincidunt praesent semper feugiat nibh sed pulvinar proin. Et leo duis ut diam quam nulla. Velit dignissim sodales ut eu sem. Pulvinar elementum integer enim neque volutpat.

Iaculis eu non diam phasellus. Dui accumsan sit amet nulla facilisi morbi tempus iaculis. Etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Malesuada nunc vel risus commodo viverra maecenas. Fermentum et sollicitudin ac orci phasellus. Purus in mollis nunc sed id semper risus. Sociis natoque penatibus et magnis dis parturient. Sed arcu non odio euismod lacinia at quis risus sed. Turpis in eu mi bibendum neque egestas congue quisque egestas. Eu facilisis sed odio morbi quis commodo odio aenean. Viverra nibh cras pulvinar mattis nunc sed blandit libero. Nisl rhoncus mattis rhoncus urna neque viverra justo nec ultrices. Sagittis aliquam malesuada bibendum arcu. Adipiscing enim eu turpis egestas pretium aenean pharetra magna ac. Ac auctor augue mauris augue neque gravida in fermentum et. Dui accumsan sit amet nulla facilisi morbi tempus iaculis urna. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin nibh. Quisque non tellus orci ac auctor augue mauris augue neque.

Porttitor rhoncus dolor purus non enim praesent elementum facilisis leo. Velit ut tortor pretium viverra. Est velit egestas dui id ornare arcu. Sit amet tellus cras adipiscing. Lacus sed viverra tellus in hac habitasse platea dictumst vestibulum. Nec dui nunc mattis enim ut tellus elementum. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra justo. Facilisi cras fermentum odio eu feugiat pretium nibh ipsum. Quis eleifend quam adipiscing vitae. Libero nunc consequat interdum varius sit amet mattis. Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Cursus euismod quis viverra nibh cras. Volutpat odio facilisis mauris sit amet massa vitae tortor. In tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Nam at lectus urna duis convallis convallis tellus id interdum.
					</dd>
			</dl>
		</div>
		
		<div id="parallax"></div>
		
		<div class='portfolio' id='portfolio'>
			<h1>Portfolio</h1>
			<h2>My artwork</h2>
			<figure id='slideShow'>
				<img class='mySlides' src="webroot/img/Logo.png"/>
				<img class='mySlides' src="webroot/img/Mountains_gradient.png"/>
				<video class='mySlides' autoplay loop>
					<source src="webroot/img/Animated mountains.mp4" type="video/mp4">
				</video>
				<button class="next" onclick="plusDivs(-1)">&#10094;</button>
				<button class="prev" onclick="plusDivs(+1)">&#10095;</button>
			</figure>
			<figcaption>
				<h3>Above you can see a logo and background image I made in adobe illustrator as well as an animation I made in adobe after effects</h3>
			</figcaption>
			
			<article>
				<h2>My Coding</h2>
				<h3>I spend a large amount of my time programming and any of my work that exists online can be seen on my <b><a href="https://github.com/mjk32qmul/">git hub page</a></b></h3>
			</article>
		</div>
		
		<div id="parallax"></div>
		
		<div class='contact' id='contact'>
			<h1>My Contact Information</h1>
			<footer id='row'>
				<section id='column'><h2>Email</h2><p>ec19115@qmul.ac.uk</p></section>
				<section id='column'><h2>Phone Number</h2><p>07000000000</p></section>
				<section id='column'><h2>Facebook</h2><a href="www.facebook.com">username</a></section>
				<section id='column'><h2>Twitter</h2><a href="www.twitter.com">username</a></section>
				<section id='column'><h2>Instagram</h2><a href="www.instagram.com">username</a></section>
			</footer>
		</div>
    </body>
</html>


<script>
window.onscroll = function() {Function()};

var header = document.getElementById("nav");
var sticky = header.offsetTop;

function Function() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
	
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>