<!DOCTYPE html>
    <html lang="en">
        <head>
        <title>PopExpo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css" />
        </head>
        <body>
        <div class="login-form">
            <?php
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php

                    }
                }
                ?>
        <header id="header">
            <div class="inner">
                <a href="index.html" class="logo">PopExpo</a>
                <nav id="nav">
                    <a href="#three-Cosplay">Programme Cosplay</a>
                    <a href="#three-jv">Programme Jeux Vidéo</a>
                    <a href="#categorie">Concour et Trounoir</a>
                    <a href="#footer">Inscription</a>
                </nav>
                <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
            </div>
        </header>

		<!-- Banner -->
        <section id="banner">
            <div class="inner">
                <header>
                    <h1>PopExpo 2022</h1>
                    <h3>Faisons une assemblé</h3>
                </header>
            </div>
        </section>

		<section id="three" class="wrapper " >
			<div class="inner">
				<div id="three-Cosplay">
					<h1>Programme Cosplay</h1>
					<div class="row">
						<div class="col">
							<img class="img-circle" src="images/pic01.jpg" alt="Pic 01" width="150" height="150">
							<h3>Areliann</h3>
							<p><a class="bouton-perso" href="#view-write-01" >Voir Plus</a></p>
								<a href="#three-Cosplay" id="view-write-01">
									<div class="text-descri">
										<h2>Kiuqsxn</h2>
										<p>
											Kiuqsxn, streameur ayant commencé par les jeux FPS, il découvre le monde du RP il y a quelques mois qui devient pour lui une vraie passion.
											<br><br>
											Particulièrement connu pour son role de Pablo sur le serveur GTA RP "21 Jump Click", on peut le retrouver aussi bien de jour comme de nuit sur GTA, New World, F1 ou encore Rainbow Six Siege.
										</p>
										<img class="img" src="images/pic01.jpg" alt="Pic 01">
									</div>
								</a>
						</div>
						<div class="col">
							<img class="img-circle" src="images/pic02.jpg" alt="Pic 02" width="150" height="150">
							<h3>Areliann</h3>
							<p><a class="bouton-perso" href="#view-write-02" >Voir Plus</a></p>
								<a href="#three-Cosplay" id="view-write-02">
									<div class="text-descri">
										<h2>Areliann</h2>
										<p>La pétillante Areliannn débarque à Art to Play (13-14 Novembre à Expo Nantes) pour une conférence et des dédicaces.
											<br><br>
											Créatrice de contenu depuis presque 5 ans, fan de jeu vidéo depuis mon plus jeune âge, on me qualifie de drôle et dynamique ! Je joue principalement à des FPS même si parfois je fais l’impasse et découvre de nouveau jeu en stream avec ma communauté.
											<br><br>
											Occasionnellement j’incarne des personnages dans le monde de GTA RP, créer des histoires et faire vivre ces dernières sont devenus un rendez-vous quotidien sur la chaîne. Ce n’est que le début de d’une longue aventure sur Twitch!
											<br><br>
											Avec JulietteARZ, Sharon (iMeelk) et Chipsette, Areliann forme la formidable communauté MEW team sur Twitch.
										</p>
										<img class="img" src="images/pic02.jpg" alt="Pic 01">
									</div>
								</a>
						</div>
						<div class="col">
							<img class="img-circle" src="images/pic03.jpg" alt="Pic 03" width="150" height="150">
							<h3>ALEXCLICK</h3>
							<p><a class="bouton-perso" href="#view-write-03" >Voir Plus</a></p>
								<a href="#three-Cosplay" id="view-write-03">
									<div class="text-descri">
										<h2>ALEXCLICK</h2>
										<p>
											Le brûlant Alexclick à Art to Play Nantes les 13-14 Novembre.
											<br><br>
											Alexclick est Miguel sur le GTA RP 21 Jump click. Il animera pendant 2 jours la scène Twitch, il fera une conférence et des dédicaces.
											<br><br>
											Situé à Nantes, Alexclick fait partie des célébrités sur Twitch. Il a récemment récolté plus de 200'000 Euros pour le ZEVENT, l'événement caritatif qui détient le record francophone et le 3ème record mondial d'audience sur Twitch.
											<br><br>
											Il s'est fait connaître grâce à GTA RP un stream autour du jeu GTA V qui réécrit le scénario du jeu en direct pour divertir ses spectateurs mais aussi à des émissions thématique autour des animaux ou encore en tant que Sapeur-Pompiers Volontaire.
											<br>Il sort aussi une BD en 2032.
											<br>Il animera la deuxième partie de la scène Twich pendant les deux jours d'Art toPlay !
										</p>
										<img class="img" src="images/pic03.jpg" alt="Pic 01">
									</div>
								</a>
							</div>
						</div>
					</div>
					<div id="three-jv">
						<h1>Programme Jeux Vidéo</h1>
						<div class="row">
							<div class="col">
								<img class="img-circle" src="images/pic01.jpg" alt="Pic 01" width="150" height="150">
								<h3>Areliann</h3>
								<p><a class="bouton-perso" href="#view-write-01" >Voir Plus</a></p>
									<a href="#three-Cosplay" id="view-write-01">
										<div class="text-descri">
											<h2>Kiuqsxn</h2>
											<p>
												Kiuqsxn, streameur ayant commencé par les jeux FPS, il découvre le monde du RP il y a quelques mois qui devient pour lui une vraie passion.
												<br><br>
												Particulièrement connu pour son role de Pablo sur le serveur GTA RP "21 Jump Click", on peut le retrouver aussi bien de jour comme de nuit sur GTA, New World, F1 ou encore Rainbow Six Siege.
											</p>
											<img class="img" src="images/pic01.jpg" alt="Pic 01">
										</div>
									</a>
							</div>
							<div class="col">
								<img class="img-circle" src="images/pic02.jpg" alt="Pic 02" width="150" height="150">
								<h3>Areliann</h3>
								<p><a class="bouton-perso" href="#view-write-02" >Voir Plus</a></p>
									<a href="#three-Cosplay" id="view-write-02">
										<div class="text-descri">
											<h2>Areliann</h2>
											<p>La pétillante Areliannn débarque à Art to Play (13-14 Novembre à Expo Nantes) pour une conférence et des dédicaces.
												<br><br>
												Créatrice de contenu depuis presque 5 ans, fan de jeu vidéo depuis mon plus jeune âge, on me qualifie de drôle et dynamique ! Je joue principalement à des FPS même si parfois je fais l’impasse et découvre de nouveau jeu en stream avec ma communauté.
												<br><br>
												Occasionnellement j’incarne des personnages dans le monde de GTA RP, créer des histoires et faire vivre ces dernières sont devenus un rendez-vous quotidien sur la chaîne. Ce n’est que le début de d’une longue aventure sur Twitch!
												<br><br>
												Avec JulietteARZ, Sharon (iMeelk) et Chipsette, Areliann forme la formidable communauté MEW team sur Twitch.
											</p>
											<img class="img" src="images/pic02.jpg" alt="Pic 01">
										</div>
									</a>
							</div>
							<div class="col">
								<img class="img-circle" src="images/pic03.jpg" alt="Pic 03" width="150" height="150">
								<h3>ALEXCLICK</h3>
								<p><a class="bouton-perso" href="#view-write-03" >Voir Plus</a></p>
									<a href="#three-Cosplay" id="view-write-03">
										<div class="text-descri">
											<h2>ALEXCLICK</h2>
											<p>
												Le brûlant Alexclick à Art to Play Nantes les 13-14 Novembre.
												<br><br>
												Alexclick est Miguel sur le GTA RP 21 Jump click. Il animera pendant 2 jours la scène Twitch, il fera une conférence et des dédicaces.
												<br><br>
												Situé à Nantes, Alexclick fait partie des célébrités sur Twitch. Il a récemment récolté plus de 200'000 Euros pour le ZEVENT, l'événement caritatif qui détient le record francophone et le 3ème record mondial d'audience sur Twitch.
												<br><br>
												Il s'est fait connaître grâce à GTA RP un stream autour du jeu GTA V qui réécrit le scénario du jeu en direct pour divertir ses spectateurs mais aussi à des émissions thématique autour des animaux ou encore en tant que Sapeur-Pompiers Volontaire.
												<br>Il sort aussi une BD en 2032.
												<br>Il animera la deuxième partie de la scène Twich pendant les deux jours d'Art toPlay !
											</p>
											<img class="img" src="images/pic03.jpg" alt="Pic 01">
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
			</div>
		</section>
		<section id="categorie">
			<div class="categorie-col">
				<div>
					<h1>Cosplay</h1>
					<h3>Description</h3>
					<p>
						Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque nesciunt enim consequatur molestiae? Ex, beatae aut. Eaque, quia ipsa quo adipisci fugiat fuga, corporis quam ut at aliquam dolorum nostrum?<br><br>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid magni at necessitatibus tenetur nisi explicabo assumenda repellendus aut dolorum molestias, et quis, modi porro eveniet veritatis a aspernatur. Ea, distinctio! <br><br>
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium debitis earum consectetur minus tempore harum consequatur et. Quis voluptas non neque consectetur sit? Veritatis praesentium officiis saepe accusamus consectetur commodi?
						</p>
				</div>
				<div>
					<h1>Jeux Vidéo</h1>
					<h3>Description</h3>
					<p>
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque nesciunt enim consequatur molestiae? Ex, beatae aut. Eaque, quia ipsa quo adipisci fugiat fuga, corporis quam ut at aliquam dolorum nostrum?<br><br>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid magni at necessitatibus tenetur nisi explicabo assumenda repellendus aut dolorum molestias, et quis, modi porro eveniet veritatis a aspernatur. Ea, distinctio! <br><br>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium debitis earum consectetur minus tempore harum consequatur et. Quis voluptas non neque consectetur sit? Veritatis praesentium officiis saepe accusamus consectetur commodi?
					</p>
				</div>
			  </div>
		</section>
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h3>Inscription</h3>

					<!--<form action="/my-handling-form-page" method="post">

						<div class="field half first">
							<label for="name">Nom et Prénom</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field half">
							<label for="messeage">Cotégorie</label>
							<input name="email" id="email" type="email" placeholder="Cosplay t Jeux Video">
						</div>
						<div class="field">
							<label for="message"></label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form><-->
					<form action="inscription_traitement.php" method="post">
                        <div class="form-group">
                            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                        </div>
                    </form>

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>

				</div>
			</footer>

	</body>
</html>