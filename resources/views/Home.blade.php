<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="max-w-4xl mx-auto px-4">
        {{-- <h1>Bienvenido ala pagina principal</h1> --}}

        {{-- inicializacion de componentes --}}
        <x-alert type="info">
            {{-- aqui se imprime contenido ingresado en el componenete --}}
            <x-slot name="title"> {{-- se tiene que ponde un name para poder indentificar en el componente --}}
                {{-- aqui se imprime otro contenido con parametro --}}
                titulo
            </x-slot>

            contenido de la alerta
        </x-alert>

    </div>

</body>

</html>
