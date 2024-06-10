<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Tienda Veterinaria</title>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        /* Agregar estilos personalizados aquí */
        .custom-style {
            color: #4e73df;
        }

        .custom-background {
            background-color: #f8f9fc;
        }

        /* Agregar más estilos personalizados según sea necesario */
    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Veterinaria en Linea </sup></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Farmacia Veterinaria</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span>
                </a>
                <!-- Botones para otras páginas -->
                <div class="bg-white py-2 collapse-inner rounded">
                    <a href="{{ url('admin/productos') }}" class="btn btn-primary btn-block">Productos</a>
                    <a href="{{ url('admin/marcas') }}" class="btn btn-primary btn-block">Marcas</a>
                    <a href="{{ url('admin/cargos') }}" class="btn btn-primary btn-block">Cargos</a>
                    <a href="{{ route('admin.proveedores.index') }}" class="btn btn-primary btn-block">Proveedores</a>
                    <a href="{{ url('admin/areas') }}" class="btn btn-primary btn-block">Areas</a>
                    <a href="{{ url('admin/Empleados') }}" class="btn btn-primary btn-block">Empleados</a>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">HUELLAS BIENESTAR</h1>
                    <!-- Content Row -->
                    <div class="row">
                       <!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Cothivet</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$500</div>
                </div>
            </div>
            <div class="row no-gutters align-items-center mt-3">
                <div class="col text-center">
                    <img src="cot.jpeg" alt="Cothivet" style="width: 150px; height: 150px;">
                </div>
            </div>
        </div>
    </div>
</div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Aluspray</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$215</div>
                </div>
            </div>
            <div class="row no-gutters align-items-center mt-3">
                <div class="col text-center">
                    <img src="alus.jpeg" alt="Aluspray" style="width: 150px; height: 150px;">
                </div>
            </div>
        </div>
    </div>
</div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Prantel Puppy</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$300</div>
                </div>
            </div>
            <div class="row no-gutters align-items-center mt-3">
                <div class="col text-center">
                    <img src="pra.jpeg" alt="Prantel Puppy" style="width: 120px; height: 150px;">
                </div>
            </div>
        </div>
    </div>
</div>

                        <!-- Pending Requests Card Example -->
                       <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Prantel Plus Toy</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$100</div>
                </div>
            </div>
            <div class="row no-gutters align-items-center mt-3">
                <div class="col text-center">
                    <img src="praplus.png" alt="Prantel Plus Toy" style="width: 150px; height: 150px;">
                </div>
            </div>
        </div>
    </div>
</div>
<style>
        /* Estilos CSS personalizados */

        /* Margen inferior para los productos */
        .producto {
            margin-bottom: 20px;
        }

        /* Estilos para centrar imágenes */
        .contai {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Estilos para imágenes laterales */
        .side-image {
            width: 420px; /* Tamaño de las imágenes laterales */
            margin: 0 2px; /* Espacio entre las imágenes */
        }

        /* Estilos para imagen central */
        .central-image {
            width: 550px; /* Tamaño de la imagen central */
            margin: 0 2px; /* Espacio entre las imágenes */
        }
</style>s
<main class="container my-4">
 <main class="container my-4">
        <!-- Imágenes -->
        <div class="contai">
            <img src="CAT.JPEG" class="side-image">
            <img src="far.JPG" class="central-image">
            <img src="OIP.JPEG" class="side-image">
            
        </div>
    </main>

                  <!-- Content Row -->
<div class="row">
    <!-- Content Column -->
    <div class="col-lg-6 mb-4 d-flex align-items-stretch">
        <!-- Project Card Example -->
        <div class="card shadow mb-4 w-100">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Historia</h6>
            </div>
            <div class="card-body">
                En Toluca, nace "Huellas de Bienestar: Alianza por la Salud Animal", un proyecto que une a las clínicas PetCare y Veterinaria Integral de Toluca. Su objetivo es ofrecer servicios de alta calidad para mascotas, con un enfoque en el bienestar animal. Esta alianza representa un compromiso firme con el amor y respeto hacia las mascotas, buscando un futuro donde todas puedan recibir la atención que merecen.
            </div>
        </div>
    </div>

    <div class="col-lg-6 mb-4 d-flex align-items-stretch">
        <!-- Illustrations -->
        <div class="card shadow mb-4 w-100">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Objetivos y Compromisos</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                        src="img/undraw_posting_photo.svg" alt="">
                </div>
                <p>Atención veterinaria completa: Servicios que incluyen prevención, diagnóstico, tratamiento y cirugía para mascotas de todas las edades y razas.</p>
                <p>Acceso asequible: Garantizar que todos, independientemente del nivel socioeconómico, puedan acceder a servicios veterinarios de alta calidad.</p>
                <p>Bienestar animal y salud pública: Fomentar la tenencia responsable y la adopción de mascotas de refugios. Educación sobre la prevención de enfermedades zoonóticas en la comunidad.</p>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mb-4 d-flex align-items-stretch">
        <!-- Approach -->
        <div class="card shadow mb-4 w-100">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Politicas y procedimiento</h6>
            </div>
            <div class="card-body">
                <p>En Huellas Bienestar, valoramos y respetamos tu privacidad. Esta política de privacidad describe cómo recopilamos, utilizamos y protegemos la información personal que nos proporcionas a través de nuestro sitio web. Al utilizar nuestro sitio web, aceptas las prácticas descritas en esta política.</p>
            </div>
        </div>
    </div>
</div>

            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="text-center my-auto">
                        <span>Footer Text</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>