<!doctype html>
<html lang="en">
  <head>
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Click Load</title>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


    <div class="container mt-5">

        <h1>Laravel Click Load!</h1>

        <div id="data-wrapper">
            <div class="row">
                @include('data')
            </div>
        </div>

        <div class="row text-center" style="padding: 20px;">
            <button class="btn btn-success load-more-data">Load More Data...</button>
        </div>

        <div class="auto-load text-center" style="display: none;">
          <div class="d-flex justify-content-center">
            <div class="spinner-border" role="status">
              <span>Loading...</span>
            </div>
          </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
      var ENDPOINT = "{{ route('posts.index')}}";
      var page = 1;

      $(".load-more-data").click(function(){
        page++;
        LoadMore(page);
      });

      function LoadMore(page){
        // alert(page);

        $.ajax({
          url: ENDPOINT + "?page=" + page,
          datatype: "html",
          type: "get",
          beforeSend: function(){
            $('.auto-load').show();
          }
        })
        .done(function (response) {
          console.log(response);
        })
        .fail(function (jqXHR, ajaxOptions, thrownError){
          console.log('Server error occured');
        })

      }
    </script>

  </body>
</html>