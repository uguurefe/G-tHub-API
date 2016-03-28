<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"/>
    <title>API</title>
</head>
<body>
    <div class="container">
        <div class="row col-lg-offset-4 col-lg-4 col-xs-offset-1 col-xs-10" id="text">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="text-align: center">Documentation:</h2>
                </div>
                <div class="panel-body">
                    <textarea class="form-control"  id="area" rows="10"></textarea>
                </div>
                <div class="panel-footer">
                    <input type="button" class="btn btn-success btn-block" value="GitHub API">
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).on('click','.btn',function(){
            $.ajax({
                type: 'GET',
                url:"https://api.github.com/repositories",
                data: { get_param: 'value' },
                dataType:"text",
                success: function(data) {
                    var json = data;
                    $('#area').html(data);
                }
            });
        });
    </script>
</body>
</html>