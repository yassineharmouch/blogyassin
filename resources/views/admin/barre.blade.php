 <!--sidebar start-->
 <aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu">
      <li class="active">
        <a class="" href="/enseignant/home">
                      <i class="icon_house_alt"></i>
                      <span>Dashboard</span>
                  </a>
      </li>
      <li class="sub-menu">
            <a href="/emplois" class="">
              <i class="icon_clock_alt"></i>
                        <span>Emploi</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                   
      </li>
      <li class="sub-menu">
                <a href="{{ url('notes/create') }}" class="">
                            <i class="icon_document_alt"></i>
                            <span> Ajouter les Notes</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                
            </li>

            <li class="sub-menu">
                <a href="{{ url('notes') }}" class="">
                            <i class="icon_document_alt"></i>
                            <span>Notes</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                
            </li>
            <li>
                <a class="" href="{{ url('/etudiant') }}">
                            <i class="icon_genius"></i>
                            <span>list des etudiant</span>
                        </a>
            </li>
            <li>
                <a class="" href="/messages">
                  <i class="icon_mail_alt"></i>
                            <span>Envoyer message</span>

                        </a>

        </li>
        <li class="sub-menu">
            <a href="{{ url('cours') }}" class="">
                          <i class="icon_document_alt"></i>
                          <span>Cours</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                        <li><a class="" href="/cours">Our website</a></li>
                        <li><a class="" href="/upload">Dropbox</a></li>>
                    </ul>
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
          <li><a class="" href="#">Admin Email </a></li>
        </ul>
      </li>

    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end-->