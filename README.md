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

3. Start development environment by running `docker-compose up --build --force-recreate -d`



## API Requests

API requests should be made to:

http://api.onlinetraininghub.com

API documentation can be found in:

http://api.onlinetraininghub.com/doc

