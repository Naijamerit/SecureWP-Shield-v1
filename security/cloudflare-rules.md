# Cloudflare Rule Templates — SecureWP Shield v1


Use these templates in Cloudflare Firewall Rules or your CDN's equivalent.


## 1. Rate-limit wp-login.php
- Expression: `(http.request.uri.path contains "/wp-login.php") and not ip.src in $ALLOWED_ADMIN_IPS`
- Action: Challenge or Block after X requests per minute


## 2. Block common exploit paths
- Block: `/xmlrpc.php` (unless needed)
- Block: `/wp-content/plugins/*/readme.txt` patterns


## 3. Challenge suspicious countries
- If your business does not serve certain countries, block/challenge them.


## 4. Managed WAF
- Enable Cloudflare's WordPress managed rules
- Turn on OWASP CRS


## 5. Bot Management
- Enable Bot Fight Mode or Bot Management to reduce automated traffic


## 6. Custom rule to protect admin path (if you didn't hide login)
- Expression: `(http.request.uri.path contains "/wp-admin") and not ip.src in $ADMIN_IPS`
- Action: JS Challenge


Add rule IDs and example values in your repo's audit-report when you apply to a live site.
