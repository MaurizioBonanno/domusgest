<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Maurizio Bonanno Consulente Immobiliare</title>

        <!-- awesome -->
        <link href="/css/awesome/css/all.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .container{
                padding-top: 4em;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script
             src="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
             crossorigin="anonymous"></script>
    </head>
    <body>




        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">
                <img src="/images/mauriziobonannofoto.png" style="height: 4em;width:auto">
                Maurizio Bonanno
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Immobili</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Property Finder</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Vendi Casa</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Contattami</a>
                </li>
              </ul>

              <ul  class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <button class="btn btn-small btn-outline-dark">
                        <i class="fas fa-phone-alt"></i>  3205504321
                    </button>
                </li>
              </ul>

              <ul  class="navbar-nav mr-auto">
                @if (Route::has('login'))

                        @auth
                        <!-- Admin Immobili -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Immobili
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/immobili">Lista</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="/add_immobile">Aggiungi</a>
                            </div>
                          </li>
                          <!-- Admin Immobili End -->
                         <!-- Admin Tipologie -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Tipologie
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/tipologie">Lista</a>
                          </li>
                          <!-- Admin Tipologie End -->
                         <!-- Admin Operazioni -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Operazioni
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/operazioni">Lista</a>
                            </div>
                          </li>
                          <!-- Admin Operazioni End -->
                        @else
                        <!--
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                            </li>
                        -->
                        @endauth

                @endif


              </ul>

                                  <!-- Right Side Of Navbar -->
                                  <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                        <!--
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        -->
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>


            </div>
          </nav>

          <!-- fine navbar-->
          <div class="container">
            <form action="/save_photo/{{$id}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                   <input type="hidden" name="_method" value="PATCH">
                <input type="file" name="immagine[]" id="immagine" class="form-group" multiple>
                <input type="submit" class="btn-small btn-primary" value="Aggiungi">

            </form>


          <!-- la tabella con tutte le foto -->



          <!--

          -->
          <hr>
                <form>
                  <input type="hidden" name='_token' id='_token' value="{{csrf_token()}}">
          <table class="table table-striped">
              <thead>
                  <tr class="home">
                      <th>
                          Photo
                      </th>
                      <th>
                          Elimina
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($images as $image)

                  <tr id="id_{{$image->id}}">
                      <td>
                       <li id="{{$image->id}}" style="list-style:none">  <img width="100" height="auto" src="{{asset('/storage/'.$image->path)}}" alt="{{$image->path}}">
                      </td>
                      <td>
                       <li id="{{$image->id}}" style="list-style:none">    <a href="/delete_photo/{{$image->id}}" name="{{$image->id}}" class="btn btn-danger btn-small">Delete</a>
                      </td>
                  </tr>


                 </li>
                @endforeach

                </form>
              </tbody>
            </table>
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
          <script>
          $(function(){
              $('li').on('click','a.btn-danger',function(ele){
                  ele.preventDefault();
                  if(confirm('Davvero vuoi cancellare la foto?')){
                  var url = $(this).attr('href');
                  var id = $(this).attr('name');
                  $.ajax(
                      url,
                      {
                          method: 'DELETE',
                          data: {
                              '_token': $('#_token').val()
                          },
                          complete: function(resp){
                              if(resp.responseText == 1){
                                  $('#'+id).remove();
                                //  $('li#'+id).remove();
                                $('tr#id_'+id).remove();
                              }else{
                                  alert('Errore sul server');
                              }
                          }
                      }
                  )
              }
              });
          });
            $('tbody').sortable({
                  items: "tr:not('.home')",
                  placeholder: "ui-state-hightlight",
                  update: function(){
                    var url = '/reorder_gallery';
                    var ids = $('tbody').sortable("serialize");
                    url+='?'+ids;
                    $.get(url,function(data){
                        console.log(data);
                    });
                    console.log(url+'?'+ids);
                    console.log(ids);
                }
            })
              //Dropzone

          </script>


    </body>
</html>
