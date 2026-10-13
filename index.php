
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>StockFlow | Sign In</title>
  <link rel="stylesheet" href="style.css" />
  <script src="script.js" defer></script>
</head>
<body>
  <main class="login-page">

    <!-- Left branding panel -->
    <section class="brand-panel">
      <a href="#" class="brand">
        <span class="brand-icon">▦</span>
        <span>StockFlow</span>
      </a>

      <div class="brand-content">
        <span class="eyebrow">INVENTORY MADE SIMPLE</span>
        <h1>Know your stock.<br />Own your business.</h1>
        <p>
          Keep track of products, monitor inventory,
          and manage everything from one simple dashboard.
        </p>

        <div class="inventory-card">
          <div class="card-heading">
            <span>Inventory overview</span>
            <span class="live-dot">● Live preview</span>
          </div>

          <div class="stats">
            <div class="stat">
              <span>Total products</span>
              <strong>1,284</strong>
              <small>Across all categories</small>
            </div>
            <div class="stat">
              <span>Stock status</span>
              <strong>96.8%</strong>
              <small>Items available</small>
            </div>
          </div>

          <div class="stock-row">
            <span class="stock-icon">▤</span>
            <div class="stock-info">
              <strong>Warehouse inventory</strong>
              <span>Stock levels looking good</span>
            </div>
            <span class="status">Healthy</span>
          </div>
        </div>
      </div>

      <p class="brand-footer">
        © 2026 StockFlow. All rights reserved.
      </p>
    </section>

    <!-- Right login panel -->
    <section class="form-panel">
      <div class="login-box">
        <div class="mobile-brand">
          <span class="brand-icon">▦</span>
          <span>StockFlow</span>
        </div>

        <div class="welcome">
          <span class="welcome-icon">✦</span>
          <p>WELCOME BACK</p>
        </div>

        <h2>Sign in to your account</h2>
        <p class="subtitle">
          Enter your details to access your inventory.
        </p>

        <form id="loginForm">
          <div class="field">
            <label for="email">Email address</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="you@company.com"
              autocomplete="username"
              required
            />
          </div>

          <div class="field">
            <div class="label-row">
              <label for="password">Password</label>
              <a href="#" id="forgotLink">Forgot password?</a>
            </div>

            <div class="password-wrap">
              <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
                autocomplete="current-password"
                required
                minlength="6"
              />
              <button
                type="button"
                class="toggle-password"
                id="togglePassword"
                aria-label="Show password"
              >Show</button>
            </div>
          </div>

          <label class="remember">
            <input type="checkbox" id="remember" />
            <span>Keep me signed in</span>
          </label>

          <button class="submit-btn" type="submit">
            Sign in <span aria-hidden="true">→</span>
          </button>

          <p id="message" class="message" role="status"
             aria-live="polite"></p>
        </form>

        <div class="divider"><span>SECURE ACCESS</span></div>

        <p class="help-text">
          Need help accessing your account?
          <a href="mailto:support@example.com">Contact support</a>
        </p>
      </div>
    </section>
  </main>
</body>
</html>
