const CarroModel = require("../models/CarroModel");
const Carro = require("../Carro");
const VCarros = [];


class CarroController2{
    static async cadastrar(req, res){
        const novoCarro = new CarroModel ({
             id: req.body.id,
             nome: req.body.nome,
             idade: req.body.idade
          })
          await novoCarro.save();
         res.redirect("/carros");
        }
    static cadastrarRender(req, res){
            res.render("carro/cadastrar");
    }
    static relatorio(req, res){
        res.render("carro/relatorio", {VCarros});
}
    static detalhar(req, res){
        const id = req.params.id;
        if (id != undefined){
            let encontrou = false;
            for (const c of VCarros) {
                if(id == c.id){
                    encontrou = true;
                    res.render("carro/detalhar", {c});
                    break;
                }
            }
        }else{
            res.render("carro/relatorio");
        }
    }
}

module.exports = CarroController2;