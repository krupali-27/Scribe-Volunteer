function saveAccount(){
    var mysql = require('mysql');
    
    var con = mysql.createConnection({
      host: "root",
      user: "root",
      password: "",
      database: "my_db"
    });
    
    con.connect(function(err) {
      if (err) throw err;
    console.log("connected");
    });
    
    var firstName = document.getElementById("firstName");
    var lastName = document.getElementById("lastName");
    var emailid = document.getElementById("emailid");
    var contactno = document.getElementById("contactno");
    var psw = document.getElementById("pass");
    
    
    
    var sql = "INSERT INTO handicap (Fname, Lname, emailid,contactno, Pass) VALUES ( '"+firstName+"','"+lastName+"','"+emailid+"', '"+contactno+"' ,'"+psw+"')";
    con.query(sql, function (err, result) {
        if (err) {
            throw err;
    
        }
    
        console.log(result.affectedRows + " record(s) updated");
      });
    }