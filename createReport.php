<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




<link href="css/coolRadio.css" rel="stylesheet" type="text/css">
<script src="js/moment.js"></script>
<script src="js/createReport.js"></script>
<script src="js\createCSV.js"></script>



</head>

<body>

  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">A.W.E.S.O.M.-O 4000</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="createReport.php">Report</a></li>
        <li><a href="Registration.php">Registration</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>


<div class="container">
  <div class="row">
    <div class="col-sm-12 options">
      <form class="form" action="php/createReport.php" method="post" id="createReport">
        <h3>Create Report</h3>
        <select name="name">
            <option value="all">All</option>
            <option value="Andy">Andy</option>
            <option value="Bill">Bill</option>
            <option value="Carol">Carol</option>
            <option value="Dick">Dick</option>
        </select>
        <select name="mth" id="mth">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
        <select name="yr" id="yr">
            <option value="2030">2030</option>
            <option value="2029">2029</option>
            <option value="2028">2028</option>
            <option value="2027">2027</option>
            <option value="2026">2026</option>
            <option value="2025">2025</option>
            <option value="2024">2024</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
            <option value="2020" selected>2020</option>
        </select>
        <input type="Submit" id="submit">
        <button type="button" id="csvButton" disabled>Create CSV file</button>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 report">
      <table>
        <tr>
        <th>Name</th>
        <th>Year</th>
        <th>Month</th>
        </tr>
    </div>
        <tbody id="data"></tbody>
      </table>


      <!-- <div id="server-results"> AJAX Response Goes Here</div> -->
    </div>

</div>
