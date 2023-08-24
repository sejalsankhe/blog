<!DOCTYPE html>
<html lang="en">
  <head>
    <title>add blog</title>
    <?php
  
    include('components/head.html')
    ?>
  </head>
  <body>
    <?php
    include('components/navbar.html')
?>

    <div class="card shadow">
      <div class="card-body">
        <form action="handler/addblog.php" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"
              >Image Link</label
            >
            <input type="link" class="form-control" name="imagelink" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
              >blog title</label
            >
            <input
              type="text"
              class="form-control"
              id="exampleInputPassword1"
              name="blogtitle"
            />
          </div>
          <div class="form-floating">
            <textarea
              name="blogtext"
              class="form-control"
              placeholder="Leave a comment here"
              id="floatingTextarea"
            ></textarea>
            <label for="floatingTextarea">Text</label>
          </div>
          <button name="btn" type="submit" class="btn btn-primary">
            Submit
          </button>
        </form>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
