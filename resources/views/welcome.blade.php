<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Welcome | Advance Laravel</title>
  <style>
    :root {
      --light-bg: #f1faee;
      --light-text: #1d3557;
      --dark-bg: #1d3557;
      --dark-text: #f1faee;
    }

    * {
      box-sizing: border-box;
      transition: all 0.3s ease;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: var(--dark-bg);
      color: var(--dark-text);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      overflow: hidden;
      text-align: center;
    }

    body.light-mode {
      background-color: var(--light-bg);
      color: var(--light-text);
    }

    h1 {
      font-size: 3.2rem;
      animation: popIn 1.5s ease forwards;
      text-shadow: 2px 2px 12px rgba(0, 0, 0, 0.4);
    }

    @keyframes popIn {
      0% {
        transform: scale(0);
        opacity: 0;
      }
      60% {
        transform: scale(1.2);
        opacity: 1;
      }
      100% {
        transform: scale(1);
      }
    }

    .clock {
      font-size: 2rem;
      padding: 10px 25px;
      border-radius: 8px;
      margin-top: 1rem;
      background-color: rgba(255, 255, 255, 0.15);
      border: 1px solid #ffffff44;
      backdrop-filter: blur(8px);
    }

    .version {
      margin-top: 15px;
      font-size: 1rem;
      opacity: 0.8;
    }

    .toggle {
      position: relative;
      display: inline-block;
      width: 80px;
      height: 40px;
      margin-top: 30px;
    }

    .toggle-input {
      opacity: 0;
      width: 100%;
      height: 100%;
      position: absolute;
      z-index: 2;
      cursor: pointer;
    }

    .toggle-bg {
      width: 100%;
      height: 100%;
      border-radius: 50px;
      background-color: #c0e6f6;
      border: 4px solid #81C0D5;
      transition: all 0.3s ease;
    }

    .toggle-switch {
      position: absolute;
      top: 3px;
      left: 4px;
      width: 32px;
      height: 32px;
      background-color: #FFFDF2;
      border: 4px solid #DEE1C5;
      border-radius: 50%;
      transition: all 0.3s ease;
      z-index: 1;
    }

    .toggle-input:checked ~ .toggle-bg {
      background-color: #484848;
      border-color: #202020;
    }

    .toggle-input:checked ~ .toggle-switch {
      left: 44px;
    }

    .clock-format {
      margin-top: 10px;
      font-size: 0.9rem;
      cursor: pointer;
      padding: 4px 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      background-color: rgba(255, 255, 255, 0.1);
    }
  </style>
</head>
<body>
  <h1>Welcome to Advance Laravel</h1>
  <div class="clock" id="clock">--:--:--</div>
  <div class="clock-format" id="formatToggle">Switch to 12-Hour</div>

  <div class="toggle">
    <input class="toggle-input" id="themeToggle" type="checkbox" />
    <div class="toggle-bg"></div>
    <div class="toggle-switch"></div>
  </div>

  <div class="version">
    Laravel Version: {{ Illuminate\Foundation\Application::VERSION }}
  </div>
  <script>
    const toggle = document.getElementById('themeToggle');
    const savedTheme = localStorage.getItem('theme') === 'light';
    toggle.checked = savedTheme;
    document.body.classList.toggle('light-mode', savedTheme);

    toggle.addEventListener('change', () => {
      document.body.classList.toggle('light-mode', toggle.checked);
      localStorage.setItem('theme', toggle.checked ? 'light' : 'dark');
    });

    const clock = document.getElementById('clock');
    const formatToggle = document.getElementById('formatToggle');
    let use24Hour = localStorage.getItem('clockFormat') !== '12';

    function updateClock() {
      const now = new Date();
      let hrs = now.getHours();
      const min = String(now.getMinutes()).padStart(2, '0');
      const sec = String(now.getSeconds()).padStart(2, '0');

      let ampm = '';
      if (!use24Hour) {
        ampm = hrs >= 12 ? ' PM' : ' AM';
        hrs = hrs % 12 || 12;
      }

      clock.textContent = `${String(hrs).padStart(2, '0')}:${min}:${sec}${ampm}`;
    }

    setInterval(updateClock, 1000);
    updateClock();

    formatToggle.addEventListener('click', () => {
      use24Hour = !use24Hour;
      localStorage.setItem('clockFormat', use24Hour ? '24' : '12');
      formatToggle.textContent = use24Hour ? 'Switch to 12-Hour' : 'Switch to 24-Hour';
      updateClock();
    });

    formatToggle.textContent = use24Hour ? 'Switch to 12-Hour' : 'Switch to 24-Hour';

  </script>
</body>
</html>
