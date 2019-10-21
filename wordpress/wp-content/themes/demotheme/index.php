<?php get_header() ?>
<!-- Page Content -->
<div class="container">

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <h1 class="my-4">Thanh Truyền
        <small>aka Monk</small>
      </h1>

      <!-- Blog Post -->
      <div class="card mb-4">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/images/1.png" alt="Card image cap"></div>
            <div class="swiper-slide"><img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/images/2.png" alt="Card image cap"></div>
            <div class="swiper-slide"><img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/images/3.png" alt="Card image cap"></div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>

        <div class="card-body">
          <h2 class="card-title">Post Title</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
          <a href="#" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          Posted on October 10, 2019 by
          <a href="#">Admin</a>
        </div>
      </div>

      <!-- Blog Post -->
      <div class="card mb-4">
        <img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/images/2.png" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">Post Title</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
          <a href="#" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          Posted on October 10, 2019 by
          <a href="#">Admin</a>
        </div>
      </div>

      <!-- Blog Post -->
      <div class="card mb-4">
        <img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/images/3.png" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">Post Title</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
          <a href="#" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          Posted on October 10, 2019 by
          <a href="#">Admin</a>
        </div>
      </div>

      <!-- Pagination -->
      <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
          <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">Newer &rarr;</a>
        </li>
      </ul>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button">Search</button>
            </span>
          </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#">A</a>
                </li>
                <li>
                  <a href="#">B</a>
                </li>
                <li>
                  <a href="#">C</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#">D</a>
                </li>
                <li>
                  <a href="#">E</a>
                </li>
                <li>
                  <a href="#">F</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Side Widget -->
      <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
          You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
      </div>

    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer() ?>