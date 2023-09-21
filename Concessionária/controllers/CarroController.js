const CarroModel = require("../models/CarroModel");

class CarroController{
    static async relatorio(req, res){
        const id = req.params.id;
        const salvo = req.query.s;
        const carros = await CarroModel.find();
        if(id == undefined){
            res.render("carro/relatorio", {carros, salvo});
        }
}
    static async detalhar(req, res){
        const id = req.params.id;
        let encontrou = false;
        const carro = await CarroModel.find();
        for(const c of carro){
            if(id == c.id){
                encontrou = true;
                res.render("carro/detalhar", {c});
                break
            }
        }
        if(encontrou == false){
            res.send("Carro não encontrado");
        }
    }
    static cadastrarRender(req, res){
        res.render("carro/cadastrar");
    }
    static async cadastrar(req, res){
        const novoCarro = new CarroModel ({
             id: req.body.id,
             nome: req.body.nome,
             marca: req.body.marca,
             ano: req.body.ano
          })
          await novoCarro.save();
         res.redirect("/carros");
        }
}

module.exports = CarroController;