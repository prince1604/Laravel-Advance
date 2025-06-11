<!-- <div>
    <h1>Add details for Send Email</h1>
    <form action="send-Email" method="post">
        <input type="text" name="to" placeholder="Enter Email Address">
        <br><br>
@csrf
        <input type="text" name="subject" placeholder="Enter Email Subject">
        <br><br>
        <textarea name="message" placeholder="Enter Message"></textarea>
        <br><br>
        <button> Send Email</button>
    </form>
</div> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Animated Email Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      height: 100vh;
      background: url('https://images.unsplash.com/photo-1504386106331-3e4e71712b38') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .email-form-container {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-radius: 20px;
      padding: 30px 40px;
      width: 90%;
      max-width: 500px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
      color: #fff;
      transition: transform 0.4s ease;
      animation: popIn 0.5s ease-out forwards;
    }

    @keyframes popIn {
      from {
        transform: scale(0.95);
        opacity: 0;
      }
      to {
        transform: scale(1);
        opacity: 1;
      }
    }

    .email-form-container:hover {
      transform: scale(1.02);
    }

    .email-form-container h1 {
      text-align: center;
      margin-bottom: 25px;
      font-size: 24px;
      color: #fffdd0;
      text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    }

    label {
      margin-top: 15px;
      display: block;
      font-weight: bold;
      color: #ffffff;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 12px 15px;
      margin-top: 8px;
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 10px;
      font-size: 16px;
      background-color: rgba(255, 255, 255, 0.1);
      color: #fff;
      transition: 0.3s ease;
    }

    input:focus,
    textarea:focus {
      outline: none;
      border-color: #ffd700;
      background-color: rgba(255, 255, 255, 0.25);
      box-shadow: 0 0 8px #ffd700;
    }

    textarea {
      resize: vertical;
      min-height: 120px;
    }

    button {
      width: 100%;
      padding: 12px;
      background: linear-gradient(to right, #ffda00, #f0c000);
      color: #222;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      margin-top: 20px;
      cursor: pointer;
      transition: 0.3s ease;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      position: relative;
      overflow: hidden;
    }

    button:hover {
      background: linear-gradient(to right, #fff000, #e6b800);
      transform: scale(1.02);
    }

    /* Glow on key press */
    input:focus::placeholder,
    textarea:focus::placeholder {
      color: black;
    }

    input::placeholder,
    textarea::placeholder {
      color: #ccc;
      transition: color 0.3s ease;
    }

    /* Floating animation for background */
    body::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0; left: 0;
      background: rgba(0, 0, 0, 0.05);
      animation: floatBG 20s linear infinite;
    }

    @keyframes floatBG {
      0% { transform: scale(1) rotate(0deg); }
      50% { transform: scale(1.02) rotate(1deg); }
      100% { transform: scale(1) rotate(0deg); }
    }
  </style>
</head>
<body>

  <div class="email-form-container">
    <h1>Add details for Send Email</h1>
    <form action="send-Email" method="post">
      @csrf
      <label for="to">To:</label>
      <input type="text" id="to" name="to" placeholder="Enter Email Address" required>

      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" placeholder="Enter Email Subject" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" placeholder="Enter Message" required></textarea>

      <button type="submit">Send Email</button>
    </form>
  </div>

</body>
</html>

