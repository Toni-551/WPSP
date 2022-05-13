function LoadStudenti(){
   var jsonString;
    $.ajax({
        url: 'json.php',
        type: 'GET',
        dataType: 'text',
        async: false,
        data: { 
            "json_id": "get_all_students"
        },
        success: function (oData) {
            jsonString=oData;
            console.log(oData);
        },
        error: function (textStatus, errorThrown) {
            Success = false;
            alert(errorThrown);
        }
    });
    var obj = JSON.parse(jsonString);
    tbody= $('#tbodi');
    var string="";
    obj.forEach(element => {
        string += "<tr><td>"+element.JMBAG+"</td><td>"+ element.Ime+"</td><td>"+element.Prezime+"</td><td>"+element.Adresa+"</td><td>"+element.Postanski_broj+"</td><td>"+element.Grad+"</td><td>"+element.Godina_studija+"</td><td>"+element.Ostvareni_ECTS_bodovi+"</td><td>"+element.Prosjek_ocjena+"</td><td>"+element.Soba.Naziv+"</td></tr>";
    });
    tbody.append(string);
    
}