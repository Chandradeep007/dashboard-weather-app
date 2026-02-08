Responsive Weather App

A responsive web application that shows **current weather** and a **5-day forecast** for any city using the OpenWeatherMap API.  
The app is focuses on **clean UI, responsive layout, and simple testable features**.

---

## Features

### 1. City Search
- Search for any city by name using the search bar.
- Press **Enter** or click the **Search** button to fetch data.
- If the city is valid, current weather and the 5-day forecast are displayed.

### 2. Current Weather Card
For the selected city, the app shows:

- City name  
- Current date & time (from the user’s browser)  
- Temperature (°C)  
- Humidity (%)  
- Wind speed (km/h)  
- Weather icon (from OpenWeatherMap)  

A **default weather icon** is shown when the page first loads, and it is replaced by the real icon after the first successful API call.

### 3. 5-Day Forecast
- Forecast data is loaded from the `forecast.php` endpoint.
- One card per day (5 cards total).
- Each card includes:
  - Day name (e.g., Fri, Sat, Sun)
  - Weather icon
  - Temperature (°C)
  - Short description (e.g. *Clouds*, *Rain*, *Clear*).

### 4. Favourite Cities
- Three default favourite cities: **London**, **New York**, **Tokyo**.
- After searching a city, you can click **“+ Add current city”** to save it as a favourite.
- Favourites are rendered as buttons for quick access.
- Each favourite has a small **`×` (cancel)** button to remove it.
- Favourites are persisted using **`localStorage`** so they remain after a page refresh.

### 5. Error Handling
- If the user searches for an invalid city, the app:
  - Shows a clear error message (e.g. *“City not found. Please try again.”*).
  - Does not crash or break the layout.
- Basic network error handling is included in the JavaScript `.catch(...)` blocks for both current weather and forecast.

### 6. Responsive Design
- Layout is built with **Bootstrap** and custom CSS.
- On **desktop**, forecast cards are shown in a row; on **mobile**, they stack vertically.
- The main weather card, search bar, and favourites section all scale to different screen sizes.
- Tested with Chrome DevTools device modes (e.g. iPhone, iPad, desktop).

---
### How to Start PHP for backend

Installation & Setup
0. Check PHP Installation
Open a terminal in macOS and run:
php -v
•	If you see a PHP version (e.g. PHP 8.x.x) → PHP is installed ✅
•	If you see command not found: php → install PHP (for example with Homebrew):
brew install php
Then confirm again with php -v.
 
1. Clone or Download the Project
git clone https://github.com/<your-username>/<your-repo-name>.git
cd <your-repo-name>
Or download as ZIP and extract to a folder.

 
2. How to Run the PHP Project (Built-in Server)
From the project folder in the terminal:
php -S localhost:8000
You should see something like:
PHP Development Server started
Listening on http://localhost:8000
Document root is /path/to/your/project



## Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript (vanilla), Bootstrap  
- **Backend / API proxy:** PHP (`weather.php`, `forecast.php`)  
- **Weather data:** [OpenWeatherMap](https://openweathermap.org/) (Current Weather + 5-Day / 3-Hour Forecast API)  
- **Storage:** Browser `localStorage` for favourite cities  
- **Tools:** VS Code, Chrome DevTools

---

## Project Structure![WhatsApp Image 2026-02-08 at 18 38 04](https://github.com/user-attachments/assets/bc4da8c6-a7ac-47ff-bfad-4810dd18e041)
![WhatsApp Image 2026-02-08 at 18 37 42](https://github.com/user-attachments/assets/ad3b5f08-e141-4701-816f-638c1a1a36fc)
![WhatsApp Image 2026-02-08 at 18 37 07 (4)](https://github.com/user-attachments/assets/55c5eae5-31cf-4d25-9e11-c6b07afb2a77)
![WhatsApp Image 2026-02-08 at 18 37 07 (2)](https://github.com/user-attachments/assets/3e340e5f-6eb8-4eb4-95ee-2f96f2d2a69a)


```text
.
├── index.html         # Main UI (search, weather card, forecast, favourites)
├── weather.php        # PHP endpoint for current weather
├── forecast.php       # PHP endpoint for 5-day forecast
└── README.md

```php
$apiKey = "YOUR_API_KEY_HERE";
