# Reverse Bash Shell WordPress Plugin

**Reverse Bash Shell** is a custom WordPress plugin developed for Capture The Flag (CTF) challenges and authorized penetration testing. Upon activation, it attempts to initiate a reverse shell connection to a specified IP and port using `/bin/bash`.

> ⚠️ **Disclaimer**  
> This plugin is intended strictly for educational and authorized security testing purposes only.  
> Unauthorized use on systems without explicit permission is illegal and unethical.

---

## 🔧 Features

- Initiates a reverse shell using `/bin/bash -i`
- Implements socket communication using `fsockopen()` and `proc_open()`
- Automatically triggers the reverse shell on plugin activation

---

## ⚙️ Configuration

Before using the plugin, edit the PHP source and set the following:

```php
$ip = 'IP';      // Replace with your attacker's IP address
$port = PORT;    // Replace with the port number (e.g., 4444)
```
