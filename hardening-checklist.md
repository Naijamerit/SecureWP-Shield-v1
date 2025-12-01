# Hardening Checklist — SecureWP Shield v1


## Authentication
- [x] Enforce password policy (minimum length 12, complexity)
- [x] Add Two-Factor Authentication (2FA) for all admin-level users
- [x] Hide admin login endpoint (e.g., WPS Hide Login)
- [x] Rate-limit and lock accounts after failed attempts
- [x] Block repeated failed login IPs and notify admin


## File System & Config
- [x] `DISALLOW_FILE_EDIT` set to `true`
- [x] wp-config.php moved above webroot
- [x] wp-config.php permissions `600`
- [x] Directories `755`, files `644`
- [x] PHP execution blocked in `wp-content/uploads`


## Vulnerability Surface Reduction
- [x] Remove unused themes and plugins
- [x] Keep core/plugins/themes up to date
- [x] Regular CVE scanning (WPScan or external)


## Server & Network
- [x] Force HTTPS and HSTS (where applicable)
- [x] Security headers applied (CSP, X-Frame-Options, etc.)
- [x] Cloudflare or equivalent WAF rules in place
- [x] Rate limiting for login endpoints


## Database
- [x] Change default table prefix
- [x] Use least-privilege DB user
- [x] Regular automated backups (offsite)
- [x] Remove direct DB exposure


## Monitoring & Logging
- [x] Web application logs forwarded to central log store
- [x] Alerts for suspicious login patterns and file changes
- [x] Periodic audit reporting


## DevOps & CI
- [x] Security checks in CI (composer/npm audit, WPScan)
- [x] Secrets do not live in repo; use secret manager
- [x] Automated deployment with immutable releases


## Documentation
- [x] Architecture diagram included
- [x] Onboarding doc for developers
- [x] Incident response and restore playbook
