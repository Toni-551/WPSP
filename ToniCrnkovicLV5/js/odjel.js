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
