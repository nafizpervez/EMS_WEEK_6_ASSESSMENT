<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h4>Contact via Email</h4>
                
                <form action="{{ route('send.email') }}" method="POST">
                    @csrf
                    <div class="container">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{ old ('name') }}">
                        @error('name') <span class="text-danger">{{ $message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Your Email" value="{{ old ('email') }}">
                        @error('email') <span class="text-danger">{{ $message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Enter Subject" value="{{ old ('subject') }}">
                        @error('subject') <span class="text-danger">{{ $message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea name="message" class="form-control" id="" cols="4" rows="4">{{ old('message') }}</textarea>

                        @error('name') <span class="text-danger">{{ $message}}</span> @enderror
                    </div>

                    <button class="btn btn-outline-primary">Send Mail</button>
                    </div>
                    
                        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>