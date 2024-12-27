<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form and Table Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Tabs Example</h3>
  <!-- Tab Navigation -->
  <form class="form-container">
  <ul class="nav nav-tabs" role="tablist">
  <li><a href="#tableData " data-toggle="tab">Table</a></li>
    <li class="active"><a href="#inputForm" data-toggle="tab">Form</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="inputForm" class="tab-pane fade in active">
      <form method="POST" class="form-container">
        <div>
          <label for="Fname">First Name *</label>
          <input type="text" id="Fname" name="Fname" required>
        </div>
        <div>
          <label for="Lname">Last Name *</label>
          <input type="text" id="Lname" name="Lname" required>
        </div>
        <div>
          <label for="mail">Email *</label>
          <input type="email" id="mail" name="Email" required>
        </div>
        <div>
          <input type="submit" id="save-button" value="Submit">
        </div>
      </form>
      
      
      
    </div>

 
    <div id="tableData" class="tab-pane fade">
      <h3>Table Data</h3>
      <div id="table-Data">
      
      </div>
    </div>
  </div>
</form>
</div>

<script>
$(document).ready(function(){
    // Function to load data into the table
    function loadTable(){
        $.ajax({
            url: "load.php", // Path to your PHP script that fetches data
            type: "POST",
            success: function (data) {
                $("#table-Data").html(data);
            }
        });
    }

   
    loadTable();

    // Handle form submission via AJAX
    $("#save-button").on("click", function(e){
        e.preventDefault();
        var fname = $("#Fname").val();
        var lname = $("#Lname").val();
        var email = $("#mail").val();

        $.ajax({
            url: "ajaxinsert.php", 
            type: "POST",
            data: {
                first_name: fname,
                last_name: lname,
                Email: email
            },
            success: function(data){
                if (data == 1) {
                    loadTable();
                    alert("Record inserted successfully");
                } else {
                    alert("Can't save record.");
                }
            }
            
        });
    });
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        if ($(e.target).attr('href') == "#tableData") {
            loadTable(); 
        }
    });
});
</script>

</body>
</html>

