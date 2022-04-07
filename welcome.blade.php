<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cat Facts</title>

        <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    </head>
    <body class="antialiased">
        <div class="row align-items-start p-4">
        <div class="col">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="/">
                @csrf
                <h2>Cat Facts</h2>
                <div class="p-2 form-group">
                  <label for="amount">How many facts do you want to see?</label>
                  <input type="text" id="amount" name="amount" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col">

    @isset($facts)
            <div id="app">
                <fact></fact>
            </div>

            <div>
                <ul>
                
                    @foreach ($facts as $fact)

                        <li>Fact: {{ $fact['fact'] }}</li>

                    @endforeach
                

                </ul>
            </div>
            @endisset
        </div>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
