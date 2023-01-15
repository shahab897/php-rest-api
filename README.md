# PHP REST API

This is a simple REST API built using PHP. It provides endpoints for handling GET, POST, PUT, and DELETE requests.

## Endpoints

- `GET /resource`: Retrieves data for the specified resource
- `POST /resource`: Creates a new resource with the provided data
- `PUT /resource`: Updates the specified resource with the provided data
- `DELETE /resource`: Deletes the specified resource

## Setup

1. Clone this repository.
2. Set up a web server and configure it to point to the `public` directory
3. Create a MySQL database and import the `db.sql` file
4. Update the `config.php` file with your database connection details
5. Install dependencies via composer `composer install`

## Usage

Make HTTP requests to the endpoints listed above. The API will return data in JSON format.

## Dependencies
- PHP >= 7.0
- MySQL
- Composer

## Example

Here is an example of how to use the API to retrieve data for a resource:
```sh
curl -X GET http://localhost/resource/1