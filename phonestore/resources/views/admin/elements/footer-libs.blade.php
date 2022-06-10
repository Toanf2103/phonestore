<script src="{{asset('public/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backend/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('public/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('public/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('public/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('public/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('public/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
{{--<script src="{{asset('public/backend/js/demo.js')}}"></script>--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/backend/js/pages/dashboard2.js')}}"></script>
{{--<script type="text/javascript">--}}
{{--    $(document).ready(function (){--}}

{{--        $('#sort').on('change', function (){--}}
{{--            var url = $(this).val();--}}
{{--            // alert(url);--}}
{{--            if(url){--}}
{{--                window.location = url;--}}
{{--            }--}}
{{--            return false;--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--<script type="text/javascript">--}}
{{--    function detailOrder() {--}}
{{--        $('#detailOrder').modal('show');--}}
{{--    }--}}
{{--</script>--}}
<script type="text/javascript">
    function sortStatus_Order() {

        var input, table, tr, td, i, txtValue;
        input = document.getElementById("sortStatus").value.toUpperCase();
        table = document.getElementById("tbOrder");
        tr = table.getElementsByTagName("tr");
        // alert(input);
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[8];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(input) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function sortStatus_Product() {

        var input, table, tr, td, i, txtValue;
        input = document.getElementById("sortStatus_Pr").value.toUpperCase();
        table = document.getElementById("tbProduct");
        tr = table.getElementsByTagName("tr");
        // alert(input);
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[8];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(input) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function sortCate_Product() {

        var input, table, tr, td, i, txtValue;
        input = document.getElementById("sortCate_Pr").value.toUpperCase();
        table = document.getElementById("tbProduct");
        tr = table.getElementsByTagName("tr");
        // alert(input);
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[3];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(input) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function sortBrand_Product() {
        var input, table, tr, td, i, txtValue;
        input = document.getElementById("sortBrand_Pr").value.toUpperCase();
        table = document.getElementById("tbProduct");
        tr = table.getElementsByTagName("tr");
        // alert(input);
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[4];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(input) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function delete_product(MaSP, MaHD) {
        xml = new XMLHttpRequest();
        xml.onreadystatechange = function () {
            if (xml.readyState == 4) {
                document.getElementById('detail_order').innerHTML = xml.responseText;
            }
        }
        url = 'http://localhost/phonestore/admin/order/del_product/' + MaSP + '/' + MaHD;
        xml.open("GET", url, "false");
        xml.send();
    }

    function change_sl(MaSP, MaHD) {
        var sl = document.getElementById(MaSP).value;
        if (sl < 1){
            sl =1;
        }
        // alert(sl);
        xml = new XMLHttpRequest();
        xml.onreadystatechange = function () {
            if (xml.readyState == 4) {
                document.getElementById('detail_order').innerHTML = xml.responseText;
            }
        }
        url = 'http://localhost/phonestore/admin/order/detail/' + MaSP + '/' + MaHD + '/' + sl;
        xml.open("GET", url, "false");
        xml.send();
    }
</script>
