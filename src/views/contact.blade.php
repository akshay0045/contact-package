<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us Any Time</h1>
    @if(Session::has('status'))
        {{ Session::get('status') }}
    @endif
    <form action="{{route('contact')}}" method="post">

        @csrf
        <input type="text" name="name" id="name" placeholder="Your name please">
        <input type="email" name="email" id="email" placeholder="Your email Please">
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message please"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
</html>