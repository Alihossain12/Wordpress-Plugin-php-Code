<!DOCTYPE html>
<html lang="en">
 
  <?php include_once 'GitHub/Wordpress-Plugin-php-Code/Protfoliyo\head.php';?>
  
  <body>
    <!-- Header -->
     <?php include_once 'header.php';?>

    <!-- Floating Navigation -->
  
    <?php include_once 'floating-nav.php';?>


    <!-- Hero Section -->
   <?php include_once 'Hero.php';?>

    <!-- About Section -->
   <?php include_once 'About.php';?>

    <!-- Experience Section -->
    <?php include_once 'Experience.php';?>


    <!-- Skills Section -->
  <?php include_once 'Skills.php';?>

    <!-- Services Section -->
     <?php include 'Services.php';?>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container">
        <h2 class="section-title">Get in Touch</h2>
        <div class="contact-container">
          <div class="card contact-info animate-fade-in">
            <h3 class="text-xl font-semibold mb-6">Contact Information</h3>
            <div class="contact-item">
              <div class="contact-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                  ></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
              </div>
              <a href="mailto:musmanzafar53@gmail.com"
                >mdalihossain32246886@gmail.com</a
              >
            </div>
            <div class="contact-item">
              <div class="contact-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
                  ></path>
                </svg>
              </div>
              <a href="tel:+01732246886">+01732246886</a>
            </div>
            <div class="contact-item">
              <div class="contact-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"
                  ></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
              </div>
              <span>Naogaon, Dhamoirhat</span>
            </div>
          </div>
          <div class="card contact-form animate-fade-in delay-1">
            <form id="contact-form">
              <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" class="form-input" required />
              </div>
              <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-input" required />
              </div>
              <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" id="subject" class="form-input" required />
              </div>
              <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea
                  id="message"
                  class="form-textarea"
                  required
                ></textarea>
              </div>
              <button type="submit" class="btn">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <line x1="22" y1="2" x2="11" y2="13"></line>
                  <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
                Send Message
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <p>&copy; 2025 Ali Hossain. All rights reserved.</p>
      </div>
    </footer>

    <script>
      // Theme Toggle
      const themeToggle = document.getElementById("theme-toggle");
      const sunIcon = document.getElementById("sun-icon");
      const moonIcon = document.getElementById("moon-icon");
      const htmlElement = document.documentElement;

      // Check for saved theme preference or use system preference
      const savedTheme = localStorage.getItem("theme");
      const systemPrefersDark = window.matchMedia(
        "(prefers-color-scheme: dark)"
      ).matches;

      if (savedTheme === "dark" || (!savedTheme && systemPrefersDark)) {
        htmlElement.classList.add("dark");
        sunIcon.style.display = "none";
        moonIcon.style.display = "block";
      }

      themeToggle.addEventListener("click", () => {
        htmlElement.classList.toggle("dark");
        const isDark = htmlElement.classList.contains("dark");

        // Update icons
        sunIcon.style.display = isDark ? "none" : "block";
        moonIcon.style.display = isDark ? "block" : "none";

        // Save preference
        localStorage.setItem("theme", isDark ? "dark" : "light");
      });

      // Floating Navigation
      const sections = document.querySelectorAll("section[id]");
      const navItems = document.querySelectorAll(".floating-nav-item");
      const navLinks = document.querySelectorAll(".nav-link");

      // Smooth scrolling for navigation links
      navItems.forEach((item) => {
        item.addEventListener("click", function (e) {
          e.preventDefault();
          const targetId = this.getAttribute("data-target");
          document
            .getElementById(targetId)
            .scrollIntoView({ behavior: "smooth" });
        });
      });

      navLinks.forEach((link) => {
        link.addEventListener("click", function (e) {
          e.preventDefault();
          const targetId = this.getAttribute("href").substring(1);
          document
            .getElementById(targetId)
            .scrollIntoView({ behavior: "smooth" });
        });
      });

      // Update active navigation item on scroll
      function updateActiveNavItem() {
        let scrollPosition = window.scrollY + 100;

        sections.forEach((section) => {
          const sectionTop = section.offsetTop;
          const sectionHeight = section.offsetHeight;
          const sectionId = section.getAttribute("id");

          if (
            scrollPosition >= sectionTop &&
            scrollPosition < sectionTop + sectionHeight
          ) {
            // Update floating nav
            navItems.forEach((item) => {
              item.classList.remove("active");
              if (item.getAttribute("data-target") === sectionId) {
                item.classList.add("active");
              }
            });

            // Update header nav
            navLinks.forEach((link) => {
              link.classList.remove("active");
              if (link.getAttribute("href") === `#${sectionId}`) {
                link.classList.add("active");
              }
            });
          }
        });
      }

      window.addEventListener("scroll", updateActiveNavItem);
      updateActiveNavItem();

      // Form submission
      const contactForm = document.getElementById("contact-form");
      contactForm.addEventListener("submit", function (e) {
        e.preventDefault();
        // Here you would typically send the form data to your backend
        alert("Thank you for your message! I will get back to you soon.");
        contactForm.reset();
      });
    </script>
  </body>
</html>
