function chkTenLoai(elementTenLoai){
    if(elementTenLoai.value ==""){
        elementTenLoai.focus();
        elementTenLoai.style.outlineColor = "red";
        alert("Vui lòng nhập tên loại");
        return false;
    }
    return true;
}

function hopLe(){
    var ten_loai = document.forms[0].ten_loai;
    if(chkTenLoai(ten_loai)){
        return true;
    }
    return false;
}