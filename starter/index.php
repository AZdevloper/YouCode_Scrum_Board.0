


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>YouCode | Scrum Board</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="assets/css/vendor.min.css" rel="stylesheet" />
    <link href="assets/css/default/app.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- ================== END core-css ================== -->
    <!-- ================== BEGIN php script ================== -->
    <script src="scripts.php"></script>
    <!-- ================== END php scripts ================== -->
</head>

<body>

  
	<!-- BEGIN #app -->
	<div id="app" class="app-without-sidebar">
		<!-- BEGIN #content -->
		<div id="content" class="app-content main-style">
			<div class="row justify-content-between">
				<div class="col-auto">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:;">Home</a></li>
						<li class="breadcrumb-item active ">Scrum Board</li>
					</ol>
					<!-- BEGIN page-header -->
					<h1 class="page-header">
						Scrum Board 
					</h1>
					<!-- END page-header -->
				</div>
				
				<div class="col-auto pt-5">
					<button  onclick=" initTaskForm(); displayButtonSave()"   data-bs-toggle="modal" id="Add_task" data-bs-target="#staticBackdrop" class="btn rounded-pill btn-primary" ><i class="fa fa-plus"> </i> Add task
				</div>
			</div>
			
			<div class="row justify-content-around mt-10px ">
				<div class="col-lg-4 col-md-7 col-sm-7 col-12 pb-25px  fs-15px"    >
					<div  class="card shadow-lg">
						<div class="text-center bg-black-100 rounded-top  ">
							<h4 class="">To do (<span id="to-do-tasks-count"></span>)</h4>

						</div>
						
						<div  class=" card-body  d-flex flex-column" id="toDo_tasks" style="color: green;" onDragStart="start(event)"  onDragOver="return over(event)" onDrop="return drop(event)">
							<!-- TO DO TASKS HERE -->
							

				
	
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-7 col-sm-7 col-12 pb-25px  fs-15px"    >
					<div class="card shadow-lg">
						<div class="text-center bg-black-100 rounded-top">
							<h4 class="">In Progress (<span id="in-progress-tasks-count"></span>)</h4>

						</div>
						<div class="card-body d-flex  flex-column" id="in_progress_tasks" onDragStart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)"
						>
							<!-- IN PROGRESS TASKS HERE -->
				
						


						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-7 col-sm-7 col-12 pb-25px  fs-15px"    >
					<div class="card shadow-lg">
						<div class="text-center bg-black-100 rounded-top">
							<h4 class="">Done (<span id="done-tasks-count"></span>)</h4>

						</div>
						<div class="card-body d-flex  flex-column " id="done_tasks" onDragStart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)">
							<!-- DONE TASKS HERE -->
					

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END #content -->
		
		
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->


</body>

</html>