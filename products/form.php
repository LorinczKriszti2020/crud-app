<?php if(!empty($errors)) { ?>
      <div class="alert alert-danger">
        <?php foreach ($errors as $error) { ?>
          <div><?php echo $error ?></div>
        <?php } ?>
      </div>
    <?php } ?>


  
    <p>
      <a href="create.php" class="btn btn-success">Create Product</a>
    </p>

    <form action="" method="post" enctype="multipart/form-data">

      <?php if($product['image']): ?>
        <img src="<?php echo $product['image'] ?>" class="thumb-image">
      <?php endif; ?>

      <div class="form-group">
        <label>Product image</label> <br>
        <input type="file" name="image">
      </div>
      <div class="form-group">
        <label>Product title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $title; ?>">
      </div>
      <div class="form-group">
        <label>Product description</label>
        <textarea class="form-control" name="description"><?php echo $description; ?></textarea>
      </div>
      <div class="form-group">
        <label>Product price</label>
        <input type="text" step="0.01" class="form-control" name="price" value="<?php echo $price; ?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>