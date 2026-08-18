# Legal Connect — Online Court & Legal Services Platform

Legal Connect is a web-based platform that digitizes court and legal processes. It lets **clients** register, file cases online, upload legal documents, track case status, and consult lawyers through chat or video calls. **Lawyers** can manage cases, review documents, schedule hearings, and communicate with clients through a dedicated dashboard. **Court administrators** oversee case assignments and the overall workflow.

## Features

- **User registration & login** — secure sign-up/sign-in with hashed passwords (`regi.html/.php`, `userlogin.html/.php`, `login.php`)
- **Dashboard** — central hub for cases, hearings, and quick actions (`dashboard.html/.php`)
- **Case management** — view, track, and manage case status (`caseman.html`, `viewcase.html/.php`)
- **E-Filing** — file legal documents online (`efile.html`)
- **Hearing scheduling** — view upcoming hearings and hearing schedules (`hearing.html`, `uphear.html`)
- **Judgments & orders** — access case judgments and court orders (`judorder.html`)
- **Legal forms & templates** — download standard legal forms (`lf.html`)
- **Virtual courtroom** — video/chat-based consultation and hearings (`vir.html`)
- **Messaging & notifications** — communication between clients, lawyers, and admins (`messagenot.html`)
- **Admin panel** — manage users, cases, and platform oversight (`adminpanel.html`)
- **Profile management** — user profile and settings (`profile.html`)
- **Contact & support** — contact form and help/support pages (`cont.html/.php`, `hs.html`)
- **About page** — platform information (`about.html`)

## Tech Stack

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL (via `mysqli`)

## Project Structure

```
Legal-connect-website/
├── home.html             # Landing page
├── about.html             # About Us
├── cont.html / cont.php   # Contact Us (form + handler)
├── regi.html / regi.php   # Registration (form + handler)
├── userlogin.html         # Login page
├── login.php              # Login handler
├── userlogin.php          # Alternate login handler
├── logout.php             # Session logout
├── dashboard.html/.php    # User dashboard
├── caseman.html           # Case management
├── viewcase.html/.php     # View case details
├── efile.html             # E-Filing system
├── hearing.html           # Hearing schedule
├── uphear.html            # Upcoming hearings
├── judorder.html          # Judgments & Orders
├── lf.html                # Legal forms & templates
├── vir.html                # Virtual courtroom
├── messagenot.html         # Messaging & notifications
├── adminpanel.html         # Admin panel
├── profile.html            # User profile
├── hs.html                  # Help & support
├── db.php                    # Database connection (used by login/register/case files)
└── index.html                 # Entry point
```

> **Note:** `db.php` and `cont.php` currently connect to two different database names (`online_court` and `legal_connect`). Make sure your local database name matches whichever file(s) you are running, or update the connection settings to point to a single, consistent database.

## Getting Started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) / [WAMP](https://www.wampserver.com/) / [MAMP](https://www.mamp.info/) or any local server stack with **PHP** and **MySQL**
- A web browser

### Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/SanjayNivasG/Legal-connect-website.git
   ```
2. **Move the project** into your server's web root (e.g. `htdocs` for XAMPP):
   ```bash
   mv Legal-connect-website /path/to/htdocs/
   ```
3. **Create the database** in MySQL/phpMyAdmin (e.g. `online_court`) and create the tables referenced in the code, at minimum:
   - `users` (id, username, password, ...)
   - `legal_support` (username, password, ...)
   - `cases` (user_id, title, status, description, ...)
   - `contact_messages` (name, email, message, ...)
4. **Update database credentials** in `db.php` and `cont.php` if your MySQL username/password/host differ from the defaults (`root` / no password / `localhost`).
5. **Start Apache and MySQL** (via the XAMPP/WAMP control panel).
6. **Open the app** in your browser, e.g.:
   ```
   http://localhost/Legal-connect-website/home.html
   ```

## Usage

1. Register a new account from the **Register** page.
2. Log in from the **Login** page.
3. Use the **Dashboard** to file cases, view case status, check hearing schedules, access judgments/orders, and communicate with lawyers or admins.

## Roadmap / Suggested Improvements

- Consolidate database configuration into a single, environment-based config file
- Add password confirmation and stronger input validation on all forms
- Introduce role-based access (client / lawyer / admin) with dedicated dashboards
- Add proper database schema/migration scripts (`schema.sql`)
- Move from raw HTML pages to a consistent templating approach for shared headers/footers

## Contributing

Contributions are welcome! Fork the repo, create a feature branch, and open a pull request describing your changes.

## License

No license has been specified for this project yet. Consider adding a `LICENSE` file to clarify usage terms.
