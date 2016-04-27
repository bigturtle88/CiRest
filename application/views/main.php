<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>The base of the countries, cities, languages</title>

    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.css"); ?>"/>
    <script type="text/javascript"
            src="<?= base_url("assets/js/jquery-2.2.3.min.js"); ?>"></script>
    <script type="text/javascript"
            src="<?= base_url("assets/js/bootstrap.js"); ?>"></script>
    <script src="http://jpillora.com/jquery.rest/dist/1/jquery.rest.min.js"></script>
    <script type="text/javascript"
            src="<?= base_url("assets/js/base.js"); ?>"></script>

    <style type="text/css">


        .forms, .panel-content {

            padding-top: 10px;

        }


    </style>
</head>
<body>

<div id="container" class="container">
    <h1>The base of the countries, cities, languages</h1>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed"
                        data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Base</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse"
                 id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Country
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" id="country">

                            <li><a href="#" id="countryCreate">Create</a></li>
                            <li><a href="#"  id="countryEdite">Edite</a></li>
                            <li><a href="#" id="countryDelete">Delete</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">City <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu" id="cities">

                            <li><a href="#" id="citiesCreate">Create</a></li>
                            <li><a href="#" id="citiesEdite">Edite</a></li>
                            <li><a href="#" id="citiesDelete">Delete</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Language
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" id="lang">

                            <li><a href="#" id="langCreate">Create</a></li>
                            <li><a href="#" id="langEdite">Edite</a></li>
                            <li><a href="#" id="langDelete">Delete</a></li>

                        </ul>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div id="content">
        <div class="forms">
            <div class="col-md-4 col-xs-12"><select class="form-control" id="formCountry">
                    <option value="false">Select Country</option>
                </select>
            </div>
            <div class="col-md-4 col-xs-12"><select class="form-control" id="formCity">

                </select>
            </div>
            <div class="col-md-4 col-xs-12"><select class="form-control" id="formLang">

                </select>
            </div>

        </div>

    </div>

    <div class="col-xs-12 panel-content">
        <div class="panel panel-default">
            <div class="panel-heading">Languages</div>
            <div class="panel-body">
                <div id="infoContent">
                    <table class="table  table-condensed">
                        <thead> <tr> <th>#</th> <th>Lang</th></thead>
                        <tbody id="infoContentTable" >

                        </tbody>
                    </table>
                </div>
            </div>





        </div>
        <div class="col-xs-12" style="padding-bottom: 10px;" id="restForm" >
        <div class="col-xs-5"><input type="text" class="form-control" placeholder="Please input value...." id="restValue">   </div>
        <div class="col-xs-5">  <button type="submit" class="btn btn-default"  id="restValueSubmit">Submit</button>  </div>
            </div>
        <div class="col-xs-12">
            <p>Page rendered in <strong>{elapsed_time}</strong>
                seconds. <?php echo (ENVIRONMENT === 'development') ?
                    'CodeIgniter Version <strong>' . CI_VERSION . '</strong>'
                    : '' ?></p>
        </div>

</body>
</html>