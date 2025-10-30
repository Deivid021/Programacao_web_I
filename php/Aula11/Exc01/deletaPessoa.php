<?php
    require_once("conexao.php");

    function deletarPessoa($id) {
        $dbconn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres");
    
        if (!$dbconn) {
            return false;
        }
    
        $query = "DELETE FROM TBPESSOA WHERE pescodigo = $id";
    
        $result = pg_query($dbconn, $query);
    
        pg_close($dbconn);
    
        return $result ? true : false;
    }
?>