# Recommended Plugins (minimal, audited)


**Goal:** minimal plugin footprint and carefully chosen tools.


## Authentication & Login
- WP 2FA — adds Two-Factor Authentication.
- Limit Login Attempts Reloaded — blocks brute-force attempts.
- WPS Hide Login — change login endpoint.


## Scanning & Firewall
- Wordfence (or remotely-managed WAF) — endpoint and file integrity monitoring.
- WPScan (use CLI for offsite scans).


## Backups
- UpdraftPlus — scheduled, remote backups (S3/Google Drive)


## DevOps & Deploy
- WP-Cli — for scripted operations
- GitHub Actions — CI checks + WPScan


**Note:** Avoid plugin overlap. Keep plugin count as low as possible.
