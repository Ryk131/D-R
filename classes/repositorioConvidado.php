<?php
 
include 'convidado.php'; 
require_once 'conexao.php'; 
  
interface IRepositorioConvidados {
    public function PesquisaConvidado($nome_convidado);
    public function CadastraConvidado($Convidado);
    public function ListarConvidados();   
    public function MostraConvidado($nome_convidado); 
    public function DeletarConvidado($nome_convidado); 
    public function ConfirmarPresenca($doc_convidado,$confirm,$nome);
    public function VerificarDoc($doc_convidado,$nome_convidado);
    public function DesconfirmarPresenca($confirm,$nome_convidado,$doc_convidado);
    public function ReconfirmarPresenca($confirm,$nome_convidado,$doc_convidado);
    public function PuxarNomes($nome); 
    public function IsolarConvidado($nome_convidado,$fam_conv);
    public function VerifNumConv($fam_conv);
    public function GuardarMensagem($nome_convidado,$msg_convidado);
}
 
class RepositorioConvidadosMySQL implements IRepositorioConvidados
{ 
    private $conexao; 
    public function __construct()
    {
        $this->conexao = new Conexao("localhost","root","","d-r");
       
        if($this->conexao->conectar()==false){ 
            echo "Erro de conexao ".mysqli_connect_error(); 
        } 
    }

    public function PesquisaConvidado($nome_convidado)
    {
        $sql = "SELECT * FROM tbl_convidados WHERE nome_convidado LIKE '$nome_convidado%'";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }

    public function CadastraConvidado($Convidado)
    {
        $nome_convidado = $Convidado->getNomeConvidado();

        $sql = "INSERT INTO tbl_convidados (id_convidado,nome_convidado,doc_convidado,confirm) VALUES ('','$nome_convidado',NULL,NULL)";
        $this->conexao->executarQuery($sql);
    }

    
    public function ListarConvidados()
    {
        $sql = "SELECT * FROM tbl_convidados ORDER BY nome_convidado ASC";
        $listagem = $this->conexao->executarQuery($sql);
        return $listagem;
    }

    public function MostraConvidado($nome_convidado)
    {
        $sql = "SELECT * FROM tbl_convidados WHERE nome_convidado LIKE '$nome_convidado%'";
        $listagem = $this->conexao->executarQuery($sql);
        return $listagem;
    }
    
    public function DeletarConvidado($nome_convidado)
    {
        $sql = "DELETE FROM tbl_convidados WHERE nome_convidado = '$nome_convidado'";
        $this->conexao->executarQuery($sql);
    }

    public function ConfirmarPresenca($doc_convidado,$confirm,$nome)
    {
        $sql = "UPDATE tbl_convidados SET confirm = '$confirm', doc_convidado = '$doc_convidado' WHERE nome_convidado = '$nome'";
        $this->conexao->executarQuery($sql);
    }

    public function VerificarDoc($doc_convidado,$nome_convidado)
    {
        $sql = "SELECT * FROM tbl_convidados WHERE nome_convidado = '$nome_convidado' AND doc_convidado = '$doc_convidado'";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }

    public function DesconfirmarPresenca($confirm,$nome_convidado,$doc_convidado)
    {
        $sql = "UPDATE tbl_convidados SET confirm = '$confirm' WHERE doc_convidado = '$doc_convidado' AND nome_convidado = '$nome_convidado'";
        $this->conexao->executarQuery($sql);
    }

    public function ReconfirmarPresenca($confirm,$nome_convidado,$doc_convidado)
    {
        $sql = "UPDATE tbl_convidados SET confirm = '$confirm' WHERE doc_convidado = '$doc_convidado' AND nome_convidado = '$nome_convidado'";
        $this->conexao->executarQuery($sql);
    }

    public function PuxarNomes($nome)
    {
        $sql = "SELECT * FROM tbl_convidados WHERE fam_conv = '$nome'";
        $listagem = $this->conexao->executarQuery($sql);
        return $listagem;
    }

    public function IsolarConvidado($nome_convidado,$fam_conv)
    {
        $sql = "UPDATE tbl_convidados SET fam_conv = '$fam_conv' WHERE nome_convidado = '$nome_convidado'";
        $this->conexao->executarQuery($sql);
    }

    public function VerifNumConv($fam_conv)
    {
        $sql = "SELECT * FROM tbl_convidado WHERE fam_conv = '$fam_conv'";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }

    public function GuardarMensagem($nome_convidado,$msg_convidado)
    {
        $sql = "INSERT INTO mensagens_convidados (nome_convidado,msg_convidado) VALUES ('$nome_convidado','$msg_convidado')";
        $this->conexao->executarQuery($sql);
    }

}
   