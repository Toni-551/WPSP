var obj;
function LoadEmployees(){
    var jsonString;
    $.ajax({
        url: 'json.php',
        type: 'GET',
        dataType: 'text',
        async: false,
        data: { 
            "json_id": "get_all_employees"
        },
        success: function (oData) {
            jsonString=oData;
        },
        error: function (textStatus, errorThrown) {
            Success = false;//doesn't go here
            alert(errorThrown);
        }
    });
    obj = JSON.parse(jsonString);
    tbody= $('#tbodi');
    var string="";
    obj.forEach(element => {
        string += "<tr><td>"+element.emp_no+"</td><td>"+ element.birth_date+"</td><td>"+element.first_name+"</td><td>"+element.last_name+"</td><td>"+element.gender+"</td><td>"+element.hire_date+"</td><td><span id='edit' class='glyphicon glyphicon-pencil' onclick=\"GetModal('modals.php?modal_id=edit_employee&id="+element.emp_no+"&ime="+element.first_name+"&prezime="+element.last_name+"&ime="+element.first_name+"&spol="+element.gender+"&rodemdam="+element.birth_date+"')\"></span></td><td><span class='glyphicon glyphicon-remove' onclick=\"GetModal('modals.php?modal_id=delete_employee&id="+element.emp_no+"&ime="+element.first_name+"&prezime="+element.last_name+"&ime="+element.first_name+"&spol="+element.gender+"&rodemdam="+element.birth_date+"')\"></span></td></tr>"
    
    });
    tbody.append(string);
    
}
$(document).ready(LoadEmployees());
function addNewEmployee(){
    var id=parseInt(obj[0].emp_no)+1;
    $.ajax({
        url: 'actions.php',
        type: 'POST',
        data:
        {
            "choice": "NewEmployee",
            "id": id,
            "birth": $('#rdendan').val(),
            "name": $('#ime').val(),
            "lastName": $('#prezime').val(),
            "gender": $('#spol').val(),
            "hireDate": $('#zaposljenja').val()
        },
        success: function (oData)
        {
            if(oData != ""){
                console.log(oData);
            }else{
                location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus, exception) {
            console.log("Ajax failure\n" + exception);
        },
        async: true
       });
       
}
function UpdateEmployee(nEmployeeID){
    $.ajax({
        url: 'actions.php',
        type: 'POST',
        data:
        {
            "choice": "UpdateEmployee",
            "id": nEmployeeID,
            "birth": $('#rdendan').val(),
            "name": $('#ime').val(),
            "lastName": $('#prezime').val(),
            "gender": $('#spol').val(),
            "hireDate": $('#zaposljenja').val()
        },
        success: function (oData)
        {
            if(oData != ""){
                console.log(oData);
            }else{
                location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus, exception) {
            console.log("Ajax failure\n" + exception);
        },
        async: true
       });
}
function DeleteEmployee(nEmployeeID) {
    $.ajax({
        url: 'actions.php',
        type: 'POST',
        data:
        {
            "choice": "DeleteEmployee",
            "id": nEmployeeID
        },
        success: function (oData)
        {
            if(oData != ""){
                console.log(oData);
            }else{
                location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus, exception) {
            console.log("Ajax failure\n" + exception);
        },
        async: true
       });
}
