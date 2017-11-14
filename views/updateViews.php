<?php
  include("template/header.php");
 ?>

<!-- start of the div class formu  for update (add and take)-->
<div class="formu col-12 col-md-8 col-lg-6">
 <form action="index.php" method="post">
    <div class="form-group">
      <input type="text" class="form-control" id="formGroupExampleInput" name="name"  value= '<?php echo $update->getName()?>' placeholder="name">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="formGroupExampleInput" name="cash"  value= '<?php echo $update->getCash()?>$' placeholder="cash">
    </div>
    <input type="hidden" class="form-control" id="formGroupExampleInput" name="id"  value= '<?php echo $update->getId()?>' placeholder="cash">
    <div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput" name="addMoney" placeholder="addMoney">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput" name="takeMoney" placeholder="takeMoney">
    </div>


    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
      <button class="dropdown-item" type="button">Action</button>
      <button class="dropdown-item" type="button">Another action</button>
      <button class="dropdown-item" type="button">Another action</button>
      <button class="dropdown-item" type="button">Something else here</button>
    </div>
  </div>



    <button type="submit" value="Submit" name="submitUpdate" class="btn btn-primary submi">Submit</button>
  </form>
</div>
<!-- end of the div class formu for update (add and take) -->


<?php
  include("template/footer.php");
