<!DOCTYPE html>
<html lang="en">

  <head>
  <base href="/public">
   @include('home.css')
   <style type="text/css">
   hr {
   color: white;
   border-style: inset;
   border-width: 1px;
  }
</style>
  </head>

<body>
@include('home.header')

<div class="currently-market">
    <div class="container">
      <div class="row">

        <div class="col-lg-6">
            <div class="section-heading">
                <div class="line-dec">

                </div>
                   <h2><em>Items</em>Currently In The Market</h2>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="filters">
                <ul>
                    <li data-filter="*" class="active"> All Books</li>
                    <li data-filter=".msc" > Popular</li>
                    <li data-filter=".dig" > Latest</li>
                </ul>

            </div>

        </div>

        <div class="col-lg-12 " style="margin-top: 100px;">

            <div class="item">
                <div class="left-image">
                    <img src="book/{{ $data->book_img }}" alt="" style="border-radius: 20px; height:350px; width:250px; min-width: 195px;">
                  </div>

                  <div class="right-content">
                    <h6>{{$data->author_name}}</h6>
                    <span class="author" style="margin-top: 50px;">
                        <img src="author/{{$data->author_img}}" alt="" style="max-width: 50px; height:60px; border-radius: 50%;">
                        <h6>{{$data->author_name}}</h6>
                      </span>
                    <hr >
                    <span class="bid">
                        Current Available<br><strong>{{ $data->quantity }}</strong>
                    </span>
                      <br>
                      <span class="bid">
                        Category : {{ $data->category->cat_title }} <br>
                      </span>
                      <br>

                      <span class="bid">
                        Description : {{ $data->description }}<br>
                      </span>
                  </div>
            </div>



          </div>
        </div>
      </div>
    </div>
  </div>


@include('home.footer')

  </body>
</html>
