<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Logo -->
    <a href="inicio" class="brand-link">
        <img src="vistas/img/plantilla/escudo_unasamPes.ico" alt="tipificación unasam" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Tipificación FC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- user-->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Hola <?php echo $admin["usuario"]; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="inicio" class="nav-link active">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Inicio
                        </p>
                    </a>
                </li>

                <?php if ($admin["fk_rol"] == 4) : ?>
                    <li class="nav-item">
                        <a href="roles" class="nav-link">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>
                                Roles
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="directorEscuela" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Director de escuela
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="docentes" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Docentes
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="escuelas" class="nav-link">
                            <i class="nav-icon fas fa-university"></i>
                            <p>
                                Escuelas
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="categorias" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Categorias
                            </p>
                        </a>
                    </li>
                <?php endif ?>

                <?php if ($admin["fk_rol"] == 3) : ?>
                    <li class="nav-item">
                        <a href="subirarchivos" class="nav-link">
                            <i class="nav-icon fas fa-cloud-upload-alt"></i>
                            <p>
                                Subir archivos
                            </p>
                        </a>
                    </li>


                    <li class="nav-item menu-link">
                        <a href="verresultados" class="nav-link">
                            <i class="nav-icon fas fa-eye"></i>
                            <p>
                                Ver resultados
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-star"></i>
                            <p>
                                Méritos de publicación
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="rgeneral" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ranking General</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="rmias" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>De mis publicaciones</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif ?>

                <?php if ($admin["fk_rol"] == 1) : ?>
                    <li class="nav-item">
                        <a href="escogermiembros" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Escoger miembros
                            </p>
                        </a>
                    </li>
                <?php endif ?>

                <?php if (($admin["fk_rol"] == 5) || ($admin["fk_rol"] == 6) || ($admin["fk_rol"] == 7)) : ?>
                    <li class="nav-item">
                        <a href="revisararchivos" class="nav-link">
                            <i class="nav-icon fas fa-folder-open"></i>
                            <p>
                                Archivos a revisar
                            </p>
                        </a>
                    </li>
                <?php endif ?>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>