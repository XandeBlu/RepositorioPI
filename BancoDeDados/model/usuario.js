var conexao = require('../config/conexao.js')

var UsuarioSchema = conexao.Schema({
    nome:{type:String},
    sobrenome:{type:String},
    email:{type:String},
    senha:{type:String}
})

module.exports = conexao.model("Usuario", UsuarioSchema)