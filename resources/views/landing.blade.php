<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebHub - Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .content-container {
            text-align: center;
            max-width: 400px;
            padding: 20px;
            background-color: #111;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.5);
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
            margin-bottom: 20px;
        }
        .logo span {
            color: #f90; /* The orange part */
        }
        h2 {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        p {
            font-size: 0.9rem;
            color: #ccc;
            margin-bottom: 25px;
        }
        .form-control {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            font-size: 1rem;
        }
        a {
            color: #f90;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

    <div class="content-container">
        <div class="logo">Web<span>Hub</span></div>
        <h2>This is a project website</h2>
        <p>This website contains materials that can only be accessed if you meet the required minimum age or if you're above it. Please enter your age below:</p>
        <form action="/validate-age" method="POST">
            @csrf <!-- Laravel CSRF token for form security -->
            <input type="number" name="age" class="form-control" placeholder="Enter your age" required>
            <button type="submit" class="btn btn-warning mt-3 w-100">Submit</button>
        </form>

        <p class="mt-3">Our <a href="#">parental controls page</a> explains how you can easily block access to this site.</p>
    </div>

</body>
</html>
