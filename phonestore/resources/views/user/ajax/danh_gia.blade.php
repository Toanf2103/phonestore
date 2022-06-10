 @foreach($danh_gia as $value)
    <div class="danh_gia_cha">
        <span class="avata">{{ $value->Ten[0] }}</span>
        <span class="ten_nd">{{ $value->Ho.' '.$value->Ten }}</span><br>
        <span class="noi_dung">{{ $value->noi_dung }}</span>
        <button onclick="tl_danh_gia('{{ Session()->get('id') }}', {{ $value->id_danh_gia }})">Trả lời</button>

        <div id="{{ $value->id_danh_gia }}" class="flex hidden">
            @csrf
            <textarea id="{{ 'tl'.$value->id_danh_gia }}" placeholder="Viết câu trả lời..."></textarea>
            <button onclick="gui_tl_danh_gia('{{ Session()->get('id') }}', {{ $value->id_sp }}, {{ $value->id_danh_gia }})">Gửi</button>
        </div>

        <?php 
            $danh_gia_con = DB::table('danh_gia_sp')
                    ->join('nguoidung', 'danh_gia_sp.id_nd', 'nguoidung.id')
                    ->where('id_tra_loi', $value->id_danh_gia)
                    ->orderBy('id_danh_gia')
                    ->get();
        ?>
        @foreach($danh_gia_con as $value1)
            <div class="danh_gia_con">
                @if($value1->Quyen_id==1)
                    <span class="avata">{{ $value1->Ten[0] }}</span>
                @else
                    <img class="avata avata_admin" src="{{asset('public/imgs/logo_title.png')}}">
                @endif
                <span class="ten_nd">{{ $value1->Ho.' '.$value1->Ten }}</span>
                @if($value1->Quyen_id!=1)
                    <span class="quyen">Quản trị viên</span>
                @endif
                <br><span class="noi_dung">{{ $value1->noi_dung }}</span>
            </div>
        @endforeach
    </div>
@endforeach