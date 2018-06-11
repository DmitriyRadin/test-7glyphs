FROM nginx:1.15

RUN rm /etc/nginx/conf.d/default.conf

COPY docker/nginx/config /etc/nginx/conf.d/

WORKDIR /7glyphs/laravel