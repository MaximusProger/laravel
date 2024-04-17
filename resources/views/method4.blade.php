<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>
    <h1>{{$title}}<h1>
    <p>{{$content}}<p\>
    @foreach ($links as $link)
    <br> <a href="{{ $link['href'] }}">{{ $link['text'] }}</a><br> 
@endforeach

<table>
<tr>
<th>N® n\n</th>
<th>ИMЯ</th>
<th>>Фамилия </th>
<th>Cтaтуc</th>
</tr>
@foreach ($users as $key => $user)
@if ($user['banned'])
<tr style="color:red;">
@else
<tr style="color:green;">
@endif
<td>{{ $key+ 1 }}</td>
<td>{{ $user['name'] }}</td> 
<td>{{ $user['surname'] }}</td> 
<td>
@if ($user['banned'])
забанен
@else
активен
@endif
</td>
</tr>
@endforeach
</table>
</body>
</html>