# Footer Message Plugin

A simple WordPress plugin that adds a customizable message to the footer of your website.

## 📌 Features

- Display a custom message in the footer.
- Modify the message from the WordPress admin panel.
- Secure and optimized code.
- Easy to use and configure.

## 🛠 Installation

1. Download the plugin or clone the repository.
2. Upload the folder to `/wp-content/plugins/` in your WordPress installation.
3. Activate the plugin in the **Plugins** section of the WordPress admin panel.
4. Go to **Settings > Footer Message** to configure your custom message.

## ⚙️ Usage

1. Navigate to **Settings > Footer Message** in the WordPress admin panel.
2. Enter your desired footer message.
3. Click **Save Changes**.
4. The message will automatically appear in the footer of your website.

## 🔧 Technical Details

- Uses `wp_footer` hook to display the message.
- Saves settings using WordPress options API.
- Sanitizes input for security.
- Requires at least WordPress 5.0.

## 📜 License

This plugin is licensed under the **GPL-2.0 or later** license.

## 📝 Notes

- Ensure your theme uses `wp_footer()` in the footer template for the message to appear.
- The plugin automatically deactivates if it detects missing dependencies.

---

🚀 **Developed for easy customization and seamless WordPress integration.**