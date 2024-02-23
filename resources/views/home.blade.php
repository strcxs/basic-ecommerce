<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>data</title>
</head>
<body>
    
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $.ajax({
    url: "https://api.redguardsecurity.com/mcn/datauser/pengumuman",
    type: 'POST',
    success: function(res) {
        console.log(res);
        alert(res);
    }
});
});

</script>