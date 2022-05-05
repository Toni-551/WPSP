function GetModal(sHref) {
    console.log(sHref);
    $('#modals').removeData('bs.modal');
    $('#modals').modal
    ({
    remote:sHref,
    show: true
    });
}