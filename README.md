Laravel based project to create a program for senior store



For homestead users:

I can't upload vendor directory & .env files so you have to copy those files manually


//if you haven't set your username and email

$ git config --global user.name "name"

$ git config --global user.email "email@example.com"


//if you're done setting github username and email proceed below

$ cd

$ composer create-project --prefer-dist laravel/laravel temp

$ mkdir projects

$ cd projects

$ git init

$ git clone https://github.com/VincentSastra/senior_store.git

$ cp -r ~/temp/vendor ~/projects/senior_store

$ cp ~/temp/.env ~/projects/senior_store

$ cd

$ rm -r temp
