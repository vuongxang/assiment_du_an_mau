<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Quản trị website</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/all.min.css">
	<link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/style.css?v=1">
	<script type="text/javascript" src="<?= $CONTENT_URL ?>/ckeditor/ckeditor.js"></script>
	<script src="<?= $CONTENT_URL ?>/js/jquery.min.js" type="text/javascript"></script>
	
</head>

<body>
	<div class="container-fluid">

		<div class="row">

			<div class="col-sm-3 col-lg-2 sidebar shadow-lg p-3 mb-5 bg-light rounded">
				<div class="sidebar-brand-box border-bottom pb-4">
					<a class="sidebar-brand" href="<?= $SITE_URL ?>/trang-chinh?trang-chu"><span class="text-danger">Xshop</span>Admin</a>
				</div>
				<nav class="sidebar-menu">
					<ul class="nav flex-column">
						<?php require 'menu.php'; ?>
					</ul>
				</nav>
			</div>
			<!-- End siderbar -->

			<div class="col-sm-9 col-lg-10 bg-light main-panel container-fluid">
				<div class="topbar d-flex justify-content-between mb-4">
					<h3 class="mb-4 pt-3"> <span class="text-danger font-weight-bold">Home/</span> Dashboard</h3>
					<div class="user pt-3 pr-4">
						<img class="user-avatar rounded-circle" src="<?= $CONTENT_URL ?>/images/users/<?=$_SESSION['user']['hinh']?>" alt="" width="50">
						<br>
						<span class="font-weight-bold"><?=$_SESSION["user"]["ma_kh"]?></span>
					</div>
				</div>
				<!-- End topbar -->
				<div class="main-panel-body">
					<div class="panel-statistical">
						<div class="row">
							<div class="col-sm-6 col-md-3 col-lg-3">
								<div class="card text-white bg-primary mb-3">
									<div class="card-header">
										view detail
									</div>
									<div class="card-body row">
										<div class="col-sm-6 col-lg-6 icon">
											<i class="fab fa-creative-commons-nd"></i>
										</div>
										<div class="col-sm-6 col-lg-6 icon">
											<h5 class="card-quantity"><?= loai_count(); ?></h5>
											<p class="card-title">LOẠI</p>
										</div>

									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-3 col-lg-3">
								<div class="card text-white bg-success mb-3">
									<div class="card-header">
										view detail
									</div>
									<div class="card-body row">
										<div class="col-sm-6 col-lg-6 icon">
											<i class="fab fa-product-hunt"></i>
										</div>
										<div class="col-sm-6 col-lg-6 icon">
											<h5 class="card-quantity"><?= count_hang_hoa(); ?></h5>
											<p class="card-title">PRODUCTS</p>
										</div>

									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-3 col-lg-3">
								<div class="card text-white bg-warning mb-3">
									<div class="card-header">
										view detail
									</div>
									<div class="card-body row">
										<div class="col-sm-6 col-lg-6 icon">
											<i class="fas fa-users"></i>
										</div>
										<div class="col-sm-6 col-lg-6 icon">
											<h5 class="card-quantity"><?= count_khach_hang(); ?></h5>
											<p class="card-title">USERS</p>
										</div>

									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-3 col-lg-3">
								<div class="card text-white bg-danger mb-3">
									<div class="card-header">
										view detail
									</div>
									<div class="card-body row">
										<div class="col-sm-6 col-lg-6 icon">
											<i class="fas fa-comments"></i>
										</div>
										<div class="col-sm-6 col-lg-6 icon">
											<h5 class="card-quantity"><?= count_binh_luan(); ?></h5>
											<p class="card-title">COMMENT</p>
										</div>

									</div>
								</div>
							</div>
						</div>

					</div>
					<?php
					require $VIEW_NAME;
					?>
				</div>


			</div>
		</div>

	</div>
	<script>
		CKEDITOR.replace('editor1');
	</script>

</body>

</html>