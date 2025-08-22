<template>
  <footer class="custom-footer">
    <div class="footer-content">
      <!-- Main Footer Section -->
      <div class="footer-main">
        <div class="footer-section">
          <div class="footer-logo">
            <img src="https://cdn.quasar.dev/logo-v2/svg/logo.svg" alt="BookingMaster Logo" class="logo-img">
            <span class="logo-text">BookingMaster</span>
          </div>
          <p class="footer-description">
            The complete booking management solution for businesses of all sizes. Streamline your reservations, manage availability, and grow your business.
          </p>
          <div class="social-links">
            <a href="#" class="social-link">
              <q-icon name="fab fa-facebook-f" />
            </a>
            <a href="#" class="social-link">
              <q-icon name="fab fa-twitter" />
            </a>
            <a href="#" class="social-link">
              <q-icon name="fab fa-linkedin-in" />
            </a>
            <a href="#" class="social-link">
              <q-icon name="fab fa-instagram" />
            </a>
          </div>
        </div>

        <div class="footer-section">
          <h4>Product</h4>
          <ul class="footer-links">
            <li><a href="#">Features</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Case Studies</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Updates</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h4>Company</h4>
          <ul class="footer-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h4>Support</h4>
          <ul class="footer-links">
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Community</a></li>
            <li><a href="#">Live Chat</a></li>
            <li><a href="#">API Documentation</a></li>
            <li><a href="#">Status</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h4>Subscribe</h4>
          <p class="subscribe-text">Get the latest news and updates</p>
          <div class="subscribe-form">
            <q-input
              v-model="email"
              placeholder="Your email address"
              dense
              outlined
              class="email-input"
            />
            <q-btn
              color="primary"
              label="Subscribe"
              unelevated
              class="subscribe-btn"
            />
          </div>
        </div>
      </div>

      <!-- Footer Bottom Section -->
      <div class="footer-bottom">
        <div class="footer-bottom-content">
          <div class="copyright">
            &copy; 2023 BookingMaster. All rights reserved.
          </div>
          <div class="legal-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Cookie Policy</a>
            <a href="#">GDPR</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'FooterComponent',
  data() {
    return {
      email: ''
    }
  }
}
</script>

<style scoped>
.custom-footer {
  background: white;
  color: #1976d2; /* Primary color */
  padding: 60px 0 0;
  margin-top: 60px;
  box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
}

.footer-content {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.footer-main {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 40px;
  padding-bottom: 40px;
}

.footer-section h4 {
  color: #1976d2; /* Primary color */
  margin-bottom: 20px;
  font-size: 18px;
  font-weight: 600;
  position: relative;
}

.footer-section h4::after {
  content: '';
  position: absolute;
  bottom: -8px;
  left: 0;
  width: 40px;
  height: 3px;
  background: #1976d2; /* Primary color */
  border-radius: 2px;
}

.footer-logo {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.logo-img {
  width: 40px;
  height: 40px;
  margin-right: 12px;
}

.logo-text {
  font-size: 24px;
  font-weight: 700;
  color: #1976d2; /* Primary color */
}

.footer-description {
  line-height: 1.6;
  margin-bottom: 25px;
  color: #555; /* Dark gray for better readability */
}

.subscribe-text {
  color: #555;
  margin-bottom: 15px;
}

.social-links {
  display: flex;
  gap: 15px;
}

.social-link {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  background: #f0f4f8; /* Light background */
  border-radius: 50%;
  color: #1976d2; /* Primary color */
  text-decoration: none;
  transition: all 0.3s ease;
}

.social-link:hover {
  background: #1976d2; /* Primary color */
  color: white;
  transform: translateY(-3px);
}

.footer-links {
  list-style: none;
  padding: 0;
}

.footer-links li {
  margin-bottom: 12px;
}

.footer-links a {
  color: #555; /* Dark gray */
  text-decoration: none;
  transition: color 0.3s ease;
  position: relative;
  padding-left: 0;
  transition: all 0.3s ease;
}

.footer-links a:hover {
  color: #1976d2; /* Primary color */
  padding-left: 8px;
}

.footer-links a::before {
  content: '→';
  position: absolute;
  left: -15px;
  opacity: 0;
  transition: opacity 0.3s ease;
  color: #1976d2; /* Primary color */
}

.footer-links a:hover::before {
  opacity: 1;
  left: -12px;
}

.subscribe-form {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.email-input {
  background: white;
  border-radius: 6px;
}

.email-input :deep(.q-field__control) {
  color: #1976d2; /* Primary color */
}

.email-input :deep(.q-field__control:before) {
  border-color: #ccc;
}

.subscribe-btn {
  border-radius: 6px;
  font-weight: 600;
}

.footer-bottom {
  border-top: 1px solid #e0e0e0; /* Light gray border */
  padding: 25px 0;
}

.footer-bottom-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 20px;
}

.copyright {
  color: #1976d2; /* Primary color */
}

.legal-links {
  display: flex;
  gap: 25px;
}

.legal-links a {
  color: #1976d2; /* Primary color */
  text-decoration: none;
  font-size: 14px;
  transition: color 0.3s ease;
}

.legal-links a:hover {
  color: #125699; /* Darker shade of primary */
  text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 768px) {
  .footer-main {
    grid-template-columns: 1fr;
    gap: 30px;
  }

  .footer-bottom-content {
    flex-direction: column;
    text-align: center;
  }

  .legal-links {
    justify-content: center;
    flex-wrap: wrap;
  }

  .subscribe-form {
    flex-direction: row;
  }
}

@media (max-width: 480px) {
  .subscribe-form {
    flex-direction: column;
  }

  .social-links {
    justify-content: center;
  }
}
</style>
