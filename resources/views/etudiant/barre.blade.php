
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
                  <li class="active">
                    <a class="" href="index.html">
                                  <i class="icon_house_alt"></i>
                                  <span>Dashboard</span>
                              </a>
                  </li>
                  <li class="sub-menu">
                        <a href="{{ url('emplois') }}" class="">
                            
                                    <span>Emploi</span>
                                
                                </a>
                            
                  </li>
                  
                  <li class="sub-menu">
                      <a href="{{ url('notes') }}" class="">
                               
                                  <span>Notes</span>
                              </a>
                      
                  </li>
  
            
                  <li class="sub-menu">
                    <a href="javascript:;" class="">
                                  <span>CV</span>
                                  <span class="menu-arrow arrow_carrot-right"></span>
                              </a>
                    <ul class="sub">
                      <li><a class="" href="{{ url('/cvs/create') }}">Ajouter CV</a></li>
                      <li><a class="" href="{{ url('/cvs') }}">Mes Cvs </a></li>
                    
                    </ul>
                  </li>
  
                    <li>
                      <a class="" href="{{ url('annonces') }}">
                                
                                  <span>Les annonces</span>
                              </a>
                  </li>
                  <li class="sub-menu">
                    <a href="{{ url('offres') }}" class="">
                          
                            <span>Les offres</span>
                          <!--- <span class="menu-arrow arrow_carrot-right"></span>-->
                        </a>
                  </li>
                    <li>
                          <a class="" href="/messages">
                                      <i class="icon_message"></i>
                                      <span>Envoyer message</span>
  
                                  </a>
  
                  </li>
                  <li class="sub-menu" >
                      <a href="/cours" >
                                
                                    <span>Cours</span>
                                </a>
                  </li>   
                  
                    <li >
                      <a href="/calendrier" class="">
                              
                                  <span>Calendrier</span>
                      </a>
                  </li>
                  <li >
                      <a href="/absence" class="">
                                  
                                  <span>Absence</span>
                                  <span class="menu-arrow arrow_carrot-right"></span>
                              </a>
                  
                  </li>
                  <li class="sub-menu">
                <a href="javascript:;" class="">
                              <span>Go To</span>
                              <span class="menu-arrow arrow_carrot-right"></span>
                          </a>
                <ul class="sub">
                  <li><a class="" href="/">Page Accueil</a></li>
                  <li><a class="" href="http://www.fstt.ac.ma/Portail/index.php"><span>FSTT.ac.ma</span></a></li>
                  <li><a class="" href="http://www.fst.ac.ma/Portail/index.php"><span>FSTT.ac.ma</span></a></li>
                  <li><a class="" href="#">facebook FSTT</a></li>
                  <li><a href="mailto:abdellatifettag1998@gmail.com">Admin mail</a></li>
                </ul>
              </li>
  
          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->
