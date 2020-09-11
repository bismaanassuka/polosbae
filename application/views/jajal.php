<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
</head>

<body>
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
                <!-- public $Name;
                public $Processor;
                public $Gpu;
                public $Display;
                public $Memory;
                public $Storage;
                public $Weight;
                public $Dimension;
                public $Battery; -->
                <th>Name</th>
                <th>Processor</th>
                <th>Gpu</th>
                <th>Display</th>
                <th>Memory</th>
                <th>Storage</th>
                <th>Weight</th>
                <th>Dimension</th>
                <th>Battery</th>
                <th>Image<?=$j;?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($h as $product) : ?>
                <tr>
                  <td>
                    <?php echo $product->Name; ?>
                  </td>
                  <td>
                    <?php echo $product->Name; ?>
                  </td>
                  <td>
                    <?php echo $product->Name; ?>
                  </td>
                  <td>
                    <?php echo $product->Name; ?>
                  </td>
                  <td>
                    <?php echo $product->Name; ?>
                  </td>
                  <td>
                    <?php echo $product->Name; ?>
                  </td>
                  <td>
                    <?php echo $product->Name ?>
                  </td>
                  <td>
                    <?php echo $product->Name ?>
                  </td>
                  <td>
                    <?php echo $product->Name ?>
                  </td>
                  <td>
                    <?php echo $product->Name ?>
                  </td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</body>

</html>