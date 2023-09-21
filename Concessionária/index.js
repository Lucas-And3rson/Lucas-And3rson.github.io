const express = require('express');
const app = express();


const mongoose = require("mongoose");
mongoose.connect("mongodb+srv://lucas:TV8wt2OrhQ4KhfIX@cluster0.kkoixjy.mongodb.net/?retryWrites=true&w=majority");

app.set("view engine", "ejs");
app.use(express.urlencoded({ extended: true }));
app.use(express.static("public"));

const CarroRoutes = require('./routes/CarroRoutes');
app.use(CarroRoutes);
const AuxiliarRoutes = require('./routes/AuxiliarRoutes');
app.use(AuxiliarRoutes);

    app.get("/", function(req, res){
        res.render("index"); 
    });

app.listen("2005", function(){
    console.log("Run");
});