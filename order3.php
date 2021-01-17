<!DOCTYPE html>
<html>
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Satisfy&display=swap" rel="stylesheet">
    
<title>Table with database</title>
<style>
    #pay1{
        position: relative;
        left:790px;
        top:-110px;
    }
table {
border-collapse: collapse;
width: 50%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
border:1px solid black;
padding: 54px;
margin: 62px;

}
th {
background-color: black;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
   
<table>
<tr>

<th>Coffee_Name</th>
<th>Price</th>
<th>Quantity</th>
<th>total</th>



</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "cafe");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql ="SELECT c.coffee,p.price,c.quantity,p.price*c.quantity as total FROM coffee c,items p where c.coffee=p.coffee";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["coffee"]. "</td><td>" .  $row["price"] . "</td><td>".$row["quantity"]."</td><td>".$row["total"]."</td></tr>";

;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<button class="btn btn-outline-danger" id="pay1"><a href="order1.html" >Pay</a></button>

</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
    crossorigin="anonymous"></script>

</html>
