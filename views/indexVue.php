<?php
  include("template/header.php");
 ?>

 <form action="index.php" method="post">
    <div class="form-group">
      <input type="text" class="form-control" id="formGroupExampleInput" name="name"  placeholder="name">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="formGroupExampleInput1" name="cash" placeholder="cash">
    </div>
    <button type="submit" value="Submit" class="btn btn-primary submi">Submit</button>
  </form>

 <?php
   include("template/footer.php");
  ?>
