<!DOCTYPE html>
<html>

<head>
  <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
</head>
<div class="div">
  <div class="div-2">
    <div class="column">
      <img loading="lazy" srcset="<?= base_url('image/image.png')?>" class="img" />
    </div>
    <div class="column-2">
      <div class="div-3">
        <div class="login-container">
          <header class="header">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/88ab69615b8e442d7d0f950b50a30db75c89ce55693f71473c3a009e97ea7972?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&" class="logo" alt="Faculty of Engineering logo" />
            <div class="header-text">
              <h1 class="faculty-name">Fakultas Teknik</h1>
              <p class="university-name">Universitas Lambung Mangkurat</p>
            </div>
          </header>
          <main class="main-content">
            <h2 class="login-title">Login ke Akun Anda</h2>
            <p class="login-subtitle">Masukkan Username dan password untuk login!</p>
            <!-- FORM ACTION -->
            <form action="login/auth" method="post">
              <label for="username" class="input-label">
                <span class="label-text">Username</span>
                <span class="required">*</span>
              </label>
              <input type="text" name="nama" id="username" class="input-field" placeholder="Masukkan Username" required />
              
              <label for="password" class="input-label">
                <span class="label-text">Password</span>
                <span class="required">*</span>
              </label>
              <div class="password-input">
                <input type="password" name="password" id="password" class="password-field" placeholder="Masukkan Password" required />
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0fdfb7d3fb6f929355302a1fe1113a353a2cf6fed7d6b3ea5d0b96ced6cfbb91?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&" class="password-toggle" alt="Toggle password visibility" />
              </div>
              
              <a href="#" class="forgot-password">Lupa password?</a>
              <button type="submit" class="login-button">Login</button>
            </form>
            <div class="signup-section">
              <div class="signup-text">
                <p class="signup-question">Belum Mempunyai Akun?</p>
                <a href="<?= base_url('register') ?>" class="signup-link">Daftar</a>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>
  </div>
</div>

</html>