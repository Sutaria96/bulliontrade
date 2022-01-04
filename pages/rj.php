<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
  float:left;
 }



#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 18px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>
<body>
    <div class="container">
<table id="customers">
<table>
<tbody>
					<tr>
						<th>Commodities</th>
						<th>Qty</th>
						<th>Buy Rate (INR)</th>
						<th>Sell Rate (INR)</th>
						<th>Sell Qty</th>
						<th>Stock Position</th>
					</tr>
					
					<tr>
					<td>GOLD 995 JAI</td>
					<td>10</td>
					<td>40000</td>
					<td>39000</td>
					<td>1</td>
					<td>Available</td>
					</tr>
					<tr>
					<td>Silver 999 JAI</td>
					<td>10</td>
					<td>40000</td>
					<td>39000</td>
					<td>1</td>
					<td>Available</td>
					</tr>
					
					<tr>
					<td>GOLD AM FIX</td>
					<td>10</td>
					<td>40000</td>
					<td>39000</td>
					<td>1</td>
					<td>Available</td>
					</tr>
					<tr>
					<td>GOLD PM FIX</td>
					<td>10</td>
					<td>40000</td>
					<td>39000</td>
					<td>1</td>
					<td>Available</td>
					</tr>
					<tr>
					<td>Silver FIX</td>
					<td>10</td>
					<td>40000</td>
					<td>39000</td>
					<td>1</td>
					<td>Available</td>
					</tr>
					</tbody>
					</table>
					</table>
<br>
</div>
<div>
    <a href="/rates.html">click here for home page</a>
</div>
</body>
</html>
