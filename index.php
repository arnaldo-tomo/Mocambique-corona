<?php  include_once('admin/config/conexao.php'); ?>
<?php  include_once('admin/config/total.php');   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Moçmbique- Corona</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
          <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="index.html">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">MOÇAMBIQUE - CORONA</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-cube-outline menu-icon"></i>
                    <span class="menu-title">Estatistica</span>
                    <i class="menu-arrow"></i>
                  </a>
                  </li>
                      <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="mdi mdi-finance menu-icon"></i>
                    <span class="menu-title">Grafico</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="mdi mdi-grid menu-icon"></i>
                    <span class="menu-title">Tabelas</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                    </li>
            </ul>
        </div>
      </nav>
    </div>
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="container">
                <div class="content-wrapper">
                    <div class="row">

                        <div class="col-sm-6 mb-4 mb-xl-0">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h6 class="text-dark font-weight-bold mb-2">COVID19</h6>
                                    <h2 class="text-dark font-weight-bold mb-8">Painel Coronavírus</h2>
                                    <h6 class="font-weight-normal mb-2">Atualizado em: 08/02/2022 17:40</h6>
                                                                       
                                    <div class="clock_outer">
                                <p> <span class="fa fa-clock-o"> </span> <span id="clock" class="clock">loading ...</span></p>
                            </div>
                                </div>
                                
                                <div class="ms-lg-5 d-lg-flex d-none">
                                    <button type="button" class="btn bg-white btn-icon">
                                        <i class="mdi mdi-view-grid text-success"></i>
                                    </button>
                                    <button type="button" class="btn bg-white btn-icon ms-2">
                                        <i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-md-end">
                                <div class="pe-1 mb-3 mb-xl-0">
                                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                        Excel
                                        <i class="mdi mdi-file-excel btn-icon-append"></i>
                                    </button>
                                </div>
                                <div class="pe-1 mb-3 mb-xl-0">
                                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                        Arquivo CSV
                                        <i class="mdi mdi-help-circle-outline btn-icon-append"></i>
                                    </button>
                                </div>
                                <div class="pe-1 mb-3 mb-xl-0">
                                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                        Arquivo PDF
                                        <i class="mdi mdi-file-pdf btn-icon-append"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-0">
                        <div class="col-sm-8 flex-column d-flex stretch-card">
                            <div class="row">
                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <div class="card bg-info">
                                        <div class="card-body text-white">
                                            <h4 class="card-title mb-2">Recuperados</h4>
                                            <h2 class="font-weight-bold mb-3"><i
                                                    class="mdi mdi-emoticon-happy "></i><?=  $Totalrecuperado ?></h2>
                                            <hr>
                                            <h3 class="card-title mb-2">Negativos </h3>
                                            <h2 class="font-weight-bold mb-3"><i class="mdi mdi-account-minus  "></i>
                                                <?= $Totalnegativo?></h2>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <div class="card sale-diffrence-border">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">Posetivos</h4>
                                            <h2 class="text-dark mb-2 font-weight-bold mb-3"><i
                                                    class="mdi mdi-account-plus "></i><?= $Totalpossetivo?></h2>
                                            <hr>
                                            <h5 class="card-title mb-2">Em Quarentena</h5>
                                            <h2 class="text-dark mb-2 font-weight-bold mb-3"><i
                                                    class="mdi mdi-home"></i><?= $Totalquarentena ?></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <div class="card sale-visit-statistics-border">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">Obitos</h4>
                                            <h2 class="text-dark mb-2 font-weight-bold mb-3"><i
                                                    class="mdi mdi-emoticon-sad "></i><?= $Totalobito ?></h2>
                                            <hr>
                                            <h4 class="card-title mb-2">Testados</h4>
                                            <h2 class="text-dark mb-2 font-weight-bold mb-3"><i
                                                    class="mdi mdi-test-tube "></i><?= $Totaltestado ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex grid-margin stretch-card">
                            <div class="card sale-visit-statistics-border">
                                <div class="card-body">
                                    <h2 class="text-dark mb-2 font-weight-bold">Painel Interativo</h2>
                                    <small class="text-muted">Navegue pelos dados do Sistema Único de Saúde - SUS, com
                                        informações estratégicas e conheça tudo sobre a COVID-19 de forma transparente e
                                        analítica.</small>
                                    <br>
                                    <button type="button" class="btn btn-primary btn-sm reunded-0">Acesse</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Síntese de casos,posetivos, negativos, recuperdodos & óbitos.
                                </h4>
                                <p class="card-description">
                                    Fonte:<code>Ministerio da saude (MISAU) </code>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <td><label class="badge badge-light">Provincias</label></td>
                                                <td><label class="badge badge-dark">Testados</label></td>
                                                <td><label class="badge badge-success">Recuperado</label></td>
                                                <td><label class="badge badge-info">Negativo</label></td>
                                                <td><label class="badge badge-primary">Possesetivo</label></td>
                                                <td><label class="badge badge-warning">Quarentena</label></td>
                                                <td><label class="badge badge-danger">Obito</label></td>
                                                <td><label class="badge badge-dark">Atualizado em</label></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Niassa</td>
                                                <td><?php echo $PossesetivoNiassa['niassa']+$NegativoNiassa['niassa']; ?>
                                                </td>
                                                <td><?php echo $RecuperadoNiassa['niassa']; ?></td>
                                                <td><?php echo $NegativoNiassa['niassa']; ?></td>
                                                <td><?php echo $PossesetivoNiassa['niassa'];?></td>
                                                <td><?php echo $QuarentenaNiassa['niassa'];?></td>
                                                <td><?php echo $obitoNiassa['niassa']; ?></td>
                                                <td><?php echo $DataNiassa['niassa']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Cabo Delgado</td>
                                                <td><?php echo $Possesetivcabodelgado['cabodelgado']+$Negativocabodelgado['cabodelgado'];?>
                                                </td>
                                                <td><?php echo $Recuperadocabodelgado['cabodelgado'];?></td>
                                                <td><?php echo $Negativocabodelgado['cabodelgado']; ?></td>
                                                <td><?php echo $Possesetivcabodelgado['cabodelgado'];?></td>
                                                <td><?php echo $Quarentenacabodelgado['cabodelgado'];?></td>
                                                <td><?php echo $obitocabodelgado['cabodelgado'];?></td>
                                                <td><?php echo $Datacabodelgado['cabodelgado'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Nampula</td>
                                                <td><?php echo $Possesetivonampula['nampula1']+$Negativonampula['nampula1']; ?>
                                                </td>
                                                <td><?php echo $Recuperadonampula['nampula1']; ?></td>
                                                <td><?php echo $Negativonampula['nampula1']; ?></td>
                                                <td><?php echo $Possesetivonampula['nampula1'];?></td>
                                                <td><?php echo $Quarentenanampula['nampula1'];?></td>
                                                <td><?php echo $Obitonampula['nampula1']; ?></td>
                                                <td><?php echo $Datanampula['nampula1']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tete</td>
                                                <td><?php echo $Possesetivotete['tete1']+$Negativotete['tete1']; ?></td>
                                                <td><?php echo $Recuperadotete['tete1']; ?></td>
                                                <td><?php echo $Negativotete['tete1']; ?></td>
                                                <td><?php echo $Possesetivotete['tete1'];?></td>
                                                <td><?php echo $Quarentenatete['tete1'];?></td>
                                                <td><?php echo $obitotete['tete1']; ?></td>
                                                <td><?php echo $datatete['tete1']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Zambezia</td>
                                                <td><?php echo $Possesetivozambezia['zambezia1']+$Negativozambezia['zambezia1']; ?>
                                                </td>
                                                <td><?php echo $Recuperadozambezia['zambezia1']; ?></td>
                                                <td><?php echo $Negativozambezia['zambezia1']; ?></td>
                                                <td><?php echo $Possesetivozambezia['zambezia1'];?></td>
                                                <td><?php echo $Quarentenazambezia['zambezia1'];?></td>
                                                <td><?php echo $obitozambezia['zambezia1']; ?></td>
                                                <td><?php echo $datazambezia['data']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Manica</td>
                                                <td><?php echo $Possesetivomanica['manica1']+$Negativomanica['manica1']; ?>
                                                </td>
                                                <td><?php echo $Recuperadomanica['manica1']; ?></td>
                                                <td><?php echo $Negativomanica['manica1']; ?></td>
                                                <td><?php echo $Possesetivomanica['manica1'];?></td>
                                                <td><?php echo $Quarentenamanica['manica1'];?></td>
                                                <td><?php echo $obitomanica['manica1']; ?></td>
                                                <td><?php echo $datamanica['manica1']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Sofala</td>
                                                <td><?php echo $Possesetivobeira['total']+$Negativobeira['total']; ?>
                                                </td>
                                                <td><?php echo $Recuperadobeira['total']; ?></td>
                                                <td><?php echo $Negativobeira['total']; ?></td>
                                                <td><?php echo $Possesetivobeira['total'];?></td>
                                                <td><?php echo $Quarentenabeira['total'];?></td>
                                                <td><?php echo $obitobeira['total']; ?></td>
                                                <td><?php echo $databeira['dado']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Inhambane</td>
                                                <td><?php echo $Possesetivoinhambane['totalidade1']+ $Negativoinhambane['totalidade1'];?>
                                                </td>
                                                <td><?php echo $Recuperadoinhambane['totalidade1'];?></td>
                                                <td><?php echo $Negativoinhambane['totalidade1'];?></td>
                                                <td><?php echo $Possesetivoinhambane['totalidade1'];?></td>
                                                <td><?php echo $Quarentenainhambane['totalidade1'];?></td>
                                                <td><?php echo $obitoinhambane['totalidade1'];?></td>
                                                <td><?php echo $datainhambane['totalidade1'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Gaza</td>
                                                <td><?php echo $Possesetivogaza['gaza1']+$Negativogaza['gaza1']; ?></td>
                                                <td><?php echo $Recuperadogaza['gaza1']; ?></td>
                                                <td><?php echo $Negativogaza['gaza1']; ?></td>
                                                <td><?php echo $Possesetivogaza['gaza1'];?></td>
                                                <td><?php echo $Quarentenagaza['gaza1'];?></td>
                                                <td><?php echo $obitogaza['gaza1']; ?></td>
                                                <td><?php echo $datagaza['gaza1']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Pronvincia de Maputo</td>
                                                <td><?php echo $Possesetivoprovincia['provincia1']+$Negativoprovincia['provincia1'];?>
                                                </td>
                                                <td><?php echo $Recuperadoprovincia['provincia1']; ?></td>
                                                <td><?php echo $Negativoprovincia['provincia1']; ?></td>
                                                <td><?php echo $Possesetivoprovincia['provincia1'];?></td>
                                                <td><?php echo $Quarentenaprovincia['provincia1'];?></td>
                                                <td><?php echo $obitoprovincia['provincia1']; ?></td>
                                                <td><?php echo $dataprovincia['provincia1']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Cidade de Maputo</td>
                                                <td><?php echo $Possesetivocidade['ciademaputo1']+$Negativocidade['ciademaputo1'];?>
                                                </td>
                                                <td><?php echo $Recuperadocidade['ciademaputo1']; ?></td>
                                                <td><?php echo $Negativocidade['ciademaputo1']; ?></td>
                                                <td><?php echo $Possesetivocidade['ciademaputo1'];?></td>
                                                <td><?php echo $Quarentenacidade['ciademaputo1'];?></td>
                                                <td><?php echo $obitocidade['ciademaputo1']; ?></td>
                                                <td><?php echo $datacidade['ciademaputo1']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-0">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h4 class="card-title">Idade entre</h4>
                                            <canvas id="salesDifference"></canvas>
                                            <p class="mt-3 mb-4 mb-lg-0">
                                            </p>
                                        </div>
                                        <div class="col-lg-5">
                                            <h4 class="card-title">Covid19</h4>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <ul class="graphl-legend-rectangle">
                                                        <li><span class="bg-danger"></span>Obitos</li>
                                                        <li><span class="bg-warning"></span>Quarentena</li>
                                                        <li><span class="bg-info"></span>Negativo</li>
                                                        <li><span class="bg-success"></span>Possetivo</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-8 grid-margin">
                                                    <canvas id="bestSellers"></canvas>
                                                </div>
                                            </div>
                                            <p class="mt-3 mb-4 mb-lg-0">
                                            </p>
                                        </div>
                                        <div class="col-lg-3">
                                            <h4 class="card-title">Estatistica de crianças</h4>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="progress progress-lg grouped mb-2">
                                                        <div class="progress-bar  bg-danger" role="progressbar"
                                                            style="width: 40%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 10%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 30%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <ul class="graphl-legend-rectangle">
                                                        <li><span class="bg-danger"></span>Obitos (15%)</li>
                                                        <li><span class="bg-warning"></span>Quaretena (20%)</li>
                                                        <li><span class="bg-info"></span>Negativo (25%)</li>
                                                        <li><span class="bg-success"></span>possetivo (40%)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="mb-0 mt-2">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                    </div>

                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <div class="container">
            <footer class="footer">
                <div class="footer-wrap">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 -
                            <?php $ano = date('Y'); echo $ano;?> <a href="http://arnaldotomo.epizy.com/"
                                target="_blank">http://arnaldotomo.epizy.com </a> </span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Podes reutiliar os
                            codigos desse projeto para quais quer fins </a> templates</span>
                    </div>
                </div>
            </footer>
            </div>
            <!-- container-scroller -->
            <!-- base:js -->
            <script src="vendors/base/vendor.bundle.base.js"></script>
            <!-- endinject -->
  
            <script src="custom.js"></script>
            <script src="popper.min.js"></script>
            <!-- Plugin js for this page-->
            <!-- End plugin js for this page-->
            <!-- inject:js -->
            <script src="js/template.js"></script>
            <!-- endinject -->
            <!-- plugin js for this page -->
            <!-- End plugin js for this page -->
            <script src="vendors/chart.js/Chart.min.js"></script>
            <script src="vendors/progressbar.js/progressbar.min.js"></script>
            <script src="vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
            <script src="vendors/justgage/raphael-2.1.4.min.js"></script>
            <script src="vendors/justgage/justgage.js"></script>
            <script src="js/jquery.cookie.js" type="text/javascript"></script>
            <!-- Custom js for this page-->
            <script src="js/dashboard.js"></script>
            <!-- End custom js for this page-->
</body>

</html>