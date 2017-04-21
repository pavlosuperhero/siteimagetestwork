<?php
    require_once 'include/db.php';
    require_once 'include/function.php';
    ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Table_tests_work</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css" type="text/css"/>
        <link href="css/favicon.png" rel="shortcut icon" type="image/x-icon" />
    </head>
    <body>
        <div class="conteiner">
        <?php
            $users = get_users_data_();
        ?>
            <div class="row">
                <?php foreach ($users as $users) :?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
             
                    <div class="page-header">
                        <h1><i class="glyphicon glyphicon-user"></i> About user:</h1>
                    </div>
                    <table class = "table table-bordered">
                        <tr>
                        <td>id</td>
                        <td>name</td>
                        <td>email</td>
                        <td>country</td>
                        </tr>
                        <tr>
                            <td><?=$users['id']?></td>
                            <td><?=$users['user_name']?></td>
                            <td><?=$users['user_email']?></td>
                            <td><?=$users['user_country_id']?></td>
                        </tr>
                        <tr>
                            <td><a href="index.php?delete<?php echo $id; ?>">Delete</a></td>
                            <td><a href="index.php?delete<?php echo $id; ?>">Edit</a></td>
                            <?php ?>
                        </tr>
                    </table>
                </div>
                <?php endforeach ?>
                </div>
                <div class="row">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             
                    <div class="page-header">
                        <h1><i class="glyphicon glyphicon-user"></i> About Country ID:</h1>
                    </div>
                    <table class = "table table-bordered">
                        
                        <tr><td>id</td>
                        <td>country_name</td>
                        </tr>
                        <?php
                            $countries = get_users_data_country();
                        ?>
                       <?php foreach ($countries as $countries) :?>
                        <tr>
                            <td><?=$countries['id']?></td>
                            <td><?=$countries['country_name']?></td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                </div>
               
                </div>
                
                <form class="form-inline" method = "post" action = "">
                    <div class="form-group">
                        <label for="exampleInputName2">Name</label>
                        <input type="text" class="form-control" name = "user_name" id="name" placeholder="Solomia Krushelnytska" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Email</label>
                        <input type="email" class="form-control email" name = "user_email" id="email" placeholder="solomia@example.com" required>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputCountry2">Country num</label>
                        <input type="text" class="form-control country" name = "user_country_id" id="country" placeholder="Just num from the table below" required>
                    </div>
                        <button type="submit" name = "register" class="btn btn-default">Register me!</button>
                       <?php 
                       
                        if(isset ($_POST['register'])){
                        $user_name = $_POST ['user_name'];
                        $user_email = $_POST ['user_email'];
                        $user_country_id = $_POST ['user_country_id'];
                            
                          $query = mysqli_query($link, 
                            "INSERT INTO .users (id, user_name, user_email, user_country_id)
                            VALUES (NULL, '$user_name', '$user_email', $user_country_id)");
                             
                        }else{
                            echo "Nothing here inser";
                        }
                        
                        mysqli_close($link);
                        
                        ?>
                </form>
            </div>
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>
