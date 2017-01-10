<?php
session_start();
?>
    
<html>
<head>
    <?php include('head.php') ?>
</head>
    <body>
    <?php include('nav-bar.php') ?>

        <!-- Container 1 -->





        <div class="container">

            <div class="jumbotron .col-xs-6 .col-md-4">

                <h2>Virt-Low</h2>

                <div class="table-responsive">

                    <table class="table table-hover">

                        <thead>

                            <tr>

                                <th>Package</th>

                                <th>CPU</th>

                                <th>RAM</th>

                                <th>SAS</th>

                                <th>Price</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr class="success">

                                <td>Low</td>

                                <td>1</td>

                                <td>1GB</td>

                                <td>100GB</td>

                                <td>€15,-</td>

                            </tr>

                        </tbody>

                    </table>

                </div>

                <hr class="m-y-2">

                <div class="progress">

                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="20" aria-valuemax="100" style="width: 50%">

                        <span class="show">Starter Performance!</span>

                    </div>

                </div>

                <a class = "btn btn-primary btn-lg">Order!</a>



            </div>

        </div>









        <!-- Container 2 -->





        <div class="container">

            <div class="jumbotron .col-xs-6 .col-md-4">

                <h2>Virt-Medium</h2>

                <div class="table-responsive">

                    <table class="table table-hover">

                        <thead>

                            <tr>

                                <th>Package</th>

                                <th>CPU</th>

                                <th>RAM</th>

                                <th>SAS</th>

                                <th>Price</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr class="warning">

                                <td>Medium</td>

                                <td>2</td>

                                <td>4GB</td>

                                <td>150GB</td>

                                <td>€35,-</td>

                            </tr>

                        </tbody>

                    </table>

                </div>

                <h6><span class="label label-default">Daily-backup</span></h6>

                <hr class="m-y-2">

                <div class="progress">

                    <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="20" aria-valuemax="75" style="width: 75%">

                        <span class="show">Good performance!</span>

                    </div>

                </div>

                <a class="btn btn-primary btn-lg">Order!</a>



            </div>

        </div>


    




        <!-- Container 3 -->



        <div class="container">

            <div class="jumbotron .col-xs-6 .col-md-4">

                <h2>Virt-High</h2>

                <div class="table-responsive">

                    <table class="table table-hover">

                        <thead>

                            <tr>

                                <th>Package</th>

                                <th>CPU</th>

                                <th>RAM</th>

                                <th>SSD</th>

                                <th>Price</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr class="danger">

                                <td>High</td>

                                <td>4</td>

                                <td>8GB</td>

                                <td>100GB</td>

                                <td>€80,-</td>

                            </tr>

                        </tbody>

                    </table>

                </div>

                <h6><span class="label label-default">Daily-backup</span></h6>

                <h6><span class="label label-default">High availability</span></h6>

                <hr class="m-y-2">

                <div class="progress">

                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="20" aria-valuemax="100" style="width: 100%">

                        <span class="show">Ultimate performance!</span>

                    </div>

                </div>

                <a class = "btn btn-primary btn-lg">Order!</a>



            </div>

        </div>





    </body>

</html>
