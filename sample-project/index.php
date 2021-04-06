<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="col-md-offset-1 col-lg-10 ">
            <div class="container">
                <table id="contact-detail" class="display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>DOB</th>
                    </tr>
                </thead>
                </table>
                </div>
            </body>

            
        </div>

    </div>
    
    <script>
        $(document).ready(function() {
            $('#contact-detail').dataTable({
                "scrollX": true,
                "pagingType": "numbers",
                "processing": true,
                "serverSide": true,
                "ajax": "server.php"
            } );
        } );
    </script>





	
 
</body>
</html>