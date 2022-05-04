<?php
if(isset($_GET['modal_id'])){
switch ($_GET['modal_id']) {
    case 'new_employee':
        echo'<div class="modal-body" style="padding:0">
        <div class="modal-header" style="margin-bottom:25px;">
        <button style="color:white" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="color:white">Title</h4>
        </div>
        <form class="form-horizontal">
        <div class="form-group">
        <label class="col-md-3 control-label">Ime</label>
        <div class="col-md-8"><input type="text" id="ime" class="form-control" placeholder="" /></div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label">Prezime</label>
        <div class="col-md-8"><input type="text" id="prezime" class="form-control" placeholder="" /></div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label">spol</label>
        <div class="col-md-8"><input type="text" id="spol" class="form-control" placeholder="" /></div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label">Datum Rođenja</label>
        <div class="col-md-8"><input type="date" id="rdendan" class="form-control" placeholder="" /></div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label">Datum zapošljenja</label>
        <div class="col-md-8"><input type="date" id="zaposljenja" class="form-control" placeholder="" /></div>
        </div>
        </form>
        <div class="modal-footer">
        <button type="button" class="btn btn-success btn-s" onclick="">Spremi</button>
        <button type="button" class="btn btn-success btn-s" data-dismiss="modal">Zatvori</button>
        </div>
       </div>';
        break;
    case 'edit_employee':
        echo'<div class="modal-body" style="padding:0">
        <div class="modal-header" style="margin-bottom:25px;">
        <button style="color:white" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="color:white">Title</h4>
        </div>
        <form class="form-horizontal">
        <div class="form-group">
        <label class="col-md-3 control-label">Ime</label>
        <div class="col-md-8"><input type="text" id="ime" value="'.$_GET['ime'].'" class="form-control" placeholder="" /></div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label">Prezime</label>
        <div class="col-md-8"><input type="text" value="'.$_GET['prezime'].'" id="prezime" class="form-control" placeholder="" /></div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label">spol</label>
        <div class="col-md-8"><input type="text" id="spol" value="'.$_GET['spol'].'" class="form-control" placeholder="" /></div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label">Datum Rođenja</label>
        <div class="col-md-8"><input type="date" id="rdendan" value="'.$_GET['rodemdam'].'" class="form-control" placeholder="" /></div>
        </div>
        </form>
        <div class="modal-footer">
        <button type="button" class="btn btn-success btn-s" onclick="">Spremi</button>
        <button type="button" class="btn btn-success btn-s" data-dismiss="modal">Zatvori</button>
        </div>
       </div>';
        break;
    case 'delete_employee':
        echo'<div class="modal-body" style="padding:0">
        <div class="modal-header" style="margin-bottom:25px;">
        <button style="color:white" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="color:white">Title</h4>
        </div>
        <form class="form-horizontal">
        <div class="form-group">
        <label class="col-md-3 control-label">Ime</label>
        <div class="col-md-8"><input type="text" id="ime" value="'.$_GET['ime'].'" class="form-control" placeholder="" disabled /></div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label">Prezime</label>
        <div class="col-md-8"><input type="text" value="'.$_GET['prezime'].'" id="prezime" class="form-control" placeholder="" disabled/></div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label">spol</label>
        <div class="col-md-8"><input type="text" id="spol" value="'.$_GET['spol'].'" class="form-control" placeholder="" disabled/></div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label">Datum Rođenja</label>
        <div class="col-md-8"><input type="date" id="rdendan" value="'.$_GET['rodemdam'].'" class="form-control" placeholder=""disabled /></div>
        </div>
        </form>
        <div class="modal-footer">
        <button type="button" class="btn btn-success btn-s" onclick="">Obriši</button>
        <button type="button" class="btn btn-success btn-s" data-dismiss="modal">Zatvori</button>
        </div>
       </div>';
        break;
    case 'new_department':
        echo'<div class="modal-body" style="padding:0">
        <div class="modal-header" style="margin-bottom:25px;">
        <button style="color:white" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="color:white">Title</h4>
        </div>
        <form class="form-horizontal">
        <div class="form-group">
        <label class="col-md-3 control-label">Label</label>
        <div class="col-md-8"><input type="text" class="form-control" placeholder="" /></div>
        </div>
        </form>
        <div class="modal-footer">
        <button type="button" class="btn btn-success btn-s" onclick="">Spremi</button>
        <button type="button" class="btn btn-success btn-s" data-dismiss="modal">Zatvori</button>
        </div>
       </div>';
        break;
    case 'edit_department':
        echo'<div class="modal-body" style="padding:0">
        <div class="modal-header" style="margin-bottom:25px;">
        <button style="color:white" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="color:white">Title</h4>
        </div>
        <form class="form-horizontal">
        <div class="form-group">
        <label class="col-md-3 control-label">Label</label>
        <div class="col-md-8"><input type="text" class="form-control" placeholder="" /></div>
        </div>
        </form>
        <div class="modal-footer">
        <button type="button" class="btn btn-success btn-s" onclick="">Spremi</button>
        <button type="button" class="btn btn-success btn-s" data-dismiss="modal">Zatvori</button>
        </div>
       </div>';
        break;
    case 'delete_deparmtent':
        echo'<div class="modal-body" style="padding:0">
        <div class="modal-header" style="margin-bottom:25px;">
        <button style="color:white" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="color:white">Title</h4>
        </div>
        <form class="form-horizontal">
        <div class="form-group">
        <label class="col-md-3 control-label">Label</label>
        <div class="col-md-8"><input type="text" class="form-control" placeholder="" /></div>
        </div>
        </form>
        <div class="modal-footer">
        <button type="button" class="btn btn-success btn-s" onclick="">Spremi</button>
        <button type="button" class="btn btn-success btn-s" data-dismiss="modal">Zatvori</button>
        </div>
       </div>';
        break;
    default:
        break;
    
}
}else{
    $statement="";
    echo "modal_id is not set";
}
?>