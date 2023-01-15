# PHP REST API

This is a simple REST API built using PHP. It provides endpoints for handling GET, POST, PUT, and DELETE requests.

## Endpoints

- `GET /resource`: Retrieves data for the specified resource
- `POST /resource`: Creates a new resource with the provided data
- `PUT /resource`: Updates the specified resource with the provided data
- `DELETE /resource`: Deletes the specified resource

## Setup

1. Clone this repository.
2. Set up a web server and configure it to point to the `root` directory

## Usage

Make HTTP requests to the endpoints listed above. The API will return data in JSON format.

## Dependencies
- PHP >= 7.0

## Example

Here is an example of how to use the API to retrieve data for a resource:
```sh
curl -X GET http://localhost/resource/1