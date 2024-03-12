


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="dashboard.css"> 
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Crime Reporting System (CRS)</h3>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="report_form.php">Report Crime</a>
            </li>
            <li>
                <a href="view_status.php">View Status</a>
            </li>
            <li>
                <a href="#">Anonymous Report</a>
            </li>
 
            <li>
                <a href="#">Communication Platform</a>
            </li>

            <li>
                <a href="#">Contact</a>
            </li>

            <li>
            <a href="index.php">Logout</a>
        </li>
        </ul>

        <footer>
            <p> Copyright © Crime Reporting System (CRS) 2024</p>
        </footer>

    </nav>

    <!-- Page Content -->
    <!-- <div id="content">
        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <span>Toggle Sidebar</span>
        </button>
    </div> -->
</div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./dashboard.js"></script>
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>



</body>
</html>
