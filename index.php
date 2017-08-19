<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" id="username">
    </form>
    <div id="show"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#username').change(function(){
                var username = $('#username').val();
                $.ajax({
                    type: 'POST',
                    url : 'functions.php',
                    data: { action : 'validate', username : username },
                    dataType: 'json',
                    success:function(response){
                        if(response.success == true) {
                            $('#show').html(response.message);
                        } else {
                            $('#show').html(response.message);
                        }
                    }
                });
            });
        });
    </script>
    </body>
</html>