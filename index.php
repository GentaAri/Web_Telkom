<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body style="background-image: url(bg.jpg); background-repeat: no-repeat; background-size: 100%;">
    <div id="login" style="margin: 0 auto; padding-top: 200px;">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <form id="login-form" class="form" action="login_proses.php" method="post" style="background-color: #c6dfe2; padding: 60px 20px 30px 30px;">
                            <h3 class="text-center">HUMAN CAPITAL SERVICE</h3>
                            <div class="form-group">
                            	<table class="table-responsive">
                            	<br>
                            		<tr>
                                		<td>
                                		<label for="username" style="padding-bottom: 11px; padding-right: 100px;">USERNAME 
                                		</label>
                                		</td>
                                		<td style="padding-bottom: 20px; width: 100%;">
                                		<input type="text" name="username" id="username" class="form-control" placeholder="Username">
                                		</td>
                                	</tr>
                                	<tr>
                                		<td><label for="password" style="padding-bottom: 31px;">PASSWORD </label></td>
                                		
                                		<td style="padding-bottom: 40px;">
                                		<input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                		</td>
                                	</tr>
                                	<tr>
                                		<td></td>
                                		<td>
                                		<input type="submit" name="submit" class="btn btn-info btn-md" value="Login" style="width: 100%; color: black; background-color: white; border-style: none;">
                                		</td>
                                	</tr>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
