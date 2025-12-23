// Smooth scroll for internal links
document.addEventListener("click", function (event) {
  const link = event.target.closest("a[href^='#']");
  if (!link) return;
  const targetId = link.getAttribute("href").substring(1);
  const targetElement = document.getElementById(targetId);
  if (!targetElement) return;
  event.preventDefault();
  const header = document.querySelector(".site-header");
  const headerOffset = header ? header.offsetHeight : 0;
  const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
  const offsetPosition = elementPosition - headerOffset - 8;
  window.scrollTo({
    top: offsetPosition,
    behavior: "smooth"
  });
});

function toggleMobileNav(button) {
  const mobileNav = document.getElementById("mobileNav");
  if (!mobileNav) return;
  const isOpen = mobileNav.style.display === "block";
  mobileNav.style.display = isOpen ? "none" : "block";
  if (button) {
    button.classList.toggle("active", !isOpen);
  }
}

function closeMobileNav() {
  const mobileNav = document.getElementById("mobileNav");
  const toggleBtn = document.querySelector(".nav-toggle");
  if (mobileNav) mobileNav.style.display = "none";
  if (toggleBtn) toggleBtn.classList.remove("active");
}

function handleFormSubmit(event) {
  event.preventDefault();
  alert("Thank you for your request. Our team will contact you shortly to confirm your appointment.");
  if (event.target && typeof event.target.reset === "function") {
    event.target.reset();
  }
  return false;
}

// Carousel for services section
document.addEventListener("DOMContentLoaded", function () {
  // Footer year (kept even if not currently used)
  var yearSpan = document.getElementById("year");
  if (yearSpan) {
    yearSpan.textContent = new Date().getFullYear();
  }

  var track = document.querySelector(".services-track");
  if (!track) return;

  var cards = track.querySelectorAll(".service-card");
  var prevBtn = document.querySelector(".carousel-btn-prev");
  var nextBtn = document.querySelector(".carousel-btn-next");

  if (!cards.length || !prevBtn || !nextBtn) return;

  function scrollByCard(direction) {
    var firstCard = cards[0];
    var cardRect = firstCard.getBoundingClientRect();
    var gap = 16; // approximate horizontal gap
    var amount = (cardRect.width + gap) * direction;
    track.scrollBy({ left: amount, behavior: "smooth" });
  }

  prevBtn.addEventListener("click", function () {
    scrollByCard(-1);
  });

  nextBtn.addEventListener("click", function () {
    scrollByCard(1);
  });

  // Border animation starting from cursor position
  var photoCard = document.querySelector(".about-photo-card");
  if (photoCard) {
    photoCard.addEventListener("mouseenter", function (e) {
      var rect = photoCard.getBoundingClientRect();
      var centerX = rect.left + rect.width / 2;
      var centerY = rect.top + rect.height / 2;
      var mouseX = e.clientX;
      var mouseY = e.clientY;
      
      // Calculate angle from center to cursor position (in degrees)
      var angle = Math.atan2(mouseY - centerY, mouseX - centerX) * (180 / Math.PI);
      // Normalize to 0-360 range
      angle = angle < 0 ? angle + 360 : angle;
      
      // Set CSS custom property for start angle
      photoCard.style.setProperty("--start-angle", angle + "deg");
    });
  }
});

