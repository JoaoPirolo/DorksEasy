<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    <body>
    <script>
  (function() {
    var cx = '017305337282449250408:jxmfygjffvs';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
  <script type="text/javascript">
      var key = "AIzaSyD4ePQSrWHZCsVRfuf1goOPgzFB9gJbhMM";
      var engine = "017305337282449250408:jxmfygjffvs";
      var request = $.ajax({
              url: "https://www.googleapis.com/customsearch/v1?key="+key+"&cx="+engine+"&q=teste",
              type: 'get'
      });
      console.log(request);
</script>
    <div class="container spacetop">

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