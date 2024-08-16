<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="333143061665-hjg4sj9rhm56q4pkg9nqlt1ufbomi4ca.apps.googleusercontent.com">
    <title>Laravel</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<body class="antialiased">
{{--<div id="user"></div>--}}
{{--<br/>--}}
<div id="example"></div>
<div id="signyoutube"></div>

</body>
</html>
<script>
    function onSignIn(googleUser) {
        let profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    }
</script>
