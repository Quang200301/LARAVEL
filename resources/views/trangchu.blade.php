@php $gio = gmdate("H",time()+3600*7);
@endphp

@if( $gio > 12)
chào buổi sáng
@elseif($gio > 13)
chào buổi chiều

@else
chào buổi tối

@endif



