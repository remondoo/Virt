<?php
session_start();
?>

<html>
 <head>
    <?php include('head.php') ?>
</head>
    
   

    <body>
 <?php include('nav-bar.php') ?>

        <div class="container">
            <h1>Register Account</h1>

            <form action="post-User-register.php" class="well form-horizontal" method="post">
                
                <div class="form-group">
                    <label class="col-md-5 control-label">Naam:</label>
                    <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" id="Naam" name="form_naam" required>
                </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-5 control-label">Achternaam:</label>
                    <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" id="Achternaam" name="form_achternaam">
                </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-5 control-label">Tussenvoegsel:</label>
                    <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" id="Tussenvoegsel" name="form_tussenvoegsel">
                    </div> 
                    </div>
                </div>


                    <div class="form-group">
                        <label class="col-md-5 control-label">Email:</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="email" class="form-control" id="Email" name="form_email" required>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 control-label">Telefoon:</label>
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                            <input type="text" class="form-control" id="Telefoon" name="form_telefoon">
                         </div>
                        </div>
                        </div>
    

                        <div class="form-group">
                            <label class="col-md-5 control-label">Bedrijf:</label>
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input type="text" class="form-control" id="Bedrijf" name="form_bedrijf">
                        </div>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-5 control-label">Straat:</label>
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input type="text" class="form-control" id="Adres" name="form_adres">
                        </div>
                        </div>
                        </div>
    

                        <div class="form-group">
                            <label class="col-md-5 control-label">Huisnummer:</label>
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input type="text" class="form-control" id="Huisnummer" name="form_huisnummer">
                        </div>
                        </div>
                        </div>
    

                        <div class="form-group">
                            <label class="col-md-5 control-label">Toevoeging:</label>
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" id="Toevoeging" name="form_toevoeging">
                        </div>
                        </div>
                        </div>
    

                        <div class="form-group">
                            <label class="col-md-5 control-label">Wachtwoord:</label>
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" id="Wachtwoord" name="form_wachtwoord" required>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
                            </div>
                        </div>
                        </div>

                        </form>
                    </div>


                    </body>

                    </html>

