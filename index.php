<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SpinShare · Rentals</title>
  <!-- Font Awesome 6 (free) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }

    body {
      background: #0b0b0f;
      color: #f2eee9;
      line-height: 1.5;
      padding: 1.5rem;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .app-wrapper {
      max-width: 1300px;
      width: 100%;
    }

    /* header / nav */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 0 2rem 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
      flex-wrap: wrap;
      gap: 1rem;
    }

    .logo {
      font-size: 1.9rem;
      font-weight: 700;
      letter-spacing: -1px;
      display: flex;
      align-items: center;
      gap: 0.4rem;
    }

    .logo i {
      color: #c9a87c;
      font-size: 2rem;
    }

    .logo span {
      background: linear-gradient(135deg, #f2e4d4, #c9a87c);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .nav-links {
      display: flex;
      gap: 2rem;
      font-weight: 500;
    }

    .nav-links a {
      color: #ddd6cf;
      text-decoration: none;
      font-size: 1rem;
      transition: 0.2s;
      border-bottom: 1px solid transparent;
      padding-bottom: 4px;
    }

    .nav-links a:hover,
    .nav-links a.active {
      color: #c9a87c;
      border-bottom-color: #c9a87c;
    }

    .user-badge {
      display: flex;
      align-items: center;
      gap: 1rem;
      background: #1b1b22;
      padding: 0.4rem 1rem 0.4rem 1.2rem;
      border-radius: 40px;
      border: 1px solid #2c2c35;
      font-size: 0.9rem;
    }

    .user-badge i {
      color: #c9a87c;
    }

    .user-badge .avatar {
      width: 32px;
      height: 32px;
      background: #c9a87c;
      color: #0b0b0f;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
    }

    /* main layout */
    .main-grid {
      display: grid;
      grid-template-columns: 1fr 380px;
      gap: 2rem;
      margin-top: 2rem;
    }

    @media (max-width: 900px) {
      .main-grid {
        grid-template-columns: 1fr;
      }
    }

    /* hero / featured */
    .hero {
      background: linear-gradient(145deg, #15151d, #0e0e14);
      border-radius: 28px;
      padding: 2rem 2rem 2rem 2.5rem;
      border: 1px solid #2a2a33;
      position: relative;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      min-height: 300px;
    }

    .hero::after {
      content: "♪";
      position: absolute;
      bottom: -40px;
      right: -20px;
      font-size: 15rem;
      color: rgba(201, 168, 124, 0.03);
      font-weight: 700;
      pointer-events: none;
      transform: rotate(15deg);
    }

    .hero-badge {
      display: inline-block;
      background: rgba(201, 168, 124, 0.15);
      color: #c9a87c;
      padding: 0.3rem 1rem;
      border-radius: 40px;
      font-size: 0.8rem;
      font-weight: 600;
      letter-spacing: 0.5px;
      border: 1px solid rgba(201, 168, 124, 0.3);
      margin-bottom: 1rem;
      width: fit-content;
    }

    .hero h1 {
      font-size: 2.8rem;
      font-weight: 700;
      line-height: 1.2;
      letter-spacing: -1px;
      max-width: 600px;
      margin-bottom: 0.75rem;
    }

    .hero h1 i {
      color: #c9a87c;
      font-style: normal;
    }

    .hero p {
      color: #b9b1a8;
      max-width: 500px;
      margin-bottom: 1.5rem;
      font-size: 1.05rem;
    }

    .cta-group {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .btn {
      padding: 0.8rem 1.8rem;
      border-radius: 60px;
      font-weight: 600;
      font-size: 0.95rem;
      border: none;
      cursor: pointer;
      transition: 0.2s;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
    }

    .btn-primary {
      background: #c9a87c;
      color: #0b0b0f;
    }

    .btn-primary:hover {
      background: #dbbd97;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(201, 168, 124, 0.2);
    }

    .btn-outline {
      background: transparent;
      border: 1.5px solid #3e3e4a;
      color: #f2eee9;
    }

    .btn-outline:hover {
      border-color: #c9a87c;
      color: #c9a87c;
      background: rgba(201, 168, 124, 0.05);
    }

    /* auth section */
    .auth-card {
      background: #13131a;
      border-radius: 24px;
      padding: 1.8rem;
      border: 1px solid #2a2a33;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
    }

    .auth-tabs {
      display: flex;
      gap: 0.5rem;
      background: #1c1c24;
      padding: 0.3rem;
      border-radius: 40px;
      margin-bottom: 1.8rem;
    }

    .auth-tab {
      flex: 1;
      text-align: center;
      padding: 0.6rem 0.2rem;
      border-radius: 30px;
      font-weight: 600;
      font-size: 0.95rem;
      cursor: pointer;
      transition: 0.15s;
      color: #a09a93;
      background: transparent;
      border: none;
    }

    .auth-tab.active {
      background: #2a2a34;
      color: #f2eee9;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

    .auth-form {
      display: block;
    }

    .auth-form.hidden {
      display: none;
    }

    .input-group {
      margin-bottom: 1.2rem;
      position: relative;
    }

    .input-group i {
      position: absolute;
      left: 18px;
      top: 50%;
      transform: translateY(-50%);
      color: #6b6b78;
      font-size: 1rem;
      pointer-events: none;
    }

    .input-group input {
      width: 100%;
      background: #1b1b23;
      border: 1px solid #2e2e3a;
      padding: 1rem 1rem 1rem 3rem;
      border-radius: 60px;
      font-size: 0.95rem;
      color: #f2eee9;
      outline: none;
      transition: 0.2s;
    }

    .input-group input:focus {
      border-color: #c9a87c;
      background: #1e1e28;
    }

    .input-group input::placeholder {
      color: #5f5f6b;
    }

    .auth-btn {
      width: 100%;
      padding: 1rem;
      border-radius: 60px;
      background: #c9a87c;
      color: #0b0b0f;
      font-weight: 700;
      font-size: 1rem;
      border: none;
      cursor: pointer;
      transition: 0.2s;
      margin-top: 0.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.6rem;
    }

    .auth-btn:hover {
      background: #dbbd97;
      transform: scale(1.01);
    }

    .auth-footer {
      text-align: center;
      margin-top: 1.2rem;
      font-size: 0.9rem;
      color: #8d8d9b;
    }

    .auth-footer a {
      color: #c9a87c;
      text-decoration: none;
      font-weight: 500;
    }

    .auth-footer a:hover {
      text-decoration: underline;
    }

    .demo-note {
      font-size: 0.8rem;
      background: #1c1c24;
      padding: 0.6rem 1rem;
      border-radius: 40px;
      margin-top: 1rem;
      color: #a09a93;
      text-align: center;
      border: 1px dashed #3e3e4a;
    }

    /* dashboard preview */
    .dashboard-preview {
      margin-top: 2.5rem;
    }

    .section-title {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    .section-title i {
      color: #c9a87c;
    }

    .vinyl-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 1.5rem;
    }

    .vinyl-card {
      background: #13131a;
      border-radius: 20px;
      padding: 1.2rem 1rem 1.2rem 1rem;
      border: 1px solid #25252f;
      transition: 0.2s;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .vinyl-card:hover {
      transform: translateY(-5px);
      border-color: #c9a87c;
      box-shadow: 0 15px 25px -10px rgba(0, 0, 0, 0.7);
    }

    .vinyl-disc {
      width: 100px;
      height: 100px;
      background: radial-gradient(circle at 30% 30%, #3a3a48, #15151c);
      border-radius: 50%;
      margin-bottom: 1rem;
      position: relative;
      box-shadow: 0 10px 15px -5px #00000080;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 3px solid #2a2a34;
    }

    .vinyl-disc::after {
      content: "";
      width: 20px;
      height: 20px;
      background: #c9a87c;
      border-radius: 50%;
      border: 3px solid #1b1b23;
    }

    .vinyl-card h4 {
      font-size: 1rem;
      font-weight: 600;
      margin-bottom: 0.25rem;
      color: #f2eee9;
    }

    .vinyl-card .artist {
      font-size: 0.85rem;
      color: #a09a93;
      margin-bottom: 0.5rem;
    }

    .vinyl-card .tag {
      font-size: 0.7rem;
      background: #23232e;
      padding: 0.2rem 0.8rem;
      border-radius: 30px;
      color: #c9a87c;
      font-weight: 500;
      letter-spacing: 0.3px;
    }

    .interactive-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 2.5rem;
      background: #13131a;
      padding: 1rem 1.5rem;
      border-radius: 60px;
      border: 1px solid #25252f;
    }

    .filter-buttons {
      display: flex;
      gap: 0.8rem;
      flex-wrap: wrap;
    }

    .filter-btn {
      background: transparent;
      border: 1px solid #2e2e3a;
      color: #b9b1a8;
      padding: 0.5rem 1.2rem;
      border-radius: 40px;
      font-size: 0.85rem;
      font-weight: 500;
      cursor: pointer;
      transition: 0.2s;
    }

    .filter-btn:hover,
    .filter-btn.active {
      background: #c9a87c;
      color: #0b0b0f;
      border-color: #c9a87c;
    }

    .search-box {
      display: flex;
      align-items: center;
      background: #1b1b23;
      border-radius: 40px;
      padding: 0.3rem 0.3rem 0.3rem 1.2rem;
      border: 1px solid #2e2e3a;
    }

    .search-box input {
      background: transparent;
      border: none;
      padding: 0.5rem 0.5rem;
      color: #f2eee9;
      outline: none;
      font-size: 0.9rem;
      width: 140px;
    }

    .search-box input::placeholder {
      color: #5f5f6b;
    }

    .search-box button {
      background: #c9a87c;
      border: none;
      border-radius: 40px;
      padding: 0.5rem 1rem;
      cursor: pointer;
      color: #0b0b0f;
      font-weight: 600;
    }

    /* testimonials / moon vibe */
    .moon-quote {
      margin-top: 3rem;
      padding: 2rem 2rem;
      background: #0f0f16;
      border-radius: 28px;
      border-left: 4px solid #c9a87c;
      font-style: italic;
      color: #cfc7bd;
    }

    .moon-quote i {
      color: #c9a87c;
      margin-right: 0.5rem;
    }

    .footer-note {
      margin-top: 2.5rem;
      font-size: 0.8rem;
      color: #4f4f5c;
      text-align: center;
      border-top: 1px solid #1e1e28;
      padding-top: 1.5rem;
    }

    .hidden {
      display: none !important;
    }

    .toast-message {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background: #c9a87c;
      color: #0b0b0f;
      padding: 1rem 2rem;
      border-radius: 50px;
      font-weight: 600;
      box-shadow: 0 10px 25px #00000060;
      z-index: 999;
      animation: fadeIn 0.3s;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
<div class="app-wrapper">

  <!-- NAVBAR -->
  <nav class="navbar">
    <div class="logo">
      <i class="fas fa-moon"></i>
      <span>SpinShare</span>
    </div>
    <div class="nav-links">
      <a href="#" class="active">Rentals</a>
      <a href="#">Shop</a>
      <a href="#">Club</a>
      <a href="#">About</a>
    </div>
    <div class="user-badge" id="userBadge">
      <i class="fas fa-user-circle"></i>
      <span id="userNameDisplay">Guest</span>
      <div class="avatar" id="avatarInitial">G</div>
    </div>
  </nav>

  <!-- MAIN GRID: hero + auth -->
  <div class="main-grid">
    <!-- LEFT: hero -->
    <div class="hero">
      <div>
        <div class="hero-badge">
          <i class="fas fa-infinity"></i> RENT AS LONG AS YOU WANT
        </div>
        <h1>
          Spin a <i>vinyl</i><br> keep it for months.
        </h1>
        <p>
          Deluxe mixtape records, curated artwork, and unlimited rental time. 
          Join the club that feels like home.
        </p>
        <div class="cta-group">
          <button class="btn btn-primary" id="exploreBtn">
            <i class="fas fa-compact-disc"></i> Browse records
          </button>
          <button class="btn btn-outline" id="randomBtn">
            <i class="fas fa-shuffle"></i> Surprise me
          </button>
        </div>
      </div>
    </div>

    <!-- RIGHT: auth card -->
    <div class="auth-card">
      <div class="auth-tabs">
        <button class="auth-tab active" data-tab="login">Log in</button>
        <button class="auth-tab" data-tab="signup">Sign up</button>
      </div>

      <!-- LOGIN FORM -->
      <form id="loginForm" class="auth-form">
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" id="loginEmail" placeholder="Email address" value="demo@vinylmoon.co" required>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" id="loginPassword" placeholder="Password" value="password" required>
        </div>
        <button type="submit" class="auth-btn"><i class="fas fa-arrow-right-to-bracket"></i> Log in</button>
        <div class="auth-footer">
          <a href="#">Forgot password?</a>
        </div>
        <div class="demo-note">
          <i class="fas fa-key"></i> Demo: demo@vinylmoon.co / password
        </div>
      </form>

      <!-- SIGNUP FORM (hidden by default) -->
      <form id="signupForm" class="auth-form hidden">
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" id="signupName" placeholder="Full name" value="Alex Rivera" required>
        </div>
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" id="signupEmail" placeholder="Email address" value="alex@example.com" required>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" id="signupPassword" placeholder="Create password" value="secret123" required>
        </div>
        <button type="submit" class="auth-btn"><i class="fas fa-user-plus"></i> Sign up</button>
        <div class="auth-footer">
          Already a member? <a href="#" id="switchToLogin">Log in</a>
        </div>
        <div class="demo-note">
          <i class="fas fa-gift"></i> Sign up & get 1 month free rental
        </div>
      </form>
    </div>
  </div>

  <!-- DASHBOARD / VINYL GRID -->
  <div class="dashboard-preview">
    <div class="section-title">
      <i class="fas fa-record-vinyl"></i> 
      <span id="dashboardTitle">Your rental shelf</span>
      <span style="margin-left: auto; font-size:0.9rem; color:#8d8d9b;" id="greetingMessage"></span>
    </div>

    <!-- interactive filter bar -->
    <div class="interactive-bar">
      <div class="filter-buttons">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="indie">Indie</button>
        <button class="filter-btn" data-filter="electronic">Electronic</button>
        <button class="filter-btn" data-filter="folk">Folk</button>
        <button class="filter-btn" data-filter="hiphop">Hip-Hop</button>
      </div>
      <div class="search-box">
        <input type="text" id="searchInput" placeholder="Search records...">
        <button id="searchBtn"><i class="fas fa-search"></i></button>
      </div>
    </div>

    <div class="vinyl-grid" id="vinylGrid">
      <!-- dynamic records injected via JS, but we'll seed with static + JS for interactivity -->
    </div>
  </div>

  <!-- testimonial / moon quote -->
  <div class="moon-quote">
    <i class="fas fa-quote-left"></i>
    Having been a Vinyl Moon member for over 2.5 years now, I can honestly say it’s as fresh and as exciting as ever.
    <div style="margin-top:0.5rem; font-style:normal; font-weight:500; color:#c9a87c;">— Russell G., verified member</div>
  </div>

  <div class="footer-note">
    <i class="fas fa-moon"></i> SpinShare · rent as long as you want · cancel anytime
  </div>
</div>

<script>
  (function() {
    // ---------- MOCK DATABASE ----------
    const vinyls = [
      { id: 1, title: "Moonlit Echoes", artist: "Lunar Tides", genre: "indie", color: "#4f3b5e", tag: "Vol. 12" },
      { id: 2, title: "Neon Drift", artist: "Synthetix", genre: "electronic", color: "#2d5a6b", tag: "Vol. 8" },
      { id: 3, title: "Forest Hum", artist: "Elderwood", genre: "folk", color: "#3b5e3b", tag: "Vol. 5" },
      { id: 4, title: "Concrete Verses", artist: "Metro Poets", genre: "hiphop", color: "#6b4a3a", tag: "Vol. 17" },
      { id: 5, title: "Velvet Sky", artist: "Aurora Lane", genre: "indie", color: "#5e3b4f", tag: "Vol. 21" },
      { id: 6, title: "Circuit Bloom", artist: "Neon Pulse", genre: "electronic", color: "#2a4a7a", tag: "Vol. 9" },
      { id: 7, title: "Harvest Moon", artist: "The Porchlights", genre: "folk", color: "#7a5e3a", tag: "Vol. 3" },
      { id: 8, title: "Rhymes & Rivers", artist: "Flow State", genre: "hiphop", color: "#4a3a6b", tag: "Vol. 19" },
    ];

    // current user state
    let currentUser = null; // null = guest, object = logged in

    // DOM elements
    const vinylGrid = document.getElementById('vinylGrid');
    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');
    const authTabs = document.querySelectorAll('.auth-tab');
    const userNameDisplay = document.getElementById('userNameDisplay');
    const avatarInitial = document.getElementById('avatarInitial');
    const dashboardTitle = document.getElementById('dashboardTitle');
    const greetingMessage = document.getElementById('greetingMessage');
    const filterBtns = document.querySelectorAll('.filter-btn');
    const searchInput = document.getElementById('searchInput');
    const searchBtn = document.getElementById('searchBtn');
    const switchToLogin = document.getElementById('switchToLogin');
    const exploreBtn = document.getElementById('exploreBtn');
    const randomBtn = document.getElementById('randomBtn');

    // toast helper
    function showToast(msg) {
      const toast = document.createElement('div');
      toast.className = 'toast-message';
      toast.innerHTML = `<i class="fas fa-check-circle"></i> ${msg}`;
      document.body.appendChild(toast);
      setTimeout(() => toast.remove(), 2500);
    }

    // ---------- RENDER VINYLS (with filter + search) ----------
    function renderVinyls(filterGenre = 'all', searchTerm = '') {
      let filtered = vinyls;

      if (filterGenre !== 'all') {
        filtered = filtered.filter(v => v.genre === filterGenre);
      }

      if (searchTerm.trim() !== '') {
        const term = searchTerm.trim().toLowerCase();
        filtered = filtered.filter(v => 
          v.title.toLowerCase().includes(term) || 
          v.artist.toLowerCase().includes(term)
        );
      }

      if (filtered.length === 0) {
        vinylGrid.innerHTML = `<div style="grid-column:1/-1; text-align:center; padding:3rem; color:#8d8d9b;">
          <i class="fas fa-record-vinyl" style="font-size:2.5rem; margin-bottom:1rem; opacity:0.5;"></i>
          <p>No records match your search.</p>
        </div>`;
        return;
      }

      vinylGrid.innerHTML = filtered.map(v => `
        <div class="vinyl-card" data-id="${v.id}" data-genre="${v.genre}" title="Rent for as long as you want">
          <div class="vinyl-disc" style="background: radial-gradient(circle at 30% 30%, ${v.color}, #15151c);"></div>
          <h4>${v.title}</h4>
          <div class="artist">${v.artist}</div>
          <span class="tag">${v.tag}</span>
        </div>
      `).join('');

      // attach click listeners to cards
      document.querySelectorAll('.vinyl-card').forEach(card => {
        card.addEventListener('click', function() {
          const id = parseInt(this.dataset.id);
          const record = vinyls.find(v => v.id === id);
          if (record) {
            if (!currentUser) {
              showToast('Please log in to rent this record');
            } else {
              showToast(`"${record.title}" added to your rental shelf!`);
            }
          }
        });
      });
    }

    // ---------- UPDATE UI BASED ON USER ----------
    function updateUserUI() {
      if (currentUser) {
        userNameDisplay.textContent = currentUser.name;
        avatarInitial.textContent = currentUser.name.charAt(0).toUpperCase();
        dashboardTitle.textContent = `${currentUser.name}'s rental shelf`;
        greetingMessage.textContent = '✨ unlimited rentals · keep as long as you want';
      } else {
        userNameDisplay.textContent = 'Guest';
        avatarInitial.textContent = 'G';
        dashboardTitle.textContent = 'Your rental shelf (guest)';
        greetingMessage.textContent = '';
      }
    }

    // ---------- LOGIN / SIGNUP HANDLERS ----------
    // tabs switching
    authTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        authTabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        if (tab.dataset.tab === 'login') {
          loginForm.classList.remove('hidden');
          signupForm.classList.add('hidden');
        } else {
          loginForm.classList.add('hidden');
          signupForm.classList.remove('hidden');
        }
      });
    });

    // switch link from signup to login
    switchToLogin.addEventListener('click', (e) => {
      e.preventDefault();
      document.querySelector('.auth-tab[data-tab="login"]').click();
    });

    // LOGIN submit
    loginForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const email = document.getElementById('loginEmail').value.trim();
      const password = document.getElementById('loginPassword').value.trim();

      // demo auth: any email + password 'password' OR the demo credentials
      if ((email === 'demo@vinylmoon.co' && password === 'password') || (email && password.length >= 3)) {
        // set user
        let name = 'Moonlighter';
        if (email === 'demo@vinylmoon.co') name = 'Demo User';
        else {
          // use part before @ as name
          name = email.split('@')[0];
          name = name.charAt(0).toUpperCase() + name.slice(1);
        }
        currentUser = { name: name, email: email };
        updateUserUI();
        renderVinyls(); // refresh (doesn't change display but shows greeting)
        showToast(`Welcome back, ${name}!`);
        // clear password field for security
        document.getElementById('loginPassword').value = '';
      } else {
        showToast('Invalid credentials. Try demo@vinylmoon.co / password');
      }
    });

    // SIGNUP submit
    signupForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('signupName').value.trim();
      const email = document.getElementById('signupEmail').value.trim();
      const password = document.getElementById('signupPassword').value.trim();

      if (!name || !email || password.length < 3) {
        showToast('Please fill all fields (password min 3 chars)');
        return;
      }

      // register user (demo)
      currentUser = { name: name, email: email };
      updateUserUI();
      renderVinyls();
      showToast(`Welcome to VinylMoon, ${name}! You can now rent vinyls.`);
      // switch to login tab visually (optional)
      document.querySelector('.auth-tab[data-tab="login"]').click();
      // prefill login email for convenience
      document.getElementById('loginEmail').value = email;
      document.getElementById('loginPassword').value = '';
    });

    // ---------- FILTER + SEARCH ----------
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filter = btn.dataset.filter;
        renderVinyls(filter, searchInput.value);
      });
    });

    function performSearch() {
      const activeFilter = document.querySelector('.filter-btn.active')?.dataset.filter || 'all';
      renderVinyls(activeFilter, searchInput.value);
    }

    searchBtn.addEventListener('click', performSearch);
    searchInput.addEventListener('keyup', (e) => {
      if (e.key === 'Enter') performSearch();
    });

    // explore button scrolls to grid
    exploreBtn.addEventListener('click', () => {
      document.querySelector('.dashboard-preview').scrollIntoView({ behavior: 'smooth', block: 'start' });
    });

    // random button
    randomBtn.addEventListener('click', () => {
      const randomIndex = Math.floor(Math.random() * vinyls.length);
      const rec = vinyls[randomIndex];
      if (!currentUser) {
        showToast(`🎲 "${rec.title}" by ${rec.artist} — log in to rent!`);
      } else {
        showToast(`🎲 Random pick: "${rec.title}" by ${rec.artist} — added to shelf!`);
      }
      // highlight in grid (simple visual feedback)
      document.querySelectorAll('.vinyl-card').forEach(c => {
        if (parseInt(c.dataset.id) === rec.id) {
          c.style.transition = '0.2s';
          c.style.borderColor = '#c9a87c';
          c.style.transform = 'scale(1.02)';
          setTimeout(() => {
            c.style.borderColor = '#25252f';
            c.style.transform = 'scale(1)';
          }, 600);
        }
      });
    });

    // initial render (as guest)
    renderVinyls('all', '');
    updateUserUI();

    // extra: provide a persistent login for demo user? but fine.
    // also handle if user clicks "log in" while already logged (optional)
  })();
</script>
</body>
</html>