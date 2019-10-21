<?php 
  session_start();
 if(!isset($_SESSION['user']))
 {
   header('location:index.php');
  
 }
  else
  {
  if( isset ($_GET['id']))
  {
    $id = $_GET['id'];
  }
  else
  {
    $id = 0;
  }
	 
   
   ?>
<?php include '_head.php' ?>
<style>
    #testimonials
	{
	 background: linear-gradient(60deg, #B24592, #F15F79);
color:#fff;
	}
</style>
  <body>
  
    
    <?php include 'header.php' ?>

    <div class="container-fluid">
      <div class="row">
        <?php include 'sidebar.php' ?>
        <div class="col-sm-9  col-md-10  main">
		<?php 
		    if($id == 1)
			{
			   ?>
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       Testimonial Successfully Added.
               </div>
							
		<?php } ?>
		
		<?php 
		    if($id == 2)
			{
			   ?>
			   <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       Testimonial Name Already Exists.
               </div>
							
		<?php } ?>
        
        <div class="bg">
          <h1 class="page-header">Add new Testimonial</h1>
		   
         <form action="testimonialsaddscript.php" method="post" role="form" enctype="multipart/form-data">
           
			  <div class="form-group col-xs-12 col-sm-6">
                 <label> Serial Number*</label>
                 <input class="form-control" name="serial" type="text" required>
                 
             </div>
              
              <div class="form-group col-xs-12 col-sm-6">
                 <label> Name*</label>
                 <input class="form-control" name="name" type="text" required>
                 
             </div>
			  <div class="form-group col-xs-12 col-sm-6">
                 <label>Company / City / Profession*</label>
                 <input class="form-control" name="city" type="text">
                 
             </div>
			 
			 
			<div class="col-xs-12">
             
             <fieldset>
                <legend>Feature Image</legend>    
             
              <div class="form-group col-xs-12 col-sm-6">
                 <label>Image</label>
                 <input type="file"  name="file2" class="form-control">
			  </div>
             
             
              <div class="form-group col-xs-12 col-sm-6">
                 <label>Image Alt Tag</label>
                 <input class="form-control" name="alt" type="text">
                 
             </div>
             
             <div class="form-group col-xs-12 col-sm-6">
                 <label>Image Title</label>
                 <input class="form-control" name="img_title" type="text">
             </div>
             
             </fieldset>
            </div> 
			 
			 
			 <div class="form-group col-sm-12">
                 <label>Content</label>
                 <textarea name="content" class="form-control" style="height:220px;"></textarea>
                 
             </div>
			 
			 
			 <div class="col-sm-12 col-xs-12">			 
			 <button type="submit" class="blue-btn">Submit</button>
             </div>
		  
         </form>
         
	</div>	 
          
		  
        </div>
      </div>
    </div>
	
	
	<?php include 'footer.php' ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>

<?php } ?>
