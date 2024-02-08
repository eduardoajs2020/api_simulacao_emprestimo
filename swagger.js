const swaggerAutogen = require('swagger-autogen')();

const outputFile = './swagger_output.json';
const endpointsFiles = ['./app.js'];

const doc = {
    info: {
        version: "1.0.0",
        title: "API",
        description: "Documentation for API"
    },
    host: "localhost:3000",
    basePath: "/"
};

swaggerAutogen(outputFile, endpointsFiles, doc);
