
npm run dev
php artisan serve
uuesti faili alla tõmbamisel läheb gitis kaduma e.env file. Tuleb teha koopia .env.example failist seda on kõige lihtsam teha bashis: cp .env.example .env
Peale seda on vaja genereerida uuesti aplikatioonile krüpteerimis võti selleks käsklus:php artisan key:generate

antud projekit puhul on piltidel kasutusel storage link (samad asjad on kahes erinevas kohas)
seda käasklust tuleks igal kord uuesti käivitada kui projekt on uues arvutis
php artisan storage:link
