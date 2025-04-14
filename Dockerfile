FROM nginx:alpine

# Copy toàn bộ nội dung hiện tại vào thư mục web server của Nginx
COPY . /usr/share/nginx/html

EXPOSE 80
