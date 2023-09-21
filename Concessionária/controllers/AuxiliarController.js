const AuxiliarModel = require("../models/AuxiliarModel");

class AuxiliarController{
    static async relatorio(req, res){
        const id = req.params.id;
        const salvo = req.query.s;
        const auxiliares = await AuxiliarModel.find();
        if(id == undefined){
            res.render("auxiliar/relatorio", {auxiliares, salvo});
        }
}
    static async detalhar(req, res){
        const id = req.params.id;
        let encontrou = false;
        const auxiliar = await AuxiliarModel.find();
        for(const a of auxiliar){
            if(id == a.id){
                encontrou = true;
                res.render("auxiliar/detalhar", {a});
                break
            }
        }
        if(encontrou == false){
            res.send("Auxiliar não encontrado");
        }
    }
    static cadastrarRender(req, res){
        res.render("auxiliar/cadastrar");
    }
    static async cadastrar(req, res){
        const novoAuxiliar = new AuxiliarModel ({
             id: req.body.id,
             nome: req.body.nome,
             idade: req.body.idade
          })
          await novoAuxiliar.save();
         res.redirect("/auxiliares");
        }
}

module.exports = AuxiliarController;