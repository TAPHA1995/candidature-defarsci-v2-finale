@extends('layouts.front')
<br><br>
@section('content')

<div class="container">

    <div class="section1">
    <section id="hero" class="d-flex align-items-center">

<div class="container1-fluid">
    <!-- <div class="textintro">
      <div>
        <p>Un etudiant, un stage<br>FORMATION DE STAGE 100% PRATIQUE<p>
      </div>
      <div>
        <p class="solm mt-4 " > Possibilite de stage souhaitée,Voici une solution,notre entreprise est là pour vous offrir une expérience optimale aux étudiants du début à la fin</p>
      </div>
    </div> -->
    <div class="cards">

	<article class="information [ card ]">
		<p class="texttitle">Un etudiant, un stage<br>FORMATION DE STAGE 100% PRATIQUE</p>
		<!-- <h2 class="title">Never miss your important meetings</h2> -->
		<p class="solm mt-4">Possibilite de stage souhaitée,Voici une solution,notre entreprise est là pour vous offrir une expérience optimale aux étudiants du début à la fin.</p>
		<button class="button" data-toggle="modal" data-target="#exampleModalLong">
			<span>Inscrivez-vous</span>
			<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
				<path d="M0 0h24v24H0V0z" fill="none" />
				<path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4v3z" fill="currentColor" />
			</svg>
		</button>
	</article>
	
</div>
   
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
 Inscrivez vous
</button> -->
   
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
           </button>
        <div>
           <div>
              <h5 class="modal-title" id="exampleModalLongTitle">FORMATION DE STAGE 100% PRATIQUE</h5>
           </div>
           <div>
           <form action="{{route('store.candidat')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email">Adresse Email:</label>
                        <input type="email" name="email" id="email" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nom:</label>
                        <input type="text" name="nom" id="" placeholder="Votre réponse" class="form-control my-3">
                    </div>

                    <div class="form-group">
                        <label for="">Prenom:</label>
                        <input type="text" name="prenom" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <label for="">Téléphone</label>
                        <input type="tel" name="telephone" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <label for="">Adresse Domicile</label>
                        <input type="text" name="adresse" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <label for="">Choisir votre domaine de compétence</label>
                        
                        <select name="domaine" id="" class="form-control my-3">
                            {{-- foreach module --}}
                            @foreach ($module as $modules)
                                <option value="{{ $modules->libele }}">{{ $modules->libele }}</option>
                            @endforeach
                            <!-- <option value="Ressources Humaines">Ressources Humaines</option> -->
                            <option value="Marketing Digital">Marketing Digital</option>
                            <option value="Gestion Projet">Gestion Projet</option>
                            <option value="Informatique Bureautique">Informatique Bureautique</option>
                            <option value="Développement Web">Développement Web</option>
                            <option value="Ardino(Robotique-Internet des objets connectés)">Ardino(Robotique-Internet des objets connectés)</option>
                            <option value="Modélisation et Impression 3D">Modélisation et Impression 3D</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Design Graphique">Design Graphique</option>
                            <option value="Autres">Autres</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="myfile">Télécharger votre CV:</label>
                        <input type="file" id="myfile" name="myfile" accept = "application/pdf" class="form-control my-3"  required>

                    </div>

                    <div class="form-group">
                        <label for="">Question/Suggestion/Commentaire</label>
                        <input type="text" name="question" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <button class="btn mt-3">Envoyer</button>
                        {{-- <button class="btn text-danger float-end mt-2" >Effacer le formumaire</button> --}}
                    </div>
                </form>
                @if (session('success'))
              <script>
               swal("Success","{{ Session::get('success')}}", 'success',{
                 button:true,
                 button:"Ok",
               });
              </script>
              @endif
           </div>
        </div>
      </div>
      </div>
      <div class="modal-body">
      <div class="section2">
        <!-- <div class="card my-3 " style="width:28em; margin: auto">

            <div class="card-header text-black fs-5 fw-bold text-center">FORMATION DE STAGE 100% PRATIQUE</div>
            <div class="card-body">
                <form action="{{route('store.candidat')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email">Adresse Email:</label>
                        <input type="email" name="email" id="email" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nom:</label>
                        <input type="text" name="nom" id="" placeholder="Votre réponse" class="form-control my-3">
                    </div>

                    <div class="form-group">
                        <label for="">Prenom:</label>
                        <input type="text" name="prenom" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <label for="">Téléphone</label>
                        <input type="tel" name="telephone" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <label for="">Adresse Domicile</label>
                        <input type="text" name="adresse" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <label for="">Choisir votre domaine de compétence</label>
                        
                        <select name="domaine" id="" class="form-control my-3">
                            {{-- foreach module --}}
                            @foreach ($module as $modules)
                                <option value="{{ $modules->libele }}">{{ $modules->libele }}</option>
                            @endforeach
                            <option value="Ressources Humaines">Ressources Humaines</option>
                            <option value="Marketing Digital">Marketing Digital</option>
                            <option value="Gestion Projet">Gestion Projet</option>
                            <option value="Informatique Bureautique">Informatique Bureautique</option>
                            <option value="Développement Web">Développement Web</option>
                            <option value="Ardino(Robotique-Internet des objets connectés)">Ardino(Robotique-Internet des objets connectés)</option>
                            <option value="Modélisation et Impression 3D">Modélisation et Impression 3D</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Design Graphique">Design Graphique</option>
                            <option value="Autres">Autres</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="myfile">Télécharger votre CV:</label>
                        <input type="file" id="myfile" name="myfile" accept = "application/pdf" class="form-control my-3"  required>

                    </div>

                    <div class="form-group">
                        <label for="">Question/Suggestion/Commentaire</label>
                        <input type="text" name="question" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <button class="btn mt-3">Envoyer</button>
                        {{-- <button class="btn text-danger float-end mt-2" >Effacer le formumaire</button> --}}
                    </div>
                </form>
                @if (session('success'))
              <script>
               swal("Success","{{ Session::get('success')}}", 'success',{
                 button:true,
                 button:"Ok",
               });
              </script>
              @endif
            </div>
        </div> -->
    </div>

</section>

</div>   
<!-- : -->
<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row">
      <div class=" col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch position-relative">
        <a href="https://www.youtube.com/watch?v=ja0ZAA84dD0" class="glightbox play-btn mb-4"></a>
      </div>

      <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
        <h3>Programme</h3>
        <p>Bienvenue dans le Programme , une expérience immersive conçue pour vous aider à atteindre votre plein potentiel et à évoluer vers la meilleure version de vous-même. Notre programme combine des enseignements approfondis, un coaching personnalisé et des ressources puissantes pour catalyser votre croissance personnelle.</p>

        <div class="icon-box">
          <div class="icon"><i class="bx bx-fingerprint"></i></div>
          <h4 class="title"><a href="">projet</a></h4>
          <p class="description"> la partie projet revêt une importance particulière. Elle offre à chaque stagiaire l'opportunité de mettre en pratique les connaissances acquises au cours de la formation, de renforcer ses compétences et d'explorer de nouvelles dimensions dans le domaine. Ces projets sont conçus pour être de réels défis, stimulant la créativité et encourageant l'innovation.</p>
        </div>

        <div class="icon-box">
          <div class="icon"><i class="bx bx-gift"></i></div>
          <h4 class="title"><a href="">Invite du jour</a></h4>
          <p class="description"> la partie 'Invité du Jour', une occasion unique pour chaque stagiaire de bénéficier de l'expérience partagée par des développeurs chevronnés et d'autres professionnels du secteur. Ces sessions invitent des experts renommés à partager leurs parcours, leurs meilleures pratiques et leurs conseils précieux, offrant ainsi aux stagiaires une perspective concrète sur les défis et les opportunités qui les attendent dans le domaine du développement</p>
        </div>

        <div class="icon-box">
          <div class="icon"><i class="bx bx-atom"></i></div>
          <h4 class="title"><a href="">Hackaton</a></h4>
          <p class="description">la partie Hackathon, elle permet à chaque stagiaire de faire valoir son talent grâce à des projets conçus avec créativité en collaboration avec d'autres personnes. C'est un espace dynamique où l'innovation et la collaboration sont encouragées. Les équipes auront l'opportunité de relever des défis stimulants, de partager leurs idées novatrices et d'appliquer leurs compétences techniques dans un environnement qui favorise l'apprentissage et la croissance professionnelle.</p>
        </div>

      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container">

    <div class="text-center title">
      <h3>REALISATIONS</h3>
      <p>Voici quelques realisations qui ont ete faite tout au long de ce parcours.</p>
    </div>

    <div class="row counters position-relative">

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
        <p>Clients</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
        <p>Projects</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
        <p>Hours Of Support</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
        <p>Hard Workers</p>
      </div>

    </div>

  </div>
</section><!-- End Counts Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
  <div class="container">
    

      <div class="section-title">
        <h2>Partenariats</h2>
     </div>

    <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

      
      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/volkeno.png" class="img-fluid " alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/xarala.png" class="img-fluid" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/bakeli.jpeg" class="img-fluid" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/forceN.jpeg" class="img-fluid" alt="">
        </div>
      </div>

  </div>
</section><!-- End Clients Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Services</h2>
      <p>Notre équipe d'experts chevronnés combine créativité, expertise technique et stratégies novatrices pour offrir des solutions  qui répondent à vos objectifs spécifiques.
        Voici quelques unes de nos services .
      </p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-cash-stack" style="color: #ff689b;"></i></div>
          <h4 class="title"><a href="">Creation de sites web</a></h4>
          <p class="description">Sites Web Professionnels
            <br>Sites E-Commerce Performants
            <br>Portfolio et Sites Personnels
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-calendar4-week" style="color: #e9bf06;"></i></div>
          <h4 class="title"><a href="">Creation Design</a></h4>
          <p class="description">Conception de l'Interface Utilisateur (UI)
            <br>Conception de l'Expérience Utilisateur (UX)
            <br>Création de Logo et Identité Visuelle 
          </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-chat-text" style="color: #3fcdc7;"></i></div>
          <h4 class="title"><a href="">Marketing Digital</a></h4>
          <p class="description">Marketing des Médias Sociaux
            <br>Publicité en Ligne
            <br>SEO (Optimisation pour les Moteurs de Recherche)
          </p>
        </div>
      </div>
      
    </div>

  </div>
</section><!-- End Services Section -->


<!-- ======= Testimonials Section ======= -->
<div class="text-center title">
  <h3>TEMOIGNAGES</h3>
</div>
<section id="testimonials" class="testimonials">
  
  <div class="container position-relative">
    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          
        
          <div class="testimonial-item">
            <img src="assets/img/testimonials/souane.png" class="testimonial-img" alt="">
            <h3>Moustapha souane</h3>
            <h4>Developpeur web</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Au début, j'avais quelques appréhensions, car c'était ma première expérience professionnelle dans le domaine du développement
              Ce stage de formation à DEFARSCI m'a également permis de développer des compétences essentielles en travail d'équipe
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/abibatou.png" class="testimonial-img" alt="">
            <h3>Abibatou Badji</h3>
            <h4>Marketing Digital</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Mon expérience avec le stage de formation en marketing digital à DEFARSCI a été extrêmement enrichissante et transformative
              Le programme a dépassé toutes mes attentes. Les formateurs étaient des experts chevronnés de l'industrie, passionnés par leur domaine et dévoués à partager leurs connaissances.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/solm.jpeg" class="testimonial-img" alt="">
            <h3>Seydina Ousmane Laye</h3>
            <h4>Design</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Je suis ravi de partager mon expérience lors du stage de formation en design à DEFARSCI que j'ai suivi récemment.
               Avant de rejoindre ce programme, j'avais des compétences de base en design, mais je cherchais à approfondir mes connaissances et à perfectionner mes compétences.
               Les travaux pratiques et les projets réels ont été l'un des points forts du stage. 
               <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Team</h2>
      <p>Notre équipe de coachs dédiés est là pour vous accompagner tout au long de votre parcours de développement personnel.
        Venez Découvrir ceux qui se cachent derrière le succès de notre programme.
        Vous avez votre place. Donc l'opportunité est à votre portée!

      </p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <img src="assets/img/team/coach alpha.jpeg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Alpha sow</h4>
            <span>Chef Coach</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <img src="assets/img/team/coach moussa.jpeg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Moussa Ndoye</h4>
            <span>Coach dev web</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <img src="assets/img/team/fatou faye.jpeg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Fatou Faye</h4>
            <span>Assistante</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <img src="assets/img/team/coach lamine.jpeg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Lamine Tamba</h4>
            <span> Maintenance</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Team Section -->
</main>

    <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid my-5">

<!-- Footer -->
<footer
        class="text-center text-lg-start text-white"
        style="background-color: #ECEFF1"
        >
  <!-- Section: Social media -->
  <section
           class="d-flex justify-content-between p-4"
           style="background-color: #87CEEB"
           >
    <!-- Left -->
    <div class="me-5">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="text-white me-4">
        <i class="fa fa-facebook"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fa fa-linkedin"></i>
      </a>
      
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold text-dark">DEFARSCI</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p class="text-dark">
          DEFAR Sci signifie Développement par l’Enseignement, la Formation,
l’Application et la Recherche dans les Sciences. C’est un club d’innovation et
de transmission en faveur du progrès humain.
DEFAR c’est « fabriquer », « réparer » en wolof. En d’autres termes, DEFAR
Sci pourrait signifier également « nous sommes venu fabriquer, apporter notre
pierre à l’édifice ». 
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold text-dark">MODULES</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          
<p>
              <a href="#!" class="text-dark">community manager</a>
              </p>
                  <p>
                    <a href="#!" class="text-dark">Design Graphique</a>
                       </p>
                  <p>
                    <a href="#!" class="text-dark">Arduino & impression 3d</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">Ressource humaine</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">Developpement web</a></p>
                    <p>
                    <a href="#!" class="text-dark">Maintenance informatique</a></p>
                    <p>
                    <a href="#!" class="text-dark">Gestion de projet</a></p>
        </div>
        <!-- Grid column -->


        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase  text-dark fw-bold">Contact</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
        
          <div class="form-outline form-white mb-4 text-dark">
            <input type="text-dark" id="formControlLg" class="form-control form-control-lg" />
            <label class="form-label" for="formControlLg">Search</label>
          </div>
          <p><i class="fa fa-home mr-3 text-dark"></i> <span class="text-dark">sacre coeur, rnd pt jvc, SN</span></p>
          <p><i class="fa fa-envelope mr-3 text-dark"></i><span class="text-dark"> rose.dieng.lab@gmail.com</span></p>
          <p><i class="fa fa-phone mr-3 text-dark"></i> <span class="text-dark"> + 01 234 567 88</span></p>
          <p><i class="fa fa-print mr-3 text-dark"></i> <span class="text-dark">+ 01 234 567 89</span></p>
        </div>
<!--  -->
<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase text-dark fw-bold">Opening hours</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <table class="table text-center text-dark">
            <tbody class="font-weight-normal">
              <tr>
                <td>Mon - Thu:</td>
                <td>9am - 6pm</td>
              </tr>
              <tr>
                <td>wed - thu:</td>
                <td>9am - 6pm</td>
              </tr>
              <tr>
                <td>friday:</td>
                <td>9am - 6pm</td>
              </tr>
            </tbody>
          </table>
        </div>
       
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div
       class="text-center p-3"
       style="background-color: #f55a2b"
       >
    © 2024 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/"
       >solm_boy</a
      >
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</div>
<!-- End of .container -->

  <!-- Inclure Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <style>
/* .section1{
    display:flex;

} */



@import url("https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&display=swap");

*,


*:after,
*:before {
	box-sizing: border-box;
}
.deconnect{
  background-color:#f55a2b;

}
.texttitle{
  color:#ffff;
  background-color:#f55a2b;
  border-radius:10px;
  padding:10px;
}
:root {
	// Basic
	--c-white: #fff;
	--c-black: #000;

	// Greys
	--c-ash: #eaeef6;
	--c-charcoal: #a0a0a0;
	--c-void: #141b22;

	// Beige/Browns
	--c-fair-pink: #FFEDEC;
	--c-apricot: #FBC8BE;
	--c-coffee: #754D42;
	--c-del-rio: #917072;

	// Greens
	--c-java: #1FCAC5;

	// Purples
	--c-titan-white: #f1eeff;
	--c-cold-purple: #a69fd6;
	--c-indigo: #6558d3;
	--c-governor: #4133B7;
}

/* body {
	font-family: "Spline Sans", sans-serif;
	line-height: 1.5;
	min-height: 100vh;
	background-color: var(--c-ash);
} */

.cards {
	display: flex;
	flex-wrap: wrap;
	align-items: flex-start;
	flex-wrap: wrap;
	justify-content: center;
	gap: 2.5rem;
	width: 90%;
	max-width: 1000px;
	margin: 10vh auto;
}

.card {
  margin-top:110px;
	border-radius: 16px;
	box-shadow: 0 30px 30px -25px rgba(#4133B7, .25);
	max-width: 500px;
}


.information {
	background-color: var(--c-white);
	padding: 1.5rem;

	.tag {
		display: inline-block;
		background-color: var(--c-titan-white);
		color: var(--c-indigo);
		font-weight: 600;
		font-size: 1rem;
		padding: 0.5em 0.75em;
		line-height: 1;
		border-radius: 6px;
		& + * {
			margin-top: 1rem;
		}
	}

	.title {
		font-size: 1.5rem;
		color: var(--c-void);
		line-height: 1.25;
		& + * {
			margin-top: 1rem;
		}
	}

	.info {
		color: var(--c-charcoal);
		& + * {
			margin-top: 1.25rem;
		}
	}

	.button {
		font: inherit;
		line-height: 1;
		background-color: var(--c-white);
		border: 1px solid;
		color: #ffff;
		padding: 0.5em 1em;
		border-radius: 6px;
		font-weight: 500;
		display: inline-flex;
		align-items: center;
		justify-content: space-between;
		gap: 0.5rem;
    margin-top:10px;
		&:focus {
			background-color: var(--c-indigo);
			color: var(--c-white);
		}
	}
	.button:hover{
    background-color:#f55a2b;
  }
	.details {
		display: flex;
		gap: 1rem;
		div {
			padding: .75em 1em;
			background-color: var(--c-titan-white);
			border-radius: 8px;
			display: flex;
			flex-direction: column-reverse;
			gap: .125em;
			flex-basis: 50%;
		}
		
		dt {
			font-size: .875rem;
			color: var(--c-cold-purple);
		}
		
		dd {
			color: var(--c-indigo);
			font-weight: 600;
			font-size: 1.25rem;
		}
	}
}


.plan {
	padding: 10px;
	background-color: var(--c-white);
	color: var(--c-del-rio);
	
	strong {
		font-weight: 600;
		color: var(--c-coffee);
	}
	
	.inner {
		padding: 20px;
		padding-top: 40px;
		background-color: var(--c-fair-pink);
		border-radius: 12px;
	position: relative;
		overflow: hidden;
	}
	
	.pricing {
		position: absolute;
		top: 0;
		right: 0;
		background-color: var(--c-apricot);
		border-radius: 99em 0 0 99em;
		display: flex;
		align-items: center;
		padding: .625em .75em;
		font-size: 1.25rem;
		font-weight: 600;
		color: var(--c-coffee);
		small {
			color: var(--c-del-rio);
			font-size: .75em;
			margin-left: .25em;
		}
		
	}
	
	.title {
		font-weight: 600;
		font-size: 1.25rem;
		color: var(--c-coffee);
		& + * {
			margin-top: .75rem;
		}
	}
	
	.info {
		& + * {
			margin-top: 1rem;
		}
	}
	
	.features {
		display: flex;
		flex-direction: column;
		li {
			display: flex;
			align-items: center;
			gap: .5rem;
			& + * {
				margin-top: .75rem;
			}
		}
		
		.icon {
			background-color: var(--c-java);
			display: inline-flex;
			align-items: center;
			justify-content: center;
			color: var(--c-white);
			border-radius: 50%;
			width: 20px;
			height: 20px;
			svg {
				width: 14px;
				height: 14px;
			}
		}
		
		& + * {
			margin-top: 1.25rem;
		}
	}
	
	button {
		font: inherit;
		background-color: var(--c-indigo);
		border-radius: 6px;
		color: var(--c-white);
		font-weight: 500;
		font-size: 1.125rem;
		width: 100%;
		border: 0;
		padding: 1em;
		&:hover,
		&:focus {
			background-color: var(--c-governor);
		}
	}
	
	
}



.textintro{
  display:flex;
  flex-direction:column;
  justify-content:left;
  width: 450px;
  margin-top:300px;
}
.close{
  float:right;
}
.container1-fluid {
  background-image: url('images/defarsci.jpg');
  background-size: cover;
  background-position: center; /* Centre l'image dans la section */
    height: 100vh; 
    padding:20px;
    padding-top: 94px;
    margin-top:10px;
    width: 100%;
  
}

.container1-fluid .solm {
  color: white;
  margin: 10px 0 0 0;
  font-size: 20px;
}

 
@media (max-width: 768px) {
  .container1-fluid h1 {
    font-size: 28px;
    line-height: 36px;
  }
  .container1-fluid .btn  {

  }
  .container1-fluid h2 {
    font-size: 18px;
    line-height: 24px;
  }

  
}
/* fufuyfu */
.solm{
  color:black;
  
}
.carousel-item img{
    height:185vh;
    width: 500px;
}
.carousel{
    width: 50%;
    
}
.form-group .btn{
    background-color:#f55a2b;
}
.card-header{
    background-color:#f55a2b;
}
.textcontainer{
    width:50%;
    /* display:flex;
    justify-content:center; */

}
.textslider{
    text-align:center;
    position: absolute;
    margin-top:50%;
}
.maincontainer{
    width:500px;
    height:185vh;
    background-color:#f55a2b;

}

.buttoncontainer{
    background-color: rgb(151, 142, 142);
    border-radius: 20px;
    padding: 12px;

}
.buttoncontainer a{
    text-decoration: none;
}
.buttonpostuler{
   float: right;
   margin-top: 30px;
   background-color: rgb(97, 84, 84);
}
</style>

<style>
  .client-logo img{
    width: 200px;
    height: 200px;
  }

</style>
<style>
  body {
font-family: "Open Sans", sans-serif;
color: #444444;
}

a {
text-decoration: none;
color: #49b5e7;
}

a:hover {
color: #76c7ed;
text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
font-family: "Dosis", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
position: fixed;
visibility: hidden;
opacity: 0;
right: 15px;
bottom: 15px;
z-index: 996;
background: #49b5e7;
width: 40px;
height: 40px;
border-radius: 4px;
transition: all 0.4s;
}

.back-to-top i {
font-size: 28px;
color: #fff;
line-height: 0;
}

.back-to-top:hover {
background: #6dc4ec;
color: #fff;
}

.back-to-top.active {
visibility: visible;
opacity: 1;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
background: #fff;
transition: all 0.5s;
z-index: 997;
padding: 20px 0;
box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.05);
}

#header .logo {
font-size: 28px;
margin: 0;
padding: 0;
line-height: 1;
font-weight: 700;
letter-spacing: 1px;
text-transform: uppercase;
font-family: "Lato", sans-serif;
}

#header .logo a {
color: #0f394c;
}

#header .logo img {
max-height: 40px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
padding: 0;
}

.navbar ul {
margin: 0;
padding: 0;
display: flex;
list-style: none;
align-items: center;
}

.navbar li {
position: relative;
}

.navbar a,
.navbar a:focus {
display: flex;
align-items: center;
justify-content: space-between;
padding: 10px 0 10px 30px;
font-family: "Dosis", sans-serif;
font-size: 15px;
font-weight: 600;
color: #0f394c;
white-space: nowrap;
transition: 0.3s;
text-transform: uppercase;
}

.navbar a i,
.navbar a:focus i {
font-size: 12px;
line-height: 0;
margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
color: #49b5e7;
}

.navbar .dropdown ul {
display: block;
position: absolute;
left: 14px;
top: calc(100% + 30px);
margin: 0;
padding: 10px 0;
z-index: 99;
opacity: 0;
visibility: hidden;
background: #fff;
box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
transition: 0.3s;
}

.navbar .dropdown ul li {
min-width: 200px;
}

.navbar .dropdown ul a {
padding: 10px 20px;
font-size: 15px;
text-transform: none;
font-weight: 500;
}

.navbar .dropdown ul a i {
font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
color: #49b5e7;
}

.navbar .dropdown:hover>ul {
opacity: 1;
top: 100%;
visibility: visible;
}

.navbar .dropdown .dropdown ul {
top: 0;
left: calc(100% - 30px);
visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
opacity: 1;
top: 0;
left: 100%;
visibility: visible;
}

@media (max-width: 1366px) {
.navbar .dropdown .dropdown ul {
left: -90%;
}

.navbar .dropdown .dropdown:hover>ul {
left: -100%;
}
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
color: #0f394c;
font-size: 28px;
cursor: pointer;
display: none;
line-height: 0;
transition: 0.5s;
}

.mobile-nav-toggle.bi-x {
color: #fff;
}

@media (max-width: 991px) {
/* .mobile-nav-toggle {
display: block;
}

.navbar ul {
display: none;
} */
}

</style>


@endsection