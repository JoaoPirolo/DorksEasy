<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <div class="container spacetop">
    <?php  require_once('google-api-php-client-2.2.1/vendor/autoload.php');
      $client = new Google_Client();
      $client->setApplicationName("Client_Library_Examples");
      $client->setDeveloperKey("AIzaSyD4ePQSrWHZCsVRfuf1goOPgzFB9gJbhMM");

      $service = new Google_Service_Books($client);
      $optParams = array('filter' => 'free-ebooks');
      $results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

      foreach ($results as $item) {
        echo $item['volumeInfo']['title'], "<br /> \n";
      }
    ?>
        <div class="row">
            <div class="col-md-10">
                <form class="col-md-5" action="index.php" method="post">
                  <div class="form-group">
                    <label for="nomeUsuario">Insira o site</label>
                    <input type="text" class="form-control" name="nome" id="nomeUsuario">
                  </div>
                  <button type="submit" name="salva" class="btn btn-primary">Exploit</button>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>