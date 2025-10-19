# Use nginx to serve static files
FROM nginx:alpine

# Copy your HTML and CSS into the nginx folder
COPY ahmed.html /usr/share/nginx/html/
COPY style.css /usr/share/nginx/html/

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
