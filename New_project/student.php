
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            background-image: url(loginback.jpg);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            display: flex;
            max-width: 1000px;
            width: 100%;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .left-section {
            flex: 1;
            padding: 60px 40px;
            background: linear-gradient(135deg, #3498db, #2980b9);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }
        /* RIGHT SECTION - SIGN UP */
        .right-section {
            flex: 1.5;
            padding: 60px 40px;
            background: white;
            display: flex;
            flex-direction: column;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
            font-size: 32px;
            font-weight: 600;
        }
        h2 {
            color: white;
            font-size: 32px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        .welcome-text {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
            margin-bottom: 40px;
            font-size: 16px;
            max-width: 300px;
        }
        .input-group {
            margin-bottom: 25px;
        }
        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
            font-size: 15px;
        }
        .input-group input {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s;
        }
        .input-group input:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
        }
        .divider {
            height: 1px;
            background: #eee;
            margin: 30px 0;
            width: 100%;
        }
        .button {
            width: 100%;
            padding: 16px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }
        .sign-in-btn {
            background: white;
            color: #2980b9;
            border: 2px solid white;
        }
        .sign-up-btn {
            background: linear-gradient(to right, #3498db, #2980b9);
            color: white;
            border: none;
        }
        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .sign-in-btn:hover {
            background: rgba(255, 255, 255, 0.9);
        }
        .sign-up-btn:hover {
            background: linear-gradient(to right, #2980b9, #2573a7);
        }
        .section-title {
            color: #333;
            margin-bottom: 20px;
            font-size: 22px;
            font-weight: 600;
            text-align: center;
        }
        .left-section .section-title {
            color: white;
            margin-top: 40px;
            margin-bottom: 15px;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .left-section, .right-section {
                padding: 40px 30px;
            }
            h1, h2 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <h2>WELCOME BACK!</h2>
            
            
            <button class="button sign-in-btn">SIGN IN</button>
            
            
        </div>
        
        <div class="right-section">
            <h1>Create Account</h1>
            
            
            <div class="input-group">
                <label>Username</label>
                <input type="text" placeholder="Enter your username">
            </div>
            
            <div class="input-group">
                <label>Email</label>
                <input type="email" placeholder="Enter your email">
            </div>
            
            <div class="input-group">
                <label>Password</label>
                <input type="password" placeholder="Enter your password">
            </div>
            
            <div class="divider"></div>
            
            <button class="button sign-up-btn">SIGN UP</button>
        </div>
    </div>
</body>
</html>