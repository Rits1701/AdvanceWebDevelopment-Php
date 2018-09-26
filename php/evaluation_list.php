
      <?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        do_get();
    } else {
        do_post();
    }


    function do_get() {
        global $msg;
        require_once "VevaluationModel.php";
        $i=0;
        $result = VevaluationModel::getEvaluation();
        echo "<table>";
            echo "<tr>";
                echo "<th>Evaluation id</th>";
                echo "<th>Click</th>";
            echo "</tr>";
            
          while($i<count($result)){
             
             echo "<tr>";
                echo "<td>" . $result[$i]['evaluation_id'] . "</td>";

                echo "<td align=center width=100><a href='studentlist.php?eval_id=".$result[$i]['evaluation_id'] ."'>Click</a></td>";

            echo "</tr>";
            $i++;
          }  
            echo "</table>";
    }
    function do_post() {

    }
    ?>
