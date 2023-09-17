<!doctype html>
<html lang="en">

<head>
  <?php $this->load->view('includes/header'); ?>
  <title>Codeigniter 3 Image Upload Application</title>
</head>

<body>

  <div class="container">
    <div class="row">

      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3">Codeigniter 3 Image Upload Application</h2>
      </div>

      <div class="col-lg-12">

        <?php echo $this->session->flashdata('message'); ?>

        <div class="d-flex justify-content-between mb-3">
          <h4>Image Listing</h4>
          <a href="<?= base_url('image-upload/post') ?>" class="btn btn-success"> <i class="fas fa-plus"></i> Add New Image</a>
        </div>

        <table class="table table-bordered table-default">

          <thead class="thead-light">
            <tr>
              <th width="30%">S No.</th>
              <th width="70%">Image</th>
            </tr>
          </thead>

          <tbody>

            <?php $i = 1; foreach ($data as $post) { ?>

              <tr>
                <td><?php echo $i; ?></td>
                <td> <img class="img-fluid" src="<?= base_url('uploads/'.$post->image); ?>" style="width: 150px;"> </td>
              </tr>

            <?php $i++; } ?>

          </tbody>

        </table>

      </div>
    </div>
  </div>



  <?php $this->load->view('includes/footer'); ?>

</body>

</html>