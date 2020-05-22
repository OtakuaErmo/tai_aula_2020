<?php
// inclui o arquivo Model.php dentro deste arquivo
//para que seus metodos fiquem visiveis
include '../model/ClienteModel.php';

class ClienteController
{
    public static function index()
    {
        $clienteModel = new ClienteModel();

        $alunos = $clienteModel::selectAll();

        while ($objAluno = $alunos->fetchObject()) {

            echo "<tr>";
            echo "<td>" . $objAluno->id . "</td>";
            echo "<td>" . $objAluno->nome . "</td>";
            echo "</tr>";
        }
    }

    public static function create($dados)
    {
        if (
            $dados['nome'] != "" && $dados['cpf'] != ""
            && $dados['telefone'] != "" && $dados['email'] != ""
            && $dados['municipio_id'] != ""
        ) {

            $createDados = [
                "nome" => $dados['nome'],
                "cpf" => $dados['cpf'],
                "telefone" => $dados['telefone'],
                "email" => $dados['email'],
                "municipio_id" => $dados['municipio_id'],
            ];
            $clienteModel = new ClienteModel();
            $clienteModel::insert($createDados);
            echo "<script>alert('Registro inserido com sucesso!')</script>";

            echo "<script>window.location='../view/ClienteListarView.php'</script>";
        } else {
            echo "<script>alert('Alguns campos não foram informados, tente novamente!')</script>";
        }
    }

    public static function update($dados)
    {
        if (
            $dados['nome'] != "" && $dados['cpf'] != ""
            && $dados['telefone'] != "" && $dados['email'] != ""
            && $dados['municipio_id'] != ""
        ) {

            $updateDados = [
                "id" => $dados['id'],
                "nome" => $dados['nome'],
                "cpf" => $dados['cpf'],
                "telefone" => $dados['telefone'],
                "email" => $dados['email'],
                "municipio_id" => $dados['municipio_id'],
            ];
            $clienteModel = new ClienteModel();
            $clienteModel::update($updateDados);
            echo "<script>alert('Registro alterado com sucesso!')</script>";

            echo "<script>window.location='../view/ClienteListarView.php'</script>";
        } else {
            echo "<script>alert('Alguns campos não foram informados, tente novamente!')</script>";
        }
    }


    public static function remove($id)
    {
        $clienteModel = new ClienteModel();
        $objModel = $clienteModel::find($id);;

        if (empty($objModel)) {
            echo "<script>alert('O ID informado para o aluno não existe!')</script>";
            echo "<script>window.location='ClienteListarView.php'</script>";
        } else {
            $clienteModel::deletar($id);;
            echo "<script>alert('Registro removido com sucesso!')</script>";
            echo "<script>window.location='ClienteListarView.php'</script>";
        }
    }

}
