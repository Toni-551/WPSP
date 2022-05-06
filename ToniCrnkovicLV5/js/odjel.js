var obj;
function LoadDepartments(){
    var jsonString;
    $.ajax({
        url: 'json.php',
        type: 'GET',
        dataType: 'text',
        async: false,
        data: { 
            "json_id": "get_all_departments"
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
        string += "<tr><td>"+element.dept_no+"</td><td>"+element.dept_name+"</td><td><span id='edit' class='glyphicon glyphicon-pencil' onclick=\"GetModal('modals.php?modal_id=edit_department&id="+element.dept_no+"&ime="+element.dept_name.replace(/\s/g, "+")+"')\"></span></td><td><span class='glyphicon glyphicon-remove' onclick=\"GetModal('modals.php?modal_id=delete_deparmtent&id="+element.dept_no+"&ime="+element.dept_name.replace(/\s/g, "+")+"')\"></span></td></tr>"
    
    });
    tbody.append(string);
    
}
$(document).ready(LoadDepartments());

function addNewDepartmente(){
    var no=obj[obj.length-1].dept_no.substring(1);
    var id=parseInt(no)+1;
    if (id<10) {
        id="d00"+id;
    }else if(id<99){
        id="d0"+id;
    }else{
        id="d"+id;
    }
    console.log(id);
    $.ajax({
        url: 'actions.php',
        type: 'POST',
        data:
        {
            "choice": "NewDepartmente",
            "id": id,
            "name": $('#depname').val()
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
function UpdateDepartment(nDepartmenteID){
    $.ajax({
        url: 'actions.php',
        type: 'POST',
        data:
        {
            "choice": "UpdateDepartmente",
            "id": nDepartmenteID,
            "name": $('#depname').val()
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
function DeleteDepartment(nDepartmenteID) {
    $.ajax({
        url: 'actions.php',
        type: 'POST',
        data:
        {
            "choice": "DeleteDepartmente",
            "id": nDepartmenteID
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

