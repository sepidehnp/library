<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('home.css')

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

            <div class="col-lg-12">

            </div>

        </div>

    </div>

</div>
</body>
</html>
