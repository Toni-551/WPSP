function LoadSobe(){
    var jsonString;
     $.ajax({
         url: 'json.php',
         type: 'GET',
         dataType: 'text',
         async: false,
         data: { 
             "json_id": "get_all_rooms"
         },
         success: function (oData) {
             jsonString=oData;
             console.log(oData);
         },
         error: function (textStatus, errorThrown) {
             Success = false;//doesn't go here
             alert(errorThrown);
         }
     });
     var obj = JSON.parse(jsonString);
     tbody= $('#tbodi');
     var string="";
     obj.forEach(element => {
        var studenti="";
        element.Polje_studenata.forEach(student=>{studenti+=student.Ime+ " "+ student.Prezime+ ", "});
        string += "<tr><td>"+element.Id+"</td><td>"+ element.Naziv+"</td><td>"+element.Opis+"</td><td>"+element.Kat+"</td><td>"+studenti+"</td></tr>";
     });
     tbody.append(string);
     
 }