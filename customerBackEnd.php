<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $shipCost = 0;
  $name = $_POST["user"];
  $pass = $_POST["pass"];
  $item1 = $_POST["item1"];
  $item2 = $_POST["item2"];
  $item3 = $_POST["item3"];
  $ship = $_POST["ship"];

  if($ship=="Free") $shipCost += 0;
  if($ship=="Overnight") $shipCost += 50;
  if($ship=="Three Day") $shipCost += 5;

  $total = $item1+($item2*2)+($item3*3)+$shipCost;
  echo "<title>Checkout</title>";
  echo "<link rel='stylesheet' href='style.css'/>";
  echo"<head><center>Checkout Menu</center></head>";
  echo "Password (because your security is my lowest priority): ".$pass."<br>";
  echo "Here's your receipt<br><br>";
  echo "<table><tr><td class='head'></td>";
  echo "<td class='head'>Quantity</td>";
  echo "<td class='head'>Cost Per Item</td>";
  echo "<td class='head'>Sub Total</td></tr>";
  echo "<tr><td class='head'>Item 1</td><td>".$item1."</td><td>$1.00</td><td>$".($item1)."</td></tr>";
  echo "<tr><td class='head'>Item 2</td><td>".$item2."</td><td>$2.00</td><td>$".($item2*2)."</td></tr>";
  echo "<tr><td class='head'>Item 3</td><td>".$item3."</td><td>$3.00</td><td>$".($item3*3)."</td></tr>";
  echo "<tr><td class='head'>Shipping</td><td colspan='2'>".$ship."</td><td>$".$shipCost."</td></tr>";
  echo "<tr><td colspan='3' class='head'>Total Cost</td><td class='head'>$".$total."</td></tr>";
  echo "</table>";

?>
