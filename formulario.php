<?php

if(isset($_POST['submit']))
{
    //print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('Email: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('Telefone: ' . $_POST['telefone']);
    //print_r('<br>');
    //print_r('Sexo: ' . $_POST['genero']);
    //print_r('<br>');
    //print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
    //print_r('<br>');
    //print_r('Cidade: ' . $_POST['cidade']);
    //print_r('<br>');
    //print_r('Estado: ' . $_POST['estado']);
    //print_r('<br>');
    //print_r('Endereço: ' . $_POST['endereco']);

    //Inclusão
    include_once('config.php');
   

    // Verifique se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se todos os campos estão definidos
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
    $data_nasc = isset($_POST['data_nasc']) ? $_POST['data_nasc'] : '';
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
    $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';
    
    if (empty($data_nasc)) {
        echo "O campo data de nascimento é obrigatório.";
    } else {
        // Preparar a declaração SQL para evitar SQL injection
        $sql = "INSERT INTO clientes(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco)
    VALUES('$nome', '$email', '$telefone', '$sexo','$data_nasc', '$cidade', '$estado', '$endereco')";
    $resultado = mysqli_query($conexao, $sql);
    

   

    
    }
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formuláio | GN</title>

    <style>

      

        body{

            font-family: Arial, helvetica, sans-serif;
           background-image: linear-gradient(to right, rgb(20, 147, 220),  rgb(17, 54, 71));
        }
    
        .box{
            color: white;
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 5px;
            width: 25%;
        }
        fieldset{
            border: 3px solid dodgerblue;
         }

         legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 10px;
            
         }

         .inputBox {
            position: relative;
            margin-bottom: 10px;
            }


         .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
         }

         .labelInput{
            position: absolute;
            top: 0px; 
           left: 0px;
            pointer-events:  none;
           transition: .5s;
            
            
         }

         
                .inputBox input:focus ~label,
                .inputUser:valid ~label{

                top: -20px;
                font-size: 12px;
                color: #007bff;

         }
         #data_nasc{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 20px;
         }

         #submit{
            background-image: linear-gradient(to right, rgb(20, 147, 220),  rgb(17, 54, 71));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
         }

         #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172),  rgb(80, 19, 195));
         }
    </style>


</head>
<body>
<div class="box">

<form action="formulario.php" method="POST">

        <fieldset>
            <legend>Formulário de Clientes</legend>
             <div class="inputBox">
                
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome Completo</label>
                
            </div> 
            <br>
            <div class="inputBox">
                
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>

            </div>
            <br>
            <div class="inputBox">
                
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br>
            <p>Sexo</p>
                <div>
                    <input type="radio" name="genero" id="feminino" value="feminino">
                    <label for="feminino">Feminino</label>
                </div>
                <br>
                <div>
                    <input type="radio" name="genero" id="masculino" value="masculino">
                    <label for="masculino">Masculino</label>
                </div>
                <br>
              <div>
                    <input type="radio" name="genero" id="outro" value="outro">
                    <label for="outro">Outros</label>
              </div>
              <br>
              <div class="inputBox">
                <label for="data_nasc"><b>Data Nascimento</b></label>
                    <input type="date" name="data_nasc" id="data_nasc" required>
                    </div>
              <br>
              <br>
              <div class="inputBox">
                
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br>
           
            <div class="inputBox">
                
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            <br>
            <div class="inputBox">
                
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
            </div>
            <br>
            <input type="submit" name="submit" id="submit">
            
        </fieldset>
    </form>
</div>


   
</body>
</html>