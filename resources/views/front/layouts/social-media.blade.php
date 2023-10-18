@if(!is_null($_setting->facebook)
    || !is_null($_setting->twitter)
    || !is_null($_setting->instagram)
    || !is_null($_setting->linkedin)
    || !is_null($_setting->youtube))
<div class="social_link">
    @if(!is_null($_setting->facebook))
        <a href="{{ $_setting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
    @endif
    @if(!is_null($_setting->twitter))
    <a href="{{ $_setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
    @endif
    @if(!is_null($_setting->instagram))
    <a href="{{ $_setting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
    @endif
    @if(!is_null($_setting->linkedin))
    <a href="{{ $_setting->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a>
    @endif
    @if(!is_null($_setting->youtube))
    <a href="{{ $_setting->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
    @endif
</div>
@endif
