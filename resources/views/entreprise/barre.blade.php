 <!--sidebar start-->
 <aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu">
        <li class="active">
          <a class="" href="/home">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
        </li>
        <li class="sub-menu">
              <a href="{{ url('/annonces') }}" class="">
                          <span>Annonces</span>
                         <!--- <span class="menu-arrow arrow_carrot-right"></span>-->
                      </a>
        </li>
        
        <li class="sub-menu">
          <a href="{{ url('/offres') }}" class="">
                      <span>Offres de stage</span>
                     <!--- <span class="menu-arrow arrow_carrot-right"></span>-->
                  </a>
        </li>
               
        <li class="sub-menu">
                  <a href="{{ url('/cvs') }}" class="">
                              <span>Cvs</span>
                          </a>
                 
              </li>
              
              <li>
                  <a class="" href="/messages">
                              <i class="icon_message"></i>
                              <span>Envoyer message</span>

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
              <li><a class="" href="https://www.facebook.com/fstt.ac.ma/">facebook FSTT</a></li>
              <li><a class="" href="mailto:admin@admin.com">Admin Email </a></li>
            </ul>
          </li>

      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>
  <!--sidebar end-->