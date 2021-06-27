@foreach($vcats as $vcat)
  <li class="mg-nav-item nav-link"> <a href="{{ url("/vcatposts/show/{$vcat->id}") }}">
      @if(GetLanguage() == 'en')
      {{json_decode($vcat->title)->en}}
      @else
      {{json_decode($vcat->title)->ar}}
      @endif
     </a>
   </li>
@endforeach
