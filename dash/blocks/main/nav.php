<div class="col-1  mr-1 ">
    <div class="  l-sidebar   h-100 " style="background-color: #FAFBFC">

        <div class="l-sidebar__content ">
            <nav class="c-menu js-menu " >
                <ul class="u-list list-unstyled ">
                        <li class="c-menu__item " data-toggle="tooltip" title="Dashboard" style="z-index:-1;" >

                            <div class=" logo c-menu__item__inner d-flex justify-content-center">

                            </div>
                        </li>

                    <a href="?page=1">
                        <li class="c-menu__item  has-submenu <?= ($page == 1)?  'is-active' : '' ; ?> nav-item" data-toggle="tooltip" title="Dashboard" >

                            <div class=" logo c-menu__item__inner d-flex justify-content-center">
                                <div class="logo__txt" style="filter: <?= ($page == 1)?  'contrast(1)' : 'contrast(0)' ; ?>; font-family:SM1;">D</div>
                            </div>
                        </li>

                    </a>
                    <a href="?page=2">
                        <li class="c-menu__item has-submenu nav-item <?= ($page == 2)?  'is-active' : '' ; ?>" data-toggle="tooltip" title="Messages" >
                            <div class="c-menu__item__inner d-flex justify-content-center">
                                <img src="assets/images/notification.svg"  alt="Messages" style="filter: <?= ($page == 2)?  'contrast(1)' : 'contrast(0)' ; ?>">
                            </div>
                        </li>
                    </a>
                    <a href="?page=3">
                        <li class="c-menu__item has-submenu nav-item <?= ($page == 3)?  'is-active' : '' ; ?>" data-toggle="tooltip" title="Portfolio">
                            <div class="c-menu__item__inner  d-flex justify-content-center">
                                <img src="assets/images/3.svg"  alt="Portfolio" style="filter: <?= ($page == 3)?  'contrast(1)' : 'contrast(0)' ; ?>">
                            </div>
                        </li>
                    </a>
                    <?php
                        if (isset($_SESSION['qeema_admin']) && $_SESSION['qeema_admin'] == 'admin'){
                    ?>
                    <a href="?page=7">
                        <li class="c-menu__item has-submenu nav-item <?= ($page == 7)?  'is-active' : '' ; ?>" data-toggle="tooltip" title="services">
                            <div class="c-menu__item__inner  d-flex justify-content-center">
                                <img src="assets/images/serv.svg"  alt="services" style="filter: <?= ($page == 7)?  'contrast(1)' : 'contrast(0)' ; ?>">
                            </div>
                        </li>
                    </a>
                     <a href="?page=8">
                         <li class="c-menu__item has-submenu nav-item <?= ($page == 8)?  'is-active' : '' ; ?>" data-toggle="tooltip" title="HomePage">
                             <div class="c-menu__item__inner  d-flex justify-content-center">
                                 <img src="assets/images/page.png"  alt="services" style="filter: <?= ($page == 8)?  'contrast(1)' : 'contrast(0)' ; ?>">
                             </div>
                         </li>
                     </a>
                    <a href="?page=4">
                        <li class="c-menu__item has-submenu nav-item <?= ($page == 4)?  'is-active' : '' ; ?>" data-toggle="tooltip" title="Admins">
                            <div class="c-menu__item__inner  d-flex justify-content-center">
                                <img src="assets/images/customer.svg"  alt="Admins" style="filter: <?= ($page == 4)?  'contrast(1)' : 'contrast(0)' ; ?>">
                            </div>
                        </li>
                    </a>
<?php
                        if (isset($_SESSION['boos']) && $_SESSION['boos'] == 'y'){
                    ?>
                    <a href="?page=5">
                        <li class="c-menu__item has-submenu nav-item <?= ($page == 5)?  'is-active' : '' ; ?>" data-toggle="tooltip" title="emailing">
                            <div class="c-menu__item__inner  d-flex justify-content-center">
                                <img src="assets/images/emailing.svg"  alt="emailing" style=" filter: <?= ($page == 5)?  'contrast(1)' : 'contrast(0)' ; ?> ">
                            </div>
                        </li>
                    </a>
<?php } ?>
<?php } ?>

                </ul>
                <div class=" mt-5  c-menu__item__inner d-flex align-content-end   justify-content-center">
                    <div class="logo-on">
                        <span class="circle"></span>
                        <img src="assets/images/admin.svg"   alt="" class="img-fluid " onclick="return session()" style="max-width: 50px;
    max-height: 50px;
    position: relative;
    top: -90%;
    left: 21%; ">
                        <span class="on"></span>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>