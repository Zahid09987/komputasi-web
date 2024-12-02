<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Website inside Laravel</title>
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/light.css') }}">
</head>
<body>
    <header>
        <h1>About Us</h1>
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
        <section class="about">
            <h2>Our Mission</h2>
            <p>At My Website, our mission is to provide the best services to our customers. We strive for excellence in everything we do.</p>

            <h2>Our Team</h2>
            <p>We have a dedicated team of professionals who are passionate about their work and committed to delivering high-quality results.</p>

            <h2>Our History</h2>
            <p>Founded in 2023, My Website has grown from a small startup to a leading provider in our industry.</p>
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