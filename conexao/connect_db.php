<?php
if (preg_match("/(connect_db.php)/i", $_SERVER['SCRIPT_NAME'])){
die ("<script>location.href='index.php'</script>");
}

class BancoDeDados
{
    private static $instance = null;
    private $conexao;
	private $query;
	private $dados;
	
    private function __construct()
    {
		
		$host = "localhost";
    	$user = "root"; 
    	$senha = "fatecsr"; 
    	$banco = "db_nutris"; 

        try {
            $this->conexao = mysql_connect($host, $user, $senha);
			mysql_select_db($banco,$this->conexao);
        } catch (Exception $e) {
            die("Erro na conexão com MySQL! " . $e->getMessage());
        }
    }

    static function getInstance()
    {
        if (self::$instance == NULL)
            self::$instance = new BancoDeDados();    
        return self::$instance;                    
    }

    private function __clone() {}
	
	// função para executar a query sql
	function sql_query($query){
         $this->query = $query;
         if($this->dados = mysql_query($this->query)){
             return $this->dados;
         }else{
			 die('Query Inválida: ' . mysql_error());
         }        
     }
	
// função para retornar o número de registros encontrados
	function sql_linhas($query)
    {
         $this->query = $query;
         if($this->dados = mysql_num_rows($this->query))
         {
             return $this->dados;
         }
        else
        {			 
             return 0;
        }        
     }	

	// função para executar a query insert
	function string_query($query){
         $this->query = $query;
		 $result = mysql_query($this->query);
		 if (!$result) { die('Query Inválida: ' . mysql_error()); }
		 return;
     }	
	 
}

?>

