<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >
    <title>Listas VueJs</title>
</head>
<body>
    <div class="container-fluid">
        <hr>
        <h1>LARAVEL y VUE - Introducción, uso de AJAX</h1>
        <h6>Crear Proyecto en Laravel (<span class="font-family:monospace;">composer create-project laravel/laravel nombre_proyecto</span>)</h6>
        
        
        <div id="main">
            <div class="row">
                <div class="col-sm-4">
                    <h1>Vuejs - AJAX axios</h1>
                    <ul class="list-group">
                        <li v-for="item in lists" class="list-group-item">
                            @{{ item.name }} <strong>@{{ item.email }}</strong>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 ">
                    <h1>JSON</h1>
                    <pre class="card">
                        @{{ $data | json }}
                    </pre>
                </div>
            </div>
        </div>
        

    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script src="{{ asset('js/app.js') }}" ></script>
        
    </body>
</html>
