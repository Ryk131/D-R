<?php
 
include 'convidado.php'; 
require_once 'conexao.php'; 
  
interface IRepositorioConvidados {
    public function PesquisaConvidado($nome_convidado);
    public function CadastraConvidado($Convidado);
    public function ListarConvidados($tbtp);   
    public function MostraConvidado($nome_convidado); 
    public function DeletarConvidado($nome_convidado); 
    public function ConfirmarPresenca($confirm,$nome);
    public function DesconfirmarPresenca($confirm,$nome_convidado);
    public function ReconfirmarPresenca($confirm,$nome_convidado);
    public function PuxarNomes($nome); 
    public function VerifNumConv($fam_conv);
    public function GuardarMensagem($nome_convidado,$msg_convidado);
    public function NumConv($conf);
    public function NumTot();
    public function PuxarMensagens();
    public function VerificarConfirm($nome);
}
 
class RepositorioConvidadosMySQL implements IRepositorioConvidados
{ 
    private $conexao;  
    public function __construct()
    {
        // site -> "localhost","u575402288_RykDany2205","Rykdany@2205","u575402288_d_r"
        // teste -> "localhost","root","","d-r"
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

    
    public function ListarConvidados($tbtp)
    {
        if($tbtp == 3) {
            $sql = "SELECT * FROM tbl_convidados ORDER BY nome_convidado ASC";
            $listagem = $this->conexao->executarQuery($sql);
            return $listagem;
        } else if($tbtp == "FM") {
            $sql = "SELECT * FROM tbl_convidados";
            $listagem = $this->conexao->executarQuery($sql);
            return $listagem;
        } else {
            $sql = "SELECT * FROM tbl_convidados WHERE confirm = '$tbtp' ORDER BY nome_convidado ASC";
            $listagem = $this->conexao->executarQuery($sql);
            return $listagem;
        }
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

    public function ConfirmarPresenca($confirm,$nome)
    {
        $sql = "UPDATE tbl_convidados SET confirm = '$confirm' WHERE nome_convidado = '$nome'";
        $this->conexao->executarQuery($sql);
    }

    public function DesconfirmarPresenca($confirm,$nome_convidado)
    {
        $sql = "UPDATE tbl_convidados SET confirm = '$confirm' WHERE nome_convidado = '$nome_convidado'";
        $this->conexao->executarQuery($sql);
    }

    public function ReconfirmarPresenca($confirm,$nome_convidado)
    {
        $sql = "UPDATE tbl_convidados SET confirm = '$confirm' WHERE nome_convidado = '$nome_convidado'";
        $this->conexao->executarQuery($sql);
    }

    public function PuxarNomes($nome)
    {
        $sql = "SELECT * FROM tbl_convidados WHERE fam_conv = '$nome'";
        $listagem = $this->conexao->executarQuery($sql);
        return $listagem;
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

    public function NumConv($conf)
    {
        $sql = "SELECT * FROM tbl_convidados WHERE confirm = '$conf'";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }

    public function NumTot() 
    {
        $sql = "SELECT * FROM tbl_convidados";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }

    public function PuxarMensagens()
    {
        $sql = "SELECT * FROM mensagens_convidados";
        $msgs = $this->conexao->executarQuery($sql);
        return $msgs;
    }

    public function VerificarConfirm($nome)
    {
        $sql = "SELECT * FROM tbl_convidados WHERE nome_convidado = '$nome'";
        $conv = $this->conexao->executarQuery($sql);
        return $conv;
    }
}
   