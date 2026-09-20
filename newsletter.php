<?php
// Initialize $errors, $user, and $email.

// On POST:
// 1. Retrieve the raw user and email strings with filter_input().
// 2. Validate the username.
// 3. Observe and test the FILTER_VALIDATE_EMAIL result.
// 4. Redirect only when no errors remain.
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Newsletter</title>
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
</head>

<body class="p-3">
    <?php require __DIR__ . '/includes/navigation.php'; ?>

    <main class="container" style="max-width: 760px;">
        <h1>Newsletter</h1>


        <!-- Display a plain validation-error list here before styling it. -->
        <?php if (!empty($errors)): ?>
            <h2>Please correct the following</h2>
            <ul>
                <?php foreach ($errors as $message): ?>
                    <li><?php echo ($message); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="newsletter.php" method="post" novalidate>
            <div class="mb-3">
                <label class="form-label" for="user">Username</label>

                <!-- Add the sticky value after its purpose is demonstrated. -->
                <input class="form-control" type="text" id="user" name="user">

                <!-- Add validation error response -->

            </div>

            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <!-- Add the sticky value after its purpose is demonstrated. -->
                <input class="form-control" type="text" id="email" name="email">

                <!-- Add validation error response -->



            </div>

            <button class="btn btn-primary" type="submit">Subscribe</button>
        </form>
    </main>
</body>

</html>