# OesteCargas
o arquivo conexao.php mostra as credenciais  para logar ao banco de dados.. banco de dados: cadastros / tabela: usuario;
class db{

	private $host = 'localhost';

	private $usuario = 'root';

	private $senha = '';

	private $database = 'cadastros';

	public function conecta_mysql(){

		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
		return $con;
    
    
    
    ////
    
    no arquivo validar.php está o codigo para validação do cadastro junto ao database 
    require_once('conexao.php');

	$usuario = $_POST['usuario'];

	$email = $_POST['email'];

	$senha = $_POST['senha'];

	$bancoDados = new db();

	$link = $bancoDados-> conecta_mysql();

	$sql = "insert into usuario (usuario, email, senha) values('$usuario', '$email', '$senha')";

	mysqli_query($link, $sql);
