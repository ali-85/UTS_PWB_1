<?php include 'partials/header.php'; ?>        
<?php include 'partials/navbar.php'; ?>
<section class="vh-100" style="background-color: #263238;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <h3 class="mb-5">Sign up</h3>
              <form action="" method="post">
              <div class="form-floating mb-4">
                <input type="text" id="typeName" class="form-control form-control-lg" required/>
                <label for="typeName">Full Name</label>
              </div>
              <div class="form-floating mb-4">
                <input type="email" id="typeEmailX-2" class="form-control form-control-lg" required/>
                <label for="typeEmailX-2">Email</label>
              </div>
              <div class="form-floating mb-4">
                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" required/>
                <label for="typePasswordX-2">Password</label>
              </div>
              <button class="btn btn-lg btn-block text-white" style="background-color: #546e7a;" type="submit">Sign Up</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<?php include 'partials/footer.php'; ?>
