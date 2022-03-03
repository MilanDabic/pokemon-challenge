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
                <h1>Edit Pokemon</h1>
            </div>
            <form action="/pokemon/save" method="post" class="content edit container">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="id" value="{{$pokemon->id}}" />
                <label for="identifier">Identifier</label>
                <input type="text" id="identifier" name="identifier" value="{{$pokemon->identifier}}" />
                <label for="species_id">Species ID</label>
                <input type="number" id="species_id" name="species_id" value="{{$pokemon->species_id}}" />
                <label for="height">Height</label>
                <input type="number" id="height" name="height" value="{{$pokemon->height}}" />
                <label for="weight">Weight</label>
                <input type="number" id="weight" name="weight" value="{{$pokemon->weight}}" />
                <label for="base_experience">Base Experience</label>
                <input type="number" id="base_experience" name="base_experience" value="{{$pokemon->base_experience}}" />
                <label for="order">Order</label>
                <input type="number" id="order" name="order" value="{{$pokemon->order}}" />
                <label for="is_default">Is Default</label>
                <input type="checkbox" id="is_default" name="is_default" @if ($pokemon->is_default == 1) checked @endif}} />
                <button type="submit" class="standard-button">Save</button>
            </form>
        </div>
    </body>
</html>