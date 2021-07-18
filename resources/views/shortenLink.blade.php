<!DOCTYPE html>
<html>

<style>
    .card-color {
        background: rgba(195, 201, 197) !important;
    }

    .container {
        margin-top: 15% !important;
    }

    .style-card {
        background: rgba( 29, 25, 25, 0.25 );
        box-shadow: 0 6px 25px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 5.5px );
        -webkit-backdrop-filter: blur( 5.5px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
    }

</style>

<head>
    <title> Laravel - Create URL shortener </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<body>

    <div class="container style-card">
        <h1 class="text-center"> Laravel - Create URL shortener </h1>

        <div class="card">
            <div class="card-header card-color">
                <form method="POST" action="{{ route('generate.shorten.link.post') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="link" class="form-control" placeholder="Enter URL" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-info" type="submit">Generate Shorten Link</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body card-color">

                @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
                @endif

                <table class="table table-bordered table-sm table-striped table-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Short Link</th>
                            <th>Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($shortLinks as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td><a href="{{ route('shorten.link', $row->code) }}" target="_blank">{{ route('shorten.link', $row->code) }}</a></td>
                            <td>{{ $row->link }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><br>

    </div>

</body>

</html>