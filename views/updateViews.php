<!-- start of the div class formu -->
<div class="formu col-12 col-md-8 col-lg-6">
 <form action="index.php" method="post">
    <div class="form-group">
      <input type="text" class="form-control" id="formGroupExampleInput" name="name"  value= '<?php echo $update->getName()?>' placeholder="name">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="formGroupExampleInput" name="cash"  value= '<?php echo $update->getCash()?>' placeholder="cash">
    </div>
    <input type="hidden" class="form-control" id="formGroupExampleInput" name="id"  value= '<?php echo $update->getId()?>' placeholder="cash">

    <button type="submit" value="Submit" name="submitUpdate" class="btn btn-primary submi">Submit</button>
  </form>
</div>
<!-- end of the div class formu -->
