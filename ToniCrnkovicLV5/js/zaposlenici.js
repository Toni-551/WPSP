var obj;
function LoadEmployees(){
    var jsonstring;
    $.ajax({
        url: 'json.php',
        type: 'GET',
        dataType: 'text',
        async: false,
        data: { 
            "json_id": "get_all_employees"
        },
        success: function (oData) {
            jsonstring=oData;
        },
        error: function (textStatus, errorThrown) {
            Success = false;//doesn't go here
            alert(errorThrown);
        }
    });
    obj = JSON.parse(jsonstring);
    tbody= $('#tbodi');
    var string="";
    obj.forEach(element => {
        string += "<tr><td>"+element.emp_no+"</td><td>"+ element.birth_date+"</td><td>"+element.first_name+"</td><td>"+element.last_name+"</td><td>"+element.gender+"</td><td>"+element.hire_date+"</td><td><span id='edit' class='glyphicon glyphicon-pencil' onclick=\"GetModal('modals.php?modal_id=edit_employee&ime="+element.first_name+"&prezime="+element.last_name+"&ime="+element.first_name+"&spol="+element.gender+"&rodemdam="+element.birth_date+"')\"></span></td><td><span class='glyphicon glyphicon-remove' onclick=\"GetModal('modals.php?modal_id=delete_employee&ime="+element.first_name+"&prezime="+element.last_name+"&ime="+element.first_name+"&spol="+element.gender+"&rodemdam="+element.birth_date+"')\"></span></td></tr>"
    
    });
    tbody.append(string);
    
}
$(document).ready(LoadEmployees());

/*
function dodajUmodal(id){
    obj.forEach(element=>{
        if(id==element.emp_no){
            alert(element.first_name);
            $('#ime').attr("placeholder", element.first_name);
        }
    });
}*/