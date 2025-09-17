# CyberSource Payment Gateway Integration (Laravel 10)_Secure Acceptance hosted checkout integration

A Laravel implementation of the CyberSource Secure Acceptance (Visa Solution) Payment Gateway
, converted from the official PHP kit.
This package provides a clean, config-driven integration for generating signed payment requests and rendering secure forms in Laravel.

⚙️ Configuration
  .env
  
    CYBERSOURCE_SECRET_KEY=your_secret_key
    CYBERSOURCE_ACCESS_KEY=your_access_key
    CYBERSOURCE_PROFILE_ID=your_profile_id

🔔 Merchant Notifications (Webhook URL)

CyberSource requires an HTTPS endpoint to send transaction receipts and responses back to your system.

This is mandatory for receiving real-time payment notifications.

In testing/development, you can use ngrok
 to expose a local Laravel endpoint over HTTPS.

 ✅ Summary
 .env
 
    File	                           Purpose
    CyberSourceService.php	          Signs payment parameters securely.
    PaymentController.php	         Prepares signed data and handles notifications.
    checkout.blade.php	             Renders the payment form for users.
    web.php	Routes for               web checkout & notifications.
    api.php	Optional API             route for webhook notifications.

 Important: Never share sensitive credentials or private keys in public repos. If you want support or help during development, share your contact privately
