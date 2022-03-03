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
            <div class="title">
                <h1>Pokemon Properties</h1>
            </div>
            <div class="content container">
                <div class="row">
                    <span class="prop">ID:</span>
                    <span class="val">{{$pokemon->id}}</span>
                </div>
                <div class="row">
                    <span class="prop">Identifier:</span>
                    <span class="val">{{$pokemon->identifier}}</span>
                </div>
                <div class="row">
                    <span class="prop">Species ID:</span>
                    <span class="val">{{$pokemon->species_id}}</span>
                </div>
                <div class="row">
                    <span class="prop">Height:</span>
                    <span class="val">{{$pokemon->height}}</span>
                </div>
                <div class="row">
                    <span class="prop">Weight:</span>
                    <span class="val">{{$pokemon->weight}}</span>
                </div>
                <div class="row">
                    <span class="prop">Base Experience:</span>
                    <span class="val">{{$pokemon->base_experience}}</span>
                </div>
                <div class="row">
                    <span class="prop">Order:</span>
                    <span class="val">{{$pokemon->order}}</span>
                </div>
                <div class="row">
                    <span class="prop">Default:</span>
                    <span class="val">{{$pokemon->is_default == 1?'True':'False'}}</span>
                </div>
                <div class="row">
                    <a class="standard-button" href="/pokemon/edit?id={{$pokemon->id}}">Edit</a>
                </div>
            </div>
        </div>
    </body>
</html>

