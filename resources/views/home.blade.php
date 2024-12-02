<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website inside Laravel</title>
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/light.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to My Unique Homepage</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
        <div class="theme-selector">
            <label for="theme-selector">Choose a theme:</label>
            <select id="theme-selector">
                <option value="light">Light</option>
                <option value="dark">Dark</option>
            </select>
        </div>
    </header>

    <main>
        <section class="hero">
            <h2>Your Journey Begins Here</h2>
            <p>Explore our website to discover amazing content and features!</p>
            <button onclick="location.href='{{ route('about') }}'">Learn More</button>
        </section>

        <section class="features">
            <h2>Features</h2>
            @foreach($features as $feature)
                <div class="feature-item">
                    <h3>{{ $feature->title }}</h3>
                    <p>{{ $feature->description }}</p>
                </div>
            @endforeach
        </section>

        <section class="latest-posts">
            <h2>Latest Posts</h2>
            @foreach($posts as $post)
                <div class="post-item">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                </div>
            @endforeach
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Zahid Rizky Fakhri. All rights reserved.</p>
    </footer>

    <script>
    function applySavedTheme() {
    const savedTheme = localStorage.getItem('theme');
    const themeStyle = document.getElementById('theme-style');
    
    if (savedTheme) {
            themeStyle.href = savedTheme === 'light' ? "{{ asset('css/ligth.css') }}" : "{{ asset('css/dark.css') }}";
            document.getElementById('theme-selector').value = savedTheme;
        }
    }

    document.getElementById('theme-selector').addEventListener('change', function() {
        const themeStyle = document.getElementById('theme-style');
    
        if (this.value === 'light') {
            themeStyle.href = "{{ asset('css/light.css') }}";
            localStorage.setItem('theme', 'light');
        } else {
            themeStyle.href = "{{ asset('css/dark.css') }}";
            localStorage.setItem('theme', 'dark');
        }
    });

    applySavedTheme();
    </script>
</body>
</html>