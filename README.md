# OnlineTrainingHub Applications and Services
This repository with application and services backend logic.
## Local development
### Running the Local Environment
1. Install docker - https://docs.docker.com/install/
2. Go to docker settings -> resources -> file sharing -> add C:\\  (or Mac equivalent)
2. [MAC] Go to Terminal/CommandPrompt and do the following:
⋅⋅* `sudo vim /etc/hosts` and paste this at the end of the file: `127.0.0.1  admin.onlinetraininghub.local  api.onlinetraininghub.local` 
2. [WINDOWS] Go to folder `C:\Windows\System32\drivers\etc`
⋅⋅* Open `hosts` file and replace line with `127.0.0.1` with `127.0.0.1  admin.onlinetraininghub.local  api.onlinetraininghub.local`

open [admin.onlinetraininghub.local](https://admin.onlinetraininghub.local)

3. [WINDOWS] Run `net stop http` and locate services in run ->`services.msc` disable them and place as manual.
3. [WINDOWS] Add line `127.0.0.1 api.evolvetraininghub.local` to `C:\Windows\System32\drivers\etc\hosts` (carefully do not save as .txt but instead save without extension).
3. [WINDOWS] Start development environment by running `./start-docker`
3. [MAC] Start development environment by running `docker-compose up --build --force-recreate --remove-orphans -d && docker-compose up -d && ./bin/composer install && bin/console doctrine:migrations:migrate  && ./bin/console cache:clear`


## API Requests
API requests should be made to:
http://api.onlinetraininghub.com
API documentation can be found in:
http://api.onlinetraininghub.com/doc
