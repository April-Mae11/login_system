<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #0a2b3d, #12384c);
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .register-container {
      background: rgba(255, 255, 255, 0.05);
      padding: 40px 50px;
      border-radius: 12px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(10px);
      width: 400px;
      text-align: center;
      color: #fff;
      opacity: 0;
      transform: translateY(50px);
      animation: fadeUp 0.8s ease forwards;
    }

    @keyframes fadeUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h2 {
      color: #00e5ff;
      margin-bottom: 25px;
      font-size: 28px;
    }

    input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: none;
      border-radius: 6px;
      background: rgba(255, 255, 255, 0.1);
      color: white;
      font-size: 15px;
      outline: none;
      transition: all 0.3s ease;
    }

    input:focus {
      background: rgba(255, 255, 255, 0.2);
      box-shadow: 0 0 8px #00e5ff;
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 6px;
      background: linear-gradient(to right, #00e5ff, #00bfff);
      color: white;
      font-size: 17px;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    button:hover {
      transform: scale(1.03);
      box-shadow: 0 0 12px #00e5ff;
    }

    p {
      margin-top: 20px;
      color: #ccc;
    }

    a {
      color: #00e5ff;
      text-decoration: none;
      font-weight: 500;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h2>Register</h2>
    <form action="register_process.php" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Sign Up</button>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
  </div>
</body>
</html>
