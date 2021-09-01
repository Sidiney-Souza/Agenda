<html>
    <head>
        <title>title</title>
    </head>
    <body>

 
        <h1>Seus Contatos</h1>

        @foreach($contatos as $contatos)      
          
         Name: {{$contatos->name}},
         Number: {{$contatos->number}}
         <br><br>

        @endforeach
        
        
    </body>
</html>

       
        
