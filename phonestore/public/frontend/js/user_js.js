function dong_ho() {
    const d = new Date();
    date = d.toLocaleString("es-CL");
    document.getElementById('dong_ho').innerHTML = date;
}

function tat() {
    document.getElementById("message").classList.add("hidden");
}

function them_sp_gio_hang(id_nd, id_poduct) {
    if(id_nd=="") {
        alert('Đăng nhập đi thằng ông nội');
        location.href="/phonestore/login";
    } else {
        document.getElementById("load").classList.remove("hidden");
        so_luong = document.getElementById('so_luong').value;
        xml= new XMLHttpRequest();
        xml.onreadystatechange=function()
        {
            if(xml.readyState == 4) {
                document.getElementById("load").classList.add("hidden");
                document.getElementById("message").classList.remove("hidden");
                setTimeout(tat, 2000);
            }
        }
        url= 'http://localhost:8080/phonestore/product/add_cart/'+id_nd+'/'+id_poduct+'/'+so_luong;
        xml.open("GET", url, "false");
        xml.send();
    }
}

function reset_capcha(){
    var text = "";
    var possible = "ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789";
    for (var i = 0; i < 5; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    document.getElementById('ma_capcha').value = text;
    document.getElementById('ma_capcha_hidden').value = text;
}

function kt_email() {
    email = document.getElementById('email').value;
    if(email == '') {
        document.getElementById('error1').innerHTML = 'Vui lòng nhập email';
    } else {
        document.getElementById("load").classList.remove("hidden");
        xml= new XMLHttpRequest();
        xml.onreadystatechange=function()
        {
            if(xml.readyState == 4) {                              
                if(xml.responseText == 'sai') {
                    document.getElementById('error1').innerHTML = 'Email vừa nhập sai';
                } else {
                    document.getElementById("ma_xn").classList.remove("hidden");
                    document.getElementById("submit1").classList.add("hidden");                    
                }
                document.getElementById("load").classList.add("hidden");
            }
        }
        url= 'http://localhost:8080/phonestore/user/kt_email/'+email;
        xml.open("GET", url, "false");
        xml.send();
    }
}

function kt_ma_xn() {
    ma_xn = document.getElementById('mxn').value;
    email = document.getElementById('email').value;
    if(ma_xn == '') {
        document.getElementById('error2').innerHTML = 'Vui lòng nhập mã xác nhận';
    } else {
        document.getElementById("load").classList.remove("hidden");
        xml= new XMLHttpRequest();
        xml.onreadystatechange=function()
        {
            if(xml.readyState == 4) {                              
                if(xml.responseText == 'sai') {
                    document.getElementById('error2').innerHTML = 'Mã xác nhận sai';
                } else {
                    document.getElementById('mkhau').innerHTML = xml.responseText;
                }
                document.getElementById("load").classList.add("hidden");
            }
        }
        url= 'http://localhost:8080/phonestore/user/kt_ma_xn/'+ma_xn+'/'+email;
        xml.open("GET", url, "false");
        xml.send();
    }  
}

function them_sp_thanh_toan(list_cart) {
    check = document.getElementsByName('check[]');
    let tong = 0;
    sp_thanh_toan = [];
    for (i = 0; i < check.length; i++) {
        if(check[i].checked == true) {
            id_sp = list_cart[i]['id_sp'];
            sp_thanh_toan.push(id_sp);
            thanh_tien = document.getElementById('thanh_tien'+id_sp).value;
            tong = tong*1 + thanh_tien*1;
        }
    }
    tong = tong.toLocaleString('vi-VN');
    document.getElementById('tong_thanh_toan').innerHTML = 'Tổng thanh toán: '+tong+' VNĐ';
    console.log(sp_thanh_toan);
}

function chon_all(list_cart) {
    check = document.getElementsByName('check[]');
    for (i = 0; i < check.length; i++) {
        check[i].checked = true;
    }
    them_sp_thanh_toan(list_cart);
}

function bo_all(list_cart) {
    check = document.getElementsByName('check[]');
    for (i = 0; i < check.length; i++) {
        check[i].checked = false;
    }
    them_sp_thanh_toan(list_cart);
}

function up_sl(id_sp, don_gia, list_cart, sl_max) {
    document.getElementById("load").classList.remove("hidden");
    sl = document.getElementById('sl'+id_sp).value;
    if(sl=='' || sl<1) {
        sl=1;
        alert('Không được để số lượng trống hoặc nhập số âm');
        document.getElementById('sl'+id_sp).value = 1;        
    } else if(sl>sl_max) {
        sl=sl_max;
        alert('Chỉ còn '+sl_max+' sản phẩm trong kho!');
        document.getElementById('sl'+id_sp).value = sl_max;
    }
    xml= new XMLHttpRequest();
    xml.onreadystatechange=function()
    {
        if(xml.readyState == 4) {
            document.getElementById(id_sp).innerHTML = xml.responseText;
            document.getElementById('thanh_tien'+id_sp).value = sl*don_gia;
            them_sp_thanh_toan(list_cart);
            document.getElementById("load").classList.add("hidden");
        }
    }
    url= '/phonestore/cart/up_sl/'+sl+'/'+id_sp+'/'+don_gia;
    xml.open("GET", url, "false");
    xml.send();
}

// function kt_sp_gh(list_cart) {
//     for (i = 0; i < list_cart.length; i++) {
//         if(list_cart[i]['so_luong'] > list_cart[i]['SoLuong']) {
//             // console.log(list_cart[0]['id_sp']);
//             id_sp = list_cart[i]['id_sp'];
//             don_gia = list_cart[i]['DonGia'];
//             sl_max = list_cart[i]['SoLuong'];
//             up_sl(id_sp, don_gia, list_cart, sl_max);
//         }
//     }
// }

function xoa_sp_gh(id_nd, id_sp) {
    document.getElementById("load").classList.remove("hidden");
    xml= new XMLHttpRequest();
    xml.onreadystatechange=function()
    {
        if(xml.readyState == 4) {
            document.getElementById('content').innerHTML = xml.responseText;
            document.getElementById("load").classList.add("hidden");
        }
    }
    url= 'http://localhost:8080/phonestore/cart/xoa_sp/'+id_nd+'/'+id_sp;
    xml.open("GET", url, "false");
    xml.send();
}

function mua_hang() {
    if(typeof sp_thanh_toan === 'undefined' || sp_thanh_toan.length == 0) {
        alert('Vui lòng chọn sản phẩm thanh toán');
    }
    else {
        location.href= "/phonestore/thanh_toan/view/"+sp_thanh_toan;
    }
}

function tinh_phi_ship() {
    id_tinh = document.getElementById('id_tinh').value;
    if(id_tinh != 15) {
        van_chuyen = 35000;        
    } else {
        van_chuyen = 20000;
    }
    document.getElementById('ship').innerHTML = van_chuyen.toLocaleString('vi-VN')+' VNĐ';

    gia = document.getElementById('tong_tien_hang').value;
    km = document.getElementById('km').value;

    document.getElementById('tong_cong').value = gia - km + van_chuyen;
    document.getElementById('tong_cong_view').innerHTML = (gia - km + van_chuyen).toLocaleString('vi-VN')+' VNĐ';
}

function phan_trang(i, mes) {
    xml= new XMLHttpRequest();
    xml.onreadystatechange=function()
    {
        if(xml.readyState == 4) {
            document.getElementById('trang').innerHTML = xml.responseText;
        }
    }
    url= 'http://localhost:8080/phonestore/phan_trang/'+i+'/'+mes;
    xml.open("GET", url, "false");
    xml.send();
}

function bo_loc() {
    sx = document.getElementById('sx').value;
    gia = document.getElementById('gia').value;
    ram = document.getElementById('ram').value;
    rom = document.getElementById('rom').value;
    tu_khoa = document.getElementById('tu_khoa').value;

    xml= new XMLHttpRequest();
    xml.onreadystatechange=function()
    {
        if(xml.readyState == 4) {
            document.getElementById('trang').innerHTML = xml.responseText;
        }
    }
    url= 'http://localhost:8080/phonestore/bo_loc/'+sx+'/'+gia+'/'+ram+'/'+rom+'/'+tu_khoa;
    xml.open("GET", url, "false");
    xml.send();
}

function kt_dang_nhap(id_nd) {
    if(id_nd == '') {
        alert('Vui lòng đăng nhập');
        document.getElementById('viet_danh_gia').value = '';
        return false;
    } else {
        return true;
    }
}

function danh_gia(id_nd, id_sp) {
    danh_gia = $("#viet_danh_gia").val();
    if(danh_gia == '') {
        alert('Vui lòng nhập nội dung đánh giá');
    } else {
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url : "/phonestore/danh_gia",
            type : "post",
            dataType:"text",
            data : {
                id_nd : id_nd,
                id_sp : id_sp,
                danh_gia : danh_gia,
                _token : _token
            },
            success : function (result){
                $('#vung_danh_gia').html(result);

            }
        });
    }
}

function tl_danh_gia(id_nd, id_danh_gia) {
    if(kt_dang_nhap(id_nd)){
        document.getElementById(id_danh_gia).classList.remove("hidden");
    }
}

function gui_tl_danh_gia(id_nd, id_sp, id_danh_gia) {
    danh_gia = document.getElementById('tl'+id_danh_gia).value;
    if(danh_gia == '') {
        alert('Vui lòng nhập nội dung đánh giá');
    } else {
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url : "/phonestore/tl_danh_gia",
            type : "post",
            dataType:"text",
            data : {
                id_nd : id_nd,
                id_sp : id_sp,
                id_danh_gia : id_danh_gia,
                danh_gia : danh_gia,
                _token : _token
            },
            success : function (result){
                $('#vung_danh_gia').html(result);

            }
        });
    }
}

function doi_cua_so(so) {
    document.getElementById('cua_so_1').classList.remove("block");
    document.getElementById('cua_so_2').classList.remove("block");
    document.getElementById('cua_so_3').classList.remove("block");
    document.getElementById('cua_so_4').classList.remove("block");
    document.getElementById('cua_so_5').classList.remove("block");
    document.getElementById('cua_so_6').classList.remove("block");

    document.getElementById('cua_so_'+so).classList.add("block");
}