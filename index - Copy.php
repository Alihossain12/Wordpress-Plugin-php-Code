<!DOCTYPE html>
<html lang="en">

  <?php include_once 'Home-page-php/head.php';?>
  
  <body>
    <!-- Header -->
     <?php include_once 'Home-page-php/header.php';?>

    <!-- Floating Navigation -->
  
    <?php include_once'Home-page-php/Floating_Navigation.php';?>


    <!-- Hero Section -->
   <?php include_once 'Home-page-php/Hero.php';?>

    <!-- About Section -->
   <?php include_once 'Home-page-php/About.php';?>

    <!-- Experience Section -->
    <?php include_once 'Home-page-php/Experience.php';?>


    <!-- Skills Section -->
  <?php include_once 'Home-page-php/Skills.php';?>

    <!-- Services Section -->
     <?php include 'Home-page-php/Services.php';?>

    <!-- Contact Section -->
    <?php include 'Home-page-php/Contact.php';?>

  
    <!-- Footer -->
    <?php include 'Home-page-php/Footer.php';?>

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
