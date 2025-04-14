# Sử dụng Nginx làm web server
FROM nginx:alpine

# Sao chép mã nguồn (HTML, CSS) vào thư mục phục vụ của Nginx
COPY ./myweb /usr/share/nginx/html

# Mở cổng 80 để Nginx phục vụ website
EXPOSE 80
