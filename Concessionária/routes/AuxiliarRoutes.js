const express = require('express');
const routes = express.Router();
const AuxiliarController = require('../controllers/AuxiliarController');

routes.get("/auxiliares", AuxiliarController.relatorio);
routes.get("/auxiliar/:id", AuxiliarController.detalhar);
routes.get("/auxiliares/cadastrar", AuxiliarController.cadastrarRender);
routes.post("/auxiliares", AuxiliarController.cadastrar);

module.exports = routes;
