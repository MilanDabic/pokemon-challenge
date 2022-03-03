
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="{{asset('app.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{Session::get('success') }}</li>
                </ul>
            </div>
        @endif
            <div class="title">
                <h1>Pokemon List</h1>
            </div>
            <div class="content">
                <table>
                    <tr>
                        <th>Identifier</th>
                        <th>Height</th>
                        <th>Weight</th>
                        <th>Base Experience</th>
                    </tr>
                    @foreach($pokemons as $pokemon)
                    <tr>
                        <td>
                            <a href="pokemon/index?id={{$pokemon->id}}">{{$pokemon->identifier}}</a>
                        </td>
                        <td>{{$pokemon->height}}</td>
                        <td>{{$pokemon->weight}}</td>
                        <td>{{$pokemon->base_experience}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="navbar">
                {{$pokemons->links()}}
            </div>
        </div>
    </body>
</html>

