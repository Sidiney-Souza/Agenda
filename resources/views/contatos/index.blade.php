@extends('contatos/layort')
        
@section('titulo', "lista dos produtos")

    @section('contatos')  
        <h1>All contacts</h1>
        <br><a href="{{route('contatos.create')}}">New contact</a><br><br>
        
        @if(session('msg'))
            {{session('msg')}}<br><br>
        @endif
        
        @foreach($contatos as $contatos)      
          
         Name: {{$contatos->name}},
         Number: {{$contatos->number}}
         <br><br>
        <a href='{{route('contatos.show', ['contatos'=>$contatos])}}'>Mores details</a>
        <a href='{{route('contatos.edit', ['contatos'=>$contatos])}}'>Edit</a>
        <br>
        <form method="post" action="{{route('contatos.destroy', ['contatos'=>contatos])}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar produto"><br>
        </form>
        
        @endforeach
    @endsection

       
        
