<html>
    <head>
        <title>Web Notifikasi dengan Javascript | www.hakkoblogs.com</title>
         
        <!-- Bootstrap -->
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container" style="margin-top: 10px;">
            <div class="row">
                <center><button class="btn btn-primary" onclick="notifikasi()">
                    Klik Disini
                </button></center>
            </div>
        </div>
         
        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
         
        <!-- Notifikasi Script -->
        <script>
            $(document).ready(function() {
                  if (Notification.permission !== "granted")
                    Notification.requestPermission();
            });
             
            function notifikasi() {
                if (!Notification) {
                    alert('Browser kamu belum mendukung web notifikasi.'); 
                    return;
                }
                if (Notification.permission !== "granted")
                    Notification.requestPermission();
                else {
                    var notifikasi = new Notification('www.hakkoblogs.com', {
                        icon: 'http://2.bp.blogspot.com/-mT_fnlDBIS8/VVMxIByAAVI/AAAAAAAAAlE/BMLo2NrV-OA/s1600/header2.jpg',
                        body: "Belajar Javascipt itu menyenangkan",
                    });
                    notifikasi.onclick = function () {
                        window.open("http://www.hakkoblogs.com");      
                    };
                    setTimeout(function(){
                        notifikasi.close();
                    }, 10000);
                }
            };
        </script>
    </body>
</html>
