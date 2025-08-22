<?php include('header2.php'); ?>

  <section class="pt0 pb0 pl100 pr100 bgc-f7">
<div class="container">

<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
  <h4 class="title fz17 mb30 crlblu">Photo Gallery</h4>


<div class="container">
  <div class="row  mb-2 mt-2 wow fadeInUp" data-wow-delay="300ms">
   <?php
  $conn = $pdo->open();
  try {
    $profile_id = $_GET['profile_id'] ?? '';
    $stmt = $conn->prepare("SELECT * FROM product_images WHERE profile_id = ?");
    $stmt->execute([$profile_id]);
    $images = $stmt->fetchAll();

    foreach ($images as $row2) {
?>
  <div class="col-sm-3 col-lg-3 ">
    <div class="blog-style1">
      <div class="blog-img" style="justify-content:center; background-position:center;">
        <a class="popup-img preview-img-2 sp-img mb2" href="uploads/original/<?php echo $row2['large_path']; ?>">
          <img src="uploads/medium/<?php echo $row2['medium_path']; ?>" alt="" >
        </a>
      </div>
    </div>
  </div>
<?php
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  $pdo->close();
?>
</div>
  </div>

  <div class="d-flex justify-content-center mt-3">
    <a href="javascript:history.back()" class="ud-btn btn-thm py-2 px-5">Back to Description</a>
  </div>
</div>
</section>
<?php include('footer.php'); ?>
</section>