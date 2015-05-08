<!DOCTYPE html>
<html>

<head>
  <title>Scholastic Reviews Demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <script src='http://cdn.livefyre.com/Livefyre.js'></script>
  <script src="http://client-solutions.ep.livefyre.com/media/Y2xpZW50LXNvbHV0aW9ucy5lcC5saXZlZnlyZS5jb20=/javascripts/customprofiles.js"></script>
  <style>
    #product {
      margin: 0 auto;
      width: 500px;
      display: block;
      text-align: center;
    }

    #product img {
      width: 500px;
      height: auto;
    }

    #livefyre-app-custom-1416271848780 {
      width: 800px;
      margin: 15px auto;
    }
  </style>
</head>

<body>
  <div class="livefyre-wrapper">
    <!-- <nav>
        <ul>
            <li><a href="core.html">Comments</a></li>
            <li><a href="curate.html">Curate</a></li>
            <li><a href="index.php">Reviews</a></li>
        </ul>
    </nav> -->
    <div id="product">
      <h1>Relive the wonder with the Harry Potter Box Set</h1>
      <img src="img/hpboxset.png"/>
    </div>
    <div id="livefyre-app-custom-1416271848780"></div>
    <script type="text/javascript">
              var networkConfig = {
                  network: 'client-demo-accounts.fyre.co'
              };

              var convConfig = {
                siteId: '370355',
                articleId: 'custom-1421871598744',
                el: 'livefyre-app-custom-1416271848780',
                ratingSummaryEnabled: true,
                maxRating: 5,
                app: 'reviews'
              };

              Livefyre.require(['fyre.conv#3','auth', 'lfep-auth-delegate#0'], 
                  function (Conv, auth, LFEPAuthDelegate) {
                      new Conv(networkConfig, [convConfig], function (reviewWidget) {}());
                      var authDelegate = new LFEPAuthDelegate({
                          engageOpts: {
                              app: "client-demo-accounts.auth.fyre.co"
                          }
                      });
                  auth.delegate(authDelegate);
              });
          </script>
</div>
</body>
</html>

  <div id="livefyre-app-custom-1421448422893"></div>
  <!-- Scripts -->