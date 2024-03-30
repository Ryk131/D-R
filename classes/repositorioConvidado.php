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
    public function EnviarSolicitacao($id_usuario,$id_amg);
    public function VerificarSolicitacao($id_usuario);
    public function PegarIdSolicitacoes($id_usuario);
    public function MostrarInfo($id_usuario);
    public function ApagarSolicitacao($id_usuario,$id_amg);
    public function AceitarSolicitacao($id_usuario,$id_amg);
    public function PegarIdAmg1($id_usuario);
    public function ListarAmg($id,$id_usuario);
    public function FicarOnline($id_usuario);
    public function AlterarStatus($id_usuario,$status);

}
 
class RepositorioConvidadosMySQL implements IRepositorioConvidados
{ 
    private $conexao; 
    public function __construct()
    {
        $this->conexao = new Conexao("localhost","root","","r_d");
       
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
        $sql = "SELECT * FROM tbl_convidados";
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

    public function EnviarSolicitacao($id_usuario,$id_amg)
    {
        $sql = "INSERT INTO solicitacao_amizade (id,id_usuario,id_amg) VALUES ('','$id_usuario','$id_amg')";
        $this->conexao->executarQuery($sql);
    }

    public function VerificarSolicitacao($id_usuario)
    {
        $sql = "SELECT * FROM solicitacao_amizade WHERE id_amg = '$id_usuario'";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }
    
    public function PegarIdSolicitacoes($id_usuario)
    {
        $sql = "SELECT * FROM solicitacao_amizade WHERE id_amg = '$id_usuario'";
        $listagem = $this->conexao->executarQuery($sql);
        return $listagem;
    }

    public function MostrarInfo($id_usuario) 
    {
        $sql = "SELECT * FROM tbl_usuario WHERE id_usuario = '$id_usuario'";
        $listagem = $this->conexao->executarQuery($sql);
        return $listagem;
    }

    public function ApagarSolicitacao($id_usuario,$id_amg)
    {
        $sql = "DELETE FROM solicitacao_amizade WHERE id_amg = '$id_usuario' AND id_usuario = '$id_amg'";
        $this->conexao->executarQuery($sql);
    }

    public function AceitarSolicitacao($id_usuario,$id_amg)
    {
        $sql = "INSERT INTO tbl_amg (id,id_usuario,id_amigo) VALUES ('','$id_usuario','$id_amg')";
        $this->conexao->executarQuery($sql);
    }

    public function PegarIdAmg1($id_usuario)
    {
        $sql = "SELECT * FROM tbl_amg WHERE id_usuario = '$id_usuario'";
        $listagem = $this->conexao->executarQuery($sql);
        return $listagem;
    }

    public function ListarAmg($id,$id_usuario)
    {
        $sql = "SELECT * FROM tbl_usuario WHERE id_usuario = '$id' AND id_usuario != '$id_usuario'";
        $listagem = $this->conexao->executarQuery($sql);
        return $listagem;
    }

    public function FicarOnline($id_usuario)
    {
        $sql = "INSERT INTO tbl_online (id,id_usuario,hora_entrada) VALUES ('','$id_usuario','')";
        $this->conexao->executarQuery($sql);
    }

    public function AlterarStatus($id_usuario,$status)
    {
        $sql = "UPDATE tbl_usuario SET sessao_status = '$status' WHERE id_usuario = '$id_usuario'";
        $this->conexao->executarQuery($sql);
    }
}
   