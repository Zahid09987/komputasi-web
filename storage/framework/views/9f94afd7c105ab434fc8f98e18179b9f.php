<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website inside Laravel</title>
    <link id="theme-style" rel="stylesheet" href="<?php echo e(asset('css/light.css')); ?>">
</head>
<body>
    <header>
        <h1>Welcome to My Unique Homepage</h1>
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
        <section class="hero">
            <h2>Your Journey Begins Here</h2>
            <p>Explore our website to discover amazing content and features!</p>
            <button onclick="location.href='<?php echo e(route('about')); ?>'">Learn More</button>
        </section>

        <section class="features">
            <h2>Features</h2>
            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="feature-item">
                    <h3><?php echo e($feature->title); ?></h3>
                    <p><?php echo e($feature->description); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>

        <section class="latest-posts">
            <h2>Latest Posts</h2>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="post-item">
                    <h3><?php echo e($post->title); ?></h3>
                    <p><?php echo e($post->content); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</html><?php /**PATH /Applications/MAMP/htdocs/komputasi-web-zahid/resources/views/home.blade.php ENDPATH**/ ?>