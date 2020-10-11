<?php
            include 'connection.php';
            $sql = "SELECT customer_id, pin FROM carers WHERE customer_id = '".$_POST["uname"]."' and pin = '".$_POST["password"]."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
					
                    header('location:details.php');

                }
            }
            else{
                header('location:index.php');
            }
?>