<link rel="stylesheet" href="{{ URL::asset('build/css/plugins/fontawesome-6.css') }}">
<link rel="stylesheet" href="{{ URL::asset('build/css/plugins/swiper.css') }}">
<link rel="stylesheet" href="{{ URL::asset('build/css/vendor/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('build/css/style.css') }}">
<script>
    // Check if user has already set a theme preference
    var storedTheme = localStorage.getItem('intellactai');

    // If no preference is found, default to dark mode
    if (!storedTheme) {
        storedTheme = "dark";
        localStorage.setItem('intellactai', storedTheme);
    }

    // Set the theme based on the stored value
    document.documentElement.setAttribute('data-theme', storedTheme);
</script>