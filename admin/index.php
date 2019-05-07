
<?php 
include '../config.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:../login/index.php");
}
 //login_success.php   
 if(isset($_SESSION["username"]))  
 {  
      echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';   
 }  
 else  
 {  
      header("location:../login/index.php");  
 }  
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Menu Admin</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style type="text/css">
	body{
		background: #eeeeee;
		font-family: 'Varela Round', sans-serif;
	}
    .form-inline {
        display: inline-block;
    }
	.navbar-header.col {
		padding: 0 !important;
	}	
	.navbar {
		color: #fff;
		background: #20b2aa;
		padding: 5px 16px;
		border-radius: 0;
		border: none;
		box-shadow: 0 0 4px rgba(0,0,0,.1);
	}
	.navbar img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin-right: 10px;
	}
	.navbar .navbar-brand {
		color: #efe5ff;
		padding-left: 0;
		padding-right: 50px;
		font-size: 24px;		
	}
	.navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
		color: #fff;
	}
	.navbar .navbar-brand i {
		font-size: 25px;
		margin-right: 5px;
	}
	.search-box {
        position: relative;
    }	
    .search-box input {
        padding-right: 35px;
		min-height: 38px;
		border: none;
		background: #faf7fd;
        border-radius: 3px !important;
    }
	.search-box input:focus {		
		background: #fff;
		box-shadow: none;
	}
	.search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 10px 7px;
		height: 100%;
    }
    .search-box i {
        color: #a0a5b1;
		font-size: 19px;
    }
	.navbar .nav-item i {
		font-size: 18px;
	}
	.navbar .nav-item span {
		position: relative;
		top: 3px;
	}
	.navbar .nav > li a {
		color: #efe5ff;
		padding: 8px 15px;
		font-size: 14px;		
	}
	.navbar .nav > li a:hover, .navbar .nav > li a:focus {
		color: #fff;
		text-shadow: 0 0 4px rgba(255,255,255,0.3);
	}
	.navbar .nav > li > a > i {
		display: block;
		text-align: center;
	}
	.navbar .dropdown-item i {
		font-size: 16px;
		min-width: 22px;
	}
    .navbar .dropdown-item .material-icons {
        font-size: 21px;
        line-height: 16px;
        vertical-align: middle;
        margin-top: -2px;
    }
	.navbar .nav-item.open > a, .navbar .nav-item.open > a:hover, .navbar .nav-item.open > a:focus {
		color: #fff;
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		color: #777 !important;
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:focus {
		color: #333 !important;
		background: transparent !important;
	}
	.navbar .nav .active a, .navbar .nav .active a:hover, .navbar .nav .active a:focus {
		color: #fff;
		text-shadow: 0 0 4px rgba(255,255,255,0.2);
		background: transparent !important;
	}
	.navbar .nav .user-action {
		padding: 9px 15px;
	}
	.navbar .navbar-toggle {
		border-color: #fff;
	}
	.navbar .navbar-toggle .icon-bar {
		background: #fff;
	}
	.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
		background: transparent;
	}
	.navbar .navbar-nav .open .dropdown-menu {
		background: #faf7fd;
		border-radius: 1px;
		border-color: #faf7fd;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .divider {
		background-color: #e9ecef !important;
	}
	@media (min-width: 1200px){
		.form-inline .input-group {
			width: 350px;
			margin-left: 30px;
		}
	}
	@media (max-width: 1199px){
		.navbar .nav > li > a > i {
			display: inline-block;			
			text-align: left;
			min-width: 30px;
			position: relative;
			top: 4px;
		}
		.navbar .navbar-collapse {
			border: none;
			box-shadow: none;
			padding: 0;
		}
		.navbar .navbar-form {
			border: none;			
			display: block;
			margin: 10px 0;
			padding: 0;
		}
		.navbar .navbar-nav {
			margin: 8px 0;
		}
		.navbar .navbar-toggle {
			margin-right: 0;
		}
		.input-group {
			width: 100%;
		}
	}
</style>
</head> 
<body>
<nav class="navbar navbar-inverse navbar-expand-xl navbar-dark">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="#"><i class="fa fa-cube"></i>UTS<b>Pemrograman WEB</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search here...">
				<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right ml-auto">
            <li class="nav-item active"><a href="../index.php" class="nav-link"><i class="fa fa-home"></i><span>Halaman Depan</span></a></li>
			<li class="nav-item"><a href="../admin/index.php" class="nav-link"><i class="fa fa-gears"></i><span>Admin</span></a></li>
			<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-users"></i><span>Team</span></a></li>
            <li class="nav-item"><a href="../login/logout.php" class="nav-link"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
			<li class="nav-item dropdown">
				</ul>
			</li>
		</ul>
	</div>
</nav>
</body>
<style type="text/css">
    body {
        color: #404E67;
        background: #F5F7FA;
		font-family: 'Open Sans', sans-serif;
	}
	.table-wrapper {
		width: 700px;
		margin: 30px auto;
        background: #fff;
        padding: 20px;	
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
		height: 30px;
		font-weight: bold;
		font-size: 12px;
		text-shadow: none;
		min-width: 100px;
		border-radius: 50px;
		line-height: 13px;
    }
	.table-title .add-new i {
		margin-right: 4px;
	}
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
		cursor: pointer;
        display: inline-block;
        margin: 0 5px;
		min-width: 24px;
    }    
	table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table td a.add i {
        font-size: 24px;
    	margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
	table.table .form-control.error {
		border-color: #f50000;
	}
	table.table td .add {
		display: none;
	}
</style>
<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="name" id="name"></td>' +
            '<td><input type="text" class="form-control" name="department" id="department"></td>' +
            '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
</script>
</head>
<body>
    <div class="container">
    
        <div class="table-wrapper">
            <div class="table-title">
            
                <div class="row">
                    <div class="col-sm-8"><h2>Employee <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Administration</td>
                        <td>(171) 555-2222</td>
                        <td>
							<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Peter Parker</td>
                        <td>Customer Service</td>
                        <td>(313) 555-5735</td>
                        <td>
							<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Fran Wilson</td>
                        <td>Human Resources</td>
                        <td>(503) 555-9931</td>
                        <td>
							<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>      
                </tbody>
            </table>
        </div>
    </div>     
</body>
</html>                            