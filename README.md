## About challenge olw 3

Hello, my friends, how are you?
As proposed in the lesson on preparing the development environment for olw 3, here is the readme with my actions and steps taken to install it.

## Installation

According to laravel's documentation, this step was simple: following the step by step, the installation went smoothly, and there was no need to report any incidents.

But the step by step followed was once I already have docker installed and running on my machine, install the laravel with the command (curl -s "https://laravel.build/olw-3?with=mysql,redis,mailpit" | bash),
and then I just run command (npm install) to install the dependencies,
and then I just run the command (sail up) and everything was working
and (npm run dev) to compile the assets.

After everything running correctly was installed Breeze with the command (sail composer require laravel/breeze --dev), followed by (sail artisan breeze:install) and with my DataBase configured in .env I ran (sail artisan migrate) and again (npm install & npm run dev), as mentioned above without incident and everything running right.

I would like to take this opportunity to congratulate you on the excellent initiative.

Thanks in advance.
Claudio Roberto Fernandes
