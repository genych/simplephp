__what:__

minimalistic but not bare bones php setup + calculator-with-persistent-memory on top of https://codepen.io/marshall-ku/pen/MRjaGm


__aim:__

* containerised (docker + compose)
* dev-friendly
* kind of production ready


__how:__

`docker-compose up -d` — spawn a bunch of containers

`https://localhost` — it's alive! (http is ok too)


__gotchas:__

browser will warn you about self signed certificate. it's ok.
also, it will expire one day. renew manually: https://letsencrypt.org/docs/certificates-for-localhost/


__why:__

keep my knowledge/preferences in one public place


__todo/changelog:__

* ~xdebug~
* redis
* ~php image with composer and tools preinstalled~
* CI
* tweak configs
* more todos
