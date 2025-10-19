FROM nginx:alpine

# remove the default nginx page
RUN rm -rf /usr/share/nginx/html/*

# copy your website files to the correct folder
COPY ahmed.html /usr/share/nginx/html/index.html
COPY style.css /usr/share/nginx/html/style.css

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
