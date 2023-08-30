<?php
	if(file_exists('config.php')){
		require("config.php");
	}


	function notifications() {
		global $conn;

		$arr = array();

		$sql = "SELECT * FROM raspberry ORDER BY id DESC LIMIT 1;";
		$result = $conn->query($sql) or die("Error");

		if ($result->num_rows > 0)
  			while($row = $result->fetch_assoc())
				$arr["raspberry"][] = $row;
		else
			$arr["raspberry"] = null;


		$sql = "SELECT * FROM dew ORDER BY id DESC LIMIT 1;";
		$result = $conn->query($sql) or die("Error");

		if ($result->num_rows > 0)
  			while($row = $result->fetch_assoc())
				$arr["dew"][] = $row;
		else
			$arr["dew"] = null;

		$sql = "SELECT * FROM mode ORDER BY id DESC LIMIT 1;";
		$result = $conn->query($sql) or die("Error");

		if ($result->num_rows > 0)
  			while($row = $result->fetch_assoc())
				$arr["mode"][] = $row;
		else
			$arr["mode"] = null;

		return $arr;
	}


	function modules($module) {
		global $conn;

		$sql = "UPDATE " . $module . "  SET module_status = 'ON'  WHERE id = (SELECT MAX(id) from " . $module . ");";
		$conn->query($sql) or die("Error");

		return "OK";

	}

	function mode($name) {
		global $conn;

		$sql = "UPDATE mode SET " . $name . " = NOT " . $name . ";";
		$conn->query($sql) or die("Error");

		return "OK";

	}

	function dhmode($dew, $mode, $pwr = -1) {
		global $conn;


		if ($pwr == -1)
			$sql = "UPDATE dew SET  dh" . $dew . "_mode = " . $mode . " WHERE id = (SELECT MAX(id) from dew);";
		else
			$sql = "UPDATE dew SET  dh" . $dew . "_mode = " . $mode . ",  dh" . $dew . "_pwr = " . $pwr . " WHERE id = (SELECT MAX(id) from dew);";

		$conn->query($sql) or die("Error");

		return "OK";

	}

	function get_all($table) {
		global $conn;

		$arr = array();

		$sql = "SELECT * FROM " . $table ." ORDER BY id DESC LIMIT 60;";
		$result = $conn->query($sql) or die("Error");

		if ($result->num_rows > 0)
  			while($row = $result->fetch_assoc())
				$arr["m"][] = $row;
		else
			$arr["m"] = null;


		$sql = "SELECT * FROM " . $table ." WHERE MOD((SELECT MAX(date) -  SECOND(FROM_UNIXTIME(MAX(date))) FROM " . $table .") - date, 60) = 0 UNION SELECT * FROM " . $table ." WHERE id = (SELECT MAX(id) from " . $table .") ORDER BY id DESC LIMIT 60;";
		$result = $conn->query($sql) or die("Error");

		if ($result->num_rows > 0)
  			while($row = $result->fetch_assoc())
				$arr["h"][] = $row;
		else
			$arr["h"] = null;

		$sql = "SELECT * FROM " . $table ." WHERE MOD((SELECT MAX(date) -  (MINUTE(FROM_UNIXTIME(MAX(date))) * 60)  - SECOND(FROM_UNIXTIME(MAX(date))) FROM " . $table .") - date, 3600) = 0 UNION SELECT * FROM " . $table ." WHERE id = (SELECT MAX(id) from " . $table .") ORDER BY id DESC LIMIT 60;";
		$result = $conn->query($sql) or die("Error");

		if ($result->num_rows > 0)
  			while($row = $result->fetch_assoc())
				$arr["d"][] = $row;
		else
			$arr["d"] = null;

		return $arr;
	}

	function get_module_status()
	{
		global $conn;

		$arr = array();

		$sql = "SELECT module_status FROM dew WHERE id = (SELECT MAX(id) FROM dew) UNION ALL (SELECT module_status as 'gps' FROM gps WHERE id = (SELECT MAX(id) FROM gps)) UNION ALL (SELECT module_status FROM weather WHERE id = (SELECT MAX(id) FROM weather));";
		$result = $conn->query($sql) or die("Error");

		if ($result->num_rows > 0)
  			while($row = $result->fetch_assoc())
				$arr["modules"][] = $row;
		else
			$arr["modules"] = null;


		return $arr;
	}

	if ($_GET["data"] == "raspberry")		{ echo json_encode(array(get_all("raspberry"), get_module_status()));	}
	if ($_GET["data"] == "power")			{ echo json_encode(get_all("power"));									}
	if ($_GET["data"] == "notifications")	{ echo json_encode(notifications()); 									}
	if ($_GET["data"] == "activate_dew")	{ echo json_encode(modules("dew")); 									}
	if ($_GET["data"] == "activate_gps")	{ echo json_encode(modules("gps")); 									}
	if ($_GET["data"] == "activate_weather"){ echo json_encode(modules("weather")); 								}
	if ($_GET["data"] == "dew")				{ echo json_encode(array(get_all("dew"), get_all("weather")));			}
	if ($_GET["data"] == "dark")			{ echo json_encode(mode("dark")); 										}
	if ($_GET["data"] == "silent")			{ echo json_encode(mode("silent")); 									}

	if (($_GET["dew"] == "1") || ($_GET["dew"] == "2") || ($_GET["dew"] == "3") || ($_GET["dew"] == "4"))
	{
		if (($_GET["data"] == "0") || ($_GET["data"] == "1") || ($_GET["data"] == "2") || ($_GET["data"] == "3"))
		{
			if ($_GET["data"] == "0")
				echo json_encode(dhmode($_GET["dew"], $_GET["data"])); 
			if ($_GET["data"] == "1")
				if (isset($_GET["pwr"])) {
					if ((intval($_GET["pwr"]) >= 0) and (intval($_GET["pwr"]) <= 100))
						echo json_encode(dhmode($_GET["dew"], $_GET["data"], intval($_GET["pwr"])));
				}
				else
					echo json_encode(dhmode($_GET["dew"], $_GET["data"]));
			if ($_GET["data"] == "2")
					echo json_encode(dhmode($_GET["dew"], $_GET["data"], 100));
			if ($_GET["data"] == "3")
					echo json_encode(dhmode($_GET["dew"], $_GET["data"], 0));
		}

	}

	$conn->close();
?>
