<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with AJAX</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        #main {
            width: 80%;
            margin: 50px auto;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        #load-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
        }
        #load-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="main">
        <h1>PHP with AJAX</h1>
        <input type="button" id="load-button" value="Load Data">
        <div id="table-Data">
            <!-- Data will be loaded here dynamically -->
        </div>
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Handle button click
            $("#load-button").on("click", function () {
                $.ajax({
                    url: "load.php", // Path to your PHP script
                    type: "POST",
                    success: function (data) {
                        // Load data into the table container
                        $("#table-Data").html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>
