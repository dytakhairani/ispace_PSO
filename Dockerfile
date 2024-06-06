# Gunakan image PHP dengan FPM
FROM php:8.1-fpm

# Atur direktori kerja
WORKDIR /var/www

# Instal dependensi sistem
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

# Instal ekstensi PHP
RUN docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Instal Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Salin konten direktori aplikasi
COPY . /var/www

# Ubah kepemilikan direktori aplikasi ke pengguna www-data
RUN chown -R www-data:www-data /var/www

# Ubah pengguna saat ini ke www-data
USER www-data

# Ekspose port 9000 dan jalankan server php-fpm
EXPOSE 9000
CMD ["php-fpm"]
