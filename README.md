# Laravel Math Calculator

An interactive, web-based calculator application built using the Laravel framework, featuring a clean user interface powered by Bootstrap 5 and safe server-side expression evaluation.

---

## Features
* **Keypad Interface**: On-screen buttons for digits (`0-9`), decimal point (`.`), and basic operators (`+`, `-`, `*`, `/`).
* **Input Validation**: Validates all incoming expressions to ensure only mathematical operators and numbers are parsed.
* **Safe Evaluation**: Server-side parsing with exception handling to prevent invalid expressions and unauthorized shell operations.
* **Responsive UI**: Fully responsive layout styled with Bootstrap 5 and customized headers/footers.

---

## How to Access and Run the Source Code

### Prerequisites
Make sure you have the following installed on your system:
* **PHP** (>= 8.2 recommended)
* **Composer** (PHP Package Manager)
* **Node.js** & **npm** (for frontend asset compilation)

---

### Step 1: Clone the Repository
Clone this repository to your local computer:

```bash
git clone https://github.com/DARKNIGHT1028/test.git
cd test
```

---

### Step 2: Install PHP & Node Dependencies
Run composer to install backend packages, and npm to install frontend packages:

```bash
composer install
npm install
```

---

### Step 3: Configure the Environment
1. Copy the environment configuration file:
   ```bash
   # On Windows PowerShell:
   copy .env.example .env
   
   # On macOS/Linux/Git Bash:
   cp .env.example .env
   ```
2. Generate the Laravel application encryption key:
   ```bash
   php artisan key:generate
   ```

---

### Step 4: Initialize the SQLite Database
By default, the application is configured to use SQLite for database sessions and caching:
1. Create an empty SQLite file:
   * **Windows PowerShell**: `New-Item -ItemType File database/database.sqlite`
   * **CMD**: `type nul > database/database.sqlite`
   * **macOS/Linux**: `touch database/database.sqlite`
2. Run database migrations:
   ```bash
   php artisan migrate
   ```

---

### Step 5: Compile Frontend Assets
Build the production assets using Vite:

```bash
npm run build
```

---

### Step 6: Start the Local Development Server
Launch the PHP built-in server:

```bash
php artisan serve
```

Once started, open your browser and navigate to:
```url
http://127.0.0.1:8000
```
