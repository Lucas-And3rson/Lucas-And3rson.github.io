const express = require('express');
const routes = express.Router();
const CarroController = require('../controllers/CarroController');

routes.get("/carros", CarroController.relatorio);
routes.get("/carro/:id", CarroController.detalhar);
routes.get("/carros/cadastrar", CarroController.cadastrarRender);
routes.post("/carros", CarroController.cadastrar);

module.exports = routes;
