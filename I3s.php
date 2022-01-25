<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MAGIC Site 2</title>
    <link rel="stylesheet" href="i3sStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light navbar-light margin-top:56px; padding-top: 105px; fixed-top fixed-top-2">
    <div class="container">
      <img class="img-fluid w-50"  src="img/UNCW_navbar_image.png" alt ="">
      <!--<a href="#" class="navbar-brand">UNCW MAGIC</a>-->

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navmenu"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#" class="nav-link">Email</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Directory</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">MySeaport</a>
          </li>
          <!--<li class="nav-item">
            <a href="#questions" class="nav-link">Questions</a>
          </li>
          <li class="nav-item">
            <a href="#questions" class="nav-link">People</a>
          </li>-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Quicklinks
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
     <!-- <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>-->
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark margin-top:56px; padding-top: 105px; fixed-top-2 py-0">
    <div class="container">

      <div class="navbar-nav">
      <a href="#" class="navbar-brand">
        <span style="font-size: 130%; text-align:center; font-family:'Times New Roman', Times, serif; justify-content:center; display:flex" class="text-light text-sm-start p-10
        ">Institute for Interdisciplinary Identity Sciences (I3S)</span></a>

        <!--<h5 style="font-size: 160%; text-align:center; font-family:'Times New Roman', Times, serif; text-align:center; justify-content:center; display:flex" class="text-light text-sm-start p-10
        my-5 position-absolute start-50 translate-middle text-fluid w-50">(MAGIC)</h5></a>-->
        
      </div>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navmenu2"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navmenu2">
        <ul class="navbar-nav ms-auto">
          <!--<li class="nav-item">
            <a href="#about" class="nav-link">About</a>
          </li>-->
          <li class="nav-item">
            <li class="nav-item my-3">
              <a href="#home" class="nav-link">Home</a>
            </li>
            <li class="nav-item my-3">
              <a href="#facial" class="nav-link">Projects</a>
          </li>
            <li class="nav-item my-3">
              <a href="#people" class="nav-link">People</a>
            </li>
            <li class="nav-item my-3">
              <a href="index.php" class="nav-link">MAGIC</a>
            </li>
            <li class="nav-item my-3">
              <a href="#contact" class="nav-link">Contacts</a>
            </li>
            <li class="nav-item my-3">
                <a href="affiliation.php" class="nav-link">Affiliations</a>
              </li>
            
          </li>
          
        </ul>
      </div>
      
  </div>
    </nav>
    <section class="p-0 bg-light-grey">
      <div class = "container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
           <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
          </div>
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" >
          <div class="carousel-inner">
            <div class="carousel-item carol active">
              <img src="img/face4.png" class="d-block w-100" alt="affairs1">
              <div class="carousel-caption d-none d-md-block">
                
                <!--<h5 style="font-size: 300%; font-family:'Times New Roman', Times, serif; text-align:center;"><span class="text-primary">MAGIC</span></h5>-->
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/face5.jpg" class="d-block w-100" alt="affairs2">
              <div class="carousel-caption d-none d-md-block">
               <!-- <h5 style="font-size: 300%; font-family:'Times New Roman', Times, serif; text-align:center;"><span class="text-warning">MAGIC</span></h5>-->
              
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/face8.jpg" class="d-block w-100" alt="affairs3">
              <div class="carousel-caption d-none d-md-block">
               <!-- <h5 style="font-size: 300%; font-family:'Times New Roman', Times, serif; text-align:center;"><span class="text-grey">MAGIC</span></h5>-->
              
              </div>
            </div>
            
          </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>
    </section>

    <section id="home" class="home">
      <video class = "video-slide" src="img/AI_Internet_of_things.mp4" muted autoplay loop></video>
      <div class="content">
        <div class="container">
          <!-- <h1>Overview of MAGIC</span></h1> -->
         <h1 class="color_pointer">Overview of<br><span class="text-color-grey">I3S</span></h1>
         <p class="lead">I3S seeks to engage in schorlarly research, teaching, and services via its endeavor to discover, expand and desseminate knowledge, innovate, and lead the application and use of the myraid theories, findings, and technologies defining the rising field of Identity Sciences.
        <br>
        <h2 class="text-color-grey"><span>I3S Technology Transfer Activities</span></h2>
        <p class="lead">
          The IIS Technology Transfer Team consists of Rob Hoon (University Counsel), Steve Fontana (Senior Technology Development Officer for Marine Biotechnology), Karl Ricanek (I3S Director) and Ron Vetter (Professor of Computer Science). The team met numerous times during 2010-2011 and discussed a variety of issues including the development of a licensing model for the MORPH dataset and the development of future software technologies, products and services.
          <p class="lead">
            Two MORPH datasets,were created: (i) a non-commercial version for sale at $99 and (ii) a commercial version with the price negotiated individually for each commercial entity.
          </p>
        </p>      
         <!-- <a href="#">Read More</a>> -->
         
            <div class="row text-center g-4">
              <div class="col-md-6" id="#mission">
                <div class="card flex mission bg-dark-card text-light">
                  <img src="img/face3.jpg" class="card-img-top non-commercial" alt="">
                  <div class="card-body text-center">
                    <!--<div class="h1 mb-3">
                      <i class="bi bi-laptop"></i>
                    </div>-->
                    <h2 class="card-title mb-3" style="font-family:'Times New Roman', Times, serif"><span class="a_color"><strong>Non Commercial Version</strong></span></h2>
                    <p class="card-text" style="font-family:'Times New Roman', Times, serif">
                      non-commercial MORPH dataset: was collected over a span of 5 years and contains 55,000 unique images of more than 13,000 individuals, spanning from 2003 to late 2007. A UNCW uStore was setup in the TouchNet information system to sell the non-commercial version of MORPH online:<a class="a_color bg-light" href="https://ebill.uncw.edu/C20231_ustores/web/product_detail.jsp?PRODUCTID=8&SINGLESTORE=true"><strong> Non commercial version of MORPH</strong></a>
                    </p>
                   <!-- <button type="button" class="btn btn-primary" style="font-family:'Times New Roman', Times, serif" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="for the university. We are particularly interested in aligning this research work with areas of strategic importance for the university, including artificial intelligence and intelligent systems, cybersecurity, marine science and engineering, and remoote sensing, among others.">
                      Read More
                    </button>-->
                  </div>
                </div>
              </div>
              
              <!-- <div class="col-md">
                <div class="card flex expectation bg-dark-card text-light">
                  <img src="img/mission2.jpg" class="card-img-top" alt="">
                  <div class="card-body text-center"> -->
                    <!-- <div class="h1 mb-3">
                      <i class="bi bi-person-square"></i>
                    </div> -->
                    <!-- <h3 class="card-title mb-3" style="font-family:'Times New Roman', Times, serif"><span class="text-danger">Expectation</span></h3>
                    <p class="card-text" style="font-family:'Times New Roman', Times, serif">
                      <!-- MAGIC members offer valuable councel on research projects, provide developmental opportunities in their respective fields of expertise, and serve as conduits for students interested in millitary, intelligence and government(MIG) pathways -->
                    <!-- </p>
                    <a href="overview.html" class="btn btn-dark" style="font-family:'Times New Roman', Times, serif">Read More</a>
                  </div>
                </div>
              </div>  -->
              <div class="col-md-6">
                <div class="card flex bg-dark-card text-light">
                  <img src="img/face9.jpg" class="card-img-top" alt="">
                  <div class="card-body text-center">
                    <!-- <div class="h1 mb-3">
                      <i class="bi bi-people"></i>
                    </div> -->
                    <h2 class="card-title mb-3" style="font-family:'Times New Roman', Times, serif"><span class="a_color"><strong>Commercial MORPH dataset</strong></span></h2>
                    <p class="card-text" style="font-family:'Times New Roman', Times, serif">
                      The database was collected over a span of 10 years and contains 201,997 unique images of 40,390 subjects. Subject ages range from 15 to 78 with a median age of 30. Both datasets contain metadata in the form of age, gender, race, height, weight, and eye coordinates. For license information on commercial dataset email:<a href="mailto:ricanekk@uncw.edu" class="a_color bg-light"><strong> ricanekk@uncw.edu</strong></a>
                    </p>
                    <!-- <a href="overview.html" class="btn btn-primary" style="font-family:'Times New Roman', Times, serif">Read More</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        
         <!-- <h1>Wonderful.<br><span>Island</span></h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos error a quasi officia tempora? Temporibus eligendi vitae expedita mollitia incidunt pariatur a nemo quasi et? Consequuntur in quas rerum nesciunt facilis molestias et laudantium nulla! Quae dolores, facere nemo error, eveniet dolore nam earum, laborum maiores exercitationem architecto ipsam corrupti.</p>
          <a href="#">Read More</a> -->
      </div>

      <div class = "media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
    </section>

    <section id="facial"class="facial-analytics-heads bg-secondary  p-3">
      <div class="container grid">
        <div class="row">
          <div class="col-sm-7 p-0">

            <div class="card bg-light">
              <div class="card-body">
                  <h3 class="my-2 text-secondary"><span>Facial Analytics</span></h3>
                    <p class="">
                      The institute has licensed technology for facial analytics to Facial Analytics, LLC which developed a unique solution for determining the age of a face (adult). This system is the backbone for the Face My Age web application that was launced on July 2nd 2014. The web application marries facial analytics with actuary sciences to present a novel enterprise. <em><strong>Face your age</strong></em> at <a class="a_color" href="http://facemyage.com/">www.FaceMyAge.com</a>
                    </p>
              <br>
              <div class="grants">
                  <h3 class="my-2 text-secondary">Grants</h3>
                    <p >
                      The predecssor, Face Aging Group Research Lab, has recieved more than $3 Million in research from 2003 - 2009. Since 2009 the I3S institute has received over 1.4 million dollars in funding from research grants. <a class ="a_color" href="https://uncw.edu/iis/listofgrantsfromRamses_000.html"> RESEARCH GRANTS LIST</a>
                    </p>
                    <br>
                    <p>
                      <a class="a_color" href="https://uncw.edu/iis/documents/IIS_Proposal_2010_000.pdf">INTERNAL PROPOSAL FOR ESTABLISHING A CENTER ON THE UNCW CAMPUS</a>
                      <img src="img/ricanek.jpg">
                    </p>
              </div>
               <br>
              <div class="research" id="res">
                <p class="a_color lead">Research Focus</p>
                <p>
                  <ul>
                    <li>Synthetic Face Age-Progression from Digital Images</li>
                    <li>Automatic Age Estimation and Classification</li>
                    <li>Automatic Gender Classification and Race Determination from Face Images</li>
                    <li>Template Aging for Face Recognition</li>
                    <li>Mobile Platform Biometric Solutions</li>
                    <li>Very Dense Face Landmarking / Annotation</li>
                    <li>Face and Facial Feature Tracking in Video</li>
                    <li>CASIS, Center for Advanced Studies in Identity Sciences </li>
                  </ul>
                </p>

              </div>
              
        </div>
        </div>
        </div>
        <div class="col-sm-5 py-0">
          <div class="card bg-light p-3">
            <div class="card-body">
              <h3 class="my-2 a_color"><u>In the news</u></h3>
              <nav>
                <ul class="list-group">
                  <p class="">
                    Facial aging software developed by IIS institute is the real deal see video clip: <a class="a_color" href="http://wapo.st/1pJKmIC">Facial Aging System</span></a>
                  </p>
                  <p class="">
                    Facial analytcis software developed by IIS researchers is a big hit on the web. See it at <a class ="a_color" href="http://facemyage.com/">www.FaceMyAge.com</a>
                  </p>
                  <p>
                    Washington Post runs headline story on FaceMyAge.com see the story at: <a class="a_color" href="http://goo.gl/NUcnng">http://goo.gl/NUcnng</a>
                  </p>
                  <p>
                    ARTEMIS Triage Tool designed to help lawenforcement forensically identify child pornography on computers will release new version soon: <cite><a class="a_color" href="http://www.ornl.gov/sci/ees/mssed/isml/research-artemis.shtml">See Artemis site.</a></cite>
                  </p>
                  <p>
                    I3S will be holding media interviews at 1:00 pm on April 11 in Warwick.
                  </p>
                  <p>
                    <a class="a_color" href="https://uncw.edu/articles/2012/04/unc-wilmington-faculty-collaborate-on-unique-%201Cface-age%201D-exhibit,-april-9-22">Face Age Exhibit, April 9-22</a>
                  </p>
                  <p>
                    <a class="a_color" href="http://www.starnewsonline.com/article/20120401/ARTICLES/120339968/0/ENTERTAINMENT10">UNCW tops college hopeful's list</a>
                  </p>
                  <p>
                    <a class="a_color" href="http://www.starnewsonline.com/article/20120401/COLUMNIST/120339969">Aging Group gives glimpse at future face</a>
                    </a>
                  </p>
                  <p>
                    <a class="a_color" href="http://appserv02.uncw.edu/news/artview.aspx?id=3154">Teal Stars: Brandon Hilton, Computer Science</a>
                    </a>
                  </p>
                  <p>
                    <a class="a_color" href="http://www.starnewsonline.com/article/20110514/ARTICLES/110519772">UNCW prepares graduates for careers tackling top issues

                    </a>
                  </p>
                </ul>
              </nav>
                
              <nav>
                <h3 class="my-2 a_color"><u>Best Paper Award</u></h3>
                  <ul class="list-group">
                    <p>
                      Dr. Karl Ricanek, Dr. Yishi Wang, Dr. Cuixian Chen and Dr. Yaw Chang receive "Best Poster Paper" at BTAS 2010biometrics conference: <a class="a_color" href="http://www.cse.nd.edu/BTAS_10/">BTAS 2010</a>
                    </p>
                    <p>
                      Dr. Karl Ricanek, Dr. Eric Patterson and Amrutha Sethuram receive "Best Paper Award" at BTAS 2009 biometrics conference: <a class="a_color" href="http://www.cse.nd.edu/BTAS_09/">BTAS 2009</a>
                    </p>
                  </ul>
                  </nav>

                  <nav>
                    <h3 class="my-2 a_color"><u>UNC-TV Interview</u></h3>
                      <ul class="list-group">
                        <p>
                          North Carolina Now on UNC-TV: <a class="a_color" href="http://people.uncw.edu/pattersone/research/morph.mpeg">UNCW IIS research team interviews</a>
                        </p>
                      </ul>
                  </nav>

                  <nav>
                    <h3 class="my-2 a_color"><u>OAK Ridge Interns</u></h3>
                      <ul class="list-group">
                        <p>
                          <a class="a_color" href="https://uncw.edu/research/OakRidgeInterns.html">OAK Ridge National Lab Interns</a>
                          </a>
                        </p>
                        <a class="a_color" href="https://uncw.edu/chancellor/address/august2011.html">Recognition by former Chancellor DePaolo</a>
                        <a class="a_color" href="https://uncw.edu/chancellor/address/august2011.html"></a>
                      </p>
                      </ul>
                      </nav>

                      <nav>
                        <h3 class="my-2 a_color"><u>Research</u></h3>
                          <ul class="list-group">
                            <p>
                              <a class="a_color" href="https://uncw.edu/iis/Researchpage.html">Funded IIS research</a>
                             </p>
                          </ul>
                          </nav>
              </div>
              </div>
              </div>
        </div>
       
      </div>
    </section>

    <section class="container p-1"> 
      <div id="people" class="container member p-5">
          <h2 class="text-center text-white"style="font-family:'Times New Roman', Times, serif"><strong>THE PEOPLE OF I<sup>2</sup>SIS</strong></h2>
          <!-- <p class="lead text-center text-white mb-5" style="font-family:'Times New Roman', Times, serif">
            All members of MAGIC have work experiences in research, academic, and as well as in industry.
          </p> -->
          <div class="row g-4">
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="img/ricanek.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3" style="font-family:'Times New Roman', Times, serif"><span class="a_color">Karl Ricanek</span></h3>
                  <p class="card-text">
                    <span class="a_color" style="font-family:'Times New Roman', Times, serif">Director of I3S <br><a class="a_color" href="mailto:ricanekk@uncw.edu">ricanekk@uncw.edu</a><br>910-547-0994</span> 
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center" data-bs-parent="#people">
                  <img
                    src="img/midori.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3" style="font-family:'Times New Roman', Times, serif"><span class="a_color">Midori Albert</span></h3>
                  <p class="card-text" style="font-family:'Times New Roman', Times, serif"><span class="a_color" style="font-family:'Times New Roman', Times, serif">Forensics Lead<br><a class="a_color" href="mailto:albertm@uncw.edu">albertm@uncw.edu</a><br>962-7078</span>
                    
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>

    
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="img/chang_yaw.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3" style="font-family:'Times New Roman', Times, serif"><span class="a_color">Yaw Chang</span></h3>
                  <p class="card-text">
                    <span class="a_color" style="font-family:'Times New Roman', Times, serif">Mathematics and Statistics<br><a class="a_color" href="mailto:changy@uncw.edu">changy@uncw.edu</a><br>962-3248</span> 
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="img/wang.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3" style="font-family:'Times New Roman', Times, serif"><span class="a_color">Yishi Wang</span></h3>
                  <p class="card-text">
                    <span class="a_color" style="font-family:'Times New Roman', Times, serif">Mathematics and Statistics<br><a class="a_color" href="mailto:wangy@uncw.edu">wangy@uncw.edu</a><br>962-3292</span> 
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center" data-bs-parent="#people">
                  <img
                    src="img/chen.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3" style="font-family:'Times New Roman', Times, serif"><span class="a_color">Cuixian Chen</span></h3>
                  <p class="card-text" style="font-family:'Times New Roman', Times, serif"><span class="a_color" style="font-family:'Times New Roman', Times, serif">Statistical Algorithm Lead<br><a class="a_color" href="mailto:chenc@uncw.edu">chenc@uncw.edu</a><br>962-3686</span>
                    
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center" data-bs-parent="#people">
                  <img
                    src="img/Judith.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3" style="font-family:'Times New Roman', Times, serif"><span class="a_color">Judith Gebauer</span></h3>
                  <p class="card-text" style="font-family:'Times New Roman', Times, serif"><span class="a_color" style="font-family:'Times New Roman', Times, serif">Info Systems& Operation management<br><a class="a_color" href="mailto:gebauerj@uncw.edu">gebauerj@uncw.edu</a><br>962-3686</span>
                    
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center" data-bs-parent="#people">
                  <img
                    src="img/Eric.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3" style="font-family:'Times New Roman', Times, serif"><span class="a_color">Eric Patterson</span></h3>
                  <p class="card-text" style="font-family:'Times New Roman', Times, serif"><span class="a_color" style="font-family:'Times New Roman', Times, serif">3D/Digital Arts Lead<br><a class="a_color" href="mailto:pattersone@uncw.edu">pattersone@uncw.edu</a><br>962-7701</span>
                    
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center" data-bs-parent="#people">
                  <img
                    src="img/amrutha.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3" style="font-family:'Times New Roman', Times, serif"><span class="a_color">Amrutha Sethuram</span></h3>
                  <p class="card-text" style="font-family:'Times New Roman', Times, serif"><span class="a_color" style="font-family:'Times New Roman', Times, serif">Modeling Lead<br><a class="a_color" href="mailto:pattersone@uncw.edu">sethurama@uncw.edu</a><br>962-3886</span>
                    
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>

            </div>
            </div>
            </section>

            <section class="container" id="contact"> 
              <div class="container p-3">
                <div class="container">
                <table class="table caption-top table-striped table-responsive">
                 <caption class="lead a_color">Contact Us</caption>
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Office</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td>Ricanek, Karl</td>
                      <td>CIS 2042, Campus Box 5935</td>
                      <td>910-547-0994</td>
                      <td><a class="a_color" href="mailto:ricanekk@uncw.edu">ricanekk@uncw.edu</a></td>
                    </tr>
                  </tbody>
                </table>
                </div>
                </div>
    
            </section>

            <!-- <section class="container p-3">
            <div class="container" id="contact">
              <div class="row g-4">
                <div class="col-md">
                  <h3 class="a_color text-center mb-3" style="font-family:'Times New Roman', Times, serif">Contact Us</h3>
                  <ul class="list-group list-group-flush lead">
                    <li class="list-group-item">
                      <span class="fw-bold" style="font-family:'Times New Roman', Times, serif">Main Location:</span><span style="font-family:'Times New Roman', Times, serif"> 601 S. College Rd., Wilmington NC., USA.</span>
                    </li>
                    <li class="list-group-item">
                      <span class="fw-bold" style="font-family:'Times New Roman', Times, serif">Phone:</span><span style="font-family:'Times New Roman', Times, serif"> (910) 555-5555</span>
                    </li>
              
                    <li class="list-group-item">
                      <span class="fw-bold" style="font-family:'Times New Roman', Times, serif">Email:</span><span style="font-family:'Times New Roman', Times, serif">  bill@uncw.edu</span>
                    </li>
      
                  </ul>
                </div>
              </div>
        </div>
        </section>       -->
    
    

    <!-- Head-->




    <!-- Footer -->
    <footer class="container p-5 bg-dark text-white text-center position-relative">
      <div class="container">
        <p class="lead" style="font-family:'Times New Roman', Times, serif">Copyright &copy; 2021 MAGIC Website</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>  -->
    <!-- <script>
            mapboxgl.accessToken =
              'pk.eyJ1IjoibHVrbW9ucmFzYXEiLCJhIjoiY2t4OWdtanN6MGZnMjJ4cGZmazcxM3E0diJ9.-xB0rXH1nm4CUnSmQ8b9EQ'
            var map = new mapboxgl.Map({
              container: 'map',
              style: 'mapbox://styles/mapbox/streets-v11',
              center: [-77.876967, 34.22688],
              zoom: 20,
            })
    </script> -->
  
</body>
</html>
