<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .card {
            width: 320px;
            height: 400px;
            position: relative;
            background-color: #fff;
            border-bottom: 4px solid #4c6bff;
            overflow: hidden;
            box-shadow: 0px 20px 80px -30px rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            transition: transform 0.5s, box-shadow 0.5s;
            will-change: transform;
        }

        .BG {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .BG svg {
            position: absolute;
            width: 50%;
            left: -20%;
            top: -20%;
            fill: #f4f4f4;
            transition: all 0.8s ease-in-out;
        }

        .content {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 35px;
            color: #1e1e1e;
        }

        .heading {
            font-size: 1.6em;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .sub-heading {
            font-size: 1em;
            font-weight: 500;
            color: #555;
            margin-bottom: 30px;
        }

        input[type="password"] {
            width: 100%;
            border: none;
            border-bottom: 2px solid #c0c7ec;
            outline: none;
            font-size: 1em;
            background-color: transparent;
            padding: 12px 5px;
            margin-bottom: 35px;
            transition: border-color 0.4s;
        }

        input[type="password"]:focus {
            border-color: #4c6bff;
        }

        button {
            margin-top: auto;
            height: 45px;
            width: 100%;
            border: none;
            background: linear-gradient(60deg, #4c6bff, #8196ff);
            color: white;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1.1em;
            cursor: pointer;
            transition: transform 0.4s, box-shadow 0.4s;
        }

        button:hover {
            transform: scale(1.08);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        }

        .card:hover {
            transform: translateY(-20px) rotateX(10deg) rotateY(10deg);
            box-shadow: 0px 30px 120px -20px rgba(0, 0, 0, 0.9);
        }

        .card:hover .BG svg {
            left: 0%;
            top: 0%;
            transform: rotate(720deg) scale(15);
            fill: #dbe3ff;
        }

        .back-link {
            margin-top: 20px;
            font-size: 0.85em;
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }

        .back-link:hover {
            color: #4c6bff;
        }
    </style>

</head>

<body>

    <div class="card">
        <div class="BG">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                <path d="M32 0C14.355 0 0 14.355 0 32s14.355 32 32 32 32-14.355 32-32S49.645 0 32 0zm0 58C17.664 58 6 46.336 6 32S17.664 6 32 6s26 11.664 26 26-11.664 26-26 26z"/>
            </svg>
        </div>

        <div class="content">
            <div class="heading">Reset Password</div>
            <div class="sub-heading">Enter your new password</div>

            <form method="post" action="<?= base_url('auth/Login/save_new_password') ?>" style="width: 100%;">
                <input type="hidden" name="token" value="<?= $token ?>">
                <input type="password" name="password" placeholder="New Password" required>
                <button type="submit">Save Password</button>
            </form>

            <a href="<?= base_url('auth/Login') ?>" class="back-link">← Back to Login</a>
        </div>
    </div>

</body>

</html>
