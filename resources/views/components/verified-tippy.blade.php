<div x-data="{ open: false}">
    <div  class="tk-hastippy" x-on:mouseover="open = true" x-on:mouseleave="open = false">
        <i class="fa-solid fa-circle-check"></i> 
        <span class="tk-tippycontent" x-show="open" style="display: none;">
            {{__('general.verified_user')}}
        </span>
    </div>
</div>