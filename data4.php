<?php
        header('Content-Type: application/json');

        include ('config.php');

        $sqlQuery = "SELECT points, class FROM eval e, students s WHERE e.stud_id=s.stud_id AND s.class='4 South'OR s.class='4 East'OR s.class='4 North'";

        $result = mysqli_query($db,$sqlQuery);

        $data = array();
        foreach ($result as $row) {
	        $data[] = $row;
        }

        echo json_encode($data);
?>