# Commands for launch project (run as it written)

```
git clone https://github.com/canyouhearthemusic/wallet-kit-test-task.git

cd wallet-kit-test-task

cp .env.example .env

docker compose up -d

docker compose run --rm composer install

docker compose run --rm artisan key:generate

docker compose run --rm artisan migrate --seed
```

API routes stored in `routes/api.php` .
\
There are only 2 endpoints: `clients.index` and `clients.show`.

`GET /api/clients`

`GET /api/clients/{phone_number}`

Task was completed in ~40 minutes.

