<!DOCTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Emeds">

    <title>Edit Site</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/emeds.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>
    <div class="container">               
        <div class="main">
            <h2>Edit Your Page</h2><hr/>

            <div class="login-content">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Title :</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Description :</label>
                            <textarea type="text" name="description" id="description" class="form-control" rows="12" placeholder="Description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Select Your Image ( 500 px * 500 px )</label>
                            
                        </div>
                    </div>
                    <div class="col-sm-6" style="margin-top:12px">
                        <div class="form-group">
                            <input name="userfile" id="userfile" type="file" tabindex="2">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group no-margin-hr" style="text-align:right">
                            <img src="http://localhost/emeds_new/uploads/bg3.jpg" class="img-thumbnail">
                        </div>
                    </div>
            	</div>
                
                <hr/>
                <div class="row">
                    <div class="col-md-6">
                        <a data-toggle="modal" data-target="#add_page" class="btn btn-w-m btn-default" style="width:100%">Back to Edit Site</a>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-danger pull-right" style="width:100%">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </body>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>
