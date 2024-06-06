# Gunakan image PHP dengan FPM
FROM php:8.1-fpm

# Set direktori kerja
WORKDIR /var/www

# Install dependensi sistem dan ekstensi PHP yang diperlukan
RUN apt-get update && apt-get install -y \
    libonig-dev \
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

# Install ekstensi PHP
RUN docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl

# Konfigurasi dan instal ekstensi gd
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Salin konten direktori aplikasi
COPY . /var/www

# Ubah kepemilikan direktori aplikasi ke pengguna www-data
RUN chown -R www-data:www-data /var/www

# Ubah pengguna saat ini ke www-data
USER www-data

# Expose port 9000 dan jalankan server php-fpm
EXPOSE 9000
CMD ["php-fpm"]
