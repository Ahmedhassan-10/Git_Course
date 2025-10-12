FROM nginx:alpine
COPY hassan.html /usr/share/nginx/html/ahmed.html
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]

