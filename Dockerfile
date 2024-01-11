# Use the official Node.js image with Alpine Linux
FROM httpd:bookworm

# Set the working directory in the container
WORKDIR /var/www/html

# Install dependencies using Yarn

# Expose the port on which the Nuxt.js app will run (default is 3000)
EXPOSE 3001

# Build the Nuxt.js application
# RUN yarn build

# Specify the command to run your application