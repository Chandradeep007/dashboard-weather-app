# dashboard-weather-app
# Weather Dashboard (PHP + OpenWeather API)

A simple Weather Dashboard that shows **real-time weather** and a **5-day forecast** for any city.
Frontend is built with **HTML/CSS/JS**, and the backend uses **PHP** to fetch data from the **OpenWeather API**.

---

## Features

- Search weather by city name
- Quick buttons for favourite cities (London / New York / Tokyo)
- Weather card: temperature, humidity, wind speed, icon
- 5-day forecast (daily cards)
- Basic validation (empty input / city not found)
- Works on desktop and mobile (responsive layout)

---

## Tech Stack

- Frontend: HTML, CSS, JavaScript (Fetch API)
- Backend: PHP (API proxy endpoints)
- API: OpenWeather (Current Weather + Forecast)

---

## Project Structure

---

## Screenshots (Add yours here)

> Replace the file names/paths after you add screenshots to your repository (example: `screenshots/` folder).

### Desktop View
![Desktop view](screenshots/desktop.png)

### Mobile View (Responsive)
![Mobile view](screenshots/mobile.png)

### Forecast Section
![Forecast section](screenshots/forecast.png)

### Error Case (Invalid City / Empty Input)
![Error handling](screenshots/error.png)

---

## Requirements

- macOS / Windows / Linux
- PHP installed (recommended PHP 8+)
- Internet connection (API calls)
- OpenWeather API Key

---

## Setup (OpenWeather API Key)

1. Create a free API key from OpenWeather.
2. Open `weather.php` and `forecast.php`
3. Find the API key variable and replace it:

Example:
```php
$apiKey = "YOUR_API_KEY_HERE";
