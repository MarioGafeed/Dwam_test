@foreach($pcats as $pcat)
  <li class="mg-nav-item nav-link"> <a href="{{ url("/catposts/show/{$pcat->id}") }}">
      @if(GetLanguage() == 'en')
      {{json_decode($pcat->title)->en}}
      @else
      {{json_decode($pcat->title)->ar}}
      @endif
     </a></li>
@endforeach
