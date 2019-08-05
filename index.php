<?php
    require_once('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>CRUD102</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/fontawesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

    <!-- local -->
    <link rel="stylesheet" href="<?= URL?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL?>public/fa/css/all.min.css">
    <script src="<?= URL?>public/js/jquery.min.js"></script>
    <script src="<?= URL?>public/js/bootstrap.min.js"></script>
    <script src="<?= URL?>public/js/me.js"></script>
    <script>var URL = "<?= URL?>";</script>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <form class="seachData" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-success" data-toggle="modal" data-target="#modalAdd">Add Data</button>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive mt-5">
                    <table class="table table-dark table-striped table-main">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Position</th>
                                <th>Company</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-data">
                            <!-- <tr>
                                <td>1</td>
                                <td>Gapuz</td>
                                <td>Khariza Fe</td>
                                <td>Lavarias</td>
                                <td>Assistant Manager</td>
                                <td>AGM</td>
                                <td>
                                    <a class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Metran</td>
                                <td>Vonn Jammel</td>
                                <td>Dagami</td>
                                <td>Assistant Manager</td>
                                <td>AGM</td>
                                <td>
                                    <a class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modalAdd">
        <div class="modal-dialog modal-md">
            <form class="addData" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            Add Data
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>
                        <div class="form-group">
                            <label for="middlename">Middle Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>
                        <div class="form-group">
                            <label for="postition">Position</label>
                            <input type="text" class="form-control" id="postition" name="postition">
                        </div>
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" class="form-control" id="company" name="company">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times text-white"></i></a>
                    </div>
                </div>
            </form>    
        </div>
    </div>
    <div class="modal" id="modalUpdate">
        <div class="modal-dialog modal-md">
            <form class="updateData" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            Update Data
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>
                        <div class="form-group">
                            <label for="middlename">Middle Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>
                        <div class="form-group">
                            <label for="postition">Position</label>
                            <input type="text" class="form-control" id="postition" name="postition">
                        </div>
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" class="form-control" id="company" name="company">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times text-white"></i></a>
                    </div>
                </div>
            </form>    
        </div>
    </div>
</body>
</html>