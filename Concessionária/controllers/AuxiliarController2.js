const AuxiliarModel = require("../models/AuxiliarModel");
const Auxiliar = require("../Auxiliar");
const VAuxiliares = [];


class AuxiliarController2{
    static async cadastrar(req, res){
        const novoAuxiliar = new AuxiliarModel ({
             id: req.body.id,
             nome: req.body.nome,
             idade: req.body.idade
          })
          await novoAuxiliar.save();
         res.redirect("/auxiliares");
        }
    static cadastrarRender(req, res){
            res.render("auxiliar/cadastrar");
    }
    static relatorio(req, res){
        res.render("auxiliar/relatorio", {VAuxiliares});
}
    static detalhar(req, res){
        const id = req.params.id;
        if (id != undefined){
            let encontrou = false;
            for (const c of VAuxiliares) {
                if(id == c.id){
                    encontrou = true;
                    res.render("auxiliar/detalhar", {c});
                    break;
                }
            }
        }else{
            res.render("auxiliar/relatorio");
        }
    }
}

module.exports = AuxiliarController2;