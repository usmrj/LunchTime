<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p class="mr-1">{{$classes[0]->name;}}</p>
    <p class="mr-1">{{$school->students;}}</p>
    <p class="mr-1">{{$student->allergies;}}</p>

    @livewire('clicker')

</body>
</html>