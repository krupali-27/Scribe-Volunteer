var mysql = require('mysql');
    
    var con = mysql.createConnection({
      host: "root",
      user: "root",
      password: "",
      database: "my_db"
    });

    module.exports=con;