# Use lightweight Nginx to serve static files
FROM nginx:alpine

# Set working directory inside container to Nginx default web root
WORKDIR /usr/share/nginx/html

# Copy all files from react-app folder into the container's web root
COPY . .

