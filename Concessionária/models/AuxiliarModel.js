const mongoose = require("mongoose");
const Schema = mongoose.Schema;

const auxiliarSchema = Schema({
    id: Number,
    nome: String,
    idade: Number
});

module.exports = mongoose.model("Auxiliar", auxiliarSchema);