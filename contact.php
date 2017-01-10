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
            <h1>Contact</h1>
<form action="smtp.php" class="well form-horizontal" method="POST"> 

<div class="form-group">
                    <label class="col-md-5 control-label">Naam:</label>
                    <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" id="Naam" name="contact_form_naam" required>
                </div>
                    </div>
                

    <label class="col-md-5 control-label">Email:</label>
                    <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="text" class="form-control" id="email" name="contact_form_email" required>
                </div>
                    </div>
                

    <label class="col-md-5 control-label">Phone:</label>
                    <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input type="text" class="form-control" id="telefoon" name="contact_form_telefoon" required>
                </div>
                    </div>


<label class="col-md-5 control-label">Subject:</label>
                    <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                    <input type="text" class="form-control" id="onderwerp" name="contact_form_onderwerp" required>
                </div>
                    </div>


<label class="col-md-5 control-label">Comment:</label>
                    <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                <textarea class="form-control" id="exampleTextarea" rows="4" name="contact_form_text"></textarea>
                
                </div>
                    </div>

  <div class="form-group">
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                            
                                <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
                            </div>
                        </div>
                        </div>


</div>
</form>
</div>


</body>
</html>
