<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Sign In</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" type="text/css" href="css/roboto-font.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="css/style2.css" />
  <meta name="robots" content="noindex, follow">
  <script src="https://kit.fontawesome.com/d5d388fd48.js" crossorigin="anonymous"></script>
</head>

<body class="form-signin">
  <div class="signin-page-content">
    <div class="form-signin-content">
      <form class="form-detail" action="sign-in.php" method="post">
        <div class="indexLogo">
          <img src="images/logoXS.png" alt="">
        </div>
        <h2>Sign In</h2>
        <div class="form-row">
          <label for="your-email">Email</label>
          <input type="text" name="yourEmail" id="your-email" class="input-text" placeholder="Your Email" required
            pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
          <i class="fas fa-envelope"></i>
        </div>
        <div class="form-row">
          <label for="password">Password</label>
          <input type="password" name="yourPassword" id="password" class="input-text" placeholder="Your Password" required>
          <i class="fas fa-lock"></i>
        </div>
        <div class="form-row-last">
          <input type="submit" name="signin_btn" class="sign-in" value="Sign In">
        </div>
        <div class="form-row-link">
          <a href="sign-up.php">Sign up for account</a>
        </div>
      </form>
    </div>
  </div>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
    integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
    data-cf-beacon='{"rayId":"7bec97ae0b9287d7","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.3.0","si":100}'
    crossorigin="anonymous"></script>
</body>

</html>