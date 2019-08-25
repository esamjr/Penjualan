<?php
session_start();

mysql_connect("localhost","root","");
mysql_select_db("penjualan") or die("Error Connect". mysql_error());
