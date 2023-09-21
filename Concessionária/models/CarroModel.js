const mongoose = require("mongoose");
const Schema = mongoose.Schema;

const carroSchema = Schema({
    id: Number,
    nome: String,
    marca: String,
    ano: Number
});

module.exports = mongoose.model("Carro", carroSchema);