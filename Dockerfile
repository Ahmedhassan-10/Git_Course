FROM nginx:alpine
COPY hassan.html /usr/share/nginx/html/hassan.html
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]


