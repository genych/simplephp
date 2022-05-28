what:
minimalistic but not bare bones php setup

aim:
containerised (docker + compose)
dev-friendly
kind of production ready

how:
`docker-compose up -d` — spawn a bunch of containers
`https://localhost` — it's alive!

gotchas:
browser will warn you about self signed certificate. it's ok.
also, it will expire one day. renew manually: https://letsencrypt.org/docs/certificates-for-localhost/

why:
keep my knowledge/preferences in one public place

todo:
xdebug
redis
actual symfony app on top of skeleton
php image with composer and tools preinstalled
CI
tweak configs
more todos
