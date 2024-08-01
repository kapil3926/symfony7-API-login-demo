# Symfony 7 API Authentication Demo

This repository contains a demo application that showcases how to implement API authentication in Symfony 7. The application demonstrates basic user registration, login, and token-based authentication using JWT (JSON Web Tokens).

## Features

- User registration
- User login
- JWT authentication
- Secured API endpoints

## Requirements

- PHP 8.1 or higher
- Composer
- Symfony CLI (optional but recommended)
- MySQL or any other supported database

## Installation

1. **Clone the repository:**

   ```sh
   git clone https://github.com/your-username/symfony7-api-auth-demo.git
   cd symfony7-api-auth-demo
   
2. **Install dependencies:**

   ```sh
  	composer install

3. **Generate the JWT keys:**
   
		mkdir -p config/jwt
		openssl genpkey -algorithm RSA -out config/jwt/private.pem -aes256
		openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout

	Update the JWT_PASSPHRASE in the .env file with the passphrase you used during key generation.




## API Endpoints

	POST /api/register - Register a new user
	POST /api/login - Authenticate and get a JWT token
	GET /api/dashboard - Get the authenticated user's dashboard (secured endpoint)

## Contributing
Feel free to open issues or submit pull requests if you have suggestions or improvements.

## License
This project is licensed under the MIT License. See the LICENSE file for details.

## Acknowledgments
This project was inspired by the Symfony documentation and various online tutorials.
