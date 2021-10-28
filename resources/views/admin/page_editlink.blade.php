@extends('admin.page')

@section('body')
    
    <h3>Novo Link</h3>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST">
        @csrf

        <label>
            Status: <br>
            <select name="status">
                <option value="1">Ativado</option>
                <option value="0">Desativado</option>
            </select>
        </label>

        <label>
            Titulo do link: <br>
            <input type="text" name="title">
        </label>

        <label>
            URL do link: <br>
            <input type="text" name="href">
        </label>

        <label>
            Cor do fundo: <br>
            <input type="color" name="op_bg_color" value="#FFFFFF">
        </label>

        <label>
            Titulo do texto: <br>
            <input type="color" name="op_text_color" value="#000000">
        </label>

        <label>
            Tipo de borda: <br>
            <select name="op_border_type">
                <option value="square">Quadrado</option>
                <option value="rounded">Arredondado</option>
            </select>
        </label>

        <label>
            <input type="submit" value="Salvar">
        </label>

    </form>

@endsection