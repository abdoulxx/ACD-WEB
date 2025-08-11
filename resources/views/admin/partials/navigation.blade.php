<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/" target="_blank">
            <img src="{{ asset('admin/assets/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">ACD CORPORATE</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white  {{ Request::is('admin/home') ? 'bg-gradient-primary' : '' }}" href="{{ route('admin.home.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Tableau de bord</span>
                </a>
            </li>



            <!--- ==========================================
                EVENTS====================================-->
            <hr style="border: 1px solid #FFF;">
            <li class="nav-item mt-3">
                <h4 class="ps-4 ms-2 text-uppercase text-white font-weight-bolder opacity-8" >ÉVÈNEMENTS</h4>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('admin/event-en-cours') ? 'bg-gradient-primary' : '' }}" href="{{ route('admin.event-en-cours.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Evènement(e) en cours</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('admin/event-a-venir') ? 'bg-gradient-primary' : '' }}" href="{{ route('admin.event-a-venir.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Evènement(e) à venir</span>
                </a>
            </li>



            <!--- ==========================================
                CATALOGUES====================================-->
            <hr style="border: 1px solid #FFF;">
            <li class="nav-item mt-3">
                <h4 class="ps-4 ms-2 text-uppercase text-white font-weight-bolder opacity-8" >CATALOGUES</h4>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white  {{ Request::is('admin/forum') ? 'bg-gradient-primary' : '' }} " href="{{ route('admin.forum.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opaci(ty-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Forum International</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white  {{ Request::is('admin/prix') ? 'bg-gradient-primary' : '' }}" href="{{ route('admin.prix.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Prix d'excellence</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('admin/formateur') ? 'bg-gradient-primary' : '' }}" href="{{ route('admin.formateur.index')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">view_in_ar</i>
                    </div>
                    <span class="nav-link-text ms-1">Liste des formateurs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('admin/formation') ? 'bg-gradient-primary' : '' }}" href="{{ route('admin.formation.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">view_in_ar</i>
                    </div>
                    <span class="nav-link-text ms-1">Demande de formation</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('admin/contact') ? 'bg-gradient-primary' : '' }}" href="{{ route('admin.contact.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                    </div>
                    <span class="nav-link-text ms-1">Demande contact</span>
                </a>
            </li>


            <!--- ==========================================
                ADMINISTRATEUR====================================-->

            <hr style="border: 1px solid #FFF;">

            <li class="nav-item mt-3">
                <h4 class="ps-4 ms-2 text-uppercase text-white font-weight-bolder opacity-8" >administrateur</h4>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profil admin</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('admin/moderateur') ? 'bg-gradient-primary' : '' }}" href="">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Ajouter un modérateur</span>
                </a>
            </li>
            <li class="nav-item">
               <form action="{{ route('logout') }}" method="post">
                   @csrf
                   @method('delete')
                   <button class="nav-link text-white btn btn-default">
                       <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                           <i class="material-icons opacity-10">login</i>
                       </div>
                       <span class="nav-link-text ms-1">Se déconnecter</span>
                   </button>
               </form>

            </li>
        </ul>
    </div>
</aside>
