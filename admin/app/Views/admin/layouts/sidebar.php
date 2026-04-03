<style>

    .sidebar-expand-lg.layout-fixed .app-sidebar .sidebar-wrapper {

        padding: 10px 0;

    }

    .sidebar-wrapper .sidebar-menu > .nav-item > .nav-link.active:not(:hover) {

        background-color: #0a5cab;

    }

    .sidebar-wrapper .sidebar-menu > .nav-item.menu-open > .nav-link, .sidebar-wrapper .sidebar-menu > .nav-item:hover > .nav-link, .sidebar-wrapper .sidebar-menu > .nav-item > .nav-link:focus{

         background-color: #0a5cab;

    }

    .sidebar-menu .nav-item > .nav-link {

        border-radius: 0;

    }

    

    .sidebar-wrapper .sidebar-menu > .nav-item > .nav-treeview {

        background: #494e53;

        border-radius: 0;

    }

    .sidebar-wrapper .nav-treeview > .nav-item > .nav-link {

        border-radius: 0;

    }

    .sidebar-wrapper .nav-treeview > .nav-item > .nav-link:hover {

        background-color: #494e53;

    }

   .sidebar-wrapper .nav-treeview > .nav-item > .nav-link.active, .sidebar-wrapper .nav-treeview > .nav-item > .nav-link.active:hover, .sidebar-wrapper .nav-treeview > .nav-item > .nav-link.active:focus {

    background-color: #0a5cab;

}

</style>



<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">

  <!-- Sidebar Brand -->

  <div class="sidebar-brand">

    <a href="<?= base_url(); ?>dashboard" class="brand-link">

      <img src="<?= base_url(); ?>assets/admin/img/datar-logo.png" alt="datar-cancer-genetics-logo" class="brand-image opacity-75 shadow" />

    </a>

  </div>



  <!-- Sidebar Wrapper -->

  <div class="sidebar-wrapper">

    <nav class="mt-2">

      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

        

        <!-- Meta Tag -->

        <li class="nav-item">

          <a href="<?= base_url('meta_tags'); ?>" class="nav-link <?= (service('uri')->getSegment(1) == 'meta_tags') ? 'active' : ''; ?>">

            <p>Meta Tag</p>

          </a>

        </li>



        <!-- Basic Info -->

        <li class="nav-item">

          <a href="<?= base_url('dashboard/contact_us'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'contact_us') ? 'active' : ''; ?>">

            <p>Basic Information</p>

          </a>

        </li>



        <!-- Homepage -->

        <li class="nav-item">

          <a href="<?= base_url('dashboard/homepage'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'homepage') ? 'active' : ''; ?>">

            <p>Home page</p>

          </a>

        </li>



        <!-- Solutions -->

        <li class="nav-item">

          <a href="<?= base_url('dashboard/solutions_screening'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'solutions_screening') ? 'active' : ''; ?>">

            <p>Solutions page</p>

          </a>

        </li>



        <!-- Products -->

        <li class="nav-item has-treeview <?= in_array(service('uri')->getSegment(2), ['trucheck', 'trublood', 'exacta', 'CellDx', 'Chemo', 'Cancertrack','Pinaka','Targetmrd']) ? 'menu-open' : ''; ?>">

          <a href="#" class="nav-link <?= in_array(service('uri')->getSegment(2), ['trucheck', 'trublood', 'exacta', 'CellDx', 'Chemo', 'Cancertrack','Pinaka','Targetmrd']) ? 'active' : ''; ?>">

            <p>Products <i class="nav-arrow bi bi-chevron-right"></i></p>

          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">

              <a href="<?= base_url('dashboard/trucheck'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'trucheck') ? 'active' : ''; ?>">

                <p>EasyCheck360</p>

              </a>

            </li>

            <li class="nav-item">

              <a href="<?= base_url('dashboard/trublood'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'trublood') ? 'active' : ''; ?>">

                <p>Trublood</p>

              </a>

            </li>

            <li class="nav-item">

              <a href="<?= base_url('dashboard/exacta'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'exacta') ? 'active' : ''; ?>">

                <p>Exacta</p>

              </a>

            </li>

             <li class="nav-item">

              <a href="<?= base_url('dashboard/Pinaka'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'Pinaka') ? 'active' : ''; ?>">

                <p>Pinaka</p>

              </a>

            </li>

            <li class="nav-item">

              <a href="<?= base_url('dashboard/CellDx'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'CellDx') ? 'active' : ''; ?>">

                <p>CellDx</p>

              </a>

            </li>

            <li class="nav-item">

              <a href="<?= base_url('dashboard/Chemo'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'Chemo') ? 'active' : ''; ?>">

                <p>Chemo-scale</p>

              </a>

            </li>

            <li class="nav-item">

              <a href="<?= base_url('dashboard/Cancertrack'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'Cancertrack') ? 'active' : ''; ?>">

                <p>Cancertrack</p>

              </a>

            </li>

            <li class="nav-item">

              <a href="<?= base_url('dashboard/Targetmrd'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'Targetmrd') ? 'active' : ''; ?>">

                <p>Target mrd</p>

              </a>

            </li>

           

          </ul>

        </li>



        <!-- Latest Advancements -->

        <li class="nav-item">

          <a href="<?= base_url('dashboard/latest_cancer_advancements'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'latest_cancer_advancements') ? 'active' : ''; ?>">

            <p>Latest Ad</p>

          </a>

        </li>



        <!-- Event -->

        <li class="nav-item">

          <a href="<?= base_url('event'); ?>" class="nav-link <?= (service('uri')->getSegment(1) == 'event') ? 'active' : ''; ?>">

            <p>Event Ad</p>

          </a>

        </li>



        <!-- FAQs -->

        <li class="nav-item">

          <a href="<?= base_url('Faqs'); ?>" class="nav-link <?= (service('uri')->getSegment(1) == 'Faqs') ? 'active' : ''; ?>">

            <p>Faqs</p>

          </a>

        </li>



        <!-- Inquiry Log -->

        <li class="nav-item has-treeview <?= in_array(service('uri')->getSegment(2), ['contact_us_enquiry', 'footerform']) ? 'menu-open' : ''; ?>">

          <a href="#" class="nav-link <?= in_array(service('uri')->getSegment(2), ['contact_us_enquiry', 'footerform']) ? 'active' : ''; ?>">

            <p>Inquiry Log <i class="nav-arrow bi bi-chevron-right"></i></p>

          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">

              <a href="<?= base_url('dashboard/contact_us_enquiry'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'contact_us_enquiry') ? 'active' : ''; ?>">

                <p>Contact Page Enquiry</p>

              </a>

            </li>

            <li class="nav-item">

              <a href="<?= base_url('dashboard/footerform'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'footerform') ? 'active' : ''; ?>">

                <p>Footer Form</p>

              </a>

            </li>

          </ul>

        </li>



        <!-- Who We Are -->

        <li class="nav-item has-treeview <?= in_array(service('uri')->getSegment(2), ['whoweare']) || in_array(service('uri')->getSegment(1), ['Team', 'Testportfolio']) ? 'menu-open' : ''; ?>">

          <a href="#" class="nav-link <?= in_array(service('uri')->getSegment(2), ['whoweare']) || in_array(service('uri')->getSegment(1), ['Team', 'Testportfolio']) ? 'active' : ''; ?>">

            <p>Who We Are <i class="nav-arrow bi bi-chevron-right"></i></p>

          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">

              <a href="<?= base_url('dashboard/whoweare'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'whoweare') ? 'active' : ''; ?>">

                <p>Page Text Update</p>

              </a>

            </li>

            <li class="nav-item">

              <a href="<?= base_url('Team'); ?>" class="nav-link <?= (service('uri')->getSegment(1) == 'Team') ? 'active' : ''; ?>">

                <p>Team</p>

              </a>

            </li>

            <li class="nav-item">

              <a href="<?= base_url('Testportfolio'); ?>" class="nav-link <?= (service('uri')->getSegment(1) == 'Testportfolio') ? 'active' : ''; ?>">

                <p>Portfolio</p>

              </a>

            </li>

          </ul>

        </li>

        

        <li class="nav-item">

          <a href="<?= base_url('publications'); ?>" class="nav-link <?= (service('uri')->getSegment(1) == 'publications') ? 'active' : ''; ?>">

            <p>Publications</p>

          </a>

        </li>



        <!-- Legal -->

        <li class="nav-item">

          <a href="<?= base_url('dashboard/policy_terms'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'policy_terms') ? 'active' : ''; ?>">

            <p>Terms of Use</p>

          </a>

        </li>

        <li class="nav-item">

          <a href="<?= base_url('dashboard/DataProtection'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'DataProtection') ? 'active' : ''; ?>">

            <p>Data Protection</p>

          </a>

        </li>

        <li class="nav-item">

          <a href="<?= base_url('dashboard/cookiespolicy'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'cookiespolicy') ? 'active' : ''; ?>">

            <p>Cookies Policy</p>

          </a>

        </li>

        <li class="nav-item">

          <a href="<?= base_url('dashboard/privacypolicy'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'privacypolicy') ? 'active' : ''; ?>">

            <p>Privacy Policy</p>

          </a>

        </li>

        

        <li class="nav-item">

          <a href="<?= base_url('dashboard/informationsecuritymanagementsystempolicy'); ?>" class="nav-link <?= (service('uri')->getSegment(2) == 'informationsecuritymanagementsystempolicy') ? 'active' : ''; ?>">

            <p>Information Security Management System Policy</p>

          </a>

        </li>



      </ul>

    </nav>

  </div>

</aside>

