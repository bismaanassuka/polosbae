<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
</head>

<body>
    <script>
        window.onload = alert(localStorage.getItem("storageName"));
    </script>
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Polosbae
                </h1>
                <div class="field has-addons has-addons-centered ">
                    <p class="control">
                        <span class="select">
                            <select>
                                <option>LAPTOP </option>
                                <option>COMPUTER</option>
                                <option><?php echo $something = $_SESSION['varname']; ?></option>
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
            </div>
        </div>
        <section class="hero is-info is-medium">

            <div class="hero-body">
                <div id="img-dev">
                    <img src="https://selular.id/wp-content/uploads/2020/08/Pixel-4a-696x606.jpg" alt="" width="20%">
                </div>
            </div>
            <div class="hero-body">

            </div>
        </section>

        <section class="hero is-alert is-medium">

            <div class="hero-body">
                

            </div>
        </section>
    </section>


</body>

</html>