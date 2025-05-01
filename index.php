<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dagmawi Negussie</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <link rel="stylesheet" href="styles.css" />
  </head>

  <body>
  <?php include 'header.php'; ?>

    <!-- Hero section -->
    <section id="hero">
      <div class="hero-left">
        <div class="content">
          <h1>Hi, I'm Dagmawi Negussie</h1>
          <h3>A web and App Developer and a code enthusiast</h3>

          <div class="cta">
            <button class="cta-1">View Projects</button>
            <button class="cta-2">Contact Me</button>
          </div>

          <div class="social-icon">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-linkedin-in"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-github"></i>
            <i class="fa-brands fa-telegram"></i>
          </div>
        </div>
      </div>
      <div class="hero-right"></div>
    </section>

    <!-- Add these sections below the Hero section -->
    <section id="services">
      <h2>Services</h2>
      <div class="services-container">
        <div class="service">
          <i class="fa-solid fa-code"></i>
          <h3>Web Development</h3>
          <p>Building responsive and modern websites taiored to your needs.</p>
        </div>
        <div class="service">
          <i class="fa-solid fa-mobile-alt"></i>
          <h3>Mobile Development</h3>
          <p>Creating user-friendly mobile applications for Android and iOS.</p>
        </div>
        <div class="service">
          <i class="fa-solid fa-database"></i>
          <h3>Database Management</h3>
          <p>Designing and managing efficient database systems.</p>
        </div>
      </div>
    </section>
    <section id="about">
      <h2>About Me</h2>
      <div class="about-container">
        <div class="about-text">
          <p>
            Hello! I'm a passionate <strong>Computer Science student</strong> at
            Adama Science and Technology University, driven by a love for
            <strong>software development</strong> and
            <strong>web technologies</strong>. I thrive on solving complex
            problems, writing clean and efficient code, and turning ideas into
            impactful digital solutions.
          </p>
          <p>
            Whether it's collaborating on exciting projects, exploring
            innovative technologies, or building tools that make a difference,
            I'm always eager to learn, grow, and contribute to the tech
            community.
          </p>
          <p>Let's connect and create something extraordinary together!</p>
        </div>

        <div class="about-design">
          <div class="design-item">
            <i class="fa-solid fa-laptop-code"></i>
            <p>Software Development</p>
          </div>
          <div class="design-item">
            <i class="fa-solid fa-lightbulb"></i>
            <p>Creative Problem Solving</p>
          </div>
          <div class="design-item">
            <i class="fa-solid fa-users"></i>
            <p>Team Collaboration</p>
          </div>
          <div class="design-item">
            <i class="fa-solid fa-rocket"></i>
            <p>Innovative Solutions</p>
          </div>
        </div>
      </div>
    </section>
    <section id="projects">
      <h2>Projects</h2>

      <div class="search-container">
        <input
          type="text"
          id="project-search"
          placeholder="Search projects..."
        />
      </div>

      <div class="projects-container">
        <div class="project" data-title="front">
          <img src="front.png" alt="front" />
          <h3>full employee managment system</h3>
          <p>
            It's a project based on employees to track attendance, record and
            manage with'in a company
          </p>
        </div>
        <div class="project" data-title="xco">
          <img src="xco.png" alt="xco" />
          <h3>XCOBO</h3>
          <p>company profile that with responsive and interactive UI</p>
        </div>
        <div class="project" data-title="telegram">
          <img src="tele.png" alt="telegram" />
          <h3>Telegram Bot</h3>
          <p>
            This telegram bot is made with python and enhances user
            interactivity
          </p>
        </div>
        <div class="project" data-title="Project Four">
          <img src="project4.jpg" alt="Project Four" />
          <h3>coming soon</h3>
          <p>a full search enjine based on ethiopian language model</p>
        </div>
      </div>
    </section>
    <section id="contact">
  <h2>Contact Me</h2>
  <?php if (isset($_GET['success'])): ?>
    <script>
      alert("Thank you for your message! I'll get back to you soon.");
    </script>
  <?php elseif (isset($_GET['error'])): ?>
    <?php if ($_GET['error'] == 1): ?>
      <p class="error-message">All fields are required. Please fill out the form completely.</p>
    <?php elseif ($_GET['error'] == 2): ?>
      <p class="error-message">Invalid email address. Please enter a valid email.</p>
    <?php elseif ($_GET['error'] == 3): ?>
      <p class="error-message">Failed to send your message. Please try again later.</p>
    <?php endif; ?>
  <?php endif; ?>
  <div class="contact-container">
    <form action="contact.php" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required />
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
      </div>
      <button type="submit" class="submit-btn">Send Message</button>
    </form>
  </div>
</section>
    <?php include 'footer.php'; ?>
  </body>
  <script src="script.js"></script>
</html>
