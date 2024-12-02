<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Website inside Laravel</title>
    <link id="theme-style" rel="stylesheet" href="<?php echo e(asset('css/light.css')); ?>">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <a href="<?php echo e(route('home')); ?>">Home</a>
            <a href="<?php echo e(route('about')); ?>">About</a>
            <a href="<?php echo e(route('contact')); ?>">Contact</a>
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
        <section class="contact">
            <h2>Get in Touch</h2>
            <form action="<?php echo e(route('contact.submit')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Send Message</button>
            </form>
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
            themeStyle.href = savedTheme === 'light' ? "<?php echo e(asset('css/ligth.css')); ?>" : "<?php echo e(asset('css/dark.css')); ?>";
            document.getElementById('theme-selector').value = savedTheme;
        }
    }

    document.getElementById('theme-selector').addEventListener('change', function() {
        const themeStyle = document.getElementById('theme-style');
    
        if (this.value === 'light') {
            themeStyle.href = "<?php echo e(asset('css/light.css')); ?>";
            localStorage.setItem('theme', 'light');
        } else {
            themeStyle.href = "<?php echo e(asset('css/dark.css')); ?>";
            localStorage.setItem('theme', 'dark');
        }
    });

    applySavedTheme();
    </script>
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/komputasi-web-zahid/resources/views/contact.blade.php ENDPATH**/ ?>