<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">

</head>

<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <section class="hero is-primary">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          Polosbae
        </h1>
      </div>
    </div>
  </section>
  <section class="hero is-info is-medium">

    <div class="hero-body">
      <div class="container">
        <div class="field has-addons has-addons-centered ">
          <p class="control">
            <span class="select">
              <select>
                <option>LAPTOP</option>
                <option>COMPUTER</option>
              </select>
            </span>
          </p>
          <p class="control " style="width: 50%;">
            <input class="input" type="text" placeholder="Amount of money">
          </p>
          <p class="control" tyle="width: 50%;">
            <a class="button is-primary">
              Transfer
            </a>
          </p>
        </div>
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Processor</th>
                <th>Gpu</th>
                <th>Display</th>
                <th>Memory</th>
                <th>Storage</th>
                <th>Weight</th>
                <th>Dimension</th>
                <th>Battery</th>
                <th>Image</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($h as $product) : ?>
                <tr>
                  <td class="nr">
                    <?php echo $product->Name; ?>
                  </td>
                  <td>
                    <a  class="use-address">
                      <?php echo $something ?>
                    </a>

                  </td>
                  <td>
                    <a  class="use-address1">
                      <?php echo $something ?>
                    </a>

                  </td>
                  <td>
                    <?php echo $product->Processor; ?>
                  </td>
                  <td>
                    <?php echo $product->Gpu; ?>
                  </td>
                  <td>
                    <?php echo $product->Display; ?>
                  </td>
                  <td>
                    <?php echo $product->Storage; ?>
                  </td>
                  <td>
                    <?php echo $product->Memory; ?>
                  </td>
                  <td>
                    <?php echo $product->Weight ?>
                  </td>
                  <td>
                    <?php echo $product->Dimension ?>
                  </td>
                  <td>
                    <?php echo $product->Battery ?>
                  </td>
                </tr>
              <?php endforeach; ?>
              <script>
                $(".use-address").click(function() {
                  var $row = $(this).closest("tr"); // Find the row
                  $something = $row.find(".nr").text(); // Find the text
                  sessionStorage.setItem("nama", $something);
                  alert($something)
                  // Let's test it out
                });
              </script>
              <?php
                $jj =  "<script>document.writeln(something);</script>";
              ?>
              <script>
                $(".use-address1").click(function() {
                  var ty = "<?php echo $jj ?>";
                  alert(ty)
                  // Let's test it out
                });
              </script>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </section>
</body>

</html>