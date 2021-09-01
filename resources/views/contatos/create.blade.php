<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Adicionar um novo contato</h1>
        <form method="post" action="{{route('contatos.store')}} " enctype="multipart/form-data" >
            @csrf
            Name:
            <input type="text" name="name"><br>
            Number:
            <input type="text" name="number"><br>
            Adress:
            <input type="text" name="endereço"><br> <!-- Se n deu problema com o "ç" deixa quieto. kkkkkk -->
            E-mail:
            <input type="email" name="email"><br>
            Photo:
            <input type="file" name="foto"><br>
            Birth date:
            <input type="date" name="date_de_nasc"><br>
            <input type="submit" name="Salvar"><br>
        </form>
            
    </body>
</html>
