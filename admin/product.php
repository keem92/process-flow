<?php
	include '../connection.php';

	session_start();
	if(!isset($_SESSION['username']))
	{
		header("location:../login.php");
	}
	elseif($_SESSION['usertype']=='marketer')
	{
		header("location:../login.php");
	}
	elseif($_SESSION['usertype']=='vendor')
	{
		header("location:../login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- BOOTSTRAP CDN LINK -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Work Flow</title>

	 <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
	var _smartsupp = _smartsupp || {};
	_smartsupp.key = '813c814d4fda552a2649acd2bbfa864fa1fe2cea';
	window.smartsupp||(function(d) {
	  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
	  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
	  c.type='text/javascript';c.charset='utf-8';c.async=true;
	  c.src='../www.smartsuppchat.com/loaderd41d.js?';s.parentNode.insertBefore(c,s);
	})(document);
	</script>
	<noscript> Powered by <a href=%e2%80%9chttps_/www.smartsupp.html target=“_blank”>Smartsupp</a></noscript>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="./index.php" class="brand">
			<img src="codecraft logo.png" height="40px">
		</a>
		<ul class="side-menu top">
		<li class="active">
				<a href="./index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">User Dashboard</span>
				</a>
			</li>
			<li>
				<a href="./add-user.php">
					<i class='bx bxs-user-plus'></i>
					<span class="text">Add Users</span>
				</a>
			</li>
			<li>
				<a href="./add-product.php">
					<i class='bx bxs-cart-add' ></i>
					<span class="text">Add Products</span>
				</a>
			</li>
			<li>
				<a href="./product.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Product List</span>
				</a>
			</li>
			<li>
				<a href="./team.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<?php
			$query = "SELECT * FROM cart_tbl";
			$result = mysqli_query($conn, $query);
		?>
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<i class='bx bxs-user'></i>
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1><?php echo $_SESSION['username']; ?></h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-cart-download'></i>
					<span class="text">
						<h3>1020</h3>
						<p>Completed Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-cart-add'></i>
					<span class="text">
						<h3>2834</h3>
						<p>Pending Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-cart'></i>
					<span class="text">
						<h3>4543</h3>
						<p>Total Orders</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List of Users</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>NAME</th>
								<th>SIZE</th>
								<th>COLOR</th>
								<th>GENDER</th>
                                <th>PRICE</th>
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while($row = mysqli_fetch_assoc($result)){
						
                        		echo"
                            	<tr>
                                	<td>$row[id]</td>
                                	<td>$row[name]</td>
                                	<td>$row[size]</td>
                                	<td>$row[color]</td>
                                	<td>$row[gender]</td>
                                    <td>$row[price]</td>
                                	<td>
                                    	<a class='btn btn-primary btn-sm' href='/'>Edit</a>
                                    	<a class='btn btn-danger btn-sm' href='/'>Delete</a>
                                	</td>
                            	</tr>
                        		";
                    			}
							?>
						</tbody>
					</table>
				</div>
				
				<!-- <div class="todo">
					<div class="head">
						<h3>Users</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div> -->
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>